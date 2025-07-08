@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

<style>
    .ui-ux-text::after {
        content: 'UI / UX';
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
                    <h1>Hire Dedicated UI/UX Designers</h1>
                    <p>Craft intuitive, visually stunning, and conversion-driven digital experiences with our expert UI/UX designers. We help startups, enterprises, and agencies bring their ideas to life through user-centric design for web, mobile, and enterprise applications.</p>
                    <ul>
                        <li>Custom UI Design & UX Strategy</li>
                        <li>Wireframing, Prototyping & Interaction Design</li>
                        <li>Web & Mobile App Interface Design</li>
                        <li>Design Systems & Component Libraries</li>
                        <li>Flexible Hiring Engagements</li>
                    </ul>
                    <a href="{{route('contact_us')}}" class="btn">Request a Free Quote</a>
                </div>
                <div class="ui-ux-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire UI/UX Designers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Human-Centered Design</h3>
                    <p>We focus on user research and behavior to design intuitive experiences that solve real problems and delight end-users.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Experienced Design Team</h3>
                    <p>Our UI/UX experts have worked on 150+ projects spanning e-commerce, SaaS, fintech, healthcare, and more.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Mobile-First Approach</h3>
                    <p>We prioritize responsiveness and accessibility, ensuring flawless user experiences across devices and platforms.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Prototyping & Usability Testing</h3>
                    <p>We build interactive prototypes and validate ideas through user testing before development begins—saving you time and money.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Collaborative Process</h3>
                    <p>We use tools like Figma, Adobe XD, and Zeplin to keep clients in the loop and ensure seamless handoff to developers.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Affordable, Scalable Engagements</h3>
                    <p>Choose from hourly, weekly, or project-based hiring models to scale your design needs as your project grows.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Design Tools & Technologies We Use</h1>
            <p class="tech-para">Our UI/UX designers work with industry-leading tools to create pixel-perfect interfaces and seamless user flows.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="designTools">Design Tools</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Why Hire Offshore UI/UX Designers?</h1>
            <p>Hiring offshore UI/UX talent from Devlints helps you reduce costs while ensuring high-quality design execution and innovation. Here’s why our clients love working with us:</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Diverse Design Experience</h3>
                    <p>Our offshore designers have worked on a wide range of apps and platforms, giving them a global design perspective.</p>
                </div>
                <div class="offshore-card">
                    <h3>Rapid Onboarding</h3>
                    <p>Start your UI/UX journey immediately with our ready-to-deploy design professionals—no training required.</p>
                </div>
                <div class="offshore-card">
                    <h3>Cost-Effective Engagement</h3>
                    <p>Reduce your design spend by up to 50% without compromising on creativity or quality.</p>
                </div>
                <div class="offshore-card">
                    <h3>Consistency & Branding</h3>
                    <p>We follow brand guidelines strictly and build scalable design systems for consistent digital presence.</p>
                </div>
                <div class="offshore-card">
                    <h3>No Overhead</h3>
                    <p>You don’t need to invest in design software or infrastructure—we handle it all.</p>
                </div>
                <div class="offshore-card">
                    <h3>Transparent Communication</h3>
                    <p>We collaborate in real-time using tools like Slack, Figma, Trello, and Google Meet to keep your project moving forward.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
