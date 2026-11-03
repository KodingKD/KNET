<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Hardware & Energy Storage Store | KNET Networks";
$page_description = "Genuine Wi-Fi routers, Vestwoods & EcoFlow power backups, Mini-UPS blackout shields, MikroTik, Ubiquiti, and fiber infrastructure in Western Kenya with live daily pricing via WhatsApp.";
$page_keywords = "Vestwoods Battery Kenya, EcoFlow Kenya, Mini UPS Kenya, Tenda F6 Router Kenya, MikroTik L009 Vihiga, Ubiquiti LiteBeam Kakamega, Starlink Ethernet Adapter Kenya, Buy Fiber Cable Western Kenya";

include INCLUDES_PATH . '/header.php';

// Safe WhatsApp Number
$wa_number = defined('WHATSAPP_NUMBER') ? WHATSAPP_NUMBER : (defined('SITE_WHATSAPP') ? SITE_WHATSAPP : '254743820177');
$wa_clean = str_replace(['+', ' '], '', $wa_number);

// Product Catalog Array (Option A: Live Daily Market Quotes)
$products = [
    // 1. Power Resilience & Energy Storage (Vestwoods, EcoFlow, Marsriva)
    [
        'id' => 'vestwoods-1kva',
        'category' => 'power',
        'name' => 'Vestwoods 1kVA / 1.2kWh Lithium Energy Storage Station',
        'subtitle' => 'Heavy-Duty LiFePO4 Inverter Backup • Powers Routers, Laptops & Lights for 8–14+ Hours',
        'badge' => '⚡ 1kVA Inverter • LiFePO4 Battery',
        'badge_class' => 'bg-amber-500/10 text-amber-400 border-amber-500/20',
        'image' => null,
        'icon' => 'zap',
        'color' => 'from-amber-500/20 to-orange-500/5',
        'icon_color' => 'text-amber-400',
        'specs' => [
            '1kVA (1000W) Pure Sine Wave Inverter Output (safe for sensitive electronics)',
            'Long-life LiFePO4 Lithium battery cell chemistry (4,000+ deep cycles / 10-yr lifespan)',
            'Powers Wi-Fi routers, laptops, monitors, LED lighting, and TVs simultaneously',
            'Instant automatic switchover (< 10ms UPS mode) during Kenya Power blackouts'
        ],
        'highlight' => 'Industrial-grade energy storage engineered for home office & telecom'
    ],
    [
        'id' => 'ecoflow-power-station',
        'category' => 'power',
        'name' => 'EcoFlow Smart Portable Lithium Power Station',
        'subtitle' => 'Ultra-Fast 60-Min AC Recharge • The Gold Standard in Portable Blackout Backup',
        'badge' => '🚀 60-Min Fast Charge • EcoFlow',
        'badge_class' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
        'image' => null,
        'icon' => 'battery-charging',
        'color' => 'from-blue-500/20 to-cyan-500/5',
        'icon_color' => 'text-blue-400',
        'specs' => [
            'Patented X-Stream AC Fast-Charging: 0% to 100% in under 60 minutes',
            'LiFePO4 battery providing 3,000+ cycles to 80% capacity (10+ years of daily use)',
            'Multiple outputs: 220V AC wall socket, USB-C 100W PD, and 12V DC ports',
            'Smart smartphone app control via Wi-Fi & Bluetooth with real-time monitoring'
        ],
        'highlight' => 'The ultimate power backup for remote working, professionals & video creators'
    ],
    [
        'id' => 'marsriva-kp3',
        'category' => 'power',
        'name' => 'Marsriva KP3 Smart Mini-UPS (10,000mAh)',
        'subtitle' => '4-6 Hour Blackout Power Shield for Wi-Fi Routers & Optical ONUs',
        'badge' => '🔥 Top Seller • Router Backup',
        'badge_class' => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'image' => null,
        'icon' => 'battery-charging',
        'color' => 'from-emerald-500/20 to-teal-500/5',
        'icon_color' => 'text-emerald-400',
        'specs' => [
            '10,000mAh High-Density Lithium Battery (4–6 hrs runtime)',
            'Multi-Voltage Output: 5V USB, 9V DC, 12V DC selector switch',
            'Zero Cutover Delay: prevents router reboot and dropped video calls',
            'Y-Splitter cable included: powers ONT + Router simultaneously'
        ],
        'highlight' => 'Tested and verified on Safaricom, KNET, Airtel & Zuku Routers'
    ],
    [
        'id' => 'marsriva-kp7-poe',
        'category' => 'power',
        'name' => 'Marsriva KP7 Heavy-Duty POE + DC Mini-UPS (16,000mAh)',
        'subtitle' => '6-8+ Hour High-Capacity Backup for Routers & Wireless Antennas',
        'badge' => '⚡ POE + DC • Heavy Duty',
        'badge_class' => 'bg-orange-500/10 text-orange-400 border-orange-500/20',
        'image' => null,
        'icon' => 'zap',
        'color' => 'from-orange-500/20 to-amber-500/5',
        'icon_color' => 'text-orange-400',
        'specs' => [
            'Massive 16,000mAh Battery Capacity (6–8+ hrs runtime)',
            'Gigabit POE Output (15V / 24V) for wireless CPEs & antennas',
            'Multi-Voltage DC (9V / 12V) + 5V USB Quick Charge',
            'Heavy-duty fire-retardant metal housing with LED power gauge'
        ],
        'highlight' => 'Ideal for outdoor P2P antennas, CCTV NVRs & Starlink gear'
    ],

    // 2. Home & Office Wi-Fi Routers & ONUs
    [
        'id' => 'tenda-f6',
        'category' => 'routers',
        'name' => 'Tenda F6 N300 Wireless Router',
        'subtitle' => '4 High-Gain Antennas • Ideal Budget Home & Small Office Wi-Fi',
        'badge' => '⭐ High Value • 4x 5dBi Antennas',
        'badge_class' => 'bg-orange-500/10 text-orange-400 border-orange-500/20',
        'image' => 'assets/images/products/Tenda F6 N300 router.jpg',
        'icon' => 'router',
        'color' => 'from-orange-500/20 to-amber-500/5',
        'icon_color' => 'text-orange-400',
        'specs' => [
            '300Mbps Wi-Fi speed over 2.4GHz with Qualcomm chip',
            '4 x 5dBi external omnidirectional antennas for superior wall penetration',
            'Supports Router Mode, WISP Mode, Universal Repeater & AP Mode',
            'Built-in bandwidth control, timer switch, and parental controls'
        ],
        'highlight' => 'Perfect reliable starter router for standard home packages'
    ],
    [
        'id' => 'huawei-hg8546m-onu',
        'category' => 'routers',
        'name' => 'Huawei HG8546M GPON / XPON Optical ONU',
        'subtitle' => 'Standard FTTH Subscriber Optical Terminal with Built-in Wi-Fi',
        'badge' => '🌐 FTTH Standard • GPON/XPON',
        'badge_class' => 'bg-red-500/10 text-red-400 border-red-500/20',
        'image' => 'assets/images/products/Ont-Hg8546m-8546-FTTH-Gpon-ONU-Fiber.jpg',
        'icon' => 'network',
        'color' => 'from-red-500/20 to-rose-500/5',
        'icon_color' => 'text-red-400',
        'specs' => [
            'SC/UPC optical interface compatible with GPON & EPON networks',
            '1 x Gigabit GE Port + 3 x Fast FE LAN Ports + 1 x POTS Phone Port',
            'Integrated 300Mbps 2.4GHz Wi-Fi with dual external antennas',
            'Supports OMCI, OAM, TR-069 remote management & plug-and-play'
        ],
        'highlight' => 'Standard replacement unit for fiber ISP subscribers'
    ],
    [
        'id' => 'tplink-archer-c6',
        'category' => 'routers',
        'name' => 'TP-Link Archer C6 (AC1200) Dual-Band Gigabit Router',
        'subtitle' => 'High-Speed Fiber Upgrade • Eliminates Wi-Fi Bottlenecks',
        'badge' => '🚀 Full Speed • Gigabit Ports',
        'badge_class' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
        'image' => null,
        'icon' => 'router',
        'color' => 'from-blue-500/20 to-cyan-500/5',
        'icon_color' => 'text-blue-400',
        'specs' => [
            'Dual-Band AC1200: 867Mbps (5GHz) + 300Mbps (2.4GHz)',
            '4 x Full Gigabit LAN Ports + 1 x Gigabit WAN Port',
            '4 High-Gain Antennas with Beamforming & MU-MIMO',
            'Supports Access Point (AP) Mode & TP-Link OneMesh'
        ],
        'highlight' => 'Unlocks true speed for 15Mbps to 100Mbps fiber connections'
    ],
    [
        'id' => 'ac1200-extender',
        'category' => 'routers',
        'name' => 'Dual-Band AC1200 Wall-Plug Wi-Fi Range Extender',
        'subtitle' => 'Eliminates Dead Zones in Bedrooms, Balconies & Compounds',
        'badge' => '📶 Dead-Zone Killer • One-Touch WPS',
        'badge_class' => 'bg-teal-500/10 text-teal-400 border-teal-500/20',
        'image' => null,
        'icon' => 'radio',
        'color' => 'from-teal-500/20 to-emerald-500/5',
        'icon_color' => 'text-teal-400',
        'specs' => [
            'Dual-Band AC1200 (867Mbps on 5GHz / 300Mbps on 2.4GHz)',
            'Plugs into any AC socket with smart location LED indicator',
            'One-Touch WPS connection to any existing router in 60 seconds',
            'Ethernet port to connect Smart TVs, decoders, or gaming rigs'
        ],
        'highlight' => 'Works with all ISP fiber routers with zero complicated setup'
    ],

    // 3. MikroTik Enterprise & WISP Routing
    [
        'id' => 'mikrotik-l009',
        'category' => 'mikrotik',
        'name' => 'MikroTik L009UiGS-RM Gigabit Rackmount Router',
        'subtitle' => 'Dual-Core ARM CPU • 8x Gigabit Ports • 2.5G SFP Cage',
        'badge' => '🛡️ Enterprise • SFP 2.5G',
        'badge_class' => 'bg-cyan-500/10 text-cyan-400 border-cyan-500/20',
        'image' => 'assets/images/products/L009UiGS - RM.webp',
        'icon' => 'server',
        'color' => 'from-cyan-500/20 to-blue-500/5',
        'icon_color' => 'text-cyan-400',
        'specs' => [
            'Dual-Core IPQ-5018 800MHz ARM CPU with 512MB RAM',
            '8 x Gigabit Ethernet Ports with POE-in (Port 1) & POE-out (Port 8)',
            '1 x 2.5G SFP cage for high-speed fiber uplink integration',
            'Full 1U rackmount enclosure with high-efficiency passive cooling'
        ],
        'highlight' => 'The modern powerhouse replacement for the legacy RB2011'
    ],
    [
        'id' => 'mikrotik-rb4011',
        'category' => 'mikrotik',
        'name' => 'MikroTik RB4011iGS+RM 10-Port Gigabit Router',
        'subtitle' => 'Quad-Core 1.4GHz • 10x Gigabit Ports • 10Gbps SFP+ Cage',
        'badge' => '⚡ Quad-Core • 10Gbps SFP+',
        'badge_class' => 'bg-indigo-500/10 text-indigo-400 border-indigo-500/20',
        'image' => 'assets/images/products/RB4011iGS+RM.webp',
        'icon' => 'cpu',
        'color' => 'from-indigo-500/20 to-purple-500/5',
        'icon_color' => 'text-indigo-400',
        'specs' => [
            'Cortex A15 Quad-Core 1.4GHz CPU with 1GB RAM & hardware IPsec',
            '10 x Gigabit Ethernet Ports + 1 x 10Gbps SFP+ cage',
            'Matte black solid metal enclosure with dual rackmount ears',
            'Capable of routing millions of packets per second with RouterOS v7'
        ],
        'highlight' => 'Ideal primary core router for ISPs, campuses, and hotels'
    ],
    [
        'id' => 'mikrotik-rb951ui',
        'category' => 'mikrotik',
        'name' => 'MikroTik RB951Ui-2HnD SOHO Router / AP',
        'subtitle' => 'Proven Workhorse for Hotspots, PPPoE Server & Branch VPNs',
        'badge' => '🏢 SOHO Classic • Hotspot Ready',
        'badge_class' => 'bg-sky-500/10 text-sky-400 border-sky-500/20',
        'image' => 'assets/images/products/RB951Ui - 2HnD.webp',
        'icon' => 'wifi',
        'color' => 'from-sky-500/20 to-blue-500/5',
        'icon_color' => 'text-sky-400',
        'specs' => [
            'Atheros 600MHz CPU, 128MB RAM, 5 x 10/100 Ethernet Ports',
            'High-power 1000mW 2.4GHz 802.11b/g/n wireless onboard',
            'PoE output on Port 5 (powers external radio or IP camera)',
            'Built-in USB port for 3G/4G failover modem integration'
        ],
        'highlight' => 'The #1 choice for cyber cafés, Wi-Fi voucher systems & clinics'
    ],

    // 4. Managed Switches & Central Office OLTs
    [
        'id' => 'mikrotik-crs354-48g',
        'category' => 'switches',
        'name' => 'MikroTik CRS354-48G-4S+2Q+RM 48-Port Switch',
        'subtitle' => 'High-Density 48x Gigabit • 4x 10G SFP+ • 2x 40G QSFP+ Aggregation',
        'badge' => '⚡ 48x Gigabit • Dual 40G QSFP+',
        'badge_class' => 'bg-indigo-500/10 text-indigo-400 border-indigo-500/20',
        'image' => 'assets/images/products/CRS354-48G-4S+2Q+RM 48 Port Switch.webp',
        'icon' => 'server',
        'color' => 'from-indigo-500/20 to-purple-500/5',
        'icon_color' => 'text-indigo-400',
        'specs' => [
            '48 x 10/100/1000 Mbps Gigabit Ethernet Ports with non-blocking throughput',
            '4 x 10G SFP+ optical ports for high-speed fiber uplink distribution',
            '2 x 40G QSFP+ ultra-fast interfaces for data center / core backhaul',
            'Dual hot-swappable redundant power supplies for 100% mission-critical uptime'
        ],
        'highlight' => 'The premier core aggregation switch for ISPs, universities & enterprises'
    ],
    [
        'id' => 'hioso-gpon-olt',
        'category' => 'switches',
        'name' => 'HiOSO 2-PON / 4-PON Central Office OLT (HA7302 / HA7304)',
        'subtitle' => 'Carrier Central Optical Line Terminal • Powers 128 to 256 FTTH Subscribers',
        'badge' => '🌐 FTTH Core • 1:128 Split OLT',
        'badge_class' => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'image' => 'assets/images/products/HA7302CST HiOSO Olt 2 Pon.jpg',
        'icon' => 'network',
        'color' => 'from-emerald-500/20 to-teal-500/5',
        'icon_color' => 'text-emerald-400',
        'specs' => [
            '2 or 4 PON optical ports supporting up to 1:64 / 1:128 split ratio per PON',
            'Uplink: Gigabit Combo RJ45 ports + 10G SFP uplink slots for core routers',
            'Comprehensive Layer 2/3 management, VLAN tag/trunk, DBA bandwidth allocation',
            'Standard 19-inch 1U rackmount chassis with built-in cooling & AC power'
        ],
        'highlight' => 'Turnkey central optical terminal for residential estates & WISP networks'
    ],
    [
        'id' => 'hioso-poe-switch',
        'category' => 'switches',
        'name' => 'HiOSO Gigabit Managed PoE+ Network Switch',
        'subtitle' => 'High-Power IEEE 802.3af/at PoE+ with Gigabit Optical SFP Uplinks',
        'badge' => '🔌 PoE+ 30W/Port • SFP Uplink',
        'badge_class' => 'bg-cyan-500/10 text-cyan-400 border-cyan-500/20',
        'image' => 'assets/images/products/Hioso Ethernet Switch.jpg',
        'icon' => 'layers',
        'color' => 'from-cyan-500/20 to-blue-500/5',
        'icon_color' => 'text-cyan-400',
        'specs' => [
            '8 or 16 Gigabit PoE+ ports delivering up to 30W per port for cameras & APs',
            '2 x Gigabit SFP optical uplink ports for long-range backbone transmission',
            '4KV lightning surge protection on all ports for outdoor mast safety',
            'Hardware VLAN isolation switch prevents broadcast storms across subscribers'
        ],
        'highlight' => 'Ideal power and data switch for CCTV surveillance & wireless base stations'
    ],
    [
        'id' => 'olt-sfp-transceiver',
        'category' => 'switches',
        'name' => 'High-Power GPON & EPON OLT SFP Transceivers (Class C++)',
        'subtitle' => 'High TX Power Optical Transceivers for Extended 20km FTTH Reach',
        'badge' => '💎 Class C++ • +7dBm High TX',
        'badge_class' => 'bg-yellow-500/10 text-yellow-400 border-yellow-500/20',
        'image' => 'assets/images/products/EPON OLT SFP.jpg',
        'icon' => 'zap',
        'color' => 'from-yellow-500/20 to-amber-500/5',
        'icon_color' => 'text-yellow-400',
        'specs' => [
            'Class C++ optical budget: +4.5dBm to +7.5dBm transmit power',
            'SC/UPC simplex single-mode optical connector (1490nm TX / 1310nm RX)',
            'Ultra-high receiver sensitivity (-32dBm) supports high 1:64 and 1:128 splits',
            'Hot-pluggable SFP footprint fully compatible with HiOSO, Huawei, and ZTE OLTs'
        ],
        'highlight' => 'Essential high-budget optical modules for rural and long-reach fiber routes'
    ],

    // 5. Ubiquiti Wireless Links & P2P
    [
        'id' => 'ubiquiti-litebeam-m5',
        'category' => 'ubiquiti',
        'name' => 'Ubiquiti LiteBeam M5 (LBE-M5-23) 5GHz 23dBi',
        'subtitle' => 'Ultra-Lightweight 15km+ Point-to-Point Long-Range Wireless Link',
        'badge' => '📡 15km+ Range • 23dBi Antenna',
        'badge_class' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
        'image' => 'assets/images/products/Ubiquiti airMax Litebeam M5.webp',
        'icon' => 'radio-tower',
        'color' => 'from-blue-500/20 to-cyan-500/5',
        'icon_color' => 'text-blue-400',
        'specs' => [
            '5GHz airMAX operating frequency delivering 100Mbps+ real TCP/IP throughput',
            'High-gain 23dBi directional antenna with InnerFeed technology',
            'Ball-joint 3-axis alignment mount for effortless pole pointing',
            'Lightweight, aerodynamic design built to withstand severe wind storms'
        ],
        'highlight' => 'Ideal for bridging internet to remote farms, schools & outposts'
    ],
    [
        'id' => 'ubiquiti-nanostation-loco-m2',
        'category' => 'ubiquiti',
        'name' => 'Ubiquiti NanoStation Loco M2 / M5 Wireless CPE',
        'subtitle' => 'Compact Indoor/Outdoor P2P & Client Radio for Branch Connectivity',
        'badge' => '🎯 Compact airMAX • 5km+ Link',
        'badge_class' => 'bg-teal-500/10 text-teal-400 border-teal-500/20',
        'image' => 'assets/images/products/Ubiquiti Nanostation Loco M2.webp',
        'icon' => 'radio',
        'color' => 'from-teal-500/20 to-emerald-500/5',
        'icon_color' => 'text-teal-400',
        'specs' => [
            'Integrated dual-polarity directional panel antenna (8.5dBi / 13dBi)',
            'Intelligent QoS priority for seamless voice & video streaming',
            'All-weather UV stabilized plastic enclosure with passive PoE injector',
            'Supports Point-to-Point (PtP) and Point-to-MultiPoint (PtMP) client links'
        ],
        'highlight' => 'Trusted workhorse for short-to-medium distance wireless extension'
    ],

    // 5. Cabling & Infrastructure
    [
        'id' => 'drop-cable-1km',
        'category' => 'infrastructure',
        'name' => '1km Drum 1-Core / 2-Core Aerial Drop Fiber Cable',
        'subtitle' => 'Self-Supporting Steel Messenger • G.657A2 Low Bend Sensitivity',
        'badge' => '🧵 1km Drum • G.657A2 Aerial',
        'badge_class' => 'bg-yellow-500/10 text-yellow-400 border-yellow-500/20',
        'image' => 'assets/images/products/1km Drop Cable.webp',
        'icon' => 'disc',
        'color' => 'from-yellow-500/20 to-amber-500/5',
        'icon_color' => 'text-yellow-400',
        'specs' => [
            '1000 Metre continuous drum with meter-mark stamping along sheath',
            'High-tensile galvanized steel messenger wire for long pole spans',
            'Two parallel FRP strength members protecting the central optical core',
            'LSZH UV-resistant outer jacket built for direct sun & rain exposure'
        ],
        'highlight' => 'High-performance drum for FTTH last-mile subscriber drops'
    ],
    [
        'id' => 'easenet-cat6-305m',
        'category' => 'infrastructure',
        'name' => 'Easenet 305m Outdoor Pure Copper Cat6 Cable Roll',
        'subtitle' => 'Double-Jacketed 24AWG 100% Solid Annealed Pure Copper',
        'badge' => '🔌 305m Drum • 100% Pure Copper',
        'badge_class' => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'image' => 'assets/images/products/Easenet-Outdoor-Cat-6-UTP-Pure-Copper-Ethernet-Cable-305m.webp',
        'icon' => 'cable',
        'color' => 'from-emerald-500/20 to-teal-500/5',
        'icon_color' => 'text-emerald-400',
        'specs' => [
            '305 Metre easy-pull box with sequential meter printing',
            '100% Solid bare copper conductors (not cheap copper-clad aluminum/CCA)',
            'Dual PE outer jacket for full waterproof & UV outdoor protection',
            'Passes Fluke test up to 100m for PoE security cameras & gigabit links'
        ],
        'highlight' => 'The industry benchmark for outdoor IP cameras and tower drops'
    ],
    [
        'id' => 'wall-cabinet-rack',
        'category' => 'infrastructure',
        'name' => '6U / 9U Wall Mount Data Server Cabinets',
        'subtitle' => 'Toughened Glass Door • Removable Side Panels • Lockable Keys',
        'badge' => '🗄️ Heavy Gauge Steel • 6U / 9U',
        'badge_class' => 'bg-slate-500/10 text-slate-300 border-slate-500/20',
        'image' => 'assets/images/products/6U Wall Mount Rack.webp',
        'icon' => 'box',
        'color' => 'from-slate-500/20 to-slate-500/5',
        'icon_color' => 'text-slate-300',
        'specs' => [
            'Available in 6U (450mm/600mm depth) and 9U wall-mounted formats',
            'Smoked toughened glass front door with secure cylinder key locks',
            'Top and bottom cable entry gland holes with dust-proof covers',
            'Houses patch panels, network switches, routers, and Mini-UPS neatly'
        ],
        'highlight' => 'Keeps client server gear dust-free, organized, and tamper-proof'
    ],
    [
        'id' => 'fat-box-loaded',
        'category' => 'infrastructure',
        'name' => 'FAT Fiber Access Terminal Box (1:8 / 1:16 Loaded)',
        'subtitle' => 'IP65 Weatherproof Distribution Box with PLC Splitter & Adapters',
        'badge' => '📦 IP65 Pole / Wall • Pre-Loaded',
        'badge_class' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
        'image' => 'assets/images/products/FAT 1 16.webp',
        'icon' => 'layers',
        'color' => 'from-blue-500/20 to-cyan-500/5',
        'icon_color' => 'text-blue-400',
        'specs' => [
            'High-strength anti-aging industrial polymer casing with rubber gasket',
            'Available loaded with 1:8 or 1:16 SC/UPC micro PLC optical splitter',
            'Dedicated splice tray, cable fixation brackets, and drop outlets',
            'Complete with pole mounting steel straps and wall anchoring screws'
        ],
        'highlight' => 'Essential distribution hub for neighborhood fiber rollouts'
    ],

    // 6. Starlink & Satellite Gear
    [
        'id' => 'starlink-gen2-adapter',
        'category' => 'starlink',
        'name' => 'Starlink Gen 2 Gigabit Ethernet Adapter (OEM Spec)',
        'subtitle' => 'Direct RJ45 Gigabit Port for External Routers, Switches & CCTV',
        'badge' => '🛰️ Starlink Essential • 1000Mbps',
        'badge_class' => 'bg-sky-500/10 text-sky-400 border-sky-500/20',
        'image' => null,
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
        formData.append('email', 'equipment-quote@knet.co.ke');
        formData.append('service_interest', 'Hardware Quote: ' + this.selectedProduct.name);
        formData.append('corridor', this.orderLocation);
        formData.append('message', 'Product Quote Request: ' + this.selectedProduct.name + '\nClient Location: ' + this.orderLocation + '\nClient Phone: ' + this.orderPhone + '\nNotes: ' + this.orderNotes);

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
                this.orderError = data.message || 'Failed to submit quote request. Please inquire via WhatsApp.';
            }
        })
        .catch(() => {
            this.isSubmitting = false;
            this.orderError = 'Network error. Please tap WhatsApp to get today\'s quote.';
        });
    }
}">

