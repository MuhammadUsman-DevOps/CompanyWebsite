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
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->text('description');
            $table->string('thumbnail')->nullable(); // Main display image
            $table->string('logo')->nullable(); // Nullable logo
            $table->string('demo_url')->nullable();
            $table->string('website_url')->nullable();
            $table->string('platform')->nullable(); // Web, iOS, Android, etc.
            $table->string('category')->nullable(); // SaaS, Mobile App, etc.
            $table->json('features')->nullable(); // Key features in JSON
            $table->date('release_date')->nullable(); // Optional release date
            $table->string('tech_stack')->nullable(); // Laravel, Flutter, etc.
            $table->integer('order')->default(0); // For display order
            $table->boolean('is_featured')->default(false); // Featured products
            $table->boolean('is_active')->default(true); // Visibility toggle
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
