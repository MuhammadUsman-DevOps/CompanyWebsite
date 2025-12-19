@extends('layouts.master')
@section('title', 'iOS & Android App Development Company | Native & Cross-Platform – Devlints')

@section('meta_description', 'Devlints builds high-performance iOS and Android apps for US/UK/EU clients—native (Swift/Kotlin) and cross-platform (Flutter/React Native) development, UI/UX design, ASO, and maintenance.')

@section('meta_keywords', 'ios app development company, android app development company, ios and android app development, native app development, swift developers, kotlin developers, flutter app development, react native app development, mobile app ui ux, app maintenance')

@section('og_title', 'iOS & Android App Development Services | Devlints')
@section('og_description', 'Build native iOS/Android apps or cross-platform apps with Devlints — Swift/Kotlin, Flutter/React Native, UI/UX, ASO, and support for US/UK/EU clients.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'iOS & Android App Development | Devlints')
@section('twitter_description', 'Native + cross-platform app development: Swift/Kotlin, Flutter/React Native, UI/UX, ASO, and long-term maintenance.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')


@section('schema_name', 'iOS & Android App Development Services')
@section('schema_description', 'Devlints builds native iOS and Android apps and cross-platform apps (Flutter/React Native) including UI/UX design, ASO, and ongoing maintenance for US/UK/EU clients.')
@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Service",
          "name":"iOS & Android App Development Services",
          "serviceType":"Mobile App Development",
          "provider": { "@id":"{{ url('/') }}#organization" },
  "url":"{{ url()->current() }}",
  "areaServed":["United States","United Kingdom","Europe"],
  "description":"Devlints provides iOS and Android app development services including native development (Swift/Kotlin), cross-platform apps (Flutter/React Native), UI/UX design, ASO, and maintenance."
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
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We build native iOS apps (Swift) and Android apps (Kotlin/Java) optimized for performance, reliability, and app store guidelines."}
            },
            {
              "@type":"Question",
              "name":"Do you build cross-platform apps with Flutter or React Native?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We build cross-platform apps using Flutter and React Native for faster delivery while maintaining a consistent experience across devices."}
            },
            {
              "@type":"Question",
              "name":"Do you provide post-launch support and app maintenance?",
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
    {"@type":"ListItem","position":3,"name":"iOS & Android App Development","item":"{{ url()->current() }}"}
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
            <h1>Custom Mobile App Development Services</h1>
            <p>
                As a top-rated <strong>mobile app development company</strong>, we build secure, scalable, and high-performing mobile apps for iOS, Android, and cross-platform solutions. Our <strong>app developers</strong> create intuitive, user-friendly applications that engage users and drive results.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free mobile app development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>iOS & Android App Development</h2>
                    <p>
                        We offer expert <strong>native app development</strong> for iOS and Android using Swift, Kotlin, and Java — optimized for performance, reliability, and app store guidelines.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Cross-Platform App Development</h2>
                    <p>
                        Using frameworks like <strong>Flutter and React Native</strong>, we build apps that work seamlessly across devices—reducing cost and time-to-market while maximizing reach.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>UI/UX Design & App Strategy</h2>
                    <p>
                        We combine strategic planning and stunning UI/UX design to deliver <strong>mobile apps</strong> that users love. From wireframing to prototyping, every step is crafted to convert.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h2>Technologies We Use in App Development</h2>
            <p>We use cutting-edge technologies and mobile frameworks to build future-ready apps that perform under scale.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="appDevStack">App Development Stack</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Our Mobile App Development Services</h2>
            <div class="services-grid">
                <div class="service-item">iOS App Development</div>
                <div class="service-item">Android App Development</div>
                <div class="service-item">Cross-Platform App Development</div>
                <div class="service-item">App UI/UX Design</div>
                <div class="service-item">App Store Optimization (ASO)</div>
                <div class="service-item">App Maintenance & Support</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h2>App Development for All Industries</h2>
            <p>We develop custom mobile apps tailored to various industries — empowering businesses with innovative mobile experiences.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Finance</div>
                <div class="niche-item">Fitness & Wellness</div>
                <div class="niche-item">Real Estate</div>
                <div class="niche-item">Logistics</div>
                <div class="niche-item">Travel & Tourism</div>
                <div class="niche-item">Media & Entertainment</div>
                <div class="niche-item">Food Delivery</div>
                <div class="niche-item">Productivity Tools</div>
                <div class="niche-item">On-Demand Services</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
