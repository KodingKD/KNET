<?php
/**
 * Footer Component
 */
?>
</main>

<footer class="bg-dark-bg pt-20 pb-10 border-t border-white/5 px-4 md:px-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
        <!-- Brand -->
        <div>
            <a href="index.php" class="flex items-center gap-2 mb-6">
                <img src="<?php echo SITE_URL; ?>/assets/images/logo.jpg?v=2" alt="KNET Logo"
                    width="40" height="40"
                    style="height: 40px; width: 40px; max-width: 40px; max-height: 40px; object-fit: cover; border-radius: 9999px;"
                    class="h-10 w-auto rounded-full">
                <span class="font-extrabold text-xl tracking-tighter">KNET <span
                        class="text-primary">NETWORKS</span></span>
            </a>
            <p class="text-slate-400 leading-relaxed mb-6">
                Bridging the digital divide with lightning-fast, unlimited internet solutions for Western Kenya and
                beyond.
            </p>
            <div class="flex flex-wrap gap-2.5">
                <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer"
                    aria-label="LinkedIn"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <i data-lucide="linkedin" class="w-5 h-5"></i>
                </a>
                <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer"
                    aria-label="Facebook"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <i data-lucide="facebook" class="w-5 h-5"></i>
                </a>
                <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" rel="noopener noreferrer"
                    aria-label="X (Twitter)"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <i data-lucide="twitter" class="w-5 h-5"></i>
                </a>
                <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer"
                    aria-label="Instagram"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <i data-lucide="instagram" class="w-5 h-5"></i>
                </a>
                <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank" rel="noopener noreferrer"
                    aria-label="YouTube"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <i data-lucide="youtube" class="w-5 h-5"></i>
                </a>
                <a href="<?php echo SOCIAL_TIKTOK; ?>" target="_blank" rel="noopener noreferrer"
                    aria-label="TikTok"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                        <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.82 4.47 6.27 6.27 0 0 0 1.87-4.47V8.71a8.19 8.19 0 0 0 4.9 1.6V6.86a4.83 4.83 0 0 1-1-.17z"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Quick Links -->
        <div>
            <h4 class="text-xl font-bold mb-6">Quick Links</h4>
            <ul class="flex flex-col gap-4 text-slate-400">
                <li><a href="about.php" class="hover:text-primary transition-colors">About Us</a></li>
                <li><a href="services.php" class="hover:text-primary transition-colors">Our Services</a></li>
                <li><a href="packages.php" class="hover:text-primary transition-colors">Internet Packages</a></li>
                <li><a href="shop.php" class="hover:text-primary transition-colors flex items-center gap-1.5"><span>Hardware Store</span><span class="text-[10px] bg-accent/20 text-accent px-1.5 py-0.5 rounded font-bold">New</span></a></li>
                <li><a href="infrastructure.php" class="hover:text-primary transition-colors">Carrier & Infra</a></li>
                <li><a href="coverage.php" class="hover:text-primary transition-colors">Coverage Map</a></li>
                <li><a href="faqs.php" class="hover:text-primary transition-colors">FAQs</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div>
            <h4 class="text-xl font-bold mb-6">Services</h4>
            <ul class="flex flex-col gap-4 text-slate-400">
                <li><a href="services.php" class="hover:text-primary transition-colors">Home Fiber</a></li>
                <li><a href="services.php" class="hover:text-primary transition-colors">Business Internet</a></li>
                <li><a href="infrastructure.php" class="hover:text-accent font-semibold text-accent transition-colors">Carrier Subcontracting</a></li>
                <li><a href="services.php" class="hover:text-primary transition-colors">Wireless P2P</a></li>
                <li><a href="services.php" class="hover:text-primary transition-colors">Wi-Fi Hotspots</a></li>
                <li><a href="services.php" class="hover:text-primary transition-colors">Starlink Support</a></li>
                <li><a href="shop.php" class="hover:text-primary transition-colors">Equipment & Power Store</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="text-xl font-bold mb-6">Contact Us</h4>
            <ul class="flex flex-col gap-4 text-slate-400">
                <li class="flex items-start gap-3">
                    <i data-lucide="map-pin" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                    <span class="text-slate-300 text-sm">Serving Vihiga, Kakamega & Nairobi, Kenya</span>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="phone" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                    <div class="flex flex-col gap-1">
                        <a href="<?php echo format_tel_link(SITE_PHONE); ?>" class="hover:text-primary transition-colors flex items-center gap-1.5 text-sm">
                            <span class="text-white font-medium"><?php echo SITE_PHONE; ?></span>
                            <span class="text-xs text-slate-500">(Helpline)</span>
                        </a>
                        <a href="<?php echo format_tel_link(SITE_PHONE_SECONDARY); ?>" class="hover:text-primary transition-colors flex items-center gap-1.5 text-sm">
                            <span class="text-white font-medium"><?php echo SITE_PHONE_SECONDARY; ?></span>
                            <span class="text-xs text-slate-500">(Secondary)</span>
                        </a>
                    </div>
                </li>
                <li class="flex items-start gap-3">
                    <i data-lucide="mail" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                    <div class="flex flex-col gap-1">
                        <a href="mailto:<?php echo SITE_EMAIL_SUPPORT; ?>"
                            class="hover:text-primary transition-colors text-sm"><?php echo SITE_EMAIL_SUPPORT; ?></a>
                        <a href="mailto:<?php echo SITE_EMAIL_SALES; ?>"
                            class="hover:text-primary transition-colors text-xs text-slate-500"><?php echo SITE_EMAIL_SALES; ?></a>
                    </div>
                </li>
                <li class="flex items-start gap-3 mt-1">
                    <i data-lucide="clock" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                    <span class="text-xs text-slate-400">Mon - Sat: 8:00 AM - 6:00 PM<br>Technical Support: 24/7</span>
                </li>
            </ul>
        </div>
    </div>

    <!-- Bottom Bar -->
    <div
        class="max-w-7xl mx-auto pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6 text-slate-500 text-sm">
        <p>&copy;
            <?php echo date('Y'); ?>
            <?php echo SITE_NAME; ?>. All rights reserved.
        </p>
        <div class="flex gap-8">
            <a href="terms.php" class="hover:text-white">Terms of Service</a>
            <a href="terms.php" class="hover:text-white">Privacy Policy</a>
        </div>
        <p>Registered in Kenya</p>
    </div>
</footer>

<!-- WhatsApp Floating Button -->
<a href="<?php echo format_whatsapp_link(WHATSAPP_NUMBER); ?>" target="_blank"
    class="fixed bottom-8 right-8 w-16 h-16 bg-[#25D366] text-white rounded-full flex items-center justify-center shadow-2xl z-40 transition-transform hover:scale-110 active:scale-95 btn-glow shadow-[#25D366]/40">
    <i data-lucide="message-circle" class="w-8 h-8 fill-current"></i>
</a>

<!-- Initialize Lucide Icons -->
<script>
    lucide.createIcons();
</script>
</body>

</html>
