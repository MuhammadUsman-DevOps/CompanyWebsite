@extends('layouts.master')
@section('title') Full Stack Development Services @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>End-to-End Full Stack Development Services</h1>
            <p>
                As a leading <strong>full stack development company</strong>, we build scalable, secure, and high-performing web and mobile applications using modern front-end and back-end technologies. Our <strong>full stack developers</strong> handle everything from UI/UX to server-side architecture—delivering complete digital solutions.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free full stack development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Custom Web Application Development</h2>
                    <p>
                        We deliver full-fledged <strong>web app solutions</strong> tailored to your business needs. From intuitive front-end designs to powerful back-end architecture, we ensure optimal performance and scalability.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>API Development & Integration</h2>
                    <p>
                        Our team builds and integrates <strong>RESTful and GraphQL APIs</strong> to ensure seamless communication between different components of your application ecosystem.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Cloud-Based & Scalable Architecture</h2>
                    <p>
                        We develop applications with <strong>cloud-first architecture</strong>—offering flexibility, security, and the ability to scale across user bases and data loads.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Use in Full Stack Development</h1>
            <p>Our full stack developers use modern frameworks and tools to deliver secure, maintainable, and high-performance applications.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="frontend">Frontend</div>
                <div class="tech-category" data-category="backend"> Backend </div>
                <div class="tech-category" data-category="databases">Databases</div>
                <div class="tech-category" data-category="cloud">Cloud</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our Full Stack Development Services</h1>
            <div class="services-grid">
                <div class="service-item">Custom Web & App Development</div>
                <div class="service-item">Front-End & Back-End Integration</div>
                <div class="service-item">Database Design & Optimization</div>
                <div class="service-item">Cloud Deployment & DevOps</div>
                <div class="service-item">API Development & Third-Party Integration</div>
                <div class="service-item">Maintenance & Continuous Improvement</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>Full Stack Solutions for All Industries</h1>
            <p>We build robust full stack applications for businesses in diverse industries—ensuring agility, performance, and scalability.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">EdTech</div>
                <div class="niche-item">FinTech</div>
                <div class="niche-item">Logistics</div>
                <div class="niche-item">SaaS Platforms</div>
                <div class="niche-item">Travel & Hospitality</div>
                <div class="niche-item">Real Estate</div>
                <div class="niche-item">Media & Entertainment</div>
                <div class="niche-item">Startups</div>
                <div class="niche-item">Enterprises</div>
                <div class="niche-item">NGOs & Nonprofits</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
