<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Hardware & Power Solutions Store";
$page_description = "Shop genuine Wi-Fi routers, Mini-UPS blackout battery backups, Starlink accessories, and mesh range extenders in Western Kenya with fast delivery and warranty.";
$page_keywords = "Mini UPS Kenya, Router UPS Western Kenya, Wi-Fi 6 Router Kenya, Starlink Ethernet Adapter Kakamega, TP-Link Archer C6 Vihiga, Mesh Wi-Fi Kenya, Buy Router M-Pesa";

include INCLUDES_PATH . '/header.php';

// Product Catalog Array
$products = [
    // 1. Power & Mini-UPS
    [
        'id' => 'marsriva-kp3',
        'category' => 'power',
        'name' => 'Marsriva KP3 Smart Mini-UPS (10,000mAh)',
        'subtitle' => '4-6 Hour Blackout Power Shield for Wi-Fi Routers',
        'badge' => '🔥 #1 Best Seller • Blackout Shield',
        'badge_class' => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'price' => 3850,
        'compare_price' => 4500,
        'icon' => 'battery-charging',
        'color' => 'from-emerald-500/20 to-teal-500/5',
        'icon_color' => 'text-emerald-400',
        'specs' => [
            '10,000mAh High-Density Lithium-ion Battery',
            'Multi-Voltage Output: 5V USB, 9V DC, 12V DC selector',
            'Zero Cutover Switch (Zero router reboot or call dropping)',
            'Y-Splitter Cable included: powers ONT + Router simultaneously'
        ],
        'highlight' => 'Tested on Safaricom, KNET, Airtel & Zuku Routers'
    ],
    [
        'id' => 'marsriva-kp7-poe',
        'category' => 'power',
        'name' => 'Marsriva KP7 Heavy-Duty POE + DC Mini-UPS (16,000mAh)',
        'subtitle' => '6-8+ Hour High-Capacity Backup for Routers & Wireless Antennas',
        'badge' => '⚡ POE + DC • Heavy Duty',
        'badge_class' => 'bg-amber-500/10 text-amber-400 border-amber-500/20',
        'price' => 5950,
        'compare_price' => 6800,
        'icon' => 'zap',
        'color' => 'from-amber-500/20 to-orange-500/5',
        'icon_color' => 'text-amber-400',
        'specs' => [
            'Massive 16,000mAh Battery Capacity (6-8+ hrs runtime)',
            'Gigabit POE Output (15V / 24V) for wireless CPEs & antennas',
            'Multi-Voltage DC (9V / 12V) + 5V USB Quick Charge',
            'Heavy-duty fire-retardant metal housing with battery gauge'
        ],
        'highlight' => 'Ideal for outdoor P2P antennas, CCTV NVRs & Starlink gear'
    ],

    // 2. Wi-Fi Routers
    [
        'id' => 'tplink-archer-c6',
        'category' => 'routers',
        'name' => 'TP-Link Archer C6 (AC1200) Dual-Band Gigabit Router',
        'subtitle' => 'High-Speed Fiber Upgrade • Eliminates Wi-Fi Bottlenecks',
        'badge' => '🚀 Full Speed • Gigabit Ports',
        'badge_class' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
        'price' => 5200,
        'compare_price' => 5800,
        'icon' => 'router',
        'color' => 'from-blue-500/20 to-cyan-500/5',
        'icon_color' => 'text-blue-400',
        'specs' => [
            'Dual-Band AC1200: 867Mbps (5GHz) + 300Mbps (2.4GHz)',
            '4 x Full Gigabit LAN Ports + 1 x Gigabit WAN Port',
            '4 High-Gain Antennas with Beamforming & MU-MIMO',
            'Supports Router Mode, Access Point (AP) Mode & OneMesh'
        ],
        'highlight' => 'Unlocks full speed for 15Mbps to 100Mbps fiber lines'
    ],
    [
        'id' => 'wifi6-ax1500',
        'category' => 'routers',
        'name' => 'Next-Gen Wi-Fi 6 (AX1500) Gigabit Ultra Router',
        'subtitle' => 'Ultra-Low Latency • Built for 60+ Connected Devices',
        'badge' => '⚡ Wi-Fi 6 802.11ax • Next-Gen',
        'badge_class' => 'bg-purple-500/10 text-purple-400 border-purple-500/20',
        'price' => 6950,
        'compare_price' => 7800,
        'icon' => 'cpu',
        'color' => 'from-purple-500/20 to-pink-500/5',
        'icon_color' => 'text-purple-400',
        'specs' => [
            'Wi-Fi 6 speeds up to 1.5 Gbps (1201Mbps 5GHz + 300Mbps 2.4GHz)',
            'OFDMA + MU-MIMO technology eliminates multi-user buffering',
            '5 x 6dBi High-Gain Antennas for superior concrete wall penetration',
            'WPA3 Military-Grade Encryption & BSS Color interference blocking'
        ],
        'highlight' => 'Engineered for gaming, 4K streaming, and busy households'
    ],

    // 3. Range Extenders & Mesh
    [
        'id' => 'ac1200-extender',
        'category' => 'extenders',
        'name' => 'Dual-Band AC1200 Wall-Plug Wi-Fi Range Extender',
        'subtitle' => 'Eliminates Dead Zones in Bedrooms, Balconies & Compounds',
        'badge' => '📶 Dead-Zone Killer • Simple WPS',
        'badge_class' => 'bg-teal-500/10 text-teal-400 border-teal-500/20',
        'price' => 3850,
        'compare_price' => 4400,
        'icon' => 'radio',
        'color' => 'from-teal-500/20 to-emerald-500/5',
        'icon_color' => 'text-teal-400',
        'specs' => [
            'Dual-Band AC1200 (867Mbps on 5GHz / 300Mbps on 2.4GHz)',
            'Plugs directly into any AC socket with smart location LED indicator',
            'One-Touch WPS connection to any existing router in 60 seconds',
            'Ethernet port to connect Smart TVs, decoders, or gaming rigs'
        ],
        'highlight' => 'Works with all ISP routers with zero complex configuration'
    ],
    [
        'id' => 'deco-m4-mesh-2pack',
        'category' => 'extenders',
        'name' => 'TP-Link Deco M4 Whole-Home Mesh System (2-Pack)',
        'subtitle' => 'Single Unified Wi-Fi Name Across Sprawling Multi-Storey Homes',
        'badge' => '🏆 Seamless Roaming • 2,800 Sq Ft',
        'badge_class' => 'bg-indigo-500/10 text-indigo-400 border-indigo-500/20',
        'price' => 12900,
        'compare_price' => 14500,
        'icon' => 'network',
        'color' => 'from-indigo-500/20 to-blue-500/5',
        'icon_color' => 'text-indigo-400',
        'specs' => [
            'Covers up to 2,800 sq ft across multiple floors and compounds',
            'Seamless Roaming: 1 Wi-Fi name and password throughout the property',
            'Connects up to 100 devices without dropping speed or connection',
            '2 x Gigabit ports per tower + intuitive smartphone app control'
        ],
        'highlight' => 'Eliminates manual network switching as you walk through your home'
    ],

    // 4. Starlink & Satellite
    [
        'id' => 'starlink-gen2-ethernet',
        'category' => 'starlink',
        'name' => 'Starlink Gen 2 Gigabit Ethernet Adapter (OEM Spec)',
        'subtitle' => 'Direct RJ45 Gigabit Port for External Routers, Switches & CCTV',
        'badge' => '🛰️ Starlink Essential • 1000Mbps',
        'badge_class' => 'bg-sky-500/10 text-sky-400 border-sky-500/20',
        'price' => 9450,
        'compare_price' => 10500,
        'icon' => 'satellite-dish',
        'color' => 'from-sky-500/20 to-blue-500/5',
        'icon_color' => 'text-sky-400',
        'specs' => [
            'Direct plug-and-play adapter for Starlink Standard Actuated Dish',
            '1 x 1000Mbps RJ45 Gigabit port for instant network distribution',
            'Enables Bypass Mode to connect TP-Link Deco, switches, or firewalls',
            'Heavy-duty shielded original-spec internal wiring'
        ],
        'highlight' => 'In stock in Western Kenya with immediate courier dispatch'
    ],
    [
        'id' => 'starlink-roof-mount',
        'category' => 'starlink',
        'name' => 'Heavy-Duty Galvanized Starlink Roof Mount & Pipe Adapter',
        'subtitle' => 'Storm-Proof Fascia, Wall & Pole Locking Mount with Dual Clamps',
        'badge' => '🛠️ Storm-Proof • Rust Resistant',
        'badge_class' => 'bg-amber-500/10 text-amber-400 border-amber-500/20',
        'price' => 3950,
        'compare_price' => 4800,
        'icon' => 'shield',
        'color' => 'from-amber-500/20 to-yellow-500/5',
        'icon_color' => 'text-amber-400',
        'specs' => [
            'Heavy-gauge galvanized steel with anti-corrosion powder coating',
            'Dual heavy-duty locking bolts clamp Starlink mast rock solid',
            'Universal base plate fits corrugated iron, tile roofs, and brick walls',
            'Tested to withstand heavy Western Kenya wind gusts and thunderstorms'
        ],
        'highlight' => 'Prevents dish wobble and intermittent satellite dropouts'
    ],

    // 5. Cables & Surge Protection
    [
        'id' => 'cat6-pure-copper',
        'category' => 'cables',
        'name' => 'Factory-Molded Pure Copper Cat6 Gigabit Patch Cables',
        'subtitle' => 'Gold-Plated RJ45 Boots • High-Speed Jitter-Free Gaming & TV',
        'badge' => '🔌 100% Pure Copper • 1Gbps',
        'badge_class' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
        'price' => 750,
        'compare_price' => 1000,
        'icon' => 'cable',
        'color' => 'from-blue-500/20 to-slate-500/5',
        'icon_color' => 'text-blue-400',
        'specs' => [
            'Available in 10 Metre (KES 750), 20m (KES 1,250), 30m (KES 1,750)',
            'Factory injection-molded strain relief snagless boots',
            '24AWG 100% pure annealed copper conductors (zero signal attenuation)',
            'Connects Smart TVs, PlayStation/Xbox, desktop PCs, and CCTV decoders'
        ],
        'highlight' => 'Tested up to 550MHz for ultra-stable latency'
    ],
    [
        'id' => 'surge-extension-4way',
        'category' => 'cables',
        'name' => 'APC / Huntkey 4-Way Surge & Lightning Protection Strip (2m)',
        'subtitle' => 'Defends Expensive Routers, Mini-UPS & TVs Against Voltage Spikes',
        'badge' => '🛡️ Surge & Lightning Shield',
        'badge_class' => 'bg-red-500/10 text-red-400 border-red-500/20',
        'price' => 2650,
        'compare_price' => 3200,
        'icon' => 'shield-alert',
        'color' => 'from-red-500/20 to-amber-500/5',
        'icon_color' => 'text-red-400',
        'specs' => [
            'High-capacity MOV surge suppression protects against lightning spikes',
            '4 Universal AC Sockets with individual LED child-proof power switches',
            'Built-in automatic thermal fuse cut-off during extreme overvoltage',
            'Heavy-duty 2-metre pure copper flame-retardant power cable'
        ],
        'highlight' => 'Essential protection for Western Kenya rural & peri-urban power grids'
    ]
];
?>

