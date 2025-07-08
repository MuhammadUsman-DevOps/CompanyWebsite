@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
@endpush

<style>
    .block-chain-text::after {
        content: 'Block Chain';
        font-size: 10em;
        font-weight: 900;
        color: rgba(59, 130, 246, 0.1);
        position: absolute;
        top: 60%;
        right: 0;
        transform: translateY(-50%);
    }
</style>
@section("content")
    <div class="section hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hire Expert Blockchain Developers</h1>
                    <p>Accelerate your Web3 journey with our dedicated blockchain developers. From smart contract development to DeFi platforms and NFT marketplaces, we offer end-to-end blockchain solutions tailored to startups and enterprises across the globe.</p>
                    <ul>
                        <li>Smart Contract Development (Solidity, Rust)</li>
                        <li>DeFi, NFT, DApps & Wallet Integrations</li>
                        <li>Ethereum, Polygon, BNB Chain, Hyperledger</li>
                        <li>Secure & Transparent Code</li>
                        <li>Flexible Engagement Models</li>
                    </ul>
                    <a href="{{route('contact_us')}}" class="btn">Request a Free Quote</a>
                </div>
                <div class="block-chain-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire Blockchain Developers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Blockchain Expertise</h3>
                    <p>Our developers are well-versed in decentralized technologies, cryptography, smart contract standards, and multiple blockchain protocols.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Custom Blockchain Solutions</h3>
                    <p>We design scalable, secure, and custom blockchain applications tailored to your business model and use case.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Up-to-Date With Trends</h3>
                    <p>Our team stays updated with the latest trends in Web3, DeFi, NFTs, and Layer 2 solutions to give your project a competitive edge.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Audit-Ready Code</h3>
                    <p>We follow best practices in security and development so that your smart contracts are audit-ready and free of vulnerabilities.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Cost-Effective Development</h3>
                    <p>Get high-quality blockchain development services at budget-friendly rates without compromising on code security or scalability.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Post-Deployment Support</h3>
                    <p>We provide ongoing monitoring, upgrade support, and optimization for your deployed smart contracts or blockchain networks.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Use for Blockchain Development</h1>
            <p class="tech-para">We work with leading blockchain platforms, smart contract languages, and tools to build decentralized applications that are future-ready.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="platforms">Platforms</div>
                <div class="tech-category" data-category="languages">Languages</div>
                <div class="tech-category" data-category="tools">Tools</div>
            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Why Hire Offshore Blockchain Developers?</h1>
            <p>Hiring offshore blockchain developers allows you to access global talent, reduce operational costs, and scale efficiently. Here’s why businesses choose Devlints:</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Global Blockchain Talent</h3>
                    <p>Our offshore blockchain developers bring experience across Ethereum, Polygon, Solana, Binance Smart Chain, and more.</p>
                </div>
                <div class="offshore-card">
                    <h3>Instant Deployment</h3>
                    <p>Skip the lengthy hiring process—our blockchain experts are ready to jump in and start contributing right away.</p>
                </div>
                <div class="offshore-card">
                    <h3>Reduced Development Cost</h3>
                    <p>Save up to 60% in development costs while accessing cutting-edge Web3 expertise from certified professionals.</p>
                </div>
                <div class="offshore-card">
                    <h3>End-to-End Security</h3>
                    <p>Our developers implement best security practices to protect your DApps, tokens, and transactions from vulnerabilities.</p>
                </div>
                <div class="offshore-card">
                    <h3>No Infrastructure Needed</h3>
                    <p>We handle all hardware, tools, and licensing—allowing you to scale without infrastructure headaches.</p>
                </div>
                <div class="offshore-card">
                    <h3>Transparent Communication</h3>
                    <p>Get real-time updates through Slack, GitHub, JIRA, and Zoom, and maintain complete visibility into your project lifecycle.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
