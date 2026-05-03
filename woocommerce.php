<?php
if (!defined('ABSPATH')) {
    exit;
}

get_header();
$bf_wc_classes = array('bf-wc');
$bf_is_order_received = function_exists('is_wc_endpoint_url') && is_wc_endpoint_url('order-received');
if (is_shop() || is_product_category() || is_product_tag()) {
    $bf_wc_classes[] = 'bf-wc-catalog';
}
if (is_product()) {
    $bf_wc_classes[] = 'bf-wc-product-page';
}
if (is_cart()) {
    $bf_wc_classes[] = 'bf-wc-cart-page';
}
if (is_checkout()) {
    $bf_wc_classes[] = 'bf-wc-checkout-page';
}
if ($bf_is_order_received) {
    $bf_wc_classes[] = 'bf-wc-order-received-page';
}
if (is_account_page()) {
    $bf_wc_classes[] = 'bf-wc-account-page';
}

$bf_shop_sections = array(
    'roses'              => 'Roses',
    'luxury-bouquets'    => 'Luxury Bouquets',
    'grand-arrangements' => 'Grand Arrangements',
    'peonies'            => 'Peonies',
    'tulips'             => 'Tulips',
    'everything-else'    => 'Everything Else',
);

$bf_is_shop_section_in_season = function ($slug) {
    $month_day = (int) wp_date('md', current_time('timestamp'));
    if ($slug === 'tulips') {
        return $month_day >= 301 && $month_day <= 507;
    }
    if ($slug === 'peonies') {
        return $month_day >= 520 && $month_day <= 630;
    }
    return true;
};

$bf_render_shop_nav = function ($placement = 'top') use ($bf_shop_sections) {
    $active_slugs = array();
    if (is_product_category()) {
        $queried = get_queried_object();
        if ($queried instanceof WP_Term) {
            $active_slugs[] = $queried->slug;
        }
    } elseif (is_product()) {
        $terms = get_the_terms(get_the_ID(), 'product_cat');
        if (!empty($terms) && !is_wp_error($terms)) {
            foreach ($terms as $term) {
                $active_slugs[] = $term->slug;
            }
        }
    }
    ?>
    <section class="bf-wc-nav bf-wc-nav-<?php echo esc_attr($placement); ?>" aria-label="Shop sections">
        <div class="bf-wc-container">
            <?php foreach ($bf_shop_sections as $slug => $label) : ?>
                <?php
                $term = get_term_by('slug', $slug, 'product_cat');
                $url = $term && !is_wp_error($term) ? get_term_link($term) : home_url('/shop/' . $slug . '/');
                $active = in_array($slug, $active_slugs, true) ? ' is-active' : '';
                ?>
                <a class="<?php echo esc_attr(trim($active)); ?>" href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
};

$bf_render_product_description = function () {
    if (!is_product()) {
        return;
    }
    $product = wc_get_product(get_the_ID());
    if (!$product) {
        return;
    }
    $description = trim((string) get_post_field('post_content', get_the_ID()));
    if ($description === '') {
        return;
    }
    $attributes = array();
    foreach ($product->get_attributes() as $attribute) {
        if (!$attribute->get_visible()) {
            continue;
        }
        $label = wc_attribute_label($attribute->get_name());
        $values = array();
        if ($attribute->is_taxonomy()) {
            foreach ($attribute->get_options() as $term_id) {
                $term = get_term($term_id, $attribute->get_name());
                if ($term && !is_wp_error($term)) {
                    $values[] = $term->name;
                }
            }
        } else {
            $values = $attribute->get_options();
        }
        if ($attribute->get_name() === 'pa_stem-count') {
            $stem_order = array('25', '50', '75', '100', '200', '300');
            $values = array_values(array_intersect($stem_order, array_map('strval', $values)));
        }
        if (!empty($values)) {
            $attributes[] = array($label, implode(', ', $values));
        }
    }
    ?>
    <section class="bf-product-description" aria-labelledby="bf-product-description-title">
        <div class="bf-product-description-inner">
            <div class="bf-product-description-copy">
                <div class="bf-product-description-eyebrow" aria-hidden="true">
                    <div class="hero-line"></div>
                    <span class="lbl lbl-dark">Product Description</span>
                </div>
                <h2 id="bf-product-description-title">From the <em>studio.</em></h2>
                <?php echo wp_kses_post(wpautop($description)); ?>
            </div>
            <?php if (!empty($attributes)) : ?>
                <div class="bf-product-specs" aria-label="Product details">
                    <?php foreach ($attributes as $attribute) : ?>
                        <div class="bf-product-spec">
                            <span><?php echo esc_html($attribute[0]); ?></span>
                            <strong><?php echo esc_html($attribute[1]); ?></strong>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
};

