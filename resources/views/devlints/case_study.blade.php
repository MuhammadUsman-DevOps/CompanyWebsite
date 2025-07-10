@extends('layouts.master')

@section('title', 'AI-Powered Business Analytics')

@push('styles')
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .service-containers::before {
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
        .service-containers {
            max-width: 940px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 12px;
        }

        /* Service Title */
        .service-title {
            font-size: 3.5rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        /* Meta Information */
        .service-meta {
            display: flex;
            gap: 20px;
            font-size: 0.9rem;
            color: #666;
            margin-bottom: 30px;
        }

        .service-meta span {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .service-meta i {
            font-style: normal;
            color: #007bff;
        }

        /* Featured Image */
        .service-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 30px;
        }

        /* Service Content */
        .service-content {
            font-size: 1.1rem;
            color: #444;
        }

        .service-content p {
            margin-bottom: 20px;
        }

        .service-content h2 {
            font-size: 1.8rem;
            font-weight: 600;
            color: #222;
            margin: 30px 0 15px;
        }

        .service-content blockquote {
            border-left: 4px solid #007bff;
            padding-left: 20px;
            margin: 20px 0;
            font-style: italic;
            color: #555;
        }

        /* Call to Action Button */
        .cta-button {
            display: inline-block;
            padding: 12px 24px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }



        /* Responsive Design */
        @media (max-width: 768px) {
            .service-containers {
                margin: 20px;
                padding: 15px;
            }

            .service-title {
                font-size: 2rem;
            }

            .service-image {
                height: 300px;
            }

            .service-content {
                font-size: 1rem;
            }

            .service-meta {
                flex-direction: column;
                gap: 10px;
            }

        }
    </style>
@endpush

@section('content')
    <main class="service-containers">

        <h1 class="service-title">{{$caseStudy->title}}</h1>
        <div class="service-meta">
            <span><i>🏷️</i> Data Analytics</span>
            <span><i>⏰</i> Ongoing Subscription</span>
            <span><i>🌟</i> Enterprise Solution</span>
        </div>
        <img src="{{asset('storage/'. $caseStudy->featured_image)}}" alt="Service featured image" class="service-image" loading="lazy">
        <div class="service-content">
            <p>{{$caseStudy->short_description}}</p>
          <p>
              {!! $caseStudy->content !!}

          </p>
        </div>


    </main>
@endsection

@push('scripts')

@endpush
