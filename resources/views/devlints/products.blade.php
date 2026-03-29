@extends('layouts.master')

@push('styles')
<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&family=DM+Sans:wght@300;400;500;600&display=swap');

:root {
    --bg: #04080f;
    --surface: rgba(255,255,255,0.032);
    --border: rgba(255,255,255,0.07);
    --blue: #0984E3;
    --blue-glow: rgba(9,132,227,0.22);
    --text: #fff;
    --muted: rgba(255,255,255,0.45);
    --faint: rgba(255,255,255,0.07);
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

.pp {
    background: var(--bg);
    color: var(--text);
    font-family: 'Montserrat', sans-serif;
    min-height: 100vh;
    overflow-x: hidden;
}

/* ─── NOISE OVERLAY ─── */
.pp::before {
    content: '';
    position: fixed;
    inset: 0;
    background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 256 256' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noise'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.9' numOctaves='4' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noise)' opacity='0.04'/%3E%3C/svg%3E");
    pointer-events: none;
    z-index: 999;
    opacity: 0.35;
}

/* ─── HERO ─── */
.pp-hero {
    position: relative;
    padding: 160px 60px 110px;
    text-align: center;
    overflow: hidden;
}

/* Orbit rings */
.pp-rings {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    pointer-events: none;
    z-index: 0;
}

.pp-rings span {
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    border: 1px solid rgba(9,132,227,0.08);
    border-radius: 50%;
    animation: ringPulse 6s ease-in-out infinite;
}

.pp-rings span:nth-child(1) { width: 300px; height: 300px; animation-delay: 0s; }
.pp-rings span:nth-child(2) { width: 520px; height: 520px; animation-delay: 1s; }
.pp-rings span:nth-child(3) { width: 760px; height: 760px; animation-delay: 2s; }
.pp-rings span:nth-child(4) { width: 1040px; height: 1040px; animation-delay: 3s; }

@keyframes ringPulse {
    0%, 100% { opacity: 0.4; transform: translate(-50%,-50%) scale(1); }
    50%       { opacity: 0.12; transform: translate(-50%,-50%) scale(1.03); }
}

/* central glow */
.pp-hero::after {
    content: '';
    position: absolute;
    top: 30%; left: 50%;
    transform: translate(-50%, -50%);
    width: 800px; height: 500px;
    background: radial-gradient(ellipse, rgba(9,132,227,0.14), transparent 65%);
    pointer-events: none;
    z-index: 0;
}

.pp-hero__inner {
    position: relative;
    z-index: 2;
    max-width: 680px;
    margin: 0 auto;
}

.pp-chip {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: var(--blue);
    border: 1px solid rgba(9,132,227,0.3);
    border-radius: 100px;
    padding: 6px 16px;
    margin-bottom: 32px;
    background: rgba(9,132,227,0.07);
    animation: fadeUp 0.7s ease both;
}

.pp-chip::before {
    content: '';
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--blue);
    box-shadow: 0 0 8px var(--blue);
    animation: livePulse 2s ease-in-out infinite;
}

@keyframes livePulse { 0%,100%{opacity:1} 50%{opacity:0.3} }

.pp-hero__title {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(42px, 7vw, 80px);
    font-weight: 800;
    line-height: 1.0;
    letter-spacing: -3px;
    margin: 0 0 24px;
    animation: fadeUp 0.7s 0.1s ease both;
}

