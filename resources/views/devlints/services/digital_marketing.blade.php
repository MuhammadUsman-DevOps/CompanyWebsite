@extends('layouts.master')
@section('title', 'Digital Marketing Agency | SEO, PPC & Social Media – Devlints')

@section('meta_description', 'Devlints is a digital marketing agency helping US/UK/EU businesses grow with SEO, PPC (Google Ads), social media, content marketing, email marketing, and conversion rate optimization (CRO).')

@section('meta_keywords', 'digital marketing agency, digital marketing services, seo services, ppc management, google ads agency, social media marketing, content marketing services, email marketing, conversion rate optimization, cro services')

@section('og_title', 'Result-Driven Digital Marketing Services | Devlints')
@section('og_description', 'Grow traffic, leads, and revenue with Devlints — SEO, PPC, social media, content marketing, email marketing, and CRO for US/UK/EU businesses.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'Digital Marketing Services | Devlints')
@section('twitter_description', 'SEO, Google Ads/PPC, social media, content, email marketing, and CRO — designed to drive measurable growth.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

@section('schema_name', 'Digital Marketing Services')
@section('schema_description', 'Devlints provides digital marketing services including SEO, PPC/Google Ads, social media marketing, content marketing, email marketing, and conversion rate optimization (CRO).')

@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Service",
          "name":"Digital Marketing Services",
          "serviceType":"Digital Marketing",
          "provider": { "@id":"{{ url('/') }}#organization" },
  "url":"{{ url()->current() }}",
  "areaServed":["United States","United Kingdom","Europe"],
  "description":"Devlints provides digital marketing services including SEO, PPC/Google Ads, social media marketing, content marketing, email marketing, and conversion rate optimization (CRO)."
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"FAQPage",
          "mainEntity":[
            {
              "@type":"Question",
              "name":"Do you provide SEO for long-term organic growth?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We handle technical SEO, on-page optimization, content strategy, and link-building approaches focused on sustainable rankings and traffic growth."}
            },
            {
              "@type":"Question",
              "name":"Do you manage Google Ads / PPC campaigns?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We set up and manage ROI-focused PPC campaigns, including keyword research, ad creatives, landing page feedback, conversion tracking, and ongoing optimization."}
            },
            {
              "@type":"Question",
              "name":"Can you improve conversion rate (CRO) on our landing pages?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We identify conversion blockers and implement improvements to messaging, UX, speed, and funnel tracking to increase leads and sales."}
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
    {"@type":"ListItem","position":3,"name":"Digital Marketing","item":"{{ url()->current() }}"}
  ]
}
    </script>
@endpush


@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Result-Driven Digital Marketing Services</h1>
            <p>
                As a leading <strong>digital marketing agency</strong>, we help businesses increase their online visibility, generate high-quality leads, and grow revenue. Our <strong>data-driven marketing strategies</strong> combine SEO, PPC, social media, and content marketing to deliver measurable results.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free digital marketing consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Search Engine Optimization (SEO)</h2>
                    <p>
                        We implement proven <strong>SEO techniques</strong> to help your website rank higher on search engines, drive organic traffic, and build long-term brand authority with technical SEO, on-page SEO, and link building.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Pay-Per-Click Advertising (PPC)</h2>
                    <p>
                        Our certified experts manage ROI-focused <strong>Google Ads, Bing Ads, and display campaigns</strong> to deliver immediate results and boost qualified traffic to your landing pages and product offers.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Social Media Marketing</h2>
                    <p>
                        We create and manage <strong>social media campaigns</strong> on Facebook, Instagram, LinkedIn, and more to increase engagement, grow followers, and promote your brand to the right audience.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Tools & Platforms We Use</h1>
            <p>We use industry-leading tools to monitor performance, optimize campaigns, and drive measurable marketing success.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="marketingStack">Digital Marketing Tools</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our Digital Marketing Services</h1>
            <div class="services-grid">
                <div class="service-item">Search Engine Optimization (SEO)</div>
                <div class="service-item">Google Ads / PPC Campaigns</div>
                <div class="service-item">Social Media Marketing</div>
                <div class="service-item">Content Marketing</div>
                <div class="service-item">Email Marketing</div>
                <div class="service-item">Conversion Rate Optimization (CRO)</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>Digital Marketing for Every Industry</h1>
            <p>We create tailored digital marketing strategies for businesses across industries—driving growth, leads, and brand visibility.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Real Estate</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Education</div>
                <div class="niche-item">Finance</div>
                <div class="niche-item">Fitness & Wellness</div>
                <div class="niche-item">Travel & Tourism</div>
                <div class="niche-item">Automotive</div>
                <div class="niche-item">Law Firms</div>
                <div class="niche-item">Startups</div>
                <div class="niche-item">B2B SaaS</div>
                <div class="niche-item">NGOs & Nonprofits</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
