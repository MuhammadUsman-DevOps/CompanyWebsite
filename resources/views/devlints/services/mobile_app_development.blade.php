@extends('layouts.master')
@section('title') Mobile App Development @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1> Mobile App Development Services</h1>
            <p>
                As a trusted <strong>mobile app development company</strong>, we specialize in building <strong>high-performance</strong>, <strong>secure</strong>, and <strong>scalable mobile applications</strong> tailored to your business needs.
                From startups to enterprises, our <strong>custom mobile app solutions</strong> help streamline operations, improve user engagement, and drive growth across Android, iOS, and cross-platform environments.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free mobile app development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>End-to-End Mobile App Development</h2>
                    <p>
                        We offer complete <strong>mobile app development services</strong> from strategy and design to development and launch.
                        Whether you need an MVP, a fully-featured enterprise app, or an eCommerce solution, we deliver custom apps that align with your goals and deliver measurable results.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>User-Centric UI/UX Design</h2>
                    <p>
                        Our team focuses on creating <strong>intuitive, responsive designs</strong> that offer seamless user experiences on smartphones and tablets.
                        We design mobile interfaces that are easy to navigate, visually appealing, and optimized for engagement and retention.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Native & Cross-Platform Solutions</h2>
                    <p>
                        We develop both <strong>native apps (Android/iOS)</strong> and <strong>cross-platform apps</strong> using modern frameworks like Flutter and React Native.
                        Our solutions are optimized for performance, scalability, and long-term growth across different devices and platforms.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Work With</h1>
            <p>We use the latest programming languages, frameworks, databases, and mobile development tools to deliver powerful app solutions.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="ios">iOS</div>
                <div class="tech-category" data-category="android">Android</div>
                <div class="tech-category" data-category="crossPlatform">Cross Platform</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Mobile App Development Services</h1>
            <div class="services-grid">
                <div class="service-item">Custom Mobile Apps</div>
                <div class="service-item">eCommerce Applications</div>
                <div class="service-item">Enterprise Mobility Solutions</div>
                <div class="service-item">Cross-Platform Apps</div>
                <div class="service-item">iOS & Android Development</div>
                <div class="service-item">App Maintenance & Support</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>Mobile App Solutions for All Industries</h1>
            <p>Whatever industry you operate in, our experienced mobile app developers can help you launch a robust and scalable solution tailored to your business requirements.</p>
            <a href="#" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Logistics</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Retail</div>
                <div class="niche-item">Finance</div>
                <div class="niche-item">Wellness & Fitness</div>
                <div class="niche-item">Oil & Gas</div>
                <div class="niche-item">Transportation</div>
                <div class="niche-item">Travel</div>
                <div class="niche-item">Social Networking</div>
                <div class="niche-item">Events</div>
                <div class="niche-item">Productivity</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
