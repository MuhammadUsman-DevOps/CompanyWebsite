<?php

namespace App\Filament\Resources\SubscriptionResource\Pages;

use App\Filament\Resources\SubscriptionResource;
use App\Models\CustomerProduct;
use App\Models\Plan;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSubscription extends CreateRecord
{
    protected static string $resource = SubscriptionResource::class;

    /**
     * Hook into the data before creating the subscription
     * to automatically create/find the customer_product relationship
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Get the product_id from the selected plan
        $plan = Plan::find($data['plan_id']);
        
        if ($plan && isset($data['customer_id'])) {
            // Find or create the CustomerProduct pivot record
            $customerProduct = CustomerProduct::firstOrCreate([
                'customer_id' => $data['customer_id'],
                'product_id' => $plan->product_id,
            ]);
            
            // Set the customer_product_id
            $data['customer_product_id'] = $customerProduct->id;
        }
        
        // Remove product_id if it exists (it's not a direct field on subscriptions)
        unset($data['product_id']);
        
        return $data;
    }
}
