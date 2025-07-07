@extends('layouts.master')
@section('title') Digital Marketing Services @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Result-Driven Digital Marketing Services</h1>
            <p>
                As a leading <strong>digital marketing agency</strong>, we help businesses increase their online visibility, generate high-quality leads, and grow revenue. Our <strong>data-driven marketing strategies</strong> combine SEO, PPC, social media, and content marketing to deliver measurable results.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free digital marketing consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Search Engine Optimization (SEO)</h2>
                    <p>
                        We implement proven <strong>SEO techniques</strong> to help your website rank higher on search engines, drive organic traffic, and build long-term brand authority with technical SEO, on-page SEO, and link building.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Pay-Per-Click Advertising (PPC)</h2>
                    <p>
                        Our certified experts manage ROI-focused <strong>Google Ads, Bing Ads, and display campaigns</strong> to deliver immediate results and boost qualified traffic to your landing pages and product offers.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Social Media Marketing</h2>
                    <p>
                        We create and manage <strong>social media campaigns</strong> on Facebook, Instagram, LinkedIn, and more to increase engagement, grow followers, and promote your brand to the right audience.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Tools & Platforms We Use</h1>
            <p>We use industry-leading tools to monitor performance, optimize campaigns, and drive measurable marketing success.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="marketingStack">Digital Marketing Tools</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our Digital Marketing Services</h1>
            <div class="services-grid">
                <div class="service-item">Search Engine Optimization (SEO)</div>
                <div class="service-item">Google Ads / PPC Campaigns</div>
                <div class="service-item">Social Media Marketing</div>
                <div class="service-item">Content Marketing</div>
                <div class="service-item">Email Marketing</div>
                <div class="service-item">Conversion Rate Optimization (CRO)</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>Digital Marketing for Every Industry</h1>
            <p>We create tailored digital marketing strategies for businesses across industries—driving growth, leads, and brand visibility.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Real Estate</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Finance</div>
                <div class="niche-item">Fitness & Wellness</div>
                <div class="niche-item">Travel & Tourism</div>
                <div class="niche-item">Automotive</div>
                <div class="niche-item">Law Firms</div>
                <div class="niche-item">Startups</div>
                <div class="niche-item">B2B SaaS</div>
                <div class="niche-item">NGOs & Nonprofits</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
