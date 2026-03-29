@extends('layouts.master')

@push('styles')
<style>
@import url('https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=DM+Sans:wght@300;400;500;600&display=swap');

:root {
    --blue: #3b82f6;
    --blue-light: rgba(59,130,246,0.12);
    --blue-border: rgba(59,130,246,0.2);
    --text: #1a202c;
    --muted: #64748b;
    --faint: #f1f5f9;
    --border: #e2e8f0;
    --white: #ffffff;
}

* { box-sizing: border-box; }

body {
    background: linear-gradient(135deg, #e0f2fe 0%, #f5f7fa 100%);
    overflow-x: hidden;
    position: relative;
    font-family: 'DM Sans', sans-serif;
    color: var(--text);
}

body::before {
    content: '';
    position: absolute;
    top: -10%; right: -10%;
    width: 600px; height: 600px;
    background: radial-gradient(circle, rgba(59,130,246,0.18), transparent);
    border-radius: 50%;
    pointer-events: none;
}

/* ─── PAGE WRAPPER ─── */
.pp-wrap {
    max-width: 1200px;
    margin: 0 auto;
    padding: 120px 40px 100px;
}

@media (max-width: 600px) {
    .pp-wrap { padding: 100px 20px 60px; margin-top: 20px; }
}

/* ─── HERO HEADER ─── */
.pp-hero {
    text-align: center;
    margin-bottom: 64px;
}

.pp-hero__chip {
    display: inline-flex;
    align-items: center;
    gap: 7px;
    font-size: 11px;
    font-weight: 600;
    letter-spacing: 2.5px;
    text-transform: uppercase;
    color: var(--blue);
    border: 1px solid var(--blue-border);
    background: var(--blue-light);
    border-radius: 100px;
    padding: 5px 14px;
    margin-bottom: 24px;
}

.pp-hero__chip::before {
    content: '';
    width: 6px; height: 6px;
    border-radius: 50%;
    background: var(--blue);
    opacity: 0.7;
}

.pp-hero h1 {
    font-family: 'Onest', 'Sans-serif', sans-serif;
    font-size: clamp(36px, 5vw, 58px);
    font-weight: 400;
    letter-spacing: -1px;
    color: var(--text);
    line-height: 1.1;
    margin: 0 0 14px;
}

.pp-hero h1 em {
    font-style: italic;
    color: var(--blue);
}

.pp-hero__meta {
    font-size: 13px;
    color: var(--muted);
    font-style: italic;
}

/* ─── SUMMARY CARD ─── */
.pp-summary {
    background: var(--white);
    border: 1px solid var(--blue-border);
    border-radius: 16px;
    padding: 32px 36px;
    margin-bottom: 48px;
    box-shadow: 0 4px 24px rgba(59,130,246,0.07);
    position: relative;
    overflow: hidden;
}

.pp-summary::before {
    content: '';
    position: absolute;
    left: 0; top: 0; bottom: 0;
    width: 4px;
    background: linear-gradient(180deg, var(--blue), #60a5fa);
    border-radius: 4px 0 0 4px;
}

.pp-summary__title {
    font-family: 'Onest', 'Sans-serif', sans-serif;
    font-size: 20px;
    font-weight: 400;
    color: var(--text);
    margin: 0 0 20px;
    display: flex;
    align-items: center;
    gap: 10px;
}

.pp-summary__title svg { color: var(--blue); flex-shrink: 0; }

.pp-summary__grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 14px;
}

.pp-summary__item {
    display: flex;
    align-items: flex-start;
    gap: 10px;
    font-size: 13.5px;
    color: var(--muted);
    line-height: 1.5;
}

.pp-summary__item::before {
    content: '✓';
    width: 20px; height: 20px;
    border-radius: 50%;
    background: rgba(59,130,246,0.1);
    color: var(--blue);
    font-size: 11px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 1px;
}

/* ─── LAYOUT: sidebar + content ─── */
.pp-layout {
    display: grid;
    grid-template-columns: 240px 1fr;
    gap: 48px;
    align-items: start;
}

@media (max-width: 900px) {
    .pp-layout { grid-template-columns: 1fr; }
    .pp-toc { display: none; }
}

/* ─── TOC SIDEBAR ─── */
.pp-toc {
    position: sticky;
    top: 100px;
}

.pp-toc__label {
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: var(--muted);
    margin-bottom: 14px;
    padding-bottom: 10px;
    border-bottom: 1px solid var(--border);
}

.pp-toc__list {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 2px;
}

.pp-toc__list a {
    display: block;
    font-size: 13px;
    color: var(--muted);
    text-decoration: none;
    padding: 6px 10px;
    border-radius: 7px;
    border-left: 2px solid transparent;
    transition: all 0.2s ease;
    line-height: 1.4;
}

.pp-toc__list a:hover,
.pp-toc__list a.active {
    color: var(--blue);
    background: var(--blue-light);
    border-left-color: var(--blue);
}

/* ─── CONTENT ─── */
.pp-content {}

/* ── Section block ── */
.pp-section {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 32px 36px;
    margin-bottom: 20px;
    transition: border-color 0.25s ease, box-shadow 0.25s ease;
    scroll-margin-top: 110px;
}

.pp-section:hover {
    border-color: var(--blue-border);
    box-shadow: 0 6px 28px rgba(59,130,246,0.06);
}

.pp-section__head {
    display: flex;
    align-items: center;
    gap: 14px;
    margin-bottom: 18px;
    cursor: pointer;
    user-select: none;
}

.pp-section__num {
    width: 30px; height: 30px;
    border-radius: 8px;
    background: var(--blue-light);
    border: 1px solid var(--blue-border);
    color: var(--blue);
    font-size: 12px;
    font-weight: 700;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    font-family: 'DM Sans', sans-serif;
}

.pp-section h2 {
    font-family: 'Onest', 'Sans-serif', sans-serif;
    font-size: 21px;
    font-weight: 400;
    color: var(--text);
    margin: 0;
    letter-spacing: -0.3px;
    flex: 1;
}

.pp-section__chevron {
    color: var(--muted);
    transition: transform 0.25s ease, color 0.2s;
    flex-shrink: 0;
}

.pp-section.open .pp-section__chevron {
    transform: rotate(180deg);
    color: var(--blue);
}

.pp-section__body {
    display: none;
    border-top: 1px solid var(--border);
    padding-top: 18px;
    margin-top: 0;
    animation: slideDown 0.28s ease;
}

.pp-section.open .pp-section__body { display: block; }

@keyframes slideDown {
    from { opacity: 0; transform: translateY(-6px); }
    to   { opacity: 1; transform: translateY(0); }
}

.pp-section__body p {
    font-size: 14.5px;
    color: #374151;
    line-height: 1.8;
    margin: 0 0 14px;
}
.pp-section__body p:last-child { margin-bottom: 0; }

.pp-section__body ul {
    padding-left: 0;
    list-style: none;
    margin: 0 0 14px;
    display: flex;
    flex-direction: column;
    gap: 9px;
}

.pp-section__body ul li {
    font-size: 14px;
    color: #374151;
    line-height: 1.7;
    padding-left: 22px;
    position: relative;
}

.pp-section__body ul li::before {
    content: '→';
    position: absolute;
    left: 0;
    color: var(--blue);
    font-size: 12px;
    top: 2px;
}

.pp-section__body strong { color: var(--text); font-weight: 600; }

.pp-section__body a {
    color: var(--blue);
    text-decoration: none;
    border-bottom: 1px solid var(--blue-border);
    transition: border-color 0.2s;
}
.pp-section__body a:hover { border-color: var(--blue); }

/* highlight box inside sections */
.pp-highlight {
    background: var(--blue-light);
    border: 1px solid var(--blue-border);
    border-radius: 10px;
    padding: 14px 18px;
    margin-bottom: 14px;
}
.pp-highlight p { color: var(--blue) !important; font-weight: 500; margin: 0 !important; }

/* ─── FOOTER NOTE ─── */
.pp-foot {
    background: var(--white);
    border: 1px solid var(--border);
    border-radius: 16px;
    padding: 28px 36px;
    margin-top: 8px;
    display: flex;
    align-items: center;
    gap: 16px;
}

.pp-foot__icon {
    width: 40px; height: 40px;
    border-radius: 10px;
    background: var(--blue-light);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: var(--blue);
}

.pp-foot__text {
    font-size: 13.5px;
    color: var(--muted);
    line-height: 1.6;
}
.pp-foot__text strong { color: var(--text); }
.pp-foot__text a { color: var(--blue); text-decoration: none; }
.pp-foot__text a:hover { text-decoration: underline; }
</style>
@endpush

@section('content')
<div class="pp-wrap">

    {{-- HERO --}}
    <div class="pp-hero">
        <div class="pp-hero__chip">Legal</div>
        <h1>Privacy <em>Policy</em></h1>
        <p class="pp-hero__meta">Last Updated: July 11, 2025</p>
    </div>

    {{-- SUMMARY --}}
    <div class="pp-summary">
        <div class="pp-summary__title">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                <path d="M9 1.5L11.25 6.75H16.5L12.375 10.125L13.875 15.375L9 12.375L4.125 15.375L5.625 10.125L1.5 6.75H6.75L9 1.5Z" fill="currentColor"/>
            </svg>
            Privacy at a Glance
        </div>
        <div class="pp-summary__grid">
            <div class="pp-summary__item">We never sell your data to anyone.</div>
            <div class="pp-summary__item">Secure OAuth — we never see your passwords.</div>
            <div class="pp-summary__item">Data is processed temporarily, then deleted.</div>
            <div class="pp-summary__item">No AI training without your explicit opt-in.</div>
            <div class="pp-summary__item">You can access, export, or delete your data anytime.</div>
            <div class="pp-summary__item">Compliant with GDPR, CCPA & FTC regulations.</div>
        </div>
    </div>

    {{-- LAYOUT --}}
    <div class="pp-layout">

        {{-- TOC --}}
        <aside class="pp-toc" id="tocSidebar">
            <div class="pp-toc__label">Contents</div>
            <ul class="pp-toc__list" id="tocList">
                <li><a href="#s1">Introduction</a></li>
                <li><a href="#s2">Data We Collect</a></li>
                <li><a href="#s3">How We Use Your Data</a></li>
                <li><a href="#s4">OAuth & Third-Party Access</a></li>
                <li><a href="#s5">AI Training & Consent</a></li>
                <li><a href="#s6">Storage & Retention</a></li>
                <li><a href="#s7">Data Sharing</a></li>
                <li><a href="#s8">Security Measures</a></li>
                <li><a href="#s9">Your Rights (GDPR)</a></li>
                <li><a href="#s10">CCPA — California</a></li>
                <li><a href="#s11">Contact Us</a></li>
            </ul>
        </aside>

        {{-- CONTENT --}}
        <div class="pp-content" id="ppContent">

            {{-- 1 --}}
            <div class="pp-section open" id="s1">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">1</span>
                    <h2>Introduction</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>At Devlints, your privacy and data security are our highest priorities. This Privacy Policy explains how we collect, use, store, and protect your information when you use our website and services, including any connected third-party integrations such as Reddit, Gmail, Google Drive, OneDrive, Outlook, and others.</p>
                    <p>We comply with applicable global privacy laws including the <strong>GDPR</strong>, <strong>CCPA</strong>, and <strong>FTC Regulations</strong>. By using our services, you agree to the practices described in this policy.</p>
                </div>
            </div>

            {{-- 2 --}}
            <div class="pp-section open" id="s2">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">2</span>
                    <h2>Data We Collect</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>We collect the minimum amount of data required to operate our services.</p>
                    <p><strong>A. Information You Provide</strong></p>
                    <ul>
                        <li><strong>Name & Email:</strong> When creating an account or registering for a service.</li>
                        <li><strong>Support communication:</strong> When you contact us for help or inquiries.</li>
                    </ul>
                    <p><strong>B. OAuth-Authorized Data from Connected Services</strong></p>
                    <p>Depending on the service you connect (Gmail, Google Drive, Reddit, OneDrive, Outlook), we may temporarily access:</p>
                    <ul>
                        <li>Reddit posts, comments, and messages (for filtering or deleting).</li>
                        <li>Gmail emails grouped by sender or category.</li>
                        <li>Google Drive / OneDrive file metadata (name, size, type, timestamps).</li>
                        <li>Outlook emails (subject, sender, date, size).</li>
                    </ul>
                    <div class="pp-highlight"><p>We do NOT store the content of your emails, files, or Reddit messages unless required for processing — and only temporarily.</p></div>
                    <p><strong>C. Device & Usage Information</strong></p>
                    <ul>
                        <li>IP address and browser type.</li>
                        <li>Pages visited and actions taken on our platform.</li>
                    </ul>
                </div>
            </div>

            {{-- 3 --}}
            <div class="pp-section open" id="s3">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">3</span>
                    <h2>How We Use Your Data</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>Your data is used strictly for the following purposes:</p>
                    <ul>
                        <li>Performing cleaning or management actions you initiate.</li>
                        <li>Improving platform performance and accuracy.</li>
                        <li>Account management and customer communication.</li>
                        <li>Security, fraud detection, and legal compliance.</li>
                        <li>Analyzing website usage to enhance user experience (anonymous metrics only).</li>
                    </ul>
                </div>
            </div>

            {{-- 4 --}}
            <div class="pp-section open" id="s4">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">4</span>
                    <h2>OAuth Permissions & Third-Party Access</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>Devlints uses official OAuth systems from Google, Microsoft, Reddit, and others. This means:</p>
                    <ul>
                        <li>We never see or store your passwords.</li>
                        <li>You control exactly what access you grant us.</li>
                        <li>You may revoke access at any time from your account dashboard on the provider's website.</li>
                    </ul>
                    <p>Our website may also contain links to third-party sites. We are not responsible for their privacy practices and encourage you to review their respective policies.</p>
                </div>
            </div>

            {{-- 5 --}}
            <div class="pp-section open" id="s5">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">5</span>
                    <h2>AI Training & User Consent</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <div class="pp-highlight"><p>We do not use any part of your personal data, email content, files, or activity to train AI models without your explicit opt-in.</p></div>
                    <p>Your default setting is: <strong>No AI usage.</strong> You will always be asked before any data is used for AI-related purposes, and you may opt out at any time.</p>
                </div>
            </div>

            {{-- 6 --}}
            <div class="pp-section open" id="s6">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">6</span>
                    <h2>Data Storage & Retention</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>We store the minimum required user information (e.g., email address, account preferences). Any data fetched from your connected services is:</p>
                    <ul>
                        <li>Processed temporarily — only while performing the action you requested.</li>
                        <li>Deleted automatically after task completion.</li>
                        <li>Never used for purposes other than what you authorized.</li>
                    </ul>
                </div>
            </div>

            {{-- 7 --}}
            <div class="pp-section open" id="s7">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">7</span>
                    <h2>Data Sharing</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <div class="pp-highlight"><p>We do not sell your personal data. Period.</p></div>
                    <p>We only share data with the following trusted categories of partners, all of whom follow strict confidentiality and security requirements:</p>
                    <ul>
                        <li>Cloud hosting and infrastructure providers.</li>
                        <li>Analytics tools (anonymous usage metrics only).</li>
                        <li>Customer support tools.</li>
                        <li>Legal or regulatory bodies when required by law.</li>
                    </ul>
                </div>
            </div>

            {{-- 8 --}}
            <div class="pp-section open" id="s8">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">8</span>
                    <h2>Data Security Measures</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>We implement industry-standard security measures to protect your information:</p>
                    <ul>
                        <li>Encryption in transit and at rest.</li>
                        <li>OAuth-secured authentication — no password storage.</li>
                        <li>Role-based access control for internal systems.</li>
                        <li>Regular security audits and vulnerability assessments.</li>
                    </ul>
                    <p>However, no method of transmission over the internet is completely secure. We continuously work to improve our security practices.</p>
                </div>
            </div>

            {{-- 9 --}}
            <div class="pp-section open" id="s9">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">9</span>
                    <h2>Your Rights (GDPR & Global Standards)</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>You have the following rights regarding your personal data:</p>
                    <ul>
                        <li><strong>Access</strong> — Request a copy of the data we hold about you.</li>
                        <li><strong>Deletion</strong> — Request deletion of your account and all associated data.</li>
                        <li><strong>Correction</strong> — Ask us to correct inaccurate information.</li>
                        <li><strong>Limitation</strong> — Limit or object to how we process your data.</li>
                        <li><strong>Portability</strong> — Export your data in a machine-readable format.</li>
                        <li><strong>Opt-out</strong> — Opt out of marketing communications at any time.</li>
                    </ul>
                    <p>To exercise any of these rights, please contact us at <a href="mailto:info@devlints.com">info@devlints.com</a>.</p>
                </div>
            </div>

            {{-- 10 --}}
            <div class="pp-section open" id="s10">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">10</span>
                    <h2>CCPA Notice — California Residents</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>Under the California Consumer Privacy Act (CCPA), California residents have additional rights:</p>
                    <ul>
                        <li>Request to know what personal information we have collected about you.</li>
                        <li>Request deletion of your personal information.</li>
                        <li>Opt-out of the sale of personal information — <strong>we do not sell data.</strong></li>
                        <li>Exercise your rights without discrimination or penalty.</li>
                    </ul>
                    <p>To submit a CCPA request, contact us at <a href="mailto:info@devlints.com">info@devlints.com</a>.</p>
                </div>
            </div>

            {{-- 11 --}}
            <div class="pp-section open" id="s11">
                <div class="pp-section__head" onclick="toggleSection(this)">
                    <span class="pp-section__num">11</span>
                    <h2>Changes to This Policy</h2>
                    <svg class="pp-section__chevron" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path d="M4 6L8 10L12 6" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-section__body">
                    <p>We may update this Privacy Policy from time to time to reflect changes in our practices or applicable law. Any updates will be posted on this page with a revised "Last Updated" date. We encourage you to review this policy periodically.</p>
                </div>
            </div>

            {{-- Contact footer --}}
            <div class="pp-foot">
                <div class="pp-foot__icon">
                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                        <path d="M2.25 4.5H15.75V13.5C15.75 13.9142 15.4142 14.25 15 14.25H3C2.58579 14.25 2.25 13.9142 2.25 13.5V4.5Z" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/>
                        <path d="M2.25 4.5L9 10.5L15.75 4.5" stroke="currentColor" stroke-width="1.4" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="pp-foot__text">
                    <strong>Questions about your privacy?</strong> Reach us at
                    <a href="mailto:info@devlints.com">info@devlints.com</a> — we typically respond within 1–2 business days.
                </div>
            </div>

        </div>{{-- /pp-content --}}
    </div>{{-- /pp-layout --}}

</div>

<script>
/* ── Toggle accordion sections ── */
function toggleSection(head) {
    const section = head.closest('.pp-section');
    section.classList.toggle('open');
}

/* ── Active TOC link on scroll ── */
const sections = document.querySelectorAll('.pp-section[id]');
const tocLinks = document.querySelectorAll('#tocList a');

const scrollObs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
        if (e.isIntersecting) {
            tocLinks.forEach(a => a.classList.remove('active'));
            const link = document.querySelector(`#tocList a[href="#${e.target.id}"]`);
            if (link) link.classList.add('active');
        }
    });
}, { rootMargin: '-30% 0px -60% 0px' });

sections.forEach(s => scrollObs.observe(s));

/* ── Smooth scroll from TOC ── */
tocLinks.forEach(a => {
    a.addEventListener('click', e => {
        e.preventDefault();
        const target = document.querySelector(a.getAttribute('href'));
        if (target) {
            target.classList.add('open');
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});
</script>
@endsection