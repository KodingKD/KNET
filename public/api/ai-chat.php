<?php
header('Content-Type: application/json');
header('Cache-Control: no-cache, no-store, must-revalidate');

require_once __DIR__ . '/../../includes/config.php';
require_once __DIR__ . '/../../includes/functions.php';

// Safe WhatsApp Number
$wa_number = defined('WHATSAPP_NUMBER') ? WHATSAPP_NUMBER : (defined('SITE_WHATSAPP') ? SITE_WHATSAPP : '254743820177');
$wa_clean = str_replace(['+', ' '], '', $wa_number);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Read JSON input
$input = json_decode(file_get_contents('php://input'), true);
$user_message = trim($input['message'] ?? '');
$history = $input['history'] ?? [];

if (empty($user_message)) {
    echo json_encode(['success' => false, 'message' => 'Please enter a message.']);
    exit;
}

// Check for phone number in message to log lead automatically
$phone_pattern = '/(07\d{8}|01\d{8}|\+?254\d{9})/';
if (preg_match($phone_pattern, $user_message, $matches)) {
    $detected_phone = $matches[0];
    try {
        require_once __DIR__ . '/../../includes/db_connect.php';
        if (isset($db)) {
            $stmt = $db->prepare("INSERT INTO contact_submissions (name, email, phone, service_interest, message, ip_address) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->execute([
                'AI Chat Lead',
                'ai-lead@knet.co.ke',
                $detected_phone,
                'AI Assistant Lead Capture',
                "Captured from AI chat conversation:\n" . $user_message,
                $_SERVER['REMOTE_ADDR'] ?? ''
            ]);
        }
    } catch (Exception $e) {
        // Silently continue if DB logging fails
    }
}

// Knowledge Base & Intent Matcher
$msg_lower = strtolower($user_message);

function build_whatsapp_link($clean_num, $text) {
    return "https://wa.me/" . $clean_num . "?text=" . urlencode($text);
}

// 1. Blinking Red Light / LOS / Outage Troubleshooting
if (strpos($msg_lower, 'red light') !== false || strpos($msg_lower, 'los') !== false || strpos($msg_lower, 'blinking red') !== false || strpos($msg_lower, 'no internet') !== false && (strpos($msg_lower, 'red') !== false || strpos($msg_lower, 'router') !== false)) {
    $reply = "🔴 **Red Blinking LOS Light Diagnostics:**\n\nA red blinking **LOS (Loss of Signal)** light means your router/optical ONU has lost the optical laser connection from our fiber line.\n\n**Quick Checks You Can Do Now:**\n1. Check the thin yellow fiber cable plugged into the bottom or rear of your router (the green optical connector). Make sure it is firmly clicked in and not tightly bent or pinched by furniture.\n2. Do not pull or stare directly into the optical tip.\n3. If the cable is firmly plugged in and the light is still blinking red, there may be an external fiber cut along your street or road corridor.\n\nWould you like me to connect you to our Network Operations Center (NOC) on WhatsApp to check your line status immediately?";
    $actions = [
        ['label' => 'Report Outage to NOC (WhatsApp)', 'url' => build_whatsapp_link($wa_clean, "Hello KNET NOC, my router is showing a blinking Red LOS light. Please check my line status. My location is: ")],
        ['label' => 'Check Other Issues', 'prompt' => 'My internet is slow']
    ];
}

// 2. Slow Internet / Wi-Fi Troubleshooting
elseif (strpos($msg_lower, 'slow') !== false || strpos($msg_lower, 'buffering') !== false || strpos($msg_lower, 'lag') !== false || strpos($msg_lower, 'speed') !== false && (strpos($msg_lower, 'low') !== false || strpos($msg_lower, 'test') !== false)) {
    $reply = "⚡ **Slow Speed & Wi-Fi Optimization Tips:**\n\n1. **Check 5GHz vs 2.4GHz:** If your router is dual-band, look for the Wi-Fi network ending in **'-5G'**. The 5GHz band delivers your full subscribed speed with zero interference from walls and neighboring Wi-Fi.\n2. **30-Second Power Cycle:** Turn off the power switch to your router and ONT for 30 seconds, then power back on to clear stale IP cache.\n3. **Distance & Obstacles:** Concrete stone walls significantly weaken standard Wi-Fi signals. Consider a **Dual-Band Range Extender** or **Cat6 cable** for Smart TVs and gaming.\n\nIf speeds remain slow, please contact our support desk for a line signal check.";
    $actions = [
        ['label' => 'Request Support via WhatsApp', 'url' => build_whatsapp_link($wa_clean, "Hello KNET Support, my connection is experiencing slow speeds. Please run a diagnostic on my line.")],
        ['label' => 'Explore Range Extenders', 'url' => 'shop.php']
    ];
}

