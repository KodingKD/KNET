<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Home";
$page_description = "KNET provides fast, reliable, and unlimited fiber and wireless internet in Vihiga, Kakamega, and Nairobi. 100% UNLIMITED Internet with no data caps.";
$page_keywords = "Unlimited Internet Vihiga, Fiber Internet Kakamega, Wifi Nairobi, ISP Vihiga, KNET Networks, Home Internet, Business Fiber";
include INCLUDES_PATH . '/header.php';
?>

<!-- Hero Section -->
<section class="relative min-h-[90vh] flex items-center overflow-hidden px-4 md:px-8">
    <!-- Animated Background -->
    <div
        class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top_right,_var(--tw-gradient-stops))] from-primary/20 via-transparent to-transparent">
    </div>
    <div class="absolute top-1/4 -left-20 w-80 h-80 bg-primary/10 rounded-full blur-[120px] -z-10 animate-pulse"></div>

    <div class="max-w-7xl mx-auto w-full grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div class="text-center lg:text-left">
            <div
                class="inline-flex items-center gap-2 bg-white/5 border border-white/10 px-4 py-2 rounded-full mb-6 animate-bounce">
                <span class="w-2 h-2 bg-accent rounded-full animate-ping"></span>
                <span class="text-xs font-bold tracking-widest uppercase text-slate-300">Now Serving Vihiga, Kakamega &
                    Nairobi</span>
            </div>
            <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-6 leading-[1.1] tracking-tight">
                Fast. Reliable.<br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary to-accent">Unlimited</span>
                Internet.
            </h1>
            <p class="text-xl text-slate-400 mb-10 max-w-2xl mx-auto lg:ml-0 leading-relaxed">
                Experience high-speed fiber, dedicated business lines, and seamless Wi-Fi hotspots designed for modern
                life and business in Kenya.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                <?php renderWhatsAppButton("Get Connected Today", "lg"); ?>
                <?php renderCallButton("Call Us Now"); ?>
            </div>

            <div class="mt-12 flex items-center justify-center lg:justify-start gap-8 opacity-60">
                <div class="flex items-center gap-2">
                    <i data-lucide="zap" class="w-5 h-5 text-accent"></i>
                    <span class="text-sm font-semibold">100% Unlimited</span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="shield-check" class="w-5 h-5 text-accent"></i>
                    <span class="text-sm font-semibold">99.9% Uptime</span>
                </div>
                <div class="flex items-center gap-2">
                    <i data-lucide="headphones" class="w-5 h-5 text-accent"></i>
                    <span class="text-sm font-semibold">24/7 Support</span>
                </div>
            </div>
        </div>

        <div class="relative hidden lg:block">
            <div class="absolute inset-0 bg-primary/20 rounded-3xl blur-3xl -z-10 translate-x-10 translate-y-10"></div>
            <div class="bg-card-bg border border-white/10 rounded-3xl p-8 relative overflow-hidden group">
                <img src="https://images.unsplash.com/photo-1544197150-b99a580bb7a8?q=80&w=2070&auto=format&fit=crop"
                    alt="High Speed Internet"
                    class="w-full h-[500px] object-cover rounded-2xl grayscale hover:grayscale-0 transition-all duration-700">
                <div class="absolute inset-0 bg-gradient-to-t from-dark-bg/80 to-transparent"></div>
                <div class="absolute bottom-12 left-12 right-12">
                    <div class="bg-white/10 backdrop-blur-md border border-white/10 p-6 rounded-2xl">
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-sm font-bold uppercase tracking-widest text-primary">Live
                                Performance</span>
                            <span class="text-xs bg-accent/20 text-accent px-2 py-1 rounded">Optimal</span>
                        </div>
                        <div class="flex items-end gap-2 mb-2">
                            <span class="text-4xl font-black">50</span>
                            <span class="text-xl text-slate-400 pb-1">Mbps</span>
                        </div>
                        <div class="w-full bg-white/5 h-2 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-3/4 animate-pulse"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="py-24 px-4 md:px-8 bg-white/[0.02]">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-black mb-4">Our Services</h2>
            <p class="text-slate-400 max-w-2xl mx-auto">Tailored connectivity solutions for every need, from rural homes
                to enterprise data centers.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            $services = [
                ['icon' => 'home', 'title' => 'Home Fiber', 'desc' => 'High-speed UNLIMITED internet for your home streaming, gaming and work.'],
                ['icon' => 'wifi', 'title' => 'Wi-Fi Hotspots', 'desc' => 'Turn your business into a digital hub with our monetized public hotspot solutions.'],
                ['icon' => 'briefcase', 'title' => 'Business Fiber', 'desc' => 'SLA-backed dedicated internet for schools, offices and institutions.'],
                ['icon' => 'radio', 'title' => 'Wireless P2P', 'desc' => 'Reliable connectivity for rural or hard to reach areas via point-to-point links.'],
                ['icon' => 'satellite', 'title' => 'Starlink Setup', 'desc' => 'Professional installation and support for Starlink premium satellite internet.'],
                ['icon' => 'settings', 'title' => 'Network Solutions', 'desc' => 'Cabling, router configuration, and full office network infrastructure setups.'],
            ];
            foreach ($services as $s):
                ?>
                <div class="bg-card-bg border border-white/5 p-8 rounded-2xl hover:border-primary/50 transition-all group">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="<?php echo $s['icon']; ?>" class="w-8 h-8"></i>
                    </div>
                    <h3 class="text-2xl font-bold mb-4">
                        <?php echo $s['title']; ?>
                    </h3>
                    <p class="text-slate-400 mb-6 leading-relaxed">
                        <?php echo $s['desc']; ?>
                    </p>
                    <a href="services.php"
                        class="text-primary font-bold flex items-center gap-2 group-hover:gap-3 transition-all">
                        Learn More <i data-lucide="chevron-right" class="w-4 h-4"></i>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-24 px-4 md:px-8 border-y border-white/5">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-16 items-center">
        <div class="flex-1">
            <div class="inline-block bg-primary/10 text-primary px-4 py-1 rounded-full text-sm font-bold mb-6">WHY
                CHOOSE KNET</div>
            <h2 class="text-3xl md:text-5xl font-black mb-8 leading-tight">We Don't Just Provide Internet, We Fuel Your
                Vision.</h2>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center text-accent shrink-0">
                        <i data-lucide="zap"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Zero Data Caps</h4>
                        <p class="text-slate-400 text-sm">Truly unlimited. No Fair Usage Policy (FUP) that slows you
                            down.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center text-accent shrink-0">
                        <i data-lucide="shield"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Local Support</h4>
                        <p class="text-slate-400 text-sm">Teams in Vihiga, Kakamega & Nairobi ready to help you
                            instantly.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center text-accent shrink-0">
                        <i data-lucide="award"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Certified Techs</h4>
                        <p class="text-slate-400 text-sm">Professional installations that ensure maximum signal
                            strength.</p>
                    </div>
                </div>
                <div class="flex gap-4">
                    <div
                        class="w-12 h-12 bg-accent/10 rounded-full flex items-center justify-center text-accent shrink-0">
                        <i data-lucide="clock"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Fast Activation</h4>
                        <p class="text-slate-400 text-sm">Get connected within 24-48 hours of your request.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-1 relative">
            <div
                class="aspect-square bg-primary/5 rounded-[40px] border border-white/10 flex items-center justify-center p-12 overflow-hidden rotate-3">
                <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2084&auto=format&fit=crop"
                    alt="Team Work"
                    class="w-full h-full object-cover rounded-3xl -rotate-3 hover:scale-110 transition-transform duration-700">
            </div>
        </div>
    </div>
