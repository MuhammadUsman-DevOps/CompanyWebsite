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
{public function handlePaddleWebhook(Request $request)
    {
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
        error_log("productId: " . $productId);
        if (! $product) {
            return response()->json(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
        }

        // ✅ Ensure plan exists
        $plan = Plan::where('paddle_plan_id', $planExternalId)->first();
        if (! $plan) {
            return response()->json(['message' => 'Plan not found'], Response::HTTP_NOT_FOUND);
        }

        // ✅ Find or create Customer (by email only now)
        $customer = Customer::firstOrCreate(
            ['email' => $email],
            ['name' => $customData['name'] ?? '']
        );

        // ✅ Attach Customer to Product via pivot (if not already attached)
        $customer->products()->syncWithoutDetaching([$product->id]);

        // ✅ Get the pivot (customer_product) record
        $customerProduct = $customer->products()
            ->where('product_id', $product->id)
            ->first()
            ->pivot; // this gives the pivot row (customer_product)

        // ✅ Calculate valid_until
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

        // ✅ Create Subscription (linked to pivot instead of customer_id directly)
        $subscription = Subscription::updateOrCreate(
            [
                'customer_product_id' => $customerProduct->id,
                'plan_id'             => $plan->id,
            ],
            [
                'paddle_subscription_id' => $data['invoice_id'],
                'status'                 => 'active',
                'valid_until'            => $validUntil,
                'credits_remaining'      => $plan->credits_per_cycle ?? null,
                'credits_reset_at'       => null,
                'customer_id'            => $customer->id,
            ]
        );

        return response()->json([
            'message'       => 'Subscription created successfully',
            'customer_id'   => $customer->id,
            'product_id'    => $product->id,
            'subscription'  => $subscription,
        ], Response::HTTP_CREATED);
    }
}
