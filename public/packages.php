<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Internet Packages";
include INCLUDES_PATH . '/header.php';

$package_groups = [
    'Home Fiber' => [
        'description' => 'Unlimited high-speed fiber for your residence. No FUP, no caps.',
        'items' => [
            [
                'name' => 'Home Basic',
                'description' => 'Great for browsing, social media & email.',
                'features' => ['Unlimited Data', 'Standard Support', 'Good for 2-3 Devices', 'Free Installation*'],
                'featured' => false
            ],
            [
                'name' => 'Home Unlimited',
                'description' => 'Perfect for HD streaming and gaming.',
                'features' => ['Unlimited Data', 'Priority Support', 'Good for 5-8 Devices', 'No Throttling', 'Free Router*'],
                'featured' => true
            ],
            [
                'name' => 'Home Ultra',
                'description' => 'Maximum speed for large households.',
                'features' => ['Unlimited Data', '24/7 Premium Support', 'Unlimited Devices', 'Low Latency Gaming', 'Advanced Wi-Fi 6 Router*'],
                'featured' => false
            ]
        ]
    ],
    'Business Solutions' => [
        'description' => 'Dedicated lines with SLA for businesses and institutions.',
        'items' => [
            [
                'name' => 'SME Starter',
                'description' => 'Reliable internet for small offices.',
                'features' => ['Dedicated Bandwidth', '99.5% Uptime', 'Static IP (Optional)', 'Support Response < 4hrs'],
                'featured' => false
            ],
            [
                'name' => 'Business Premium',
                'description' => 'Optimized for cloud and video conferencing.',
                'features' => ['Dedicated Bandwidth', '99.9% SLA', 'Free Static IP', 'Priority On-site Support'],
                'featured' => true
            ],
            [
                'name' => 'Enterprise',
                'description' => 'Customized high-capacity solutions.',
                'features' => ['Custom Bandwidth', 'Managed Firewall', 'Redundant Links', '24/7 Dedicated Support'],
                'featured' => false
            ]
        ]
    ],
    'Wi-Fi Hotspots' => [
        'description' => 'Turn-key solutions for monetizable public Wi-Fi.',
        'items' => [
            [
                'name' => 'Cafe/Bar Hotspot',
                'description' => 'Attract customers with free or paid Wi-Fi.',
                'features' => ['Branded Login Page', 'Voucher Support', 'Social Login', 'Bandwidth Limiting'],
                'featured' => false
            ],
            [
                'name' => 'Estate Mesh',
                'description' => 'Complete coverage for apartment blocks.',
                'features' => ['Massive Concurrent Users', 'User Isolation Security', 'Monthly Subscription Portal', 'M-Pesa Integration'],
                'featured' => true
            ]
        ]
    ]
];
?>

<!-- Page Header -->
<section class="py-20 px-4 md:px-8 bg-primary/5 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black mb-6 text-white">Choose Your Plan</h1>
        <p class="text-xl text-slate-400">Simple, transparent tiers. No contracts, no hidden fees, just great internet.
        </p>
    </div>
</section>

<!-- Tabs / Groups Select -->
<section
    class="py-12 px-4 md:px-8 border-b border-white/5 sticky top-20 lg:top-[90px] bg-dark-bg/80 backdrop-blur-xl z-30">
    <div class="max-w-7xl mx-auto flex flex-wrap justify-center gap-4">
        <?php foreach (array_keys($package_groups) as $group): ?>
            <a href="#<?php echo strtolower(str_replace(' ', '-', $group)); ?>"
                class="px-6 py-2 rounded-full border border-white/10 hover:border-primary transition-all font-bold text-sm bg-white/5 hover:bg-primary/10">
                <?php echo $group; ?>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<!-- Package Grids -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-7xl mx-auto flex flex-col gap-32">
        <?php foreach ($package_groups as $group => $info): ?>
            <div id="<?php echo strtolower(str_replace(' ', '-', $group)); ?>" class="scroll-mt-40">
                <div class="text-center mb-16">
                    <h2 class="text-3xl md:text-5xl font-black mb-4">
                        <?php echo $group; ?>
                    </h2>
                    <p class="text-slate-400">
                        <?php echo $info['description']; ?>
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php
                    foreach ($info['items'] as $item) {
                        render_component('package-card', $item);
                    }
                    ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- Comparison Note -->
<section class="py-16 px-4 md:px-8 bg-card-bg rounded-[40px] max-w-7xl mx-auto mb-24 border border-white/5">
    <div class="text-center">
        <h3 class="text-2xl font-black mb-6">Need a Custom Bandwidth Requirement?</h3>
        <p class="text-slate-400 mb-8 max-w-2xl mx-auto">If your business requires a very specific speed or custom SLA,
            we are happy to build a tailor-made package for you.</p>
        <?php renderWhatsAppButton("Discuss Custom Solution", "md", "I need a custom internet package for my organization."); ?>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>