<!-- Alpine.js Store Container -->
<div x-data="{
    activeCategory: 'all',
    selectedProduct: null,
    inquiryOpen: false,
    orderName: '',
    orderPhone: '',
    orderLocation: '',
    orderNotes: '',
    isSubmitting: false,
    orderSuccess: false,
    orderError: '',

    openInquiry(product) {
        this.selectedProduct = product;
        this.orderSuccess = false;
        this.orderError = '';
        this.inquiryOpen = true;
    },

    submitOrder() {
        if(!this.orderName || !this.orderPhone || !this.orderLocation) {
            this.orderError = 'Please fill in your name, phone number, and location.';
            return;
        }
        this.isSubmitting = true;
        this.orderError = '';

        const formData = new FormData();
        formData.append('name', this.orderName);
        formData.append('phone', this.orderPhone);
        formData.append('email', 'shop-order@knet.co.ke');
        formData.append('service_interest', 'Hardware Store: ' + this.selectedProduct.name);
        formData.append('corridor', this.orderLocation);
        formData.append('message', 'Product: ' + this.selectedProduct.name + ' (KES ' + this.selectedProduct.price.toLocaleString() + ')\nDelivery Location: ' + this.orderLocation + '\nNotes: ' + this.orderNotes);

        fetch('api/contact-form.php', {
            method: 'POST',
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            this.isSubmitting = false;
            if(data.success) {
                this.orderSuccess = true;
                setTimeout(() => {
                    this.inquiryOpen = false;
                    this.orderName = '';
                    this.orderPhone = '';
                    this.orderLocation = '';
                    this.orderNotes = '';
                }, 3000);
            } else {
                this.orderError = data.message || 'Failed to submit order. Please order via WhatsApp.';
            }
        })
        .catch(() => {
            this.isSubmitting = false;
            this.orderError = 'Network error. Please try ordering directly via WhatsApp.';
        });
    }
}">

