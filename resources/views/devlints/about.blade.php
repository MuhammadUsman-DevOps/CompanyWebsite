@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/about.css') }}">
@endpush
@section('title', 'About Devlints | Web, Mobile & SaaS Development Team')

@section('meta_description', 'Founded in 2018, Devlints is a software development team building web apps, mobile apps, and SaaS platforms for US/UK/EU clients with fast delivery and scalable architecture.')

@section('meta_keywords', 'about devlints, software development company, web app development, mobile app development, saas development, full stack development, devlints team')

@section('og_title', 'About Devlints | Software Development Team')
@section('og_description', 'Meet Devlints — a 2018-founded team delivering web apps, mobile apps, and SaaS platforms for US/UK/EU clients.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'About Devlints | Web, Mobile & SaaS Development')
@section('twitter_description', 'Founded in 2018, Devlints builds scalable software for US/UK/EU clients — web apps, mobile apps, and SaaS.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

@section('schema_page_type', 'AboutPage')

@section('schema_name', 'About Devlints')
@section('schema_description', 'Founded in 2018, Devlints is a software development team delivering web apps, mobile apps, and SaaS platforms for US/UK/EU clients.')

@push('structured_data')
    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "AboutPage",
          "@id": "{{ url()->current() }}#aboutpage",
  "url": "{{ url()->current() }}",
  "name": "About Devlints",
  "description": "Founded in 2018, Devlints is a software development team building web apps, mobile apps, and SaaS platforms for US/UK/EU clients.",
  "isPartOf": { "@id": "{{ url('/') }}#website" },
  "about": { "@id": "{{ url('/') }}#organization" }
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"BreadcrumbList",
          "itemListElement":[
            {
              "@type":"ListItem",
              "position":1,
              "name":"Home",
              "item":"{{ url('/') }}"
    },
    {
      "@type":"ListItem",
      "position":2,
      "name":"About",
      "item":"{{ url()->current() }}"
    }
  ]
}
    </script>
@endpush

@section("content")
    <div class="about-us-container">
        <!-- header -->

        <section class="about-hero-section">

            <h2>
                The modern-day <span>digital world</span> is fast-paced and competitive. Staying ahead requires
                partnering with <span>true experts</span>.
            </h2>

            <p>
                Founded in 2018, <strong>Devlints</strong> is a team of seasoned professionals dedicated to building
                powerful digital products—from websites and mobile apps to games, ecommerce platforms, and enterprise
                software. We go beyond expectations, consistently delivering high-performing solutions that make an
                impact.
                <br><br>
                Our commitment is simple: <strong>fast delivery, flawless execution</strong>, and a client-first
                approach regardless of location, industry, or time zone. We don’t just write code—we craft digital
                success stories through full-cycle services like web development, mobile app development, full-stack
                engineering, UI/UX design, and digital strategy.
                <br><br>
                Whether you're building a startup MVP or scaling an enterprise system, Devlints helps you unlock growth
                through cutting-edge technology and proven processes. Our work combines top-tier IT expertise with
                marketing insight to generate ROI, build brand authority, and drive real business outcomes.
            </p>

        </section>

        <section class="technology-section">

            <h2>
                Our <span>Capabilities</span> & Technological <span>Expertise</span>
            </h2>
            <p>
                Our team is composed of highly skilled professionals, with over 20% at a senior level. We bring deep
                expertise across a wide range of technologies, ensuring scalable, secure, and high-performance solutions
                tailored to your business needs.
            </p>

            <div class="technology-container">
                <h3 class="technology-title">Backend Technologies</h3>
                <div class="technology-div">
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/php-logo.svg') }}" alt="php"
                                                    class="tech-img">
                        <span>Php</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/python-logo.svg') }}"
                                                    alt="python" class="tech-img">
                        <span>Python</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/node-js-logo.svg') }}"
                                                    alt="nodejs" class="tech-img">
                        <span>Node Js</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/net-logo.svg') }}" alt=".net"
                                                    class="tech-img">
                        <span>.Net</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/java-logo.svg') }}"
                                                    alt="java" id="java-img" class="tech-img">
                        <span>Java</span>
                    </div>
                </div>
            </div>


            <div class="technology-container">
                <h3 class="technology-title">Frontend Technologies</h3>
                <div class="technology-div">
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/html.svg') }}" alt="html"
                                                    class="tech-img">
                        <span>HTML</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/css.svg') }}" alt="css"
                                                    class="tech-img">
                        <span>CSS</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/typescript.png') }}"
                                                    alt="typescript" style="width: 80px" class="tech-img">
                        <span>TypeScript</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/javascript-logo.svg') }}"
                                                    alt="js" class="tech-img">
                        <span>JS</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/angular-logo.svg') }}"
                                                    alt="angular" class="tech-img">
                        <span>Angular</span>
                    </div>

                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/react-js-logo.svg') }}"
                                                    alt="react" class="tech-img">
                        <span>React Js</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/vuejs-logo.svg') }}"
                                                    alt="vue.js" class="tech-img">
                        <span>Vue.Js</span>
                    </div>
                </div>
            </div>

            <div class="technology-container">
                <h3 class="technology-title">Mobile</h3>
                <div class="technology-div">
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/aios.png') }}" alt="ios"
                                                    class="tech-img">
                        <span>IOS</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/android.png') }}"
                                                    alt="android" class="tech-img">
                        <span>Android</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/xamarin.png') }}"
                                                    alt="xamarine" style="height: 45px" class=" tech-img">
                        <span>Xamarin</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/react-native-icon.png') }}"
                                                    alt="react native" style="height: 80px" class="tech-img">
                        <span>React Native</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/about-img/flutter.png') }}"
                                                    alt="flutter" style="height: 30px; margin-top: 20px "
                                                    class="tech-img">
                        <span>Flutter</span>
                    </div>


                </div>
            </div>

            <div class="technology-container">
                <h3 class="technology-title">Databases</h3>
                <div class="technology-div">
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/ms-sql.svg') }}"
                                                    alt="sql server" class="tech-img"> <span>
              Sql Server</span></div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/mysql.png') }}" alt="my sql"
                                                    class="tech-img"> <span>My
              Sql</span></div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/mongodb.png') }}"
                                                    alt="mongo db" style="height: 30px; margin-top: 20px"
                                                    class="tech-img">
                        <span>MongoDB</span>
                    </div>
                    <div class="tech-logo-div"><img src="{{ asset('static/images/services/postgre-sql.png') }}"
                                                    alt="Postgre Sql" class="tech-img">
                        <span>Postgre Sql</span>
                    </div>
                </div>
            </div>


        </section>

    </div>

@endsection
