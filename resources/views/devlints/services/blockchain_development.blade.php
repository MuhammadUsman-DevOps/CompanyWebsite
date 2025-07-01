@extends('layouts.master')
@section('title') Blockchain Development @endsection
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <h1> Blockchain Development Services</h1>
            <p>
                As a reliable <strong>blockchain development company</strong>, we specialize in building <strong>secure</strong>, <strong>transparent</strong>, and <strong>decentralized blockchain solutions</strong> tailored to your business needs.
                From startups to enterprises, our <strong>custom blockchain development services</strong> help enhance trust, automate processes, and drive innovation across industries.
            </p>
            <a href="{{ route('contact_us') }}" class="btn" aria-label="Request a free blockchain development consultation">Get a Free Consultation</a>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-card">
                    <h2>Custom Blockchain Development</h2>
                    <p>
                        We offer complete <strong>blockchain development services</strong> from consultation and strategy to design, development, and deployment.
                        Whether you need a smart contract, decentralized application (DApp), or private blockchain, we build secure and scalable solutions aligned with your business goals.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Smart Contract Development</h2>
                    <p>
                        Our experts write and audit <strong>smart contracts</strong> using Solidity and other blockchain programming languages.
                        We ensure your contracts are secure, efficient, and tamper-proof to automate processes and minimize risk.
                    </p>
                </div>
                <div class="feature-card">
                    <h2>Decentralized App (DApp) Development</h2>
                    <p>
                        We create <strong>user-friendly DApps</strong> on Ethereum, Binance Smart Chain, Polygon, and more.
                        Our team builds intuitive front-ends and connects them with secure blockchain-based backends to deliver real-world decentralized solutions.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Work With</h1>
            <p>We use the latest blockchain protocols, platforms, and tools to build robust, scalable, and secure blockchain solutions.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="platforms">Platforms</div>
                <div class="tech-category" data-category="languages">Languages</div>
                <div class="tech-category" data-category="tools">Tools</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section">
        <div class="container">
            <h1>Blockchain Development Services</h1>
            <div class="services-grid">
                <div class="service-item">Smart Contract Development</div>
                <div class="service-item">DApp Development</div>
                <div class="service-item">NFT Marketplace Development</div>
                <div class="service-item">Private Blockchain Solutions</div>
                <div class="service-item">Crypto Wallet Development</div>
                <div class="service-item">Blockchain Consulting</div>
            </div>
        </div>
    </div>

    <div class="section niches-section">
        <div class="container">
            <h1>Blockchain Solutions for All Industries</h1>
            <p>We empower industries with decentralized technologies to improve security, traceability, and operational efficiency.</p>
            <a href="#" class="btn">Get 24/7 Support</a>
            <div class="niches-grid">
                <div class="niche-item">Finance</div>
                <div class="niche-item">Supply Chain</div>
                <div class="niche-item">Healthcare</div>
                <div class="niche-item">Real Estate</div>
                <div class="niche-item">Gaming</div>
                <div class="niche-item">Insurance</div>
                <div class="niche-item">Voting Systems</div>
                <div class="niche-item">Identity Management</div>
                <div class="niche-item">Energy</div>
                <div class="niche-item">Legal</div>
                <div class="niche-item">eCommerce</div>
                <div class="niche-item">Art & Music (NFTs)</div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
