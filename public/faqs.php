<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Frequently Asked Questions";
include INCLUDES_PATH . '/header.php';

// Fetch FAQs from DB
try {
    $stmt = $db->query("SELECT * FROM faqs WHERE is_active = 1 ORDER BY category, sort_order ASC");
    $faqs = $stmt->fetchAll();

    $grouped_faqs = [];
    foreach ($faqs as $f) {
        $grouped_faqs[$f['category']][] = $f;
    }
} catch (PDOException $e) {
    $grouped_faqs = [];
}
?>

<!-- Page Header -->
<section class="py-20 px-4 md:px-8 bg-primary/5 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black mb-6">Got Questions?</h1>
        <p class="text-xl text-slate-400">Everything you need to know about KNET internet services.</p>
    </div>
</section>

<!-- FAQ Accordion -->
<section class="py-24 px-4 md:px-8">
    <div class="max-w-4xl mx-auto">

        <?php foreach ($grouped_faqs as $category => $items): ?>
            <div class="mb-16">
                <h2 class="text-2xl font-black mb-8 pb-4 border-b border-primary/20 text-primary flex items-center gap-3">
                    <i data-lucide="layers" class="w-6 h-6"></i>
                    <?php echo e($category); ?>
                </h2>

                <div class="space-y-4" x-data="{ selected: null }">
                    <?php foreach ($items as $index => $item): ?>
                        <?php $faq_id = strtolower(str_replace(' ', '', $category)) . $index; ?>
                        <div class="bg-card-bg border border-white/5 rounded-2xl overflow-hidden transition-all duration-300"
                            :class="{ 'border-primary/30 ring-1 ring-primary/10': selected === '<?php echo $faq_id; ?>' }">
                            <button
                                @click="selected !== '<?php echo $faq_id; ?>' ? selected = '<?php echo $faq_id; ?>' : selected = null"
                                class="w-full p-6 text-left flex justify-between items-center gap-4 hover:bg-white/[0.02]">
                                <span class="text-lg font-bold text-slate-200">
                                    <?php echo e($item['question']); ?>
                                </span>
                                <i data-lucide="chevron-down" class="w-5 h-5 transition-transform duration-300"
                                    :class="{ 'rotate-180 text-primary': selected === '<?php echo $faq_id; ?>' }"></i>
                            </button>

                            <div x-show="selected === '<?php echo $faq_id; ?>'" x-collapse
                                class="px-6 pb-6 text-slate-400 leading-relaxed border-t border-white/5 pt-6 bg-white/[0.01]">
                                <?php echo nl2br(e($item['answer'])); ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- No FAQs Fallback -->
        <?php if (empty($grouped_faqs)): ?>
            <div class="text-center py-20 bg-card-bg border border-white/5 rounded-[40px]">
                <i data-lucide="help-circle" class="w-16 h-16 text-slate-600 mx-auto mb-6"></i>
                <h3 class="text-2xl font-bold mb-4">Under Construction</h3>
                <p class="text-slate-400">We are currently updating our knowledge base. Please contact us directly for any
                    assistance.</p>
            </div>
        <?php endif; ?>
    </div>
</section>

<!-- Support CTA -->
<section class="py-24 px-4 md:px-8 bg-primary/5">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-3xl font-black mb-6">Still have questions?</h2>
        <p class="text-slate-400 text-lg mb-10">Our support team is online and ready to help you with technical or
            billing inquiries.</p>
        <div class="flex flex-wrap justify-center gap-6">
            <?php renderWhatsAppButton("Message Support", "lg", "Hello KNET Support, I have a question about..."); ?>
            <a href="contact.php"
                class="bg-white/5 border border-white/10 px-8 py-4 rounded-xl font-bold hover:bg-white/10 transition-all flex items-center gap-2">
                <i data-lucide="mail"></i> Email Us
            </a>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>