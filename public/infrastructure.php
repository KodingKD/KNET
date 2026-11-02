<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Carrier & Telecom Infrastructure Services";
$page_description = "KNET Network Solutions provides subcontracting telecom field engineering, Outside Plant (OSP) maintenance, emergency fiber restoration, and last-mile FTTH turn-ups across Western Kenya & Nairobi.";
$page_keywords = "Telecom Subcontractor Kenya, Fiber Splicing Subcontractor, Outside Plant OSP Kenya, Safaricom Subcontractor, FTTH Rollout Contractor, Emergency Fiber Cut Repair Western Kenya, Telecom Rigging Kakamega Vihiga Nairobi";
include INCLUDES_PATH . '/header.php';
?>

<!-- Hero Section -->
<section class="relative py-24 px-4 md:px-8 overflow-hidden bg-gradient-to-b from-primary/10 via-transparent to-transparent">
    <div class="max-w-7xl mx-auto text-center relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs uppercase font-extrabold tracking-widest mb-6">
            <i data-lucide="shield-check" class="w-4 h-4"></i> Carrier & Infrastructure Field Engineering
        </div>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-8 leading-tight tracking-tight">
            Your Trusted Field Execution Partner in <span class="text-primary">Western Kenya</span> & Beyond.
        </h1>
        <p class="text-xl md:text-2xl text-slate-300 max-w-4xl mx-auto mb-10 leading-relaxed font-light">
            We partner with Tier-1 carriers, national prime contractors, and enterprise operators to deliver rapid-response 
            Outside Plant (OSP) maintenance, high-volume FTTH subscriber turn-ups, and emergency fiber restoration.
        </p>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="#partner-form" class="bg-primary hover:bg-primary-hover text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all shadow-xl shadow-primary/20 btn-glow">
                <i data-lucide="handshake"></i> Partner With Our Field Team
            </a>
            <?php renderWhatsAppButton("Inquire on WhatsApp", "md", "Hello KNET Engineering Team, I would like to inquire about your telecom subcontracting and field services."); ?>
            <a href="<?php echo format_tel_link(SITE_PHONE); ?>" class="bg-white/5 hover:bg-white/10 text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 transition-all border border-white/10">
                <i data-lucide="phone"></i> Call Ops Direct: <?php echo SITE_PHONE; ?>
            </a>
        </div>
    </div>
</section>

