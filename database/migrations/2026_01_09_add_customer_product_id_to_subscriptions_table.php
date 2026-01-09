<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            // Add customer_product_id as nullable first
            $table->unsignedBigInteger('customer_product_id')
                ->after('id')
                ->nullable();
        });

        // Populate customer_product_id for existing subscriptions
        $subscriptions = \App\Models\Subscription::all();
        foreach ($subscriptions as $subscription) {
            // Find the plan to get the product_id
            $plan = \App\Models\Plan::find($subscription->plan_id);
            if ($plan) {
                // Find or create the customer_product relationship
                $customerProduct = \App\Models\CustomerProduct::firstOrCreate([
                    'customer_id' => $subscription->customer_id,
                    'product_id' => $plan->product_id,
                ]);
                
                $subscription->customer_product_id = $customerProduct->id;
                $subscription->save();
            }
        }

        // Now make it NOT NULL and add the foreign key
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_product_id')
                ->nullable(false)
                ->change();
            
            $table->foreign('customer_product_id')
                ->references('id')
                ->on('customer_product')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('subscriptions', function (Blueprint $table) {
            $table->dropForeign(['customer_product_id']);
            $table->dropColumn('customer_product_id');
        });
    }
};
