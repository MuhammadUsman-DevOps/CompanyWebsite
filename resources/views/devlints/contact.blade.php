@extends('layouts.master')
@section('title', 'Contact Devlints | Get a Free Consultation for Your Project')

@section('meta_description', 'Contact Devlints to discuss your web app, mobile app, SaaS, AI, or eCommerce project. Get a free consultation, project estimate, and a clear plan for delivery.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/contact-us.css') }}">
    <style>
        .contact-container {
            max-width: 800px; /* Limits width to keep cards centered and readable */
            margin: 0 auto;
            padding: 20px;
        }

        .contact-grid {
            display: flex;
            flex-direction: column;
            gap: 24px;
            align-items: center; /* Centers cards horizontally */
            margin-top: 40px;
        }

        .contact-card {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            /* Removed shadow, added thin border */
            border: 1px solid #e2e8f0; 
            text-align: center;
            width: 100%; /* Occupies container width */
            transition: border-color 0.3s ease;
        }

        .contact-card:hover {
            border-color: #007bff; /* Subtle highlight on hover */
        }

        .contact-card h3 {
            margin-bottom: 12px;
            color: #1a202c;
            font-size: 1.6rem;
            font-weight: 700;
        }

        .contact-card p {
            color: #4a5568;
            margin-bottom: 8px;
            font-size: 1.1rem;
        }

        .contact-card a {
            color: #007bff;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.2rem;
        }

        .contact-us-head {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
@endpush

@section("content")
    <section class="contact-section" style="padding: 60px 0;">

        <div class="contact-us-head">
            <h2>Get in Touch to Build Your <span>Dream Project</span> Today!</h2>
            <p>We're here to help you scale. Reach out through any of the channels below.</p>
        </div>

        <div class="contact-container">
            <div class="contact-grid">
                
                <div class="contact-card">
                    <h3>Email Us</h3>
                    <p>Our friendly team is here to help with your inquiries.</p>
                    <a href="mailto:info@devlints.com">info@devlints.com</a>
                </div>

                <div class="contact-card">
                    <h3>Call Us</h3>
                    <p>Mon–Fri from 8am to 5pm (PKT).</p>
                    <a href="tel:+923070861396">+92 307 0861396</a>
                </div>

                <div class="contact-card">
                    <h3>Quick Chat</h3>
                    <p>For faster response times, message us on WhatsApp.</p>
                    <a href="https://wa.me/923070861396" target="_blank">Start WhatsApp Chat</a>
                </div>

            </div>
        </div>

    </section>
@endsection