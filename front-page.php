<?php get_header(); ?>
</div>

<a href="https://wa.me/19172514669" class="wa-float" id="waFloat" aria-label="Order via WhatsApp" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>

<section id="hero">
  <div class="hero-bg"><div class="glow-r"></div><div class="glow-l"></div></div>
  <div class="hero-wrap">
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Brighton, Boston &mdash; Est. 2023</span></div>
    <h1 class="hero-h1 serif">Luxury flowers.<br><em>Delivered today.</em></h1>
    <p class="hero-sub">Premium floral studio in Boston. Grand arrangements, signature roses with initials, custom compositions and same-day delivery across Greater Boston.</p>
    <div class="hero-btns"><a href="/shop" class="btn btn-ghost">Shop Bouquets</a><a href="#personalized" class="btn-text">Custom Order <span>&#8594;</span></a></div>
  </div>
  <div class="hero-scroll"><div class="scroll-line"></div><span class="scroll-txt">Scroll</span></div>
</section>

<section id="categories">
  <div class="container">
    <div class="cat-hd r r-up"><p class="lbl lbl-dark">Collections</p><h2 class="cat-title serif">Shop by Category</h2></div>
    <div class="cat-grid r r-up d1">
      <a href="/shop/roses" class="cat-card"><span class="cat-name">Roses</span><span class="cat-arr">&#8594;</span></a>
      <a href="/shop/luxury-bouquets" class="cat-card"><span class="cat-name">Luxury Bouquets</span><span class="cat-arr">&#8594;</span></a>
      <a href="/shop/grand-arrangements" class="cat-card"><span class="cat-name">Grand Arrangements</span><span class="cat-arr">&#8594;</span></a>
      <a href="/shop/peonies" class="cat-card"><span class="cat-name">Peonies</span><span class="cat-arr">&#8594;</span></a>
      <a href="/shop/tulips" class="cat-card"><span class="cat-name">Tulips</span><span class="cat-arr">&#8594;</span></a>
      <a href="/custom-orders" class="cat-card"><span class="cat-name">Custom Orders</span><span class="cat-arr">&#8594;</span></a>
    </div>
  </div>
</section>

<style>
  /* Slider Fix: Ensure only active slide is visible even when reveal animation is ON */
  .prod-card .prod-slide { opacity: 0 !important; z-index: 1; transition: opacity .45s ease-in-out !important; display: block !important; }
  .prod-card .prod-slide.active { opacity: 1 !important; z-index: 2; }
  .prod-card .prod-arr, .prod-card .prod-dots { z-index: 10 !important; }
  .prod-card .prod-slide img { width: 100% !important; height: 100% !important; object-fit: cover !important; object-position: center center !important; }
  
  /* Mobile Aspect Ratio Fix: theme uses 16:10 which zooms vertical photos. We override to 1:1 for the first two cards. */
  @media (max-width: 768px) {
    .prod-grid .prod-card:nth-child(1) .prod-img,
    .prod-grid .prod-card:nth-child(2) .prod-img,
    .prod-grid .prod-card:nth-child(3) .prod-img,
    .prod-grid .prod-card:nth-child(4) .prod-img,
    .prod-grid .prod-card:nth-child(5) .prod-img { 
      aspect-ratio: 1/1 !important; /* Making it square on mobile to show more height */
    }
  }
</style>