<!-- Hero Header Section -->
<section class="relative py-20 px-4 md:px-8 overflow-hidden bg-gradient-to-b from-primary/15 via-transparent to-transparent">
    <div class="max-w-7xl mx-auto text-center relative z-10">
        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-accent/10 border border-accent/20 text-accent text-xs uppercase font-extrabold tracking-widest mb-6">
            <i data-lucide="shield-check" class="w-4 h-4"></i> Official KNET Hardware & Energy Solutions
        </div>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-black mb-6 leading-tight tracking-tight">
            Genuine Telecom Gear & <span class="text-accent">Blackout Solutions</span>.
        </h1>
        <p class="text-lg md:text-xl text-slate-300 max-w-3xl mx-auto mb-10 leading-relaxed font-light">
            Tested and deployed by KNET network engineers. Delivered across Western Kenya with local pickup in Vihiga, Kakamega, and nationwide courier dispatch.
        </p>

        <!-- Live Daily Sourcing Explainer Card -->
        <div class="bg-card-bg/80 border border-white/10 p-6 md:p-8 rounded-3xl max-w-4xl mx-auto text-left relative overflow-hidden shadow-2xl mb-12">
            <div class="flex flex-col md:flex-row items-start md:items-center gap-5">
                <div class="w-14 h-14 rounded-2xl bg-accent/15 text-accent flex items-center justify-center shrink-0">
                    <i data-lucide="sparkles" class="w-7 h-7"></i>
                </div>
                <div class="flex-1">
                    <div class="flex items-center gap-2 mb-1.5">
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 animate-pulse"></span>
                        <h3 class="text-lg font-black text-white">Live Daily Market Rates (Zero Outdated Markup)</h3>
                    </div>
                    <p class="text-xs md:text-sm text-slate-300 leading-relaxed">
                        Because global freight, container arrivals, and distributor foreign exchange rates fluctuate, we quote competitive, live daily batch prices directly via WhatsApp rather than locked static figures. Tap any product below to confirm today's stock availability, best rate, and same-day delivery to your town in under 2 minutes.
                    </p>
                </div>
                <a href="https://wa.me/<?php echo $wa_clean; ?>?text=<?php echo urlencode("Hello KNET Equipment Desk, I would like to inquire about today's price and stock for networking equipment."); ?>"
                    target="_blank" rel="noopener noreferrer"
                    class="bg-[#25D366] hover:bg-[#20ba59] text-white py-3 px-6 rounded-xl font-bold text-xs flex items-center gap-2 shrink-0 shadow-lg shadow-[#25D366]/20 transition-all">
                    <i data-lucide="message-circle" class="w-4 h-4"></i>
                    <span>Inquire Live Stock</span>
                </a>
            </div>
        </div>

        <!-- Trust Pillars -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 max-w-5xl mx-auto text-left">
            <div class="bg-card-bg/60 border border-white/5 p-4 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-emerald-500/10 text-emerald-400 flex items-center justify-center shrink-0">
                    <i data-lucide="check-circle-2" class="w-5 h-5"></i>
                </div>
                <div>
                    <span class="block text-xs font-bold text-white">100% Genuine</span>
                    <span class="text-[11px] text-slate-400">Verified Brand Warranty</span>
                </div>
            </div>
            <div class="bg-card-bg/60 border border-white/5 p-4 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-primary/10 text-primary flex items-center justify-center shrink-0">
                    <i data-lucide="truck" class="w-5 h-5"></i>
                </div>
                <div>
                    <span class="block text-xs font-bold text-white">Local Western Dispatch</span>
                    <span class="text-[11px] text-slate-400">Mbale, Kakamega & Regional</span>
                </div>
            </div>
            <div class="bg-card-bg/60 border border-white/5 p-4 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-accent/10 text-accent flex items-center justify-center shrink-0">
                    <i data-lucide="wrench" class="w-5 h-5"></i>
                </div>
                <div>
                    <span class="block text-xs font-bold text-white">Optional Tech Setup</span>
                    <span class="text-[11px] text-slate-400">Assistance upon request</span>
                </div>
            </div>
            <div class="bg-card-bg/60 border border-white/5 p-4 rounded-2xl flex items-center gap-3">
                <div class="w-10 h-10 rounded-xl bg-purple-500/10 text-purple-400 flex items-center justify-center shrink-0">
                    <i data-lucide="credit-card" class="w-5 h-5"></i>
                </div>
                <div>
                    <span class="block text-xs font-bold text-white">Cash With Order</span>
                    <span class="text-[11px] text-slate-400">Terms: M-Pesa on order</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Category Filter Tabs -->
