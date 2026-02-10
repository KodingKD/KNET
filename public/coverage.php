<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Service Coverage";
$page_description = "Check KNET internet availability in your area. Serving Vihiga (Mbale, Chavakali), Kakamega (Town, Mumias), and Nairobi (Westlands, Kilimani).";
$page_keywords = "Internet Coverage Vihiga, Wifi Availability Kakamega, Fiber coverage Nairobi, KNET Network Map";
include INCLUDES_PATH . '/header.php';

// Fetch regions from DB
try {
    $stmt = $db->query("SELECT region, GROUP_CONCAT(area_name) as areas FROM coverage_areas GROUP BY region");
    $coverage_data = $stmt->fetchAll();
} catch (PDOException $e) {
    $coverage_data = [];
}
?>

<!-- Page Header -->
<section class="py-20 px-4 md:px-8 bg-primary/5 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black mb-6">Coverage Areas</h1>
        <p class="text-xl text-slate-400">Find out if KNET is available in your neighborhood.</p>
    </div>
</section>

<!-- Coverage Checker -->
<section class="py-24 px-4 md:px-8 bg-dark-bg">
    <div class="max-w-4xl mx-auto">
        <div class="bg-card-bg border border-white/10 p-10 md:p-16 rounded-[40px] shadow-2xl relative overflow-hidden">
            <div class="absolute top-0 left-0 w-2 h-full bg-primary"></div>

            <h2 class="text-3xl font-black mb-10 text-center">Quick Coverage Check</h2>
            <p class="text-slate-400 text-center mb-10">Select your region and enter your specific estate or town to
                check signal availability.</p>

            <form action="api/coverage-check.php" method="POST" class="flex flex-col md:flex-row gap-6">
                <div class="flex-grow">
                    <input type="text" name="area" placeholder="e.g. Mbale Town, Westlands, etc." required
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-6 py-4 text-white focus:outline-none focus:border-primary transition-all">
                </div>
                <button type="submit"
                    class="bg-primary hover:bg-primary-hover px-10 py-4 rounded-xl font-bold shadow-xl shadow-primary/20 transition-all">
                    Check Now
                </button>
            </form>

            <p class="mt-8 text-sm text-center text-slate-500">
                Checking coverage will redirect you to WhatsApp for a free site survey request.
            </p>
        </div>
    </div>
</section>

<!-- Regions List -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-5xl font-black mb-4">Our Main Service Regions</h2>
            <p class="text-slate-400">We are currently operating in these counties with plans to expand further.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($coverage_data as $row): ?>
                <div class="bg-card-bg border border-white/5 p-10 rounded-3xl hover:border-primary/50 transition-all">
                    <div
                        class="inline-block bg-primary/10 text-primary px-4 py-1 rounded-full text-xs font-black uppercase tracking-widest mb-6">
                        <?php echo e($row['region']); ?>
                    </div>
                    <h3 class="text-2xl font-black mb-6 flex items-center gap-3">
                        <i data-lucide="map-pin" class="text-accent"></i>
                        <?php echo e($row['region']); ?> County
                    </h3>
                    <div class="flex flex-wrap gap-2 text-slate-400 font-medium">
                        <?php
                        $areas = explode(',', $row['areas']);
                        foreach ($areas as $area):
                            ?>
                            <span class="bg-white/5 px-3 py-1 rounded-lg text-xs">
                                <?php echo e(trim($area)); ?>
                            </span>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-10 pt-6 border-t border-white/5">
                        <p class="text-sm text-slate-500 mb-6 font-medium">Fiber & Wireless Availability</p>
                        <a href="contact.php?interest=<?php echo urlencode($row['region']); ?> Coverage"
                            class="text-primary font-bold flex items-center gap-2 group">
                            Inquire for this area <i data-lucide="arrow-right"
                                class="w-4 h-4 group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>

            <!-- Expansion Card -->
            <div
                class="bg-primary/5 border border-primary/20 p-10 rounded-3xl flex flex-col items-center justify-center text-center">
                <div class="w-16 h-16 bg-primary/20 rounded-full flex items-center justify-center text-primary mb-6">
                    <i data-lucide="plus" class="w-8 h-8"></i>
                </div>
                <h3 class="text-2xl font-black mb-4">Not In Your Area?</h3>
                <p class="text-slate-400 mb-8">Tell us where you need internet. We prioritize new infrastructure based
                    on demand!</p>
                <?php renderWhatsAppButton("Suggest My Area", "md", "I would like to suggest KNET coverage in: "); ?>
            </div>
        </div>
    </div>
