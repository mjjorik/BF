<?php
/**
 * Template Name: BF Custom Orders
 * Boston Flowers — Custom Orders page
 * Slug: /custom-orders
 *
 * ДИНАМИЧЕСКИЕ ЭЛЕМЕНТЫ:
 * - paStatus/paDot/paTxt — показывает статус same-day (открыто/закрыто/amber)
 * - heroCta, ctaBtn1 — текст кнопки меняется по времени
 * - chips — budget selector, меняет контент bHintHeading/bHintBody/bHintMicro
 * - updateStatus() запускается каждые 30 секунд
 * - VIDEO SLOT — #statement: заменить .stmt-video-ph на <video> после генерации
 */

add_action('wp_head', function() { ?>
<title>Custom Flower Orders Boston | Boston Flowers Studio</title>
<meta name="description" content="Custom bouquets made to order. Same-day available in Greater Boston. Tell us your occasion and budget.">
<link rel="canonical" href="https://bostonflowers.com/custom-orders">


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Florist","LocalBusiness"],
      "@id": "https://bostonflowers.com/#business",
      "name": "Boston Flowers",
      "description": "Premium floral studio in Brighton, Boston. Custom bouquets, same-day delivery, wedding and event florals.",
      "url": "https://bostonflowers.com/",
      "telephone": "+16178173157",
      "email": "bostons.flowers@gmail.com",
      "priceRange": "$$$",
      "paymentAccepted": "Square, PayPal, Venmo, Zelle",
      "address": {"@type":"PostalAddress","streetAddress":"267 North Beacon St","addressLocality":"Brighton","addressRegion":"MA","postalCode":"02135","addressCountry":"US"},
      "geo": {"@type":"GeoCoordinates","latitude":42.3601,"longitude":-71.1531},
      "openingHoursSpecification": [{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"08:00","closes":"20:00"}],
      "sameAs": ["https://www.instagram.com/boston.flowers","https://maps.app.goo.gl/nPwTeq92z9QtTUGX7"],
      "makesOffer": [
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Custom Flower Orders Boston","description":"Bespoke floral arrangements made to order. Same-day available when ordered before 10:30 AM."},"priceSpecification":{"@type":"PriceSpecification","minPrice":"80","priceCurrency":"USD"},"availability":"https://schema.org/InStock"},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Same-Day Flower Delivery Boston"},"priceSpecification":{"@type":"PriceSpecification","minPrice":"20","priceCurrency":"USD"},"availability":"https://schema.org/InStock"}
      ]
    },
    {
      "@type": "Service",
      "@id": "https://bostonflowers.com/custom-orders#service",
      "name": "Custom Flower Orders",
      "description": "Tell us your occasion, budget, and style. We design and deliver a bespoke arrangement the same day.",
      "image": "https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/05/custom-red-roses-studio-arrangement-boston-flowers.webp",
      "provider": {"@id":"https://bostonflowers.com/#business"},
      "areaServed": ["Boston","Brighton","Cambridge","Newton","Watertown","Dorchester"],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Custom Arrangements",
        "itemListElement": [
          {"@type":"Offer","name":"25 roses custom arrangement","price":"80","priceCurrency":"USD"},
          {"@type":"Offer","name":"50 roses custom arrangement","price":"180","priceCurrency":"USD"},
          {"@type":"Offer","name":"100 roses custom arrangement","price":"350","priceCurrency":"USD"},
          {"@type":"Offer","name":"200+ roses grand arrangement","price":"650","priceCurrency":"USD"}
        ]
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"Can you make a custom bouquet today?","acceptedAnswer":{"@type":"Answer","text":"Yes, if you order before 10:30 AM. After that — contact us and we'll check what's available right now."}},
        {"@type":"Question","name":"Can I choose exact flowers and colors?","acceptedAnswer":{"@type":"Answer","text":"Yes. Tell us the palette, style, and occasion. We work with what's available and always suggest alternatives if something isn't in stock."}},
        {"@type":"Question","name":"Will I see the arrangement before delivery?","acceptedAnswer":{"@type":"Answer","text":"Yes. We send a photo before it leaves the studio. You can approve or request adjustments."}},
        {"@type":"Question","name":"What budget should I expect for a custom order?","acceptedAnswer":{"@type":"Answer","text":"Custom orders start from $80. Most popular are $150–350. Grand arrangements from $500."}},
        {"@type":"Question","name":"Do you deliver outside Boston?","acceptedAnswer":{"@type":"Answer","text":"Yes. Boston and Cambridge from $20. Extended zones $35–40. Rhode Island around $120."}},
        {"@type":"Question","name":"What should I write in my first message?","acceptedAnswer":{"@type":"Answer","text":"Occasion, budget, style or colors, delivery area, preferred time. That's enough — we handle the rest."}}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://bostonflowers.com/custom-orders",
      "url": "https://bostonflowers.com/custom-orders",
      "name": "Custom Flower Orders Boston | Boston Flowers Studio",
      "description": "Custom bouquets made to order. Same-day available in Greater Boston. Tell us your occasion and budget.",
      "image": "https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/05/custom-red-roses-studio-arrangement-boston-flowers.webp",
      "inLanguage": "en-US",
      "dateModified": "2026-04-20",
      "speakable": {"@type":"SpeakableSpecification","cssSelector":[".hero-h1",".hero-sub",".stmt-txt"]}
    },
    {
      "@type": "WebSite",
      "@id": "https://bostonflowers.com/#website",
      "url": "https://bostonflowers.com/",
      "name": "Boston Flowers"
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"https://bostonflowers.com/"},
        {"@type":"ListItem","position":2,"name":"Custom Orders","item":"https://bostonflowers.com/custom-orders"}
      ]
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/1XXXXXXXXXX?text=Hi%2C+I+need+a+custom+bouquet+for+today." class="wa-float" id="waFloat" aria-label="Order via WhatsApp" target="_blank" rel="noopener"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-bg"><div class="hero-glow-l"></div><div class="hero-glow-r"></div></div>
  <div class="hero-bf" aria-hidden="true">BF</div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Custom Orders &mdash; Boston Flowers</span></div>
      <h1 class="hero-h1 serif">Designed<br>for the moment.<br><em>Delivered today.</em></h1>
      <p class="hero-sub">Tell us the occasion, your budget, and the style &mdash; we design and deliver the same day when timing allows.</p>
      <p class="hero-confirm" id="heroConfirm">Typically confirmed within 5 minutes.</p>
      <div class="hero-btns">
        <a href="https://wa.me/19172514669?text=Hi%2C+I+need+a+custom+bouquet+for+today." class="btn btn-ghost" id="heroCta">Order via WhatsApp</a>
        <a href="tel:+16178173157" class="btn-text" style="margin-top:2px">Call us &#8594;</a>
      </div>
      </div>
    <div class="hero-right">
      <div class="pa-card">
        <div class="pa-inner">
          <span class="pa-label">Price guide &mdash; roses</span>
          <div class="pa-scale">
            <div class="pa-row"><div><span class="pa-name">25 roses</span><span class="pa-note">same-day &middot; custom palette</span></div><div><div class="pa-price">$80</div><span class="pa-price-from">from</span></div></div>
            <div class="pa-row"><div><span class="pa-name">50 roses</span><span class="pa-note">with initials available</span></div><div><div class="pa-price">$180</div><span class="pa-price-from">from</span></div></div>
            <div class="pa-row"><div><span class="pa-name">100 roses</span><span class="pa-note">signature arrangement</span></div><div><div class="pa-price">$350</div><span class="pa-price-from">from</span></div></div>
            <div class="pa-row"><div><span class="pa-name">200+ roses</span><span class="pa-note">grand statement piece</span></div><div><div class="pa-price">$650</div><span class="pa-price-from">from</span></div></div>
          </div>
          <div class="pa-status" id="paStatus"><span class="pa-dot" id="paDot"></span><span class="pa-status-txt" id="paTxt">Checking&hellip;</span></div>
          <p class="pa-foot">Delivery $20&ndash;$40 across Greater Boston &middot; <a href="/same-day-delivery">Full delivery info &rarr;</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>✦</span>Same-day when ordered early</span>
      <span class="marquee-item"><span>✦</span>Real photos before delivery</span>
      <span class="marquee-item"><span>✦</span>No templates. No filler.</span>
      <span class="marquee-item"><span>✦</span>Greater Boston delivery</span>
      <span class="marquee-item"><span>✦</span>Response in 5 minutes</span>
      <span class="marquee-item"><span>✦</span>Custom palette &amp; style</span>
      <span class="marquee-item"><span>✦</span>Same-day when ordered early</span>
      <span class="marquee-item"><span>✦</span>Real photos before delivery</span>
      <span class="marquee-item"><span>✦</span>No templates. No filler.</span>
      <span class="marquee-item"><span>✦</span>Greater Boston delivery</span>
      <span class="marquee-item"><span>✦</span>Response in 5 minutes</span>
      <span class="marquee-item"><span>✦</span>Custom palette &amp; style</span>
    </div>
  </div>
