<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate Capability Statement | KNET Telecom Subcontracting</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: #0b1120;
            color: #0f172a;
        }
        @media print {
            body {
                background-color: #ffffff !important;
                color: #0f172a !important;
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
            .no-print {
                display: none !important;
            }
            .page-break {
                page-break-before: always;
                break-before: page;
            }
            .a4-page {
                width: 100% !important;
                min-height: 297mm !important;
                margin: 0 !important;
                padding: 10mm 12mm !important;
                box-shadow: none !important;
                border: none !important;
                border-radius: 0 !important;
            }
            @page {
                size: A4;
                margin: 0;
            }
        }
        .a4-page {
            width: 210mm;
            min-height: 297mm;
            margin: 20px auto;
            background: #ffffff;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.5), 0 8px 10px -6px rgba(0, 0, 0, 0.5);
            padding: 14mm 14mm;
            box-sizing: border-box;
            position: relative;
        }
    </style>
</head>
<body class="py-6 px-4 print:p-0">

    <!-- Top Action Bar (Screen Only) -->
    <div class="max-w-[210mm] mx-auto mb-6 flex items-center justify-between no-print bg-slate-900 border border-white/10 rounded-2xl p-4 shadow-xl">
        <div class="flex items-center gap-3">
            <a href="infrastructure.php" class="text-slate-400 hover:text-white text-sm font-semibold flex items-center gap-1.5 transition-colors">
                <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Infrastructure
            </a>
            <span class="text-slate-600">|</span>
            <span class="text-white text-sm font-bold">KNET Telecom Capability Statement</span>
        </div>
        <div class="flex items-center gap-3">
            <button onclick="window.print()" class="bg-blue-600 hover:bg-blue-500 text-white font-bold px-5 py-2.5 rounded-xl text-sm flex items-center gap-2 shadow-lg shadow-blue-600/30 transition-all">
                <i data-lucide="printer" class="w-4 h-4"></i> Print / Save as PDF
            </button>
        </div>
    </div>

    <!-- ==================== PAGE 1 ==================== -->
    <div class="a4-page flex flex-col justify-between">
        <div>
            <!-- Header Block -->
            <div class="flex items-start justify-between border-b-2 border-blue-600 pb-5 mb-5">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 bg-blue-600 rounded-xl flex items-center justify-center text-white shadow-md">
                        <i data-lucide="network" class="w-7 h-7"></i>
                    </div>
                    <div>
                        <h1 class="text-2xl font-black tracking-tight text-slate-900 uppercase">KNET NETWORKS</h1>
                        <p class="text-xs font-bold text-blue-600 uppercase tracking-widest">KNET Network Solutions Limited</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="inline-block bg-slate-900 text-white text-[11px] font-extrabold px-3 py-1 rounded uppercase tracking-wider mb-1">
                        Corporate Profile
                    </span>
                    <p class="text-[11px] text-slate-500 font-semibold">Ref: KNET-CAP-2026/01</p>
                    <p class="text-[11px] text-slate-600 font-bold">Western Kenya & Nairobi Corridors</p>
                </div>
            </div>

            <!-- Title & Pitch Banner -->
            <div class="bg-slate-50 border border-slate-200 rounded-xl p-4 mb-5">
                <h2 class="text-lg font-black text-slate-900 uppercase tracking-tight mb-1">
                    Telecom Subcontracting & Carrier Field Services
                </h2>
                <p class="text-xs text-slate-600 leading-relaxed">
                    Reliable on-the-ground engineering subcontracting partner for Tier-1 Telecommunications Operators (Safaricom, Airtel, Jamii Telecommunications, Liquid Intelligent Technologies) and National Turnkey Contractors (Adrian Kenya, Soliton Telmec, Mitsumi). Delivering fast mobilization, rigorous quality compliance, and rapid outage restoration.
                </p>
            </div>

            <!-- Quick Snapshot Metrics -->
            <div class="grid grid-cols-4 gap-3 mb-6">
                <div class="bg-blue-50 border border-blue-100 rounded-lg p-2.5 text-center">
                    <span class="block text-xl font-black text-blue-600">&lt; 45 Min</span>
                    <span class="text-[10px] font-bold text-slate-600 uppercase tracking-wider">Restoration Standby</span>
                </div>
                <div class="bg-blue-50 border border-blue-100 rounded-lg p-2.5 text-center">
                    <span class="block text-xl font-black text-blue-600">Western Hub</span>
                    <span class="text-[10px] font-bold text-slate-600 uppercase tracking-wider">Vihiga & Kakamega Base</span>
                </div>
                <div class="bg-blue-50 border border-blue-100 rounded-lg p-2.5 text-center">
                    <span class="block text-xl font-black text-blue-600">CA Licensed</span>
                    <span class="text-[10px] font-bold text-slate-600 uppercase tracking-wider">Regulatory Compliance</span>
                </div>
                <div class="bg-blue-50 border border-blue-100 rounded-lg p-2.5 text-center">
                    <span class="block text-xl font-black text-blue-600">100% Calibrated</span>
                    <span class="text-[10px] font-bold text-slate-600 uppercase tracking-wider">OTDR & Splicing Gear</span>
                </div>
            </div>

            <!-- Core Engineering Services Matrix -->
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-3 flex items-center gap-1.5 border-b border-slate-200 pb-1">
                <i data-lucide="layers" class="w-4 h-4 text-blue-600"></i> Core Subcontracting Capabilities
            </h3>

            <div class="grid grid-cols-2 gap-4 mb-6">
                <!-- Package 1 -->
                <div class="border border-slate-200 rounded-xl p-3.5 bg-white">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-6 h-6 rounded-md bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">1</span>
                        <h4 class="text-xs font-extrabold text-slate-900 uppercase">FTTH / FTTB Subscriber Drops</h4>
                    </div>
                    <ul class="text-[11px] text-slate-600 space-y-1.5 list-disc list-inside">
                        <li>Last-mile aerial drop cable installation (FAT to ATB/ONT).</li>
                        <li>Internal micro-conduit cabling, fiber faceplate termination.</li>
                        <li>Optical power budget verification (-18 to -23 dBm threshold).</li>
                        <li>Wi-Fi survey, ONT registration, and signed customer sign-off.</li>
                    </ul>
                </div>

                <!-- Package 2 -->
                <div class="border border-slate-200 rounded-xl p-3.5 bg-white">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-6 h-6 rounded-md bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">2</span>
                        <h4 class="text-xs font-extrabold text-slate-900 uppercase">24/7 SLA Fiber Restoration</h4>
                    </div>
                    <ul class="text-[11px] text-slate-600 space-y-1.5 list-disc list-inside">
                        <li>Emergency dispatch for cut fiber due to roadworks or accidents.</li>
                        <li>OTDR fault localization and pinpoint damage verification.</li>
                        <li>In-line / dome splice closure re-splicing with core alignment.</li>
                        <li>Bi-directional OTDR trace submission directly to client NOC.</li>
                    </ul>
                </div>

                <!-- Package 3 -->
                <div class="border border-slate-200 rounded-xl p-3.5 bg-white">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-6 h-6 rounded-md bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">3</span>
                        <h4 class="text-xs font-extrabold text-slate-900 uppercase">Outside Plant (OSP) & Civil Works</h4>
                    </div>
                    <ul class="text-[11px] text-slate-600 space-y-1.5 list-disc list-inside">
                        <li>Manual trenching, micro-trenching, HDPE ducting & warning tape.</li>
                        <li>Treated wooden & concrete pole erection with stays & fittings.</li>
                        <li>Aerial ADSS & Figure-8 cable stringing to safety standards.</li>
                        <li>Corridor mobilization and community ground facilitation.</li>
                    </ul>
                </div>

                <!-- Package 4 -->
                <div class="border border-slate-200 rounded-xl p-3.5 bg-white">
                    <div class="flex items-center gap-2 mb-2">
                        <span class="w-6 h-6 rounded-md bg-blue-100 text-blue-600 flex items-center justify-center text-xs font-bold">4</span>
                        <h4 class="text-xs font-extrabold text-slate-900 uppercase">Tower Rigging & Enterprise Wireless</h4>
                    </div>
                    <ul class="text-[11px] text-slate-600 space-y-1.5 list-disc list-inside">
                        <li>Microwave dish installation, alignment, and RSSI optimization.</li>
                        <li>Antenna rigging, grounding, and lightning arrestor surge proofing.</li>
                        <li>Starlink Enterprise & satellite off-grid site integration.</li>
                        <li>Certified tower climbers equipped with dual-lanyard fall arrest.</li>
                    </ul>
                </div>
            </div>

            <!-- Regional Coverage Map Strip -->
            <div class="bg-slate-900 text-white rounded-xl p-4">
                <h4 class="text-xs font-black uppercase tracking-wider text-blue-400 mb-2">
                    Primary Regional Corridors (Instant Mobilization)
                </h4>
                <div class="grid grid-cols-3 gap-3 text-[11px]">
                    <div>
                        <span class="font-bold text-white block">Western Kenya Core:</span>
                        <span class="text-slate-400">Vihiga County (Mbale, Chavakali, Luanda, Majengo), Kakamega County & Town.</span>
                    </div>
                    <div>
                        <span class="font-bold text-white block">Regional Expansion:</span>
                        <span class="text-slate-400">Kisumu Highway Corridor, Eldoret Axis, Bungoma, and surrounding peri-urban zones.</span>
                    </div>
                    <div>
                        <span class="font-bold text-white block">Metro Operations:</span>
                        <span class="text-slate-400">Nairobi Metro & Enterprise Corridor coordination.</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Page 1 -->
        <div class="border-t border-slate-200 pt-3 flex items-center justify-between text-[10px] text-slate-500">
            <span>KNET Network Solutions Limited &bull; Corporate Capability Statement</span>
            <span class="font-bold">Page 1 of 2</span>
        </div>
    </div>

    <!-- ==================== PAGE 2 ==================== -->
    <div class="a4-page page-break flex flex-col justify-between">
        <div>
            <!-- Header Block Page 2 -->
            <div class="flex items-start justify-between border-b-2 border-blue-600 pb-3 mb-5">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-blue-600 rounded-lg flex items-center justify-center text-white">
                        <i data-lucide="network" class="w-5 h-5"></i>
                    </div>
                    <div>
                        <h2 class="text-sm font-black text-slate-900 uppercase">KNET NETWORKS</h2>
                        <p class="text-[9px] font-bold text-blue-600 uppercase tracking-widest">Technical Specifications & Fleet</p>
                    </div>
                </div>
                <div class="text-right">
                    <span class="text-[10px] font-extrabold text-slate-700">Ref: KNET-CAP-2026/01</span>
                </div>
            </div>

            <!-- Technical Equipment Fleet -->
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-3 flex items-center gap-1.5 border-b border-slate-200 pb-1">
                <i data-lucide="wrench" class="w-4 h-4 text-blue-600"></i> Field Tooling, Testing & Fleet Assets
            </h3>

            <div class="grid grid-cols-2 gap-3 mb-5">
                <div class="border border-slate-200 rounded-lg p-3 bg-slate-50">
                    <h4 class="text-xs font-bold text-slate-900 uppercase mb-1">Precision Splicing Equipment</h4>
                    <p class="text-[11px] text-slate-600 leading-relaxed">
                        Fujikura core-alignment fusion splicers, precision diamond cleavers, thermal strippers, and fiber preparation tools delivering splice losses below 0.02 dB.
                    </p>
                </div>
                <div class="border border-slate-200 rounded-lg p-3 bg-slate-50">
                    <h4 class="text-xs font-bold text-slate-900 uppercase mb-1">Optical Testing & Diagnostics</h4>
                    <p class="text-[11px] text-slate-600 leading-relaxed">
                        Calibrated Optical Time-Domain Reflectometers (OTDR), Optical Power Meters (OPM), Visual Fault Locators (VFL - 30mW), and optical inspection probes.
                    </p>
                </div>
                <div class="border border-slate-200 rounded-lg p-3 bg-slate-50">
                    <h4 class="text-xs font-bold text-slate-900 uppercase mb-1">Rapid Dispatch Fleet</h4>
                    <p class="text-[11px] text-slate-600 leading-relaxed">
                        Dedicated service vehicles and agile motorcycle units equipped with mobile splicing kits for rapid ingress into congested estates and remote rural terrain.
                    </p>
                </div>
                <div class="border border-slate-200 rounded-lg p-3 bg-slate-50">
                    <h4 class="text-xs font-bold text-slate-900 uppercase mb-1">Civil & Rigging Gear</h4>
                    <p class="text-[11px] text-slate-600 leading-relaxed">
                        Heavy-duty continuous conduit rodders, cable pulling grips, winch equipment, certified tower climbing full-body harnesses, and fiberglass ladders.
                    </p>
                </div>
            </div>

            <!-- Standard Operating Procedures / Quality Workflow -->
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-3 flex items-center gap-1.5 border-b border-slate-200 pb-1">
                <i data-lucide="check-square" class="w-4 h-4 text-blue-600"></i> Quality Assurance & Handover Workflow
            </h3>

            <div class="grid grid-cols-4 gap-2 mb-5 text-[10px]">
                <div class="border border-slate-200 rounded-lg p-2.5 bg-white text-center">
                    <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mx-auto mb-1 text-[10px]">1</div>
                    <span class="font-bold text-slate-900 block mb-1">Scope & Survey</span>
                    <span class="text-slate-600">Pre-install route survey, FAT port verification, and hazard audit.</span>
                </div>
                <div class="border border-slate-200 rounded-lg p-2.5 bg-white text-center">
                    <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mx-auto mb-1 text-[10px]">2</div>
                    <span class="font-bold text-slate-900 block mb-1">Deployment</span>
                    <span class="text-slate-600">Adhering to KPLC clearance, tension specs, and clean aesthetic drops.</span>
                </div>
                <div class="border border-slate-200 rounded-lg p-2.5 bg-white text-center">
                    <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mx-auto mb-1 text-[10px]">3</div>
                    <span class="font-bold text-slate-900 block mb-1">Splicing & Test</span>
                    <span class="text-slate-600">Core alignment splice with full bi-directional OTDR power budget check.</span>
                </div>
                <div class="border border-slate-200 rounded-lg p-2.5 bg-white text-center">
                    <div class="w-6 h-6 rounded-full bg-blue-600 text-white flex items-center justify-center font-bold mx-auto mb-1 text-[10px]">4</div>
                    <span class="font-bold text-slate-900 block mb-1">NOC Handover</span>
                    <span class="text-slate-600">Delivery of photo proof, test sheets, ONT MAC registration, and sign-off.</span>
                </div>
            </div>

            <!-- Health, Safety & Environmental Compliance (EHS) -->
            <div class="bg-amber-50 border border-amber-200 rounded-xl p-3 mb-5">
                <h4 class="text-xs font-extrabold text-amber-900 uppercase flex items-center gap-1.5 mb-1">
                    <i data-lucide="shield-check" class="w-4 h-4 text-amber-700"></i> Environmental Health & Safety (EHS) Standard
                </h4>
                <p class="text-[10px] text-amber-900 leading-relaxed">
                    Zero-compromise safety policy: Mandatory personal protective equipment (PPE - safety boots, high-visibility vests, hard hats, dielectric safety glasses, and climbing harnesses). Stringent adherence to Occupational Safety and Health Act (OSHA) regulations and proper fiber scrap disposal protocols.
                </p>
            </div>

            <!-- Commercial Engagement Options -->
            <h3 class="text-xs font-black text-slate-900 uppercase tracking-wider mb-2 flex items-center gap-1.5 border-b border-slate-200 pb-1">
                <i data-lucide="briefcase" class="w-4 h-4 text-blue-600"></i> Commercial Subcontracting Models
            </h3>

            <div class="grid grid-cols-3 gap-2.5 mb-6 text-[10px]">
                <div class="border border-slate-200 rounded-lg p-2.5">
                    <span class="font-bold text-slate-900 block uppercase">Per-Drop Rate</span>
                    <span class="text-slate-600">Fixed unit cost per completed and verified residential/business FTTH connection.</span>
                </div>
                <div class="border border-slate-200 rounded-lg p-2.5">
                    <span class="font-bold text-slate-900 block uppercase">Linear Metre / KM</span>
                    <span class="text-slate-600">Turnkey rate for civil trenching, duct laying, pole planting, and aerial fiber stringing.</span>
                </div>
                <div class="border border-slate-200 rounded-lg p-2.5">
                    <span class="font-bold text-slate-900 block uppercase">Monthly SLA Retainer</span>
                    <span class="text-slate-600">Dedicated emergency restoration standby team with guaranteed dispatch SLAs.</span>
                </div>
            </div>

            <!-- Official Onboarding & Contact Block -->
            <div class="bg-slate-900 text-white rounded-xl p-4">
                <div class="flex items-center justify-between mb-3 border-b border-white/10 pb-2">
                    <div>
                        <h4 class="text-xs font-black uppercase text-blue-400">Engineering Operations & Vendor Onboarding</h4>
                        <p class="text-[10px] text-slate-400">KNET Network Solutions Limited</p>
                    </div>
                    <span class="text-[10px] font-bold bg-blue-600 text-white px-2 py-0.5 rounded">
                        Available for Immediate Deployment
                    </span>
                </div>
                <div class="grid grid-cols-3 gap-3 text-[11px]">
                    <div>
                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Direct Line / WhatsApp:</span>
                        <a href="<?php echo format_tel_link(SITE_PHONE); ?>" class="font-bold text-white hover:text-blue-400">
                            <?php echo SITE_PHONE; ?>
                        </a>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Engineering Desk:</span>
                        <a href="mailto:<?php echo SITE_EMAIL_SALES; ?>" class="font-bold text-white hover:text-blue-400">
                            <?php echo SITE_EMAIL_SALES; ?>
                        </a>
                    </div>
                    <div>
                        <span class="text-slate-400 block text-[10px] uppercase font-bold">Official Web Portal:</span>
                        <a href="https://knet.co.ke/infrastructure.php" class="font-bold text-white hover:text-blue-400">
                            knet.co.ke/infrastructure.php
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Page 2 -->
        <div class="border-t border-slate-200 pt-3 flex items-center justify-between text-[10px] text-slate-500">
            <span>KNET Network Solutions Limited &bull; Western Kenya Telecom Operations Hub</span>
            <span class="font-bold">Page 2 of 2</span>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>
</html>