// 3. Coverage Inquiries
elseif (strpos($msg_lower, 'coverage') !== false || strpos($msg_lower, 'available') !== false || strpos($msg_lower, 'mbale') !== false || strpos($msg_lower, 'chavakali') !== false || strpos($msg_lower, 'luanda') !== false || strpos($msg_lower, 'kakamega') !== false || strpos($msg_lower, 'vihiga') !== false || strpos($msg_lower, 'nairobi') !== false || strpos($msg_lower, 'majengo') !== false || strpos($msg_lower, 'serem') !== false) {
    $reply = "📍 **KNET Coverage Areas:**\n\nWe provide high-speed fiber optic internet and high-capacity wireless across:\n\n• **Vihiga County:** Mbale Town, Chavakali, Luanda, Majengo, Mudete, Serem, Hamisi & surrounding estates.\n• **Kakamega County:** Kakamega Town CBD, Amalemba, Lurambi, Joyland, Shinyalu corridor.\n• **Nairobi Metro:** Enterprise corridors and residential clusters.\n• **Nationwide Equipment Delivery:** For tech hardware, routers, and power backups, we dispatch same-day via Easy Coach and courier countrywide.\n\nWould you like to book a **Free Site Survey** for your specific home or office?";
    $actions = [
        ['label' => 'Book Free Site Survey (WhatsApp)', 'url' => build_whatsapp_link($wa_clean, "Hello KNET, I would like to book a site survey for internet installation at my location: ")],
        ['label' => 'View Coverage Map', 'url' => 'coverage.php']
    ];
}

// 4. Battery / Power Backup / Blackout Inquiries (Vestwoods, EcoFlow, Mini-UPS)
elseif (strpos($msg_lower, 'battery') !== false || strpos($msg_lower, 'ups') !== false || strpos($msg_lower, 'blackout') !== false || strpos($msg_lower, 'power') !== false || strpos($msg_lower, 'kplc') !== false || strpos($msg_lower, 'vestwoods') !== false || strpos($msg_lower, 'ecoflow') !== false) {
    $reply = "🔋 **Blackout Power & Energy Storage Solutions:**\n\nWe provide genuine, engineer-tested blackout power solutions for homes and businesses:\n\n1. **Marsriva KP3 Smart Mini-UPS (10,000mAh):** Powers your fiber ONT and Wi-Fi router for **4 to 6 hours** during blackouts. Zero cutover delay (no dropped calls).\n2. **Marsriva KP7 POE Mini-UPS (16,000mAh):** Heavy-duty battery with Gigabit POE (15V/24V) for outdoor wireless antennas and CCTV.\n3. **Vestwoods 1kVA / 1.2kWh Lithium Energy Station:** Heavy-duty LiFePO4 inverter system that powers routers, laptops, monitors, and lighting for **8 to 14+ hours**.\n4. **EcoFlow Smart Portable Power Station:** Ultra-fast 60-minute AC recharge with pure sine wave output for mobile workstations.\n\n*Note: Hardware terms are cash with order (payment confirmed prior to dispatch). Local pickup in Vihiga/Kakamega or countrywide courier.*";
    $actions = [
        ['label' => 'Inquire Today\'s Price on WhatsApp', 'url' => build_whatsapp_link($wa_clean, "Hello KNET Equipment Desk, what is today's price and availability for the Marsriva Mini-UPS / Vestwoods Battery?")],
        ['label' => 'View Hardware Store', 'url' => 'shop.php']
    ];
}

// 5. Packages & Pricing Inquiries
elseif (strpos($msg_lower, 'package') !== false || strpos($msg_lower, 'price') !== false || strpos($msg_lower, 'how much') !== false || strpos($msg_lower, 'cost') !== false || strpos($msg_lower, '10mbps') !== false || strpos($msg_lower, '20mbps') !== false || strpos($msg_lower, 'mbps') !== false) {
    $reply = "🚀 **KNET Unlimited Internet Packages:**\n\nAll packages feature **truly unlimited data** with no daily caps, no throttling, and 24/7 technical support:\n\n• **Home Basic (10 Mbps):** Ideal for social media, WhatsApp, web browsing, and Zoom calls for 2–3 devices.\n• **Home Unlimited (20 Mbps) — Most Popular:** Smooth 4K YouTube/Netflix streaming, remote work, and gaming for 5–8 devices.\n• **Home Ultra (Custom / Ultra Speed):** High-speed multi-user bandwidth for large households and content creators.\n• **Business SME & Enterprise:** Dedicated symmetrical bandwidth with 99.5% uptime SLA, priority response, and optional static IP.\n\nWould you like to get connected or check installation availability?";
    $actions = [
        ['label' => 'Get Connected on WhatsApp', 'url' => build_whatsapp_link($wa_clean, "Hello KNET, I am interested in signing up for the 20Mbps Home Unlimited package at my location: ")],
        ['label' => 'Compare All Packages', 'url' => 'packages.php']
    ];
}

