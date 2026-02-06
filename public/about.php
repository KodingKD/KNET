<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "About Us";
$page_description = "Learn about KNET, a licensed ISP provided high speed internet in Western Kenya. Trusted by 1000+ homes and businesses.";
$page_keywords = "About KNET, Licensed ISP Kenya, KNET Vihiga, KNET Team, Internet Providers Western Kenya";
include INCLUDES_PATH . '/header.php';
?>

<!-- Page Header -->
<section class="py-20 px-4 md:px-8 bg-primary/5 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black mb-6">Our Journey</h1>
        <p class="text-xl text-slate-400">Pioneering digital connectivity in Western Kenya and beyond for over 5 years.
        </p>
    </div>
</section>

<!-- Company Story -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-20 items-center">
        <div class="flex-1">
            <h2 class="text-3xl md:text-5xl font-black mb-8">Empowering Communities Through Technology.</h2>
            <div class="space-y-6 text-slate-400 text-lg leading-relaxed">
                <p>
                    Founded with a vision to bridge the digital divide, **KNET NETWORK SOLUTIONS LIMITED** has grown
                    from a local startup to a leading Internet Service Provider (ISP) serving Vihiga, Kakamega, and
                    Nairobi.
                </p>
                <p>
                    We understand that in today's world, internet isn't a luxury—it's a utility as essential as water
                    and electricity. That's why we've invested heavily in fiber optic infrastructure and high-capacity
                    wireless links to reach even the most remote areas.
                </p>
                <p>
                    Licensed by the Communications Authority of Kenya, we adhere to the highest standards of service
                    delivery, ensuring that our customers get what they pay for: fast, reliable, and truly unlimited
                    internet.
                </p>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-12">
                <div>
                    <h3 class="text-4xl font-black text-primary mb-2">5+</h3>
                    <p class="text-slate-300 font-bold uppercase tracking-widest text-xs">Years of Service</p>
                </div>
                <div>
                    <h3 class="text-4xl font-black text-primary mb-2">1000+</h3>
                    <p class="text-slate-300 font-bold uppercase tracking-widest text-xs">Happy Clients</p>
                </div>
            </div>
        </div>

        <div class="flex-1 relative">
            <div class="relative z-10 rounded-[40px] overflow-hidden border border-white/10 shadow-2xl">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop"
                    alt="Our Team" class="w-full">
            </div>
            <div class="absolute -bottom-10 -right-10 w-64 h-64 bg-accent/20 rounded-full blur-[100px] -z-10"></div>
        </div>
    </div>
</section>

<!-- Values -->
<section class="py-24 px-4 md:px-8 bg-white/[0.02]">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-black mb-4">Our Core Values</h2>
            <p class="text-slate-400">The principles that guide every installation and every support ticket.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="bg-card-bg border border-white/5 p-8 rounded-2xl">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6">
                    <i data-lucide="shield-check"></i>
                </div>
                <h4 class="text-xl font-bold mb-4">Integrity</h4>
                <p class="text-slate-400 text-sm">Transparency in our billing and honesty in our speed promises.</p>
            </div>
            <div class="bg-card-bg border border-white/5 p-8 rounded-2xl">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent mb-6">
                    <i data-lucide="zap"></i>
                </div>
                <h4 class="text-xl font-bold mb-4">Speed</h4>
                <p class="text-slate-400 text-sm">Fast downloads and even faster technical response times.</p>
            </div>
            <div class="bg-card-bg border border-white/5 p-8 rounded-2xl">
                <div class="w-12 h-12 bg-primary/10 rounded-xl flex items-center justify-center text-primary mb-6">
                    <i data-lucide="users"></i>
                </div>
                <h4 class="text-xl font-bold mb-4">Community</h4>
                <p class="text-slate-400 text-sm">Investing in local infrastructure to boost local economies.</p>
            </div>
            <div class="bg-card-bg border border-white/5 p-8 rounded-2xl">
                <div class="w-12 h-12 bg-accent/10 rounded-xl flex items-center justify-center text-accent mb-6">
                    <i data-lucide="lightbulb"></i>
                </div>
                <h4 class="text-xl font-bold mb-4">Innovation</h4>
                <p class="text-slate-400 text-sm">Constantly upgrading our gear to the latest networking tech.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team / Trust -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl md:text-5xl font-black mb-8">Registered & Regulated</h2>
        <p class="text-xl text-slate-400 mb-12">KNET Network Solutions Limited is a fully registered entity in Kenya,
            operating under all relevant telecommunications acts and regulations. We are committed to data privacy and
            consumer protection.</p>

        <div class="flex flex-wrap justify-center gap-12 opacity-50 grayscale contrast-125">
            <!-- Placeholders for CAK Logo, etc. -->
            <div class="flex flex-col items-center gap-2">
                <div class="w-16 h-16 bg-white/10 rounded-full"></div>
                <span class="text-xs font-bold uppercase tracking-wider">Licensed ISP</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-16 h-16 bg-white/10 rounded-full"></div>
                <span class="text-xs font-bold uppercase tracking-wider">KRA Compliant</span>
            </div>
            <div class="flex flex-col items-center gap-2">
                <div class="w-16 h-16 bg-white/10 rounded-full"></div>
                <span class="text-xs font-bold uppercase tracking-wider">ICT Authority</span>
            </div>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>