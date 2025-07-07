@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/about.css') }}">
@endpush

@section("content")
    <div class="about-us-container">
        <!-- header -->

        <section class="about-hero-section">

            <h2>
                The modern-day <span>digital world</span> is fast-paced and competitive. Staying ahead requires partnering with <span>true experts</span>.
            </h2>

            <p>
                Founded in 2018, <strong>Devlints</strong> is a team of seasoned professionals dedicated to building powerful digital products—from websites and mobile apps to games, ecommerce platforms, and enterprise software. We go beyond expectations, consistently delivering high-performing solutions that make an impact.
                <br><br>
                Our commitment is simple: <strong>fast delivery, flawless execution</strong>, and a client-first approach regardless of location, industry, or time zone. We don’t just write code—we craft digital success stories through full-cycle services like web development, mobile app development, full-stack engineering, UI/UX design, and digital strategy.
                <br><br>
                Whether you're building a startup MVP or scaling an enterprise system, Devlints helps you unlock growth through cutting-edge technology and proven processes. Our work combines top-tier IT expertise with marketing insight to generate ROI, build brand authority, and drive real business outcomes.
            </p>

        </section>

        <!-- <div class="achievement-div">
                <div class="box" id="box-1">
                    <h2>500+</h2>
                    <p>clients</p>
                </div>
                <div class="box" id="box-2">
                    <div>
                        <h2>500+</h2>
                        <p>clients</p>
                    </div>
                    <div>
                        <h2>500+</h2>
                        <p>clients</p>
                    </div>
                </div>
            </div> -->

        <section class="technology-section">

            <h2>
                Our <span>Capabilities</span> & Technological <span>Expertise</span>
            </h2>
            <p>
                Our team is composed of highly skilled professionals, with over 20% at a senior level. We bring deep expertise across a wide range of technologies, ensuring scalable, secure, and high-performance solutions tailored to your business needs.
            </p>

            <div class="technology-container">
                <h3 class="technology-title">Backend Technologies</h3>
                <div class="technology-div">
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/php-logo.svg') }}" alt="" class="tech-img">
                        <span>Php</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/python-logo.svg') }}" alt="" class="tech-img">
                        <span>Phyton</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/node-js-logo.svg') }}" alt="" class="tech-img">
                        <span>Node Js</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/net-logo.svg') }}" alt="" class="tech-img">
                        <span>.Net</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/java-logo.svg') }}" alt="" id="java-img" class="tech-img">
                        <span>Java</span>
                    </div>
                </div>
            </div>


            <div class="technology-container">
                <h3 class="technology-title">Frontend Technologies</h3>
                <div class="technology-div">
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/html.svg') }}" alt="" class="tech-img">
                        <span>HTML</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/css.svg') }}" alt="" class="tech-img">
                        <span>CSS</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/typescript.png') }}" alt=""  style= "width: 80px" class="tech-img">
                        <span>TypeScript</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/javascript-logo.svg') }}" alt="" class="tech-img">
                        <span>JS</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/angular-logo.svg') }}" alt="" class="tech-img">
                        <span>Angular</span>
                    </div>

                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/react-js-logo.svg') }}" alt="" class="tech-img">
                        <span>React Js</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/vuejs-logo.svg') }}" alt="" class="tech-img">
                        <span>Veu.Js</span>
                    </div>
                </div>
            </div>

            <div class="technology-container">
                <h3 class="technology-title">Mobile</h3>
                <div class="technology-div">
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/aios.png') }}" alt="" class="tech-img">
                        <span>IOS</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/android.png') }}" alt="" class="tech-img">
                        <span>Android</span>
                    </div>
                    <div class="tech-logo-div"> <img src="{{ asset('static/images/about-img/xamarin.png') }}" alt=" " style="height: 45px" class=" tech-img">
                        <span>Xamarin</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/react-native-icon.png') }}" alt="" style="height: 80px" class="tech-img">
                        <span>React Native</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/flutter.png') }}" alt=""  style="height: 30px; margin-top: 20px "  class="tech-img">
                        <span>Flutter</span>
                    </div>


                </div>
            </div>

            <div class="technology-container">
                <h3 class="technology-title">Databases</h3>
                <div class="technology-div">
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/ms-sql.svg') }}" alt="" class="tech-img"> <span>
              Sql Server</span></div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/mysql.png') }}" alt="" class="tech-img"> <span>My
              Sql</span></div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/mongodb.png') }}" alt="" style="height: 30px; margin-top: 20px"  class="tech-img">
                        <span>MongoDB</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/postgre-sql.png') }}" alt="" class="tech-img">
                        <span>Postgre Sql</span>
                    </div>
                </div>
            </div>


        </section>

    </div>


@endsection
