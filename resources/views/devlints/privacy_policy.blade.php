@extends('layouts.master')

@push('styles')

    <style>
        body {
            background: linear-gradient(135deg, #e0f2fe 0%, #f5f7fa 100%);
            overflow: hidden;
            position: relative;

        }

        .policies-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 120px;
            border-radius: 8px;
            line-height: 1.6;

            overflow: hidden; /* Prevent overflow from ::before */
        }

        body::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.2), transparent);
            border-radius: 50%;
            overflow: hidden;
        }


        @media(max-width: 600px){
            .policies-container {
                padding: 30px;
                margin-top: 120px;
            }

        }


        .policies-heading {
            font-size: 2em;
            color: #222;
            margin-bottom: 20px;
            text-align: center;
        }
        .policies-subheading {
            font-size: 1.5em;
            color: #222;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        .policies-paragraph {
            margin-bottom: 15px;
        }
        .policies-list {
            margin-bottom: 15px;
            padding-left: 20px;
        }
        .policies-list-item {
            margin-bottom: 10px;
        }
        .policies-link {
            color: #007bff;
            text-decoration: none;
        }
        .policies-link:hover {
            text-decoration: underline;
        }
        .policies-updated {
            font-style: italic;
            color: #666;
            text-align: center;
            margin-top: 30px;
        }
    </style>

@endpush

@section('content')

    <div class="policies-container">
        <h1 class="policies-heading">Privacy Policy</h1>
        <p class="policies-paragraph">This Privacy Policy explains how we collect, use, and protect your personal information when you use our website and services. Your privacy is important to us, and we are committed to safeguarding your data.</p>

        <h2 class="policies-subheading">1. Information We Collect</h2>
        <p class="policies-paragraph">We may collect the following types of information:</p>
        <ul class="policies-list">
            <li class="policies-list-item"><strong>Personal Information:</strong> Name, email address, and other contact details you provide when registering or contacting us.</li>
            <li class="policies-list-item"><strong>Usage Data:</strong> Information about how you interact with our website, such as IP address, browser type, and pages visited.</li>
            <li class="policies-list-item"><strong>Cookies:</strong> We use cookies to enhance your experience and analyze website performance. You can manage cookie preferences through your browser settings.</li>
        </ul>

        <h2 class="policies-subheading">2. How We Use Your Information</h2>
        <p class="policies-paragraph">Your information is used to:</p>
        <ul class="policies-list">
            <li class="policies-list-item">Provide and improve our services.</li>
            <li class="policies-list-item">Respond to your inquiries and provide customer support.</li>
            <li class="policies-list-item">Analyze website usage to enhance user experience.</li>
            <li class="policies-list-item">Send you updates or promotional materials (with your consent).</li>
        </ul>

        <h2 class="policies-subheading">3. Sharing Your Information</h2>
        <p class="policies-paragraph">We do not sell or share your personal information with third parties, except:</p>
        <ul class="policies-list">
            <li class="policies-list-item">With service providers who assist in operating our website (e.g., hosting or analytics providers).</li>
            <li class="policies-list-item">When required by law or to protect our rights.</li>
        </ul>

        <h2 class="policies-subheading">4. Data Security</h2>
        <p class="policies-paragraph">We implement reasonable security measures to protect your information from unauthorized access, use, or disclosure. However, no method of transmission over the internet is completely secure.</p>

        <h2 class="policies-subheading">5. Your Rights</h2>
        <p class="policies-paragraph">You have the right to:</p>
        <ul class="policies-list">
            <li class="policies-list-item">Access, update, or delete your personal information.</li>
            <li class="policies-list-item">Opt out of marketing communications.</li>
            <li class="policies-list-item">Disable cookies through your browser settings.</li>
        </ul>
        <p class="policies-paragraph">To exercise these rights, please contact us at <a href="mailto:info@devlints.com" class="policies-link">info@devlints.com</a>.</p>

        <h2 class="policies-subheading">6. Third-Party Links</h2>
        <p class="policies-paragraph">Our website may contain links to third-party sites. We are not responsible for their privacy practices and encourage you to review their policies.</p>

        <h2 class="policies-subheading">7. Changes to This Policy</h2>
        <p class="policies-paragraph">We may update this Privacy Policy from time to time. Any changes will be posted on this page with an updated "Last Updated" date.</p>

        <p class="policies-updated">Last Updated: July 11, 2025</p>
    </div>

@endsection
