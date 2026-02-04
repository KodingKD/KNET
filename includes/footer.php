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
                <div
                    class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center font-bold text-xl text-white">
                    K</div>
                <span class="font-extrabold text-xl tracking-tighter">KNET <span
                        class="text-primary">NETWORKS</span></span>
            </a>
            <p class="text-slate-400 leading-relaxed mb-6">
                Bridging the digital divide with lightning-fast, unlimited internet solutions for Western Kenya and
                beyond.
            </p>
            <div class="flex gap-4">
                <a href="#"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <i data-lucide="facebook"></i>
                </a>
                <a href="#"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <i data-lucide="instagram"></i>
                </a>
                <a href="#"
                    class="w-10 h-10 bg-white/5 hover:bg-primary rounded-full flex items-center justify-center transition-all text-slate-300 hover:text-white">
                    <i data-lucide="twitter"></i>
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
                <li><a href="services.php" class="hover:text-primary transition-colors">Wireless P2P</a></li>
                <li><a href="services.php" class="hover:text-primary transition-colors">Wi-Fi Hotspots</a></li>
                <li><a href="services.php" class="hover:text-primary transition-colors">Starlink Support</a></li>
            </ul>
        </div>

        <!-- Contact -->
        <div>
            <h4 class="text-xl font-bold mb-6">Contact Us</h4>
            <ul class="flex flex-col gap-4 text-slate-400">
                <li class="flex items-start gap-4">
                    <i data-lucide="map-pin" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                    <span>Vihiga, Kakamega & Nairobi, Kenya</span>
                </li>
                <li class="flex items-center gap-4">
                    <i data-lucide="phone" class="w-5 h-5 text-primary shrink-0"></i>
                    <a href="tel:0743820177" class="hover:text-primary">
                        <?php echo SITE_PHONE; ?>
                    </a>
                </li>
                <li class="flex items-center gap-4">
                    <i data-lucide="message-square" class="w-5 h-5 text-primary shrink-0"></i>
                    <a href="mailto:<?php echo SITE_EMAIL_SUPPORT; ?>"
                        class="hover:text-primary"><?php echo SITE_EMAIL_SUPPORT; ?></a>
                </li>
                <li class="flex items-start gap-4 mt-2">
                    <i data-lucide="clock" class="w-5 h-5 text-primary shrink-0 mt-1"></i>
                    <span>Mon - Sat: 8:00 AM - 6:00 PM<br>Sun: 10:00 AM - 3:00 PM</span>
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