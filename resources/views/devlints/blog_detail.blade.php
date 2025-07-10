@extends('layouts.master')

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
