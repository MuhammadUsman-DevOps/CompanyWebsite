<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasUuids;

    protected $keyType = 'string';
    public $incrementing = false;

    protected $fillable = [
        'title', 'slug', 'meta_title', 'meta_description', 'keywords', 'canonical_url',
        'og_title', 'og_description', 'og_image', 'og_type',
        'twitter_card', 'twitter_title', 'twitter_description', 'twitter_image',
        'content', 'featured_image', 'author_name', 'author_bio',
        'faqs', 'schema_markup', 'focus_keyword', 'seo_score',
        'status', 'published_at', 'noindex', 'nofollow', 'redirect_url',
    ];

    protected $casts = [
        'faqs' => 'array',
        'published_at' => 'datetime',
        'noindex' => 'boolean',
        'nofollow' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
            if (!$model->slug) {
                $model->slug = Str::slug($model->title);
            }
        });

        static::saving(function ($model) {
            $model->meta_title = $model->meta_title ?: Str::limit($model->title, 70);
            $model->meta_description = $model->meta_description ?: $model->generateMetaDescription();
            $model->og_title = $model->og_title ?: Str::limit($model->meta_title, 90);
            $model->og_description = $model->og_description ?: Str::limit($model->meta_description, 200);
            $model->twitter_title = $model->twitter_title ?: Str::limit($model->meta_title, 70);
            $model->twitter_description = $model->twitter_description ?: Str::limit($model->meta_description, 200);

            if ($model->status === 'published' && !$model->published_at) {
                $model->published_at = Carbon::now();
            }

            $model->seo_score = $model->calculateSeoScore();
        });
    }

    public function getAbsoluteUrl(): string
    {
        return $this->canonical_url ?? url("/blog/{$this->slug}");
    }

    public function generateMetaDescription(): string
    {
        $plainText = strip_tags($this->content);
        return Str::limit($plainText, 160, '...');
    }

    public function calculateSeoScore(): int
    {
        $score = 0;
        if (Str::length($this->meta_title) >= 30 && Str::length($this->meta_title) <= 70) $score += 20;
        if (Str::length($this->meta_description) >= 50 && Str::length($this->meta_description) <= 160) $score += 20;
        if ($this->featured_image) $score += 15;
        if ($this->focus_keyword && Str::contains(Str::lower($this->content), Str::lower($this->focus_keyword))) $score += 20;
        if (!empty($this->faqs)) $score += 15;
        if ($this->keywords) $score += 10;

        return min($score, 100);
    }

    public function getSchemaJsonLd(): string
    {
        $data = [
            "@context" => "https://schema.org",
            "@type" => "Article",
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $this->getAbsoluteUrl(),
            ],
            "headline" => $this->meta_title ?: $this->title,
            "description" => $this->meta_description,
            "image" => $this->featured_image ? url($this->featured_image) : null,
            "author" => [
                "@type" => "Person",
                "name" => $this->author_name,
                "description" => $this->author_bio,
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => "WhatsApp To PDF",
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => url("/static/logo.png"),
                ]
            ],
            "datePublished" => optional($this->published_at)->toIso8601String(),
            "dateModified" => optional($this->updated_at)->toIso8601String(),
            "keywords" => explode(',', $this->keywords),
        ];

        if (!empty($this->faqs)) {
            $data['mainEntity'] = array_map(fn($faq) => [
                "@type" => "Question",
                "name" => $faq['question'],
                "acceptedAnswer" => [
                    "@type" => "Answer",
                    "text" => $faq['answer'],
                ]
            ], $this->faqs);
        }

        if ($this->schema_markup) {
            $customSchema = json_decode($this->schema_markup, true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $data = array_merge($data, $customSchema);
            }
        }

        return json_encode(array_filter($data), JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public function getMetaTags(): string
    {
        $ogImage = $this->og_image ?: ($this->featured_image ?: '');
        return implode("\n", [
            "<meta name='description' content='" . e($this->meta_description) . "'>",
            "<meta name='keywords' content='" . e($this->keywords) . "'>",
            "<meta name='robots' content='" . ($this->noindex ? 'noindex' : 'index') . "," . ($this->nofollow ? 'nofollow' : 'follow') . "'>",
            "<meta property='og:title' content='" . e($this->og_title ?: $this->meta_title) . "'>",
            "<meta property='og:description' content='" . e($this->og_description ?: $this->meta_description) . "'>",
            "<meta property='og:type' content='" . e($this->og_type) . "'>",
            "<meta property='og:image' content='" . url($ogImage) . "'>",
            "<meta name='twitter:card' content='" . e($this->twitter_card) . "'>",
            "<meta name='twitter:title' content='" . e($this->twitter_title) . "'>",
            "<meta name='twitter:description' content='" . e($this->twitter_description) . "'>",
            "<meta name='twitter:image' content='" . url($this->twitter_image ?: $ogImage) . "'>",
        ]);
    }
}