</section>

<!-- Coverage Quick Check -->
<section class="py-24 px-4 md:px-8 bg-primary/5">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl md:text-5xl font-black mb-8">Ready to Check Coverage?</h2>
        <p class="text-slate-400 text-lg mb-12">Search your estate or town to see if we are already in your
            neighborhood. We are expanding rapidly!</p>

        <div class="flex flex-col sm:flex-row gap-4 items-stretch justify-center">
            <input type="text" placeholder="Enter your Location (e.g. Mbale Town)"
                class="flex-grow bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:outline-none focus:border-primary transition-all">
            <button
                class="bg-primary hover:bg-primary-hover px-8 py-4 rounded-xl font-bold transition-all shadow-xl shadow-primary/20">
                Check Now
            </button>
        </div>
        <div class="mt-8 flex flex-wrap justify-center gap-4 text-sm text-slate-500 font-medium">
            <span>Popular:</span>
            <span class="text-slate-300">Mbale</span>
            <span class="text-slate-300">Kakamega CBD</span>
            <span class="text-slate-300">Westlands</span>
            <span class="text-slate-300">Mumias</span>
        </div>
    </div>
</section>

<!-- Testimonials -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-black mb-4">What Our Clients Say</h2>
            <p class="text-slate-400 max-w-2xl mx-auto">Join hundreds of satisfied users who trust KNET for their daily
                connectivity.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php
            // Pull featured testimonials from DB or mock for now
            $mock_testimonials = [
                ['name' => 'John Kamau', 'loc' => 'Nairobi', 'type' => 'business', 'text' => 'KNET fiber changed how my office works. Zero downtime in 6 months.', 'rating' => 5],
                ['name' => 'Mercy Atieno', 'loc' => 'Mbale', 'type' => 'home', 'text' => 'Best internet in Vihiga. My kids can attend online classes with no buffering.', 'rating' => 5],
                ['name' => 'Brian Wekesa', 'loc' => 'Kakamega', 'type' => 'institution', 'text' => 'We used their hotspot solution for our cafe. Customers love the speed!', 'rating' => 4],
            ];

            foreach ($mock_testimonials as $t) {
                render_component('testimonial-card', [
                    'client_name' => $t['name'],
                    'location' => $t['loc'],
                    'client_type' => $t['type'],
                    'testimonial' => $t['text'],
                    'rating' => $t['rating']
                ]);
            }
            ?>
        </div>
    </div>
</section>

<!-- Final CTA -->
<section class="py-24 px-4 md:px-8 bg-dark-bg relative overflow-hidden">
    <div class="absolute inset-0 bg-primary/10 -z-10 translate-y-1/2 rounded-full blur-[150px]"></div>
    <div class="max-w-5xl mx-auto bg-card-bg border border-white/10 p-12 md:p-20 rounded-[40px] text-center shadow-2xl">
        <h2 class="text-4xl md:text-6xl font-black mb-8 leading-tight">Ready to Experience the <span
                class="text-primary">KNET Difference?</span></h2>
        <p class="text-slate-400 text-xl mb-12 max-w-2xl mx-auto">Get connected today with the fastest growing ISP in
            Western Kenya. No hidden fees, just pure internet.</p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
            <?php renderWhatsAppButton("Chat on WhatsApp", "lg"); ?>
            <?php renderCallButton("Call Us Now"); ?>
        </div>
        <p class="mt-8 text-slate-500 font-medium">No Contract Commitment Required</p>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>
<!-- Cache Release v2.0 -->