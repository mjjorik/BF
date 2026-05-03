<?php
if (!defined('ABSPATH')) {
    exit;
}

$bf_request_path = trim(parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH), '/');
$bf_request_parts = $bf_request_path === '' ? array() : explode('/', $bf_request_path);
$bf_is_shop_catalog = isset($bf_request_parts[0]) && $bf_request_parts[0] === 'shop';
$bf_current_shop_category_slug = $bf_is_shop_catalog && !empty($bf_request_parts[1]) ? sanitize_title($bf_request_parts[1]) : '';
$bf_shop_sections = array(
    'roses'              => 'Roses',
    'luxury-bouquets'    => 'Luxury Bouquets',
    'grand-arrangements' => 'Grand Arrangements',
    'peonies'            => 'Peonies',
    'tulips'             => 'Tulips',
    'everything-else'    => 'Everything Else',
);
$bf_current_shop_category_label = $bf_current_shop_category_slug && isset($bf_shop_sections[$bf_current_shop_category_slug])
    ? $bf_shop_sections[$bf_current_shop_category_slug]
    : '';
$bf_page_classes = array('bf-wc', 'bf-wc-page');
if ($bf_is_shop_catalog) {
    $bf_page_classes[] = 'bf-wc-catalog';
}

get_header();
?>

