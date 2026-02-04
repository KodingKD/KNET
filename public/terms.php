<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Terms & Policies";
include INCLUDES_PATH . '/header.php';
?>

<!-- Page Header -->
<section class="py-20 px-4 md:px-8 bg-primary/5 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black mb-6">Terms & Policies</h1>
        <p class="text-xl text-slate-400">Important information regarding your service and our commitment to you.</p>
    </div>
</section>

<section class="py-24 px-4 md:px-8">
    <div class="max-w-4xl mx-auto">

        <div class="space-y-16" x-data="{ tab: 'tos' }">
            <!-- Tab Navigation -->
            <div class="flex flex-wrap gap-4 border-b border-white/10 pb-4 justify-center md:justify-start">
                <button @click="tab = 'tos'"
                    :class="{ 'text-primary border-b-2 border-primary': tab === 'tos', 'text-slate-400 hover:text-white': tab !== 'tos' }"
                    class="px-6 py-2 font-bold transition-all">Terms of Service</button>
                <button @click="tab = 'privacy'"
                    :class="{ 'text-primary border-b-2 border-primary': tab === 'privacy', 'text-slate-400 hover:text-white': tab !== 'privacy' }"
                    class="px-6 py-2 font-bold transition-all">Privacy Policy</button>
                <button @click="tab = 'aup'"
                    :class="{ 'text-primary border-b-2 border-primary': tab === 'aup', 'text-slate-400 hover:text-white': tab !== 'aup' }"
                    class="px-6 py-2 font-bold transition-all">Acceptable Use</button>
            </div>

            <!-- TOS Content -->
            <div x-show="tab === 'tos'" class="prose prose-invert prose-slate max-w-none">
                <h2 class="text-3xl font-black mb-8">Terms of Service</h2>
                <p class="text-slate-400">Last updated: February 2024</p>
                <div class="space-y-6 text-slate-300 leading-relaxed">
                    <p>Welcome to KNET NETWORK SOLUTIONS LIMITED. By using our services, you agree to comply with and be
                        bound by the following terms and conditions.</p>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">1. Service Provision</h4>
                    <p>KNET agrees to provide internet services as selected in your service request. We aim for 99.9%
                        uptime but do not guarantee uninterrupted service due to maintenance or external network
                        factors.</p>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">2. Installation and Equipment</h4>
                    <p>Standard installation fees apply unless otherwise stated. Any equipment provided by KNET
                        (routers, receivers, etc.) remains the property of KNET unless explicitly purchased by the
                        customer.</p>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">3. Payments and Billing</h4>
                    <p>Services are strictly prepaid. Payment must be made at the beginning of each billing cycle.
                        Failure to pay will result in automatic service suspension.</p>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">4. Limitation of Liability</h4>
                    <p>KNET shall not be liable for any indirect, incidental, or consequential damages resulting from
                        the use or inability to use our services.</p>
                </div>
            </div>

            <!-- Privacy Content -->
            <div x-show="tab === 'privacy'" class="prose prose-invert prose-slate max-w-none">
                <h2 class="text-3xl font-black mb-8">Privacy Policy</h2>
                <div class="space-y-6 text-slate-300 leading-relaxed">
                    <p>Your privacy is important to us. This policy explains how we collect, use, and protect your
                        personal information.</p>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">Information Collection</h4>
                    <p>We collect information such as your name, phone number, email address, and physical location for
                        service delivery and billing purposes.</p>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">Data Usage</h4>
                    <p>We do not share your personal data with third parties except as required by law or to facilitate
                        payments (e.g., M-Pesa processing).</p>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">Data Security</h4>
                    <p>We implement industry-standard security measures to protect your information from unauthorized
                        access.</p>
                </div>
            </div>

            <!-- AUP Content -->
            <div x-show="tab === 'aup'" class="prose prose-invert prose-slate max-w-none">
                <h2 class="text-3xl font-black mb-8">Acceptable Use Policy</h2>
                <div class="space-y-6 text-slate-300 leading-relaxed">
                    <p>This policy outlines the prohibited uses of KNET internet services to ensure a safe and reliable
                        experience for all users.</p>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">Prohibited Activities</h4>
                    <ul class="list-disc pl-6 space-y-2">
                        <li>Illegal content distribution or access.</li>
                        <li>Sending of bulk unsolicited emails (Spam).</li>
                        <li>Attempting to breach network security or hacking.</li>
                        <li>Reselling bandwidth without explicit written consent from KNET.</li>
                        <li>Activities that interfere with the service of other customers.</li>
                    </ul>

                    <h4 class="text-white font-bold text-xl mt-8 mb-4">Enforcement</h4>
                    <p>KNET reserves the right to terminate service for any user found in violation of these policies
                        without notice.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>