.pp-hero__title em {
    font-style: normal;
    background: linear-gradient(120deg, #22beff 0%, #a259ff 40%, #fa2c67 70%, #22beff 100%) 0/300%;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: gradShift 7s linear infinite;
}

@keyframes gradShift {
    0%   { background-position: 0% 0%; }
    100% { background-position: 300% 0%; }
}

.pp-hero__sub {
    font-size: 16px;
    color: var(--muted);
    line-height: 1.8;
    max-width: 520px;
    margin: 0 auto 52px;
    animation: fadeUp 0.7s 0.2s ease both;
}

/* ── stats ── */
.pp-stats {
    display: flex;
    justify-content: center;
    gap: 0;
    animation: fadeUp 0.7s 0.3s ease both;
}

.pp-stat {
    padding: 12px 40px;
    border-right: 1px solid var(--border);
    text-align: center;
}
.pp-stat:first-child { border-left: 1px solid var(--border); }

.pp-stat__n {
    font-family: 'Montserrat', sans-serif;
    font-size: 34px;
    font-weight: 800;
    color: #fff;
    letter-spacing: -1.5px;
    line-height: 1;
    display: block;
    margin-bottom: 5px;
}

.pp-stat__l {
    font-size: 11px;
    color: rgba(255,255,255,0.35);
    letter-spacing: 1px;
    text-transform: uppercase;
}

@keyframes fadeUp {
    from { opacity: 0; transform: translateY(20px); }
    to   { opacity: 1; transform: translateY(0); }
}

/* ─── PRODUCTS SECTION ─── */
.pp-section {
    max-width: 1280px;
    margin: 0 auto;
    padding: 40px 60px 120px;
}

/* ─── CARD (horizontal layout for immersive feel) ─── */
.pp-card {
    position: relative;
    background: var(--surface);
    border: 1px solid var(--border);
    border-radius: 24px;
    padding: 42px 48px;
    margin-bottom: 28px;
    display: grid;
    grid-template-columns: auto 1fr auto;
    gap: 0 36px;
    align-items: start;
    overflow: hidden;
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.55s ease, transform 0.55s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
}

.pp-card.visible {
    opacity: 1;
    transform: translateY(0);
}

/* accent line left */
.pp-card::before {
    content: '';
    position: absolute;
    left: 0; top: 20%; bottom: 20%;
    width: 3px;
    background: linear-gradient(180deg, transparent, var(--blue), transparent);
    border-radius: 0 3px 3px 0;
    opacity: 0;
    transition: opacity 0.3s ease;
}

/* spotlight follow */
.pp-card::after {
    content: '';
    position: absolute;
    inset: 0;
    background: radial-gradient(circle 400px at var(--cx,50%) var(--cy,50%), rgba(9,132,227,0.05), transparent 70%);
    pointer-events: none;
    opacity: 0;
    transition: opacity 0.4s ease;
    border-radius: 24px;
}

.pp-card:hover {
    border-color: rgba(9,132,227,0.35);
    box-shadow: 0 32px 64px rgba(0,0,0,0.5), 0 0 0 1px rgba(9,132,227,0.08);
}
.pp-card:hover::before { opacity: 1; }
.pp-card:hover::after  { opacity: 1; }

/* ── logo column ── */
.pp-card__icon {
    width: 72px;
    height: 72px;
    border-radius: 16px;
    border: 1px solid var(--border);
    background: rgba(255,255,255,0.04);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Montserrat', sans-serif;
    font-weight: 800;
    font-size: 20px;
    color: var(--blue);
    flex-shrink: 0;
    transition: border-color 0.3s, background 0.3s;
    overflow: hidden;
}

.pp-card__icon img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 8px;
}

.pp-card:hover .pp-card__icon {
    border-color: rgba(9,132,227,0.45);
    background: rgba(9,132,227,0.08);
}

/* ── body column ── */
.pp-card__body {}

.pp-card__name {
    font-family: 'Montserrat', sans-serif;
    font-size: 24px;
    font-weight: 800;
    color: #fff;
    letter-spacing: -0.6px;
    margin: 0 0 5px;
    line-height: 1.1;
}

.pp-card__tagline {
    font-size: 13px;
    font-weight: 600;
    color: var(--blue);
    letter-spacing: 0.2px;
    margin: 0 0 18px;
}

.pp-card__desc {
    font-size: 14.5px;
    color: rgba(255,255,255,0.52);
    line-height: 1.75;
    max-width: 680px;
}

/* ── tags row ── */
.pp-card__tags {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 20px;
}

.pp-tag {
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 0.5px;
    color: rgba(255,255,255,0.35);
    border: 1px solid rgba(255,255,255,0.08);
    border-radius: 100px;
    padding: 4px 12px;
    text-transform: uppercase;
}

/* ── CTA column ── */
.pp-card__action {
    display: flex;
    flex-direction: column;
    align-items: flex-end;
    gap: 12px;
    min-width: 140px;
}

.pp-card__badge {
    display: inline-flex;
    align-items: center;
    gap: 5px;
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: #22c55e;
    border: 1px solid rgba(34,197,94,0.2);
    background: rgba(34,197,94,0.06);
    border-radius: 100px;
    padding: 4px 10px;
}

.pp-card__badge::before {
    content: '';
    width: 5px; height: 5px;
    border-radius: 50%;
    background: #22c55e;
    box-shadow: 0 0 6px rgba(34,197,94,0.8);
    animation: livePulse 2s ease-in-out infinite;
}

