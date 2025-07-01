<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home - Devlints')</title>

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
                                <p style="margin-top: 15px">Experience the excellence of our dedicated professionals delivering top-notch
                                    solutions tailored to your business.</p>
                                <button class="mt-5" style="margin-top: 15px">Let’s Get Started ></button>
                            </div>

                            <div class="grid-item">
                                <a href="/services.html" class="services-tittle">
                                    <div class="img-div">
                                        <img src="{{ asset('static/images/coding-img.png') }}" alt="">
                                    </div>
                                    <span>Web App Development</span>
                                </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div">
                                    <a href="services.html"> <img src="{{ asset('static/images/coding-img.png') }}"
                                                                  alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Mobile
                      Developement</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Block Chain
                      Developement</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>UI/UX Developement</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Ecommerce
                      Developement</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Wordpress
                      Developement</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Digital Marketing</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Quality Assurance (QA
                      Testing)</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Full Stack
                      Developement</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Ai Developement</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>Game Developement</span> </a>
                            </div>

                            <div class="grid-item">
                                <div class="img-div"><a href="services.html"> <img
                                            src="{{ asset('static/images/coding-img.png') }}" alt=""> </a></div>
                                <a href="/services.html " class="services-tittle"> <span>App Developement</span> </a>
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
                            <div class="product-grid-item">
                                <div class="product-img-div"><img src="{{ asset('static/images/down-arrow.png') }}"
                                                                  alt="Product 1"></div>
                                <div class="product-info">
                                    <div class="product-name">Codex</div>
                                    <div class="product-description">Innovative solution for your needs.</div>
                                </div>
                            </div>
                            <div class="product-grid-item">
                                <div class="product-img-div"><img src="{{ asset('static/images/down-arrow.png') }}"
                                                                  alt="Product 2"></div>
                                <div class="product-info">
                                    <div class="product-name">Xpert</div>
                                    <div class="product-description">Streamlined performance booster.</div>
                                </div>
                            </div>
                            <div class="product-grid-item">
                                <div class="product-img-div"><img src="{{ asset('static/images/down-arrow.png') }}"
                                                                  alt="Product 3"></div>
                                <div class="product-info">
                                    <div class="product-name">ToolBox</div>
                                    <div class="product-description">Reliable and efficient tool.</div>
                                </div>
                            </div>
                            <div class="product-grid-item">
                                <div class="product-img-div"><img src="{{ asset('static/images/down-arrow.png') }}"
                                                                  alt="Product 4"></div>
                                <div class="product-info">
                                    <div class="product-name">Teches</div>
                                    <div class="product-description">Advanced technology for growth.</div>
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
                            <div class="hiring-grid-items">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Web App Developement</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Mobile Appf
                      Developement</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Block Chain
                      Developement</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>UI/UX Developement</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Ecommerce
                      Developement</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Wordpress
                      Developement</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Digital Marketing</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Quality Assurance (QA
                      Testing )</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Full Stack
                      Developement</span> </a>
                            </div>
                            <div class="hiring-grid-items" class="hiring-titles">
                                <div class="img-div"><a href="hire-talent.html"> <img
                                            src="{{ asset('static/images/php-logo.png') }}" alt=""> </a></div>
                                <a href="hire-talent.html" class="hiring-titles"> <span>Ai Developement</span> </a>
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
                <span><img src="{{ asset('static/images/social-icons/linkedin.png') }}" alt=""></span>
                <span><img src="{{ asset('static/images/social-icons/github.png') }}" alt=""></span>

            </div>

        </div>
        <div class="footer-menu">
            <h2>COMPANY</h2>
            <P>About us</P>
            <p>Contact us</p>
            <p>Services</p>
            <p>Careers</p>
        </div>

        <div class="footer-menu">
            <h2>USEFUL LINKS</h2>
            <P>Privacy Policy</P>
            <p>Terms & Conditions</p>
            <p>EULA</p>
            <p>GDPR Compilance</p>
        </div>

        <div class="footer-menu">
            <h2>PRODUCTS</h2>
            <P>Zaayve AI</P>
            <p>Order Connects</p>

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