</section>

<!-- PHOTO SLOT 1: Custom red roses studio arrangement, WordPress media ID 373. -->
<section id="photo-1">
  <figure class="ph-media" aria-label="Custom red roses arrangement being prepared by Boston Flowers">
    <?php
      echo wp_get_attachment_image(
        373,
        'full',
        false,
        [
          'class' => 'ph-img',
          'alt' => 'florist arranging a large basket of red roses in the Boston Flowers studio',
          'title' => 'Custom Red Roses Studio Arrangement by Boston Flowers',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '100vw',
        ]
      );
    ?>
  </figure>
  <div class="ph-copy">
    <div class="ph-eyebrow"><div class="ph-eyebrow-line"></div><span class="lbl">Studio-built custom roses</span></div>
    <h2 class="ph-title serif">Made for the moment.<br><em>Delivered today.</em></h2>
  </div>
</section>

<section id="budget">
  <div class="container">
    <div class="budget-hd r">
      <p class="lbl lbl-dark">Start here</p>
      <h2 class="budget-title serif">What&rsquo;s your<br>budget today?</h2>
    </div>
    <!-- PRICE ANCHOR STRIP — 4 anchor levels only, not a full catalog -->
    <div class="pas-wrap r d1">
      <span class="pas-lbl">Roses &mdash; price orientation</span>
      <div class="pas-strip">
        <div class="pas-item"><span class="pas-stems">25 stems</span><div class="pas-price">$80</div><span class="pas-sub">from</span></div>
        <div class="pas-item"><span class="pas-stems">50 stems</span><div class="pas-price">$180</div><span class="pas-sub">from</span></div>
        <div class="pas-item"><span class="pas-stems">100 stems</span><div class="pas-price">$350</div><span class="pas-sub">from</span></div>
        <div class="pas-item"><span class="pas-stems">200+ stems</span><div class="pas-price">$650</div><span class="pas-sub">from</span></div>
      </div>
    </div>
    <div class="budget-layout">
      <div>
        <div class="chips-row r" id="budgetChips">
          <button class="chip" data-heading="Clean &amp; elegant" data-body="A refined small arrangement with strong shape and fresh seasonal flowers. Best for a thoughtful gesture, a same-day surprise, or something tasteful without going oversized." data-micro="Same design principles — different scale." data-wa="Hi%2C+I'm+looking+for+something+clean+and+elegant+under+%24100.+It's+for+%5Boccasion%5D%2C+delivery+to+%5Barea%5D%2C+today+if+possible.">Under $100</button>
          <button class="chip" data-heading="Most popular range" data-body="This is the sweet spot for a custom bouquet with better flower selection, more color control, and a stronger visual presence. Great for birthdays, dates, thank-you gifts, and everyday premium orders." data-micro="Best balance of style, volume, and flexibility." data-wa="Hi%2C+I'd+like+a+custom+arrangement+in+the+%24100%E2%80%93200+range.+It's+for+%5Boccasion%5D%2C+delivery+to+%5Barea%5D%2C+and+I+prefer+%5Bstyle%2Fcolors%5D.">$100 &ndash; $200</button>
          <button class="chip" data-heading="Premium impact" data-body="A more expressive arrangement with fuller volume, premium flowers, and a clearly designed look. Best when the bouquet needs to feel noticeable, elevated, and emotionally strong." data-micro="More presence. More composition. More wow." data-wa="Hi%2C+I'm+looking+for+a+premium+custom+arrangement+in+the+%24200%E2%80%93350+range.+It's+for+%5Boccasion%5D%2C+delivery+to+%5Barea%5D%2C+with+%5Bstyle%2Fcolors%5D+if+available.">$200 &ndash; $350</button>
          <button class="chip" data-heading="Statement piece" data-body="Large-scale custom work with real visual impact — ideal for anniversaries, luxury gifting, major apologies, proposals, or when the flowers need to make a strong impression." data-micro="Designed to be remembered." data-wa="Hi%2C+I+need+a+statement+arrangement+in+the+%24350%E2%80%93650+range.+It's+for+%5Boccasion%5D%2C+delivery+to+%5Barea%5D%2C+and+I+want+something+impressive+and+custom.">$350 &ndash; $650</button>
          <button class="chip" data-heading="Grand custom work" data-body="For oversized arrangements, premium roses, large romantic gestures, and high-impact floral work with full creative freedom. Best for VIP gifting, events, and moments where scale matters." data-micro="Full studio attention. No compromise." data-wa="Hi%2C+I'm+looking+for+a+grand+custom+arrangement+above+%24650.+It's+for+%5Boccasion%5D%2C+delivery+to+%5Barea%5D%2C+and+I'd+like+to+discuss+the+strongest+options.">$650+</button>
        </div>
        <div class="b-hint r d1" id="budgetHint">
          <div class="b-hint-lbl">What fits this budget</div>
          <div class="b-hint-heading" id="bHintHeading" style="color:var(--stone);font-size:16px;font-family:'DM Sans',sans-serif;font-weight:300;">Select a budget above to see what&rsquo;s possible.</div>
          <div class="b-hint-body" id="bHintBody"></div>
          <div class="b-hint-micro" id="bHintMicro"></div>
          <div class="b-hint-trust">We design within your budget &mdash; no upselling.</div>
        </div>
        <a href="https://wa.me/19172514669?text=Hi%2C+I+need+a+custom+bouquet+for+today." class="b-wa r d2" id="budgetWaBtn"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg> Order via WhatsApp</a>
      </div>
      <div class="r d1">
        <h3 class="dir-hd serif">Popular custom directions</h3>
        <p class="dir-sub">What we make most often &mdash; available same-day before 10:30 AM.</p>
        <div class="dir-list">
          <div class="dir-row"><div><div class="dir-name">Roses with Initials</div><div class="dir-detail">50 or 100 stems &middot; monogram ribbon</div></div><div class="dir-price">from $180</div></div>
          <div class="dir-row"><div><div class="dir-name">Pink Premium Mix</div><div class="dir-detail">Garden roses &middot; ranunculus &middot; seasonal</div></div><div class="dir-price">from $200</div></div>
          <div class="dir-row"><div><div class="dir-name">Hydrangea Bouquet</div><div class="dir-detail">Studio signature &middot; any occasion</div></div><div class="dir-price">from $125</div></div>
          <div class="dir-row"><div><div class="dir-name">Peonies &amp; Tulips</div><div class="dir-detail">Seasonal only &middot; worth waiting for</div></div><div class="dir-price">from $160</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PHOTO SLOT 2: Romantic delivery moment, WordPress media ID 374. -->