<section id="best-sellers">
  <div class="container">
    <div class="bs-hd r r-up"><div><p class="lbl lbl-dark">The Collection</p><h2 class="bs-title serif">What <em>people order</em></h2></div><a href="/shop" class="btn-text dark r d2">View all <span>&#8594;</span></a></div>
    <div class="prod-grid">
      <a href="/shop/roses" class="prod-card r r-up" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <?php echo wp_get_attachment_image(354, 'full', false, array('alt' => '100 red Ecuadorian roses bouquet arranged by Boston Flowers', 'title' => '100 Ecuadorian Red Roses Bouquet in Boston', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/v2-100-ecuadorian-roses-2.webp" alt="Ecuadorian Roses Detail">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/v2-100-ecuadorian-roses-3.webp" alt="Luxury Flower Delivery Boston">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div><div class="prod-badge">Most Popular</div></div><div class="prod-info"><p class="prod-cat">Roses</p><h3 class="prod-name">100 Ecuadorian Roses</h3><p class="prod-desc">Luxurious Grade A Ecuadorian roses. Grand arrangement, same-day delivery available.</p><div class="prod-ft"><div class="prod-price">$385 <span>/ 100 stems</span></div><span class="prod-order">Order</span></div></div></a>
      <a href="/shop/roses" class="prod-card r r-up d1" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/50-ohara-roses-scented-main-v2.webp" alt="50 O Hara Roses Luxury Arrangement">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/50-ohara-roses-scented-boston-1.webp" alt="50 O Hara Roses Scented">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/50-ohara-roses-scented-boston-3.webp" alt="Scented Rose Delivery Boston">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div></div><div class="prod-info"><p class="prod-cat">Roses</p><h3 class="prod-name">50 Scented<br>O’Hara Roses</h3><p class="prod-desc">Grade A roses with incredible fragrance. A sensory statement for any occasion.</p><div class="prod-ft"><div class="prod-price">from $195 <span>/ 50 stems</span></div><span class="prod-order">Order</span></div></div></a>
      <a href="/shop/luxury-bouquets" class="prod-card r r-up d2" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/dopamine-basket-1-v2.webp" alt="Vibrant luxury flower arrangement Dopamine Basket by Boston Flowers - Slide 1" title="Dopamine Basket 1 - Luxury Flower Arrangement in Boston" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/dopamine-basket-2-v2.webp" alt="Dopamine Basket luxury floral design details by Boston Flowers - Slide 2" title="Dopamine Basket 2 - Luxury Flower Arrangement in Boston" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/dopamine-basket-3-v2.webp" alt="Dopamine Basket as a luxury bouquet option by Boston Flowers - Slide 3" title="Dopamine Basket 3 - Luxury Flower Arrangement in Boston" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div><div class="prod-badge">Signature</div></div><div class="prod-info"><p class="prod-cat">Luxury Bouquets</p><h3 class="prod-name">Dopamine<br>Basket</h3><p class="prod-desc">Vibrant premium blooms in our signature basket. Can also be prepared as a bouquet.</p><div class="prod-ft"><div class="prod-price">from $250</div><span class="prod-order">Order</span></div></div></a>
      <a href="/shop/luxury-bouquets" class="prod-card r r-up d1" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/mixed-bouquet-1.webp" alt="Elegant luxury mixed bouquet with premium flowers by Boston Flowers - Slide 1" title="Mixed Bouquet 1 - Luxury Floral Arrangement in Boston" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/mixed-bouquet-2.webp" alt="Close-up details of the Mixed Bouquet luxury design by Boston Flowers - Slide 2" title="Mixed Bouquet 2 - Luxury Floral Arrangement in Boston" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/mixed-bouquet-3.webp" alt="The Mixed Bouquet as a premium gift option by Boston Flowers - Slide 3" title="Mixed Bouquet 3 - Luxury Floral Arrangement in Boston" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div></div><div class="prod-info"><p class="prod-cat">Luxury Bouquets</p><h3 class="prod-name">Mixed<br>Bouquet</h3><p class="prod-desc">Handcrafted selection of premium blooms. Elegant, vibrant, and designed fresh.</p><div class="prod-ft"><div class="prod-price">from $310</div><span class="prod-order">Order</span></div></div></a>
      <a href="/custom-orders" class="prod-card r r-up d2" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/grand-pink-rose-basket-custom-order-boston-flowers-3.webp" alt="Large pink rose basket arrangement with white rose baskets by Boston Flowers" title="Grand Pink Rose Basket Custom Order in Boston" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/grand-rose-arrangements-custom-order-boston-flowers-1.webp" alt="Large custom rose arrangements in pink, red, and white by Boston Flowers" title="Grand Rose Arrangements Custom Order in Boston" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/grand-white-rose-baskets-boston-flowers-2.webp" alt="Oversized white rose basket arrangements for a custom Boston Flowers order" title="Grand White Rose Basket Arrangements in Boston" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div></div><div class="prod-info"><p class="prod-cat">Grand Arrangements</p><h3 class="prod-name">Grand Custom<br>Arrangement</h3><p class="prod-desc">Large-scale floral compositions planned as custom orders. Recommended lead time: at least 2 days.</p><div class="prod-ft"><div class="prod-price">from $1,500+</div><span class="prod-order">Custom order</span></div></div></a>
      <a href="/shop/peonies" class="prod-card r r-up d3" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/seasonal-peony-tulip-arrangement-boston-flowers-1.webp" alt="Pastel luxury floral arrangement in a white vase by Boston Flowers" title="Pastel Luxury Floral Arrangement in Boston" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/luxury-peony-tulip-bouquet-boston-flowers-2.webp" alt="Pastel Boston Flowers arrangement delivered to Boston Medical Center Brighton" title="Pastel Floral Arrangement Delivered in Brighton" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/premium-seasonal-peony-tulip-flowers-boston-3.webp" alt="Large pastel flower arrangement held for delivery in Boston" title="Premium Pastel Flowers in Boston" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div></div><div class="prod-info"><p class="prod-cat">Luxury Bouquets</p><h3 class="prod-name">Pastel Signature<br>Arrangement</h3><p class="prod-desc">Soft pastel blooms in a premium studio arrangement, designed fresh for gifting and delivery.</p><div class="prod-ft"><div class="prod-price">from $290</div><span class="prod-order">Order</span></div></div></a>
    </div>
  </div>
</section>

<section id="personalized">
  <div class="container">
    <div class="pers-grid">
      <div class="pers-left">
        <p class="lbl r r-left">Signature &amp; Custom</p>
        <h2 class="pers-title serif r r-left d1">Made for you.<br><em>Every detail.</em></h2>
        <p class="pers-desc r r-left d2">Initials on the ribbon. Your palette. Your occasion. We don't use templates &mdash; every personalized arrangement is designed from scratch for the person receiving it.</p>
        <div class="pers-list r r-left d3">
          <div class="pers-row"><div class="pers-row-l"><div class="pers-row-name">Roses with Initials &mdash; 50 stems</div><div class="pers-row-note">Monogram ribbon, your choice of packaging</div></div><div class="pers-row-price">from $180</div></div>
          <div class="pers-row"><div class="pers-row-l"><div class="pers-row-name">Roses with Initials &mdash; 100 stems</div><div class="pers-row-note">Statement piece, full studio arrangement</div></div><div class="pers-row-price">from $350</div></div>
          <div class="pers-row"><div class="pers-row-l"><div class="pers-row-name">Fully Custom Composition</div><div class="pers-row-note">Your vision, your palette &mdash; designed by our florist</div></div><div class="pers-row-price">by request</div></div>
          <div class="pers-row"><div class="pers-row-l"><div class="pers-row-name">Custom Packaging Choice</div><div class="pers-row-note">Box, wrap, vase &mdash; selected at order</div></div><div class="pers-row-price">included</div></div>
        </div>
      </div>
      <div class="pers-right">
        <div class="pers-card r r-right"><div class="pers-num">01</div><div class="pers-card-title">Personalization</div><div class="pers-card-desc">Initials, messages, ribbon color, packaging. Your arrangement carries your signature.</div></div>
        <div class="pers-card r r-right d1"><div class="pers-num">02</div><div class="pers-card-title">Studio-Grade Sourcing</div><div class="pers-card-desc">We order what's right for your composition &mdash; not whatever is available that day.</div></div>
        <div class="pers-card r r-right d2"><div class="pers-num">03</div><div class="pers-card-title">No Templates</div><div class="pers-card-desc">Every custom order is a conversation. The result should be unmistakably yours.</div></div>
      </div>
    </div>
    <div class="pers-cta r r-up">
      <h3 class="pers-cta-title serif">&#8220;Not sure what to order?<br>Tell us the occasion.&#8221;</h3>
      <p class="pers-cta-sub">Talk to a florist. We'll design it together.</p>
      <div class="pers-cta-btns"><a href="https://wa.me/119172514669" class="btn btn-ghost">Talk to a Florist</a><a href="/custom-orders" class="btn-text">See custom work <span>&#8594;</span></a></div>
    </div>
  </div>
</section>

<section id="same-day">
  <div class="container">
    <div class="sd-grid">
      <div>
        <p class="lbl r r-left" style="margin-bottom:22px">Same-Day Delivery</p>
        <h2 class="sd-title serif r r-left d1">Order by <em>10:30 AM</em> &mdash;<br>delivered today.</h2>
        <p class="sd-desc r r-left d2">We craft every arrangement to order. Place yours before 10:30 AM and we deliver the same day. After 11 AM &mdash; contact us directly.</p>
        <div class="sd-rules r r-left d3">
          <div class="sd-rule"><div class="rule-t">10:30</div><div class="rule-body"><strong>Same-Day Guaranteed</strong>Any arrangement, any composition. We handle the rest.</div></div>
          <div class="sd-rule"><div class="rule-t">11:00+</div><div class="rule-body"><strong>Subject to Availability</strong>Contact a florist directly. We'll confirm based on what's in the studio.</div></div>
          <div class="sd-rule"><div class="rule-t">Rush</div><div class="rule-body"><strong>Rush Delivery Available</strong>Need it faster? Available for an additional fee.</div></div>
        </div>
      </div>
      <div class="r r-right d2">
        <p class="lbl" style="margin-bottom:18px">Delivery Areas</p>
        <div class="zones">
          <div class="zone"><div class="zone-n">Boston &middot; Cambridge &middot; Newton &middot; Watertown</div><div class="zone-p">$20</div></div>
          <div class="zone"><div class="zone-n">Dorchester</div><div class="zone-p">$20</div></div>
          <div class="zone"><div class="zone-n">Needham &middot; Burlington</div><div class="zone-p">$35&ndash;40</div></div>
          <div class="zone"><div class="zone-n">Rhode Island</div><div class="zone-p">~$120</div></div>
        </div>
        <p class="sd-note"><strong>Pickup available</strong> at the studio &mdash;<br>267 North Beacon St, Brighton, MA 02135.<br>Open daily 8:00 AM &ndash; 8:00 PM.</p>
        <span class="pay-label" style="margin-top:20px">We accept</span>
        <div class="pay-row">
          <span class="pay-badge"><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>Square</span>
          <span class="pay-badge"><svg viewBox="0 0 24 24"><path d="M7 11l5-5 5 5M7 17l5-5 5 5"/></svg>PayPal</span>
          <span class="pay-badge"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>Venmo</span>
          <span class="pay-badge"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>Zelle</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="studio-gallery">
  <div class="container">
    <div class="gallery-hd r r-up"><div><p class="lbl lbl-dark">Studio Work</p><h2 class="gallery-title serif">Real flowers.<br><em>Real moments.</em></h2></div><a href="/gallery" class="btn-text dark r d1">View full gallery <span>&#8594;</span></a></div>
    <div class="gallery-grid">
      <div class="gallery-item r r-in"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-main-zoomed.webp" alt="Elegant bouquet of pink ranunculus and hydrangeas held on a Boston sidewalk" title="Studio Portfolio: Pink Ranunculus Bouquet" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">100 Red Roses</span></div></div>
      <div class="gallery-item r r-left d1"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-2-highres.webp" alt="Luxury gift room with red rose hatboxes and heart-shaped balloons in Boston" title="Studio Portfolio: Rose Gift Event" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Custom Order</span></div></div>
      <div class="gallery-item r r-right d2"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-3-highres.webp" alt="Large heart-shaped floral arrangement made of vibrant red roses" title="Studio Portfolio: Heart Rose Arrangement" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Wedding Florals</span></div></div>
      <div class="gallery-item r r-up d1"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-4-highres.webp" alt="Hundreds of deep red roses in a gigantic luxury basket arrangement" title="Studio Portfolio: Grand Rose Basket" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Grand Arrangement</span></div></div>
      <div class="gallery-item r r-down d2"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-5-highres.webp" alt="Large mixed red and cream rose bouquet on a car passenger seat delivery" title="Studio Portfolio: Mixed Rose Bouquet" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Luxury Bouquet</span></div></div>
      <div class="gallery-item r r-left d3"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-6-highres.webp" alt="Oversized textured bouquet with pink, purple and white hydrangeas and roses" title="Studio Portfolio: Textured Round Bouquet" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Seasonal Collection</span></div></div>
      <div class="gallery-item r r-right d1"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-7-v2.webp" alt="Massive magenta and yellow rose bouquet held outdoors on a snowy Boston street" title="Studio Portfolio: Winter Rose Delivery" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Personalized Gift</span></div></div>
      <div class="gallery-item r r-up d2"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-8-highres.webp" alt="Enormous blush pink rose bouquet wrapped in premium soft pink paper" title="Studio Portfolio: Blush Rose Bouquet" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Event Decor</span></div></div>
      <div class="gallery-item r r-in d3"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-9-highres.webp" alt="Perfectly round bright pink peony rose bouquet in layered white wrapping" title="Studio Portfolio: Peony Rose Bouquet" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Studio Craft</span></div></div>
    </div>
    <div class="gallery-cta r r-up"><p class="gallery-note">Every arrangement photographed in our Brighton studio. <em>270+ completed orders</em> &mdash; browse the full archive.</p><a href="/gallery" class="btn btn-wine">Open Gallery</a></div>
  </div>
</section>

<section id="grand">
  <div class="container">
    <div class="grand-inner">
      <div class="grand-left">
        <p class="lbl grand-label r r-up">GRAND ARRANGEMENTS</p>
        <h2 class="grand-title serif r r-up d1">Statement floral work.<br><em>from $1,500+</em></h2>
        <p class="grand-desc r r-up d2">Boston Flowers is a premium floral studio in Boston creating large-scale floral compositions planned with our design team for luxury gifting, private events, weddings, corporate receptions, and interiors. Recommended lead time: 2 days. Rush requests are subject to studio approval.</p>
        <div class="grand-rule r r-up d3" aria-hidden="true"></div>
        <div class="grand-tiers">
          <div class="grand-tier r r-up d3"><div><div class="tier-label">Grand Basket Arrangement</div><div class="tier-note">Premium roses, orchids, hydrangeas, and seasonal flowers arranged as a large-scale basket composition.</div></div><div class="tier-price">from $1,500</div></div>
          <div class="grand-tier r r-up d4"><div><div class="tier-label">Prestige Collection</div><div class="tier-note">High-impact floral pieces for luxury gifting, executive occasions, entrances, receptions, and private events.</div></div><div class="tier-price">from $3,800</div></div>
          <div class="grand-tier r r-up d5"><div><div class="tier-label">Installation &amp; Event Floral Design</div><div class="tier-note">Venue florals, reception tables, arches, entry pieces, and custom floral decor planned with the studio.</div></div><div class="tier-price">by quote</div></div>
        </div>
        <a href="https://wa.me/119172514669" class="btn btn-ghost grand-cta r r-up d5" style="margin-top:8px"><span class="grand-cta-text">REQUEST A CONSULTATION</span><span class="grand-cta-arrow" aria-hidden="true">&#8594;</span></a>
      </div>
      <div class="grand-right r r-up d4"><div class="grand-img-wrap"><?php echo wp_get_attachment_image(346, 'large', false, array(
        'class' => 'grand-img',
        'alt' => 'prestige grand basket floral composition with red and white roses by Boston Flowers',
        'title' => 'Prestige Grand Basket by Boston Flowers',
        'loading' => 'lazy',
        'decoding' => 'async',
        'sizes' => '(max-width: 768px) 100vw, (max-width: 1100px) 44vw, 520px'
      )); ?><div class="grand-caption"><div class="grand-caption-title">Prestige Grand Basket</div><div class="grand-caption-sub">Studio-planned composition &middot; from $3,800</div></div></div></div>
    </div>
  </div>
</section>

<section id="services">
  <div class="container">
    <div class="svc-hd r r-up"><p class="lbl">Studio Services</p><h2 class="svc-title serif">Beyond the bouquet</h2></div>
    <div class="svc-grid">
      <a href="/wedding-flowers-boston" class="svc-card r r-up"><div class="svc-img has-photo"><?php echo wp_get_attachment_image(355, 'full', false, array('class' => 'svc-photo', 'alt' => 'cream and blush bridal bouquet for wedding florals by Boston Flowers', 'title' => 'Wedding Florals Bridal Bouquet in Boston', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 1024px) calc(100vw - 64px), 31vw')); ?></div><div class="svc-body"><p class="svc-tag">Bridal Studio</p><h3 class="svc-name">Wedding Florals</h3><p class="svc-desc">Bespoke wedding florals, designed from concept to execution. Every arrangement reflects your vision, palette, and setting.</p><span class="svc-link">Start a project <span>&#8594;</span></span></div></a>
      <a href="/corporate-flower-delivery-boston" class="svc-card r r-up d1"><div class="svc-img has-photo"><?php echo wp_get_attachment_image(356, 'full', false, array('class' => 'svc-photo', 'alt' => 'white corporate floral arrangement for a reception desk by Boston Flowers', 'title' => 'Corporate Floral Reception Arrangement in Boston', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 1024px) calc(100vw - 64px), 31vw')); ?></div><div class="svc-body"><p class="svc-tag">B2B</p><h3 class="svc-name">Corporate Orders</h3><p class="svc-desc">Floral solutions for offices, events, and brand experiences. From weekly arrangements to large-scale installations.</p><span class="svc-link">Start a project <span>&#8594;</span></span></div></a>
      <a href="/custom-orders" class="svc-card r r-up d2"><div class="svc-img has-photo"><?php echo wp_get_attachment_image(357, 'full', false, array('class' => 'svc-photo', 'alt' => 'burgundy and cream floral centerpieces on a private event tablescape by Boston Flowers', 'title' => 'Custom Events Floral Tablescape in Boston', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 1024px) calc(100vw - 64px), 31vw')); ?></div><div class="svc-body"><p class="svc-tag">Bespoke</p><h3 class="svc-name">Custom Events</h3><p class="svc-desc">Statement compositions for private events and special occasions. Designed individually, without templates or repetition.</p><span class="svc-link">Start a project <span>&#8594;</span></span></div></a>
    </div>
  </div>
</section>

<section id="seasonal">
  <div class="container">
    <div class="seas-hd"><div class="r r-left"><p class="lbl">Seasonal Collections</p><h2 class="seas-title serif">The right flowers,<br><em>at the right moment.</em></h2></div><a href="/shop/seasonal" class="btn-text r r-right">Browse seasonal <span>&#8594;</span></a></div>
    <div class="seas-grid">
      <a href="/shop/seasonal" class="seas-card r r-up"><div class="seas-img"><?php echo wp_get_attachment_image(347, 'large', false, array('class' => 'seas-photo', 'alt' => 'pink rose heart arrangement with balloons for Valentine’s Day by Boston Flowers', 'title' => 'Valentine’s Day Rose Heart by Boston Flowers', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 25vw')); ?></div><div class="seas-info"><p class="seas-occ">February 14</p><h3 class="seas-name">Valentine's Day<br>Collection</h3></div></a>
      <a href="/shop/seasonal" class="seas-card r r-up d1"><div class="seas-img"><?php echo wp_get_attachment_image(348, 'large', false, array('class' => 'seas-photo', 'alt' => 'pink tulip bouquet for International Women’s Day by Boston Flowers', 'title' => 'International Women’s Day Tulip Bouquet by Boston Flowers', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 25vw')); ?></div><div class="seas-info"><p class="seas-occ">March 8</p><h3 class="seas-name">International<br>Women's Day</h3></div></a>
      <a href="/shop/seasonal" class="seas-card r r-up d2"><div class="seas-img"><?php echo wp_get_attachment_image(351, 'large', false, array('class' => 'seas-photo', 'alt' => 'pink and cream Mother’s Day bouquet by Boston Flowers', 'title' => 'Mother’s Day Seasonal Bouquet by Boston Flowers', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 25vw')); ?></div><div class="seas-info"><p class="seas-occ">May</p><h3 class="seas-name">Mother's Day<br>Peonies &amp; Tulips</h3></div></a>
      <a href="/shop/seasonal" class="seas-card r r-up d3"><div class="seas-img"><?php echo wp_get_attachment_image(349, 'large', false, array('class' => 'seas-photo', 'alt' => 'warm autumn Thanksgiving bouquet by Boston Flowers', 'title' => 'Thanksgiving Seasonal Bouquet by Boston Flowers', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 25vw')); ?></div><div class="seas-info"><p class="seas-occ">November</p><h3 class="seas-name">Thanksgiving<br>Collection</h3></div></a>
    </div>
  </div>
</section>

<section id="reviews">
  <div class="container">
    <div class="rev-hd r r-up">
      <p class="lbl lbl-dark">Customer Reviews</p>
      <h2 class="rev-title serif">Worth <em>every dollar.</em></h2>
      <a href="https://maps.app.goo.gl/nPwTeq92z9QtTUGX7?g_st=ic" target="_blank" rel="noopener" class="google-badge" style="margin-top:24px;display:inline-flex"><span class="google-badge-g">G</span><span class="google-badge-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="google-badge-score">5.0</span><span class="google-badge-label">Google Reviews</span></a>
    </div>
    <div class="rev-grid">
      <div class="rev-card r r-up"><div class="rev-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="rev-txt">&#8220;Ordered 100 roses with my wife's initials for our anniversary. The arrangement was beyond anything I expected &mdash; the studio took care of every detail.&#8221;</p><p class="rev-by"><strong>Michael R.</strong> &middot; Boston, MA</p></div>
      <div class="rev-card r r-up d1"><div class="rev-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="rev-txt">&#8220;Same-day delivery, beautiful flowers, and they actually answered the phone. This is the only florist I'll ever use in Boston.&#8221;</p><p class="rev-by"><strong>Anastasia K.</strong> &middot; Cambridge, MA</p></div>
      <div class="rev-card r r-up d2"><div class="rev-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="rev-txt">&#8220;Our corporate event florals were stunning. Everyone asked who did the arrangements. Boston Flowers understands what premium means.&#8221;</p><p class="rev-by"><strong>Jennifer L.</strong> &middot; Newton, MA</p></div>
    </div>
    <div class="rev-addr r r-up d3">
      <div class="addr-item"><div class="addr-lbl">Address</div><div class="addr-val">267 North Beacon St, Brighton</div></div>
      <div class="addr-div"></div>
      <div class="addr-item"><div class="addr-lbl">Hours</div><div class="addr-val">Daily 8:00 AM &ndash; 8:00 PM</div></div>
      <div class="addr-div"></div>
      <div class="addr-item"><div class="addr-lbl">Same-Day Cutoff</div><div class="addr-val">10:30 AM</div></div>
      <div class="addr-div"></div>
      <div class="addr-item"><div class="addr-lbl">Pickup</div><div class="addr-val">Available at studio</div></div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-lbl r r-up"><p class="lbl">Get in Touch</p></div>
    <h2 class="cta-title r r-up d1">Something larger,<br>faster, or fully custom?</h2>
    <p class="cta-sub r r-up d2">Talk to a florist. We'll design it together.<br>No templates. No shortcuts.</p>
    <div class="cta-btns r r-up d3"><a href="https://wa.me/119172514669" class="btn btn-ivory">Talk to a Florist</a><a href="tel:+119172514669" class="btn btn-outline-ivory">Call the Studio</a></div>
  </div>
</section>

<script>
window.addEventListener('scroll',function(){var b=document.getElementById('waFloat');if(b)b.classList.toggle('visible',window.scrollY>400);},{passive:true});
(function(){
  document.querySelectorAll('.prod-card[data-slides]').forEach(function(card){
    var slides=card.querySelectorAll('.prod-slide');
    if(slides.length<2)return;
    var dots=card.querySelectorAll('.prod-dot');
    var bL=card.querySelector('.prod-arr-l'),bR=card.querySelector('.prod-arr-r');
    var cur=0,n=slides.length,busy=false;
    function go(i){if(busy)return;busy=true;slides[cur].classList.remove('active');if(dots[cur])dots[cur].classList.remove('active');cur=(i+n)%n;slides[cur].classList.add('active');if(dots[cur])dots[cur].classList.add('active');setTimeout(function(){busy=false;},460);}
    if(bL)bL.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();go(cur-1);});
    if(bR)bR.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();go(cur+1);});
    dots.forEach(function(d,i){d.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();go(i);});});
    var tx=0;
    card.addEventListener('touchstart',function(e){tx=e.touches[0].clientX;},{passive:true});
    card.addEventListener('touchend',function(e){var dx=e.changedTouches[0].clientX-tx;if(Math.abs(dx)>40)go(dx<0?cur+1:cur-1);},{passive:true});
  });
})();
</script>
<?php get_footer(); ?>
