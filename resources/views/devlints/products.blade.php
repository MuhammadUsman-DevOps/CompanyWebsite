@extends('layouts.master')

@push('styles')
<style>
.products-page {
    background-color: #050915;
    color: #fff;
    min-height: 100vh;
    font-family: 'Onest', sans-serif;
}

/* ─── HERO ─── */
.prod-hero {
    position: relative;
    padding: 160px 40px 100px;
    text-align: center;
    overflow: hidden;
}

.prod-hero::before {
    content: '';
    position: absolute;
    top: -200px; left: 50%;
    transform: translateX(-50%);
    width: 900px; height: 600px;
    background: radial-gradient(ellipse, rgba(9,132,227,0.18), transparent 65%);
    pointer-events: none;
    z-index: 0;
}

.prod-hero__grid {
    position: absolute;
    inset: 0;
    background-image:
        linear-gradient(rgba(9,132,227,0.05) 1px, transparent 1px),
        linear-gradient(90deg, rgba(9,132,227,0.05) 1px, transparent 1px);
    background-size: 60px 60px;
    -webkit-mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black, transparent);
    mask-image: radial-gradient(ellipse 80% 80% at 50% 50%, black, transparent);
    pointer-events: none;
    z-index: 0;
}

.prod-hero__inner {
    position: relative;
    z-index: 2;
    max-width: 700px;
    margin: 0 auto;
}

.prod-hero__label {
    display: inline-block;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #0984E3;
    border: 1px solid rgba(9,132,227,0.35);
    border-radius: 100px;
    padding: 6px 18px;
    margin-bottom: 28px;
    background: rgba(9,132,227,0.08);
}

.prod-hero__title {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(36px, 6vw, 70px);
    font-weight: 800;
    line-height: 1.08;
    letter-spacing: -2px;
    margin: 0 0 22px;
    color: #fff;
}

.prod-hero__title span {
    background: linear-gradient(91.84deg, #22beff, #a259ff, #fa2c67, #22beff) 0 0 / 200% 100%;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: prodGradient 8s linear infinite;
}

.prod-hero__sub {
    font-size: 17px;
    color: rgba(255,255,255,0.55);
    line-height: 1.75;
    margin: 0 0 56px;
}

/* ── Stats bar ── */
.prod-hero__stats {
    display: flex;
    justify-content: center;
    gap: 0;
    position: relative;
    z-index: 2;
}

.prod-stat {
    padding: 0 36px;
    border-right: 1px solid rgba(255,255,255,0.08);
    text-align: center;
    opacity: 0;
    transform: translateY(12px);
    transition: opacity 0.5s ease, transform 0.5s ease;
}

.prod-stat:first-child { border-left: 1px solid rgba(255,255,255,0.08); }

.prod-stat.visible {
    opacity: 1;
    transform: translateY(0);
}

.prod-stat__num {
    font-family: 'Montserrat', sans-serif;
    font-size: 32px;
    font-weight: 800;
    color: #fff;
    letter-spacing: -1px;
    line-height: 1;
    margin-bottom: 6px;
    display: block;
}

.prod-stat__label {
    font-size: 12px;
    color: rgba(255,255,255,0.4);
    letter-spacing: 0.5px;
}

@keyframes prodGradient {
    0%   { background-position: 0% 0%; }
    100% { background-position: 200% 0%; }
}

/* ─── GRID SECTION ─── */
.prod-section {
    max-width: 1200px;
    margin: 0 auto;
    padding: 50px 40px 120px;
}

.prod-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

/* ─── CARD ─── */
.prod-card {
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 18px;
    padding: 28px;
    display: flex;
    flex-direction: column;
    gap: 16px;
    transition: border-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
    opacity: 0;
    transform: translateY(20px);
    cursor: default;
    position: relative;
    overflow: hidden;
}

.prod-card.card-visible {
    opacity: 1;
    transform: translateY(0);
}

.prod-card::after {
    content: '';
    position: absolute;
    inset: 0;
    border-radius: 18px;
    background: radial-gradient(circle at var(--mx,50%) var(--my,50%), rgba(9,132,227,0.06), transparent 60%);
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.35s ease;
}

.prod-card:hover::after {
    opacity: 1;
}

.prod-card:hover {
    border-color: rgba(9,132,227,0.45);
    transform: translateY(-5px);
    box-shadow: 0 24px 50px rgba(0,0,0,0.45), 0 0 0 1px rgba(9,132,227,0.1);
}

/* live dot on hover */
.prod-card__header {
    display: flex;
    align-items: center;
    gap: 16px;
}

.prod-card__logo {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    border: 1px solid rgba(255,255,255,0.1);
    background: rgba(255,255,255,0.05);
    object-fit: contain;
    padding: 7px;
    flex-shrink: 0;
}

.prod-card__logo-fallback {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    border: 1px solid rgba(9,132,227,0.3);
    background: rgba(9,132,227,0.1);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Montserrat', sans-serif;
    font-weight: 800;
    font-size: 17px;
    color: #0984E3;
    flex-shrink: 0;
}

.prod-card__meta {
    flex: 1;
    min-width: 0;
}

.prod-card__name {
    font-family: 'Montserrat', sans-serif;
    font-size: 19px;
    font-weight: 800;
    color: #fff;
    letter-spacing: -0.4px;
    margin: 0 0 4px;
}

.prod-card__tagline {
    font-size: 12px;
    color: #0984E3;
    font-weight: 600;
    margin: 0;
}

/* live badge — appears on hover */
.prod-card__live {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.5);
    border: 1px solid rgba(255,255,255,0.1);
    border-radius: 100px;
    padding: 3px 9px;
    margin-left: auto;
    flex-shrink: 0;
    opacity: 0;
    transition: opacity 0.3s ease;
}