<section id="catalog-section" class="sticky top-20 z-30 bg-dark-bg/95 backdrop-blur-md border-y border-white/10 py-4 px-4 md:px-8 mb-12">
    <div class="max-w-7xl mx-auto flex items-center justify-start md:justify-center gap-2 overflow-x-auto no-scrollbar py-1">
        <button @click="activeCategory = 'all'"
            :class="activeCategory === 'all' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="grid" class="w-4 h-4"></i> All Products (<?php echo count($products); ?>)
        </button>
        <button @click="activeCategory = 'power'"
            :class="activeCategory === 'power' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="battery-charging" class="w-4 h-4 text-emerald-400"></i> Energy & Mini-UPS
        </button>
        <button @click="activeCategory = 'routers'"
            :class="activeCategory === 'routers' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="router" class="w-4 h-4 text-orange-400"></i> Wi-Fi & ONUs
        </button>
        <button @click="activeCategory = 'switches'"
            :class="activeCategory === 'switches' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="layers" class="w-4 h-4 text-indigo-400"></i> Switches & OLTs
        </button>
        <button @click="activeCategory = 'mikrotik'"
            :class="activeCategory === 'mikrotik' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="server" class="w-4 h-4 text-cyan-400"></i> MikroTik Enterprise
        </button>
        <button @click="activeCategory = 'ubiquiti'"
            :class="activeCategory === 'ubiquiti' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="radio-tower" class="w-4 h-4 text-blue-400"></i> Ubiquiti Wireless
        </button>
        <button @click="activeCategory = 'infrastructure'"
            :class="activeCategory === 'infrastructure' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="disc" class="w-4 h-4 text-yellow-400"></i> Fiber & Cabling
        </button>
        <button @click="activeCategory = 'starlink'"
            :class="activeCategory === 'starlink' ? 'bg-primary text-white shadow-lg shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
            class="px-5 py-2.5 rounded-xl text-xs md:text-sm whitespace-nowrap transition-all flex items-center gap-2">
            <i data-lucide="satellite-dish" class="w-4 h-4 text-sky-400"></i> Starlink Gear
        </button>
    </div>