<!-- Hero Header Section -->
<section class="relative py-20 px-4 md:px-8 overflow-hidden bg-gradient-to-b from-primary/15 via-transparent to-transparent">
    <div class="max-w-7xl mx-auto text-center relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 border border-accent/20 text-accent text-xs uppercase font-extrabold tracking-widest mb-6">
            <i data-lucide="shopping-bag" class="w-4 h-4"></i> Official KNET Hardware & Power Store
        </div>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight tracking-tight">
            Reliable Network Gear & <span class="text-accent">Blackout Solutions</span>.
        </h1>
        <p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Keep your internet alive during power cuts, eliminate dead spots, and unlock true Gigabit speeds. 
            Genuine products verified by KNET field engineers with local pickup in Western Kenya and express parcel delivery countrywide.
        </p>

        <!-- Trust Pillars -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-5xl mx-auto text-left">
            <div class="bg-card-bg/60 border border-white/5 p-4 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center shrink-0">
                    <i data-lucide="shield-check" class="w-5 h-5"></i>
                </div>
                <div>
                    <span class="block text-xs font-bold text-white">12-Month Warranty</span>
                    <span class="text-[11px] text-slate-400">Official replacement cover</span>
                </div>
            </div>
            <div class="bg-card-bg/60 border border-white/5 p-4 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <i data-lucide="truck" class="w-5 h-5"></i>
                </div>
                <div>
                    <span class="block text-xs font-bold text-white">Fast Local Dispatch</span>
                    <span class="text-[11px] text-slate-400">Vihiga, Kakamega & Nationwide</span>
                </div>
            </div>
            <div class="bg-card-bg/60 border border-white/5 p-4 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-accent/10 text-accent flex items-center justify-center shrink-0">
                    <i data-lucide="wrench" class="w-5 h-5"></i>
                </div>
                <div>
                    <span class="block text-xs font-bold text-white">Engineer Setup Support</span>
                    <span class="text-[11px] text-slate-400">Free phone/WhatsApp guide</span>
                </div>
            </div>
            <div class="bg-card-bg/60 border border-white/5 p-4 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center shrink-0">
                    <i data-lucide="credit-card" class="w-5 h-5"></i>
                </div>
                <div>
                    <span class="block text-xs font-bold text-white">Pay via M-Pesa</span>
                    <span class="text-[11px] text-slate-400">On delivery / Pickup verified</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Filter Tabs -->
