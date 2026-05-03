<?php
/**
 * Header template with Premium Language Switcher 2026
 */
$is_ru = (strpos($_SERVER['REQUEST_URI'], '/ru/') !== false || $_SERVER['REQUEST_URI'] === '/ru' || $_SERVER['REQUEST_URI'] === '/ru/');
if (is_page_template('front-page-ru.php') || is_page_template('page-wedding-ru.php') || is_page_template('page-same-day-delivery-ru.php') || is_page_template('page-corporate-ru.php') || is_page_template('page-events-ru.php') || is_page_template('page-delivery-areas-ru.php') || is_page_template('page-about-ru.php') || is_page_template('page-contact-ru.php') || is_page_template('page-custom-orders-ru.php') || is_page_template('page-journal-ru.php') || is_page_template('page-gallery-ru.php') || $is_ru) {
    $is_ru = true;
}

// Special case for single posts - if it has RU meta, it's RU
if (is_single() && get_post_meta(get_the_ID(), '_bf_title_ru', true)) {
    $is_ru = true;
}

$custom_seo_templates = [
    'page-wedding.php', 'page-wedding-ru.php',
    'page-same-day-delivery.php', 'page-same-day-delivery-ru.php',
    'page-corporate.php', 'page-corporate-ru.php',
    'page-events.php', 'page-events-ru.php',
    'page-about.php', 'page-about-ru.php',
    'page-contact.php', 'page-contact-ru.php',
    'page-custom-orders.php', 'page-custom-orders-ru.php',
    'page-journal-ru.php', 'page-gallery-ru.php', 'page-flower-care-ru.php'
];

$current_template = get_page_template_slug();
$has_custom_seo = in_array($current_template, $custom_seo_templates);

if (!$has_custom_seo):
    if ($is_ru): ?>
<title>Доставка цветов Бостон — Boston Flowers | Brighton, MA</title>
<meta name="description" content="Премиальная флористика в Брайтоне, Бостон. Розы с инициалами, авторские композиции, доставка в тот же день по Большому Бостону. Заказ до 10:30 — доставим сегодня.">
    <?php else: ?>
<title>Boston Flowers — Premium Floral Studio | Same-Day Delivery Boston</title>
<meta name="description" content="Boston's premium floral studio. Same-day delivery across Greater Boston. Custom bouquets, grand arrangements 000+, weddings and corporate events. Order by 10:30 AM.">
    <?php endif;
