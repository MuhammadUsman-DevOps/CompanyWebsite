@extends('layouts.master')
@section('title') Quality Assurance (QA) Services @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Reliable Quality Assurance (QA) Services</h1>
            <p>
                As a trusted <strong>quality assurance company</strong>, we help businesses launch flawless digital products with confidence. Our <strong>QA testing services</strong> cover every stage of development—ensuring speed, security, and user satisfaction across web, mobile, and enterprise applications.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free QA consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Manual & Automated Testing</h2>
                    <p>
                        We offer both <strong>manual testing</strong> for user behavior and <strong>automated testing</strong> for performance and functionality. Our testing ensures that your application runs smoothly, free from bugs and glitches.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Cross-Platform & Cross-Browser Testing</h2>
                    <p>
                        We validate functionality, layout, and responsiveness across different browsers and devices to ensure a <strong>seamless experience</strong> for all users.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Security & Performance Testing</h2>
                    <p>
                        Protect your users and business with thorough <strong>security testing</strong>. We also run <strong>load and stress tests</strong> to guarantee stability under heavy traffic.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>QA Tools & Technologies We Use</h1>
            <p>Our QA engineers use top industry tools to automate, manage, and monitor quality across all environments and devices.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="qaTestingStack">QA Testing Tools</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our QA & Testing Services</h1>
            <div class="services-grid">
                <div class="service-item">Manual Testing</div>
                <div class="service-item">Automation Testing</div>
                <div class="service-item">Functional & Regression Testing</div>
                <div class="service-item">Performance & Load Testing</div>
                <div class="service-item">Security & Compliance Testing</div>
                <div class="service-item">Mobile & Web App Testing</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>QA Solutions for Every Industry</h1>
            <p>Our QA experts test software products across industries—ensuring quality, reliability, and compliance with global standards.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Banking & Finance</div>
                <div class="niche-item">SaaS & Enterprise</div>
                <div class="niche-item">Telecommunications</div>
                <div class="niche-item">Media & Entertainment</div>
                <div class="niche-item">Travel & Hospitality</div>
                <div class="niche-item">Automotive</div>
                <div class="niche-item">Public Sector</div>
                <div class="niche-item">Startups</div>
                <div class="niche-item">Insurance</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
