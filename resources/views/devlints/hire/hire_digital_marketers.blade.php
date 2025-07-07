@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush
<style>
    .digital-marketing-text::after {
        content: 'Digital Marketing';
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
                    <h1>Hire Expert Digital Marketers</h1>
                    <p>Grow your brand visibility, traffic, and sales with our result-driven digital marketers. From SEO and PPC to content marketing and social media management, our certified professionals create powerful campaigns that drive ROI across all digital channels.</p>
                    <ul>
                        <li>Data-Driven SEO Strategies</li>
                        <li>Google & Meta Ads Certified Professionals</li>
                        <li>Social Media Growth & Management</li>
                        <li>Conversion-Focused Landing Pages</li>
                        <li>Performance Reports & KPI Tracking</li>
                    </ul>
                    <a href="#" class="btn">Get a Free Marketing Proposal</a>
                </div>
                <div class="digital-marketing-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire Digital Marketers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Certified & Experienced Marketers</h3>
                    <p>Our team includes Google Ads, Meta Blueprint, and HubSpot certified professionals with proven campaign success.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Omnichannel Marketing</h3>
                    <p>We craft integrated strategies that cover SEO, PPC, email, content, and social media to maximize your reach.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Custom Campaigns</h3>
                    <p>Every brand is unique. We tailor campaigns according to your industry, audience behavior, and growth goals.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Transparent Reporting</h3>
                    <p>We provide regular updates with real-time dashboards, Google Analytics tracking, and campaign performance insights.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Affordable Packages</h3>
                    <p>Choose hourly, monthly, or project-based digital marketing services that suit your budget without sacrificing quality.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Continuous Optimization</h3>
                    <p>We constantly monitor and improve your campaigns based on trends, analytics, and A/B test results.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Tools & Platforms We Use in Digital Marketing</h1>
            <p class="tech-para">We utilize the latest marketing tools, analytics platforms, and ad technologies to deliver measurable results.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="marketingStack">Digital Marketing Tools</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Why Hire Offshore Digital Marketers?</h1>
            <p>Our offshore digital marketers offer global expertise, fast execution, and competitive pricing. Here's how you benefit with Devlints:</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Global Marketing Experience</h3>
                    <p>We’ve handled campaigns for brands across North America, Europe, and the Middle East—ensuring culturally aware messaging.</p>
                </div>
                <div class="offshore-card">
                    <h3>Faster Go-to-Market</h3>
                    <p>With timezone-aligned teams, we reduce delays and speed up your campaigns from strategy to execution.</p>
                </div>
                <div class="offshore-card">
                    <h3>Lower Marketing Costs</h3>
                    <p>Our offshore model offers premium marketing services at significantly lower costs compared to in-house teams.</p>
                </div>
                <div class="offshore-card">
                    <h3>Full-Service Delivery</h3>
                    <p>From ad creatives to keyword planning and analytics—we handle every aspect of your digital presence.</p>
                </div>
                <div class="offshore-card">
                    <h3>No Overhead</h3>
                    <p>No software licenses, no HR headaches—just focused marketing output from experienced specialists.</p>
                </div>
                <div class="offshore-card">
                    <h3>Real-Time Collaboration</h3>
                    <p>We work through tools like Slack, Trello, and Google Meet to ensure smooth communication and fast feedback loops.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
