@extends('layouts.master')
@push('styles')
    <link rel="stylesheet" href="{{ asset('static/css/contact-us.css') }}">
@endpush

@section("content")
    <section class="contact-section">

        <div class="contact-us-head">

            <h2>Get in Touch to Build Your <span>Dream Project</span> Today!</h2>
            <p>Looking to build a professional website for your business? Whether you’re launching a new project or upgrading your current site, our experienced team is ready to help you achieve your goals. Let’s turn your vision into a fully functional, high-performing website.</p>


        </div>

        <div class="container">
            <!-- Left: Contact Form -->
            <div class="form-column">

                @if (session('success'))
                    <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 10px; border: 1px solid #c3e6cb; border-radius: 5px;">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST"  action="/contact">
                    @csrf

                    <div class="row">
                        <div>
                            <label>First name</label>
                            <input type="text" name="first_name" placeholder="First name" required>
                        </div>
                        <div>
                            <label>Last name</label>
                            <input type="text" name="last_name" placeholder="Last name" required>
                        </div>
                    </div>

                    <label>Email</label>
                    <input type="email" name="email" placeholder="you@company.com" required>

                    <label>Phone number</label>
                    <input type="tel" name="phone" placeholder="+1 (555) 000-0000" required>

                    <label>Message</label>
                    <textarea name="message" placeholder="Leave us a message..." required></textarea>

                    <button type="submit">Send message</button>
                </form>

            </div>

            <!-- Right: Info Section -->
            <div class="info-column">
                <h3>Chat with us</h3>

                <p><a href="#">example@gmail.com</a></p>
                <p><a href="https://wa.me/01234567899">01234567899</a></p>

                <h3>Call us</h3>
                <p>Call our team Mon–Fri from 8am to 5pm.</p>
                <p><a href="tel:+1555000000">+1 (555) 000–0000</a></p>

                <h3>Visit us</h3>
                <p><a href="#">100 Smith Street, Collingwood VIC 3066</a></p>
            </div>
        </div>

    </section>

@endsection
