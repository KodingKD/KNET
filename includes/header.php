<?php
require_once __DIR__ . '/components/cta-buttons.php';
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME; ?></title>
    <meta name="title" content="<?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME; ?>">
    <meta name="description"
        content="<?php echo $page_description ?? 'Fast, Reliable, and Unlimited Internet for Homes and Businesses in Vihiga, Kakamega, and Nairobi. 100% Fiber & Wireless solutions.'; ?>">
    <meta name="keywords"
        content="<?php echo $page_keywords ?? 'Internet Service Provider, ISP Kenya, Vihiga Internet, Kakamega Fiber, Nairobi Wifi, Unlimited Internet, KNET'; ?>">
    <meta name="author" content="KNET Network Solutions Limited">

    <!-- Canonical URL -->
    <?php
    $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $current_url = strtok($current_url, '?'); // Remove query params for canonical
    ?>
    <link rel="canonical" href="<?php echo $current_url; ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $current_url; ?>">
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME; ?>">
    <meta property="og:description"
        content="<?php echo $page_description ?? 'Fast, Reliable, and Unlimited Internet for Homes and Businesses in Vihiga, Kakamega, and Nairobi.'; ?>">
    <meta property="og:image" content="<?php echo $page_image ?? 'https://knet.co.ke/assets/images/og-image.jpg'; ?>">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php echo $current_url; ?>">
    <meta property="twitter:title"
        content="<?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME; ?>">
    <meta property="twitter:description"
        content="<?php echo $page_description ?? 'Fast, Reliable, and Unlimited Internet for Homes and Businesses in Vihiga, Kakamega, and Nairobi.'; ?>">
    <meta property="twitter:image"
        content="<?php echo $page_image ?? 'https://knet.co.ke/assets/images/og-image.jpg'; ?>">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="favicons/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicons/favicon.svg" />
    <link rel="shortcut icon" href="favicons/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="KNET" />
    <link rel="manifest" href="favicons/site.webmanifest" />

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#007BFF',
                        'primary-hover': '#0056b3',
                        accent: '#A4F500',
                        'accent-hover': '#96E015',
                        'dark-bg': '#0F172A',
                        'card-bg': '#1E293B',
                    },
                    fontFamily: {
                        sans: ['Inter', 'sans-serif', 'system-ui'],
                    }
                }
            }
        }
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <style>
        :root {
            --primary: #007BFF;
            --accent: #A4F500;
            --bg-dark: #0F172A;
            --bg-card: #1E293B;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: white;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: 'Poppins', sans-serif;
        }

        .glass-effect {
            background: rgba(30, 41, 59, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .btn-glow:hover {
            box-shadow: 0 0 15px rgba(0, 123, 255, 0.5);
        }

        .nav-link {
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary);
        }

        .nav-link.active {
            color: var(--primary);
            font-weight: 600;
        }
    </style>
</head>

<body class="bg-dark-bg text-white selection:bg-primary selection:text-white">

    <!-- Header -->
    <header x-data="{ isOpen: false, isScrolled: false }" @scroll.window="isScrolled = (window.pageYOffset > 20)"
        :class="{ 'glass-effect py-3 shadow-lg': isScrolled, 'bg-transparent py-5': !isScrolled }"
        class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 px-4 md:px-8">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <!-- Logo -->
            <a href="index.php" class="flex items-center gap-2">
                <div
                    class="w-10 h-10 bg-primary rounded-lg flex items-center justify-center font-bold text-xl text-white">
                    K</div>
                <span class="font-extrabold text-xl tracking-tighter">KNET <span
                        class="text-primary">NETWORKS</span></span>
            </a>

            <!-- Desktop Nav -->
            <nav class="hidden lg:flex items-center gap-8 font-medium">
                <a href="index.php" class="nav-link <?php echo is_active_page('index.php') ? 'active' : ''; ?>">Home</a>
                <a href="about.php"
                    class="nav-link <?php echo is_active_page('about.php') ? 'active' : ''; ?>">About</a>
                <a href="services.php"
                    class="nav-link <?php echo is_active_page('services.php') ? 'active' : ''; ?>">Services</a>
                <a href="packages.php"
                    class="nav-link <?php echo is_active_page('packages.php') ? 'active' : ''; ?>">Packages</a>
                <a href="coverage.php"
                    class="nav-link <?php echo is_active_page('coverage.php') ? 'active' : ''; ?>">Coverage</a>
                <a href="contact.php"
                    class="nav-link <?php echo is_active_page('contact.php') ? 'active' : ''; ?>">Contact</a>
            </nav>

            <!-- Desktop CTAs -->
            <div class="hidden lg:flex items-center gap-4">
                <?php renderWhatsAppButton("Chat", "sm"); ?>
                <a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>"
                    class="bg-primary hover:bg-primary-hover text-white px-5 py-2 rounded-lg font-bold flex items-center gap-2 transition-all btn-glow shadow-lg shadow-primary/20">
                    <i data-lucide="phone"></i> Call Now
                </a>
            </div>

            <!-- Mobile Toggle -->
            <button @click="isOpen = !isOpen" class="lg:hidden text-white p-2">
                <i data-lucide="menu" x-show="!isOpen"></i>
                <i data-lucide="x" x-show="isOpen"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div x-show="isOpen" x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-4" x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 -translate-y-4"
            class="lg:hidden glass-effect mt-4 p-6 rounded-2xl flex flex-col gap-4 shadow-2xl">
            <a href="index.php" class="text-lg font-semibold py-2">Home</a>
            <a href="about.php" class="text-lg font-semibold py-2">About</a>
            <a href="services.php" class="text-lg font-semibold py-2">Services</a>
            <a href="packages.php" class="text-lg font-semibold py-2">Packages</a>
            <a href="coverage.php" class="text-lg font-semibold py-2">Coverage</a>
            <a href="contact.php" class="text-lg font-semibold py-2 border-b border-white/10">Contact</a>

            <div class="flex flex-col gap-3 mt-2">
                <?php renderWhatsAppButton("WhatsApp", "md"); ?>
                <a href="tel:<?php echo str_replace(' ', '', SITE_PHONE); ?>"
                    class="bg-primary hover:bg-primary-hover text-white py-3 rounded-lg font-bold flex items-center justify-center gap-2">
                    <i data-lucide="phone"></i> Call Now
                </a>
            </div>
        </div>
    </header>

    <main class="pt-24 lg:pt-32">