<!-- The Regional Advantage (Why Subcontract With KNET) -->
<section class="py-20 px-4 md:px-8 border-t border-b border-white/5 bg-card-bg/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-5xl font-black mb-4">The Regional Execution Advantage</h2>
            <p class="text-lg text-slate-400">
                Eliminate the costly logistics, travel delays, and regional friction of mobilizing field teams from Nairobi. 
                We are on the ground with dedicated technicians, calibration equipment, and utility vehicles.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-card-bg p-8 rounded-3xl border border-white/5 hover:border-primary/50 transition-all group">
                <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="clock-alert" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-black mb-2 text-white">Sub-2-Hour MTTR</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Rapid on-call emergency response to locate, dig, and splice fiber cuts across Vihiga, Kakamega, and border corridors.
                </p>
            </div>

            <div class="bg-card-bg p-8 rounded-3xl border border-white/5 hover:border-primary/50 transition-all group">
                <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center text-accent mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="map-pinned" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-black mb-2 text-white">Zero Mobilization Lag</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Certified technicians permanently stationed in the Western region, eliminating 6-to-8 hour road transit delays from Nairobi.
                </p>
            </div>

            <div class="bg-card-bg p-8 rounded-3xl border border-white/5 hover:border-primary/50 transition-all group">
                <div class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="cpu" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-black mb-2 text-white">Precision Tooling</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Core-alignment fusion splicers, calibrated OTDRs with launch fibers, and optical power meters for audit-ready reporting.
                </p>
            </div>

            <div class="bg-card-bg p-8 rounded-3xl border border-white/5 hover:border-primary/50 transition-all group">
                <div class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center text-accent mb-6 group-hover:scale-110 transition-transform">
                    <i data-lucide="shield-check" class="w-7 h-7"></i>
                </div>
                <h3 class="text-2xl font-black mb-2 text-white">EHS & Site Safety</h3>
                <p class="text-slate-400 text-sm leading-relaxed">
                    Rigorous occupational safety compliance, certified working-at-heights equipment, full PPE, and road traffic safety demarcation.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Subcontracting Work Packages -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-20">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/10 border border-accent/20 text-accent text-xs font-bold uppercase tracking-wider mb-4">
                Full-Scope Work Packages
            </div>
            <h2 class="text-3xl md:text-5xl font-black mb-6">Subcontracting Capabilities</h2>
            <p class="text-lg text-slate-400">
                Flexible engagement models for national prime contractors and telco operators. Available on per-drop, per-restoration, or fixed SLA retainer scopes.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Package 1: Last Mile FTTH -->
            <div class="bg-card-bg border border-white/5 p-8 md:p-10 rounded-3xl relative overflow-hidden flex flex-col justify-between">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full blur-2xl -z-0"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0">
                            <i data-lucide="home" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-white">Last-Mile FTTH / FTTB Drops & Turn-Ups</h3>
                            <span class="text-xs uppercase font-bold text-accent tracking-wider">High-Velocity Subscriber Activation</span>
                        </div>
                    </div>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        End-to-end subscriber connectivity for residential estates and commercial buildings. We handle everything from the distribution FAT box to the customer indoor ONT router.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Aerial and ducted drop cable installation (1-core to 4-core G.657.A2 fiber).</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Precision fusion splicing at FAT closure, optical power verification, and loss budget check.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Neat indoor cabling, rosette/faceplate mounting, and ONT Wi-Fi configuration.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Comprehensive customer digital sign-off and completion photo report per job.</span>
                        </li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-white/5 relative z-10 flex items-center justify-between">
                    <span class="text-xs text-slate-500 uppercase font-bold tracking-wider">Per-Drop or Daily Batch Model</span>
                    <a href="#partner-form" class="text-primary hover:text-accent font-bold text-sm flex items-center gap-1.5 transition-colors">
                        Book Crew Capacity <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Package 2: Emergency Fiber Restoration -->
            <div class="bg-card-bg border border-white/5 p-8 md:p-10 rounded-3xl relative overflow-hidden flex flex-col justify-between">
                <div class="absolute top-0 right-0 w-32 h-32 bg-accent/10 rounded-full blur-2xl -z-0"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent shrink-0">
                            <i data-lucide="zap" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-white">24/7 SLA Emergency Fiber Restoration</h3>
                            <span class="text-xs uppercase font-bold text-primary tracking-wider">Rapid Outage Resolution</span>
                        </div>
                    </div>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        Round-the-clock emergency standby teams dedicated to fixing fiber breaks caused by road works, vandalism, fallen trees, or vehicular accidents across Western Kenya.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Immediate technician dispatch upon incident ticket trigger (under 45 min response).</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>OTDR fault localization, launch cable trace diagnostics, and pinpoint damage location.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Joint closure prep, in-line or dome splice closure replacement, and core alignment.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Bi-directional OTDR test sheets and proof of restoration sent directly to NOC.</span>
                        </li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-white/5 relative z-10 flex items-center justify-between">
                    <span class="text-xs text-slate-500 uppercase font-bold tracking-wider">On-Call or Monthly SLA Retainer</span>
                    <a href="#partner-form" class="text-primary hover:text-accent font-bold text-sm flex items-center gap-1.5 transition-colors">
                        Set Up SLA Agreement <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Package 3: Outside Plant (OSP) & Civil Coordination -->
            <div class="bg-card-bg border border-white/5 p-8 md:p-10 rounded-3xl relative overflow-hidden flex flex-col justify-between">
                <div class="absolute top-0 right-0 w-32 h-32 bg-primary/10 rounded-full blur-2xl -z-0"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary shrink-0">
                            <i data-lucide="shovel" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-white">Outside Plant (OSP) & Civil Deployment</h3>
                            <span class="text-xs uppercase font-bold text-accent tracking-wider">Ground Infrastructure & Pole Routes</span>
                        </div>
                    </div>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        On-demand execution of ground works and aerial routes. We mobilize seasoned regional civil gangs to handle manual trenching, ducting, and pole installation under rigorous supervisor oversight.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Manual trenching, micro-trenching, HDPE duct laying, warning tape, and backfilling.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Treated wooden and concrete pole planting with stays, brackets, and tensioners.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Aerial fiber stringing (ADSS and Figure-8) adhering to KPLC clearance regulations.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Route facilitation and local community coordination along project corridors.</span>
                        </li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-white/5 relative z-10 flex items-center justify-between">
                    <span class="text-xs text-slate-500 uppercase font-bold tracking-wider">Turnkey Linear Metre / Kilometer Rate</span>
                    <a href="#partner-form" class="text-primary hover:text-accent font-bold text-sm flex items-center gap-1.5 transition-colors">
                        Request Route Pricing <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>

            <!-- Package 4: Enterprise Wireless & Rigging -->
            <div class="bg-card-bg border border-white/5 p-8 md:p-10 rounded-3xl relative overflow-hidden flex flex-col justify-between">
                <div class="absolute top-0 right-0 w-32 h-32 bg-accent/10 rounded-full blur-2xl -z-0"></div>
                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent shrink-0">
                            <i data-lucide="radio" class="w-6 h-6"></i>
                        </div>
                        <div>
                            <h3 class="text-2xl font-black text-white">Fixed Wireless, Microwave & Starlink Rigging</h3>
                            <span class="text-xs uppercase font-bold text-primary tracking-wider">Tower Rigging & Remote Enterprise</span>
                        </div>
                    </div>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        Experienced tower climbers and rigging technicians for line-of-sight microwave links, base station antenna maintenance, and enterprise satellite integration across off-grid sites.
                    </p>
                    <ul class="space-y-3 mb-8">
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Mast and tower rigging for Cambium, MikroTik, Ubiquiti, and Siklu millimeter-wave radios.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Commercial Starlink high-performance dish mounting, roof flashing, and lightning surge protection.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Remote corporate deployments for tea factories, safari lodges, county offices, and NGOs.</span>
                        </li>
                        <li class="flex items-start gap-3 text-slate-300 text-sm">
                            <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0 mt-0.5"></i>
                            <span>Complete power integration: Solar DC setups, PoE switches, and battery backups.</span>
                        </li>
                    </ul>
                </div>
                <div class="pt-6 border-t border-white/5 relative z-10 flex items-center justify-between">
                    <span class="text-xs text-slate-500 uppercase font-bold tracking-wider">Per-Site / Turnkey Contract</span>
                    <a href="#partner-form" class="text-primary hover:text-accent font-bold text-sm flex items-center gap-1.5 transition-colors">
                        Engage Rigging Team <i data-lucide="arrow-right" class="w-4 h-4"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Technical Standards & Tooling -->
