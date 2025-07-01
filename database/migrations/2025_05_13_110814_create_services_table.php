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
        Schema::create('services', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');                        // e.g., Mobile App Development
            $table->string('slug')->unique();             // URL-friendly name
            $table->string('tagline')->nullable();        // Optional short phrase
            $table->text('description');                  // Full details
            $table->string('icon')->nullable();           // Optional icon path
            $table->string('image')->nullable();          // Optional image
            $table->string('category')->nullable();       // Category like Design, Development
            $table->integer('order')->default(0);         // For sorting
            $table->boolean('is_active')->default(true);  // Show/hide toggle
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
