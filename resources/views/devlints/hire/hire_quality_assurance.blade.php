@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush
<style>
    .qa-text::after {
        content: 'Quality Assurance';
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
                    <h1>Hire Quality Assurance (QA) Engineers</h1>
                    <p>Ensure flawless product performance with our expert QA engineers. Whether you need manual testers, automation engineers, or full QA teams, we deliver reliable quality assurance services to eliminate bugs, improve performance, and enhance user experience across platforms.</p>
                    <ul>
                        <li>Manual & Automated Testing Services</li>
                        <li>Web, Mobile & API Testing</li>
                        <li>Cross-Browser & Cross-Device Testing</li>
                        <li>Bug Reporting & Test Case Documentation</li>
                        <li>End-to-End QA Support</li>
                    </ul>
                    <a href="{{route('contact_us')}}" class="btn">Get a Free QA Consultation</a>
                </div>
                <div class="qa-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire QA Engineers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Certified QA Professionals</h3>
                    <p>Our team includes ISTQB-certified testers with deep knowledge of QA methodologies, tools, and frameworks.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Manual & Automation Expertise</h3>
                    <p>From exploratory testing to Selenium-based automation, our QA engineers ensure every feature performs as expected.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Full-Cycle QA Support</h3>
                    <p>We handle QA from planning and strategy to execution, regression, performance, and post-launch support.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Custom Test Plans</h3>
                    <p>We write detailed test cases tailored to your project’s goals, complexity, and user expectations.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Quick Setup, Fast Delivery</h3>
                    <p>Our QA team can quickly integrate with your developers, ensuring faster releases and fewer critical bugs.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Bug-Free User Experience</h3>
                    <p>We help improve your product quality, reduce customer complaints, and enhance brand reputation through systematic QA.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>QA Tools & Technologies We Use</h1>
            <p class="tech-para">Our QA engineers use modern testing tools and frameworks to ensure high accuracy, scalability, and efficiency in every project.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="qaTestingStack">QA Testing Tools</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Why Hire Offshore QA Engineers?</h1>
            <p>Hiring offshore QA engineers from Devlints helps you cut costs, accelerate releases, and ensure product quality at every stage. Here’s how:</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Skilled Global Talent</h3>
                    <p>Our offshore QA specialists have worked on 100+ software, mobile, and web projects across multiple domains.</p>
                </div>
                <div class="offshore-card">
                    <h3>Cost-Efficient QA Delivery</h3>
                    <p>Achieve better quality outcomes at lower costs—our remote QA services save you up to 60% in QA staffing expenses.</p>
                </div>
                <div class="offshore-card">
                    <h3>Faster Time to Market</h3>
                    <p>24/7 testing cycles and timezone-aligned collaboration speed up bug detection and release timelines.</p>
                </div>
                <div class="offshore-card">
                    <h3>Flexible Hiring Models</h3>
                    <p>Hire QA professionals hourly, monthly, or per-project—scale up or down depending on your development lifecycle.</p>
                </div>
                <div class="offshore-card">
                    <h3>Integrated Workflows</h3>
                    <p>Our QA team works directly with your developers using tools like JIRA, TestRail, GitHub, and Slack.</p>
                </div>
                <div class="offshore-card">
                    <h3>Zero Overhead</h3>
                    <p>No hardware, tools, or infrastructure needed—our QA team comes fully equipped for efficient testing operations.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
