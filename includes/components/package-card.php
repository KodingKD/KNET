<?php
/**
 * Package Card Component
 */
?>
<div
    class="flex flex-col <?php echo ($featured ?? false) ? 'bg-primary/5 border-primary shadow-primary/20 scale-105 z-10' : 'bg-card-bg border-white/5'; ?> border p-8 rounded-3xl shadow-2xl relative transition-all hover:border-primary/50 group">
    <?php if ($featured ?? false): ?>
        <div
            class="absolute -top-4 left-1/2 -translate-x-1/2 bg-accent text-dark-bg px-4 py-1 rounded-full text-xs font-black uppercase tracking-wider">
            Most Popular
        </div>
    <?php endif; ?>

    <div class="mb-8">
        <h3 class="text-2xl font-black mb-2">
            <?php echo e($name); ?>
        </h3>
        <p class="text-slate-400 text-sm">
            <?php echo e($description); ?>
        </p>
    </div>

    <div class="mb-8 flex-grow">
        <ul class="flex flex-col gap-4">
            <?php foreach ($features as $feature): ?>
                <li class="flex items-start gap-3 text-slate-300">
                    <i data-lucide="check-circle-2" class="w-5 h-5 text-accent shrink-0"></i>
                    <span>
                        <?php echo e($feature); ?>
                    </span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="mt-auto">
        <a href="contact.php?interest=<?php echo urlencode($name); ?>"
            class="w-full <?php echo ($featured ?? false) ? 'bg-primary hover:bg-primary-hover shadow-primary/20' : 'bg-white/5 hover:bg-white/10'; ?> text-white py-4 rounded-xl font-bold flex items-center justify-center gap-2 transition-all">
            Get Started <i data-lucide="arrow-right" class="w-4 h-4"></i>
        </a>
    </div>
</div>