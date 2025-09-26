<?php

namespace App\Http\Controllers\Billing;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\QueryException;
use Symfony\Component\HttpFoundation\Response;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        // 1) Validate request
        $validator = Validator::make($request->all(), [
            'product_id' => 'required',
            'email'      => 'required|email',
            'name'       => 'nullable|string|max:255',
            'password'   => 'required|string|min:8',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'message' => 'Validation failed.',
                'errors'  => $validator->errors(),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $data = $validator->validated();

        // 2) Ensure product exists and is active
        $product = Product::whereKey($data['product_id'])
            ->where('is_active', true)
            ->first();

        if (! $product) {
            return response()->json([
                'message' => 'Product not found or is inactive.',
            ], Response::HTTP_NOT_FOUND);
        }

        // 3) Pre-check: existing user (global)
        if (User::where('email', $data['email'])->exists()) {
            return response()->json([
                'message' => 'Email already registered.',
                'errors'  => ['email' => ['A user with this email already exists.']],
            ], Response::HTTP_CONFLICT);
        }

        // 4) Pre-check: existing customer for the product
        if (Customer::where('product_id', $data['product_id'])
            ->where('email', $data['email'])
            ->exists()) {
            return response()->json([
                'message' => 'Customer already exists for this product.',
                'errors'  => ['email' => ['Customer with this email already exists for the given product.']],
            ], Response::HTTP_CONFLICT);
        }

        // 5) Create inside a transaction and handle DB exceptions (race conditions)
        try {
            $payload = DB::transaction(function () use ($data) {
                $user = User::create([
                    'name'     => $data['name'] ?? '',
                    'email'    => $data['email'],
                    'password' => Hash::make($data['password']),
                ]);

                $customer = Customer::create([
                    'product_id' => $data['product_id'],
                    'email'      => $data['email'],
                    'name'       => $data['name'] ?? null,
                    'user_id'    => $user->id,
                ]);

                return ['user' => $user, 'customer' => $customer];
            });

            return response()->json([
                'message'  => 'Customer and user account created successfully.',
                'customer' => [
                    'id'         => $payload['customer']->id,
                    'email'      => $payload['customer']->email,
                    'name'       => $payload['customer']->name,
                    'product_id' => $payload['customer']->product_id,
                    'user_id'    => $payload['customer']->user_id,
                    'created_at' => $payload['customer']->created_at,
                ],
                'user' => [
                    'id'    => $payload['user']->id,
                    'name'  => $payload['user']->name,
                    'email' => $payload['user']->email,
                ],
            ], Response::HTTP_CREATED);

        } catch (QueryException $e) {
            // DB constraint violation - likely duplicate unique index (race condition)
            $sqlState = $e->errorInfo[0] ?? null; // vendor-specific
            $errorCode = $e->errorInfo[1] ?? null; // MySQL error code often here

            // Common unique-violation codes: MySQL 1062, Postgres 23505
            if (in_array($errorCode, [1062, 23505]) || $sqlState === '23505') {
                $msg = 'Duplicate resource.';
                $dbMessage = $e->getMessage();

                if (str_contains($dbMessage, 'users') || str_contains($dbMessage, 'email')) {
                    $msg = 'A user with this email already exists.';
                } else {
                    $msg = 'Customer with this email already exists for the given product.';
                }

                return response()->json([
                    'message' => $msg,
                ], Response::HTTP_CONFLICT);
            }

            Log::error('QueryException while creating customer/user', [
                'exception' => $e,
                'payload'   => $data,
            ]);

            return response()->json([
                'message' => 'Database error while creating customer.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        } catch (\Throwable $e) {
            Log::error('Unexpected error while creating customer/user', [
                'exception' => $e,
                'payload'   => $data,
            ]);

            return response()->json([
                'message' => 'An unexpected error occurred.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }}