</section>

<!-- Product Catalog Grid -->
<section class="max-w-7xl mx-auto px-4 md:px-8 mb-24">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php foreach ($products as $prod): ?>
            <?php 
                $wa_text = urlencode("Hello KNET Equipment Desk, what is today's current price and stock availability for the " . $prod['name'] . " for delivery to my location?");
                $wa_url = "https://wa.me/" . $wa_clean . "?text=" . $wa_text;
            ?>
            <div x-show="activeCategory === 'all' || activeCategory === '<?php echo $prod['category']; ?>'"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                class="bg-card-bg border border-white/5 hover:border-primary/40 rounded-3xl p-6 md:p-8 flex flex-col justify-between transition-all duration-300 group hover:-translate-y-1 relative overflow-hidden shadow-xl">
                
                <!-- Ambient Glow Effect -->
                <div class="absolute -top-12 -right-12 w-44 h-44 bg-gradient-to-br <?php echo $prod['color']; ?> rounded-full blur-3xl pointer-events-none group-hover:scale-150 transition-transform duration-500"></div>

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

                    <!-- Product Image (if available) -->
                    <?php if (!empty($prod['image'])): ?>
                        <div class="w-full h-44 mb-6 rounded-2xl bg-dark-bg/60 border border-white/5 flex items-center justify-center p-4 overflow-hidden relative group-hover:border-primary/20 transition-all">
                            <img src="<?php echo htmlspecialchars($prod['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($prod['name']); ?>" 
                                 class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300"
                                 loading="lazy">
                        </div>
                    <?php endif; ?>

                    <!-- Title & Subtitle -->
                    <h3 class="text-xl font-black text-white mb-2 leading-snug group-hover:text-primary transition-colors">
                        <?php echo htmlspecialchars($prod['name']); ?>
                    </h3>
                    <p class="text-xs text-slate-400 mb-5 font-medium leading-relaxed">
                        <?php echo htmlspecialchars($prod['subtitle']); ?>
                    </p>

                    <!-- Key Specs Checklist -->
                    <div class="space-y-2 mb-6 bg-dark-bg/50 border border-white/5 rounded-2xl p-4">
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

                <!-- Price Status & CTAs (Option A: Live Quote Trigger) -->
                <div class="pt-5 border-t border-white/10 relative z-10">
                    <!-- Live Daily Rate Indicator -->
                    <div class="flex items-center justify-between mb-4 bg-white/5 border border-white/5 px-3.5 py-2.5 rounded-xl">
                        <div class="flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                            <span class="text-xs font-bold text-white">Daily Live Rate:</span>
                        </div>
                        <span class="text-xs font-semibold text-accent">Tap for Today's Price</span>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col gap-2.5">
                        <a href="<?php echo $wa_url; ?>" target="_blank" rel="noopener noreferrer"
                            class="w-full bg-[#25D366] hover:bg-[#20ba59] text-white py-3.5 px-4 rounded-xl font-bold text-xs flex items-center justify-center gap-2 transition-all shadow-lg shadow-[#25D366]/20 group/btn">
                            <i data-lucide="message-circle" class="w-4 h-4"></i>
                            <span>Check Today's Price on WhatsApp</span>
                        </a>

                        <button @click="openInquiry(<?php echo htmlspecialchars(json_encode($prod)); ?>)"
                            class="w-full bg-white/5 hover:bg-white/10 text-slate-300 border border-white/10 py-2.5 px-4 rounded-xl font-semibold text-xs flex items-center justify-center gap-2 transition-all">
                            <i data-lucide="clipboard-list" class="w-4 h-4 text-primary"></i>
                            <span>Request Callback / Quote</span>
                        </button>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Delivery & Logistics Process -->