<section id="photo-2">
  <div class="emo-split">
    <figure class="emo-photo r" aria-label="Red and white roses arrangement ready for delivery by Boston Flowers">
      <?php
        echo wp_get_attachment_image(
          374,
          'full',
          false,
          [
            'class' => 'emo-img',
            'alt' => 'large red and white roses arrangement placed inside a car for delivery in Boston',
            'title' => 'Romantic Red and White Roses Delivery Moment in Boston',
            'loading' => 'lazy',
            'decoding' => 'async',
            'sizes' => '(max-width: 1024px) 100vw, 50vw',
          ]
        );
      ?>
    </figure>
    <div class="emo-copy r d1">
      <span class="lbl" style="margin-bottom:18px">The moment</span>
      <h2 class="emo-title serif">Not just flowers.<br><em>A feeling.</em></h2>
      <p class="emo-desc">We think about the person receiving it &mdash; not just the arrangement. Every custom order is a moment. We make sure it lands right.</p>
      <blockquote class="emo-quote">&ldquo;The arrangement was beyond anything I expected &mdash; every detail was taken care of.&rdquo;</blockquote>
    </div>
  </div>
</section>

<section id="how">
  <div class="container">
    <div class="how-hd r"><p class="lbl">The process</p><h2 class="how-hd-title serif">Four steps.<br><em>Same day.</em></h2></div>
    <div class="how-grid">
      <div class="how-step r"><div class="step-num">01</div><div class="step-ttl">You send the request</div><div class="step-desc">Occasion, budget, style or colors, delivery area. Via WhatsApp or phone. We respond within minutes.</div><span class="step-tag">Instant</span></div>
      <div class="how-step r d1"><div class="step-num">02</div><div class="step-ttl">We confirm availability</div><div class="step-desc">If flowers are in studio &mdash; 1&ndash;2h. If sourcing needed &mdash; 3&ndash;4h. We tell you the timeline before you commit.</div><span class="step-tag">1&ndash;4 hours</span></div>
      <div class="how-step step-preview r d2"><div class="step-num">03</div><div class="step-ttl">We send a preview</div><div class="step-desc">Photo of the finished arrangement before it leaves the studio. You approve. This is what sets us apart.</div><span class="step-tag">Before delivery</span></div>
      <div class="how-step r d3"><div class="step-num">04</div><div class="step-ttl">We deliver</div><div class="step-desc">Direct to the address. Boston and Greater Boston, 1&ndash;2h after ready. Delivery notification sent.</div><span class="step-tag">1&ndash;2 hours</span></div>
    </div>
  </div>
