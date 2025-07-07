@extends('layouts.master')
@section('title') UI/UX Development @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1> UI/UX Design & Development Services</h1>
            <p>
                As a leading <strong>UI/UX development company</strong>, we craft <strong>engaging</strong>, <strong>user-centric interfaces</strong> that drive results. Our team specializes in creating <strong>visually appealing</strong> and <strong>intuitive designs</strong> that enhance usability and deliver memorable experiences across web and mobile platforms.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free UI/UX design consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Custom UI/UX Design Solutions</h2>
                    <p>
                        We offer complete <strong>UI/UX design services</strong> from research and wireframing to high-fidelity prototypes and interactive interfaces. Our designs align with your brand identity and enhance user satisfaction.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>User Research & Experience Strategy</h2>
                    <p>
                        Our team conducts in-depth <strong>user research, persona creation, and journey mapping</strong> to ensure a seamless user experience. We design solutions that solve real problems and keep users engaged.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Cross-Platform Responsive Design</h2>
                    <p>
                        We design responsive and adaptive user interfaces that work flawlessly across all screen sizes and devices, ensuring a <strong>consistent and optimized experience</strong> for every user.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Design Tools & Technologies We Use</h1>
            <p>We utilize cutting-edge tools and frameworks to build intuitive and scalable UI/UX solutions.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="designTools">Design Tools</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our UI/UX Services</h1>
            <div class="services-grid">
                <div class="service-item">Wireframing & Prototyping</div>
                <div class="service-item">UI/UX Audit & Consulting</div>
                <div class="service-item">Responsive Web Design</div>
                <div class="service-item">Mobile App UI/UX</div>
                <div class="service-item">Dashboard & SaaS UI</div>
                <div class="service-item">Design System & Style Guide</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>UI/UX Solutions for All Industries</h1>
            <p>Our creative team has crafted successful design solutions for startups, enterprises, and everything in between—across various industries.</p>
            <a href="#" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Finance</div>
                <div class="niche-item">Entertainment</div>
                <div class="niche-item">Logistics</div>
                <div class="niche-item">Travel</div>
                <div class="niche-item">Productivity</div>
                <div class="niche-item">SaaS</div>
                <div class="niche-item">Social Media</div>
                <div class="niche-item">Fitness</div>
                <div class="niche-item">Real Estate</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
