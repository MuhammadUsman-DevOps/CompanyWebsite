@extends('layouts.master')

@push('styles')
    <style>
        body {
            background: linear-gradient(135deg, #e0f2fe 0%, #f5f7fa 100%);
            overflow-x: hidden;
            position: relative;
        }
        .terms-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 120px;
            border-radius: 8px;
            line-height: 1.6;
            overflow-x: hidden;
        }

        @media(max-width: 600px){
            .terms-container {
               padding: 30px;
                margin-top: 120px;
            }

        }

        body::before {
            content: '';
            position: absolute;
            top: -10%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(59, 130, 246, 0.2), transparent);
            overflow: hidden;
            border-radius: 50%;
            z-index: 0;
        }
        .terms-heading {
            font-size: 2em;
            color: #222;
            margin-bottom: 20px;
            text-align: center;
        }
        .terms-subheading {
            font-size: 1.5em;
            color: #222;
            margin-top: 30px;
            margin-bottom: 10px;
        }
        .terms-paragraph {
            margin-bottom: 15px;
        }
        .terms-list {
            margin-bottom: 15px;
            padding-left: 20px;
        }
        .terms-list-item {
            margin-bottom: 10px;
        }
        .terms-link {
            color: #007bff;
            text-decoration: none;
        }
        .terms-link:hover {
            text-decoration: underline;
        }
        .terms-updated {
            font-style: italic;
            color: #666;
            text-align: center;
            margin-top: 30px;
        }
    </style>
@endpush

@section('content')
    <div class="terms-container">
        <h1 class="terms-heading">Terms and Conditions</h1>
        <p class="terms-paragraph">These Terms and Conditions govern your use of our website and services. By accessing or using our services, you agree to be bound by these terms.</p>

        <h2 class="terms-subheading">1. Use of Services</h2>
        <p class="terms-paragraph">You agree to use our website and services only for lawful purposes and in accordance with these Terms and Conditions.</p>
        <ul class="terms-list">
            <li class="terms-list-item">You must not use our services to engage in any illegal or unauthorized activities.</li>
            <li class="terms-list-item">You are responsible for maintaining the confidentiality of your account credentials.</li>
            <li class="terms-list-item">We reserve the right to suspend or terminate access to our services for any violation of these terms.</li>
        </ul>

        <h2 class="terms-subheading">2. Intellectual Property</h2>
        <p class="terms-paragraph">All content on our website, including text, graphics, logos, and software, is our property or the property of our licensors and is protected by copyright and other intellectual property laws.</p>
        <ul class="terms-list">
            <li class="terms-list-item">You may not reproduce, distribute, or create derivative works from our content without prior written consent.</li>
            <li class="terms-list-item">You are granted a limited, non-exclusive license to access and use our services for personal, non-commercial purposes.</li>
        </ul>

        <h2 class="terms-subheading">3. Limitation of Liability</h2>
        <p class="terms-paragraph">We are not liable for any damages arising from your use of our website or services, including but not limited to direct, indirect, incidental, or consequential damages.</p>
        <ul class="terms-list">
            <li class="terms-list-item">Our services are provided "as is" without warranties of any kind, express or implied.</li>
            <li class="terms-list-item">We do not guarantee that our services will be uninterrupted or error-free.</li>
        </ul>

        <h2 class="terms-subheading">4. Third-Party Links</h2>
        <p class="terms-paragraph">Our website may contain links to third-party websites. We are not responsible for the content or practices of these sites and encourage you to review their terms.</p>

        <h2 class="terms-subheading">5. Termination</h2>
        <p class="terms-paragraph">We may terminate or suspend your access to our services at any time, with or without cause, and with or without notice, for any reason, including violation of these terms.</p>

        <h2 class="terms-subheading">6. Governing Law</h2>
        <p class="terms-paragraph">These Terms and Conditions are governed by the laws of [Your Jurisdiction]. Any disputes arising from these terms will be resolved in the courts of [Your Jurisdiction].</p>

        <h2 class="terms-subheading">7. Changes to These Terms</h2>
        <p class="terms-paragraph">We may update these Terms and Conditions from time to time. Changes will be posted on this page with an updated "Last Updated" date.</p>

        <p class="terms-paragraph">For any questions about these Terms and Conditions, please contact us at <a href="mailto:info@devlints.com" class="terms-link">info@devlints.com</a>.</p>

        <p class="terms-updated">Last Updated: July 11, 2025</p>
    </div>
@endsection
