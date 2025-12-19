@extends('layouts.master')
@section('title', 'Full Stack Development Company | Web, Mobile & APIs – Devlints')

@section('meta_description', 'Devlints is a full stack development company building scalable web and mobile apps for US/UK/EU clients—frontend + backend development, API integration, database design, cloud deployment, and ongoing maintenance.')

@section('meta_keywords', 'full stack development company, full stack development services, full stack developers, web and mobile development, api development, graphql api, restful api, backend development, frontend development, cloud deployment, devops')

@section('og_title', 'End-to-End Full Stack Development Services | Devlints')
@section('og_description', 'Build complete digital products with Devlints — full stack development, APIs, databases, and cloud-first architecture for US/UK/EU clients.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'Full Stack Development Services | Devlints')
@section('twitter_description', 'Frontend + backend development, API integrations, databases, and cloud deployment—built for performance, security, and scale.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

@section('schema_name', 'Full Stack Development Services')
@section('schema_description', 'Devlints provides full stack development services including frontend and backend development, API integrations, database design, cloud deployment, and maintenance for web and mobile applications.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush
@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Service",
          "name":"Full Stack Development Services",
          "serviceType":"Full Stack Development",
          "provider": { "@id":"{{ url('/') }}#organization" },
  "url":"{{ url()->current() }}",
  "areaServed":["United States","United Kingdom","Europe"],
  "description":"Devlints provides full stack development services including frontend and backend development, API development and integrations, database design, cloud deployment, and ongoing maintenance."
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"FAQPage",
          "mainEntity":[
            {
              "@type":"Question",
              "name":"Do you handle both frontend and backend development?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We deliver end-to-end full stack development, covering UI implementation, backend architecture, database design, and integrations."}
            },
            {
              "@type":"Question",
              "name":"Do you build and integrate APIs (REST/GraphQL)?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We develop and integrate RESTful and GraphQL APIs to connect services, mobile apps, third-party tools, and internal systems securely."}
            },
            {
              "@type":"Question",
              "name":"Do you deploy to the cloud and support DevOps?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We support cloud deployments, CI/CD, monitoring, and scalable infrastructure patterns to keep systems reliable as they grow."}
            }
          ]
        }
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"BreadcrumbList",
          "itemListElement":[
            {"@type":"ListItem","position":1,"name":"Home","item":"{{ url('/') }}"},
    {"@type":"ListItem","position":2,"name":"Services","item":"{{ url('/services') }}"},
    {"@type":"ListItem","position":3,"name":"Full Stack Development","item":"{{ url()->current() }}"}
  ]
}
    </script>
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>End-to-End Full Stack Development Services</h1>
            <p>
                As a leading <strong>full stack development company</strong>, we build scalable, secure, and high-performing web and mobile applications using modern front-end and back-end technologies. Our <strong>full stack developers</strong> handle everything from UI/UX to server-side architecture—delivering complete digital solutions.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free full stack development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Custom Web Application Development</h2>
                    <p>
                        We deliver full-fledged <strong>web app solutions</strong> tailored to your business needs. From intuitive front-end designs to powerful back-end architecture, we ensure optimal performance and scalability.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>API Development & Integration</h2>
                    <p>
                        Our team builds and integrates <strong>RESTful and GraphQL APIs</strong> to ensure seamless communication between different components of your application ecosystem.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Cloud-Based & Scalable Architecture</h2>
                    <p>
                        We develop applications with <strong>cloud-first architecture</strong>—offering flexibility, security, and the ability to scale across user bases and data loads.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h2>Technologies We Use in Full Stack Development</h2>
            <p>Our full stack developers use modern frameworks and tools to deliver secure, maintainable, and high-performance applications.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="frontend">Frontend</div>
                <div class="tech-category" data-category="backend"> Backend </div>
                <div class="tech-category" data-category="databases">Databases</div>
                <div class="tech-category" data-category="cloud">Cloud</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Our Full Stack Development Services</h2>
            <div class="services-grid">
                <div class="service-item">Custom Web & App Development</div>
                <div class="service-item">Front-End & Back-End Integration</div>
                <div class="service-item">Database Design & Optimization</div>
                <div class="service-item">Cloud Deployment & DevOps</div>
                <div class="service-item">API Development & Third-Party Integration</div>
                <div class="service-item">Maintenance & Continuous Improvement</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h2>Full Stack Solutions for All Industries</h2>
            <p>We build robust full stack applications for businesses in diverse industries—ensuring agility, performance, and scalability.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">EdTech</div>
                <div class="niche-item">FinTech</div>
                <div class="niche-item">Logistics</div>
                <div class="niche-item">SaaS Platforms</div>
                <div class="niche-item">Travel & Hospitality</div>
                <div class="niche-item">Real Estate</div>
                <div class="niche-item">Media & Entertainment</div>
                <div class="niche-item">Startups</div>
                <div class="niche-item">Enterprises</div>
                <div class="niche-item">NGOs & Nonprofits</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
