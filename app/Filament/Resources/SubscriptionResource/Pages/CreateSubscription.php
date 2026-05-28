<?php

namespace App\Filament\Resources\SubscriptionResource\Pages;

use App\Filament\Resources\SubscriptionResource;
use App\Models\CustomerProduct;
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
        $productId = $data['product_id'] ?? null;
        $customerId = $data['customer_id'] ?? null;

        if ($productId && $customerId) {
            // Find or create the CustomerProduct pivot record
            $customerProduct = CustomerProduct::firstOrCreate([
                'customer_id' => $customerId,
                'product_id'  => $productId,
            ]);

            $data['customer_product_id'] = $customerProduct->id;
        }

        // Remove product_id — it's a virtual form field, not a subscriptions column
        unset($data['product_id']);

        return $data;
    }
}
