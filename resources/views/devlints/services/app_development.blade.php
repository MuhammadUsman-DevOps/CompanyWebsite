@extends('layouts.master')
@section('title') App Development Services @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Custom Mobile App Development Services</h1>
            <p>
                As a top-rated <strong>mobile app development company</strong>, we build secure, scalable, and high-performing mobile apps for iOS, Android, and cross-platform solutions. Our <strong>app developers</strong> create intuitive, user-friendly applications that engage users and drive results.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free mobile app development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>iOS & Android App Development</h2>
                    <p>
                        We offer expert <strong>native app development</strong> for iOS and Android using Swift, Kotlin, and Java — optimized for performance, reliability, and app store guidelines.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Cross-Platform App Development</h2>
                    <p>
                        Using frameworks like <strong>Flutter and React Native</strong>, we build apps that work seamlessly across devices—reducing cost and time-to-market while maximizing reach.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>UI/UX Design & App Strategy</h2>
                    <p>
                        We combine strategic planning and stunning UI/UX design to deliver <strong>mobile apps</strong> that users love. From wireframing to prototyping, every step is crafted to convert.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Use in App Development</h1>
            <p>We use cutting-edge technologies and mobile frameworks to build future-ready apps that perform under scale.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="appDevStack">App Development Stack</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our Mobile App Development Services</h1>
            <div class="services-grid">
                <div class="service-item">iOS App Development</div>
                <div class="service-item">Android App Development</div>
                <div class="service-item">Cross-Platform App Development</div>
                <div class="service-item">App UI/UX Design</div>
                <div class="service-item">App Store Optimization (ASO)</div>
                <div class="service-item">App Maintenance & Support</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>App Development for All Industries</h1>
            <p>We develop custom mobile apps tailored to various industries — empowering businesses with innovative mobile experiences.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Finance</div>
                <div class="niche-item">Fitness & Wellness</div>
                <div class="niche-item">Real Estate</div>
                <div class="niche-item">Logistics</div>
                <div class="niche-item">Travel & Tourism</div>
                <div class="niche-item">Media & Entertainment</div>
                <div class="niche-item">Food Delivery</div>
                <div class="niche-item">Productivity Tools</div>
                <div class="niche-item">On-Demand Services</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