.prod-card:hover .prod-card__live {
    opacity: 1;
}

.prod-card__live::before {
    content: '';
    width: 6px;
    height: 6px;
    border-radius: 50%;
    background: #22c55e;
    box-shadow: 0 0 6px rgba(34,197,94,0.7);
    animation: livePulse 2s ease-in-out infinite;
}

@keyframes livePulse {
    0%, 100% { opacity: 1; }
    50%       { opacity: 0.4; }
}

.prod-card__divider {
    height: 1px;
    background: rgba(255,255,255,0.07);
}

/* ── Scrollable description with pencil-thin scrollbar ── */
.prod-card__desc {
    font-size: 14px;
    color: rgba(255,255,255,0.55);
    line-height: 1.7;
    margin: 0;
    flex: 1;
    max-height: 96px; /* ~4 lines */
    overflow-y: auto;
    padding-right: 6px;
    scrollbar-width: thin;
    scrollbar-color: rgba(9,132,227,0.35) transparent;
}

.prod-card__desc::-webkit-scrollbar {
    width: 2px;
}

.prod-card__desc::-webkit-scrollbar-track {
    background: transparent;
}

.prod-card__desc::-webkit-scrollbar-thumb {
    background: rgba(9,132,227,0.35);
    border-radius: 2px;
}

.prod-card__desc::-webkit-scrollbar-thumb:hover {
    background: rgba(9,132,227,0.65);
}

.prod-card__footer {
    margin-top: auto;
    padding-top: 4px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.prod-card__cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 700;
    color: #fff !important;
    background: #0984E3;
    border-radius: 8px;
    padding: 9px 20px;
    text-decoration: none !important;
    transition: background 0.25s ease, transform 0.25s ease, box-shadow 0.25s ease;
}

.prod-card__cta:hover {
    background: #0770c5;
    transform: translateX(3px);
    box-shadow: 0 6px 20px rgba(9,132,227,0.4);
    color: #fff !important;
    text-decoration: none !important;
}

/* subtle "details" expand toggle */
.prod-card__toggle {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    font-weight: 600;
    color: rgba(255,255,255,0.3);
    background: transparent;
    border: none;
    cursor: pointer;
    padding: 0;
    transition: color 0.2s ease;
    text-decoration: none;
}

