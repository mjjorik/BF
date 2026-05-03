<?php
/**
 * Boston Flowers Functions & Definitions
 * Version: 2.0.3 - Recovery Update
 */

function boston_flowers_enqueue_assets() {
    wp_enqueue_style('boston-flowers-main', get_stylesheet_directory_uri() . '/assets/css/main.css', [], filemtime(get_stylesheet_directory() . '/assets/css/main.css'));
    wp_enqueue_style('boston-flowers-header-footer', get_stylesheet_directory_uri() . '/assets/css/header-footer.css', ['boston-flowers-main'], filemtime(get_stylesheet_directory() . '/assets/css/header-footer.css'));
    wp_enqueue_style('boston-flowers-fonts', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap', [], null);
    wp_enqueue_script('boston-flowers-header-footer', get_stylesheet_directory_uri() . '/assets/js/header-footer.js', [], filemtime(get_stylesheet_directory() . '/assets/js/header-footer.js'), true);

    if (is_front_page() || is_page_template('front-page-ru.php')) {
        wp_enqueue_style('boston-flowers-home', get_stylesheet_directory_uri() . '/assets/css/home.css', ['boston-flowers-main'], filemtime(get_stylesheet_directory() . '/assets/css/home.css'));
        wp_enqueue_script('boston-flowers-main', get_stylesheet_directory_uri() . '/assets/js/main.js', ['boston-flowers-header-footer'], filemtime(get_stylesheet_directory() . '/assets/js/main.js'), true);
    }

    $page_map = array(
        'wedding'           => ['wedding', 'svadba', 'page-wedding-ru.php'],
        'events'            => ['events', 'meropriyatiya', 'page-events-ru.php'],
        'corporate'         => ['corporate', 'korporativnym', 'page-corporate-ru.php'],
        'delivery-areas'    => ['delivery-areas', 'zony-dostavki', 'page-delivery-areas-ru.php'],
        'same-day-delivery' => ['same-day-delivery', 'dostavka', 'page-same-day-delivery-ru.php'],
        'journal'           => ['journal', 'zhurnal', 'page-journal-ru.php'],
        'flower-care'       => ['flower-care', 'uhod-za-cvetami', 'page-flower-care-ru.php'],
        'custom-orders'     => ['custom-orders', 'zakazat', 'page-custom-orders-ru.php'],
        'contact'           => ['contact', 'kontakty', 'page-contact-ru.php'],
        'about'             => ['about', 'o-nas', 'page-about-ru.php'],
    );

    foreach ($page_map as $handle => $identifiers) {
        $should = false;
        foreach ($identifiers as $id) { if (is_page($id) || is_page_template($id)) { $should = true; break; } }
        if ($should) {
            $file = '/assets/css/' . $handle . '.css';
            if (file_exists(get_stylesheet_directory() . $file)) {
                wp_enqueue_style('bf-' . $handle, get_stylesheet_directory_uri() . $file, ['boston-flowers-main'], filemtime(get_stylesheet_directory() . $file));
            }
        }
    }

    if (function_exists('is_woocommerce') && (is_woocommerce() || is_cart() || is_checkout() || is_account_page())) {
        wp_enqueue_style('bf-woocommerce', get_stylesheet_directory_uri() . '/assets/css/woocommerce.css', ['boston-flowers-main'], filemtime(get_stylesheet_directory() . '/assets/css/woocommerce.css'));
        wp_enqueue_script('bf-woocommerce', get_stylesheet_directory_uri() . '/assets/js/woocommerce.js', ['boston-flowers-header-footer'], filemtime(get_stylesheet_directory() . '/assets/js/woocommerce.js'), true);
    }
}
add_action('wp_enqueue_scripts', 'boston_flowers_enqueue_assets');

function boston_flowers_asset_version($file) {
    $path = get_stylesheet_directory() . $file;
    return file_exists($path) ? filemtime($path) : '1.0.0';
}
