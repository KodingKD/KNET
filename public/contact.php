<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/db_connect.php';
require_once __DIR__ . '/../includes/functions.php';

$page_title = "Contact Us";
$page_description = "Contact KNET for internet installation, support, or site survey. Call 0743 820 177 or visit us in Vihiga, Kakamega, and Nairobi.";
$page_keywords = "Contact KNET, KNET Support Number, Internet Customer Care, KNET Location, Report Fault";
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
                <!-- Phone Numbers -->
                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                        <i data-lucide="phone" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Phone & Helplines</h4>
                        <div class="flex flex-col gap-2">
                            <a href="<?php echo format_tel_link(SITE_PHONE); ?>"
                                class="text-slate-300 hover:text-primary transition-colors flex items-center gap-2 group">
                                <i data-lucide="phone-call" class="w-4 h-4 text-primary group-hover:scale-110 transition-transform"></i>
                                <span class="font-semibold text-white"><?php echo SITE_PHONE; ?></span>
                                <span class="text-xs text-slate-400 bg-white/5 px-2 py-0.5 rounded">Primary Helpline</span>
                            </a>
                            <a href="<?php echo format_tel_link(SITE_PHONE_CORPORATE); ?>"
                                class="text-slate-300 hover:text-primary transition-colors flex items-center gap-2 group">
                                <i data-lucide="building" class="w-4 h-4 text-primary group-hover:scale-110 transition-transform"></i>
                                <span class="font-semibold text-white"><?php echo SITE_PHONE_CORPORATE; ?></span>
                                <span class="text-xs text-slate-400 bg-white/5 px-2 py-0.5 rounded">Corporate Line</span>
                            </a>
                            <a href="<?php echo format_tel_link(SITE_PHONE_SECONDARY); ?>"
                                class="text-slate-300 hover:text-primary transition-colors flex items-center gap-2 group">
                                <i data-lucide="phone" class="w-4 h-4 text-primary group-hover:scale-110 transition-transform"></i>
                                <span class="font-semibold text-white"><?php echo SITE_PHONE_SECONDARY; ?></span>
                                <span class="text-xs text-slate-400 bg-white/5 px-2 py-0.5 rounded">Secondary</span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- WhatsApp -->
                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center text-accent shrink-0">
                        <i data-lucide="message-circle" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-1">WhatsApp Support</h4>
                        <p class="text-slate-400 mb-2">Chat with our sales and technical support team instantly.</p>
                        <?php renderWhatsAppButton("Message Us on WhatsApp", "sm"); ?>
                    </div>
                </div>

                <!-- Email Addresses -->
                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                        <i data-lucide="mail" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Email Addresses</h4>
                        <div class="flex flex-col gap-1.5">
                            <a href="mailto:<?php echo SITE_EMAIL_SALES; ?>"
                                class="text-slate-300 hover:text-primary transition-colors flex items-center gap-2">
                                <span class="text-slate-400 text-sm w-20">Sales:</span>
                                <span class="font-medium text-white"><?php echo SITE_EMAIL_SALES; ?></span>
                            </a>
                            <a href="mailto:<?php echo SITE_EMAIL_SUPPORT; ?>"
                                class="text-slate-300 hover:text-primary transition-colors flex items-center gap-2">
                                <span class="text-slate-400 text-sm w-20">Support:</span>
                                <span class="font-medium text-white"><?php echo SITE_EMAIL_SUPPORT; ?></span>
                            </a>
                            <a href="mailto:<?php echo SITE_EMAIL_ADMIN; ?>"
                                class="text-slate-300 hover:text-primary transition-colors flex items-center gap-2">
                                <span class="text-slate-400 text-sm w-20">Admin:</span>
                                <span class="font-medium text-white"><?php echo SITE_EMAIL_ADMIN; ?></span>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Physical / Postal Address -->
                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                        <i data-lucide="map-pin" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-1">Office & Service Areas</h4>
                        <p class="text-white font-medium"><?php echo SITE_ADDRESS_PHYSICAL; ?></p>
                        <p class="text-slate-400 text-sm mt-0.5"><?php echo SITE_ADDRESS_POSTAL; ?></p>
                        <p class="text-slate-500 text-sm mt-1">Service Coverage: Vihiga, Kakamega, and Nairobi, Kenya</p>
                    </div>
                </div>

                <!-- M-Pesa Paybill -->
                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-accent/10 rounded-2xl flex items-center justify-center text-accent shrink-0">
                        <i data-lucide="credit-card" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-1">M-Pesa Payments</h4>
                        <p class="text-slate-300">
                            <span class="text-slate-400">Paybill Number:</span>
                            <strong class="text-accent text-xl tracking-wider ml-1"><?php echo MPESA_PAYBILL; ?></strong>
                        </p>
                        <p class="text-slate-400 text-sm mt-0.5">Account: <span class="text-white font-medium">Customer Name / Account No.</span></p>
                    </div>
                </div>

                <!-- Official Social Channels -->
                <div class="flex gap-6 items-start">
                    <div
                        class="w-14 h-14 bg-primary/10 rounded-2xl flex items-center justify-center text-primary shrink-0">
                        <i data-lucide="share-2" class="w-8 h-8"></i>
                    </div>
                    <div>
                        <h4 class="text-xl font-bold mb-2">Connect On Social Channels</h4>
                        <div class="flex flex-wrap gap-2">
                            <a href="<?php echo SOCIAL_LINKEDIN; ?>" target="_blank" rel="noopener noreferrer"
                                class="px-3.5 py-2 bg-white/5 hover:bg-primary rounded-xl text-xs font-semibold flex items-center gap-1.5 transition-colors text-white">
                                <i data-lucide="linkedin" class="w-4 h-4"></i> LinkedIn
                            </a>
                            <a href="<?php echo SOCIAL_FACEBOOK; ?>" target="_blank" rel="noopener noreferrer"
                                class="px-3.5 py-2 bg-white/5 hover:bg-primary rounded-xl text-xs font-semibold flex items-center gap-1.5 transition-colors text-white">
                                <i data-lucide="facebook" class="w-4 h-4"></i> Facebook
                            </a>
                            <a href="<?php echo SOCIAL_TWITTER; ?>" target="_blank" rel="noopener noreferrer"
                                class="px-3.5 py-2 bg-white/5 hover:bg-primary rounded-xl text-xs font-semibold flex items-center gap-1.5 transition-colors text-white">
                                <i data-lucide="twitter" class="w-4 h-4"></i> Twitter/X
                            </a>
                            <a href="<?php echo SOCIAL_INSTAGRAM; ?>" target="_blank" rel="noopener noreferrer"
                                class="px-3.5 py-2 bg-white/5 hover:bg-primary rounded-xl text-xs font-semibold flex items-center gap-1.5 transition-colors text-white">
                                <i data-lucide="instagram" class="w-4 h-4"></i> Instagram
                            </a>
                            <a href="<?php echo SOCIAL_YOUTUBE; ?>" target="_blank" rel="noopener noreferrer"
                                class="px-3.5 py-2 bg-white/5 hover:bg-primary rounded-xl text-xs font-semibold flex items-center gap-1.5 transition-colors text-white">
                                <i data-lucide="youtube" class="w-4 h-4"></i> YouTube
                            </a>
                            <a href="<?php echo SOCIAL_TIKTOK; ?>" target="_blank" rel="noopener noreferrer"
                                class="px-3.5 py-2 bg-white/5 hover:bg-primary rounded-xl text-xs font-semibold flex items-center gap-1.5 transition-colors text-white">
                                <svg class="w-4 h-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64c.298-.002.595.042.88.13V9.4a6.33 6.33 0 0 0-1-.08A6.34 6.34 0 0 0 3 15.66a6.34 6.34 0 0 0 10.82 4.47 6.27 6.27 0 0 0 1.87-4.47V8.71a8.19 8.19 0 0 0 4.9 1.6V6.86a4.83 4.83 0 0 1-1-.17z"/>
                                </svg> TikTok
                            </a>
                        </div>
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
                    <div class="relative">
                        <select name="service_interest"
                            class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 text-white focus:outline-none focus:border-primary transition-all appearance-none cursor-pointer">
                            <option value="Home Fiber" <?php echo ($pre_selected_service === 'Home Fiber' || strpos($pre_selected_service, 'Home') !== false) ? 'selected' : ''; ?>>
                                Home Fiber Internet
                            </option>
                            <option value="Business Internet" <?php echo (strpos($pre_selected_service, 'Business') !== false) ? 'selected' : ''; ?>>
                                Business / Dedicated Internet</option>
                            <option value="Wi-Fi Hotspots" <?php echo (strpos($pre_selected_service, 'Hotspot') !== false) ? 'selected' : ''; ?>>
                                Public Wi-Fi Hotspots</option>
                            <option value="Wireless P2P" <?php echo (strpos($pre_selected_service, 'Wireless') !== false) ? 'selected' : ''; ?>>
                                Wireless / P2P Links</option>
                            <option value="Starlink" <?php echo (strpos($pre_selected_service, 'Starlink') !== false) ? 'selected' : ''; ?>>
                                Starlink Installation</option>
                            <option value="Other" <?php echo $pre_selected_service === 'Other' ? 'selected' : ''; ?>>Other
                                Inquiries</option>
                        </select>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 pointer-events-none text-slate-400">
                            <i data-lucide="chevron-down" class="w-5 h-5"></i>
                        </div>
                    </div>
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
