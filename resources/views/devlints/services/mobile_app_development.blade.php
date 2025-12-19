@extends('layouts.master')
@section('title', 'Mobile App Development Company | iOS, Android & Cross-Platform – Devlints')

@section('meta_description', 'Devlints is a mobile app development company building secure, scalable iOS, Android, Flutter, and React Native apps for US/UK/EU clients—from MVPs to enterprise mobile solutions.')

@section('meta_keywords', 'mobile app development company, mobile app development services, ios app development, android app development, flutter app development, react native app development, cross platform app development')

@section('og_title', 'Mobile App Development Services | Devlints')
@section('og_description', 'Build high-performance mobile apps with Devlints — iOS, Android, Flutter, and React Native solutions for US/UK/EU clients.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'Mobile App Development Company | Devlints')
@section('twitter_description', 'Custom iOS, Android, Flutter & React Native apps built for performance, security, and scale.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

@section('schema_name', 'Mobile App Development Services')
@section('schema_description', 'Devlints builds secure, scalable mobile applications for US/UK/EU clients including iOS, Android, Flutter, and React Native apps.')
@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Service",
          "name":"Mobile App Development Services",
          "serviceType":"Mobile Application Development",
          "provider": { "@id":"{{ url('/') }}#organization" },
  "url":"{{ url()->current() }}",
  "areaServed":["United States","United Kingdom","Europe"],
  "description":"Devlints builds secure, scalable mobile applications including iOS, Android, Flutter, and React Native solutions."
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"FAQPage",
          "mainEntity":[
            {
              "@type":"Question",
              "name":"Do you build native iOS and Android apps?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We build native iOS and Android apps as well as cross-platform apps depending on your requirements, timeline, and budget."}
            },
            {
              "@type":"Question",
              "name":"Do you build cross-platform apps with Flutter or React Native?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We build cross-platform apps using Flutter and React Native for faster development and consistent UX across devices."}
            },
            {
              "@type":"Question",
              "name":"Do you provide app maintenance and updates?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We provide ongoing maintenance, OS compatibility updates, performance improvements, and feature iterations after launch."}
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
    {"@type":"ListItem","position":3,"name":"Mobile App Development","item":"{{ url()->current() }}"}
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
            <h1> Mobile App Development Services</h1>
            <p>
                As a trusted <strong>mobile app development company</strong>, we specialize in building <strong>high-performance</strong>, <strong>secure</strong>, and <strong>scalable mobile applications</strong> tailored to your business needs.
                From startups to enterprises, our <strong>custom mobile app solutions</strong> help streamline operations, improve user engagement, and drive growth across Android, iOS, and cross-platform environments.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free mobile app development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>End-to-End Mobile App Development</h2>
                    <p>
                        We offer complete <strong>mobile app development services</strong> from strategy and design to development and launch.
                        Whether you need an MVP, a fully-featured enterprise app, or an eCommerce solution, we deliver custom apps that align with your goals and deliver measurable results.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>User-Centric UI/UX Design</h2>
                    <p>
                        Our team focuses on creating <strong>intuitive, responsive designs</strong> that offer seamless user experiences on smartphones and tablets.
                        We design mobile interfaces that are easy to navigate, visually appealing, and optimized for engagement and retention.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Native & Cross-Platform Solutions</h2>
                    <p>
                        We develop both <strong>native apps (Android/iOS)</strong> and <strong>cross-platform apps</strong> using modern frameworks like Flutter and React Native.
                        Our solutions are optimized for performance, scalability, and long-term growth across different devices and platforms.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h2>Technologies We Work With</h2>
            <p>We use the latest programming languages, frameworks, databases, and mobile development tools to deliver powerful app solutions.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="ios">iOS</div>
                <div class="tech-category" data-category="android">Android</div>
                <div class="tech-category" data-category="crossPlatform">Cross Platform</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Mobile App Development Services</h2>
            <div class="services-grid">
                <div class="service-item">Custom Mobile Apps</div>
                <div class="service-item">eCommerce Applications</div>
                <div class="service-item">Enterprise Mobility Solutions</div>
                <div class="service-item">Cross-Platform Apps</div>
                <div class="service-item">iOS & Android Development</div>
                <div class="service-item">App Maintenance & Support</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h2>Mobile App Solutions for All Industries</h2>
            <p>Whatever industry you operate in, our experienced mobile app developers can help you launch a robust and scalable solution tailored to your business requirements.</p>
            <a href="#" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Logistics</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Retail</div>
                <div class="niche-item">Finance</div>
                <div class="niche-item">Wellness & Fitness</div>
                <div class="niche-item">Oil & Gas</div>
                <div class="niche-item">Transportation</div>
                <div class="niche-item">Travel</div>
                <div class="niche-item">Social Networking</div>
                <div class="niche-item">Events</div>
                <div class="niche-item">Productivity</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