<section class="sticky top-20 z-30 bg-dark-bg/95 backdrop-blur-md border-y border-white/10 py-4 px-4 md:px-8 mb-12">
    <div class="max-w-7xl mx-auto flex items-center justify-start md:justify-center gap-2 overflow-x-auto no-scrollbar py-1">
        <button @click="activeCategory = 'all'"
            :class="activeCategory === 'all' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="grid" class="w-4 h-4"></i> All Equipment (10)
        </button>
        <button @click="activeCategory = 'power'"
            :class="activeCategory === 'power' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="battery-charging" class="w-4 h-4 text-emerald-400"></i> Blackout Mini-UPS
        </button>
        <button @click="activeCategory = 'routers'"
            :class="activeCategory === 'routers' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="router" class="w-4 h-4 text-blue-400"></i> Wi-Fi Routers (Gigabit & Wi-Fi 6)
        </button>
        <button @click="activeCategory = 'extenders'"
            :class="activeCategory === 'extenders' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="radio" class="w-4 h-4 text-teal-400"></i> Extenders & Mesh Wi-Fi
        </button>
        <button @click="activeCategory = 'starlink'"
            :class="activeCategory === 'starlink' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="satellite-dish" class="w-4 h-4 text-sky-400"></i> Starlink Accessories
        </button>
        <button @click="activeCategory = 'cables'"
            :class="activeCategory === 'cables' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="shield-alert" class="w-4 h-4 text-red-400"></i> Cables & Surge Strips
        </button>
    </div>
