@extends('layouts.master')
@section("content")
    <!-- Hero section  -->
    <section class="hero-section">
        <div class="hero-div">
            <div>
                <h2>Delivering Custom Software with
                    <span>Agile Processes</span> and Expert Talent
                </h2>
                <p class="hero-para">
                    We are a team of dedicated and skilled developers with passion for building perfect solutions and
                    fast
                    deliveries. Whether you need rapid development or custom solution, we’re here to make it happen.
                </p>

                <a href="#services">
                    <button>Explore Our Unparalleled Solutions</button>
                </a>
            </div>


            <!-- tech log -->
            <div>
                <div class="line-div">
                    <hr class="line">
                </div>
                <div class="tech-logo">


                    <div id="logoSlider">
                        <img src="{{ asset('static/images/tech-logo/logo5.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/logo7.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/logo6.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/logo1.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/logo2.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/logo3.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/logo4.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/aws.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/css.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/github.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/js.png') }}" alt="">
                        <img src="{{ asset('static/images/tech-logo/tailwind.png') }}" alt="">
                    </div>


                </div>
            </div>


        </div>
    </section>

    <!-- services section -->
    <section class="services" id="services">

        <div>
            <h2 class="section-heading"> Services</h2>
            <p class="section-para"> Our dedicated and skilled team ensure the delivery of effective,
                top-quality software solutions</p>
        </div>

        <div class="service-container">
            <div class="service-arrow">
                <svg id="service-left-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                     onclick="prevSlide()">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M5 12H19M5 12L11 6M5 12L11 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </g>
                </svg>
                <svg id="service-right-arrow" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                     onclick="nextSlide()">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="#ffffff" stroke-width="2"
                              stroke-linecap="round"
                              stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>

            <div class="my-services">
                <!-- Original services -->
                <div class="service" id="service1">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-1.png') }}" alt="AI Development">
                        <div class="service-title">AI Development</div>
                    </div>
                    <div class="service-des">
                        Leverage AI to create intelligent solutions that automate processes, improve decision-making,
                        and enhance
                        customer experiences. We develop AI-driven applications to optimize business operations.
                    </div>
                </div>
                <div class="service" id="service2">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-2.png') }}" alt="E-commerce Solutions">
                        <div class="service-title">E-commerce Solutions</div>
                    </div>
                    <div class="service-des">
                        Build customized e-commerce platforms that offer secure payment processing, user-friendly
                        interfaces, and
                        seamless shopping experiences. Our solutions are designed to boost online sales.
                    </div>
                </div>
                <div class="service" id="service3">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-3.png') }}" alt="Healthcare Solutions">
                        <div class="service-title">Healthcare Solutions</div>
                    </div>
                    <div class="service-des">
                        Create innovative healthcare software solutions that streamline patient management, enhance data
                        accuracy,
                        and improve operational efficiency.
                    </div>
                </div>
                <div class="service" id="service4">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-4.png') }}" alt="Food Chain Solutions">
                        <div class="service-title">Food Chain Solutions</div>
                    </div>
                    <div class="service-des">
                        Develop tailored solutions for food chains that optimize inventory management, improve customer
                        service, and
                        enhance operational efficiency. Our software solutions streamline food chain processes.
                    </div>
                </div>

                <!-- Cloned services for seamless looping -->
                <div class="service" id="service1-clone">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-1.png') }}" alt="AI Development">
                        <div class="service-title">AI Development</div>
                    </div>
                    <div class="service-des">
                        Leverage AI to create intelligent solutions that automate processes, improve decision-making,
                        and enhance
                        customer experiences. We develop AI-driven applications to optimize business operations.
                    </div>
                </div>
                <div class="service" id="service2-clone">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-2.png') }}" alt="E-commerce Solutions">
                        <div class="service-title">E-commerce Solutions</div>
                    </div>
                    <div class="service-des">
                        Build customized e-commerce platforms that offer secure payment processing, user-friendly
                        interfaces, and
                        seamless shopping experiences. Our solutions are designed to boost online sales.
                    </div>
                </div>
                <div class="service" id="service3-clone">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-3.png') }}" alt="Healthcare Solutions">
                        <div class="service-title">Healthcare Solutions</div>
                    </div>
                    <div class="service-des">
                        Create innovative healthcare software solutions that streamline patient management, enhance data
                        accuracy,
                        and improve operational efficiency.
                    </div>
                </div>
                <div class="service" id="service4-clone">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-4.png') }}" alt="Food Chain Solutions">
                        <div class="service-title">Food Chain Solutions</div>
                    </div>
                    <div class="service-des">
                        Develop tailored solutions for food chains that optimize inventory management, improve customer
                        service, and
                        enhance operational efficiency. Our software solutions streamline food chain processes.
                    </div>
                </div>
                <div class="service" id="service5-clone">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-4.png') }}" alt="Food Chain Solutions">
                        <div class="service-title">Food Chain Solutions</div>
                    </div>
                    <div class="service-des">
                        Develop tailored solutions for food chains that optimize inventory management, improve customer
                        service, and
                        enhance operational efficiency. Our software solutions streamline food chain processes.
                    </div>
                </div>
                <div class="service" id="service6-clone">
                    <div>
                        <img src="{{ asset('static/images/service-logo/service-4.png') }}" alt="Food Chain Solutions">
                        <div class="service-title">Food Chain Solutions</div>
                    </div>
                    <div class="service-des">
                        Develop tailored solutions for food chains that optimize inventory management, improve customer
                        service, and
                        enhance operational efficiency. Our software solutions streamline food chain processes.
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- Developement Section -->

    <section class="dev-section">

        <div>
            <h2 class="section-heading"> Top-Quality
                Web & Mobile Development</h2>
            <p class="section-para"> Accelerate your business growth with our customer-led,
                insights-driven and innovative solutions</p>
        </div>
        <div class="dev-box-container">
            <div class="dev-box">
                <img src="{{ asset('static/images/dev-logo/logo1.png') }}" alt="">
                <h1>End-to-End Custom Development</h1>
                <p>
                    We provide fully tailored software solutions from concept to deployment. Our process starts with
                    understanding your business goals, followed by detailed wireframes and agile development cycles to
                    ensure quality delivery.
                </p>
            </div>

            <div class="dev-box">
                <img src="{{ asset('static/images/dev-logo/logo2.png') }}" alt="">
                <h2>UI/UX Design & Prototyping</h2>
                <p>
                    Our design-first approach ensures intuitive and engaging interfaces. From wireframes to interactive
                    prototypes, we craft user-centric experiences that align perfectly with your brand and user
                    expectations.
                </p>
            </div>

            <div class="dev-box">
                <img src="{{ asset('static/images/dev-logo/logo3.png') }}" alt="">
                <h2>Code Audits & Performance Optimization</h2>
                <p>
                    We evaluate your existing systems for code quality, security, and performance. Our team identifies
                    bottlenecks, cleans technical debt, and improves system efficiency to ensure long-term scalability
                    and reliability.
                </p>
            </div>

            <div class="dev-box">
                <img src="{{ asset('static/images/dev-logo/logo-4.png') }}" alt="">
                <h2>Rapid MVP Development</h2>
                <p>
                    Need to validate your product idea fast? We specialize in building lean, functional MVPs with
                    essential features—ready to launch quickly. Ideal for startups and innovators looking to hit the
                    market in weeks, not months.
                </p>
            </div>
        </div>
    </section>

    <!-- Product Section -->
    <section class="product-section">
        <div>
            <h2 class="section-heading"> Solutions</h2>
            <p class="section-para"> Our dedicated and skilled team ensure the delivery of effective,
                top-quality software solutions</p>
        </div>

        <div class="products-container">

