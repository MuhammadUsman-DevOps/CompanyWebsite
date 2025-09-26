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
        Schema::create('plans', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('product_id')->constrained()->cascadeOnDelete();
            $table->string('paddle_plan_id')->unique();     // Paddle’s plan identifier
            $table->string('name');                         // e.g. Starter, Pro
            $table->text('description')->nullable();
            $table->json('features')->nullable();
            $table->decimal('price', 8, 2);
            $table->enum('interval', ['onetime','monthly', 'yearly']);
            $table->boolean('is_active')->default(true);
            $table->unsignedInteger('credits_per_cycle')->default(0);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