.prod-card__toggle:hover {
    color: rgba(255,255,255,0.65);
}

.prod-card__toggle svg {
    transition: transform 0.25s ease;
}

.prod-card.expanded .prod-card__toggle svg {
    transform: rotate(180deg);
}

.prod-card.expanded .prod-card__desc {
    max-height: 240px;
}

/* ─── CTA BANNER ─── */
.prod-cta-banner {
    background: linear-gradient(135deg, #0a1628, #050915);
    border-top: 1px solid rgba(9,132,227,0.12);
    text-align: center;
    padding: 100px 40px;
    position: relative;
    overflow: hidden;
}

.prod-cta-banner::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 700px; height: 350px;
    background: radial-gradient(ellipse, rgba(9,132,227,0.13), transparent 70%);
    pointer-events: none;
}

.prod-cta-banner h2 {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(28px, 4vw, 50px);
    font-weight: 800;
    letter-spacing: -1.5px;
    line-height: 1.1;
    margin: 0 0 16px;
    position: relative;
    color: #fff;
}

.prod-cta-banner h2 span {
    background: linear-gradient(91.84deg, #22beff, #a259ff, #fa2c67, #22beff) 0 0 / 200% 100%;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: prodGradient 8s linear infinite;
}

.prod-cta-banner p {
    font-size: 16px;
    color: rgba(255,255,255,0.5);
    margin: 0 0 36px;
    position: relative;
}

.prod-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #fff !important;
    background: #0984E3;
    border-radius: 12px;
    padding: 15px 36px;
    text-decoration: none !important;
    transition: all 0.3s ease;
    box-shadow: 0 8px 30px rgba(9,132,227,0.3);
    position: relative;
    animation: ctaBreath 3.5s ease-in-out infinite;
}

@keyframes ctaBreath {
    0%, 100% { box-shadow: 0 8px 30px rgba(9,132,227,0.3); }
    50%       { box-shadow: 0 8px 44px rgba(9,132,227,0.52); }
}

.prod-cta-btn:hover {
    background: #0770c5;
    transform: translateY(-2px);
    box-shadow: 0 16px 40px rgba(9,132,227,0.45);
    color: #fff !important;
    animation: none;
}

/* ─── RESPONSIVE ─── */
@media (max-width: 1024px) {
    .prod-grid { grid-template-columns: repeat(2, 1fr); }
}

@media (max-width: 680px) {
    .prod-hero { padding: 120px 24px 80px; }
    .prod-hero__stats { flex-wrap: wrap; gap: 16px; }
    .prod-stat { border: none !important; padding: 0 20px; }
    .prod-section { padding: 30px 20px 80px; }
    .prod-grid { grid-template-columns: 1fr; }
    .prod-cta-banner { padding: 70px 24px; }
}
</style>
@endpush

@section('title', 'Our Products | Devlints')
@section('meta_description', 'Explore products built by Devlints — SaaS tools, mobile apps, and web platforms designed to solve real business problems.')

