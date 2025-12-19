@extends('layouts.master')
@section('title', 'Careers at Devlints | Open Roles & Hiring')

@section('meta_description', 'Explore careers at Devlints. Join a team focused on growth, collaboration, and building impactful web, mobile, SaaS, and AI products. View current openings and apply today.')

@section('meta_keywords', 'devlints careers, devlints jobs, software engineer jobs pakistan, wordpress developer job, social media marketing job, hiring developers, tech jobs')

@section('og_title', 'Careers at Devlints | Join Our Team')
@section('og_description', 'We’re hiring. Explore current openings at Devlints and build a career with purpose in a collaborative, growth-focused environment.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'Careers at Devlints')
@section('twitter_description', 'Join Devlints—explore open roles and apply to work on real products with a growth-focused team.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

@section('schema_name', 'Careers')
@section('schema_description', 'Careers at Devlints. Explore open positions and apply to join a team building web, mobile, SaaS, and AI products.')
@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"CollectionPage",
          "name":"Careers at Devlints",
          "url":"{{ url()->current() }}",
  "description":"Explore careers and open positions at Devlints.",
  "isPartOf": { "@id":"{{ url('/') }}#website" },
  "about": { "@id":"{{ url('/') }}#organization" }
}
    </script>

    {{-- Optional (recommended): JobPosting schema for each role --}}
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"JobPosting",
          "title":"Social Media Marketing Executive",
          "hiringOrganization": { "@id":"{{ url('/') }}#organization" },
  "employmentType":"FULL_TIME",
  "jobLocationType":"ON_SITE",
  "jobLocation": {
    "@type":"Place",
    "address": { "@type":"PostalAddress", "addressCountry":"PK" }
  },
  "experienceRequirements":"1–2 years",
  "url":"{{ url()->current() }}#current-opening"
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"JobPosting",
          "title":"Senior WordPress Developer",
          "hiringOrganization": { "@id":"{{ url('/') }}#organization" },
  "employmentType":"FULL_TIME",
  "jobLocationType":"ON_SITE",
  "jobLocation": {
    "@type":"Place",
    "address": { "@type":"PostalAddress", "addressCountry":"PK" }
  },
  "experienceRequirements":"2–7 years",
  "url":"{{ url()->current() }}#current-opening"
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"BreadcrumbList",
          "itemListElement":[
            {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Careers","item":"{{ url()->current() }}"}
  ]
}
    </script>
@endpush

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
           <a href="#current-opening"> <button>View Open Roles</button> </a>
        </div>
    </section>

    <section class="open-positions-section" id="current-opening">
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
{{--                        <a href="{{ route("contact") }}">Apply Now</a>--}}
                    </div>
                </div>

                <div class="job-box">
                    <h3>Senior Python Developer</h3>
                    <div class="job-detail">
                        <span>Experience: 2–3 Years</span>
{{--                        <button>Apply Now</button>--}}
                    </div>
                </div>

                {{-- Add more job boxes here as needed --}}
            </div>
        </div>
    </section>

@endsection
