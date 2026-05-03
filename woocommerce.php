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
?>

<main class="<?php echo esc_attr(implode(' ', $bf_wc_classes)); ?>">

    <?php if (is_product()) : ?>
        <?php /* Single product: minimal breadcrumb bar only — title/image come from woocommerce_content() */ ?>
        <div class="bf-wc-product-breadcrumbs">
            <div class="bf-wc-container">
                <?php
                woocommerce_breadcrumb(array(
                    'delimiter'   => '<span class="bf-wc-breadcrumb-sep">/</span>',
                    'wrap_before' => '<div class="woocommerce-breadcrumb">',
                    'wrap_after'  => '</div>',
                    'home'        => 'Home',
                ));
                ?>
            </div>
        </div>
        <section class="bf-wc-content">
            <div class="bf-wc-container">
                <?php woocommerce_content(); ?>
            </div>
        </section>

    <?php else : ?>

        <section class="bf-wc-hero">
            <div class="bf-wc-container">
                <?php if (is_shop() || is_product_category() || is_cart() || is_checkout() || is_account_page() || $bf_is_order_received) : ?>
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

        <?php if (is_shop() || is_product_category() || is_product_tag()) : ?>
            <section class="bf-wc-nav" aria-label="Shop sections">
                <div class="bf-wc-container">
                    <?php
                    $shop_sections = array(
                        'roses'              => 'Roses',
                        'luxury-bouquets'    => 'Luxury Bouquets',
                        'grand-arrangements' => 'Grand Arrangements',
                        'peonies'            => 'Peonies',
                        'tulips'             => 'Tulips',
                        'everything-else'    => 'Everything Else',
                    );
                    foreach ($shop_sections as $slug => $label) :
                        $term = get_term_by('slug', $slug, 'product_cat');
                        $url  = $term && !is_wp_error($term) ? get_term_link($term) : home_url('/shop/' . $slug . '/');
                        $active = is_product_category($slug) ? ' is-active' : '';
                        ?>
                        <a class="<?php echo esc_attr(trim($active)); ?>" href="<?php echo esc_url($url); ?>"><?php echo esc_html($label); ?></a>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <section class="bf-wc-content">
            <div class="bf-wc-container">
                <?php if (is_shop() || is_product_category() || is_product_tag()) : ?>
                    <?php boston_flowers_shop_filters(); ?>
                    <div class="bf-wc-catalog-main">
                        <?php woocommerce_content(); ?>
                    </div>
                <?php else : ?>
                    <?php woocommerce_content(); ?>
                <?php endif; ?>
            </div>
        </section>

    <?php endif; ?>
</main>

<?php
get_footer();
