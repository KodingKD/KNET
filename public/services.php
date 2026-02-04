<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Our Services";
include INCLUDES_PATH . '/header.php';

$services = [
    [
        'id' => 'home-fiber',
        'title' => 'Home Fiber Internet',
        'icon' => 'home',
        'tagline' => 'Unlimited speed for your household.',
        'desc' => 'Our Home Fiber is designed to handle everything your family needs—from 4K streaming and online gaming to remote work and video calls.',
        'features' => [
            '100% Unlimited Data',
            'Synchronous Speeds (Upload = Download)',
            'Free Router on Selected Plans',
            '24/7 Priority Support',
            'Zero Throttling'
        ],
        'image' => 'https://images.unsplash.com/photo-1551703599-6b3e8379aa8b?q=80&w=2072&auto=format&fit=crop'
    ],
    [
        'id' => 'business',
        'title' => 'Business & Dedicated Internet',
        'icon' => 'briefcase',
        'tagline' => 'Powering enterprises and SMEs.',
        'desc' => 'High-availability dedicated internet access with guaranteed uptimes for businesses that cannot afford to be offline.',
        'features' => [
            '99.9% Uptime Guarantee (SLA)',
            'Dedicated Account Manager',
            'Static IP Addresses',
            'Low Latency for VoIP & Cloud',
            'Customizable Bandwidth'
        ],
        'image' => 'https://images.unsplash.com/photo-1497366216548-37526070297c?q=80&w=2069&auto=format&fit=crop'
    ],
    [
        'id' => 'hotspots',
        'title' => 'Public Wi-Fi Hotspots',
        'icon' => 'wifi',
        'tagline' => 'Turn your space into a digital hub.',
        'desc' => 'We deploy managed Wi-Fi solutions for cafes, malls, and public spaces, complete with monetization and branding options.',
        'features' => [
            'Custom Landing Pages',
            'Voucher Management System',
            'M-Pesa Integrated Payments',
            'Usage Analytics',
            'Bandwidth Management'
        ],
        'image' => 'https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=2070&auto=format&fit=crop'
    ],
    [
        'id' => 'wireless',
        'title' => 'Wireless / P2P Links',
        'icon' => 'radio',
        'tagline' => 'Connectivity where fiber can\'t reach.',
        'desc' => 'High-performance wireless point-to-point links for rural areas, farms, and estates beyond the fiber grid.',
        'features' => [
            'Rapid Deployment',
            'Long-range Beam Technology',
            'Weatherproof Infrastructure',
            'Scalable Bandwidth',
            'Cost-effective Rural Links'
        ],
        'image' => 'https://images.unsplash.com/photo-1512428559083-a40ea903330d?q=80&w=2070&auto=format&fit=crop'
    ],
    [
        'id' => 'starlink',
        'title' => 'Starlink Installation & Support',
        'icon' => 'satellite',
        'tagline' => 'The best of satellite internet.',
        'desc' => 'Professional installation and network integration for Starlink kits. We ensure your satellite dish is perfectly aligned for maximum speed.',
        'features' => [
            'Obstruction Analysis',
            'Professional Mast Mounting',
            'Indoor Network Extension',
            'Technical Troubleshooting',
            'Optimization Services'
        ],
        'image' => 'https://images.unsplash.com/photo-1614728263952-84ea206f99b6?q=80&w=2032&auto=format&fit=crop'
    ],
    [
        'id' => 'network',
        'title' => 'Network Infrastructure',
        'icon' => 'settings',
        'tagline' => 'Ready-to-use networking.',
        'desc' => 'From structured cabling and server room setup to office Wi-Fi mesh systems, we build the foundation of your digital office.',
        'features' => [
            'Structured LAN Cabling',
            'Wi-Fi Mesh Systems',
            'Firewall Configuration',
            'CCTV Network Integration',
            'Annual Maintenance Contracts'
        ],
        'image' => 'https://images.unsplash.com/photo-1558494949-ef010cbdcc31?q=80&w=2068&auto=format&fit=crop'
    ]
];
?>

<!-- Page Header -->
<section class="py-20 px-4 md:px-8 bg-primary/5 text-center relative overflow-hidden">
    <div
        class="absolute top-0 left-0 w-full h-full bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10">
    </div>
    <div class="max-w-4xl mx-auto relative z-10">
        <h1 class="text-4xl md:text-6xl font-black mb-6">Cutting-Edge Connectivity</h1>
        <p class="text-xl text-slate-400">Discover how KNET provides reliable, high-speed internet solutions tailored
            for every Kenyan home and business.</p>
    </div>
</section>

<!-- Services List -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-7xl mx-auto flex flex-col gap-24">
        <?php foreach ($services as $index => $s): ?>
            <div id="<?php echo $s['id']; ?>"
                class="flex flex-col <?php echo ($index % 2 !== 0) ? 'lg:flex-row-reverse' : 'lg:flex-row'; ?> gap-12 lg:gap-20 items-center">
                <div class="flex-1 w-full">
                    <div class="bg-card-bg border border-white/10 rounded-3xl overflow-hidden shadow-2xl group">
                        <img src="<?php echo $s['image']; ?>" alt="<?php echo $s['title']; ?>"
                            class="w-full h-[400px] object-cover grayscale group-hover:grayscale-0 transition-all duration-700">
                    </div>
                </div>
                <div class="flex-1">
                    <div
                        class="inline-flex items-center gap-2 text-primary font-bold uppercase tracking-widest text-sm mb-4">
                        <i data-lucide="<?php echo $s['icon']; ?>" class="w-5 h-5"></i>
                        <span>
                            <?php echo $s['tagline']; ?>
                        </span>
                    </div>
                    <h2 class="text-3xl md:text-5xl font-black mb-6">
                        <?php echo $s['title']; ?>
                    </h2>
                    <p class="text-lg text-slate-400 mb-8 leading-relaxed">
                        <?php echo $s['desc']; ?>
                    </p>

                    <ul class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-10">
                        <?php foreach ($s['features'] as $feature): ?>
                            <li class="flex items-center gap-3 text-slate-300">
                                <i data-lucide="check" class="w-5 h-5 text-accent"></i>
                                <span>
                                    <?php echo $feature; ?>
                                </span>
                            </li>
                        <?php endforeach; ?>
                    </ul>

                    <div class="flex flex-wrap gap-4">
                        <?php renderWhatsAppButton("Get a Quote", "md", "I'm interested in " . $s['title'] . ". Please provide more details."); ?>
                        <a href="contact.php?service=<?php echo urlencode($s['title']); ?>"
                            class="bg-white/5 hover:bg-white/10 text-white px-6 py-3 rounded-lg font-bold transition-all border border-white/10">
                            Custom Request
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- CTA Bar -->
<section class="py-16 px-4 md:px-8 bg-accent text-dark-bg">
    <div
        class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 text-center md:text-left">
        <div>
            <h2 class="text-3xl font-black mb-2">Not sure which service fits you?</h2>
            <p class="text-dark-bg/70 font-medium">Our experts are ready to provide a free consultation and site survey.
            </p>
        </div>
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>"
                class="bg-dark-bg text-white px-8 py-4 rounded-xl font-bold flex items-center gap-2 hover:bg-slate-800 transition-all shadow-xl">
                <i data-lucide="phone"></i> Call a Consultant
            </a>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>