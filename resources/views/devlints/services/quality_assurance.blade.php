@extends('layouts.master')
@section('title', 'Quality Assurance (QA) Services | Manual & Automated Testing – Devlints')

@section('meta_description', 'Devlints provides quality assurance (QA) and software testing services for US/UK/EU clients—manual testing, automation, cross-browser/device testing, security testing, and performance/load testing for web and mobile apps.')

@section('meta_keywords', 'quality assurance services, qa testing services, software testing company, manual testing, automation testing, regression testing, cross browser testing, performance testing, load testing, security testing')

@section('og_title', 'Quality Assurance (QA) & Testing Services | Devlints')
@section('og_description', 'Launch with confidence—QA testing for web and mobile apps including manual testing, automation, regression, performance/load testing, and security testing for US/UK/EU clients.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'QA Testing Services | Devlints')
@section('twitter_description', 'Manual + automated QA testing to ship stable, secure products—cross-browser/device, regression, performance, and security testing.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

@section('schema_name', 'Quality Assurance (QA) Services')
@section('schema_description', 'Devlints provides QA and software testing services including manual testing, automation, cross-browser/device testing, performance/load testing, and security testing for web and mobile applications.')


@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Service",
          "name":"Quality Assurance (QA) Services",
          "serviceType":"Software Testing",
          "provider": { "@id":"{{ url('/') }}#organization" },
  "url":"{{ url()->current() }}",
  "areaServed":["United States","United Kingdom","Europe"],
  "description":"Devlints provides quality assurance and software testing services including manual testing, automation testing, regression testing, cross-browser/device testing, performance/load testing, and security testing."
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"FAQPage",
          "mainEntity":[
            {
              "@type":"Question",
              "name":"Do you provide both manual and automated QA testing?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We combine manual testing for real user flows with automated testing for repeatable coverage such as regression and critical functionality checks."}
            },
            {
              "@type":"Question",
              "name":"Do you test across browsers, devices, and platforms?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We validate UI and functionality across major browsers and devices to ensure consistent behavior and responsive layouts."}
            },
            {
              "@type":"Question",
              "name":"Do you perform security and performance testing?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We run security-focused checks and performance/load testing to identify vulnerabilities and stability issues under real traffic conditions."}
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
    {"@type":"ListItem","position":3,"name":"Quality Assurance","item":"{{ url()->current() }}"}
  ]
}
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Reliable Quality Assurance (QA) Services</h1>
            <p>
                As a trusted <strong>quality assurance company</strong>, we help businesses launch flawless digital products with confidence. Our <strong>QA testing services</strong> cover every stage of development—ensuring speed, security, and user satisfaction across web, mobile, and enterprise applications.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free QA consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Manual & Automated Testing</h2>
                    <p>
                        We offer both <strong>manual testing</strong> for user behavior and <strong>automated testing</strong> for performance and functionality. Our testing ensures that your application runs smoothly, free from bugs and glitches.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Cross-Platform & Cross-Browser Testing</h2>
                    <p>
                        We validate functionality, layout, and responsiveness across different browsers and devices to ensure a <strong>seamless experience</strong> for all users.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Security & Performance Testing</h2>
                    <p>
                        Protect your users and business with thorough <strong>security testing</strong>. We also run <strong>load and stress tests</strong> to guarantee stability under heavy traffic.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h2>QA Tools & Technologies We Use</h2>
            <p>Our QA engineers use top industry tools to automate, manage, and monitor quality across all environments and devices.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="qaTestingStack">QA Testing Tools</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Our QA & Testing Services</h2>
            <div class="services-grid">
                <div class="service-item">Manual Testing</div>
                <div class="service-item">Automation Testing</div>
                <div class="service-item">Functional & Regression Testing</div>
                <div class="service-item">Performance & Load Testing</div>
                <div class="service-item">Security & Compliance Testing</div>
                <div class="service-item">Mobile & Web App Testing</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h2>QA Solutions for Every Industry</h2>
            <p>Our QA experts test software products across industries—ensuring quality, reliability, and compliance with global standards.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Banking & Finance</div>
                <div class="niche-item">SaaS & Enterprise</div>
                <div class="niche-item">Telecommunications</div>
                <div class="niche-item">Media & Entertainment</div>
                <div class="niche-item">Travel & Hospitality</div>
                <div class="niche-item">Automotive</div>
                <div class="niche-item">Public Sector</div>
                <div class="niche-item">Startups</div>
                <div class="niche-item">Insurance</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
