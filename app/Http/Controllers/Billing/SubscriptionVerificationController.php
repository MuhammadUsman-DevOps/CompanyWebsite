<?php

namespace App\Http\Controllers\Billing;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class SubscriptionVerificationController extends Controller
{
    /**
     * Verify if a customer's subscription exists for a product
     * and return its status and key details.
     */
    public function verify(Request $request)
    {
        $data = $request->all();

        // Locate the customer for the given product + email
        $customer = Customer::where('product_id', $data['product_id'])
            ->where('email', $data['email'])
            ->first();

        if (! $customer) {
            return response()->json([
                'subscribed' => false,
                'message'    => 'No customer found for this product/email.',
            ]);
        }

        // Load the latest (or active) subscription(s)
        $subscription = $customer->subscriptions()
            ->with(['plan.product'])
            ->orderByDesc('created_at')
            ->first();

        if (! $subscription) {
            return response()->json([
                'subscribed' => false,
                'message'    => 'Customer has no subscriptions for this product.',
            ]);
        }

        return response()->json([
            'subscribed' => true,
            'subscription' => [
                'id'                   => $subscription->id,
                'status'               => $subscription->status,
                'valid_until'          => optional($subscription->valid_until)->toDateTimeString(),
                'credits_remaining'    => $subscription->credits_remaining,
                'credits_reset_at'     => optional($subscription->credits_reset_at)->toDateTimeString(),
                'paddle_subscription_id' => $subscription->paddle_subscription_id,
                'plan' => [
                    'id'                => $subscription->plan->id,
                    'name'              => $subscription->plan->name,
                    'price'             => $subscription->plan->price,
                    'interval'          => $subscription->plan->interval,
                    'features'          => $subscription->plan->features,
                ],
                'product' => [
                    'id'   => $subscription->plan->product->id,
                    'name' => $subscription->plan->product->name,
                    'slug' => $subscription->plan->product->slug,
                ],
            ],
        ]);
    }
}
