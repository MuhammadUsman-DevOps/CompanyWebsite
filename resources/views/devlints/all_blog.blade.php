@extends('layouts.master')
@section('title', 'Blog | Devlints Insights on Web, Mobile, SaaS & AI')

@section('meta_description', 'Read Devlints blogs on web app development, mobile apps, SaaS, AI, eCommerce, UI/UX, QA, and digital growth. Practical guides, checklists, and engineering insights for startups and businesses.')

@section('meta_keywords', 'devlints blog, web development blog, mobile app development blog, saas blog, ai development blog, ecommerce development blog, ui ux blog, software testing qa blog, digital marketing blog')

@section('og_title', 'Devlints Blog')
@section('og_description', 'Insights, guides, and engineering playbooks on web, mobile, SaaS, AI, eCommerce, UI/UX, QA, and marketing.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'Devlints Blog')
@section('twitter_description', 'Guides and insights on web, mobile, SaaS, AI, eCommerce, UI/UX, QA, and growth.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

@section('schema_name', 'Blog')
@section('schema_description', 'Browse all Devlints blog posts on web development, mobile apps, SaaS, AI, eCommerce, UI/UX, QA, and digital marketing.')


@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Blog",
          "name":"Devlints Blog",
          "url":"{{ url()->current() }}",
  "description":"Insights and guides on web app development, mobile apps, SaaS, AI, eCommerce, UI/UX, QA, and digital growth.",
  "publisher": { "@id":"{{ url('/') }}#organization" },
  "isPartOf": { "@id":"{{ url('/') }}#website" }
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"ItemList",
          "name":"All Blog Posts",
          "itemListOrder":"https://schema.org/ItemListOrderDescending",
          "numberOfItems": {{ isset($blogs) ? $blogs->count() : 0 }},
  "itemListElement": [
        @foreach($blogs as $index => $blog)
            {
              "@type":"ListItem",
              "position": {{ $index + 1 }},
      "url":"{{ route('blog_detail', $blog->slug) }}",
      "name": "{{ addslashes($blog->title) }}"
    }@if(!$loop->last),@endif
        @endforeach
        ]
      }
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"BreadcrumbList",
          "itemListElement":[
            {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Blog","item":"{{ url()->current() }}"}
  ]
}
    </script>
@endpush

@push('styles')

    <style>
        .filter-pills {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: center;
    margin-bottom: 30px;
}

.pill {
    padding: 8px 20px;
    border-radius: 50px;
    border: 1px solid #007bff;
    color: #007bff;
    text-decoration: none;
    font-size: 14px;
    transition: all 0.3s ease;
}

.pill:hover, .pill.active {
    background-color: #007bff;
    color: white;
}

        body{
            background: linear-gradient(135deg, #e0f2fe 0%, #f5f7fa 100%);
            overflow: hidden;
            position: relative;

        }
        .all-blog-container {
            max-width: 90%;
            margin: auto;
            padding: 120px 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;

        }


        body::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.2), transparent);
            border-radius: 50%;
            overflow: hidden;
            z-index: -1;

        }

        .search-bar {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
        }

        .search-bar input {
            width: 100%;
            max-width: 500px;
            padding: 10px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 5px;
            outline: none;
            transition: border-color 0.3s;
        }

        .search-bar input:focus {
            border-color: #007bff;
        }

        .blog-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .blog-post {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .blog-post img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .blog-post h2 {
            margin: 0 0 15px;
            font-size: 20px;
            color: #333;
        }

        .blog-post a {
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: auto;
        }

        .blog-post a:hover {
            background: #0056b3;
        }

        .blog-post.hidden {
            display: none;
        }

        @media (max-width: 900px) {
            .blog-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .blog-list {
                grid-template-columns: 1fr;
            }
        }
    </style>

@endpush

@section('content')

    <div class="all-blog-container">
      

        <div class="filter-pills">
        <a href="{{ route('all_blogs', ['product' => 'all']) }}" 
           class="pill {{ request('product') == 'all' || !request('product') ? 'active' : '' }}">
           All Blogs
        </a>
        
        @foreach($products as $product)
            <a href="{{ route('all_blogs', ['product' => $product->id]) }}" 
               class="pill {{ request('product') == $product->id ? 'active' : '' }}">
               {{ $product->name }}
            </a>
        @endforeach
    </div>
        <div class="blog-list" id="blogList">

            @foreach($blogs as $blog)
            <div class="blog-post" data-title="{{$blog->title}}">
                <img src="{{asset('storage/'. $blog->featured_image)}}" alt="{{ $blog->title }}">
                <h2> {{$blog->title}} </h2>
                <a href="{{route('blog_detail', $blog->slug)}}">Read More</a>
            </div>
            @endforeach


        </div>
    </div>

@endsection

@push('scripts')

   

@endpush


