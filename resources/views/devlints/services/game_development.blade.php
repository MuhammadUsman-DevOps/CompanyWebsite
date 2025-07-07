@extends('layouts.master')
@section('title') Game Development Services @endsection
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
            <h1>Technologies We Use in Game Development</h1>
            <p>We use industry-standard game engines, libraries, and design tools to build games that are performant, immersive, and user-centric.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="gameDevStack">Game Development Tools</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Our Game Development Services</h1>
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
            <h1>Game Solutions for All Genres</h1>
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
