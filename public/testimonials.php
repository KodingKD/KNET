<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Client Testimonials";
include INCLUDES_PATH . '/header.php';

// Fetch testimonials from DB
try {
    $stmt = $db->query("SELECT * FROM testimonials WHERE is_featured = 1 OR is_featured = 0 ORDER BY created_at DESC");
    $testimonials = $stmt->fetchAll();
} catch (PDOException $e) {
    $testimonials = [];
}

// Fallback if DB empty
if (empty($testimonials)) {
    $testimonials = [
        ['client_name' => 'Dr. Evans Musina', 'location' => 'Vihiga', 'client_type' => 'institution', 'testimonial' => 'The reliability of KNET has allowed our clinic to maintain digital records without any interruption. Highly recommended.', 'rating' => 5],
        ['client_name' => 'Sarah Wanjiku', 'location' => 'Nairobi', 'client_type' => 'home', 'testimonial' => 'Switching to KNET was the best decision for my remote work setup. The speeds are truly synchronous.', 'rating' => 5],
        ['client_name' => 'Kefa Otieno', 'location' => 'Kakamega', 'client_type' => 'business', 'testimonial' => 'Their hotspot solution in our hotel has increased our customer satisfaction significantly.', 'rating' => 5],
        ['client_name' => 'Mama Njeri', 'location' => 'Mbale', 'client_type' => 'home', 'testimonial' => 'Affordable and fast. My grandchildren love visiting because the internet is so good!', 'rating' => 4],
        ['client_name' => 'Tech Solutions Ltd', 'location' => 'Westlands', 'client_type' => 'business', 'testimonial' => 'We use their dedicated line for our servers. The uptime is exactly as promised in the SLA.', 'rating' => 5],
        ['client_name' => 'St. Mary\'s Academy', 'location' => 'Mumias', 'client_type' => 'institution', 'testimonial' => 'KNET installed a full mesh system for our school. The coverage is excellent across all blocks.', 'rating' => 5],
    ];
}
?>

<!-- Page Header -->
<section class="py-20 px-4 md:px-8 bg-primary/5 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black mb-6">Real Stories from Real Clients</h1>
        <p class="text-xl text-slate-400">Join the thousands of people across Western Kenya and Nairobi who trust KNET
            for their daily connectivity.</p>
    </div>
</section>

<!-- Testimonials Grid -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach ($testimonials as $t): ?>
                <?php render_component('testimonial-card', $t); ?>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Share Your Story -->
<section class="py-24 px-4 md:px-8 bg-card-bg border-y border-white/5">
    <div class="max-w-3xl mx-auto text-center">
        <h2 class="text-3xl font-black mb-6">Happy with our service?</h2>
        <p class="text-slate-400 text-lg mb-10">We'd love to hear from you! Your feedback helps us improve and helps
            others make the right choice.</p>
        <div class="flex flex-wrap justify-center gap-6">
            <?php renderWhatsAppButton("Send Feedback", "md", "I'd like to share my testimonial about KNET: "); ?>
        </div>
    </div>
</section>

<!-- Stats Bar -->
<section class="py-16 px-4 md:px-8 bg-primary/5">
    <div class="max-w-7xl mx-auto grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
        <div>
            <div class="text-4xl font-black text-white mb-2">99.9%</div>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Uptime Record</p>
        </div>
        <div>
            <div class="text-4xl font-black text-white mb-2">24/7</div>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Support Access</p>
        </div>
        <div>
            <div class="text-4xl font-black text-white mb-2">150+</div>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Estates Covered</p>
        </div>
        <div>
            <div class="text-4xl font-black text-white mb-2">0</div>
            <p class="text-slate-500 text-xs font-bold uppercase tracking-widest">Data Limits</p>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>