endif;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
<nav id="nav">
  <a href="<?php echo $is_ru ? '/ru/' : '/'; ?>" class="nav-logo">
    <span class="bf-mark" aria-hidden="true"><span class="bf-b" style="color:#F3EEE7;-webkit-text-fill-color:#F3EEE7">B</span><span class="bf-f" style="color:#C89B93;-webkit-text-fill-color:#C89B93">F</span></span>
    Boston <span>Flowers</span>
  </a>
  <ul class="nav-menu">
    <?php if ($is_ru): ?>
    <li class="nav-item"><a href="/shop/">Магазин <span class="chev"></span></a><div class="nav-dd">
      <a href="/shop/roses/">Розы</a>
      <a href="/shop/luxury-bouquets/">Люкс-букеты</a>
      <a href="/shop/grand-arrangements/">Гранд-аранжировки</a>
      <a href="/shop/peonies/">Пионы</a>
      <a href="/shop/tulips/">Тюльпаны</a>
      <a href="/ru/zakazat/">Авторские заказы</a>
    </div></li>
    <li class="nav-item"><a href="#">Услуги <span class="chev"></span></a><div class="nav-dd">
      <a href="/ru/svadba/">Свадьбы</a>
      <a href="/ru/meropriyatiya/">Мероприятия</a>
      <a href="/ru/korporativnym/">Бизнесу</a>
    </div></li>
    <li class="nav-item"><a href="/ru/dostavka/">Доставка <span class="chev"></span></a><div class="nav-dd">
      <a href="/ru/dostavka/">Доставка сегодня</a>
      <a href="/ru/zony-dostavki/">Зоны и цены</a>
    </div></li>
    <li class="nav-item"><a href="/ru/o-nas/">Студия <span class="chev"></span></a><div class="nav-dd">
      <a href="/ru/o-nas/">О нас</a>
      <a href="/ru/galereya/">Галерея</a>
      <a href="/ru/zhurnal/">Журнал</a>
      <a href="/ru/uhod-za-cvetami/">Уход за цветами</a>
      <a href="/ru/kontakty/">Контакты</a>
    </div></li>
    <?php else: ?>
    <li class="nav-item"><a href="/shop">Shop <span class="chev"></span></a><div class="nav-dd">
      <a href="/shop/roses">Roses</a>
      <a href="/shop/luxury-bouquets">Luxury Bouquets</a>
      <a href="/shop/grand-arrangements">Grand Arrangements</a>
      <a href="/shop/peonies">Peonies</a>
      <a href="/shop/tulips">Tulips</a>
      <a href="/custom-orders">Custom Orders</a>
    </div></li>
    <li class="nav-item"><a href="/services">Services <span class="chev"></span></a><div class="nav-dd">
      <a href="/wedding">Weddings</a>
      <a href="/corporate">Corporate</a>
      <a href="/events">Events</a>
    </div></li>
    <li class="nav-item"><a href="/delivery-areas">Delivery <span class="chev"></span></a><div class="nav-dd">
      <a href="/same-day-delivery">Same-Day Delivery</a>
      <a href="/delivery-areas">Delivery Areas</a>
    </div></li>
    <li class="nav-item"><a href="/about">Studio <span class="chev"></span></a><div class="nav-dd">
      <a href="/about">About</a>
      <a href="/gallery">Gallery</a>
      <a href="/journal">Journal</a>
      <a href="/flower-care">Flower Care</a>
      <a href="/contact">Contact</a>
    </div></li>
    <?php endif; ?>
  </ul>
  <div class="nav-r">
    <div class="lang-switcher" id="langSwitcher">
      <button class="lang-btn" type="button" aria-haspopup="listbox" aria-expanded="false">
        <span class="lang-current"><?php echo $is_ru ? 'RU' : 'EN'; ?></span>
        <span class="lang-chev"></span>
      </button>
      <div class="lang-dd">
        <?php
        $current_url = $_SERVER['REQUEST_URI'];
        $en_url = $current_url;
        $ru_url = $current_url;
        
        if ($is_ru) {
            $en_url = str_replace('/ru/', '/', $current_url);
            if ($en_url === '/ru' || $en_url === '/ru/') $en_url = '/';
            // Mapping Russian to English
            if (is_page_template('page-wedding-ru.php')) $en_url = '/wedding/';
            if (is_page_template('page-same-day-delivery-ru.php')) $en_url = '/same-day-delivery/';
            if (is_page_template('page-delivery-areas-ru.php')) $en_url = '/delivery-areas/';
            if (is_page_template('page-corporate-ru.php')) $en_url = '/corporate/';
            if (is_page_template('page-events-ru.php')) $en_url = '/events/';
            if (is_page_template('page-about-ru.php')) $en_url = '/about/';
            if (is_page_template('page-contact-ru.php')) $en_url = '/contact/';
            if (is_page_template('page-custom-orders-ru.php')) $en_url = '/custom-orders/';
            if (is_page_template('page-journal-ru.php')) $en_url = '/journal/';
            if (is_page_template('page-flower-care-ru.php')) $en_url = '/flower-care/';
            if (is_page_template('page-gallery-ru.php')) $en_url = '/gallery/';
            // Single post mapping (custom logic for your new RU posts)
            if (is_single()) {
                if (strpos($current_url, 'skolko-roz-darit') !== false) $en_url = '/how-many-roses-to-buy/';
                if (strpos($current_url, 'cvety-na-prezentaciyah-brendov') !== false) $en_url = '/flowers-brand-launches-what-works/';
                if (strpos($current_url, 'sezonnye-cvety-v-bostone') !== false) $en_url = '/seasonal-flowers-boston/';
                if (strpos($current_url, 'rozy-ili-piony-dlya-svadby') !== false) $en_url = '/roses-vs-peonies-weddings/';
                if (strpos($current_url, 'zachem-cvety-v-ofise') !== false) $en_url = '/why-office-flowers-matter/';
                if (strpos($current_url, 'svadebnye-arki-chto-rabotaet') !== false) $en_url = '/ceremony-arches-what-works/';
                if (strpos($current_url, 'kakie-cvety-stoyat-dolshe') !== false) $en_url = '/what-flowers-last-the-longest/';
                if (strpos($current_url, 'kak-sohranit-cvety-svezhimi') !== false) $en_url = '/how-to-keep-flowers-fresh-longer/';
                if (strpos($current_url, 'oformlenie-obidennogo-stola-cvetami') !== false) $en_url = '/how-to-design-dinner-table-flowers/';
                if (strpos($current_url, 'kak-vybrat-svadebnogo-florista-v-bostone') !== false) $en_url = '/how-to-choose-wedding-florist-boston/';
                if (strpos($current_url, 'wedding-flowers-cost-boston-2026-2') !== false) $en_url = '/wedding-flowers-cost-boston-2026/';
            }
        } else {
            $ru_url = '/ru' . ($current_url === '/' ? '/' : $current_url);
            if (is_page_template('page-wedding.php')) $ru_url = '/ru/svadba/';
            if (is_page_template('page-same-day-delivery.php')) $ru_url = '/ru/dostavka/';
            if (is_page_template('page-delivery-areas.php')) $ru_url = '/ru/zony-dostavki/';
            if (is_page_template('page-corporate.php')) $ru_url = '/ru/korporativnym/';
            if (is_page_template('page-events.php')) $ru_url = '/ru/meropriyatiya/';
            if (is_page_template('page-about.php')) $ru_url = '/ru/o-nas/';
            if (is_page_template('page-contact.php')) $ru_url = '/ru/kontakty/';
            if (is_page_template('page-custom-orders.php')) $ru_url = '/ru/zakazat/';
            if (is_page_template('page-journal.php') || strpos($current_url, '/journal') !== false) $ru_url = '/ru/zhurnal/';
            if (is_page_template('page-flower-care.php')) $ru_url = '/ru/uhod-za-cvetami/';
            // Single post mapping to RU
            if (is_single()) {
                if (strpos($current_url, 'how-many-roses-to-buy') !== false) $ru_url = '/skolko-roz-darit/';
                if (strpos($current_url, 'flowers-brand-launches-what-works') !== false) $ru_url = '/cvety-na-prezentaciyah-brendov/';
                if (strpos($current_url, 'seasonal-flowers-boston') !== false) $ru_url = '/sezonnye-cvety-v-bostone/';
                if (strpos($current_url, 'roses-vs-peonies-weddings') !== false) $ru_url = '/rozy-ili-piony-dlya-svadby/';
                if (strpos($current_url, 'why-office-flowers-matter') !== false) $ru_url = '/zachem-cvety-v-ofise/';
                if (strpos($current_url, 'ceremony-arches-what-works') !== false) $ru_url = '/svadebnye-arki-chto-rabotaet/';
                if (strpos($current_url, 'what-flowers-last-the-longest') !== false) $ru_url = '/kakie-cvety-stoyat-dolshe/';
                if (strpos($current_url, 'how-to-keep-flowers-fresh-longer') !== false) $ru_url = '/kak-sohranit-cvety-svezhimi/';
                if (strpos($current_url, 'how-to-design-dinner-table-flowers') !== false) $ru_url = '/oformlenie-obidennogo-stola-cvetami/';
                if (strpos($current_url, 'how-to-choose-wedding-florist-boston') !== false) $ru_url = '/kak-vybrat-svadebnogo-florista-v-bostone/';
                if (strpos($current_url, 'wedding-flowers-cost-boston-2026') !== false && strpos($current_url, '2026-2') === false) $ru_url = '/wedding-flowers-cost-boston-2026-2/';
            }
        }
        ?>
        <a href="<?php echo $en_url; ?>" class="lang-opt <?php echo !$is_ru ? 'active' : ''; ?>" style="<?php echo !$is_ru ? 'color:var(--rose) !important; -webkit-text-fill-color:var(--rose) !important' : ''; ?>">EN &middot; English</a>
        <a href="<?php echo $ru_url; ?>" class="lang-opt <?php echo $is_ru ? 'active' : ''; ?>" style="<?php echo $is_ru ? 'color:var(--rose) !important; -webkit-text-fill-color:var(--rose) !important' : ''; ?>">RU &middot; Русский</a>
      </div>
    </div>
    <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="nav-account">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="8" r="4"/></svg>
      <span><?php echo is_user_logged_in() ? ($is_ru ? 'Аккаунт' : 'Account') : ($is_ru ? 'Войти' : 'Sign In'); ?></span>
    </a>
    <a href="/cart" class="nav-cart" id="navCart"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg><span class="cart-count" id="cartCount">0</span></a>
    <a href="https://wa.me/19172514669" class="nav-cta"><?php echo $is_ru ? 'Написать флористу' : 'Order Now'; ?></a>
    <div class="burger" id="burger"><span></span><span></span><span></span></div>
  </div>
