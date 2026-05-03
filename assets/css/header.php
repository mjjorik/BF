<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
<title>Boston Flowers — Premium Floral Studio | Same-Day Delivery Boston</title>
<meta name="description" content="Boston's premium floral studio. Same-day delivery across Greater Boston. Custom bouquets, grand arrangements $1000+, weddings and corporate events. Order by 10:30 AM.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>> <!-- CACHE TEST 12345 --> 
    <?php wp_body_open(); ?>
<nav id="nav">
  <a href="/" class="nav-logo">
    <span class="bf-mark" aria-hidden="true"><span class="bf-b">B</span><span class="bf-f">F</span></span>
    Boston <span>Flowers</span>
  </a>
  <ul class="nav-menu">
    <!-- BF:MENU:SHOP:START -->
    <li class="nav-item"><a href="/shop">Shop <span class="chev"></span></a><div class="nav-dd">
      <a href="/shop/roses">Roses</a>
      <a href="/shop/luxury-bouquets">Luxury Bouquets</a>
      <a href="/shop/grand-arrangements">Grand Arrangements</a>
      <a href="/shop/peonies">Peonies</a>
      <a href="/shop/tulips">Tulips</a>
      <a href="/custom-orders">Custom Orders</a>
      <a href="/shop/everything-else">Everything Else</a>
    </div></li>
    <!-- BF:MENU:SHOP:END -->
    <!-- BF:MENU:SERVICES:START -->
    <li class="nav-item"><a href="/services">Services <span class="chev"></span></a><div class="nav-dd">
      <a href="/wedding">Weddings</a>
      <a href="/corporate">Corporate</a>
      <a href="/events">Events</a>
    </div></li>
    <!-- BF:MENU:SERVICES:END -->
    <!-- BF:MENU:DELIVERY:START -->
    <li class="nav-item"><a href="/delivery-areas">Delivery <span class="chev"></span></a><div class="nav-dd">
      <a href="/same-day-delivery">Same-Day Delivery</a>
      <a href="/delivery-areas">Delivery Areas</a>
    </div></li>
    <!-- BF:MENU:DELIVERY:END -->
    <!-- BF:MENU:STUDIO:START -->
    <li class="nav-item"><a href="/about">Studio <span class="chev"></span></a><div class="nav-dd">
      <a href="/about">About</a>
      <a href="/journal">Journal</a>
      <a href="/flower-care">Flower Care</a>
      <a href="/contact">Contact</a>
    </div></li>
    <!-- BF:MENU:STUDIO:END -->
    <li class="nav-item"><a href="/contact">Contact</a></li>
  </ul>
  <div class="nav-r">
    <!-- BF:LANG:START -->
    <div class="lang-switcher" id="langSwitcher">
      <button class="lang-btn" type="button" aria-haspopup="listbox" aria-expanded="false">
        <span class="lang-current">EN</span>
        <span class="lang-chev"></span>
      </button>
      <div class="lang-dd">
        <a href="/" class="lang-opt active" data-lang="en">EN &middot; English</a>
        <a href="/ru" class="lang-opt" data-lang="ru">RU &middot; Русский</a>
      </div>
    </div>
    <!-- BF:LANG:END -->
    <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="nav-account" aria-label="<?php echo is_user_logged_in() ? esc_attr__('My account', 'boston-flowers') : esc_attr__('Log in or create account', 'boston-flowers'); ?>">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="8" r="4"/></svg>
      <span><?php echo is_user_logged_in() ? esc_html__('Account', 'boston-flowers') : esc_html__('Sign In', 'boston-flowers'); ?></span>
    </a>
    <a href="/cart" class="nav-cart" aria-label="Shopping cart" id="navCart"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg><span class="cart-count" id="cartCount">0</span></a>
    <a href="tel:+16178173157" class="nav-cta" id="navCta">Order Now</a>
    <div class="burger" id="burger"><span></span><span></span><span></span></div>
  </div>
</nav>

<div class="m-nav" id="mNav">
  <div class="m-cart-row">
    <a href="/cart" class="m-cart-link"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>Shopping Cart</a>
    <span class="cart-count" id="mCartCount" style="position:static;opacity:1;display:none"></span>
  </div>
  <div class="m-account-row">
    <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" class="m-account-link"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.4" aria-hidden="true"><path d="M20 21a8 8 0 0 0-16 0"/><circle cx="12" cy="8" r="4"/></svg><?php echo is_user_logged_in() ? esc_html__('My Account', 'boston-flowers') : esc_html__('Sign In / Register', 'boston-flowers'); ?></a>
  </div>
  <div class="m-item"><div class="m-link" data-toggle>Shop <span class="m-chev"></span></div><div class="m-sub">
    <a href="/shop/roses">Roses</a><a href="/shop/luxury-bouquets">Luxury Bouquets</a><a href="/shop/grand-arrangements">Grand Arrangements</a><a href="/shop/peonies">Peonies</a><a href="/shop/tulips">Tulips</a><a href="/custom-orders">Custom Orders</a><a href="/shop/everything-else">Everything Else</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Services <span class="m-chev"></span></div><div class="m-sub">
    <a href="/wedding">Weddings</a><a href="/corporate">Corporate</a><a href="/events">Events</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Delivery <span class="m-chev"></span></div><div class="m-sub">
    <a href="/same-day-delivery">Same-Day Delivery</a><a href="/delivery-areas">Delivery Areas</a>
  </div></div>
  <div class="m-item"><div class="m-link" data-toggle>Studio <span class="m-chev"></span></div><div class="m-sub">
    <a href="/about">About</a><a href="/journal">Journal</a><a href="/flower-care">Flower Care</a><a href="/contact">Contact</a>
  </div></div>
  <div class="m-item"><a href="/contact" class="m-link">Contact</a></div>
  <div class="m-lang">
    <a href="/" class="m-lang-opt active">EN &middot; English</a>
    <a href="/ru" class="m-lang-opt">RU &middot; Русский</a>
  </div>
  <div class="m-cta"><a href="tel:+16178173157" class="nav-cta">Order Now</a></div>
</div>