@section('content')
<div class="products-page">

    {{-- HERO --}}
    <section class="prod-hero">
        <div class="prod-hero__grid"></div>
        <div class="prod-hero__inner">
            <span class="prod-hero__label">Our Products</span>
            <h1 class="prod-hero__title">
                Ideas We Built<br><span>Into Reality</span>
            </h1>
            <p class="prod-hero__sub">
                Beyond client work, we build our own products — real tools solving
                real problems, engineered with the same care we bring to every project.
            </p>

            {{-- Stats ─ fill these with real numbers --}}
            <div class="prod-hero__stats" id="heroStats">
                <div class="prod-stat">
                    <span class="prod-stat__num" data-count="{{ $products->count() }}">0</span>
                    <span class="prod-stat__label">Products Live</span>
                </div>
                <div class="prod-stat" style="transition-delay:0.1s">
                    <span class="prod-stat__num" data-count="40">0</span>
                    <span class="prod-stat__label">Countries Reached</span>
                </div>
                <div class="prod-stat" style="transition-delay:0.2s">
                    <span class="prod-stat__num" data-count="12">0</span>
                    <span class="prod-stat__label">Industries Served</span>
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUCTS --}}
    <section class="prod-section">
        <div class="prod-grid" id="prodGrid">
            @foreach($products as $index => $product)
            <div class="prod-card" style="transition-delay: {{ $index * 0.08 }}s">

                <div class="prod-card__header">
                    @if($product->logo)
                        <img
                            src="{{ asset('storage/' . $product->logo) }}"
                            alt="{{ $product->name }}"
                            class="prod-card__logo"
                            onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
                        >
                        <div class="prod-card__logo-fallback" style="display:none;">
                            {{ strtoupper(substr($product->name, 0, 2)) }}
                        </div>
                    @else
                        <div class="prod-card__logo-fallback">
                            {{ strtoupper(substr($product->name, 0, 2)) }}
                        </div>
                    @endif

                    <div class="prod-card__meta">
                        <h2 class="prod-card__name">{{ $product->name }}</h2>
                        @if($product->tagline)
                            <p class="prod-card__tagline">{{ $product->tagline }}</p>
                        @endif
                    </div>

                    @if($product->website_url)
                        <span class="prod-card__live">Live</span>
                    @endif
                </div>

                <div class="prod-card__divider"></div>

                <p class="prod-card__desc">{{ $product->description }}</p>

                <div class="prod-card__footer">
                    @if($product->website_url)
                    <a href="{{ $product->website_url }}" target="_blank" rel="noopener noreferrer" class="prod-card__cta">
                        Visit Site
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                            <path d="M2 7H12M12 7L8 3M12 7L8 11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                    @endif

                    <button class="prod-card__toggle" onclick="toggleCard(this)">
                        More
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none">
                            <path d="M2 4L6 8L10 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>

            </div>
            @endforeach
        </div>
    </section>

    {{-- BOTTOM CTA --}}
    <section class="prod-cta-banner">
        <h2>Let's Build Your<br><span>Next Big Thing</span></h2>
        <p>Have a product idea? We turn it into a scalable, market-ready reality — fast.</p>
        <a href="{{ route('contact_us') }}" class="prod-cta-btn">
            Start a Project
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </a>
    </section>

</div>

<script>
/* ── Intersection observer: cards fade in ── */
const cards = document.querySelectorAll('.prod-card');
const cardObserver = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('card-visible');
            cardObserver.unobserve(e.target);
        }
    });
}, { threshold: 0.12 });
cards.forEach(c => cardObserver.observe(c));

/* ── Stats animate in + count up ── */
const stats = document.querySelectorAll('.prod-stat');
const nums  = document.querySelectorAll('.prod-stat__num');

const statsObserver = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
        stats.forEach(s => s.classList.add('visible'));
        nums.forEach(el => {
            const target = parseInt(el.dataset.count, 10);
            let current = 0;
            const step = Math.ceil(target / 40);
            const tick = setInterval(() => {
                current = Math.min(current + step, target);
                el.textContent = current + (el.dataset.suffix || '');
                if (current >= target) clearInterval(tick);
            }, 28);
        });
        statsObserver.disconnect();
    }
}, { threshold: 0.5 });
statsObserver.observe(document.getElementById('heroStats'));

/* ── Card mouse-tracking radial glow ── */
cards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = ((e.clientX - rect.left) / rect.width  * 100).toFixed(1);
        const y = ((e.clientY - rect.top)  / rect.height * 100).toFixed(1);
        card.style.setProperty('--mx', x + '%');
        card.style.setProperty('--my', y + '%');
    });
});

/* ── Expand / collapse card description ── */
function toggleCard(btn) {
    const card = btn.closest('.prod-card');
    const isExpanded = card.classList.toggle('expanded');
    btn.childNodes[0].textContent = isExpanded ? 'Less' : 'More';
    card.querySelector('.prod-card__desc').style.transition = 'max-height 0.35s ease';
}
</script>
@endsection