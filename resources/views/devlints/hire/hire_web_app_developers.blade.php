@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
    <link rel="stylesheet" href = "{{asset('/static/css/hire-talent.css')}}"
@endpush
<style>
    .web-app-text::after {
        content: 'Web';
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
                    <h1>Hire Dedicated Web Application Developers</h1>
                    <p>Looking to build scalable and high-performance web applications? Hire our experienced web app developers who specialize in crafting custom solutions using modern technologies like Laravel, React, Node.js, and more. We deliver secure, user-friendly, and responsive applications tailored to your business needs.</p>
                    <ul>
                        <li>Agile & Transparent Development Process</li>
                        <li>Full-Stack Expertise</li>
                        <li>100% Client Satisfaction</li>
                        <li>Timely Delivery & Ongoing Support</li>
                        <li>Customizable Hiring Models</li>
                    </ul>
                    <a href="#" class="btn">Request a Free Quote</a>
                </div>
                <div class="web-app-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire Web App Developers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Full-Stack Capabilities</h3>
                    <p>Our web developers are proficient in front-end and back-end development, delivering end-to-end solutions with optimal performance and seamless user experience.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Scalable Architecture</h3>
                    <p>We build scalable and maintainable applications that grow with your business and adapt to evolving tech landscapes.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Time-Zone Flexibility</h3>
                    <p>Our developers collaborate with global clients and are available to work in your preferred time zone.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Proven Track Record</h3>
                    <p>With a 95% project success rate and a wide portfolio, we deliver results on time and within budget.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Affordable Rates</h3>
                    <p>We provide premium web development services at cost-effective rates without compromising on quality or timelines.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Ongoing Support & Maintenance</h3>
                    <p>Our team offers post-launch support, performance monitoring, and security updates to keep your application running smoothly.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Work With</h1>
            <p>We check out complete programming languages, databases, platforms, and cloud systems to complete projects.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="frontend">Frontend</div>
                <div class="tech-category" data-category="backend">Backend</div>
                <div class="tech-category" data-category="databases">Databases</div>
                <div class="tech-category" data-category="cloud">Cloud</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Benefits of Hiring Offshore Web App Developers</h1>
            <p>Hiring offshore developers helps you access skilled professionals, reduce costs, and scale efficiently. Here’s why Devlints is the best choice for outsourcing your web app development.</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Extensive Industry Experience</h3>
                    <p>Our offshore developers have hands-on experience across industries like healthcare, e-commerce, logistics, fintech, and more.</p>
                </div>
                <div class="offshore-card">
                    <h3>Ready-to-Deploy Talent</h3>
                    <p>No training required—our web app developers are pre-vetted, experienced, and ready to contribute from day one.</p>
                </div>
                <div class="offshore-card">
                    <h3>Cost Efficiency</h3>
                    <p>Save up to 60% in development costs by hiring highly qualified professionals without the burden of infrastructure and HR overhead.</p>
                </div>
                <div class="offshore-card">
                    <h3>Reduced Risk</h3>
                    <p>We share project responsibilities and help you avoid bottlenecks through agile project management and experienced leadership.</p>
                </div>
                <div class="offshore-card">
                    <h3>Infrastructure-Free Hiring</h3>
                    <p>Forget office space and hardware expenses—our developers work remotely with full access to tools, servers, and CI/CD pipelines.</p>
                </div>
                <div class="offshore-card">
                    <h3>Seamless Communication</h3>
                    <p>Stay connected with your offshore team via Slack, Zoom, Google Meet, or your preferred platform for daily sync-ups.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