</section>

<!-- Product Catalog Grid -->
<section class="max-w-7xl mx-auto px-4 md:px-8 mb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($products as $prod): ?>
            <?php 
                $wa_text = urlencode("Hello KNET Shop, I would like to order the " . $prod['name'] . " (KES " . number_format($prod['price']) . "). Please arrange delivery/collection for me.");
                $wa_url = "https://wa.me/" . str_replace(['+', ' '], '', SITE_WHATSAPP) . "?text=" . $wa_text;
            ?>
            <div x-show="activeCategory === 'all' || activeCategory === '<?php echo $prod['category']; ?>'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                class="bg-card-bg border border-white/5 hover:border-primary/40 rounded-3xl p-6 md:p-8 flex flex-col justify-between transition-all duration-300 group hover:-translate-y-1 relative overflow-hidden shadow-xl">
                
                <!-- Ambient Glow Effect -->
                <div class="absolute -top-12 -right-12 w-40 h-40 bg-gradient-to-br <?php echo $prod['color']; ?> rounded-full blur-3xl pointer-events-none group-hover:scale-150 transition-transform duration-500"></div>

                <div>
                    <!-- Badge & Category -->
                    <div class="flex items-center justify-between gap-2 mb-5 relative z-10">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full text-xs font-bold border <?php echo $prod['badge_class']; ?>">
                            <?php echo $prod['badge']; ?>
                        </span>
                        <div class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center <?php echo $prod['icon_color']; ?>">
                            <i data-lucide="<?php echo $prod['icon']; ?>" class="w-5 h-5"></i>
                        </div>
                    </div>

                    <!-- Title & Subtitle -->
                    <h3 class="text-xl md:text-2xl font-black text-white mb-2 leading-snug group-hover:text-primary transition-colors">
                        <?php echo htmlspecialchars($prod['name']); ?>
                    </h3>
                    <p class="text-xs text-slate-400 mb-6 font-medium leading-relaxed">
                        <?php echo htmlspecialchars($prod['subtitle']); ?>
                    </p>

                    <!-- Key Specs Checklist -->
                    <div class="space-y-2.5 mb-8 bg-dark-bg/50 border border-white/5 rounded-2xl p-4">
                        <?php foreach ($prod['specs'] as $spec): ?>
                            <div class="flex items-start gap-2.5 text-xs text-slate-300">
                                <i data-lucide="check" class="w-4 h-4 text-accent shrink-0 mt-0.5"></i>
                                <span class="leading-tight"><?php echo htmlspecialchars($spec); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <!-- Highlight Pill -->
                    <div class="mb-6 flex items-center gap-2 text-[11px] font-semibold text-slate-400 bg-white/5 px-3 py-2 rounded-xl">
                        <i data-lucide="info" class="w-3.5 h-3.5 text-primary shrink-0"></i>
                        <span><?php echo htmlspecialchars($prod['highlight']); ?></span>
                    </div>
                </div>

                <!-- Price & CTAs -->
                <div class="pt-6 border-t border-white/10 relative z-10">
                    <div class="flex items-baseline justify-between mb-5">
                        <div>
                            <span class="text-xs text-slate-500 uppercase font-bold tracking-wider block mb-0.5">Special Price</span>
                            <div class="flex items-baseline gap-2">
                                <span class="text-2xl md:text-3xl font-black text-white tracking-tight">
                                    KES <?php echo number_format($prod['price']); ?>
                                </span>
                                <span class="text-xs text-slate-500 line-through">
                                    KES <?php echo number_format($prod['compare_price']); ?>
                                </span>
                            </div>
                        </div>
                        <span class="text-[11px] font-extrabold bg-accent/15 text-accent px-2.5 py-1 rounded-lg">
                            Save KES <?php echo number_format($prod['compare_price'] - $prod['price']); ?>
                        </span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        <a href="<?php echo $wa_url; ?>" target="_blank" rel="noopener noreferrer"
                            class="bg-[#25D366] hover:bg-[#20ba59] text-white py-3 px-4 rounded-xl font-bold text-xs flex items-center justify-center gap-2 transition-all shadow-lg shadow-[#25D366]/20 group/btn">
                            <i data-lucide="message-circle" class="w-4 h-4"></i>
                            <span>Order via WhatsApp</span>
                        </a>

                        <button @click="openInquiry(<?php echo htmlspecialchars(json_encode($prod)); ?>)"
                            class="bg-white/5 hover:bg-white/10 text-white border border-white/10 py-3 px-4 rounded-xl font-bold text-xs flex items-center justify-center gap-2 transition-all">
                            <i data-lucide="clipboard-list" class="w-4 h-4 text-primary"></i>
                            <span>Quick Inquire</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Delivery & Ordering Process -->