<section class="py-20 px-4 md:px-8 bg-card-bg/50 border-t border-b border-white/5">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 items-center">
            <div>
                <span class="text-primary uppercase font-bold text-xs tracking-widest block mb-2">Quality & Precision</span>
                <h2 class="text-3xl md:text-4xl font-black mb-6">Our Test & Measurement Equipment</h2>
                <p class="text-slate-400 leading-relaxed mb-6">
                    We do not guess on fiber optics. Every splice is verified, every drop is measured for dB loss, and every restoration includes comprehensive OTDR trace files delivered to your NOC.
                </p>
                <div class="flex items-center gap-3 text-white font-bold text-sm">
                    <i data-lucide="check" class="text-accent"></i> All gear calibrated & regularly serviced.
                </div>
            </div>

            <div class="lg:col-span-2 grid grid-cols-1 sm:grid-cols-2 gap-6">
                <div class="bg-card-bg p-6 rounded-2xl border border-white/5">
                    <i data-lucide="flame" class="w-8 h-8 text-primary mb-3"></i>
                    <h4 class="font-bold text-lg mb-1">Core-Alignment Splicers</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Ultra-low splice loss (&lt;0.02 dB) on single-mode fiber with automated fiber identification and arc calibration.
                    </p>
                </div>
                <div class="bg-card-bg p-6 rounded-2xl border border-white/5">
                    <i data-lucide="activity" class="w-8 h-8 text-accent mb-3"></i>
                    <h4 class="font-bold text-lg mb-1">Calibrated OTDRs</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        1310nm / 1550nm wavelength optical time-domain reflectometers with launch fiber rings for exact event & break detection.
                    </p>
                </div>
                <div class="bg-card-bg p-6 rounded-2xl border border-white/5">
                    <i data-lucide="gauge" class="w-8 h-8 text-primary mb-3"></i>
                    <h4 class="font-bold text-lg mb-1">Optical Power Meters</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        High-accuracy multi-wavelength OPM units and Visual Fault Locators (VFL) for quick macrobend and continuity verification.
                    </p>
                </div>
                <div class="bg-card-bg p-6 rounded-2xl border border-white/5">
                    <i data-lucide="hard-hat" class="w-8 h-8 text-accent mb-3"></i>
                    <h4 class="font-bold text-lg mb-1">Safety & Rigging Systems</h4>
                    <p class="text-slate-400 text-xs leading-relaxed">
                        Full-body arrest harnesses, shock-absorbing lanyards, high-visibility reflective vests, and traffic control barrier kits.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Subcontracting Inquiry Form -->
