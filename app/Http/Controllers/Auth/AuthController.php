<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;
class AuthController extends Controller
{
    /**
     * POST /api/login
     * Authenticate user and return token.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if (! $user || ! Hash::check($credentials['password'], $user->password)) {
            return response()->json([
                'message' => 'Invalid credentials.'
            ], Response::HTTP_UNAUTHORIZED);
        }

        $token = $user->createToken('@@dev12apiToken991')->plainTextToken;

        // ✅ Load customer with subscriptions + plan
        $customer = Customer::with(['subscriptions.plan'])
            ->where('user_id', $user->id)
            ->first();

        return response()->json([
            'message' => 'Login successful.',
            'user' => [
                'id'    => $user->id,
                'name'  => $user->name,
                'email' => $user->email,
                'role'  => $user->role ?? 'customer',
            ],
            'customer' => $customer ? [
                'id'         => $customer->id,
                'email'      => $customer->email,
                'name'       => $customer->name,
                'product_id' => $customer->product_id,
                'subscriptions' => $customer->subscriptions->map(function ($sub) {
                    return [
                        'id'                   => $sub->id,
                        'status'               => $sub->status,
                        'valid_until'          => $sub->valid_until,
                        'credits_remaining'    => $sub->credits_remaining,
                        'credits_reset_at'     => $sub->credits_reset_at,
                        'plan' => $sub->plan ? [
                            'id'   => $sub->plan->id,
                            'name' => $sub->plan->name,
                            'price'=> $sub->plan->price,
                        ] : null,
                    ];
                }),
            ] : null,
            'token' => $token,
        ], Response::HTTP_OK);
    }
    /**
     * POST /api/logout
     * Revoke current user’s token.
     */
    public function logout(Request $request)
    {
        try {
            $user = $request->user();

            // If no user is authenticated (token invalid or already revoked)
            if (! $user) {
                return response()->json([
                    'message' => 'Unauthenticated.'
                ], Response::HTTP_UNAUTHORIZED);
            }

            $token = $user->currentAccessToken();

            if (! $token) {
                return response()->json([
                    'message' => 'No active session found.'
                ], Response::HTTP_BAD_REQUEST);
            }

            $token->delete();

            return response()->json([
                'message' => 'Logged out successfully.'
            ], Response::HTTP_OK);

        } catch (\Throwable $e) {
            Log::error('Error while logging out', [
                'exception' => $e,
                'user_id'   => $request->user()->id ?? null,
            ]);

            return response()->json([
                'message' => 'Unable to logout.'
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }}
