<?php

namespace App\Filament\Resources\SubscriptionResource\Pages;

use App\Filament\Resources\SubscriptionResource;
use App\Models\CustomerProduct;
use App\Models\Plan;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubscription extends EditRecord
{
    protected static string $resource = SubscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    /**
     * Hook into the form data before filling to add product_id for the UI
     */
    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Get the product_id from the subscription's plan for display
        if (isset($data['plan_id'])) {
            $plan = Plan::find($data['plan_id']);
            if ($plan) {
                $data['product_id'] = $plan->product_id;
            }
        }
        
        return $data;
    }

    /**
     * Hook into the data before saving the subscription
     */
    protected function mutateFormDataBeforeSave(array $data): array
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
