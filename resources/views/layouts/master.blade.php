<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <link rel="icon" href="{{ asset('static/images/favicon.ico') }}" type="image/x-icon">

    {{-- Title --}}
    <title>@yield('title', 'Devlints – Delivering Custom Software with Agile Processes and Expert Talent')</title>

    {{-- Basic SEO --}}
    <meta name="description"
          content="@yield('meta_description', 'Devlints builds scalable web apps, mobile apps, and SaaS platforms for US/UK/EU clients — fast delivery, clean architecture, and reliable long-term support.')">
    <meta name="keywords"
          content="@yield('meta_keywords', 'web app development, mobile app development, saas development, full stack development, custom software development, devlints')">

    <link rel="canonical" href="@yield('canonical', url()->current())">
    <meta name="robots" content="@yield('robots', 'index, follow')">

    {{-- Open Graph --}}
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Devlints – Custom Software, Web Apps, Mobile Apps & SaaS')">
    <meta property="og:description"
          content="@yield('og_description', 'We build modern web apps, mobile apps, and SaaS products for US/UK/EU clients with secure, scalable architecture.')">
    <meta property="og:image" content="@yield('og_image', asset('static/images/og/devlints-og.webp'))">
    <meta property="og:url" content="@yield('og_url', url()->current())">

    {{-- Twitter --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('twitter_title', 'Devlints – Web Apps, Mobile Apps & SaaS Development')">
    <meta name="twitter:description"
          content="@yield('twitter_description', 'Build secure, scalable software with Devlints — web apps, mobile apps, and SaaS platforms.')">
    <meta name="twitter:image" content="@yield('twitter_image', asset('static/images/og/devlints-og.webp'))">
    <meta property="og:type" content="@yield('og_type','website')">
    <meta name="author" content="@yield('meta_author','Devlints Team')">

    @stack('meta')


    @php
        $schemaOrgName = config('app.name', 'Devlints');
        $schemaOrgUrl  = url('/');
        $schemaLogo    = asset('static/images/logo.png');
        $schemaPageName = trim($__env->yieldContent('schema_name', $__env->yieldContent('title', $schemaOrgName)));
        $schemaPageDesc = trim($__env->yieldContent('schema_description', $__env->yieldContent('meta_description', '')));
        $schemaPageUrl  = trim($__env->yieldContent('canonical', url()->current()));
    @endphp

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "@id": @json($schemaOrgUrl . "#organization"),
  "name": @json($schemaOrgName),
  "url": @json($schemaOrgUrl),
  "logo": {
    "@type": "ImageObject",
    "url": @json($schemaLogo)
        },
        "sameAs": [
        @json("https://www.linkedin.com/company/devlints")
        ]
      }
    </script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "WebSite",
          "@id": @json($schemaOrgUrl . "#website"),
  "url": @json($schemaOrgUrl),
  "name": @json($schemaOrgName),
  "publisher": { "@id": @json($schemaOrgUrl . "#organization") }
}
    </script>

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "@yield('schema_page_type', 'WebPage')",
  "@id": @json($schemaPageUrl . "#webpage"),
  "url": @json($schemaPageUrl),
  "name": @json($schemaPageName),
  "description": @json($schemaPageDesc),
  "isPartOf": { "@id": @json($schemaOrgUrl . "#website") },
  "about": { "@id": @json($schemaOrgUrl . "#organization") }
}
    </script>

    @stack('structured_data')

    @hasSection('structured_data')
        @yield('structured_data')
    @endif


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-8X297200ZK"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());

        gtag('config', 'G-8X297200ZK');
    </script>

    <!-- Stylesheets -->

    <link rel="stylesheet" href="{{ asset('static/css/home.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/index.css') }}">
    <!-- Google Fonts -->
    {{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
    {{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    {{--    <link href="https://fonts.googleapis.com/css2?family=Onest:wght@100..900&display=swap" rel="stylesheet">--}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Onest:wght@100..900&display=swap"
        rel="stylesheet">
    @stack('styles')
</head>

<body>

<!-- Header -->
<div id="header-section">
    <Header class="header">

        <nav class="nav-bar">

            <div class="logo-div">
                <a href="/"><img src="{{ asset('static/images/logo.png') }}" alt=""></a>
            </div>


            <ul class="nav-links">

                <li><a href="/">Home</a></li>
                <li><a href="{{ route("about_us") }}">About</a></li>
                <li id="service-menu">
                    <div>Services</div>

                    <img src="{{ asset('static/images/down-arrow.png') }}" class="arrow" alt="">
                    <div class="service-dropdown-menu ">
                        <div class="service-grid">

                            <div class="grid-item" id="first-box">
                                <h2>Work with Devlints</h2>
                                <p style="margin-top: 15px">Experience the excellence of our dedicated professionals
                                    delivering top-notch
                                    solutions tailored to your business.</p>
                                <a href="{{route('contact_us')}}">
                                    <button class="mt-5" style="margin-top: 15px"> Let’s Get Started ></button>
                                </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('web_app_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div">
                                    <img src="{{ asset('static/images/services/web-app-icon.svg') }}" alt="">
                                </div>
                                <div class="services-tittle">
                                    <span>Web App Development</span>
                                </div>
                            </div>


                            <div class="grid-item" onclick="window.location='{{ route('mobile_app_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div">
                                    <a href="{{route('mobile_app_development')}}"> <img
                                            src="{{ asset('static/images/services/app-dev-icon.svg') }}"
                                            alt=""> </a></div>
                                <a href="{{route('mobile_app_development')}}" class="services-tittle"> <span>Mobile
                      Development</span> </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('blockchain_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('blockchain_development')}}"> <img
                                            src="{{ asset('static/images/services/blockchain-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('blockchain_development')}}" class="services-tittle"> <span>Block Chain
                      Development</span> </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('ui_ux_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('ui_ux_development')}}"> <img
                                            src="{{ asset('static/images/services/ui-ux-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('ui_ux_development')}}" class="services-tittle"> <span>UI/UX Development</span>
                                </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('ecommerce_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('ecommerce_development')}}"> <img
                                            src="{{ asset('static/images/services/ecommerce-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('ecommerce_development')}}" class="services-tittle"> <span>Ecommerce
                      Development</span> </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('wordpress_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('wordpress_development')}}"> <img
                                            src="{{ asset('static/images/services/wordpress-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('wordpress_development')}}" class="services-tittle"> <span>Wordpress
                      Development</span> </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('digital_marketing') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('digital_marketing')}}"> <img
                                            src="{{ asset('static/images/services/digital-marketing-icon.svg') }}"
                                            alt=""> </a></div>
                                <a href="{{route('digital_marketing')}}" class="services-tittle"> <span>Digital Marketing</span>
                                </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('quality_assurance') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('quality_assurance')}}"> <img
                                            src="{{ asset('static/images/services/quality-assurance-icon.svg') }}"
                                            alt=""> </a></div>
                                <a href="{{route('quality_assurance')}}" class="services-tittle"> <span>Quality Assurance (QA
                      Testing)</span> </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('full_stack_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('full_stack_development')}}"> <img
                                            src="{{ asset('static/images/services/full-stack-developer-icon.svg') }}"
                                            alt=""> </a></div>
                                <a href="{{route('full_stack_development')}}" class="services-tittle"> <span>Full Stack
                      Development</span> </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('ai_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('ai_development')}}"> <img
                                            src="{{ asset('static/images/services/ai-icon.svg') }}" alt=""> </a></div>
                                <a href="{{route('ai_development')}}" class="services-tittle">
                                    <span>Ai Development</span> </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('game_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('game_development')}}"> <img
                                            src="{{ asset('static/images/services/game-dev-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('game_development')}}" class="services-tittle">
                                    <span>Game Development</span> </a>
                            </div>

                            <div class="grid-item" onclick="window.location='{{ route('app_development') }}'"
                                 style="cursor: pointer;">
                                <div class="img-div"><a href="{{route('app_development')}}"> <img
                                            src="{{ asset('static/images/services/app-icon.svg') }}" alt=""> </a></div>
                                <a href="{{route('app_development')}}" class="services-tittle">
                                    <span>App Development</span> </a>
                            </div>


                        </div>

                    </div>
                </li>

                <!-- products hiring dropdown -->

                <li id="product-menu">
                    <div> Products</div>
                    <img src="{{ asset('static/images/down-arrow.png') }}" class="arrow" alt="">
                    <div class="products-dropdown-menu">
                        <div class="products-grid">
                            <div class="product-grid-item" onclick="window.open('https://zaayve.com', '_blank')">
                                <div class="product-img-div"><img src="{{ asset('static/images/products/zaayve.png') }}"
                                                                  alt="Product 1"></div>
                                <div class="product-info">
                                    <div class="product-name"><a href=" https://zaayve.com" target="_blank"> Zaayve
                                            AI </a></div>
                                    <div class="product-description">Productivity Across Every Domain</div>
                                </div>
                            </div>
                            <div class="product-grid-item" onclick="window.open('https://whatsapptopdf.com', '_blank')">
                                <div class="product-img-div"><img
                                        src="{{ asset('static/images/products/whatsappToPdf.webp') }}"
                                        alt="Product 2"></div>
                                <div class="product-info">
                                    <div class="product-name"><a href="https://whatsapptopdf.com" target="_blank">
                                            WhatsApp To PDF </a></div>
                                    <div class="product-description"> Whatsapp chats to pdf, easy.</div>
                                </div>
                            </div>
                            <div class="product-grid-item" onclick="window.open('https://multcleaner.com/', '_blank')">
                                <div class="product-img-div"><img
                                        src="{{ asset('static/images/products/gmailCleaner.png') }}"
                                        alt="Product 3"></div>
                                <div class="product-info">
                                    <div class="product-name"><a href="https://multcleaner.com/" target="_blank"> Multi
                                            Cleaner </a></div>
                                    <div class="product-description">Efficient gmail cleaner tool.</div>
                                </div>
                            </div>
                            <div class="product-grid-item" onclick="window.open('https://orderconnects.com', '_blank')">
                                <div class="product-img-div"><img
                                        src="{{ asset('static/images/products/order-connects.png') }}"
                                        alt="Product 4"></div>
                                <div class="product-info">
                                    <div class="product-name"><a href="https://orderconnects.com" target="_blank">Order
                                            Connects </a></div>
                                    <div class="product-description">Helping the restaurant community thrive.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>

                <li id="hire-talent-menu">
                    <div>Hire Talent</div>
                    <div class="hiring-dropdown-menu">
                        <div class="hiring-grid">
                            <div class="hiring-grid-items" id="first-hiring-box">Experience the excellence of our
                                dedicated
                                professionals who are adept in delivering top-notch solutions.
                            </div>
                            <div class="hiring-grid-items"
                                 onclick="window.location='{{ route('hire_web_app_developers') }}'">
                                <div class="img-div"><a href="{{route('hire_web_app_developers')}}"> <img
                                            src="{{ asset('static/images/services/web-app-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('hire_web_app_developers')}}" class="hiring-titles"> <span> Hire Web App Developers</span>
                                </a>
                            </div>

                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_mobile_app_developers') }}'">
                                <div class="img-div"><a href="{{route('hire_mobile_app_developers')}}"> <img
                                            src="{{ asset('static/images/services/app-dev-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('hire_mobile_app_developers')}}" class="hiring-titles"> <span> Hire Mobile App
                      Developers</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_block_chain_developers') }}'">
                                <div class="img-div"><a href="{{route('hire_block_chain_developers')}}"> <img
                                            src="{{ asset('static/images/services/blockchain-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('hire_block_chain_developers')}}" class="hiring-titles"> <span> Hire Block Chain
                      Developers</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_ui_ux_developers') }}'">
                                <div class="img-div"><a href="{{route('hire_ui_ux_developers')}}"> <img
                                            src="{{ asset('static/images/services/ui-ux-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('hire_ui_ux_developers')}}" class="hiring-titles"> <span>Hire UI/UX Designers</span>
                                </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_ecommerce_developers') }}'">
                                <div class="img-div"><a href="{{route('hire_ecommerce_developers')}}"> <img
                                            src="{{ asset('static/images/services/ecommerce-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('hire_ecommerce_developers')}}" class="hiring-titles"> <span>Hire Ecommerce
                      Developers</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_wordpress_developers') }}'">
                                <div class="img-div"><a href="{{route('hire_wordpress_developers')}}"> <img
                                            src="{{ asset('static/images/services/wordpress-icon.svg') }}" alt=""> </a>
                                </div>
                                <a href="{{route('hire_wordpress_developers')}}" class="hiring-titles"> <span>Hire Wordpress
                      Developers</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_digital_marketers') }}'">
                                <div class="img-div"><a href="{{route('hire_digital_marketers')}}"> <img
                                            src="{{ asset('static/images/services/digital-marketing-icon.svg') }}"
                                            alt=""> </a></div>
                                <a href="{{route('hire_digital_marketers')}}" class="hiring-titles"> <span>Hire Digital Marketers</span>
                                </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_quality_assurance') }}'">
                                <div class="img-div"><a href="{{route('hire_quality_assurance')}}"> <img
                                            src="{{ asset('static/images/services/quality-assurance-icon.svg') }}"
                                            alt=""> </a></div>
                                <a href="{{route('hire_quality_assurance')}}" class="hiring-titles"> <span> Hire Quality Assurance (QA
                      Testing )</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_full_stack_developers') }}'">
                                <div class="img-div"><a href="{{route('hire_full_stack_developers')}}"> <img
                                            src="{{ asset('static/images/services/full-stack-developer-icon.svg') }}"
                                            alt=""> </a></div>
                                <a href="{{route('hire_full_stack_developers')}}" class="hiring-titles"> <span> Hire Full Stack
                      Developers</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles"
                                 onclick="window.location='{{ route('hire_ai_developers') }}'">
                                <div class="img-div"><a href="{{route('hire_ai_developers')}}"> <img
                                            src="{{ asset('static/images/services/ai-icon.svg') }}" alt=""> </a></div>
                                <a href="{{route('hire_ai_developers')}}" class="hiring-titles"> <span>Hire Ai Developers</span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <img src="{{ asset('static/images/down-arrow.png') }}" alt="" class="arrow">
                </li>

                <li><a href="{{ route("contact_us") }}">Contact</a></li>
                <li><a href="{{ route("careers") }}">Careers</a></li>
                <li><a href="/">HyperLab Academy</a></li>


            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

        </nav>


    </Header>

</div>


<!-- Main content -->
<main>
    @yield('content')
</main>

<!-- Footer -->
<section class="footer-section">

    <div class="footer">
        <div class="footer-logo">
            <div><img src="{{ asset('static/images/footer-logo.png') }}" alt=""></div>
            <p>info@devlints.com</p>
            <div class="social-icons">
                <span><img src="{{ asset('static/images/social-icons/facebook.png') }}" alt=""></span>
                <span><img src="{{ asset('static/images/social-icons/instagram.png') }}" alt=""></span>
                <span><img src="{{ asset('static/images/social-icons/twitter.png') }}" alt=""></span>

                <a href="https://www.linkedin.com/company/devlints" target="_blank" rel="noopener noreferrer">
                    <span> <img src="{{ asset('static/images/social-icons/linkedin.png') }}" alt="LinkedIn"> </span>
                </a>

                <span><img src="{{ asset('static/images/social-icons/github.png') }}" alt=""></span>

            </div>

        </div>
        <div class="footer-menu">
            <h2>COMPANY</h2>
            <p><a href="{{route('about_us')}}"> About us </a></p>
            <p><a href="{{route('contact_us')}}"> Contact us </a></p>
            <p><a href="#services"> Services </a></p>
            <p><a href="{{route('careers')}}"> Careers </a></p>
            <p><a href="{{route('all_blogs')}}"> Blogs </a></p>
        </div>


        <div class="footer-menu">
            <h2>PRODUCTS</h2>
            <p><a href="https://zaayve.com/" target="_blank">Zaayve AI </a></p>
            <p><a href="https://orderconnects.com/" target="_blank"> Order Connects </a></p>
            <p><a href="https://multcleaner.com/" target="_blank"> Multi Cleaner </a></p>
            <p><a href="https://www.whatsapptopdf.com/" target="_blank"> Whatsapp To PDF </a></p>
        </div>

        <div class="footer-menu">
            <h2>USEFUL LINKS</h2>
            <p><a href="{{route('privacy_policy')}}"> Privacy Policy </a></p>
            <p><a href="{{route('terms_conditions')}}"> Terms & Conditions</a></p>

        </div>


    </div>

    <div class="footer-licence">
        © 2025 Devlints all right reserved
    </div>

</section>

<!-- Scripts -->

<script src="{{ asset('static/js/header.js') }}"></script>


@stack('scripts')
</body>

</html>
