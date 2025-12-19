@extends('layouts.master')
{{-- =========================
   Blog Detail SEO (Devlints)
   ========================= --}}

@php
    // ---- Core values / fallbacks ----
    $title = trim($blog->meta_title ?? $blog->title ?? 'Devlints Blog');

    $description = trim(
        $blog->meta_description
        ?? $blog->excerpt
        ?? 'Read Devlints insights on web development, mobile apps, SaaS, AI, eCommerce, UI/UX, QA, and digital growth.'
    );

    $keywords = trim($blog->keywords ?? '');

    $canonical = $blog->canonical_url ?? url()->current();

    $featuredImage = $blog->og_image
        ?? ($blog->featured_image ? asset('storage/' . $blog->featured_image) : asset('static/images/og/devlints-og.webp'));

    // Dates
    $publishedAt = optional($blog->published_at ?? $blog->created_at)->toIso8601String();
    $updatedAt   = optional($blog->updated_at ?? $blog->published_at ?? $blog->created_at)->toIso8601String();

    // Author
    $authorName = $blog->author_name ?? 'Devlints Team';

    // Topic/section (optional fields)
    $section = $blog->topic ?? $blog->category ?? 'Technology';

    // Tags (optional: if stored as comma string)
    $tags = [];
    if (!empty($keywords)) {
        $tags = array_values(array_filter(array_map('trim', explode(',', $keywords))));
    }

    // Robots flags (optional)
    $noindex = (bool)($blog->noindex ?? false);
    $nofollow = (bool)($blog->nofollow ?? false);

    // Word count (optional)
    $rawText = preg_replace('/\s+/u', ' ', trim(strip_tags(html_entity_decode($blog->content ?? ''))));
    $wordCount = $rawText ? str_word_count($rawText) : null;

    // Optional custom schema JSON field
    $customSchema = [];
    if (!empty($blog->schema_markup)) {
        try {
            $customSchema = json_decode($blog->schema_markup, true, 512, JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            $customSchema = [];
        }
    }

    $orgId = url('/') . '#organization';
    $siteId = url('/') . '#website';
@endphp

{{-- Basic SEO --}}
@section('title', $title)
@section('meta_description', $description)
@section('meta_keywords', $keywords)

{{-- Canonical + Robots --}}
@section('canonical', $canonical)
@section('robots', ($noindex ? 'noindex' : 'index') . ', ' . ($nofollow ? 'nofollow' : 'follow'))

{{-- Open Graph --}}
@section('og_title', $blog->og_title ?? $title)
@section('og_description', $blog->og_description ?? $description)
@section('og_image', $featuredImage)
@section('og_url', $canonical)

{{-- Twitter --}}
@section('twitter_title', $blog->twitter_title ?? $title)
@section('twitter_description', $blog->twitter_description ?? $description)
@section('twitter_image', $blog->twitter_image ?? $featuredImage)

<meta name="author" content="@yield('meta_author', 'Devlints Team')">
<meta property="og:type" content="@yield('og_type','article')">

@section('meta_author', $authorName)
@section('og_type', 'article')

{{-- JSON-LD Structured Data --}}
@section('structured_data')
    @php
        $blogPosting = [
            "@context" => "https://schema.org",
            "@type" => "BlogPosting",
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $canonical,
            ],
            "headline" => $title,
            "description" => $description,
            "image" => [$featuredImage],
            "author" => [
                "@type" => "Person",
                "name" => $authorName,
            ],
            "publisher" => [
                "@id" => $orgId, // expects Organization schema globally in master
            ],
            "isPartOf" => [
                "@id" => $siteId, // expects WebSite schema globally in master
            ],
            "datePublished" => $publishedAt,
            "dateModified" => $updatedAt,
            "articleSection" => $section,
        ];

        if (!empty($tags)) {
            $blogPosting["keywords"] = implode(", ", $tags); // schema expects string
        }
        if (!empty($wordCount)) {
            $blogPosting["wordCount"] = $wordCount;
        }

        // Merge custom schema if provided (custom keys override base)
        if (!empty($customSchema) && is_array($customSchema)) {
            $blogPosting = array_merge($blogPosting, $customSchema);
        }

        // FAQPage schema (recommended as separate node)
        $faqSchema = null;
        if (!empty($blog->faqs) && is_array($blog->faqs)) {
            $entities = [];
            foreach ($blog->faqs as $faq) {
                $q = trim($faq['question'] ?? '');
                $a = trim($faq['answer'] ?? '');
                if ($q && $a) {
                    $entities[] = [
                        "@type" => "Question",
                        "name" => $q,
                        "acceptedAnswer" => [
                            "@type" => "Answer",
                            "text" => $a
                        ]
                    ];
                }
            }

            if (count($entities)) {
                $faqSchema = [
                    "@context" => "https://schema.org",
                    "@type" => "FAQPage",
                    "mainEntity" => $entities,
                    "isPartOf" => [
                        "@type" => "WebPage",
                        "@id" => $canonical
                    ]
                ];
            }
        }

        $breadcrumbs = [
            "@context" => "https://schema.org",
            "@type" => "BreadcrumbList",
            "itemListElement" => [
                [
                    "@type" => "ListItem",
                    "position" => 1,
                    "name" => "Home",
                    "item" => url('/')
                ],
                [
                    "@type" => "ListItem",
                    "position" => 2,
                    "name" => "Blog",
                    "item" => url('/all-blogs')
                ],
                [
                    "@type" => "ListItem",
                    "position" => 3,
                    "name" => $title,
                    "item" => $canonical
                ],
            ],
        ];

        $graph = [$blogPosting, $breadcrumbs];
        if ($faqSchema) $graph[] = $faqSchema;
    @endphp

    <script type="application/ld+json">
        @json($graph, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT)
    </script>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/blog-detail.css') }}">