.pp-card__badge--soon {
    color: rgba(255,255,255,0.35);
    border-color: rgba(255,255,255,0.1);
    background: rgba(255,255,255,0.04);
}

.pp-card__badge--soon::before {
    background: rgba(255,255,255,0.35);
    box-shadow: none;
    animation: none;
}

.pp-cta {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    font-size: 13px;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    color: #fff !important;
    background: var(--blue);
    border-radius: 10px;
    padding: 10px 22px;
    text-decoration: none !important;
    transition: background 0.25s, transform 0.25s, box-shadow 0.25s;
    white-space: nowrap;
}

.pp-cta:hover {
    background: #0770c5;
    transform: translateX(4px);
    box-shadow: 0 8px 24px rgba(9,132,227,0.4);
}

.pp-cta svg { transition: transform 0.25s ease; }
.pp-cta:hover svg { transform: translateX(3px); }

/* card number watermark */
.pp-card__num {
    position: absolute;
    bottom: 28px;
    right: 36px;
    font-family: 'Montserrat', sans-serif;
    font-size: 88px;
    font-weight: 800;
    color: rgba(255,255,255,0.025);
    line-height: 1;
    pointer-events: none;
    letter-spacing: -4px;
    user-select: none;
    transition: color 0.3s ease;
}

.pp-card:hover .pp-card__num { color: rgba(9,132,227,0.06); }

/* ─── FEATURED STRIPE (first card) ─── */
.pp-card--featured {
    background: linear-gradient(135deg, rgba(9,132,227,0.06), rgba(255,255,255,0.025));
    border-color: rgba(9,132,227,0.2);
}



