@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/hire-talent.css') }}">
    <link rel="stylesheet" href="{{ asset('static/css/services.css') }}">
    <style>
        .ai-text::after {
            content: 'Ai';
            font-size: 10em;
            font-weight: 900;
            color: rgba(59, 130, 246, 0.1);
            position: absolute;
            top: 60%;
            right: 0;
            transform: translateY(-50%);
        }
    </style>
@endpush

@section("content")
    <div class="section hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>Hire AI Developers & Machine Learning Experts</h1>
                    <p>Build intelligent, future-ready applications with our expert AI developers. Whether you're launching an AI-powered product, integrating machine learning models, or enhancing business intelligence, our developers deliver cutting-edge artificial intelligence solutions tailored to your vision.</p>
                    <ul>
                        <li>AI & Machine Learning Model Development</li>
                        <li>Natural Language Processing (NLP)</li>
                        <li>Computer Vision & Image Recognition</li>
                        <li>Predictive Analytics & Data Science</li>
                        <li>AI Chatbots & Recommendation Engines</li>
                    </ul>
                    <a href="{{route('contact_us')}}" class="btn">Request a Free AI Consultation</a>
                </div>
                <div class="ai-text"></div>
            </div>
        </div>
    </div>

    <div class="section why-hire">
        <div class="container">
            <h1>Why Hire AI Developers from Devlints?</h1>
            <div class="why-hire-grid">
                <div class="why-hire-card">
                    <h3>Expertise in AI Technologies</h3>
                    <p>Our developers specialize in Python, TensorFlow, PyTorch, OpenAI, Hugging Face, and other leading AI tools and libraries.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Custom AI Solutions</h3>
                    <p>From fraud detection to recommendation systems and automation tools, we build solutions tailored to your business case.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Data-Driven Development</h3>
                    <p>We transform structured and unstructured data into actionable insights using machine learning, NLP, and deep learning techniques.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Rapid Prototyping</h3>
                    <p>We help you validate your AI ideas with working prototypes and MVPs—minimizing risk and maximizing innovation.</p>
                </div>
                <div class="why-hire-card">
                    <h3>Ethical & Scalable AI</h3>
                    <p>Our engineers ensure responsible AI development—focusing on fairness, privacy, and scalability for real-world usage.</p>
                </div>
                <div class="why-hire-card">
                    <h3>End-to-End Support</h3>
                    <p>From model training to deployment, maintenance, and monitoring—we support the full AI development lifecycle.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="section tech-section">
        <div class="container">
            <h1>Technologies We Use in AI Development</h1>
            <p class="tech-para">Our AI developers use the most advanced frameworks, platforms, and cloud services to deliver high-performance intelligent systems.</p>
            <div class="tech-categories">
                <div class="tech-category" data-category="aiStack">AI Tools Stack</div>

            </div>
            <div class="services-grid"></div>
        </div>
    </div>

    <div class="section offshore-section">
        <div class="container">
            <h1>Why Hire Offshore AI Developers?</h1>
            <p>Partnering with Devlints gives you access to top AI talent worldwide, fast project execution, and cost-effective innovation. Here's why global clients trust us:</p>
            <div class="offshore-grid">
                <div class="offshore-card">
                    <h3>Global AI Talent Pool</h3>
                    <p>Our offshore AI developers have hands-on experience in industries like healthcare, fintech, retail, and logistics.</p>
                </div>
                <div class="offshore-card">
                    <h3>Faster Innovation Cycles</h3>
                    <p>Timezone-aligned teams work in agile sprints to bring your AI solution to life faster than traditional development models.</p>
                </div>
                <div class="offshore-card">
                    <h3>Reduced Development Cost</h3>
                    <p>Get world-class AI expertise at a fraction of the cost compared to building a local team.</p>
                </div>
                <div class="offshore-card">
                    <h3>Flexible Engagement Models</h3>
                    <p>Hire AI developers full-time, part-time, or per project—scaling up or down based on your needs.</p>
                </div>
                <div class="offshore-card">
                    <h3>Secure & Compliant Delivery</h3>
                    <p>We follow best practices in data security, GDPR compliance, and MLOps workflows to ensure safe deployment.</p>
                </div>
                <div class="offshore-card">
                    <h3>Seamless Collaboration</h3>
                    <p>We integrate with your tools—Slack, GitHub, JIRA, Zoom—for smooth real-time communication and project tracking.</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('static/js/services.js') }}"></script>
@endpush