</section>

<section id="statement">
  <figure class="stmt-media" aria-label="Custom white hydrangea bouquet by Boston Flowers">
    <?php
      echo wp_get_attachment_image(
        376,
        'full',
        false,
        [
          'class' => 'stmt-img',
          'alt' => 'custom white hydrangea bouquet wrapped in black paper by Boston Flowers',
          'title' => 'Custom White Hydrangea Bouquet by Boston Flowers',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '100vw',
        ]
      );
    ?>
  </figure>
  <div class="stmt-overlay"></div>
  <div class="container stmt-content">
    <div class="stmt-inner r">
      <span class="stmt-kicker">Custom orders, properly handled</span>
      <p class="stmt-txt serif">If it matters,<br><em>we handle it properly.</em></p>
      <span class="stmt-divider r" aria-hidden="true"></span>
      <p class="stmt-note">From roses and hydrangeas to seasonal stems and grand gestures, every custom order is designed around the occasion, the recipient and the delivery moment.</p>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div>
        <p class="lbl r" style="margin-bottom:0">Questions</p>
        <h2 class="faq-ttl serif r d1">Straight<br><em>answers.</em></h2>
        <p class="faq-intro r d2">Short, honest, confident. If yours isn&rsquo;t here &mdash; ask directly.</p>
        <span class="faq-lbl r d3">Still need help?</span>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="r d3">
          <a href="https://wa.me/19172514669" class="btn btn-ghost">WhatsApp</a>
          <a href="tel:+16178173157" class="btn-text">Call &#8594;</a>
        </div>
      </div>
      <div class="r d1">
        <div class="faq-list">
          <div class="faq-item"><div class="faq-q">Can you make it today?<span class="faq-icon">+</span></div><div class="faq-a">Yes, if you order before 10:30 AM. After that &mdash; contact us and we&rsquo;ll check what&rsquo;s available right now.</div></div>
          <div class="faq-item"><div class="faq-q">Can I choose exact flowers and colors?<span class="faq-icon">+</span></div><div class="faq-a">Yes. Tell us the palette, style, and occasion. We work with what&rsquo;s available and always suggest alternatives if something isn&rsquo;t in stock.</div></div>
          <div class="faq-item"><div class="faq-q">Will I see it before delivery?<span class="faq-icon">+</span></div><div class="faq-a">Yes. We send a photo before it leaves the studio. You can approve or request adjustments.</div></div>
          <div class="faq-item"><div class="faq-q">What budget should I expect?<span class="faq-icon">+</span></div><div class="faq-a">Custom orders start from $80. Most popular are $150&ndash;350. Grand arrangements from $500. Use the budget selector above.</div></div>
          <div class="faq-item"><div class="faq-q">Do you deliver outside Boston?<span class="faq-icon">+</span></div><div class="faq-a">Yes. Boston and Cambridge from $20. Extended zones $35&ndash;40. Rhode Island around $120. Contact us to confirm your area.</div></div>
          <div class="faq-item"><div class="faq-q">What should I write in my first message?<span class="faq-icon">+</span></div><div class="faq-a">Occasion &middot; Budget &middot; Style or colors &middot; Delivery area &middot; Preferred time. That&rsquo;s enough. We handle the rest.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═ BF SECTION: occasions ═ -->