</section>

<!-- Interactive Coverage Map -->
<section class="py-24 px-4 md:px-8 border-t border-white/5 bg-white/[0.01]">
    <div class="max-w-7xl mx-auto flex flex-col lg:flex-row gap-16 items-start">
        <div class="flex-1">
            <h2 class="text-3xl md:text-5xl font-black mb-6">Strategic Network Nodes.</h2>
            <p class="text-lg text-slate-400 mb-8 leading-relaxed">
                We maintain backbone infrastructure in Nairobi and Western Kenya, ensuring that our local distribution
                points have the highest possible bandwidth capacity.
            </p>
            <div class="space-y-4">
                <div class="flex items-center gap-4 cursor-pointer hover:bg-white/5 p-2 rounded-lg transition-colors"
                    onclick="focusMap(0)">
                    <span
                        class="w-10 h-10 bg-accent/20 text-accent rounded-full flex items-center justify-center font-bold">1</span>
                    <div>
                        <span class="text-slate-300 font-bold block">Nairobi Datacenter Uplinks</span>
                        <span class="text-slate-500 text-sm">Westlands & Kilimani Backbone</span>
                    </div>
                </div>
                <div class="flex items-center gap-4 cursor-pointer hover:bg-white/5 p-2 rounded-lg transition-colors"
                    onclick="focusMap(1)">
                    <span
                        class="w-10 h-10 bg-accent/20 text-accent rounded-full flex items-center justify-center font-bold">2</span>
                    <div>
                        <span class="text-slate-300 font-bold block">Regional Wireless Hubs</span>
                        <span class="text-slate-500 text-sm">Kakamega & Vihiga High Sites</span>
                    </div>
                </div>
                <div class="flex items-center gap-4 cursor-pointer hover:bg-white/5 p-2 rounded-lg transition-colors"
                    onclick="focusMap(2)">
                    <span
                        class="w-10 h-10 bg-accent/20 text-accent rounded-full flex items-center justify-center font-bold">3</span>
                    <div>
                        <span class="text-slate-300 font-bold block">Local Distribution</span>
                        <span class="text-slate-500 text-sm">FTTH & P2P Last Mile</span>
                    </div>
                </div>
            </div>

            <div class="mt-8 bg-primary/10 border border-primary/20 p-4 rounded-xl flex items-start gap-4">
                <i data-lucide="info" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                <p class="text-sm text-slate-400">
                    <strong class="text-primary block mb-1">Interactive Map</strong>
                    Click on the colored zones to see coverage details. Zoom in to see street-level availability.
                </p>
            </div>
        </div>

        <div
            class="flex-1 w-full h-[500px] bg-card-bg rounded-[40px] border border-white/10 relative overflow-hidden shadow-2xl z-0">
            <div id="coverage-map" class="w-full h-full z-10"></div>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var map = L.map('coverage-map', {
            zoomControl: true,
            scrollWheelZoom: true
        }).setView([0.1, 35.5], 7);

        L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/">CARTO</a>',
            subdomains: 'abcd',
            maxZoom: 19
        }).addTo(map);

        var zones = [
            {
                name: 'Nairobi Node',
                lat: -1.264, lng: 36.804,
                color: '#007BFF', radius: 6000,
                desc: '<strong>Nairobi Backbone</strong><br>Westlands & Kilimani<br>Datacenter Uplinks<br><em>Fiber & Wireless</em>'
            },
            {
                name: 'Kakamega Node',
                lat: 0.2827, lng: 34.7519,
                color: '#A4F500', radius: 5000,
                desc: '<strong>Kakamega Hub</strong><br>Town & Milimani<br>Regional Wireless<br><em>Fiber & Wireless</em>'
            },
            {
                name: 'Vihiga Node',
                lat: 0.0863, lng: 34.7223,
                color: '#00D4FF', radius: 4000,
                desc: '<strong>Vihiga Hub</strong><br>Mbale & Chavakali<br>Local Distribution<br><em>Fiber & P2P</em>'
            }
        ];

        zones.forEach(function (zone) {
            L.circle([zone.lat, zone.lng], {
                color: zone.color,
                fillColor: zone.color,
                fillOpacity: 0.15,
                radius: zone.radius,
                weight: 2
            }).addTo(map).bindPopup(zone.desc);
        });

        window.focusMap = function (index) {
            var z = zones[index];
            map.flyTo([z.lat, z.lng], 13, { duration: 1.5 });
        };
    });
</script>

<?php include INCLUDES_PATH . '/footer.php'; ?>