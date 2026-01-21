@extends('layouts.master')
@section('title', 'Contact Devlints | Get a Free Consultation for Your Project')

@section('meta_description', 'Contact Devlints to discuss your web app, mobile app, SaaS, AI, or eCommerce project. Get a free consultation, project estimate, and a clear plan for delivery.')

@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/contact-us.css') }}">
    <style>
        /* Ensuring the layout feels full without the form */
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 50px;
        }
        .contact-card {
            background: #fff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s ease;
            border: 1px solid #eee;
        }
        .contact-card:hover {
            transform: translateY(-5px);
        }
        .contact-card h3 {
            margin-bottom: 15px;
            color: #333;
            font-size: 1.5rem;
        }
        .contact-card p {
            color: #666;
            line-height: 1.6;
        }
        .contact-card a {
            color: #007bff; /* Adjust to your brand color */
            text-decoration: none;
            font-weight: bold;
            font-size: 1.1rem;
        }
        .contact-us-head {
            max-width: 800px;
            margin: 0 auto 40px auto;
            text-align: center;
        }
    </style>
@endpush

@section("content")
    <section class="contact-section" style="padding: 80px 0;">

        <div class="contact-us-head">
            <h2>Get in Touch to Build Your <span>Dream Project</span> Today!</h2>
            <p>Ready to start your next digital venture? We're here to help you scale. Reach out through any of the channels below and our team will get back to you within 24 hours.</p>
        </div>

        <div class="container">
            <div class="contact-grid">
                
                <div class="contact-card">
                    <div class="icon-wrapper">
                        </div>
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

            <div style="margin-top: 80px; text-align: center;">
                <hr style="border: 0; border-top: 1px solid #eee; margin-bottom: 40px;">
                <h3>Serving Clients Globally</h3>
                <p style="color: #666;">United States • United Kingdom • Europe • Middle East • Pakistan</p>
            </div>
        </div>

    </section>
@endsection