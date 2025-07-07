@extends('layouts.master')
@section('title')
    WordPress Development
@endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Custom WordPress Development Services</h1>
            <p>
                As a trusted <strong>WordPress development company</strong>, we build fast, secure, and scalable
                WordPress websites tailored to your business needs. Our expert developers deliver <strong>custom
                    WordPress solutions</strong> including themes, plugins, eCommerce, and enterprise-grade websites.
            </p>
            <a href="{{ route('contact_us') }}" class="btn"
               aria-label="Request a free WordPress development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Custom WordPress Website Development</h2>
                    <p>
                        We create <strong>bespoke WordPress websites</strong> with a focus on performance, security, and
                        clean code. Our websites are designed to reflect your brand and deliver a seamless user
                        experience.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Theme Design & Development</h2>
                    <p>
                        Our team crafts responsive, SEO-friendly, and pixel-perfect <strong>custom WordPress
                            themes</strong> from scratch or based on Figma/PSD/XD designs with full CMS control and
                        flexibility.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Plugin Development & Integration</h2>
                    <p>
                        Need extra functionality? We build and customize <strong>WordPress plugins</strong> tailored to
                        your unique requirements, while ensuring performance and compatibility.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Use in WordPress Development</h1>
            <p>We leverage modern tools and technologies to deliver flexible, scalable, and SEO-friendly WordPress
                websites.</p>
            <div class="tech-categories" style="flex-direction: column">
                <div style="width: 280px; margin: auto" class="tech-category" data-category="wordpressStack">WordPress Technologies</div>

                <div class="services-grid"></div>
            </div>
        </div>
    </div>

        <div class="section">
            <div class="container">
                <h1>Our WordPress Development Services</h1>
                <div class="services-grid">
                    <div class="service-item">Custom WordPress Website Design</div>
                    <div class="service-item">WooCommerce Development</div>
                    <div class="service-item">Theme Customization & Development</div>
                    <div class="service-item">Plugin Development & Integration</div>
                    <div class="service-item">WordPress Speed Optimization</div>
                    <div class="service-item">Website Migration & Maintenance</div>
                </div>
            </div>
        </div>

        <div class="section niches-section">
            <div class="container">
                <h1>WordPress Solutions for Every Industry</h1>
                <p>We build high-performing WordPress websites for startups, small businesses, and enterprises across a
                    wide range of sectors.</p>
                <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
                <div class="niches-grid">
                    <div class="niche-item">Business Websites</div>
                    <div class="niche-item">eCommerce</div>
                    <div class="niche-item">Blogging & Personal Brands</div>
                    <div class="niche-item">Healthcare</div>
                    <div class="niche-item">Real Estate</div>
                    <div class="niche-item">Education</div>
                    <div class="niche-item">Finance</div>
                    <div class="niche-item">Law Firms</div>
                    <div class="niche-item">Restaurants</div>
                    <div class="niche-item">Travel & Tourism</div>
                    <div class="niche-item">Fitness & Wellness</div>
                    <div class="niche-item">NGOs & Charities</div>
                </div>
            </div>
        </div>
        @endsection

        @push('scripts')
            <script src="{{ asset('static/js/services.js') }}"></script>
    @endpush
