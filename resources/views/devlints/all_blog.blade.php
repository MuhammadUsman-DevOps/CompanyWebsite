@extends('layouts.master')

@push('styles')

    <style>


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
            row-gap: 40px;
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
        <div class="search-bar">
            <input type="text" id="searchInput" placeholder="Search blogs by title..." oninput="searchBlogs()">
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

    <script>
        function searchBlogs() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const posts = document.querySelectorAll('.blog-post');

            posts.forEach(post => {
                const title = post.getAttribute('data-title').toLowerCase();
                post.classList.toggle('hidden', !title.includes(input));
            });
        }
    </script>

@endpush


