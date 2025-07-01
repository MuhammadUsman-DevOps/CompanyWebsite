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
        Schema::create('blogs', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string('title');
            $table->string('slug')->unique()->nullable();

            // SEO Core
            $table->string('meta_title', 70)->nullable();
            $table->string('meta_description', 160)->nullable();
            $table->string('keywords')->nullable();
            $table->string('canonical_url')->nullable();

            // Open Graph
            $table->string('og_title', 90)->nullable();
            $table->string('og_description', 200)->nullable();
            $table->string('og_image')->nullable();
            $table->string('og_type')->default('article');

            // Twitter Card
            $table->enum('twitter_card', ['summary', 'summary_large_image', 'app', 'player'])->default('summary_large_image');
            $table->string('twitter_title', 70)->nullable();
            $table->string('twitter_description', 200)->nullable();
            $table->string('twitter_image')->nullable();

            // Content
            $table->longText('content');
            $table->string('featured_image')->nullable();
            $table->string('author_name')->default('Admin');
            $table->text('author_bio')->nullable();

            // FAQ block
            $table->json('faqs')->nullable();

            // Schema override
            $table->longText('schema_markup')->nullable();

            // SEO Analysis
            $table->string('focus_keyword', 100)->nullable();
            $table->unsignedTinyInteger('seo_score')->default(0);

            // Lifecycle
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            $table->timestamp('published_at')->nullable();
            $table->timestamps();

            // Additional SEO
            $table->boolean('noindex')->default(false);
            $table->boolean('nofollow')->default(false);
            $table->string('redirect_url')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