<section class="py-20 px-4 md:px-8 border-t border-white/10 bg-card-bg/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-wider mb-4">
                Simple & Trustworthy
            </div>
            <h2 class="text-3xl md:text-5xl font-black mb-4">How Ordering & Delivery Works</h2>
            <p class="text-slate-400 text-sm md:text-base">
                Whether you are picking up at our operations desk or need delivery sent to your village or town, we make it seamless.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-card-bg border border-white/5 p-8 rounded-3xl relative">
                <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary font-black text-xl mb-6">
                    1
                </div>
                <h3 class="text-xl font-black text-white mb-3">Order on WhatsApp / Online</h3>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Click "Order via WhatsApp" on your preferred item. Our dispatch team confirms item availability, your exact location, and warranty registration.
                </p>
            </div>

            <div class="bg-card-bg border border-white/5 p-8 rounded-3xl relative">
                <div class="w-12 h-12 bg-accent/10 rounded-2xl flex items-center justify-center text-accent font-black text-xl mb-6">
                    2
                </div>
                <h3 class="text-xl font-black text-white mb-3">Same-Day Local Dispatch</h3>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Pick up in-person at our Vihiga/Kakamega operational base, or we send via trusted courier (Easy Coach parcel, matatu courier, or rider) directly to you.
                </p>
            </div>

            <div class="bg-card-bg border border-white/5 p-8 rounded-3xl relative">
                <div class="w-12 h-12 bg-purple-500/10 rounded-2xl flex items-center justify-center text-purple-400 font-black text-xl mb-6">
                    3
                </div>
                <h3 class="text-xl font-black text-white mb-3">Free Setup & 1-Yr Warranty</h3>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Our field technicians will guide you over the phone or WhatsApp on setting up your router, UPS, or extender in under 5 minutes with zero stress.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="py-20 px-4 md:px-8 max-w-5xl mx-auto">
    <div class="text-center mb-16">
        <h2 class="text-3xl md:text-4xl font-black mb-4">Frequently Asked Questions</h2>
        <p class="text-slate-400 text-sm">Everything you need to know about purchasing equipment from KNET.</p>
    </div>

    <div class="space-y-4" x-data="{ openFaq: null }">
        <div class="bg-card-bg border border-white/5 rounded-2xl overflow-hidden">
            <button @click="openFaq = (openFaq === 1 ? null : 1)" class="w-full p-5 text-left font-bold text-white flex items-center justify-between">
                <span>Will the Mini-UPS work with my specific fiber router or Starlink?</span>
                <i data-lucide="chevron-down" :class="openFaq === 1 ? 'rotate-180' : ''" class="w-5 h-5 text-primary transition-transform"></i>
            </button>
            <div x-show="openFaq === 1" x-collapse class="px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/5 pt-4">
                Yes. Our Marsriva Mini-UPS models feature selectable multi-voltage outputs (5V, 9V, 12V DC) and include standard 5.5mm DC barrel cables that match Safaricom Home Fiber ONTs, KNET routers, Huawei, ZTE, and TP-Link devices. The KP7 model also features Gigabit POE (15V/24V) for outdoor wireless radios and CPEs.
            </div>
        </div>

        <div class="bg-card-bg border border-white/5 rounded-2xl overflow-hidden">
            <button @click="openFaq = (openFaq === 2 ? null : 2)" class="w-full p-5 text-left font-bold text-white flex items-center justify-between">
                <span>How fast is delivery to towns across Western Kenya?</span>
                <i data-lucide="chevron-down" :class="openFaq === 2 ? 'rotate-180' : ''" class="w-5 h-5 text-primary transition-transform"></i>
            </button>
            <div x-show="openFaq === 2" x-collapse class="px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/5 pt-4">
                For Vihiga (Mbale, Chavakali, Luanda, Majengo) and Kakamega town, we offer same-day collection or rider dispatch. For Kisumu, Eldoret, Bungoma, Busia, and Nairobi, parcel dispatch via Easy Coach or courier typically arrives within 2 to 4 hours on the same day.
            </div>
        </div>

        <div class="bg-card-bg border border-white/5 rounded-2xl overflow-hidden">
            <button @click="openFaq = (openFaq === 3 ? null : 3)" class="w-full p-5 text-left font-bold text-white flex items-center justify-between">
                <span>What happens if the equipment develops a fault?</span>
                <i data-lucide="chevron-down" :class="openFaq === 3 ? 'rotate-180' : ''" class="w-5 h-5 text-primary transition-transform"></i>
            </button>
            <div x-show="openFaq === 3" x-collapse class="px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/5 pt-4">
                Every router, Mini-UPS, and extender purchased from KNET carries a 12-Month Official Replacement Warranty. In the rare event of a manufacturer defect, simply reach out to our support desk for immediate testing and direct replacement.
            </div>
        </div>

        <div class="bg-card-bg border border-white/5 rounded-2xl overflow-hidden">
            <button @click="openFaq = (openFaq === 4 ? null : 4)" class="w-full p-5 text-left font-bold text-white flex items-center justify-between">
                <span>Do you offer discounts for bulk or institutional orders?</span>
                <i data-lucide="chevron-down" :class="openFaq === 4 ? 'rotate-180' : ''" class="w-5 h-5 text-primary transition-transform"></i>
            </button>
            <div x-show="openFaq === 4" x-collapse class="px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/5 pt-4">
                Yes! If you are an enterprise, school, hotel, apartment complex, or contractor ordering 3 or more units (e.g., bulk Mini-UPS for staff or multi-pack routers), contact our sales desk directly for special wholesale pricing and invoicing.
            </div>
        </div>
    </div>