@endpush

<style>
    /* General Reset */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;

    }

    .blog-container::before {
        content: '';
        position: absolute;
        top: -36%;
        right: -10%;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(59, 130, 246, 0.2), transparent);
        overflow: hidden;
        border-radius: 50%;

    }

    body {
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        line-height: 1.6;
        color: #333;
        background: linear-gradient(135deg, #e0f2fe 0%, #f5f7fa 100%);
        overflow-x: hidden;
    }

    /* Main Container */
    .blog-container {
        max-width: 940px;
        margin: 100px auto;
        padding: 20px;
        /* background-color: #fff; */
        border-radius: 12px;
        /* box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
        }

        /* Blog Title */

        .blog-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        /* Meta Information */

        .blog-meta {
            display: flex;
            gap: 20px;
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 30px;
        }

        .blog-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .blog-meta i {
            font-style: normal;
            color: #007bff;
        }

        /* Featured Image */

        .blog-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        /* Blog Content */

        .blog-content {
            font-size: 1.1rem;
            color: #444;
        }

        .blog-content p {
            margin-bottom: 20px;
        }

        .blog-content h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #222;
            margin: 30px 0 15px;
        }

        .blog-content blockquote {
            border-left: 4px solid #007bff;
            padding-left: 20px;
            margin: 20px 0;
            font-style: italic;
            color: #555;
        }

        /* FAQ Section */

        .faq-section {
            margin-top: 40px;
            width: 100%;
        }

        .faq-section h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #222;
            margin-bottom: 20px;
        }

        .faq-item {
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;

        }

        .faq-question {
            padding: 15px 20px;
            font-size: 1.1rem;
            background: white;
            font-weight: 600;
            color: #222;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: background-color 0.3s ease;
        }

        .faq-question:hover {
            background-color: #f0faff;
        }

        .faq-question::after {
            content: '+';
            font-size: 1.2rem;
            color: #007bff;
        }

        .faq-item.active .faq-question::after {
            content: '−';
        }

        .faq-answer {
            display: none;
            padding: 15px 20px;
            font-size: 1rem;
            color: #444;
            background: #f9f9f9;
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .blog-container {
                margin: 20px;
                padding: 15px;
            }

            .blog-title {
                font-size: 2rem;
            }

            .blog-image {
                height: 300px;
            }

            .blog-content {
                font-size: 1rem;
            }

            .blog-meta {
                flex-direction: column;
                gap: 10px;
            }

            .faq-section h2 {
                font-size: 1.6rem;
            }

            .faq-question {
                font-size: 1rem;
            }

            .faq-answer {
                font-size: 0.9rem;
            }
        }
    }


</style>

@section("content")
    <main class="blog-container">
        <h1 class="blog-title"> {{$blog->title}} </h1>
        <div class="blog-meta">
            <span><i>📅</i> {{ optional($blog->published_at)->format('F d, Y') }}  </span>
            <span><i>✍️</i>  {{$blog->author_name}}</span>
            <span><i>🕒</i> 5 min read</span>
        </div>
        <img src="{{ asset('storage/'. $blog->featured_image) }}" alt="Blog featured image"
             class="blog-image">
        <div class="blog-content">
            {!! $blog->content !!}
        </div>


        <section class="faq-section" id="faq-section">
            <h2>Frequently Asked Questions</h2>

            @foreach($blog->faqs as $faq)
                <div class="faq-item">
                    <h3 class="faq-question" aria-expanded="false" aria-controls="faq2">{{$faq['question']}}</h3>
                    <div class="faq-answer" id="faq2"> {{$faq['answer']}}</div>

                </div>

            @endforeach

        </section>
    </main>
@endsection

@push('scripts')
    <script>
        document.querySelectorAll('.faq-question').forEach(item => {
            item.addEventListener('click', () => {
                const faqItem = item.parentElement;
                const isActive = faqItem.classList.toggle('active');
                item.setAttribute('aria-expanded', isActive ? 'true' : 'false');
            });
        });
    </script>
@endpush