{{--            <div class="nav-buttons">--}}
{{--                <button class="nav-button prev">←</button>--}}
{{--                <button class="nav-button next">→</button>--}}
{{--            </div>--}}

            <div class="nav-buttons">
                <svg class="nav-button prev" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="prevSlide()">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M5 12H19M5 12L11 6M5 12L11 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
                <svg class="nav-button next" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" onclick="nextSlide()">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M5 12H19M19 12L13 6M19 12L13 18" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </g>
                </svg>
            </div>

            <div class="slider">
                <div class="products" id="product-1">
                    <h2>Order Connects</h2>
                    <p>One platform for branch operations</p>
                    <a href="https://orderconnects.com/" target="_blank">
                        <button>Learn more</button>
                    </a>
                    <img src="{{ asset('static/images/product-img.png') }}" alt="">
                </div>

                <div class="products" id="product-2">
                    <h2>Order Connects</h2>
                    <p>One platform for branch operations</p>
                    <a href="https://www.whatsapptopdf.com/" target="_blank">
                        <button>Learn more</button>
                    </a>
                    <img src="{{ asset('static/images/product-img.png') }}" alt="">
                </div>

                <div class="products" id="product-2">
                    <h2>Order Connects</h2>
                    <p>One platform for branch operations</p>
                    <a href="https://www.whatsapptopdf.com/" target="_blank">
                        <button>Learn more</button>
                    </a>
                    <img src="{{ asset('static/images/product-img.png') }}" alt="">
                </div>

                <div class="products" id="product-2">
                    <h2>Order Connects</h2>
                    <p>One platform for branch operations</p>
                    <a href="https://www.whatsapptopdf.com/" target="_blank">
                        <button>Learn more</button>
                    </a>
                    <img src="{{ asset('static/images/product-img.png') }}" alt="">
                </div>
            </div>


        </div>
    </section>

    <!-- case studies section  -->
    <section class="case-study-section">

        <h2 class="section-heading"> Case Studies</h2>
        <p class="section-para">
            Explore how our dedicated and skilled team has delivered impactful, high-quality software solutions through
            real-world case studies.
        </p>

        <div class="case-study-container">

            @foreach($caseStudies as $caseStudy)
                <div class="case-study-box">
                    <div class="case-study-box-overlay"></div>


                    <img src="{{ asset('storage/'. $caseStudy->thumbnail) }}" alt="">
                    <button><a href="{{route('case_study_detail', $caseStudy->slug)}}" style="text-decoration: none">
                            View case study > </a></button>
                </div>
            @endforeach


        </div>
        <a href="{{route('all_case_studies')}}" class="all-case-study-link">View all case studies ></a>

    </section>

    <section class="lab-section">

        <div class="lab-container">
            <div class="lab-left">
                <h2>Hyper Lab - Academy</h2>
                <p>At Hyper Lab, we teach programming through real-world projects, allowing you to gain practical
                    experience while building functional applications. Our hands-on approach and live classes helps you
                    develop the skills needed to thrive in the tech industry. For those who excel, we offer job
                    opportunities, connecting talented students with leading companies. Whether you’re just starting or
                    refining your skills, HyperLab provides the perfect platform to learn, grow, and launch your career.
                </p>
            </div>
            <div class="lab-right">
                <img src="{{ asset('static/images/Hyper-lab-img.png') }}" alt="">
            </div>
        </div>
    </section>


    <section class="achievement-section">
        <div>
            <h2><span>7+ Years</span> of Delivering High Quality Software Solutions</h2>
            <p>For the past 7 years, our team has been dedicated to delivering high-quality software solutions that make
                a real difference. With a focus on innovation and a commitment to excellence, we’ve helped businesses
                across various industries solve complex challenges and achieve their goals. Our team’s expertise and
                fast paced deliveries have been key to building solutions that not only meet but exceed expectations.
            </p>

        </div>

        <div class="achievement-boxes">

            <div class="box">
                <h2>2018</h2>
                <h2>Year of Foundation</h2>
            </div>

            <div class="box">
                <h2>100+</h2>
                <h2>Client Projects</h2>
            </div>

            <div class="box">
                <h2>130+</h2>
                <h2>Team Members</h2>
            </div>

        </div>

    </section>

    <section class="blog-section">

        <h2 class="section-heading">Blogs & Publicationss</h2>

        <p class="section-para">
            Sharing insights, updates, and stories that inspire and inform.
        </p>

        <div class="blog-container">

            @foreach($blogs as $blog)

                <div class="blog-box">

                    <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
                         style="filter: brightness(50%);">


                    <a href="{{ route('blog_detail', $blog->slug) }}"><h2> {{$blog->title}} </h2></a>
                    <p>
                        <span>{{ $blog->author_name ?? 'Admin' }}</span> <span
                            style="font-weight: 400; font-size: 16px; margin-left: 10px">[ {{$blog->author_bio}} ]</span>
                        <br>
                        {{ optional($blog->published_at)->format('F d, Y') ?? 'Date not available' }}
                    </p>
                </div>

            @endforeach

        </div>

        <a class="read-blog-link" href="{{route('all_blogs')}}">Read all Blogs ></a>

    </section>