$bf_render_shop_recommendations = function () use ($bf_shop_sections, $bf_is_shop_section_in_season) {
    if (!is_product()) {
        return;
    }
    $current_category_slugs = array();
    $current_terms = get_the_terms(get_the_ID(), 'product_cat');
    if (!empty($current_terms) && !is_wp_error($current_terms)) {
        foreach ($current_terms as $term) {
            $current_category_slugs[] = $term->slug;
        }
    }
    $candidate_products = wc_get_products(array(
        'status'  => 'publish',
        'limit'   => 12,
        'exclude' => array(get_the_ID()),
        'orderby' => 'date',
        'order'   => 'DESC',
    ));
    $recommended = array_values(array_filter($candidate_products, function ($item) use ($bf_is_shop_section_in_season, $current_category_slugs) {
        $terms = get_the_terms($item->get_id(), 'product_cat');
        if (empty($terms) || is_wp_error($terms)) {
            return true;
        }
        $has_other_section = false;
        foreach ($terms as $term) {
            if (!$bf_is_shop_section_in_season($term->slug)) {
                return false;
            }
            if (!in_array($term->slug, $current_category_slugs, true)) {
                $has_other_section = true;
            }
        }
        return $has_other_section;
    }));
    $recommended = array_slice($recommended, 0, 3);
    $seasonal_sections = array_filter($bf_shop_sections, function ($label, $slug) use ($bf_is_shop_section_in_season) {
        return $bf_is_shop_section_in_season($slug);
    }, ARRAY_FILTER_USE_BOTH);
    ?>
    <section class="bf-shop-next" aria-labelledby="bf-shop-next-title">
        <div class="bf-wc-container">
            <div class="bf-shop-next-head">
                <p class="bf-wc-kicker">Continue Shopping</p>
                <h2 id="bf-shop-next-title">Explore more <em>arrangements.</em></h2>
                <p>Seasonal sections only appear here when they are realistic for Boston availability.</p>
            </div>
            <?php if (!empty($recommended)) : ?>
                <div class="bf-shop-next-grid">
                    <?php foreach ($recommended as $item) : ?>
                        <a class="bf-shop-next-card" href="<?php echo esc_url(get_permalink($item->get_id())); ?>">
                            <?php echo $item->get_image('woocommerce_thumbnail'); ?>
                            <span><?php echo esc_html($item->get_name()); ?></span>
                            <strong><?php echo wp_kses_post($item->get_price_html()); ?></strong>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php else : ?>
                <div class="bf-shop-next-grid bf-shop-next-grid-cats">
                    <?php foreach (array_slice($seasonal_sections, 0, 4, true) as $slug => $label) : ?>
                        <?php
                        $term = get_term_by('slug', $slug, 'product_cat');
                        $url = $term && !is_wp_error($term) ? get_term_link($term) : home_url('/shop/' . $slug . '/');
                        ?>
                        <a class="bf-shop-next-card bf-shop-next-card-cat" href="<?php echo esc_url($url); ?>">
                            <small>Shop section</small>
                            <span><?php echo esc_html($label); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php
};
?>

<main class="<?php echo esc_attr(implode(' ', $bf_wc_classes)); ?>">
    <section class="bf-wc-hero">
        <div class="bf-wc-container">
            <?php if (is_shop() || is_product() || is_product_category() || is_cart() || is_checkout() || is_account_page() || $bf_is_order_received) : ?>
                <div class="bf-wc-breadcrumbs" aria-label="Breadcrumb">
                    <?php
                    woocommerce_breadcrumb(array(
                        'delimiter'   => '<span class="bf-wc-breadcrumb-sep">/</span>',
                        'wrap_before' => '<div class="woocommerce-breadcrumb">',
                        'wrap_after'  => '</div>',
                        'home'        => 'Home',
                    ));
                    ?>
                </div>
            <?php endif; ?>
            <?php if ($bf_is_order_received) : ?>
                <p class="bf-wc-kicker">Boston Flowers Order</p>
                <h1>Order received</h1>
                <p>Confirmation, payment status, and next steps in one place.</p>
            <?php elseif (is_checkout()) : ?>
                <p class="bf-wc-kicker">Boston Flowers Checkout</p>
                <h1>Checkout</h1>
                <p>Billing, delivery, payment, and order summary arranged for a cleaner purchase flow.</p>
            <?php elseif (is_cart()) : ?>
                <p class="bf-wc-kicker">Boston Flowers Cart</p>
                <h1>Your order</h1>
                <p>Review your arrangement, update quantities, and move to payment without the default Woo clutter.</p>
            <?php elseif (is_account_page()) : ?>
                <p class="bf-wc-kicker">Boston Flowers Account</p>
                <h1>My account</h1>
                <p>Orders, addresses, and account details in the same visual language as the storefront.</p>
            <?php elseif (is_product()) : ?>
                <p class="bf-wc-kicker">Boston Flowers Shop</p>
                <h1><?php the_title(); ?></h1>
                <p>Luxury floral design prepared for Boston delivery.</p>
            <?php elseif (is_product_category()) : ?>
                <p class="bf-wc-kicker">Boston Flowers Shop</p>
                <h1><?php single_term_title(); ?></h1>
                <p><?php echo esc_html(term_description() ? wp_strip_all_tags(term_description()) : 'Curated floral designs prepared for Boston delivery.'); ?></p>
            <?php else : ?>
                <p class="bf-wc-kicker">Boston Flowers Shop</p>
                <h1>Shop Boston Flowers</h1>
                <p>Browse roses, luxury bouquets, grand arrangements, peonies, tulips, and curated floral designs with cleaner filters and a more editorial product rhythm.</p>
            <?php endif; ?>
        </div>
    </section>

    <?php if (is_shop() || is_product() || is_product_category() || is_product_tag()) : ?>
        <?php $bf_render_shop_nav('top'); ?>
    <?php endif; ?>

    <section class="bf-wc-content">
        <div class="bf-wc-container">
            <?php if (is_shop() || is_product_category() || is_product_tag()) : ?>
                <?php
                if (function_exists('boston_flowers_shop_filters')) {
                    boston_flowers_shop_filters();
                }
                ?>
                <div class="bf-wc-catalog-main">
                    <?php woocommerce_content(); ?>
                </div>
            <?php else : ?>
                <?php woocommerce_content(); ?>
                <?php $bf_render_product_description(); ?>
                <?php $bf_render_shop_recommendations(); ?>
            <?php endif; ?>
        </div>
    </section>

    <?php if (is_shop() || is_product() || is_product_category() || is_product_tag()) : ?>
        <?php $bf_render_shop_nav('bottom'); ?>
    <?php endif; ?>
</main>

<?php
get_footer();
