@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

<style>
    .fullStack-developer-text::after {
        content: 'Full Stack';
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
                    <h1>Hire Expert Full Stack Developers</h1>
                    <p>Build scalable, high-performing, and user-friendly web and mobile applications with our skilled full stack developers. From frontend UI to backend architecture and API integration, we offer end-to-end development services using modern tech stacks like MERN, MEAN, Laravel + Vue, and more.</p>
                    <ul>
                        <li>Frontend + Backend Expertise</li>
                        <li>MERN / MEAN / LAMP / Laravel-Vue Developers</li>
                        <li>RESTful API & Third-Party Integration</li>
                        <li>Agile & Scalable Development</li>
                        <li>Flexible Hiring Models</li>
                    </ul>
                    <a href="{{route('contact_us')}}" class="btn">Request a Free Consultation</a>
                </div>
                <div class="fullStack-developer-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire Full Stack Developers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Versatile Tech Expertise</h3>
                    <p>Our developers are proficient in both frontend and backend development using React, Angular, Node.js, PHP, Laravel, Python, and more.</p>
                </div>
                <div class="why-hire-card">
                    <h3>End-to-End Project Ownership</h3>
                    <p>We handle your entire project lifecycle—from wireframes and UI to server setup and database management.</p>
                </div>
                <div class="why-hire-card">
                    <h3>API & Microservices Integration</h3>
                    <p>Our full stack developers integrate third-party APIs and build scalable microservices-based architectures.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Responsive Design & Performance</h3>
                    <p>We create mobile-first, cross-browser compatible applications with lightning-fast load times and smooth UX.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Agile & DevOps Ready</h3>
                    <p>Our developers follow agile methodologies and can collaborate using CI/CD, Git, Docker, and cloud platforms.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Affordable & Flexible Hiring</h3>
                    <p>Choose hourly, monthly, or project-based full stack developers based on your timelines and budget.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technology Stacks We Work With</h1>
            <p class="tech-para">Our full stack developers work across modern frontend frameworks, backend languages, and cloud platforms to deliver robust digital products.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="frontend">Frontend</div>
                <div class="tech-category" data-category="backend"> Backend </div>
                <div class="tech-category" data-category="databases">Databases</div>
                <div class="tech-category" data-category="cloud">Cloud</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Why Hire Offshore Full Stack Developers?</h1>
            <p>Partnering with Devlints gives you access to talented full stack developers worldwide—reducing cost, increasing speed, and ensuring development flexibility.</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Global Development Experience</h3>
                    <p>Our offshore full stack engineers have delivered apps for startups, SMBs, and enterprises across multiple industries.</p>
                </div>
                <div class="offshore-card">
                    <h3>Faster Time-to-Market</h3>
                    <p>Timezone-aligned teams and agile sprints help you release MVPs and new features faster with fewer blockers.</p>
                </div>
                <div class="offshore-card">
                    <h3>Cost Optimization</h3>
                    <p>Reduce your development cost by up to 60% while maintaining top-tier code quality and testing standards.</p>
                </div>
                <div class="offshore-card">
                    <h3>Dedicated Full Stack Resources</h3>
                    <p>Hire dedicated developers with experience in JavaScript, TypeScript, PHP, Python, SQL/NoSQL, and cloud architecture.</p>
                </div>
                <div class="offshore-card">
                    <h3>No Infrastructure Hassles</h3>
                    <p>We provide all the tools, hosting, CI/CD setup, and testing environments so you can focus on business growth.</p>
                </div>
                <div class="offshore-card">
                    <h3>Real-Time Communication</h3>
                    <p>We collaborate via Slack, Jira, GitHub, and Zoom to ensure transparency and productivity throughout your project.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