@endsection
@push('scripts')
    <script src="{{ asset('static/js/slider/service-slider.js') }}"></script>
    <script src="{{ asset('static/js/achievementNumber.js') }}"></script>
    <script src="{{ asset('static/js/slider/logo-slider.js') }}"></script>


    <script>
        (function () {
            console.log('Running script');
            const slider = document.querySelector('.slider');
            const products = document.querySelectorAll('.products');
            const prevButton = document.querySelector('.prev');
            const nextButton = document.querySelector('.next');
            let currentIndex = 0;
            const totalProducts = products.length;
            let isLargeScreen = window.innerWidth > 768;
            let autoSlideInterval;

            // Error handling for missing elements
            if (!slider || !products.length || !prevButton || !nextButton) {
                console.error('Slider elements not found:', {
                    slider: !!slider,
                    products: products.length,
                    prevButton: !!prevButton,
                    nextButton: !!nextButton
                });
                return; // Now valid inside the IIFE
            }

            function updateSlider() {
                if (products[0]) {
                    const productWidth = products[0].offsetWidth;
                    console.log('Updating slider, index:', currentIndex, 'width:', productWidth);
                    slider.style.transform = `translateX(-${currentIndex * productWidth}px)`;
                } else {
                    console.error('No products elements found');
                }
            }

            function moveToNext() {
                console.log('Moving to next, currentIndex:', currentIndex);
                if (isLargeScreen) {
                    if (currentIndex < totalProducts - 2) {
                        currentIndex++;
                    } else {
                        currentIndex = 0;
                    }
                } else {
                    if (currentIndex < totalProducts - 1) {
                        currentIndex++;
                    } else {
                        currentIndex = 0;
                    }
                }
                updateSlider();
            }

            function moveToPrev() {
                console.log('Moving to prev, currentIndex:', currentIndex);
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = isLargeScreen ? totalProducts - 2 : totalProducts - 1;
                }
                updateSlider();
            }

            function startAutoSlide() {
                console.log('Starting auto-slide');
                autoSlideInterval = setInterval(moveToNext, 2000);
            }

            function stopAutoSlide() {
                console.log('Stopping auto-slide');
                clearInterval(autoSlideInterval);
            }

            nextButton.addEventListener('click', () => {
                console.log('Next button clicked');
                stopAutoSlide();
                moveToNext();
                startAutoSlide();
            });

            prevButton.addEventListener('click', () => {
                console.log('Prev button clicked');
                stopAutoSlide();
                moveToPrev();
                startAutoSlide();
            });

            window.addEventListener('resize', () => {
                isLargeScreen = window.innerWidth > 768;
                console.log('Window resized, isLargeScreen:', isLargeScreen);
                currentIndex = 0;
                updateSlider();
            });

            // Start the slider after DOM is fully loaded
            document.addEventListener('DOMContentLoaded', () => {
                console.log('DOM fully loaded');
                startAutoSlide();
            });
        })();
    </script>
@endpush