<section id="occasions">
  <div class="container">
    <div class="occasions-hd r">
      <p class="lbl lbl-dark">What people order for</p>
      <h2 class="occasions-title serif">Every occasion<br><em>handled differently.</em></h2>
    </div>
    <div class="occasions-grid">
      <div class="occ-card r d1">
        <div class="occ-num">01</div>
        <h3 class="occ-title serif">Birthdays</h3>
        <p class="occ-body">Same-day delivery available. We can add a personalized message card and tailor colors to the recipient's taste.</p>
        <span class="occ-range">From $80</span>
      </div>
      <div class="occ-card r d2">
        <div class="occ-num">02</div>
        <h3 class="occ-title serif">Anniversaries</h3>
        <p class="occ-body">Roses, peonies, or a mixed composition — designed around your palette. Grand arrangements available from $350.</p>
        <span class="occ-range">From $150</span>
      </div>
      <div class="occ-card r d3">
        <div class="occ-num">03</div>
        <h3 class="occ-title serif">Proposals</h3>
        <p class="occ-body">We've done this many times. 100 roses, a custom palette, or something subtle — we'll ask the right questions.</p>
        <span class="occ-range">From $350</span>
      </div>
      <div class="occ-card r d4">
        <div class="occ-num">04</div>
        <h3 class="occ-title serif">Corporate gifts</h3>
        <p class="occ-body">Branded packaging, consistent quality, repeat delivery. Tell us the volume and we'll make it effortless.</p>
        <span class="occ-range">From $120</span>
      </div>
      <div class="occ-card r d1">
        <div class="occ-num">05</div>
        <h3 class="occ-title serif">Apologies</h3>
        <p class="occ-body">No judgment. We design arrangements that say what words sometimes can't. Delivered fast, presented well.</p>
        <span class="occ-range">From $100</span>
      </div>
      <div class="occ-card r d2">
        <div class="occ-num">06</div>
        <h3 class="occ-title serif">Just because</h3>
        <p class="occ-body">The best kind of order. Tell us what they like or leave it entirely to us — we rarely get it wrong.</p>
        <span class="occ-range">From $80</span>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eye">Ready to order?</p>
      <h2 class="cta-ttl" id="ctaTitle">Tell us what you need.<br>We&rsquo;ll design it today.</h2>
      <p class="cta-sub" id="ctaSub">Same-day available before 10:30 AM.<br>After that &mdash; ask us. We rarely say no.</p>
      <div class="cta-btns">
        <a href="https://wa.me/19172514669?text=Hi%2C+I+need+a+custom+bouquet+for+today." class="btn btn-ivory" id="ctaBtn1">Order via WhatsApp</a>
        <a href="tel:+16178173157" class="btn btn-outline-ivory">Call the Studio</a>
      </div>
      <p class="cta-conf" id="ctaConf">Response time: 5&ndash;10 minutes</p>
      <div class="cta-inst">
        <span class="cta-inst-lbl">Send us</span>
        <div class="cta-inst-items">
          <span class="cta-inst-item">Occasion</span>
          <span class="cta-inst-item">Budget</span>
          <span class="cta-inst-item">Style or colors</span>
          <span class="cta-inst-item">Delivery area</span>
          <span class="cta-inst-item">Preferred time</span>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',function(){prog.style.width=Math.min(scrollY/(document.body.scrollHeight-innerHeight)*100,100)+'%';},{passive:true});
