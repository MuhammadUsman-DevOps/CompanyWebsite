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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Links to the customer and the plan
            $table->foreignUuid('customer_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->foreignUuid('plan_id')
                ->constrained()
                ->cascadeOnDelete();

            // Paddle identifiers and status
            $table->string('paddle_subscription_id')->nullable();
            $table->enum('status', ['active','past_due','cancelled']);
            $table->timestamp('valid_until')->nullable();

            $table->unsignedInteger('credits_remaining')->default(0);
            $table->timestamp('credits_reset_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
