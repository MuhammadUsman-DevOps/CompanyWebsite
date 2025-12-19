@extends('layouts.master')
@section('title', 'Game Development Company | Unity, Unreal, AR/VR & Multiplayer – Devlints')

@section('meta_description', 'Devlints is a game development company building immersive 2D/3D games for mobile, PC, and web—Unity/Unreal development, multiplayer systems, AR/VR experiences, and game UI/UX for US/UK/EU clients.')

@section('meta_keywords', 'game development company, game development services, unity game development, unreal game development, mobile game development, multiplayer game development, ar vr game development, 2d game development, 3d game development, game ui ux')

@section('og_title', 'Game Development Services | Unity, Unreal & AR/VR – Devlints')
@section('og_description', 'Build engaging games with Devlints — 2D/3D, mobile & cross-platform, multiplayer, and AR/VR experiences using Unity and Unreal for US/UK/EU clients.')
@section('og_image', asset('static/images/og/devlints-og.webp'))
@section('og_url', url()->current())

@section('twitter_title', 'Game Development Services | Devlints')
@section('twitter_description', '2D/3D games, multiplayer, and AR/VR experiences—built with Unity/Unreal for performance, scale, and player engagement.')
@section('twitter_image', asset('static/images/og/devlints-og.webp'))

@section('canonical', url()->current())
@section('robots', 'index, follow')

{{-- Optional: used by global WebPage schema in master --}}
@section('schema_name', 'Game Development Services')
@section('schema_description', 'Devlints provides game development services including 2D/3D games, cross-platform mobile games, multiplayer systems, AR/VR experiences, and Unity/Unreal development for US/UK/EU clients.')

@push('structured_data')
    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"Service",
          "name":"Game Development Services",
          "serviceType":"Game Development",
          "provider": { "@id":"{{ url('/') }}#organization" },
  "url":"{{ url()->current() }}",
  "areaServed":["United States","United Kingdom","Europe"],
  "description":"Devlints provides game development services including 2D/3D games, cross-platform mobile games, multiplayer systems, AR/VR experiences, and Unity/Unreal development."
}
    </script>

    <script type="application/ld+json">
        {
          "@context":"https://schema.org",
          "@type":"FAQPage",
          "mainEntity":[
            {
              "@type":"Question",
              "name":"Do you develop games with Unity or Unreal Engine?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We build games using Unity and Unreal depending on your target platforms, performance needs, and feature requirements."}
            },
            {
              "@type":"Question",
              "name":"Can you build multiplayer games and real-time features?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We implement multiplayer systems and real-time features such as matchmaking, leaderboards, and live game state synchronization based on your game design."}
            },
            {
              "@type":"Question",
              "name":"Do you develop AR/VR game experiences?",
              "acceptedAnswer":{"@type":"Answer","text":"Yes. We build AR/VR experiences and interactive applications depending on your target devices and content requirements."}
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
    {"@type":"ListItem","position":3,"name":"Game Development","item":"{{ url()->current() }}"}
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
            <h1>Immersive Game Development Services</h1>
            <p>
                As a leading <strong>game development company</strong>, we create engaging and visually stunning games for mobile, desktop, and web platforms. Our <strong>game developers</strong> specialize in building interactive, high-performance, and scalable games using the latest engines and technologies.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free game development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>2D & 3D Game Development</h2>
                    <p>
                        We develop captivating <strong>2D and 3D games</strong> using top engines like Unity and Unreal. From concept to launch, we deliver a seamless and engaging user experience across genres.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Mobile & Cross-Platform Games</h2>
                    <p>
                        Our team creates <strong>cross-platform games</strong> that run smoothly on Android, iOS, and desktop devices—maximizing reach and player engagement.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Multiplayer & AR/VR Games</h2>
                    <p>
                        We build immersive <strong>multiplayer games</strong> and cutting-edge <strong>AR/VR experiences</strong> to captivate users and enhance interactivity using real-time technologies.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h2>Technologies We Use in Game Development</h2>
            <p>We use industry-standard game engines, libraries, and design tools to build games that are performant, immersive, and user-centric.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="gameDevStack">Game Development Tools</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h2>Our Game Development Services</h2>
            <div class="services-grid">
                <div class="service-item">Mobile Game Development</div>
                <div class="service-item">PC & Console Game Development</div>
                <div class="service-item">AR & VR Game Development</div>
                <div class="service-item">Multiplayer Game Development</div>
                <div class="service-item">Unity & Unreal Game Development</div>
                <div class="service-item">Game UI/UX & Asset Design</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h2>Game Solutions for All Genres</h2>
            <p>We develop high-quality games across genres—from hyper-casual mobile games to complex open-world adventures—customized for your vision and target audience.</p>
            <a href="{{ route('contact_us') }}" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">Action</div>
                <div class="niche-item">Adventure</div>
                <div class="niche-item">Puzzle</div>
                <div class="niche-item">RPG</div>
                <div class="niche-item">Simulation</div>
                <div class="niche-item">Strategy</div>
                <div class="niche-item">Sports</div>
                <div class="niche-item">Casual</div>
                <div class="niche-item">Educational</div>
                <div class="niche-item">Horror</div>
                <div class="niche-item">Fantasy</div>
                <div class="niche-item">Sci-Fi</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
