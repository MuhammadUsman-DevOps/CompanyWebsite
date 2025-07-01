@extends('layouts.master')
@section('title') Web Application Development @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Custom Web Application Development Services</h1>
            <p>
                As a leading <strong>web app development company</strong>, we specialize in designing and building
                <strong>scalable</strong>, <strong>secure</strong>, and <strong>high-performing web applications</strong> tailored to your business goals.
                Whether you're a startup or a large enterprise, our <strong>custom web app solutions</strong> help you streamline processes, enhance user experience, and grow digitally.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free web app development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>End-to-End Web Application Development</h2>
                    <p>
                        From concept to launch, we offer full-cycle <strong>web application development services</strong>.
                        Our team delivers everything from custom admin dashboards, SaaS platforms, and enterprise-level systems to MVPs for startups.
                        We ensure every solution is secure, scalable, and built with your target audience in mind.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Responsive UI/UX Design for Web Apps</h2>
                    <p>
                        A successful web application starts with a seamless user experience.
                        Our UI/UX experts craft <strong>responsive, user-friendly interfaces</strong> that adapt to all devices and screen sizes.
                        We focus on intuitive design that drives engagement, retention, and brand loyalty.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Agile Development & Scalable Architecture</h2>
                    <p>
                        We follow <strong>Agile development methodologies</strong> to ensure fast, flexible delivery of your web app.
                        Our developers use modern frameworks and scalable architectures (such as Laravel, React, and Node.js) to future-proof your application for growth and evolving user needs.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Work With</h1>
            <p>We check out complete programming languages, databases, platforms, and cloud systems to complete projects.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="frontend">Frontend</div>
                <div class="tech-category" data-category="backend">Backend</div>
                <div class="tech-category" data-category="databases">Databases</div>
                <div class="tech-category" data-category="cloud">Cloud</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Web Development Services</h1>
            <div class="services-grid">
                <div class="service-item">Custom Application</div>
                <div class="service-item">E-Commerce Development</div>
                <div class="service-item">SaaS Products</div>
                <div class="service-item">Website Development</div>
                <div class="service-item">Mobile App Development</div>
                <div class="service-item">Maintenance & Support</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>We Build Web Development App Solutions For All The Niches</h1>
            <p>No matter which niche your project falls into, with the help of our experienced Web App developers, we can
                deliver you with robust Web App solutions.</p>
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
                <div class="niche-item">Social Network</div>
                <div class="niche-item">Event</div>
                <div class="niche-item">Productivity</div>
            </div>
        </div>
    </div>


@endsection
@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
