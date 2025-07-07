@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush
<style>
    .wordpress-text::after {
        content: 'Wordpress';
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
                    <h1>Hire Expert WordPress Developers</h1>
                    <p>Scale your business online with our experienced WordPress developers. From building custom themes
                        to creating SEO-optimized, mobile-friendly websites and WooCommerce stores, we deliver
                        high-performance WordPress solutions tailored to your business goals.</p>
                    <ul>
                        <li>Custom WordPress Theme & Plugin Development</li>
                        <li>WooCommerce Store Setup & Optimization</li>
                        <li>Mobile-First & SEO-Friendly Design</li>
                        <li>WordPress Speed & Security Optimization</li>
                        <li>Flexible Hiring Models (Hourly / Monthly / Project-Based)</li>
                    </ul>
                    <a href="#" class="btn">Request a Free Quote</a>
                </div>
                <div class="wordpress-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire WordPress Developers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>WordPress Expertise</h3>
                    <p>Our developers specialize in WordPress core, custom theme development, plugin integration, and
                        WooCommerce optimization.</p>
                </div>
                <div class="why-hire-card">
                    <h3>SEO-Ready Development</h3>
                    <p>We follow best practices in WordPress SEO including clean code, schema markup, image
                        optimization, and fast loading speeds.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Custom Themes & Plugins</h3>
                    <p>Whether you need a lightweight custom theme or a powerful plugin, our developers can create
                        tailor-made solutions.</p>
                </div>
                <div class="why-hire-card">
                    <h3>WooCommerce Specialists</h3>
                    <p>We build and scale eCommerce stores using WooCommerce, with custom checkout flows, payment
                        integrations, and conversion strategies.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Mobile-Responsive Design</h3>
                    <p>Our websites are designed to look and perform beautifully across all devices—from mobile to
                        desktop.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Ongoing Support</h3>
                    <p>We offer post-launch support, backups, performance monitoring, security hardening, and WordPress
                        version updates.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies & Tools We Use for WordPress Development</h1>
            <p class="tech-para">We work with modern WordPress tools, themes, and plugins to deliver efficient,
                scalable, and high-converting websites.</p>
            <div class="tech-categories"  style="flex-direction: column">

                <div style="width: 280px; margin: auto"  class="tech-category"  data-category="wordpressStack">WordPress Technologies</div>

                <div class="services-grid" ></div>
            </div>

        </div>
    </div>


        <div class="section offshore-section">
            <div class="container">
                <h1>Why Hire Offshore WordPress Developers?</h1>
                <p>Hiring offshore WordPress developers from Devlints offers you top-tier talent, flexible pricing, and
                    faster development cycles without sacrificing quality.</p>
                <div class="offshore-grid">
                    <div class="offshore-card">
                        <h3>Global WordPress Talent</h3>
                        <p>Our offshore team has delivered custom WordPress solutions for clients in eCommerce,
                            education, healthcare, blogs, and real estate.</p>
                    </div>
                    <div class="offshore-card">
                        <h3>Quick Turnaround Time</h3>
                        <p>Our developers follow agile methodology to deliver websites on time without compromising
                            quality or performance.</p>
                    </div>
                    <div class="offshore-card">
                        <h3>Cost-Effective Development</h3>
                        <p>Cut down your development costs by up to 60% with our flexible offshore hiring models.</p>
                    </div>
                    <div class="offshore-card">
                        <h3>Security & Speed Focused</h3>
                        <p>We optimize your WordPress site for speed, security, and search engine performance to ensure
                            long-term success.</p>
                    </div>
                    <div class="offshore-card">
                        <h3>Zero Overhead</h3>
                        <p>You don’t need to worry about hosting, backups, or technical issues—we handle it all for
                            you.</p>
                    </div>
                    <div class="offshore-card">
                        <h3>Transparent Workflow</h3>
                        <p>Collaborate in real-time via Slack, Trello, Zoom, or GitHub for full visibility into every
                            stage of your project.</p>
                    </div>
                </div>
            </div>
        </div>
        @endsection

        @push('scripts')
            <script src="{{ asset('static/js/services.js') }}"></script>
    @endpush
