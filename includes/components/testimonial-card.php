<?php
/**
 * Testimonial Card Component
 */
?>
<div
    class="bg-card-bg border border-white/5 p-8 rounded-2xl shadow-xl hover:-translate-y-2 transition-all duration-300">
    <div class="flex text-accent mb-4">
        <?php for ($i = 0; $i < ($rating ?? 5); $i++): ?>
            <i data-lucide="star" class="w-5 h-5 fill-current"></i>
        <?php endfor; ?>
    </div>
    <p class="text-slate-300 italic mb-6 leading-relaxed">
        "
        <?php echo e($testimonial); ?>"
    </p>
    <div class="flex items-center gap-4">
        <div
            class="w-12 h-12 bg-primary/20 rounded-full flex items-center justify-center text-primary font-bold text-xl uppercase">
            <?php echo substr($client_name, 0, 1); ?>
        </div>
        <div>
            <h5 class="font-bold text-white">
                <?php echo e($client_name); ?>
            </h5>
            <p class="text-sm text-slate-500">
                <?php echo e($location); ?> •
                <?php echo ucfirst(e($client_type)); ?>
            </p>
        </div>
    </div>
</div>