<section id="partner-form" class="py-24 px-4 md:px-8">
    <div class="max-w-5xl mx-auto bg-card-bg border border-white/10 p-8 md:p-14 rounded-[40px] shadow-2xl relative overflow-hidden">
        <div class="absolute -top-20 -right-20 w-60 h-60 bg-primary/20 blur-3xl rounded-full -z-0"></div>

        <div class="text-center max-w-2xl mx-auto mb-12 relative z-10">
            <span class="text-accent uppercase font-bold text-xs tracking-widest block mb-2">B2B & Carrier Inquiries</span>
            <h2 class="text-3xl md:text-5xl font-black mb-4">Request Subcontracting Support</h2>
            <p class="text-slate-400">
                Whether you need on-call restoration coverage, an FTTH rollout crew, or linear route trenching in Western Kenya, our engineering ops team is ready to respond.
            </p>
        </div>

        <form action="api/contact-form.php" method="POST" x-data="{ loading: false, success: false, error: false }"
            @submit.prevent="loading = true; 
            fetch('api/contact-form.php', {
                method: 'POST',
                body: new FormData($el)
            })
            .then(res => res.json())
            .then(data => {
                loading = false;
                if(data.success) { success = true; $el.reset(); }
                else { error = data.message || 'An error occurred'; }
            })
            .catch(() => { loading = false; error = 'Network error. Please try again.'; })"
            class="relative z-10">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-bold text-slate-300 mb-2">Company / Entity Name *</label>
                    <input type="text" name="name" required placeholder="e.g. Safaricom / Prime Contractor Ltd"
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-300 mb-2">Contact Person & Title *</label>
                    <input type="text" name="contact_person" required placeholder="e.g. John Doe, Project Manager"
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-bold text-slate-300 mb-2">Phone / Mobile Line *</label>
                    <input type="tel" name="phone" required placeholder="e.g. 07XX XXX XXX"
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-300 mb-2">Corporate Email Address *</label>
                    <input type="email" name="email" required placeholder="operations@yourcompany.co.ke"
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <label class="block text-sm font-bold text-slate-300 mb-2">Scope of Interest *</label>
                    <div class="relative">
                        <select name="service_interest" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all appearance-none cursor-pointer">
                            <option value="FTTH Subscriber Drops" selected>FTTH / FTTB Subscriber Drops</option>
                            <option value="Emergency Fiber Restoration SLA">Emergency Fiber Restoration (24/7 SLA)</option>
                            <option value="Outside Plant (OSP) & Civil Works">Outside Plant (OSP) & Civil Works</option>
                            <option value="Tower Rigging & Microwave Links">Tower Rigging & Microwave Links</option>
                            <option value="Starlink Enterprise Deployment">Starlink Enterprise Deployment</option>
                            <option value="Route Survey & Feasibility Audit">Route Survey & Feasibility Audit</option>
                            <option value="General Subcontracting Inquiry">General Subcontracting Inquiry</option>
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-bold text-slate-300 mb-2">Region / Corridor *</label>
                    <input type="text" name="corridor" required placeholder="e.g. Vihiga / Kakamega / Nairobi / Other"
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>
            </div>

            <div class="mb-8">
                <label class="block text-sm font-bold text-slate-300 mb-2">Project Details / Requirements *</label>
                <textarea name="message" required rows="4" placeholder="Briefly describe project scope, estimated volume of drops or kilometers, required start date, and any specific requirements..."
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all"></textarea>
            </div>

            <button type="submit" :disabled="loading"
                class="w-full bg-primary hover:bg-primary-hover py-4 rounded-xl font-black text-lg transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3">
                <span x-show="!loading">Submit Subcontracting Request</span>
                <span x-show="loading" class="animate-spin w-5 h-5 border-2 border-white/30 border-t-white rounded-full"></span>
            </button>

            <!-- Feedback -->
            <div x-show="success" x-transition
                class="mt-6 p-4 bg-accent/20 border border-accent/30 text-accent rounded-xl text-center font-bold">
                Thank you. Your request has been received by our engineering operations lead. We will reach out within 2 hours.
            </div>
            <div x-show="error" x-transition
                class="mt-6 p-4 bg-red-500/20 border border-red-500/30 text-red-500 rounded-xl text-center font-bold"
                x-text="error">
            </div>
        </form>

        <div class="mt-12 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between gap-6 text-slate-400 text-sm">
            <div class="flex items-center gap-2">
                <i data-lucide="phone-call" class="text-primary w-4 h-4"></i>
                <span>Direct Operations Desk:</span>
                <a href="<?php echo format_tel_link(SITE_PHONE); ?>" class="text-white font-bold hover:text-primary transition-colors">
                    <?php echo SITE_PHONE; ?>
                </a>
            </div>
            <div class="flex items-center gap-2">
                <i data-lucide="mail" class="text-primary w-4 h-4"></i>
                <span>Engineering Email:</span>
                <a href="mailto:<?php echo SITE_EMAIL_SALES; ?>" class="text-white font-bold hover:text-primary transition-colors">
                    <?php echo SITE_EMAIL_SALES; ?>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>
