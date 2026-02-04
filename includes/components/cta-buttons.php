<?php
/**
 * CTA Buttons Component
 */

function renderWhatsAppButton($text = "Chat on WhatsApp", $size = "md", $message = "Hello KNET, I'm interested in your internet services.")
{
    $link = format_whatsapp_link(WHATSAPP_NUMBER, $message);

    $classes = "bg-accent hover:bg-accent-hover text-dark-bg font-bold flex items-center justify-center gap-2 transition-all shadow-lg shadow-accent/20 rounded-lg ";

    if ($size === "sm") {
        $classes .= "px-4 py-2 text-sm";
    } elseif ($size === "lg") {
        $classes .= "px-8 py-4 text-xl";
    } else {
        $classes .= "px-6 py-3 text-base";
    }

    echo '<a href="' . $link . '" target="_blank" class="' . $classes . '">
            <i data-lucide="message-circle" class="' . ($size === "sm" ? "w-4 h-4" : "w-5 h-5") . '"></i> ' . e($text) . '
          </a>';
}

function renderCallButton($text = "Call Now", $phone = null)
{
    if (!$phone)
        $phone = SITE_PHONE;

    $link = "tel:" . str_replace(' ', '', $phone);

    echo '<a href="' . $link . '" class="bg-primary hover:bg-primary-hover text-white px-8 py-4 rounded-lg font-bold flex items-center justify-center gap-3 transition-all btn-glow shadow-lg shadow-primary/20 text-xl">
            <i data-lucide="phone"></i> ' . e($text) . '
          </a>';
}
