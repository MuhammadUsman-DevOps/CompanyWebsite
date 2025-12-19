@extends('layouts.master')
@section('title', 'WordPress Development Company | Custom Themes & Plugins – Devlints')

@section('meta_description', 'Devlints is a WordPress development company building fast, secure, SEO-friendly WordPress websites for US/UK/EU clients—custom themes, plugins, WooCommerce stores, speed optimization, and maintenance.')

@section('meta_keywords', 'wordpress development company, wordpress development services, custom wordpress website, wordpress theme development, wordpress plugin development, woocommerce development, wordpress speed optimization, wordpress maintenance, wordpress migration')

@section('og_title', 'Custom WordPress Development Services | Devlints')
@section('og_description', 'Build high-performing WordPress websites with Devlints — custom themes, plugins, WooCommerce, speed optimization, and long-term support for US/UK/EU clients.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'WordPress Development Company | Devlints')
@section('twitter_description', 'Custom WordPress websites, themes, plugins, and WooCommerce—built for speed, security, and SEO.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

@section('schema_name', 'WordPress Development Services')
@section('schema_description', 'Devlints builds fast, secure, SEO-friendly WordPress websites including custom themes, plugins, WooCommerce stores, migrations, and ongoing maintenance for US/UK/EU clients.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush
@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Service",
          "name":"WordPress Development Services",
          "serviceType":"WordPress Development",
          "provider": { "@id":"{{ url('/') }}#organization" },
  "url":"{{ url()->current() }}",
  "areaServed":["United States","United Kingdom","Europe"],
  "description":"Devlints provides WordPress development services including custom websites, theme development, plugin development, WooCommerce, performance optimization, migrations, and maintenance."
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"FAQPage",
          "mainEntity":[
            {
              "@type":"Question",
              "name":"Do you build custom WordPress themes from Figma/PSD/XD designs?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We convert designs into responsive, SEO-friendly custom WordPress themes with full CMS control and clean, maintainable code."}
            },
            {
              "@type":"Question",
              "name":"Do you develop and customize WordPress plugins?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We build and customize WordPress plugins to add functionality while ensuring performance, security, and compatibility."}
            },
            {
              "@type":"Question",
              "name":"Do you build WooCommerce stores and optimize site speed?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We build WooCommerce stores and provide speed optimization, caching, image optimization, and performance improvements for better conversion."}
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
    {"@type":"ListItem","position":3,"name":"WordPress Development","item":"{{ url()->current() }}"}
  ]
}
    </script>
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1>Custom WordPress Development Services</h1>
            <p>
                As a trusted <strong>WordPress development company</strong>, we build fast, secure, and scalable
                WordPress websites tailored to your business needs. Our expert developers deliver <strong>custom
                    WordPress solutions</strong> including themes, plugins, eCommerce, and enterprise-grade websites.
            </p>
            <a href="{{ route('contact_us') }}" class="btn"
               aria-label="Request a free WordPress development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Custom WordPress Website Development</h2>
                    <p>
                        We create <strong>bespoke WordPress websites</strong> with a focus on performance, security, and
                        clean code. Our websites are designed to reflect your brand and deliver a seamless user
                        experience.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Theme Design & Development</h2>
                    <p>
                        Our team crafts responsive, SEO-friendly, and pixel-perfect <strong>custom WordPress
                            themes</strong> from scratch or based on Figma/PSD/XD designs with full CMS control and
                        flexibility.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Plugin Development & Integration</h2>
                    <p>
                        Need extra functionality? We build and customize <strong>WordPress plugins</strong> tailored to
                        your unique requirements, while ensuring performance and compatibility.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h2>Technologies We Use in WordPress Development</h2>
            <p>We leverage modern tools and technologies to deliver flexible, scalable, and SEO-friendly WordPress
                websites.</p>
            <div class="tech-categories" style="flex-direction: column">
                <div style="width: 280px; margin: auto" class="tech-category" data-category="wordpressStack">WordPress Technologies</div>

                <div class="services-grid"></div>
            </div>
        </div>
    </div>

        <div class="section">
            <div class="container">
                <h2>Our WordPress Development Services</h2>
                <div class="services-grid">
                    <div class="service-item">Custom WordPress Website Design</div>
                    <div class="service-item">WooCommerce Development</div>
                    <div class="service-item">Theme Customization & Development</div>
                    <div class="service-item">Plugin Development & Integration</div>
                    <div class="service-item">WordPress Speed Optimization</div>
                    <div class="service-item">Website Migration & Maintenance</div>
                </div>
            </div>
        </div>

        <div class="section niches-section">
            <div class="container">
                <h2>WordPress Solutions for Every Industry</h2>
                <p>We build high-performing WordPress websites for startups, small businesses, and enterprises across a
                    wide range of sectors.</p>
                <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
                <div class="niches-grid">
                    <div class="niche-item">Business Websites</div>
                    <div class="niche-item">eCommerce</div>
                    <div class="niche-item">Blogging & Personal Brands</div>
                    <div class="niche-item">Healthcare</div>
                    <div class="niche-item">Real Estate</div>
                    <div class="niche-item">Education</div>
                    <div class="niche-item">Finance</div>
                    <div class="niche-item">Law Firms</div>
                    <div class="niche-item">Restaurants</div>
                    <div class="niche-item">Travel & Tourism</div>
                    <div class="niche-item">Fitness & Wellness</div>
                    <div class="niche-item">NGOs & Charities</div>
                </div>
            </div>
        </div>
        @endsection

        @push('scripts')
            <script src="{{ asset('static/js/services.js') }}"></script>
    @endpush