</nav>

<div class="m-nav" id="mNav">
  <div class="m-cart-row">
    <a href="/cart" class="m-cart-link"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg><?php echo $is_ru ? 'Корзина' : 'Shopping Cart'; ?></a>
    <span class="cart-count" id="mCartCount" style="position:static;opacity:1;display:none"></span>
  </div>
  <div class="m-account-row">
    <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="m-account-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="8" r="4"/></svg><?php echo is_user_logged_in() ? ($is_ru ? 'Мой аккаунт' : 'My Account') : ($is_ru ? 'Войти / Регистрация' : 'Sign In / Register'); ?></a>
  </div>
  <?php if ($is_ru): ?>
  <div class="m-item"><div class="m-link" data-toggle>Магазин <span class="m-chev"></span></div><div class="m-sub">
    <a href="/shop/roses/">Розы</a><a href="/shop/luxury-bouquets/">Люкс-букеты</a><a href="/shop/grand-arrangements/">Гранд-аранжировки</a><a href="/shop/peonies/">Пионы</a><a href="/shop/tulips/">Тюльпаны</a><a href="/ru/zakazat/">Авторские заказы</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Услуги <span class="m-chev"></span></div><div class="m-sub">
    <a href="/ru/svadba/">Свадьбы</a><a href="/ru/meropriyatiya/">Мероприятия</a><a href="/ru/korporativnym/">Бизнесу</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Доставка <span class="m-chev"></span></div><div class="m-sub">
    <a href="/ru/dostavka/">Доставка сегодня</a><a href="/ru/zony-dostavki/">Зоны и цены</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Студия <span class="m-chev"></span></div><div class="m-sub">
    <a href="/ru/o-nas/">О нас</a><a href="/ru/galereya/">Галерея</a><a href="/ru/zhurnal/">Журнал</a><a href="/ru/uhod-za-cvetami/">Уход за цветами</a><a href="/ru/kontakty/">Контакты</a>
  </div></div>
  <?php else: ?>
  <div class="m-item"><div class="m-link" data-toggle>Shop <span class="m-chev"></span></div><div class="m-sub">
    <a href="/shop/roses">Roses</a><a href="/shop/luxury-bouquets">Luxury Bouquets</a><a href="/shop/grand-arrangements">Grand Arrangements</a><a href="/shop/peonies">Peonies</a><a href="/shop/tulips">Tulips</a><a href="/custom-orders">Custom Orders</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Services <span class="m-chev"></span></div><div class="m-sub">
    <a href="/wedding">Weddings</a><a href="/corporate">Corporate</a><a href="/events">Events</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Delivery <span class="m-chev"></span></div><div class="m-sub">
    <a href="/same-day-delivery">Same-Day Delivery</a><a href="/delivery-areas">Delivery Areas</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Studio <span class="m-chev"></span></div><div class="m-sub">
    <a href="/about">About</a><a href="/gallery">Gallery</a><a href="/journal">Journal</a><a href="/flower-care">Flower Care</a><a href="/contact">Contact</a>
  </div></div>
  <?php endif; ?>
  <div class="m-lang">
    <a href="<?php echo $en_url; ?>" class="m-lang-opt <?php echo !$is_ru ? 'active' : ''; ?>">EN &middot; English</a>
    <a href="<?php echo $ru_url; ?>" class="m-lang-opt <?php echo $is_ru ? 'active' : ''; ?>">RU &middot; Русский</a>
  </div>
  <div class="m-cta"><a href="https://wa.me/19172514669" class="nav-cta"><?php echo $is_ru ? 'Написать флористу' : 'Order Now'; ?></a></div>
</div>