/* ─── CTA BANNER ─── */
.pp-banner {
    border-top: 1px solid var(--border);
    text-align: center;
    padding: 110px 60px;
    position: relative;
    overflow: hidden;
    background: linear-gradient(180deg, #04080f, #070d1a);
}

.pp-banner::before {
    content: '';
    position: absolute;
    top: 50%; left: 50%;
    transform: translate(-50%, -50%);
    width: 900px; height: 400px;
    background: radial-gradient(ellipse, rgba(9,132,227,0.1), transparent 65%);
    pointer-events: none;
}

/* decorative dots grid */
.pp-banner::after {
    content: '';
    position: absolute;
    inset: 0;
    background-image: radial-gradient(rgba(9,132,227,0.12) 1px, transparent 1px);
    background-size: 32px 32px;
    -webkit-mask-image: radial-gradient(ellipse 60% 80% at 50% 50%, black, transparent);
    mask-image: radial-gradient(ellipse 60% 80% at 50% 50%, black, transparent);
    pointer-events: none;
}

.pp-banner__inner {
    position: relative;
    z-index: 2;
    max-width: 600px;
    margin: 0 auto;
}

.pp-banner h2 {
    font-family: 'Montserrat', sans-serif;
    font-size: clamp(32px, 5vw, 58px);
    font-weight: 800;
    letter-spacing: -2px;
    line-height: 1.05;
    margin: 0 0 18px;
    color: #fff;
}

.pp-banner h2 em {
    font-style: normal;
    background: linear-gradient(120deg, #22beff, #a259ff, #fa2c67, #22beff) 0/300%;
    -webkit-background-clip: text;
    background-clip: text;
    color: transparent;
    animation: gradShift 7s linear infinite;
}

.pp-banner p {
    font-size: 16px;
    color: var(--muted);
    margin: 0 0 40px;
    line-height: 1.75;
}

.pp-banner-btn {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: 'Montserrat', sans-serif;
    font-size: 15px;
    font-weight: 700;
    color: #fff !important;
    background: var(--blue);
    border-radius: 14px;
    padding: 16px 38px;
    text-decoration: none !important;
    box-shadow: 0 10px 36px rgba(9,132,227,0.32);
    transition: all 0.3s ease;
    animation: breathe 3.5s ease-in-out infinite;
}

@keyframes breathe {
    0%,100% { box-shadow: 0 10px 36px rgba(9,132,227,0.32); }
    50%      { box-shadow: 0 10px 52px rgba(9,132,227,0.52); }
}

.pp-banner-btn:hover {
    background: #0770c5;
    transform: translateY(-3px);
    animation: none;
    box-shadow: 0 18px 48px rgba(9,132,227,0.48);
    color: #fff !important;
}

/* ─── RESPONSIVE ─── */
@media (max-width: 1024px) {
    .pp-card { grid-template-columns: auto 1fr; }
    .pp-card__action { grid-column: 1 / -1; flex-direction: row; align-items: center; margin-top: 24px; }
}

@media (max-width: 720px) {
    .pp-hero, .pp-banner { padding: 120px 28px 80px; }
    .pp-section { padding: 30px 24px 80px; }
    .pp-card { grid-template-columns: 1fr; padding: 32px 28px; }
    .pp-card__icon { margin-bottom: 4px; }
    .pp-card__action { flex-direction: row; flex-wrap: wrap; margin-top: 20px; }
    .pp-stats { flex-wrap: wrap; gap: 16px; }
    .pp-stat { border: none !important; padding: 0 24px; }
    .pp-card__num { display: none; }
    .pp-rings span:nth-child(3),
    .pp-rings span:nth-child(4) { display: none; }
}
</style>
@endpush

@section('title', 'Our Products | Devlints')
@section('meta_description', 'Explore products built by Devlints — SaaS tools, mobile apps, and web platforms designed to solve real business problems.')

@section('content')
<div class="pp">

    {{-- HERO --}}
    <section class="pp-hero">
        <div class="pp-rings">
            <span></span><span></span><span></span><span></span>
        </div>

        <div class="pp-hero__inner">
            <div class="pp-chip">Our Products</div>

            <h1 class="pp-hero__title">
                Ideas We Built<br><em>Into Reality</em>
            </h1>

            <p class="pp-hero__sub">
                Beyond client work, we build our own products — real tools solving
                real problems, engineered with the same care we bring to every project.
            </p>

            <div class="pp-stats" id="ppStats">
                <div class="pp-stat">
                    <span class="pp-stat__n" data-count="3">0</span>
                    <span class="pp-stat__l">Products Live</span>
                </div>
                <div class="pp-stat">
                    <span class="pp-stat__n" data-count="40">0</span>
                    <span class="pp-stat__l">Countries Reached</span>
                </div>
                <div class="pp-stat">
                    <span class="pp-stat__n" data-count="12">0</span>
                    <span class="pp-stat__l">Industries Served</span>
                </div>
            </div>
        </div>
    </section>

    {{-- PRODUCTS --}}
    <section class="pp-section">

        {{-- Card 1: MultCleaner --}}
        <div class="pp-card pp-card--featured" data-delay="0">

            <div class="pp-card__icon">
                <img src="/static/images/products/multcleaner.png"
                     alt="MultCleaner"
                     onerror="this.parentElement.textContent='MC'">
            </div>

            <div class="pp-card__body">
                <h2 class="pp-card__name">MultCleaner</h2>
                <p class="pp-card__tagline">All-in-one cleaner for Reddit, Gmail, Google Drive and OneDrive</p>
                <p class="pp-card__desc">
                    Take full control of your digital footprint with MultCleaner, the comprehensive solution for multi-platform decluttering.
                    This powerful tool unifies your management workflow, allowing you to scrub data across Reddit, Gmail, Google Drive,
                    and OneDrive from a single interface. Whether you are wiping old social media trails or purging gigabytes of cloud
                    storage, its high-speed automation handles the heavy lifting for you. It's the ultimate utility for maintaining a
                    minimalist digital life, ensuring your accounts remain lean, private, and perfectly organized.
                </p>
                <div class="pp-card__tags">
                    <span class="pp-tag">Privacy</span>
                    <span class="pp-tag">Automation</span>
                    <span class="pp-tag">Cloud</span>
                    <span class="pp-tag">SaaS</span>
                </div>
            </div>

            <div class="pp-card__action">
                <span class="pp-card__badge">Live</span>
                <a href="https://multcleaner.com/" target="_blank" rel="noopener noreferrer" class="pp-cta">
                    Visit Site
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M2 7H12M12 7L8 3M12 7L8 11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <span class="pp-card__num">01</span>
        </div>

        {{-- Card 2: Plouro --}}
        <div class="pp-card" data-delay="0.1">
            <div class="pp-card__icon">
                <img src="/static/images/products/plouro.webp"
                     alt="Plouro"
                     onerror="this.parentElement.textContent='PL'">
            </div>

            <div class="pp-card__body">
                <h2 class="pp-card__name">Plouro</h2>
                <p class="pp-card__tagline">All-in-one organizer and exporter for Gmail and Outlook</p>
                <p class="pp-card__desc">
                    Take command of your communication history with Plouro, the definitive tool for organizing and archiving
                    fragmented email threads. Built for professionals who prioritize clarity, it seamlessly unifies data from
                    Gmail and Outlook into a single, streamlined interface. With powerful search capabilities and one-click
                    PDF exporting, you can transform years of digital correspondence into a clean, searchable, and permanent
                    record. Whether you are securing legal documentation or building a personal knowledge base, it provides
                    the essential infrastructure for a minimalist and perfectly ordered inbox.
                </p>
                <div class="pp-card__tags">
                    <span class="pp-tag">Email</span>
                    <span class="pp-tag">Productivity</span>
                    <span class="pp-tag">PDF Export</span>
                    <span class="pp-tag">SaaS</span>
                </div>
            </div>

            <div class="pp-card__action">
                <span class="pp-card__badge">Live</span>
                <a href="https://plouro.com/" target="_blank" rel="noopener noreferrer" class="pp-cta">
                    Visit Site
                    <svg width="14" height="14" viewBox="0 0 14 14" fill="none">
                        <path d="M2 7H12M12 7L8 3M12 7L8 11" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
            </div>

            <span class="pp-card__num">02</span>
        </div>

        {{-- Card 3: Name Pilot Cloud --}}
        <div class="pp-card" data-delay="0.2">
            <div class="pp-card__icon">NP</div>

            <div class="pp-card__body">
                <h2 class="pp-card__name">Name Pilot Cloud</h2>
                <p class="pp-card__tagline">Rename Files using AI</p>
                <p class="pp-card__desc">
                    Transform chaotic folders into perfectly indexed directories with Name Pilot Cloud, the AI-powered file renamer.
                    This intelligent utility moves beyond simple pattern matching, using computer vision and natural language
                    processing to understand the actual content of your files. Whether you are organizing a massive library of
                    generic camera uploads or categorizing complex project documents, the AI analyzes metadata and visual cues
                    to generate precise, human-readable names. It is the definitive tool for maintaining a minimalist and
                    professional file structure without the burden of manual sorting.
                </p>
                <div class="pp-card__tags">
                    <span class="pp-tag">AI</span>
                    <span class="pp-tag">File Management</span>
                    <span class="pp-tag">Automation</span>
                    <span class="pp-tag">Desktop</span>
                </div>
            </div>

            <div class="pp-card__action">
                <span class="pp-card__badge pp-card__badge--soon">Coming Soon</span>
            </div>

            <span class="pp-card__num">03</span>
        </div>

    </section>

    {{-- BOTTOM CTA --}}
    <section class="pp-banner">
        <div class="pp-banner__inner">
            <h2>Let's Build Your<br><em>Next Big Thing</em></h2>
            <p>Have a product idea? We turn it into a scalable,<br>market-ready reality — fast.</p>
            <a href="{{ route('contact_us') }}" class="pp-banner-btn">
                Start a Project
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                    <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>
        </div>
    </section>

</div>

<script>
/* ── Card scroll-reveal ── */
const cards = document.querySelectorAll('.pp-card');
const cardObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            const delay = parseFloat(e.target.dataset.delay || 0) * 1000;
            setTimeout(() => e.target.classList.add('visible'), delay);
            cardObs.unobserve(e.target);
        }
    });
}, { threshold: 0.1 });
cards.forEach(c => cardObs.observe(c));

/* ── Stats count-up ── */
const statsEl = document.getElementById('ppStats');
const statsObs = new IntersectionObserver((entries) => {
    if (!entries[0].isIntersecting) return;
    document.querySelectorAll('.pp-stat__n').forEach(el => {
        const target = parseInt(el.dataset.count, 10);
        let cur = 0;
        const step = Math.max(1, Math.ceil(target / 45));
        const t = setInterval(() => {
            cur = Math.min(cur + step, target);
            el.textContent = cur + (target >= 40 ? '+' : '');
            if (cur >= target) clearInterval(t);
        }, 25);
    });
    statsObs.disconnect();
}, { threshold: 0.6 });
if (statsEl) statsObs.observe(statsEl);

/* ── Mouse-tracking spotlight on cards ── */
cards.forEach(card => {
    card.addEventListener('mousemove', e => {
        const r = card.getBoundingClientRect();
        card.style.setProperty('--cx', ((e.clientX - r.left) / r.width * 100).toFixed(1) + '%');
        card.style.setProperty('--cy', ((e.clientY - r.top) / r.height * 100).toFixed(1) + '%');
    });
});
</script>
@endsection