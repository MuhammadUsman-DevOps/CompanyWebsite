@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush
<style>
    .mobile-app-text::after {
        content: 'App';
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
                    <h1>Hire Dedicated Mobile App Developers</h1>
                    <p>Build high-performing, feature-rich mobile applications with our expert Android, iOS, and cross-platform app developers. Whether you're a startup or an enterprise, our mobile development team delivers robust, scalable, and secure mobile solutions tailored to your unique business needs.</p>
                    <ul>
                        <li>Custom iOS & Android App Development</li>
                        <li>Flutter & React Native Expertise</li>
                        <li>Agile & Transparent Development</li>
                        <li>On-Time Delivery & Regular Updates</li>
                        <li>Flexible Hiring Models</li>
                    </ul>
                    <a href="#" class="btn">Request a Free Quote</a>
                </div>
                <div class="mobile-app-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire Mobile App Developers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Platform Expertise</h3>
                    <p>Our developers have in-depth knowledge of both native and hybrid mobile app frameworks such as Swift, Kotlin, Flutter, and React Native.</p>
                </div>
                <div class="why-hire-card">
                    <h3>User-Centric Design</h3>
                    <p>We craft intuitive, visually appealing, and high-converting mobile interfaces that enhance user engagement and retention.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Timezone-Aligned Collaboration</h3>
                    <p>Our mobile app developers work in your time zone to ensure seamless communication and rapid development cycles.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Proven Track Record</h3>
                    <p>We’ve delivered top-rated apps across industries including healthcare, fintech, education, logistics, and more.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Cost-Effective Solutions</h3>
                    <p>With Devlints, you get premium mobile development services at competitive pricing with no hidden costs.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Post-Launch Support</h3>
                    <p>We offer continuous monitoring, updates, and support to keep your app optimized, secure, and relevant.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Use in Mobile App Development</h1>
            <p class="tech-para">Our developers utilize modern tech stacks and development tools to build mobile apps that are fast, reliable, and easy to maintain.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="ios">iOS</div>
                <div class="tech-category" data-category="android">Android</div>
                <div class="tech-category" data-category="crossPlatform">Cross Platform</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Why Hire Offshore Mobile App Developers?</h1>
            <p>Hiring offshore mobile developers from Devlints ensures quality, flexibility, and faster time to market at significantly lower costs. Here are the major benefits:</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Extensive Mobile Experience</h3>
                    <p>Our offshore team has delivered hundreds of apps for clients across different sectors using the latest mobile technologies.</p>
                </div>
                <div class="offshore-card">
                    <h3>Zero Training Needed</h3>
                    <p>We provide pre-trained, job-ready mobile app developers who can start delivering results from day one.</p>
                </div>
                <div class="offshore-card">
                    <h3>Budget-Friendly</h3>
                    <p>Reduce development costs by up to 60% without sacrificing quality or performance.</p>
                </div>
                <div class="offshore-card">
                    <h3>Shared Project Responsibility</h3>
                    <p>We share the risk and responsibility, ensuring your mobile app development journey is smooth and successful.</p>
                </div>
                <div class="offshore-card">
                    <h3>No Infrastructure Hassles</h3>
                    <p>We handle the infrastructure, tools, and processes—allowing you to focus on your core business.</p>
                </div>
                <div class="offshore-card">
                    <h3>Real-Time Communication</h3>
                    <p>Stay in touch with your offshore mobile team via Zoom, Slack, or Skype for transparent and continuous collaboration.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
