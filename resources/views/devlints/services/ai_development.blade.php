@extends('layouts.master')
@section('title') AI Development Services @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Custom AI Development Services</h1>
            <p>
                As a top-tier <strong>AI development company</strong>, we design and build intelligent systems that solve real-world problems. Our team of AI experts delivers scalable <strong>artificial intelligence solutions</strong> for automation, prediction, personalization, and data-driven decision-making across industries.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free AI development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Custom AI Solution Development</h2>
                    <p>
                        We develop tailored <strong>AI-powered applications</strong> that integrate machine learning, natural language processing, and computer vision—built to match your specific business goals and datasets.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Machine Learning & Predictive Analytics</h2>
                    <p>
                        From model training to deployment, we deliver accurate <strong>ML models</strong> that detect trends, predict outcomes, and support better business decisions with real-time data.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Chatbots & NLP Integration</h2>
                    <p>
                        Our team builds intelligent <strong>AI chatbots</strong> and virtual assistants using advanced <strong>natural language processing (NLP)</strong> to automate customer service, sales, and support.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>AI Tools & Technologies We Use</h1>
            <p>We leverage the most advanced tools and AI frameworks to create secure, scalable, and production-ready AI applications.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="aiStack">AI Tools Stack</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our AI Development Services</h1>
            <div class="services-grid">
                <div class="service-item">AI Strategy & Consulting</div>
                <div class="service-item">Custom Machine Learning Models</div>
                <div class="service-item">Natural Language Processing (NLP)</div>
                <div class="service-item">AI-Powered Chatbots</div>
                <div class="service-item">Computer Vision Solutions</div>
                <div class="service-item">Model Deployment & Monitoring</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>AI Solutions for Every Industry</h1>
            <p>We empower businesses across industries with intelligent automation and AI-driven transformation tailored to their unique needs.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Finance</div>
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Retail</div>
                <div class="niche-item">Manufacturing</div>
                <div class="niche-item">Logistics</div>
                <div class="niche-item">SaaS Platforms</div>
                <div class="niche-item">Travel & Hospitality</div>
                <div class="niche-item">Legal Tech</div>
                <div class="niche-item">Real Estate</div>
                <div class="niche-item">Cybersecurity</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