<main class="<?php echo esc_attr(implode(' ', $bf_page_classes)); ?>">
    <section class="bf-wc-hero">
        <div class="bf-wc-container">
            <?php if ($bf_is_shop_catalog) : ?>
                <div class="bf-wc-breadcrumbs" aria-label="Breadcrumb">
                    <div class="woocommerce-breadcrumb">
                        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>
                        <span class="bf-wc-breadcrumb-sep">/</span>
                        <?php if ($bf_current_shop_category_label) : ?>
                            <a href="<?php echo esc_url(home_url('/shop/')); ?>">Shop</a>
                            <span class="bf-wc-breadcrumb-sep">/</span>
                            <span><?php echo esc_html($bf_current_shop_category_label); ?></span>
                        <?php else : ?>
                            <span>Shop</span>
                        <?php endif; ?>
                    </div>
                </div>
            <?php elseif ((function_exists('is_cart') && is_cart()) || (function_exists('is_checkout') && is_checkout()) || (function_exists('is_account_page') && is_account_page())) : ?>
                <div class="bf-wc-breadcrumbs" aria-label="Breadcrumb">
                    <?php
                    if (function_exists('woocommerce_breadcrumb')) {
                        woocommerce_breadcrumb(array(
                            'delimiter'   => '<span class="bf-wc-breadcrumb-sep">/</span>',
                            'wrap_before' => '<div class="woocommerce-breadcrumb">',
                            'wrap_after'  => '</div>',
                            'home'        => 'Home',
                        ));
                    }
                    ?>
                </div>
            <?php endif; ?>
            <p class="bf-wc-kicker"><?php echo $bf_is_shop_catalog ? 'Boston Flowers Shop' : 'Boston Flowers'; ?></p>
            <h1><?php echo esc_html($bf_current_shop_category_label ? $bf_current_shop_category_label : get_the_title()); ?></h1>
            <?php if ($bf_is_shop_catalog && $bf_current_shop_category_label) : ?>
                <p>Curated floral designs prepared for Boston delivery.</p>
            <?php elseif ($bf_is_shop_catalog) : ?>
                <p>Browse roses, luxury bouquets, grand arrangements, peonies, tulips, and curated floral designs.</p>
            <?php elseif (is_cart()) : ?>
                <p>Review your selected arrangements before submitting a confirmation request.</p>
            <?php elseif (is_checkout()) : ?>
                <p>Submit your order request and Boston Flowers will confirm availability, delivery timing, and payment details.</p>
            <?php elseif (is_account_page()) : ?>
                <p>Manage orders, account details, and saved checkout information.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php if ($bf_is_shop_catalog) : ?>
        <section class="bf-wc-nav" aria-label="Shop sections">
            <div class="bf-wc-container">
                <?php foreach ($bf_shop_sections as $slug => $label) : ?>
                    <a class="<?php echo esc_attr($bf_current_shop_category_slug === $slug ? 'is-active' : ''); ?>" href="<?php echo esc_url(home_url('/shop/' . $slug . '/')); ?>"><?php echo esc_html($label); ?></a>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>

    <section class="bf-wc-content">
        <div class="bf-wc-container">
            <?php if ($bf_is_shop_catalog) : ?>
                <?php
                $bf_current_shop_url = home_url(parse_url($_SERVER['REQUEST_URI'] ?? '/shop/', PHP_URL_PATH) ?: '/shop/');
                $bf_reset_url = remove_query_arg(array_keys($_GET), $bf_current_shop_url);
                $bf_filter_groups = array(
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
                if ($bf_current_shop_category_slug === 'roses') {
                    $bf_filter_groups = array(
                        'color'          => 'Color',
                        'stem-count'     => 'Stem Count',
                        'design-feature' => 'Design Feature',
                        'occasion'       => 'Occasion',
                        'availability'   => 'Availability',
                    );
                } elseif ($bf_current_shop_category_slug === 'luxury-bouquets') {
                    $bf_filter_groups = array(
                        'occasion'     => 'Occasion',
                        'palette'      => 'Palette',
                        'flower-type'  => 'Flower Type',
                        'availability' => 'Availability',
                    );
                } elseif ($bf_current_shop_category_slug === 'grand-arrangements') {
                    $bf_filter_groups = array(
                        'occasion'     => 'Occasion',
                        'format'       => 'Format',
                        'palette'      => 'Palette',
                        'availability' => 'Availability',
                    );
                }
                ?>
                <div class="bf-filter-mobile-bar">
                    <button class="bf-filter-mobile-toggle" type="button" aria-controls="bfShopFiltersPanel" aria-expanded="false">Filters</button>
                    <a class="bf-filter-mobile-reset" href="<?php echo esc_url($bf_reset_url); ?>">Reset</a>
                </div>
                <aside class="bf-filter-sidebar bf-wc-filters" id="bfShopFiltersPanel" aria-label="Product filters">
                    <div class="bf-wc-filters-head">
                        <p>Filters</p>
                        <a href="<?php echo esc_url($bf_reset_url); ?>">Reset</a>
                        <button class="bf-filter-mobile-close" type="button">Close</button>
                    </div>
                    <p class="bf-filter-mobile-note">Refine the catalog by flower attributes.</p>
                    <?php foreach ($bf_filter_groups as $attribute_slug => $label) : ?>
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
                        $param = 'filter_' . $attribute_slug;
                        $selected = isset($_GET[$param]) ? array_map('sanitize_title', explode(',', sanitize_text_field(wp_unslash($_GET[$param])))) : array();
                        ?>
                        <details class="bf-filter-group bf-wc-filter-group" open>
                            <summary><?php echo esc_html($label); ?></summary>
                            <p><?php echo esc_html($label); ?></p>
                            <div class="bf-wc-filter-options">
                                <?php foreach ($terms as $term) : ?>
                                    <?php
                                    $url = remove_query_arg(array('paged', 'product-page', 'add-to-cart'), $bf_current_shop_url);
                                    foreach ($_GET as $key => $value) {
                                        if (strpos($key, 'filter_') === 0 || strpos($key, 'query_type_') === 0 || in_array($key, array('min_price', 'max_price'), true)) {
                                            $url = add_query_arg(sanitize_key($key), sanitize_text_field(wp_unslash($value)), $url);
                                        }
                                    }
                                    $url = add_query_arg(array(
                                        $param => $term->slug,
                                        'query_type_' . $attribute_slug => 'or',
                                    ), $url);
                                    $active = in_array($term->slug, $selected, true) ? ' is-active' : '';
                                    ?>
                                    <a class="<?php echo esc_attr('bf-filter-item bf-wc-filter-option' . $active); ?>" href="<?php echo esc_url($url); ?>"><span class="bf-filter-checkbox" aria-hidden="true"></span><span><?php echo esc_html($term->name); ?></span></a>
                                <?php endforeach; ?>
                            </div>
                        </details>
                    <?php endforeach; ?>
                </aside>
                <div class="bf-wc-catalog-main">
            <?php endif; ?>
            <?php
            while (have_posts()) :
                the_post();
                the_content();
            endwhile;

            if (is_cart() && function_exists('boston_flowers_shop_section_links') && function_exists('WC') && WC()->cart && WC()->cart->is_empty()) :
                ?>
                <section class="bf-wc-empty bf-wc-empty-cart-helper">
                    <p class="bf-wc-empty-kicker">Browse the catalog</p>
                    <h2>Start with a flower category</h2>
                    <p>Choose a section, then add a product once published products are available.</p>
                    <?php boston_flowers_shop_section_links(); ?>
                </section>
                <?php
            endif;
            ?>
            <?php if ($bf_is_shop_catalog) : ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