// 6. Telecom Subcontracting, OSP & Civil Works
elseif (strpos($msg_lower, 'contract') !== false || strpos($msg_lower, 'subcontract') !== false || strpos($msg_lower, 'infrastructure') !== false || strpos($msg_lower, 'safaricom') !== false || strpos($msg_lower, 'adrian') !== false || strpos($msg_lower, 'osp') !== false || strpos($msg_lower, 'fiber cut') !== false || strpos($msg_lower, 'splicing') !== false || strpos($msg_lower, 'drop') !== false) {
    $reply = "🏗️ **Telecom Subcontracting & Carrier Field Services:**\n\nKNET is a licensed field engineering execution partner for Tier-1 telcos (Safaricom, Airtel, Liquid) and national prime contractors across Western Kenya:\n\n• **FTTH / FTTB Subscriber Drops:** Rapid last-mile premises connection adhering to strict optical loss thresholds.\n• **24/7 SLA Emergency Fiber Restoration:** Sub-45-minute dispatch for roadside fiber breaks with precision core alignment splicing and OTDR trace sign-off.\n• **Outside Plant (OSP) & Civil Works:** Trenching, ducting, and pole planting under strict EHS safety compliance.\n• **Equipped Fleet:** Fujikura fusion splicers, calibrated EXFO OTDRs, launch cables, and 4x4 dispatch units.\n\nYou can download our official 2-Page Corporate Capability Statement directly from the site.";
    $actions = [
        ['label' => 'Download Capability Statement (PDF)', 'url' => 'capability-statement.php'],
        ['label' => 'Contact Engineering Ops (WhatsApp)', 'url' => build_whatsapp_link($wa_clean, "Hello KNET Engineering Desk, I would like to inquire about telecom subcontracting partnership for Western Kenya projects.")]
    ];
}

// 7. Equipment, Routers, Switches & OLTs
elseif (strpos($msg_lower, 'router') !== false || strpos($msg_lower, 'switch') !== false || strpos($msg_lower, 'olt') !== false || strpos($msg_lower, 'mikrotik') !== false || strpos($msg_lower, 'ubiquiti') !== false || strpos($msg_lower, 'cable') !== false || strpos($msg_lower, 'starlink') !== false || strpos($msg_lower, 'tenda') !== false) {
    $reply = "📦 **KNET Equipment & Hardware Catalog:**\n\nWe supply genuine networking and carrier hardware across Western Kenya:\n\n• **Home Routers:** Tenda F6 N300 (4 antennas), Huawei HG8546M GPON ONU, TP-Link Archer C6 Gigabit.\n• **Switches & Central OLTs:** MikroTik CRS354 48-Port Managed Switch (10G/40G), HiOSO 2-PON / 4-PON Central Office OLTs, HiOSO PoE+ Switches.\n• **MikroTik Enterprise:** L009UiGS-RM Rackmount, RB4011 Quad-Core, RB951Ui SOHO Hotspot router.\n• **Ubiquiti Wireless:** LiteBeam M5 (15km+ P2P link), NanoStation Loco M2/M5 CPEs.\n• **Fiber & Cabling:** 1km Aerial Drop Cable drums, Easenet 305m pure copper Cat6 rolls, 6U/9U server cabinets, loaded FAT boxes.\n• **Starlink:** Gen 2 Gigabit Ethernet Adapters & heavy roof mounts.\n\n*Terms: Cash with order (M-Pesa payment confirmed prior to dispatch). Optional technician setup assistance available upon request.*";
    $actions = [
        ['label' => 'Check Today\'s Price on WhatsApp', 'url' => build_whatsapp_link($wa_clean, "Hello KNET Equipment Desk, what is today's price and availability for: ")],
        ['label' => 'Browse Full Store', 'url' => 'shop.php']
    ];
}

// 8. General Greetings & Help
else {
    $reply = "👋 **Hello! I'm your KNET 24/7 Assistant.**\n\nHow can I help you today? Here are some popular things you can ask me about:\n\n1. **Check Coverage** in your estate or town (Vihiga, Kakamega, Nairobi).\n2. **Explore Internet Packages** (10Mbps, 20Mbps, Business SME).\n3. **Blackout Power Backups** (Vestwoods 1kVA battery, EcoFlow, Mini-UPS).\n4. **Hardware & Infrastructure** (Routers, MikroTik, Ubiquiti, OLTs, Switches).\n5. **Report an Outage or Red Light** on your router.\n6. **Telecom Subcontracting** for Tier-1 carriers.\n\nOr click below to speak directly with our team on WhatsApp!";
    $actions = [
        ['label' => 'Check Coverage', 'prompt' => 'Is KNET available in my area?'],
        ['label' => 'View Packages', 'url' => 'packages.php'],
        ['label' => 'Hardware & Batteries', 'url' => 'shop.php'],
        ['label' => 'Chat on WhatsApp', 'url' => build_whatsapp_link($wa_clean, "Hello KNET Team, I have a general inquiry about your services.")]
    ];
}

echo json_encode([
    'success' => true,
    'reply' => $reply,
    'actions' => $actions
]);
