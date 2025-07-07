@extends('layouts.master')
@section('title') Ecommerce Development @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1> Custom Ecommerce Development Services</h1>
            <p>
                As a leading <strong>eCommerce development company</strong>, we build secure, scalable, and feature-rich online stores that drive conversions and maximize revenue. Our expert developers deliver <strong>custom eCommerce solutions</strong> tailored to your business goals using the latest technologies and frameworks.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free eCommerce development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Custom Online Store Development</h2>
                    <p>
                        We develop fully customized <strong>eCommerce websites</strong> that align with your brand and business model. Our solutions include everything from product management to secure payments and seamless checkout experiences.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Secure & Scalable Architecture</h2>
                    <p>
                        Our development approach ensures <strong>scalability, data security</strong>, and performance optimization for smooth and reliable eCommerce operations across all devices and platforms.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Mobile-First & Responsive Design</h2>
                    <p>
                        We design mobile-optimized online stores that offer a <strong>seamless user experience</strong> on smartphones, tablets, and desktops—ensuring higher engagement and better conversions.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Use in eCommerce Development</h1>
            <p>We work with powerful and modern technologies to deliver fast, secure, and high-performing eCommerce platforms.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="ecommerceStack">Ecommerce Stack</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our eCommerce Development Services</h1>
            <div class="services-grid">
                <div class="service-item">Custom eCommerce Website</div>
                <div class="service-item">Mobile Commerce Solutions</div>
                <div class="service-item">Multi-Vendor Marketplace</div>
                <div class="service-item">Shopping Cart Integration</div>
                <div class="service-item">Third-Party API Integration</div>
                <div class="service-item">Ongoing Maintenance & Support</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>eCommerce Solutions for All Business Types</h1>
            <p>We create growth-driven eCommerce platforms for B2B, B2C, startups, and enterprise retailers—across a wide range of industries.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">Fashion & Apparel</div>
                <div class="niche-item">Electronics</div>
                <div class="niche-item">Health & Beauty</div>
                <div class="niche-item">Furniture</div>
                <div class="niche-item">Jewelry</div>
                <div class="niche-item">Sports & Outdoors</div>
                <div class="niche-item">Grocery</div>
                <div class="niche-item">Home Decor</div>
                <div class="niche-item">Books & Media</div>
                <div class="niche-item">Toys & Baby Products</div>
                <div class="niche-item">Automotive</div>
                <div class="niche-item">Pet Supplies</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