const ro=new IntersectionObserver(function(e){e.forEach(function(x){if(x.isIntersecting){x.target.classList.add('on');ro.unobserve(x.target)}});},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r').forEach(function(el){ro.observe(el)});
setTimeout(function(){document.querySelectorAll('.r:not(.on)').forEach(function(el){el.classList.add('on')})},2000);
// NAV handled by header-footer.js

window.addEventListener('scroll',function(){nav.classList.toggle('scrolled',scrollY>60)},{passive:true});
window.addEventListener('scroll',function(){document.getElementById('waFloat').classList.toggle('visible',scrollY>300)},{passive:true});
// BURGER handled by header-footer.js

function pad(n){return String(n).padStart(2,'0')}
function getBostonMins(){var now=new Date(new Date().toLocaleString('en-US',{timeZone:'America/New_York'}));return now.getHours()*60+now.getMinutes()}
function set(id,val){var el=document.getElementById(id);if(el&&val!==undefined)el.textContent=val}
function updateStatus(){
  var mins=getBostonMins();
  var dot=document.getElementById('paDot');var txt=document.getElementById('paTxt');var bar=document.getElementById('paStatus');
  if(mins<630){
    var rem=630-mins;var h=Math.floor(rem/60),m=rem%60;
    dot.className='pa-dot';bar.className='pa-status';
    txt.textContent='Same-day open — '+(h>0?h+'h '+pad(m)+'m':m+' min')+' left';
    set('heroCta','Order for today');set('ctaBtn1','Order for today');
    set('heroConfirm','Typically confirmed within 5 minutes.');
    set('ctaConf','Response time: 5\u201310 minutes');
    set('ctaTitle','Tell us what you need. We’ll design it today.');
    set('ctaSub','Same-day available before 10:30 AM. After that — ask us. We rarely say no.');
  }else if(mins<1200){
    dot.className='pa-dot amber';bar.className='pa-status amber';
    txt.textContent='Late today? We’ll still check what’s possible.';
    set('heroCta','Check today’s availability');set('ctaBtn1','Check availability');
    set('heroConfirm','We respond within minutes.');set('ctaConf','We respond within minutes.');
    set('ctaTitle','Past the cutoff? Ask us anyway.');
    set('ctaSub','We often manage same-day after 10:30 AM. Message us — we’ll tell you immediately.');
  }else{
    dot.className='pa-dot closed';bar.className='pa-status closed';
    txt.textContent='Studio closed — order now for tomorrow';
    set('heroCta','Order for tomorrow');set('ctaBtn1','Order for tomorrow');
    set('heroConfirm','Open tomorrow from 8:00 AM.');set('ctaConf','We’ll confirm first thing in the morning.');
    set('ctaTitle','Place your order tonight. We’ll design it tomorrow.');
    set('ctaSub','Studio opens at 8:00 AM. Order now and we’ll have it ready first thing.');
  }
}
updateStatus();setInterval(updateStatus,30000);
var chips=document.querySelectorAll('.chip');
var bHintHeading=document.getElementById('bHintHeading');
var bHintBody=document.getElementById('bHintBody');
var bHintMicro=document.getElementById('bHintMicro');
var waBtn=document.getElementById('budgetWaBtn');
chips.forEach(function(chip){chip.addEventListener('click',function(){chips.forEach(function(c){c.classList.remove('active')});chip.classList.add('active');bHintHeading.textContent=chip.dataset.heading;bHintHeading.style.color='';bHintHeading.style.fontSize='';bHintHeading.style.fontFamily='';bHintHeading.style.fontWeight='';bHintBody.textContent=chip.dataset.body;bHintMicro.textContent=chip.dataset.micro;waBtn.href='https://wa.me/1XXXXXXXXXX?text='+chip.dataset.wa;})});
document.querySelectorAll('.faq-item').forEach(function(item){item.querySelector('.faq-q').addEventListener('click',function(){var isOpen=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open')});if(!isOpen)item.classList.add('open')})});
(function(){var count=0;var badge=document.getElementById('cartCount');var mBadge=document.getElementById('mCartCount');if(count>0){if(badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items')}if(mBadge){mBadge.textContent=count;mBadge.style.display='flex'}}})();
</script>

<?php get_footer(); ?>
