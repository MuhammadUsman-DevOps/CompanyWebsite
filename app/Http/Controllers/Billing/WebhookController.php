<?php

namespace App\Http\Controllers\Billing;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Plan;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
class WebhookController extends Controller
{
    public function handlePaddleWebhook(Request $request)
    {
//        try {
            $payload = $request->all();

            // ✅ Only handle transaction.completed events
            if (($payload['event_type'] ?? null) !== 'transaction.completed') {
                return response()->json(['message' => 'Event ignored'], Response::HTTP_OK);
            }

            $data = $payload['data'] ?? [];
            $customData = $data['custom_data'] ?? [];
            $email = $customData['email'] ?? null;

            if (! $email) {
                return response()->json(['message' => 'Email not found in webhook'], Response::HTTP_BAD_REQUEST);
            }

            $productId = $data['items'][0]['price']['product_id'] ?? null;
            $planExternalId = $data['items'][0]['price']['id'] ?? null;

            // ✅ Ensure product exists
            $product = Product::where('payment_gateway_id', $productId)->first();
            if (! $product) {
                return response()->json(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
            }

            // ✅ Ensure plan exists
            $plan = Plan::where('paddle_plan_id', $planExternalId)->first();
            if (! $plan) {
                return response()->json(['message' => 'Plan not found'], Response::HTTP_NOT_FOUND);
            }

            // ✅ Find or create Customer
            $customer = Customer::where('product_id', $product->id)
                ->where('email', $email)
                ->first();

            if (! $customer) {
                // Create User
//                $user = User::create([
//                    'name'     => $customData['name'] ?? '',
//                    'email'    => $email,
//                    'password' => Hash::make(Str::random(12)), // random password
//                ]);

                $customer = Customer::create([
                    'product_id' => $product->id,
                    'email'      => $email,
                    'name'       => $customData['name'] ?? '',
//                    'user_id'    => $user->id,
                ]);
            }
        $validUntil = null;

        if (! empty($data['billed_at'])) {
            $billedAt = \Carbon\Carbon::parse($data['billed_at']);

            if ($plan->interval === 'monthly') {
                $validUntil = $billedAt->copy()->addMonth();
            } elseif ($plan->interval === 'yearly') {
                $validUntil = $billedAt->copy()->addYear();
            }
            // if interval === 'one_time', keep null (no expiry)
        }
            // ✅ Create Subscription
            $subscription = Subscription::create([
                'customer_id'            => $customer->id,
                'plan_id'                => $plan->id,
                'paddle_subscription_id' => $data['invoice_id'] , //to be renamed to invoice_id
                'status'                 => 'active',
                'valid_until'            => $validUntil, // adjust depending on Paddle response
                'credits_remaining'      => $plan->credits_per_cycle ?? null,
                'credits_reset_at'       => null,
            ]);

            return response()->json([
                'message'      => 'Subscription created successfully',
                'customer_id'  => $customer->id,
                'subscription' => $subscription,
            ], Response::HTTP_CREATED);

//        } catch (\Throwable $e) {
//            Log::error('Error processing Paddle webhook', [
//                'exception' => $e,
//                'payload'   => $request->all(),
//            ]);
//
//            return response()->json([
//                'message' => 'Error processing webhook',
//                'exception' => $e,
//
//            ], Response::HTTP_INTERNAL_SERVER_ERROR);
//        }
    }
}
