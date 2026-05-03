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

/**
 * Render the filter sidebar for shop and category pages.
 * Used by both woocommerce.php (WC archives) and page.php (/shop/{slug}/ pages).
 *
 * @param string|null $category_slug  Pass explicitly, or leave null to auto-detect.
 */
function boston_flowers_shop_filters($category_slug = null) {
    if ($category_slug === null) {
        // On real WooCommerce category archives, use the queried term.
        if (function_exists('is_product_category') && is_product_category()) {
            $queried = get_queried_object();
            if ($queried instanceof WP_Term) {
                $category_slug = $queried->slug;
            }
        }
        // Fallback: parse /shop/{slug}/ URL pattern used by page.php routes.
        if ($category_slug === null) {
            $path  = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
            $parts = $path === '' ? array() : explode('/', $path);
            if (isset($parts[0]) && $parts[0] === 'shop' && !empty($parts[1])) {
                $category_slug = sanitize_title($parts[1]);
            }
        }
    }

    $current_url = home_url(parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/');
    $reset_url   = remove_query_arg(array_keys($_GET), $current_url);

    $filter_groups = array(
        'color'          => 'Color',
        'occasion'       => 'Occasion',
        'design-feature' => 'Design Feature',
        'flower-type'    => 'Flower Type',
        'stem-count'     => 'Stem Count',
        'palette'        => 'Palette',
        'format'         => 'Format',
        'availability'   => 'Availability',
        'season'         => 'Season',
    );
    if ($category_slug === 'roses') {
        $filter_groups = array(
            'color'          => 'Color',
            'stem-count'     => 'Stem Count',
            'design-feature' => 'Design Feature',
            'occasion'       => 'Occasion',
            'availability'   => 'Availability',
        );
    } elseif ($category_slug === 'luxury-bouquets') {
        $filter_groups = array(
            'occasion'     => 'Occasion',
            'palette'      => 'Palette',
            'flower-type'  => 'Flower Type',
            'availability' => 'Availability',
        );
    } elseif ($category_slug === 'grand-arrangements') {
        $filter_groups = array(
            'occasion'     => 'Occasion',
            'format'       => 'Format',
            'palette'      => 'Palette',
            'availability' => 'Availability',
        );
    }
    ?>
    <div class="bf-filter-mobile-bar">
        <button class="bf-filter-mobile-toggle" type="button" aria-controls="bfShopFiltersPanel" aria-expanded="false">Filters</button>
        <a class="bf-filter-mobile-reset" href="<?php echo esc_url($reset_url); ?>">Reset</a>
    </div>
    <aside class="bf-filter-sidebar bf-wc-filters" id="bfShopFiltersPanel" aria-label="Product filters">
        <div class="bf-wc-filters-head">
            <p>Filters</p>
            <a href="<?php echo esc_url($reset_url); ?>">Reset</a>
            <button class="bf-filter-mobile-close" type="button">Close</button>
        </div>
        <p class="bf-filter-mobile-note">Refine the catalog by flower attributes.</p>
        <?php foreach ($filter_groups as $attribute_slug => $label) : ?>
            <?php
            if (!function_exists('wc_attribute_taxonomy_name')) {
                continue;
            }
            $taxonomy = wc_attribute_taxonomy_name($attribute_slug);
            if (!taxonomy_exists($taxonomy)) {
                continue;
            }
            $terms = get_terms(array(
                'taxonomy'   => $taxonomy,
                'hide_empty' => false,
                'orderby'    => 'name',
                'order'      => 'ASC',
            ));
            if (empty($terms) || is_wp_error($terms)) {
                continue;
            }
            if ($attribute_slug === 'stem-count') {
                usort($terms, function ($a, $b) {
                    return (int) $a->name <=> (int) $b->name;
                });
            }
            $param    = 'filter_' . $attribute_slug;
            $selected = isset($_GET[$param])
                ? array_map('sanitize_title', explode(',', sanitize_text_field(wp_unslash($_GET[$param]))))
                : array();
            ?>
            <details class="bf-filter-group bf-wc-filter-group" open>
                <summary><?php echo esc_html($label); ?></summary>
                <p><?php echo esc_html($label); ?></p>
                <div class="bf-wc-filter-options">
                    <?php foreach ($terms as $term) : ?>
                        <?php
                        $url = remove_query_arg(array('paged', 'product-page', 'add-to-cart'), $current_url);
                        foreach ($_GET as $key => $value) {
                            if (
                                strpos($key, 'filter_') === 0 ||
                                strpos($key, 'query_type_') === 0 ||
                                in_array($key, array('min_price', 'max_price'), true)
                            ) {
                                $url = add_query_arg(
                                    sanitize_key($key),
                                    sanitize_text_field(wp_unslash($value)),
                                    $url
                                );
                            }
                        }
                        $url = add_query_arg(array(
                            $param                          => $term->slug,
                            'query_type_' . $attribute_slug => 'or',
                        ), $url);
                        $active = in_array($term->slug, $selected, true) ? ' is-active' : '';
                        ?>
                        <a class="<?php echo esc_attr('bf-filter-item bf-wc-filter-option' . $active); ?>"
                           href="<?php echo esc_url($url); ?>">
                            <span class="bf-filter-checkbox" aria-hidden="true"></span>
                            <span><?php echo esc_html($term->name); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </details>
        <?php endforeach; ?>
    </aside>
    <?php
}
