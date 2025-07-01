@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/career.css') }}">
@endpush

@section("content")

    <section class="career-hero-section">
        <div class="career-hero-div">
            <h2>Build a Career with Purpose at <span>Devlints</span></h2>
            <p class="career-hero-para">
                At Devlints, we believe in empowering individuals to grow personally and professionally. Our culture is rooted in collaboration, continuous learning, and creating meaningful digital experiences. Join a team where your ideas are valued, your skills are sharpened, and your work makes an impact.
            </p>
            <button>View Open Roles</button>
        </div>
    </section>

    <section class="open-positions-section">
        <div class="open-positions-div">
            <h2>Current Opportunities at <span>Devlints</span></h2>
            <p class="open-positions-para">
                We’re looking for passionate, driven professionals who want to challenge themselves and grow in a dynamic environment. If you’re ready to take the next step in your career, explore our current job openings and see where you fit in.
            </p>

            <div class="job-container">

                <div class="job-box">
                    <h3>Social Media Marketing Executive</h3>
                    <div class="job-detail">
                        <span>Experience: 1–2 Years</span>
                        <button>Apply Now</button>
                    </div>
                </div>

                <div class="job-box">
                    <h3>Senior WordPress Developer</h3>
                    <div class="job-detail">
                        <span>Experience: 2–7 Years</span>
                        <button>Apply Now</button>
                    </div>
                </div>

                {{-- Add more job boxes here as needed --}}
            </div>
        </div>
    </section>

@endsection