</section>

<!-- Quick Order / Inquiry Modal -->
<div x-show="inquiryOpen" x-cloak
    class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/80 backdrop-blur-sm"
    x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-150"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0">

    <div @click.away="inquiryOpen = false"
        class="bg-card-bg border border-white/10 rounded-3xl p-6 md:p-8 max-w-lg w-full relative shadow-2xl">
        
        <button @click="inquiryOpen = false" class="absolute top-6 right-6 text-slate-400 hover:text-white">
            <i data-lucide="x" class="w-6 h-6"></i>
        </button>

        <div class="mb-6">
            <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-1">Quick Order & Inquiry</span>
            <h3 class="text-xl md:text-2xl font-black text-white" x-text="selectedProduct ? selectedProduct.name : ''"></h3>
            <p class="text-xs text-slate-400 mt-1">
                Price: <span class="text-accent font-bold text-sm" x-text="selectedProduct ? 'KES ' + selectedProduct.price.toLocaleString() : ''"></span>
            </p>
        </div>

        <div x-show="orderSuccess" class="bg-accent/20 border border-accent/30 text-accent p-4 rounded-xl text-center text-sm font-bold mb-4">
            🎉 Thank you! Your order request has been logged. Our dispatch team will call you within 15 minutes.
        </div>

        <div x-show="orderError" class="bg-red-500/20 border border-red-500/30 text-red-400 p-4 rounded-xl text-center text-xs font-bold mb-4" x-text="orderError">
        </div>

        <form @submit.prevent="submitOrder()" class="space-y-4" x-show="!orderSuccess">
            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Full Name *</label>
                <input type="text" x-model="orderName" required placeholder="e.g. Samuel Wanjala"
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Phone Number (M-Pesa / WhatsApp) *</label>
                <input type="tel" x-model="orderPhone" required placeholder="e.g. 07XX XXX XXX"
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Delivery Town / Area *</label>
                <input type="text" x-model="orderLocation" required placeholder="e.g. Mbale Town / Kakamega / Luanda"
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Additional Notes (Optional)</label>
                <textarea x-model="orderNotes" rows="2" placeholder="e.g. Need delivery today afternoon..."
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-primary"></textarea>
            </div>

            <button type="submit" :disabled="isSubmitting"
                class="w-full bg-primary hover:bg-primary-hover py-3.5 rounded-xl font-bold text-sm text-white transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                <span x-show="!isSubmitting">Confirm Order Request</span>
                <span x-show="isSubmitting" class="animate-spin w-4 h-4 border-2 border-white/30 border-t-white rounded-full"></span>
            </button>

            <div class="text-center pt-2">
                <span class="text-xs text-slate-500">Or order directly via </span>
                <a :href="'https://wa.me/<?php echo str_replace(['+', ' '], '', SITE_WHATSAPP); ?>?text=' + encodeURIComponent('Hello KNET, I want to order ' + (selectedProduct ? selectedProduct.name : 'hardware'))" target="_blank"
                    class="text-xs text-[#25D366] hover:underline font-bold">WhatsApp Here</a>
            </div>
        </form>
    </div>
</div>

</div><!-- End Alpine.js Container -->

<?php include INCLUDES_PATH . '/footer.php'; ?>
