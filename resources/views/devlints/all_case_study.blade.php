@extends('layouts.master')

@push('styles')

    <style>

        body{
            background: linear-gradient(135deg, #e0f2fe 0%, #f5f7fa 100%);
            overflow: hidden;
            position: relative;

        }
        .all-case-study-container {
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
            display: flex;
            flex-direction: column;
            row-gap: 30px;
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

        .case-study-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .case-study-post {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .case-study-post img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .case-study-post h2 {
            margin: 0 0 15px;
            font-size: 20px;
            color: #333;
        }

        .case-study-post a {
            display: inline-block;
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            margin-top: auto;
        }

        .case-study-post a:hover {
            background: #0056b3;
        }

        .case-study-post.hidden {
            display: none;
        }

        @media (max-width: 900px) {
            .case-study-list {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 600px) {
            .case-study-list {
                grid-template-columns: 1fr;
            }
        }
    </style>

@endpush

@section('content')

    <div class="all-case-study-container">
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search case studies by title..." oninput= "searchCaseStudies()">
        </div>


        <div class="case-study-list" id="case-studyList">

            @foreach($caseStudies as $caseStudy)
                <div class="case-study-post" data-title="{{$caseStudy->title}}">
                    <img src="{{asset('storage/'. $caseStudy->featured_image)}}" alt="{{ $caseStudy->title }}">
                    <h2> {{$caseStudy->title}} </h2>
                    <a href="{{route('case_study_detail',$caseStudy->slug)}}">Read More</a>
                </div>
            @endforeach


        </div>
    </div>

@endsection

@push('scripts')

    <script>

        function searchCaseStudies() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const posts = document.querySelectorAll('.case-study-post');

            posts.forEach(post => {
                const title = post.getAttribute('data-title').toLowerCase();
                post.classList.toggle('hidden', !title.includes(input));
            });
        }
    </script>

@endpush


