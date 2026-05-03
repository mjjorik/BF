<?php $cart_count = (function_exists('WC') && WC()->cart) ? (int) WC()->cart->get_cart_contents_count() : 0; ?>
<nav id="nav">
  <a href="/" class="nav-logo">
    <span class="bf-mark" aria-hidden="true"><span class="bf-b">B</span><span class="bf-f">F</span></span>
    Boston <span>Flowers</span>
  </a>
  <ul class="nav-menu">
    <li class="nav-item"><a href="/shop">Shop <span class="chev"></span></a><div class="nav-dd"><a href="/shop/roses">Roses</a><a href="/shop/luxury-bouquets">Luxury Bouquets</a><a href="/shop/grand-arrangements">Grand Arrangements</a><a href="/shop/peonies">Peonies</a><a href="/shop/tulips">Tulips</a><a href="/custom-orders">Custom Orders</a><a href="/shop/other">Everything Else</a></div></li>
    <li class="nav-item"><a href="/collections">Collections <span class="chev"></span></a><div class="nav-dd"><a href="/collections/best-sellers">Best Sellers</a><a href="/shop/seasonal">Seasonal</a><a href="/collections/signature">Signature</a><a href="/collections/occasions">Occasions</a></div></li>
    <li class="nav-item"><a href="/services">Services <span class="chev"></span></a><div class="nav-dd"><a href="/wedding-flowers-boston">Weddings</a><a href="/corporate-flower-delivery-boston">Corporate</a><a href="/custom-orders">Custom Events</a></div></li>
    <li class="nav-item"><a href="/delivery-areas">Delivery <span class="chev"></span></a><div class="nav-dd"><a href="/delivery-areas">Delivery Areas</a><a href="/same-day-flower-delivery-boston">Same-Day Delivery</a></div></li>
    <li class="nav-item"><a href="/about">About <span class="chev"></span></a><div class="nav-dd"><a href="/about">About the Studio</a><a href="/reviews">Reviews</a><a href="/flower-care">Flower Care</a></div></li>
    <li class="nav-item"><a href="/contact">Contact</a></li>
  </ul>
  <div class="nav-r">
    <a href="<?php echo function_exists('wc_get_cart_url') ? wc_get_cart_url() : '/cart'; ?>" class="nav-cart" aria-label="Shopping cart" id="navCart"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg><span class="cart-count<?php echo $cart_count > 0 ? ' has-items' : ''; ?>" id="cartCount"><?php echo $cart_count > 9 ? '9+' : $cart_count; ?></span></a>
    <a href="tel:+1XXXXXXXXXX" class="nav-cta">Order Now</a>
    <div class="burger" id="burger"><span></span><span></span><span></span></div>
  </div>
</nav>

<div class="m-nav" id="mNav">
  <div class="m-cart-row"><a href="<?php echo function_exists('wc_get_cart_url') ? wc_get_cart_url() : '/cart'; ?>" class="m-cart-link"><svg viewBox="0 0 24 24"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><line x1="3" y1="6" x2="21" y2="6"/><path d="M16 10a4 4 0 01-8 0"/></svg>Shopping Cart</a><span class="cart-count<?php echo $cart_count > 0 ? ' has-items' : ''; ?>" id="mCartCount" style="position:static;opacity:1;display:<?php echo $cart_count > 0 ? 'flex' : 'none'; ?>"><?php echo $cart_count; ?></span></div>
  <div class="m-item"><div class="m-link" data-toggle>Shop <span class="m-chev"></span></div><div class="m-sub"><a href="/shop/roses">Roses</a><a href="/shop/luxury-bouquets">Luxury Bouquets</a><a href="/shop/grand-arrangements">Grand Arrangements</a><a href="/shop/peonies">Peonies</a><a href="/shop/tulips">Tulips</a><a href="/custom-orders">Custom Orders</a><a href="/shop/other">Everything Else</a></div></div>
  <div class="m-item"><div class="m-link" data-toggle>Collections <span class="m-chev"></span></div><div class="m-sub"><a href="/collections/best-sellers">Best Sellers</a><a href="/shop/seasonal">Seasonal</a><a href="/collections/signature">Signature</a><a href="/collections/occasions">Occasions</a></div></div>
  <div class="m-item"><div class="m-link" data-toggle>Services <span class="m-chev"></span></div><div class="m-sub"><a href="/wedding-flowers-boston">Weddings</a><a href="/corporate-flower-delivery-boston">Corporate</a><a href="/custom-orders">Custom Events</a></div></div>
  <div class="m-item"><div class="m-link" data-toggle>Delivery <span class="m-chev"></span></div><div class="m-sub"><a href="/delivery-areas">Delivery Areas</a><a href="/same-day-flower-delivery-boston">Same-Day Delivery</a></div></div>
  <div class="m-item"><div class="m-link" data-toggle>About <span class="m-chev"></span></div><div class="m-sub"><a href="/about">About the Studio</a><a href="/reviews">Reviews</a><a href="/flower-care">Flower Care</a></div></div>
  <div class="m-item"><a href="/contact" class="m-link">Contact</a></div>
  <div class="m-cta"><a href="tel:+1XXXXXXXXXX" class="nav-cta">Order Now</a></div>
</div>