<section class="py-20 px-4 md:px-8 border-t border-white/10 bg-card-bg/30">
    <div class="max-w-7xl mx-auto">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 border border-primary/20 text-primary text-xs font-bold uppercase tracking-wider mb-4">
                Transparent & Hassle-Free
            </div>
            <h2 class="text-3xl md:text-5xl font-black mb-4">How Ordering & Delivery Works</h2>
            <p class="text-slate-400 text-sm md:text-base">
                Whether you need a single router for your home or 1km of fiber cable for a field project, we keep it simple.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-card-bg border border-white/5 p-8 rounded-3xl relative">
                <div class="w-12 h-12 bg-primary/10 rounded-2xl flex items-center justify-center text-primary font-black text-xl mb-6">
                    1
                </div>
                <h3 class="text-xl font-black text-white mb-3">Live WhatsApp Check</h3>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Click "Check Today's Price" on any item. We immediately confirm current batch stock, today's best price, and dispatch time. Terms are cash with order.
                </p>
            </div>

            <div class="bg-card-bg border border-white/5 p-8 rounded-3xl relative">
                <div class="w-12 h-12 bg-accent/10 rounded-2xl flex items-center justify-center text-accent font-black text-xl mb-6">
                    2
                </div>
                <h3 class="text-xl font-black text-white mb-3">Same-Day Local Dispatch</h3>
                <p class="text-sm text-slate-400 leading-relaxed">
                    Pick up in-person at our Vihiga or Kakamega operational base, or we send via trusted courier (Easy Coach, Matatu parcel, or local rider).
                </p>
            </div>

            <div class="bg-card-bg border border-white/5 p-8 rounded-3xl relative">
                <div class="w-12 h-12 bg-purple-500/10 rounded-2xl flex items-center justify-center text-purple-400 font-black text-xl mb-6">
                    3
                </div>
                <h3 class="text-xl font-black text-white mb-3">1-Yr Warranty & Optional Setup</h3>
                <p class="text-sm text-slate-400 leading-relaxed">
                    All hardware includes a 12-month manufacturer replacement warranty. Optional professional technician installation and configuration are available upon request.
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
                <span>Why do you provide live pricing on WhatsApp instead of static prices?</span>
                <i data-lucide="chevron-down" :class="openFaq === 1 ? 'rotate-180' : ''" class="w-5 h-5 text-primary transition-transform"></i>
            </button>
            <div x-show="openFaq === 1" x-collapse class="px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/5 pt-4">
                In Kenya, telecommunications hardware, batteries, and cabling fluctuate due to container shipping cycles, import duties, and foreign exchange movements. By quoting directly on WhatsApp, we guarantee you get the freshest batch price from our verified distributor partners without outdated website markups.
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
                <span>Are these products covered by warranty?</span>
                <i data-lucide="chevron-down" :class="openFaq === 3 ? 'rotate-180' : ''" class="w-5 h-5 text-primary transition-transform"></i>
            </button>
            <div x-show="openFaq === 3" x-collapse class="px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/5 pt-4">
                Yes. All routers, Mini-UPS units, and network switches purchased through KNET carry an official 12-Month Replacement Warranty against manufacturing defects.
            </div>
        </div>

        <div class="bg-card-bg border border-white/5 rounded-2xl overflow-hidden">
            <button @click="openFaq = (openFaq === 4 ? null : 4)" class="w-full p-5 text-left font-bold text-white flex items-center justify-between">
                <span>Do you offer wholesale / contractor discounts on bulk cable and routers?</span>
                <i data-lucide="chevron-down" :class="openFaq === 4 ? 'rotate-180' : ''" class="w-5 h-5 text-primary transition-transform"></i>
            </button>
            <div x-show="openFaq === 4" x-collapse class="px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/5 pt-4">
                Yes! For local contractors, schools, hotels, and fellow WISPs purchasing multiple drums of drop fiber, Cat6 boxes, or multiple MikroTik routers, contact our operations desk on WhatsApp for custom contractor project quotes.
            </div>
        </div>

        <div class="bg-card-bg border border-white/5 rounded-2xl overflow-hidden">
            <button @click="openFaq = (openFaq === 5 ? null : 5)" class="w-full p-5 text-left font-bold text-white flex items-center justify-between">
                <span>What are the payment terms and is technician setup included?</span>
                <i data-lucide="chevron-down" :class="openFaq === 5 ? 'rotate-180' : ''" class="w-5 h-5 text-primary transition-transform"></i>
            </button>
            <div x-show="openFaq === 5" x-collapse class="px-5 pb-5 text-sm text-slate-400 leading-relaxed border-t border-white/5 pt-4">
                Our terms are strictly <strong>cash with order</strong> (M-Pesa payment confirmed prior to dispatch) or payment upon in-person collection. All hardware includes manufacturer quick-start documentation. If you require specialized on-site installation or professional network configuration by a KNET technician, this is available as an optional service with transparent rates agreed upon prior to dispatch.
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
            <span class="text-xs font-bold uppercase tracking-wider text-primary block mb-1">Request Price Quote</span>
            <h3 class="text-xl md:text-2xl font-black text-white" x-text="selectedProduct ? selectedProduct.name : ''"></h3>
            <p class="text-xs text-slate-400 mt-1">
                Enter your details below and our dispatch team will call or WhatsApp you with today's live price.
            </p>
        </div>

        <div x-show="orderSuccess" class="bg-accent/20 border border-accent/30 text-accent p-4 rounded-xl text-center text-sm font-bold mb-4">
            🎉 Thank you! Your quote request has been received. Our team will contact you within 10 minutes.
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
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Phone Number (WhatsApp / Calls) *</label>
                <input type="tel" x-model="orderPhone" required placeholder="e.g. 07XX XXX XXX"
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Delivery Town / Area *</label>
                <input type="text" x-model="orderLocation" required placeholder="e.g. Mbale Town / Kakamega / Luanda"
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2.5 text-sm text-white focus:outline-none focus:border-primary">
            </div>

            <div>
                <label class="block text-xs font-bold text-slate-300 mb-1.5">Project / Quantity Notes (Optional)</label>
                <textarea x-model="orderNotes" rows="2" placeholder="e.g. Need 2 units delivered today afternoon..."
                    class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-2 text-sm text-white focus:outline-none focus:border-primary"></textarea>
            </div>

            <button type="submit" :disabled="isSubmitting"
                class="w-full bg-primary hover:bg-primary-hover py-3.5 rounded-xl font-bold text-sm text-white transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                <span x-show="!isSubmitting">Submit Quote Request</span>
                <span x-show="isSubmitting" class="animate-spin w-4 h-4 border-2 border-white/30 border-t-white rounded-full"></span>
            </button>

            <div class="text-center pt-2">
                <span class="text-xs text-slate-500">Or check live on </span>
                <a :href="'https://wa.me/<?php echo $wa_clean; ?>?text=' + encodeURIComponent('Hello KNET, what is today\'s price for ' + (selectedProduct ? selectedProduct.name : 'equipment') + '?')" target="_blank"
                    class="text-xs text-[#25D366] hover:underline font-bold">WhatsApp Here</a>
            </div>
        </form>
    </div>
</div>

</div><!-- End Alpine.js Container -->

<?php include INCLUDES_PATH . '/footer.php'; ?>
