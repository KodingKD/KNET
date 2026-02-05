<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Contact Us";
include INCLUDES_PATH . '/header.php';

$pre_selected_service = $_GET['service'] ?? $_GET['interest'] ?? '';
?>

<!-- Page Header -->
<section class="py-20 px-4 md:px-8 bg-primary/5 text-center">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-4xl md:text-6xl font-black mb-6">Let's Get You Connected</h1>
        <p class="text-xl text-slate-400">Reach out for inquiries, support, or to request a site survey. We are here to
            help.</p>
    </div>
</section>

<section class="py-24 px-4 md:px-8">
    <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20">

        <!-- Contact Information -->
        <div>
            <h2 class="text-3xl font-black mb-8">Direct Contact Info</h2>
            <div class="flex flex-col gap-8 mb-12">
                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                        <i data-lucide="phone" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-1">Phone Numbers</h4>
                        <p class="text-slate-400 mb-1">
                            <?php echo SITE_PHONE; ?>
                        </p>
                        <p class="text-slate-400">
                            <?php echo SITE_PHONE_SECONDARY; ?>
                        </p>
                    </div>
                </div>

                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center text-accent shrink-0">
                        <i data-lucide="message-circle" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-1">WhatsApp</h4>
                        <p class="text-slate-400 mb-2">Chat with our sales team instantly.</p>
                        <?php renderWhatsAppButton("Message Us Now", "sm"); ?>
                    </div>
                </div>

                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                        <i data-lucide="mail" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-1">Email Addresses</h4>
                        <p class="text-slate-400 mb-1">Sales: <?php echo SITE_EMAIL_SALES; ?></p>
                        <p class="text-slate-400 mb-1">Support: <?php echo SITE_EMAIL_SUPPORT; ?></p>
                        <p class="text-slate-400">Admin: <?php echo SITE_EMAIL_ADMIN; ?></p>
                    </div>
                </div>

                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                        <i data-lucide="map-pin" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-1">Service Areas</h4>
                        <p class="text-slate-400">Vihiga, Kakamega, and Nairobi, Kenya</p>
                    </div>
                </div>
            </div>

            <div class="bg-card-bg border border-white/5 p-8 rounded-3xl">
                <h4 class="text-xl font-bold mb-4">Business Hours</h4>
                <div class="space-y-3 text-slate-400">
                    <div class="flex justify-between">
                        <span>Monday - Saturday:</span>
                        <span class="text-white font-medium">8:00 AM - 6:00 PM</span>
                    </div>
                    <div class="flex justify-between">
                        <span>Sunday:</span>
                        <span class="text-white font-medium">10:00 AM - 3:00 PM</span>
                    </div>
                    <div class="flex justify-between border-t border-white/10 pt-3 mt-3">
                        <span>Technical Support:</span>
                        <span class="text-accent font-black">24 / 7</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-card-bg border border-white/10 p-8 md:p-12 rounded-[40px] shadow-2xl relative">
            <div class="absolute top-0 right-10 w-20 h-20 bg-primary/20 blur-3xl rounded-full -z-10"></div>

            <h2 class="text-3xl font-black mb-8">Send a Message</h2>

            <form action="api/contact-form.php" method="POST" x-data="{ loading: false, success: false, error: false }"
                @submit.prevent="loading = true; 
                fetch('api/contact-form.php', {
                    method: 'POST',
                    body: new FormData($el)
                })
                .then(res => res.json())
                .then(data => {
                    loading = false;
                    if(data.success) { success = true; $el.reset(); }
                    else { error = data.message || 'An error occurred'; }
                })
                .catch(() => { loading = false; error = 'Network error. Please try again.'; })">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label class="block text-sm font-bold text-slate-400 mb-2">Your Name *</label>
                        <input type="text" name="name" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-slate-400 mb-2">Phone Number *</label>
                        <input type="tel" name="phone" required
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                    </div>
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-bold text-slate-400 mb-2">Email Address</label>
                    <input type="email" name="email"
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all">
                </div>

                <div class="mb-6">
                    <label class="block text-sm font-bold text-slate-400 mb-2">Service of Interest</label>
                    <select name="service_interest"
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all appearance-none">
                        <option value="Home Fiber" <?php echo ($pre_selected_service === 'Home Fiber' || strpos($pre_selected_service, 'Home') !== false) ? 'selected' : ''; ?>>Home Fiber Internet
                        </option>
                        <option value="Business Internet" <?php echo (strpos($pre_selected_service, 'Business') !== false) ? 'selected' : ''; ?>>Business / Dedicated Internet</option>
                        <option value="Wi-Fi Hotspots" <?php echo (strpos($pre_selected_service, 'Hotspot') !== false) ? 'selected' : ''; ?>>Public Wi-Fi Hotspots</option>
                        <option value="Wireless P2P" <?php echo (strpos($pre_selected_service, 'Wireless') !== false) ? 'selected' : ''; ?>>Wireless / P2P Links</option>
                        <option value="Starlink" <?php echo (strpos($pre_selected_service, 'Starlink') !== false) ? 'selected' : ''; ?>>Starlink Installation</option>
                        <option value="Other" <?php echo $pre_selected_service === 'Other' ? 'selected' : ''; ?>>Other
                            Inquiries</option>
                    </select>
                </div>

                <div class="mb-8">
                    <label class="block text-sm font-bold text-slate-400 mb-2">How can we help? *</label>
                    <textarea name="message" required rows="4"
                        class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all"></textarea>
                </div>

                <button type="submit" :disabled="loading"
                    class="w-full bg-primary hover:bg-primary-hover py-4 rounded-xl font-black text-lg transition-all shadow-xl shadow-primary/20 flex items-center justify-center gap-3">
                    <span x-show="!loading">Send Message</span>
                    <span x-show="loading"
                        class="animate-spin w-5 h-5 border-2 border-white/30 border-t-white rounded-full"></span>
                </button>

                <!-- Feedback -->
                <div x-show="success" x-transition
                    class="mt-6 p-4 bg-accent/20 border border-accent/30 text-accent rounded-xl text-center font-bold">
                    Message sent successfully! We will contact you shortly.
                </div>
                <div x-show="error" x-transition
                    class="mt-6 p-4 bg-red-500/20 border border-red-500/30 text-red-500 rounded-xl text-center font-bold"
                    x-text="error">
                </div>
            </form>
        </div>
    </div>
</section>

<?php include INCLUDES_PATH . '/footer.php'; ?>