@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush
<style>
    .ecommerce-text::after {
        content: 'eCommerce';
        font-size: 10em;
        font-weight: 900;
        color: rgba(59, 130, 246, 0.1);
        position: absolute;
        top: 60%;
        right: 0;
        transform: translateY(-50%);
    }
</style>
@section("content")
    <div class="section hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hire Expert eCommerce Developers</h1>
                    <p>Launch or scale your online store with our dedicated eCommerce developers. From custom Shopify stores to powerful WooCommerce and Magento solutions, our team builds secure, scalable, and conversion-optimized eCommerce platforms tailored to your brand and business goals.</p>
                    <ul>
                        <li>Custom eCommerce Store Design & Development</li>
                        <li>Shopify, Magento, WooCommerce, BigCommerce Expertise</li>
                        <li>Payment Gateway & API Integration</li>
                        <li>Speed Optimization & SEO-Friendly Architecture</li>
                        <li>Scalable and Secure Solutions</li>
                    </ul>
                    <a href="#" class="btn">Request a Free Quote</a>
                </div>
                <div class="ecommerce-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire eCommerce Developers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Platform Flexibility</h3>
                    <p>Our developers are skilled across all major platforms including Shopify, Magento, WooCommerce, PrestaShop, and custom Laravel-based stores.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Conversion-Focused Development</h3>
                    <p>We build user journeys designed to boost engagement, reduce cart abandonment, and maximize conversions.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Mobile-Optimized Design</h3>
                    <p>We ensure your online store is responsive, fast, and user-friendly on all devices—critical for today’s mobile-first buyers.</p>
                </div>
                <div class="why-hire-card">
                    <h3>SEO & Speed Optimized</h3>
                    <p>Our eCommerce solutions follow technical SEO best practices and are optimized for speed, enhancing visibility and UX.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Secure Payment & Checkout</h3>
                    <p>We implement trusted payment gateways and security protocols to ensure safe transactions and customer trust.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Scalable & Future-Ready</h3>
                    <p>We build with growth in mind—ready to handle product expansion, customer traffic, and third-party integrations.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Use for eCommerce Development</h1>
            <p class="tech-para">We work with the latest eCommerce platforms, frameworks, and tools to deliver high-performing online stores.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="ecommerceStack">Ecommerce Stack</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Why Hire Offshore eCommerce Developers?</h1>
            <p>Hiring offshore eCommerce developers from Devlints gives you cost-efficiency, flexibility, and access to global talent. Here's why brands trust us:</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Experience Across Industries</h3>
                    <p>We’ve built eCommerce solutions for fashion, electronics, beauty, furniture, food delivery, and more.</p>
                </div>
                <div class="offshore-card">
                    <h3>Quick Time to Market</h3>
                    <p>Our developers work in agile sprints to get your store live faster while maintaining code quality and performance.</p>
                </div>
                <div class="offshore-card">
                    <h3>Cost-Effective Engagement</h3>
                    <p>Enjoy world-class development at up to 60% lower cost compared to hiring locally—no compromise on quality.</p>
                </div>
                <div class="offshore-card">
                    <h3>Maintenance & Support</h3>
                    <p>We offer reliable post-launch support, security updates, plugin maintenance, and ongoing performance tuning.</p>
                </div>
                <div class="offshore-card">
                    <h3>No Infrastructure Burden</h3>
                    <p>You don’t need to invest in tools or resources—we handle everything from development to deployment.</p>
                </div>
                <div class="offshore-card">
                    <h3>Real-Time Collaboration</h3>
                    <p>We use Slack, Zoom, Trello, and GitHub to ensure transparent communication and smooth project tracking.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
