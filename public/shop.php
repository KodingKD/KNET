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
$prices_updated = '3 Nov 2026';
$products = [
    // 1. Power Resilience & Energy Storage (Vestwoods, EcoFlow, Marsriva)
    [
        'id' => 'vestwoods-1kva',
        'category' => 'power',
        'name' => 'Vestwoods 1kVA / 1.2kWh Lithium Energy Storage Station',
        'subtitle' => 'Heavy-Duty LiFePO4 Inverter Backup • Powers Routers, Laptops & Lights for 8–14+ Hours',
        'badge' => '1kVA Inverter • LiFePO4 Battery',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
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
        'badge' => '60-Min Fast Charge • EcoFlow',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
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
        'badge' => 'Top Seller • Router Backup',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
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
        'badge' => 'POE + DC • Heavy Duty',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
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
        'badge' => 'High Value • 4x 5dBi Antennas',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-orange-500/10 text-orange-400 border-orange-500/20',
        'image' => 'assets/images/products/tenda-f6-n300-router.jpg',
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
        'badge' => 'FTTH Standard • GPON/XPON',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-red-500/10 text-red-400 border-red-500/20',
        'image' => 'assets/images/products/huawei-hg8546m-gpon-onu.jpg',
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
        'badge' => 'Full Speed • Gigabit Ports',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
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
        'badge' => 'Dead-Zone Killer • One-Touch WPS',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
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
        'badge' => 'Enterprise • SFP 2.5G',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-cyan-500/10 text-cyan-400 border-cyan-500/20',
        'image' => 'assets/images/products/mikrotik-l009uigs-rm.webp',
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
        'badge' => 'Quad-Core • 10Gbps SFP+',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-indigo-500/10 text-indigo-400 border-indigo-500/20',
        'image' => 'assets/images/products/mikrotik-rb4011igs-rm.webp',
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
        'badge' => 'SOHO Classic • Hotspot Ready',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-sky-500/10 text-sky-400 border-sky-500/20',
        'image' => 'assets/images/products/mikrotik-rb951ui-2hnd.webp',
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
        'badge' => '48x Gigabit • Dual 40G QSFP+',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-indigo-500/10 text-indigo-400 border-indigo-500/20',
        'image' => 'assets/images/products/mikrotik-crs354-48g-switch.webp',
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
        'badge' => 'FTTH Core • 1:128 Split OLT',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'image' => 'assets/images/products/hioso-ha7302cst-olt-2pon.jpg',
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
        'badge' => 'PoE+ 30W/Port • SFP Uplink',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-cyan-500/10 text-cyan-400 border-cyan-500/20',
        'image' => 'assets/images/products/hioso-poe-ethernet-switch.jpg',
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
        'badge' => 'Class C++ • +7dBm High TX',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-yellow-500/10 text-yellow-400 border-yellow-500/20',
        'image' => 'assets/images/products/olt-sfp-transceiver-class-c.jpg',
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
        'badge' => '15km+ Range • 23dBi Antenna',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
        'image' => 'assets/images/products/ubiquiti-litebeam-m5.webp',
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
        'badge' => 'Compact airMAX • 5km+ Link',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-teal-500/10 text-teal-400 border-teal-500/20',
        'image' => 'assets/images/products/ubiquiti-nanostation-loco-m2.webp',
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
        'badge' => '1km Drum • G.657A2 Aerial',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-yellow-500/10 text-yellow-400 border-yellow-500/20',
        'image' => 'assets/images/products/drop-cable-1km.webp',
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
        'badge' => '305m Drum • 100% Pure Copper',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-emerald-500/10 text-emerald-400 border-emerald-500/20',
        'image' => 'assets/images/products/easenet-outdoor-cat6-305m.webp',
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
        'badge' => 'Heavy Gauge Steel • 6U / 9U',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-slate-500/10 text-slate-300 border-slate-500/20',
        'image' => 'assets/images/products/6u-wall-mount-rack.webp',
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
        'badge' => 'IP65 Pole / Wall • Pre-Loaded',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
        'badge_class' => 'bg-blue-500/10 text-blue-400 border-blue-500/20',
        'image' => 'assets/images/products/fat-box-1-16.webp',
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
        'badge' => 'Starlink Essential • 1000Mbps',
        'price_from' => null, // TODO: set KES price when verified
        'price_note' => null,
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

<?php
// Build JSON-LD Schema (ItemList + Product, Offer only when price_from is set)
$json_ld_items = [];
$pos = 1;
$site_origin = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . ($_SERVER['HTTP_HOST'] ?? 'knet.co.ke');

foreach ($products as $prod) {
    $prod_item = [
        '@type' => 'Product',
        'position' => $pos++,
        'name' => $prod['name'],
        'description' => $prod['subtitle'],
        'url' => $site_origin . '/shop.php#' . $prod['id'],
    ];

    if (!empty($prod['image'])) {
        $prod_item['image'] = $site_origin . '/' . ltrim($prod['image'], '/');
    }

    if (!empty($prod['price_from'])) {
        $prod_item['offers'] = [
            '@type' => 'Offer',
            'priceCurrency' => 'KES',
            'price' => (string)$prod['price_from'],
            'priceValidUntil' => date('Y-m-d', strtotime('+30 days')),
            'availability' => 'https://schema.org/InStock',
            'itemCondition' => 'https://schema.org/NewCondition'
        ];
    }

    $json_ld_items[] = [
        '@type' => 'ListItem',
        'position' => $prod_item['position'],
        'item' => $prod_item
    ];
}

$catalog_schema = [
    '@context' => 'https://schema.org',
    '@type' => 'ItemList',
    'name' => 'KNET Telecom Gear & Blackout Solutions Store',
    'description' => 'Genuine networking hardware, power backup systems, and fiber infrastructure available in Western Kenya.',
    'numberOfItems' => count($products),
    'itemListElement' => $json_ld_items
];
?>
<script type="application/ld+json">
<?php echo json_encode($catalog_schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES); ?>
</script>

<script>
function initHardwareStore() {
    Alpine.data('hardwareStore', () => ({
        activeCategory: 'all',
        products: <?php echo json_encode($products); ?>,
        pricesUpdated: <?php echo json_encode($prices_updated); ?>,
        waClean: <?php echo json_encode($wa_clean); ?>,
        selectedProduct: null,
        drawerOpen: false,
        enquiryList: [],
        searchQuery: '',
        orderName: '',
        orderPhone: '',
        orderLocation: '',
        orderNotes: '',
        isSubmitting: false,
        orderSuccess: false,
        orderError: '',

        init() {
            try {
                const saved = localStorage.getItem('knet_enquiry_list');
                if (saved) {
                    const parsed = JSON.parse(saved);
                    if (Array.isArray(parsed)) {
                        this.enquiryList = parsed;
                    }
                }
            } catch (e) {
                console.warn('Could not load enquiry list from localStorage', e);
                this.enquiryList = [];
            }
        },

        openProduct(id) {
            const p = this.products.find(item => item.id === id);
            if (p) {
                this.selectedProduct = p;
                this.orderSuccess = false;
                this.orderError = '';
                this.drawerOpen = true;
                document.body.classList.add('overflow-hidden');
                this.$nextTick(() => {
                    if (window.lucide) window.lucide.createIcons();
                    const first = this.$refs.drawerContent?.querySelector('button, [href], input, select, textarea, [tabindex]:not([tabindex="-1"])');
                    if (first) first.focus();
                });
            }
        },

        closeDrawer() {
            this.drawerOpen = false;
            document.body.classList.remove('overflow-hidden');
        },

        isEnquired(id) {
            return this.enquiryList.includes(id);
        },

        toggleEnquiry(id) {
            const index = this.enquiryList.indexOf(id);
            if (index > -1) {
                this.enquiryList.splice(index, 1);
            } else {
                this.enquiryList.push(id);
            }
            try {
                localStorage.setItem('knet_enquiry_list', JSON.stringify(this.enquiryList));
            } catch (e) {
                console.warn('Could not save enquiry list to localStorage', e);
            }
        },

        clearEnquiryList() {
            this.enquiryList = [];
            try {
                localStorage.removeItem('knet_enquiry_list');
            } catch (e) {
                console.warn('Could not clear enquiry list from localStorage', e);
            }
        },

        getSelectedProductWaUrl() {
            if (!this.selectedProduct) return 'https://wa.me/' + this.waClean;
            const msg = 'Hello KNET Equipment Desk, what is today\'s current price and stock availability for the ' + this.selectedProduct.name + ' for delivery to my location?';
            return 'https://wa.me/' + this.waClean + '?text=' + encodeURIComponent(msg);
        },

        getEnquiryWhatsAppUrl() {
            const selected = this.products.filter(p => this.enquiryList.includes(p.id));
            let text = 'Hello KNET Equipment Desk, I would like to inquire about today\'s price, stock and delivery for the following items:\n\n';
            selected.forEach((p, idx) => {
                text += (idx + 1) + '. ' + p.name + '\n';
            });
            text += '\nPlease confirm today\'s live rate and availability for delivery to my area.';
            return 'https://wa.me/' + this.waClean + '?text=' + encodeURIComponent(text);
        },

        handleFocusTrap(e) {
            if (!this.drawerOpen || !this.$refs.drawerContent) return;
            const focusables = this.$refs.drawerContent.querySelectorAll('button:not([disabled]), [href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), [tabindex]:not([tabindex="-1"])');
            if (focusables.length === 0) return;
            const first = focusables[0];
            const last = focusables[focusables.length - 1];
            if (e.shiftKey && document.activeElement === first) {
                e.preventDefault();
                last.focus();
            } else if (!e.shiftKey && document.activeElement === last) {
                e.preventDefault();
                first.focus();
            }
        },

        matchesFilter(prod) {
            let matchCat = (this.activeCategory === 'all');
            if (!matchCat) {
                if (this.activeCategory === 'wireless') {
                    matchCat = (prod.category === 'mikrotik' || prod.category === 'ubiquiti' || prod.category === 'wireless');
                } else if (this.activeCategory === 'routers') {
                    matchCat = (prod.category === 'routers' || prod.category === 'starlink');
                } else {
                    matchCat = (prod.category === this.activeCategory);
                }
            }
            if (!this.searchQuery.trim()) return matchCat;
            const q = this.searchQuery.toLowerCase().trim();
            const matchName = prod.name ? prod.name.toLowerCase().includes(q) : false;
            const matchSub = prod.subtitle ? prod.subtitle.toLowerCase().includes(q) : false;
            return matchCat && (matchName || matchSub);
        },

        matchesFilterById(id) {
            const p = this.products.find(item => item.id === id);
            return p ? this.matchesFilter(p) : false;
        },

        get filteredProductsCount() {
            return this.products.filter(p => this.matchesFilter(p)).length;
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
            formData.append('subject', 'Equipment Quote: ' + (this.selectedProduct ? this.selectedProduct.name : 'Unknown Product'));
            formData.append('message', 'Product: ' + (this.selectedProduct ? this.selectedProduct.name : '') + '\n' +
                'Delivery Location: ' + this.orderLocation + '\n' +
                'Customer Notes: ' + (this.orderNotes || 'None'));

            fetch('api/contact-form.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.json())
            .then(data => {
                this.isSubmitting = false;
                if(data.success) {
                    this.orderSuccess = true;
                    this.orderName = '';
                    this.orderPhone = '';
                    this.orderLocation = '';
                    this.orderNotes = '';
                } else {
                    this.orderError = data.message || 'Failed to submit quote request. Please try WhatsApp directly.';
                }
            })
            .catch(err => {
                this.isSubmitting = false;
                this.orderError = 'Network error. Please try WhatsApp directly.';
            });
        }
    }));
}
if (window.Alpine) {
    initHardwareStore();
} else {
    document.addEventListener('alpine:init', initHardwareStore);
}
</script>

<!-- Alpine.js Store Container -->
<div x-data="hardwareStore" class="relative">
<!-- Hero Header Section (Compressed) -->
<section class="relative py-10 md:py-14 px-4 md:px-8 overflow-hidden bg-gradient-to-b from-primary/15 via-transparent to-transparent">
    <div class="max-w-7xl mx-auto text-center relative z-10">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-accent/10 border border-accent/20 text-accent text-[11px] uppercase font-extrabold tracking-widest mb-3 md:mb-4">
            <i data-lucide="shield-check" class="w-3.5 h-3.5"></i> Official KNET Hardware & Energy Solutions
        </div>
        <h1 class="text-3xl md:text-5xl font-black mb-3 leading-tight tracking-tight text-white">
            Genuine Telecom Gear & <span class="text-accent">Blackout Solutions</span>.
        </h1>
        <p class="text-sm md:text-base text-slate-300 max-w-2xl mx-auto mb-5 leading-relaxed font-normal">
            Tested and deployed by KNET engineers. Western Kenya local pickup in Vihiga & Kakamega, or swift courier dispatch nationwide.
        </p>

        <!-- One-Line Live Daily Market Rate Banner -->
        <div class="inline-flex flex-wrap items-center justify-center gap-2.5 px-4 py-2 rounded-2xl bg-white/5 border border-white/10 text-xs text-slate-300 mb-6 max-w-3xl mx-auto">
            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse shrink-0"></span>
            <span>Prices quoted live daily &middot; Confirm stock & rate on WhatsApp:</span>
            <a href="https://wa.me/<?php echo $wa_clean; ?>?text=<?php echo urlencode("Hello KNET Equipment Desk, I would like to inquire about today's price and stock availability for networking gear."); ?>"
                target="_blank" rel="noopener noreferrer"
                data-track="whatsapp_hero_inquiry" data-track-label="Hero Live Banner" class="bg-[#25D366] hover:bg-[#20ba59] text-white px-3 py-1 rounded-lg font-bold text-[11px] inline-flex items-center gap-1.5 transition-all shadow-md shadow-[#25D366]/20">
                <i data-lucide="message-circle" class="w-3.5 h-3.5"></i>
                <span>Inquire Live</span>
            </a>
        </div>

        <!-- Compact Trust Row (No Card Boxes, 1 Row on Desktop, 2x2 on Mobile) -->
        <div class="grid grid-cols-2 md:flex md:flex-wrap items-center justify-center gap-x-6 gap-y-2.5 text-xs text-slate-300 font-medium">
            <div class="flex items-center gap-1.5">
                <i data-lucide="check-circle-2" class="w-4 h-4 text-emerald-400 shrink-0"></i>
                <span>100% Genuine (1-Yr Warranty)</span>
            </div>
            <div class="flex items-center gap-1.5">
                <i data-lucide="truck" class="w-4 h-4 text-primary shrink-0"></i>
                <span>Local Western Dispatch</span>
            </div>
            <div class="flex items-center gap-1.5">
                <i data-lucide="wrench" class="w-4 h-4 text-accent shrink-0"></i>
                <span>Optional Tech Setup</span>
            </div>
            <div class="flex items-center gap-1.5">
                <i data-lucide="credit-card" class="w-4 h-4 text-purple-400 shrink-0"></i>
                <span>Cash With Order</span>
            </div>
        </div>
    </div>

    <!-- Empty State (When Search/Filter yields 0 results) -->
    <div x-show="filteredProductsCount === 0" x-cloak
        class="text-center py-16 px-4 bg-card-bg/40 border border-white/5 rounded-3xl max-w-xl mx-auto my-8">
        <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 mx-auto mb-4">
            <i data-lucide="search-x" class="w-7 h-7 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white mb-2">No hardware found matching your criteria</h3>
        <p class="text-xs text-slate-400 mb-6 max-w-md mx-auto leading-relaxed">
            Can't find the router, switch, or cable drum you need? Our Western Kenya desk sources directly from Nairobi distributor networks daily.
        </p>
        <a :href="'https://wa.me/' + waClean + '?text=' + encodeURIComponent('Hello KNET Equipment Desk, I am looking for hardware not listed on your shop: ' + (searchQuery || activeCategory))"
            target="_blank" rel="noopener noreferrer"
            data-track="whatsapp_empty_state_inquiry" data-track-label="Empty State CTA" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white px-5 py-2.5 rounded-xl font-bold text-xs transition-all shadow-lg shadow-[#25D366]/20">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Can't find it? Ask us on WhatsApp</span>
        </a>
    </div>
</section>

<!-- Category Filter & Search Bar -->
<section id="catalog-section" class="sticky top-16 md:top-20 z-30 bg-dark-bg/95 backdrop-blur-md border-y border-white/10 py-3 px-4 md:px-8 mb-10">
    <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">
        
        <!-- Category Tabs (Consolidated to 6 Balanced Categories) -->
        <div class="flex items-center gap-1.5 overflow-x-auto no-scrollbar py-1">
            <button type="button" @click="activeCategory = 'all'"
                :aria-pressed="activeCategory === 'all'"
                :class="activeCategory === 'all' ? 'bg-primary text-white shadow-md shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
                class="px-3.5 py-2 rounded-xl text-xs whitespace-nowrap transition-all flex items-center gap-1.5">
                <i data-lucide="grid" class="w-3.5 h-3.5"></i> All (<?php echo count($products); ?>)
            </button>
            <button type="button" @click="activeCategory = 'power'"
                :aria-pressed="activeCategory === 'power'"
                :class="activeCategory === 'power' ? 'bg-primary text-white shadow-md shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
                class="px-3.5 py-2 rounded-xl text-xs whitespace-nowrap transition-all flex items-center gap-1.5">
                <i data-lucide="battery-charging" class="w-3.5 h-3.5 text-emerald-400"></i> Energy & Power Backup
            </button>
            <button type="button" @click="activeCategory = 'routers'"
                :aria-pressed="activeCategory === 'routers'"
                :class="activeCategory === 'routers' ? 'bg-primary text-white shadow-md shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
                class="px-3.5 py-2 rounded-xl text-xs whitespace-nowrap transition-all flex items-center gap-1.5">
                <i data-lucide="router" class="w-3.5 h-3.5 text-orange-400"></i> Wi-Fi & Starlink
            </button>
            <button type="button" @click="activeCategory = 'wireless'"
                :aria-pressed="activeCategory === 'wireless'"
                :class="activeCategory === 'wireless' ? 'bg-primary text-white shadow-md shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
                class="px-3.5 py-2 rounded-xl text-xs whitespace-nowrap transition-all flex items-center gap-1.5">
                <i data-lucide="radio-tower" class="w-3.5 h-3.5 text-cyan-400"></i> MikroTik & Ubiquiti
            </button>
            <button type="button" @click="activeCategory = 'switches'"
                :aria-pressed="activeCategory === 'switches'"
                :class="activeCategory === 'switches' ? 'bg-primary text-white shadow-md shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
                class="px-3.5 py-2 rounded-xl text-xs whitespace-nowrap transition-all flex items-center gap-1.5">
                <i data-lucide="layers" class="w-3.5 h-3.5 text-indigo-400"></i> Switches & FTTH Core
            </button>
            <button type="button" @click="activeCategory = 'infrastructure'"
                :aria-pressed="activeCategory === 'infrastructure'"
                :class="activeCategory === 'infrastructure' ? 'bg-primary text-white shadow-md shadow-primary/25 font-bold' : 'bg-white/5 hover:bg-white/10 text-slate-300 font-medium'"
                class="px-3.5 py-2 rounded-xl text-xs whitespace-nowrap transition-all flex items-center gap-1.5">
                <i data-lucide="disc" class="w-3.5 h-3.5 text-yellow-400"></i> Fiber & Cabling
            </button>
        </div>

        <!-- Search Input & Result Count -->
        <div class="flex items-center gap-3 shrink-0">
            <div class="relative w-full md:w-64">
                <i data-lucide="search" class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none"></i>
                <input type="text"
                    x-model="searchQuery"
                    placeholder="Search products..."
                    aria-label="Search hardware products"
                    class="w-full bg-white/5 border border-white/10 focus:border-primary rounded-xl pl-9 pr-8 py-2 text-xs text-white placeholder-slate-400 focus:outline-none transition-all">
                <button type="button"
                    x-show="searchQuery.length > 0"
                    @click="searchQuery = ''"
                    aria-label="Clear search"
                    class="absolute right-2.5 top-1/2 -translate-y-1/2 text-slate-400 hover:text-white">
                    <i data-lucide="x" class="w-3.5 h-3.5"></i>
                </button>
            </div>

            <!-- Result Count Badge -->
            <div class="text-[11px] font-semibold text-slate-400 whitespace-nowrap hidden sm:block">
                <span class="text-white font-bold" x-text="filteredProductsCount"></span> / <?php echo count($products); ?>
            </div>
        </div>

    </div>

    <!-- Empty State (When Search/Filter yields 0 results) -->
    <div x-show="filteredProductsCount === 0" x-cloak
        class="text-center py-16 px-4 bg-card-bg/40 border border-white/5 rounded-3xl max-w-xl mx-auto my-8">
        <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 mx-auto mb-4">
            <i data-lucide="search-x" class="w-7 h-7 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white mb-2">No hardware found matching your criteria</h3>
        <p class="text-xs text-slate-400 mb-6 max-w-md mx-auto leading-relaxed">
            Can't find the router, switch, or cable drum you need? Our Western Kenya desk sources directly from Nairobi distributor networks daily.
        </p>
        <a :href="'https://wa.me/' + waClean + '?text=' + encodeURIComponent('Hello KNET Equipment Desk, I am looking for hardware not listed on your shop: ' + (searchQuery || activeCategory))"
            target="_blank" rel="noopener noreferrer"
            data-track="whatsapp_empty_state_inquiry" data-track-label="Empty State CTA" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white px-5 py-2.5 rounded-xl font-bold text-xs transition-all shadow-lg shadow-[#25D366]/20">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Can't find it? Ask us on WhatsApp</span>
        </a>
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
            <div x-show="matchesFilterById('<?php echo $prod['id']; ?>')"
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 scale-95"
                x-transition:enter-end="opacity-100 scale-100"
                class="bg-card-bg border border-white/5 hover:border-primary/40 rounded-3xl p-6 md:p-7 flex flex-col h-full transition-all duration-300 group hover:-translate-y-1 relative overflow-hidden shadow-xl">
                
                <!-- Ambient Glow Effect -->
                <div class="absolute -top-12 -right-12 w-44 h-44 bg-gradient-to-br <?php echo $prod['color']; ?> rounded-full blur-3xl pointer-events-none group-hover:scale-150 transition-transform duration-500"></div>

                <!-- Card Content Top Block -->
                <div class="relative z-10">
                    <!-- Neutral Badge & Add to List & Category Icon -->
                    <div class="flex items-center justify-between gap-2 mb-4">
                        <span class="inline-flex items-center px-2.5 py-1 rounded-full text-[11px] font-semibold bg-white/5 text-slate-300 border border-white/10">
                            <?php echo htmlspecialchars($prod['badge']); ?>
                        </span>
                        <div class="flex items-center gap-1.5">
                            <button type="button"
                                @click.stop="toggleEnquiry('<?php echo $prod['id']; ?>')" data-track="toggle_enquiry_item" data-track-label="<?php echo htmlspecialchars($prod['name']); ?>"
                                :title="isEnquired('<?php echo $prod['id']; ?>') ? 'Remove from enquiry list' : 'Add to enquiry list'"
                                :class="isEnquired('<?php echo $prod['id']; ?>') ? 'bg-primary text-white border-primary shadow-sm shadow-primary/30' : 'bg-white/5 hover:bg-white/10 text-slate-300 border-white/10'"
                                class="px-2.5 py-1 rounded-full text-[11px] font-semibold border flex items-center gap-1 transition-all">
                                <span x-text="isEnquired('<?php echo $prod['id']; ?>') ? '✓ Added' : '+ Add to list'"></span>
                            </button>
                            <div class="w-9 h-9 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center <?php echo $prod['icon_color']; ?> shrink-0">
                                <i data-lucide="<?php echo $prod['icon']; ?>" class="w-4 h-4"></i>
                            </div>
                        </div>
                    </div>

                    <!-- Consistent Media Block (h-44 uniform tile with fallback) -->
                    <?php if (!empty($prod['image'])): ?>
                        <div class="w-full h-44 mb-4 rounded-2xl bg-dark-bg/60 border border-white/5 flex items-center justify-center p-4 overflow-hidden relative group-hover:border-primary/20 transition-all">
                            <img src="<?php echo htmlspecialchars($prod['image']); ?>" 
                                 alt="<?php echo htmlspecialchars($prod['name']); ?>" 
                                 width="300" height="176"
                                 class="max-h-full max-w-full object-contain group-hover:scale-105 transition-transform duration-300"
                                 loading="lazy">
                        </div>
                    <?php else: ?>
                        <div class="w-full h-44 mb-4 rounded-2xl bg-gradient-to-br <?php echo $prod['color']; ?> border border-white/5 flex items-center justify-center p-4 overflow-hidden relative group-hover:border-primary/20 transition-all">
                            <div class="w-16 h-16 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center <?php echo $prod['icon_color']; ?> shadow-inner group-hover:scale-110 transition-transform duration-300">
                                <i data-lucide="<?php echo $prod['icon']; ?>" class="w-8 h-8"></i>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Title & Subtitle -->
                    <h3 class="text-lg font-black text-white mb-1.5 leading-snug group-hover:text-primary transition-colors">
                        <?php echo htmlspecialchars($prod['name']); ?>
                    </h3>
                    <p class="text-sm text-slate-300 mb-4 font-normal leading-relaxed line-clamp-2">
                        <?php echo htmlspecialchars($prod['subtitle']); ?>
                    </p>

                    <!-- Key Specs Checklist (First 3 Specs Only) -->
                    <div class="space-y-2 mb-4 bg-dark-bg/40 border border-white/5 rounded-2xl p-3.5">
                        <?php foreach (array_slice($prod['specs'], 0, 3) as $spec): ?>
                            <div class="flex items-start gap-2 text-xs text-slate-200">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-accent shrink-0 mt-0.5"></i>
                                <span class="leading-tight"><?php echo htmlspecialchars($spec); ?></span>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Pinned Footer via mt-auto: Price Line & Action Buttons -->
                <div class="mt-auto pt-4 border-t border-white/10 relative z-10 flex flex-col gap-3">
                    <!-- Price Line -->
                    <?php if (!empty($prod['price_from'])): ?>
                        <div class="flex items-baseline justify-between">
                            <div>
                                <span class="text-xs text-slate-400 font-medium">From </span>
                                <span class="text-base font-extrabold text-white">KES <?php echo number_format($prod['price_from']); ?></span>
                            </div>
                            <span class="text-[11px] text-slate-400">Updated <?php echo htmlspecialchars($prices_updated); ?></span>
                        </div>
                    <?php else: ?>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                                <span class="text-xs font-semibold text-slate-300">Ask for today's price</span>
                            </div>
                            <span class="text-[11px] text-slate-400 font-medium">Live quote</span>
                        </div>
                    <?php endif; ?>

                    <!-- Primary WhatsApp Button -->
                    <a href="<?php echo $wa_url; ?>" target="_blank" rel="noopener noreferrer"
                        data-track="whatsapp_product_inquiry" :data-track-label="prod.name" data-track="whatsapp_drawer_inquiry" :data-track-label="selectedProduct ? selectedProduct.name : ''" class="w-full bg-[#25D366] hover:bg-[#20ba59] text-white py-3 px-4 rounded-xl font-bold text-xs flex items-center justify-center gap-2 transition-all shadow-lg shadow-[#25D366]/20">
                        <i data-lucide="message-circle" class="w-4 h-4"></i>
                        <span>Check Today's Price on WhatsApp</span>
                    </a>

                    <!-- Details & quote text link -->
                    <button type="button" @click="openProduct('<?php echo $prod['id']; ?>')"
                        data-track="open_details_drawer" :data-track-label="prod.name" class="text-xs text-slate-300 hover:text-primary transition-colors flex items-center justify-center gap-1.5 py-0.5">
                        <span>Details & quote</span>
                        <i data-lucide="arrow-right" class="w-3.5 h-3.5 text-primary"></i>
                    </button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- Empty State (When Search/Filter yields 0 results) -->
    <div x-show="filteredProductsCount === 0" x-cloak
        class="text-center py-16 px-4 bg-card-bg/40 border border-white/5 rounded-3xl max-w-xl mx-auto my-8">
        <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 mx-auto mb-4">
            <i data-lucide="search-x" class="w-7 h-7 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white mb-2">No hardware found matching your criteria</h3>
        <p class="text-xs text-slate-400 mb-6 max-w-md mx-auto leading-relaxed">
            Can't find the router, switch, or cable drum you need? Our Western Kenya desk sources directly from Nairobi distributor networks daily.
        </p>
        <a :href="'https://wa.me/' + waClean + '?text=' + encodeURIComponent('Hello KNET Equipment Desk, I am looking for hardware not listed on your shop: ' + (searchQuery || activeCategory))"
            target="_blank" rel="noopener noreferrer"
            data-track="whatsapp_empty_state_inquiry" data-track-label="Empty State CTA" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white px-5 py-2.5 rounded-xl font-bold text-xs transition-all shadow-lg shadow-[#25D366]/20">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Can't find it? Ask us on WhatsApp</span>
        </a>
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

    <!-- Empty State (When Search/Filter yields 0 results) -->
    <div x-show="filteredProductsCount === 0" x-cloak
        class="text-center py-16 px-4 bg-card-bg/40 border border-white/5 rounded-3xl max-w-xl mx-auto my-8">
        <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 mx-auto mb-4">
            <i data-lucide="search-x" class="w-7 h-7 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white mb-2">No hardware found matching your criteria</h3>
        <p class="text-xs text-slate-400 mb-6 max-w-md mx-auto leading-relaxed">
            Can't find the router, switch, or cable drum you need? Our Western Kenya desk sources directly from Nairobi distributor networks daily.
        </p>
        <a :href="'https://wa.me/' + waClean + '?text=' + encodeURIComponent('Hello KNET Equipment Desk, I am looking for hardware not listed on your shop: ' + (searchQuery || activeCategory))"
            target="_blank" rel="noopener noreferrer"
            data-track="whatsapp_empty_state_inquiry" data-track-label="Empty State CTA" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white px-5 py-2.5 rounded-xl font-bold text-xs transition-all shadow-lg shadow-[#25D366]/20">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Can't find it? Ask us on WhatsApp</span>
        </a>
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

    <!-- Empty State (When Search/Filter yields 0 results) -->
    <div x-show="filteredProductsCount === 0" x-cloak
        class="text-center py-16 px-4 bg-card-bg/40 border border-white/5 rounded-3xl max-w-xl mx-auto my-8">
        <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-slate-400 mx-auto mb-4">
            <i data-lucide="search-x" class="w-7 h-7 text-primary"></i>
        </div>
        <h3 class="text-lg font-bold text-white mb-2">No hardware found matching your criteria</h3>
        <p class="text-xs text-slate-400 mb-6 max-w-md mx-auto leading-relaxed">
            Can't find the router, switch, or cable drum you need? Our Western Kenya desk sources directly from Nairobi distributor networks daily.
        </p>
        <a :href="'https://wa.me/' + waClean + '?text=' + encodeURIComponent('Hello KNET Equipment Desk, I am looking for hardware not listed on your shop: ' + (searchQuery || activeCategory))"
            target="_blank" rel="noopener noreferrer"
            data-track="whatsapp_empty_state_inquiry" data-track-label="Empty State CTA" class="inline-flex items-center gap-2 bg-[#25D366] hover:bg-[#20ba59] text-white px-5 py-2.5 rounded-xl font-bold text-xs transition-all shadow-lg shadow-[#25D366]/20">
            <i data-lucide="message-circle" class="w-4 h-4"></i>
            <span>Can't find it? Ask us on WhatsApp</span>
        </a>
    </div>
</section>

<!-- Floating Enquiry List Bar -->
<div x-show="enquiryList.length > 0" x-cloak
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 translate-y-6"
    x-transition:enter-end="opacity-100 translate-y-0"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100 translate-y-0"
    x-transition:leave-end="opacity-0 translate-y-6"
    class="fixed bottom-6 left-4 right-24 md:left-1/2 md:-translate-x-1/2 md:right-auto z-40 max-w-lg shadow-2xl">
    
    <div class="bg-card-bg/95 backdrop-blur-md border border-white/15 p-2 md:p-2.5 rounded-2xl flex items-center gap-2 md:gap-3 shadow-2xl shadow-black/60">
        <!-- Badge / Counter -->
        <div class="flex items-center gap-2 pl-2">
            <span class="w-2.5 h-2.5 rounded-full bg-accent animate-pulse"></span>
            <span class="text-xs md:text-sm font-black text-white whitespace-nowrap">
                Enquiry list (<span x-text="enquiryList.length"></span>)
            </span>
        </div>

        <div class="h-5 w-px bg-white/10 hidden md:block"></div>

        <!-- WhatsApp Multi-Product CTA -->
        <a :href="getEnquiryWhatsAppUrl()" target="_blank" rel="noopener noreferrer"
            data-track="whatsapp_enquiry_list_send" data-track-label="Floating Enquiry Bar" class="flex-1 bg-[#25D366] hover:bg-[#20ba59] text-white py-2 px-3 md:px-4 rounded-xl font-bold text-xs flex items-center justify-center gap-1.5 transition-all shadow-md shadow-[#25D366]/20 whitespace-nowrap">
            <i data-lucide="message-circle" class="w-4 h-4 shrink-0"></i>
            <span>Send on WhatsApp</span>
        </a>

        <!-- Clear Button -->
        <button type="button" @click="clearEnquiryList()" title="Clear list"
            class="p-2 text-slate-400 hover:text-white hover:bg-white/5 rounded-xl transition-colors text-xs flex items-center gap-1 shrink-0">
            <i data-lucide="trash-2" class="w-4 h-4"></i>
            <span class="hidden sm:inline text-[11px]">Clear</span>
        </button>
    </div>
</div>

<!-- Details Drawer & Quote Slide-over / Bottom Sheet -->
<div x-show="drawerOpen" x-cloak
    class="fixed inset-0 z-50 overflow-hidden"
    role="dialog" aria-modal="true" :aria-hidden="!drawerOpen" aria-labelledby="drawer-title"
    @keydown.window.escape="if (drawerOpen) closeDrawer()"
    @keydown.tab="handleFocusTrap($event)">
    
    <!-- Backdrop Overlay -->
    <div x-show="drawerOpen"
        x-transition:enter="transition-opacity ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition-opacity ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        @click="closeDrawer()"
        class="fixed inset-0 bg-black/75 backdrop-blur-sm transition-opacity"></div>

    <!-- Drawer Panel: Bottom Sheet on Mobile, Slide-over on Desktop -->
    <div class="fixed inset-0 pointer-events-none flex justify-end items-end md:items-stretch">
        <div x-show="drawerOpen"
            x-ref="drawerContent"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="translate-y-full md:translate-y-0 md:translate-x-full"
            x-transition:enter-end="translate-y-0 md:translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="translate-y-0 md:translate-x-0"
            x-transition:leave-end="translate-y-full md:translate-y-0 md:translate-x-full"
            class="pointer-events-auto w-full md:max-w-xl max-h-[90vh] md:max-h-full h-full bg-card-bg border-t md:border-t-0 md:border-l border-white/10 rounded-t-3xl md:rounded-t-none shadow-2xl flex flex-col overflow-hidden">
            
            <!-- Mobile Drag Handle -->
            <div class="w-12 h-1.5 bg-white/20 rounded-full mx-auto my-2.5 md:hidden shrink-0"></div>

            <!-- Drawer Header -->
            <div class="p-5 md:p-6 border-b border-white/10 flex items-start justify-between gap-4 shrink-0 bg-card-bg/95">
                <div>
                    <div class="flex items-center gap-2 mb-2">
                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-[11px] font-semibold bg-white/5 text-slate-300 border border-white/10"
                            x-text="selectedProduct ? selectedProduct.badge : ''"></span>
                        <span class="text-[11px] font-semibold text-primary uppercase tracking-wider"
                            x-text="selectedProduct ? selectedProduct.category : ''"></span>
                    </div>
                    <h2 id="drawer-title" class="text-xl md:text-2xl font-black text-white leading-tight"
                        x-text="selectedProduct ? selectedProduct.name : ''"></h2>
                    <p class="text-xs text-slate-400 mt-1 leading-relaxed"
                        x-text="selectedProduct ? selectedProduct.subtitle : ''"></p>
                </div>

                <button type="button" @click="closeDrawer()" aria-label="Close details drawer"
                    class="w-9 h-9 rounded-xl bg-white/5 hover:bg-white/10 text-slate-400 hover:text-white flex items-center justify-center transition-colors shrink-0">
                    <i data-lucide="x" class="w-5 h-5"></i>
                </button>
            </div>

            <!-- Drawer Scrollable Body -->
            <div class="flex-1 overflow-y-auto p-5 md:p-6 space-y-6">
                
                <!-- Product Media / Icon Fallback -->
                <div class="w-full h-48 md:h-56 rounded-2xl bg-dark-bg/60 border border-white/5 flex items-center justify-center p-4 overflow-hidden relative">
                    <template x-if="selectedProduct && selectedProduct.image">
                        <img :src="selectedProduct.image" :alt="selectedProduct.name"
                            class="max-h-full max-w-full object-contain">
                    </template>
                    <template x-if="selectedProduct && !selectedProduct.image">
                        <div class="w-20 h-20 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center text-primary">
                            <i data-lucide="box" class="w-10 h-10"></i>
                        </div>
                    </template>
                </div>

                <!-- Highlight Box (moved from card) -->
                <div x-show="selectedProduct && selectedProduct.highlight"
                    class="flex items-start gap-3 text-xs font-semibold text-slate-200 bg-white/5 border border-white/10 p-3.5 rounded-2xl">
                    <i data-lucide="info" class="w-4 h-4 text-primary shrink-0 mt-0.5"></i>
                    <span x-text="selectedProduct ? selectedProduct.highlight : ''"></span>
                </div>

                <!-- Price Line & WhatsApp Action -->
                <div class="bg-dark-bg/50 border border-white/5 rounded-2xl p-4 space-y-3">
                    <div class="flex items-baseline justify-between">
                        <div>
                            <span class="text-xs text-slate-400 block" x-text="selectedProduct && selectedProduct.price_from ? 'Price from' : 'Pricing'"></span>
                            <span class="text-lg font-black text-white"
                                x-text="selectedProduct && selectedProduct.price_from ? 'KES ' + Number(selectedProduct.price_from).toLocaleString() : 'Ask for today\'s price'"></span>
                        </div>
                        <div class="text-right">
                            <span class="text-[11px] text-slate-400 block"
                                x-text="selectedProduct && selectedProduct.price_from ? 'Updated ' + pricesUpdated : 'Daily live quote'"></span>
                            <span class="text-[11px] text-accent font-semibold">Terms: Cash With Order</span>
                        </div>
                    </div>

                    <a :href="getSelectedProductWaUrl()" target="_blank" rel="noopener noreferrer"
                        data-track="whatsapp_product_inquiry" :data-track-label="prod.name" data-track="whatsapp_drawer_inquiry" :data-track-label="selectedProduct ? selectedProduct.name : ''" class="w-full bg-[#25D366] hover:bg-[#20ba59] text-white py-3 px-4 rounded-xl font-bold text-xs flex items-center justify-center gap-2 transition-all shadow-lg shadow-[#25D366]/20">
                        <i data-lucide="message-circle" class="w-4 h-4"></i>
                        <span>Check Today's Price on WhatsApp</span>
                    </a>
                </div>

                <!-- Full Specifications List -->
                <div>
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-3 flex items-center gap-2">
                        <i data-lucide="list-checks" class="w-4 h-4 text-primary"></i>
                        Full Specifications
                    </h4>
                    <div class="space-y-2.5 bg-dark-bg/40 border border-white/5 rounded-2xl p-4">
                        <template x-for="(spec, idx) in (selectedProduct ? selectedProduct.specs : [])" :key="idx">
                            <div class="flex items-start gap-2.5 text-xs text-slate-300">
                                <i data-lucide="check" class="w-3.5 h-3.5 text-accent shrink-0 mt-0.5"></i>
                                <span class="leading-tight" x-text="spec"></span>
                            </div>
                        </template>
                    </div>
                </div>

                <!-- Callback / Formal Quote Form -->
                <div class="border-t border-white/10 pt-5">
                    <h4 class="text-xs font-bold uppercase tracking-wider text-slate-400 mb-1 flex items-center gap-2">
                        <i data-lucide="clipboard-list" class="w-4 h-4 text-primary"></i>
                        Request Formal Quote / Callback
                    </h4>
                    <p class="text-xs text-slate-400 mb-4">
                        Prefer our team to call you back? Submit your details and our Western Kenya desk will reach out in under 10 minutes.
                    </p>

                    <div x-show="orderSuccess" class="bg-accent/20 border border-accent/30 text-accent p-4 rounded-xl text-center text-xs font-bold mb-4">
                        🎉 Thank you! Your quote request has been received. Our team will contact you within 10 minutes.
                    </div>

                    <div x-show="orderError" class="bg-red-500/20 border border-red-500/30 text-red-400 p-3 rounded-xl text-center text-xs font-bold mb-4" x-text="orderError">
                    </div>

                    <form @submit.prevent="submitOrder()" data-track="submit_quote_request" :data-track-label="selectedProduct ? selectedProduct.name : ''" class="space-y-3.5" x-show="!orderSuccess">
                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-1">Full Name *</label>
                            <input type="text" x-model="orderName" required placeholder="e.g. Samuel Wanjala"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-primary">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-1">Phone Number (WhatsApp / Calls) *</label>
                            <input type="tel" x-model="orderPhone" required placeholder="e.g. 07XX XXX XXX"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-primary">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-1">Delivery Town / Area *</label>
                            <input type="text" x-model="orderLocation" required placeholder="e.g. Mbale Town / Kakamega / Luanda"
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-primary">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-300 mb-1">Project / Quantity Notes (Optional)</label>
                            <textarea x-model="orderNotes" rows="2" placeholder="e.g. Need 2 units delivered today afternoon..."
                                class="w-full bg-white/5 border border-white/10 rounded-xl px-3.5 py-2 text-xs text-white focus:outline-none focus:border-primary"></textarea>
                        </div>

                        <button type="submit" :disabled="isSubmitting"
                            class="w-full bg-primary hover:bg-primary-hover py-3 rounded-xl font-bold text-xs text-white transition-all shadow-lg shadow-primary/20 flex items-center justify-center gap-2">
                            <span x-show="!isSubmitting">Submit Quote Request</span>
                            <span x-show="isSubmitting" class="animate-spin w-4 h-4 border-2 border-white/30 border-t-white rounded-full"></span>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
</div><!-- End Alpine.js Container -->

<!-- DataLayer Analytics Tracker (no new third-party services) -->
<script>
(function() {
    function trackDataLayer(eventName, params) {
        if (window.dataLayer && Array.isArray(window.dataLayer)) {
            window.dataLayer.push(Object.assign({
                event: eventName,
                page: 'shop',
                timestamp: new Date().toISOString()
            }, params || {}));
        }
    }

    document.addEventListener('click', function(e) {
        const trackEl = e.target.closest('[data-track]');
        if (trackEl) {
            const eventName = trackEl.getAttribute('data-track');
            const label = trackEl.getAttribute('data-track-label') || trackEl.innerText.trim();
            trackDataLayer(eventName, { action_label: label });
        }
    });

    document.addEventListener('submit', function(e) {
        const trackForm = e.target.closest('[data-track]');
        if (trackForm) {
            const eventName = trackForm.getAttribute('data-track');
            const label = trackForm.getAttribute('data-track-label') || '';
            trackDataLayer(eventName, { action_label: label });
        }
    });
})();
</script>

<?php include INCLUDES_PATH . '/footer.php'; ?>
