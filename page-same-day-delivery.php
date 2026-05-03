<?php
/**
 * Template Name: BF Same-Day Delivery
 * Boston Flowers — Same-Day Delivery page
 * Slug: /same-day-delivery
 *
 * ВАЖНО: Эта страница содержит live виджеты:
 * - Live статус (зелёный/оранжевый/красный) по Boston времени
 * - Countdown до 10:30 AM cutoff
 * - Smart CTA — текст кнопок меняется динамически
 * - setInterval(updateAll, 30000) — обновление каждые 30 сек
 * Все эти функции в <script> блоке в конце файла — не удалять!
 */

add_action('wp_head', function() { ?>
<title>Same-Day Flower Delivery Boston | Boston Flowers Studio</title>
<meta name="description" content="Same-day flower delivery across Greater Boston. Order by 10:30 AM — delivered today. Premium floral studio in Brighton, Boston.">
<link rel="canonical" href="https://bostonflowers.com/same-day-delivery">
<meta property="og:title" content="Same-Day Flower Delivery Boston | Boston Flowers Studio">
<meta property="og:description" content="Same-day flower delivery across Greater Boston. Order by 10:30 AM — delivered today. Premium floral studio in Brighton, Boston.">
<meta property="og:image" content="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-craft-full-bouquet.webp">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/same-day-delivery">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Florist","LocalBusiness"],
      "@id": "https://bostonflowers.com/#business",
      "name": "Boston Flowers",
      "description": "Premium floral studio in Brighton, Boston. Same-day flower delivery, custom compositions, wedding florals, and grand arrangements across Greater Boston.",
      "url": "https://bostonflowers.com/",
      "telephone": "+16178173157",
      "email": "bostons.flowers@gmail.com",
      "priceRange": "$$$",
      "currenciesAccepted": "USD",
      "paymentAccepted": "Square, PayPal, Venmo, Zelle",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "267 North Beacon St",
        "addressLocality": "Brighton",
        "addressRegion": "MA",
        "postalCode": "02135",
        "addressCountry": "US"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 42.3601,
        "longitude": -71.1531
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
          "opens": "08:00",
          "closes": "20:00"
        }
      ],
      "image": "https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-craft-full-bouquet.webp",
      "logo": "https://bostonflowers.com/logo.png",
      "sameAs": [
        "https://www.instagram.com/boston.flowers",
        "https://www.facebook.com/bostonflowers",
        "https://maps.app.goo.gl/nPwTeq92z9QtTUGX7"
      ],
      "areaServed": [
        {"@type":"City","name":"Boston"},
        {"@type":"City","name":"Cambridge"},
        {"@type":"City","name":"Newton"},
        {"@type":"City","name":"Brighton"},
        {"@type":"City","name":"Watertown"},
        {"@type":"City","name":"Dorchester"},
        {"@type":"City","name":"Needham"},
        {"@type":"City","name":"Burlington"}
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5.0",
        "bestRating": "5",
        "worstRating": "1",
        "reviewCount": "3"
      },
      "review": [
        {
          "@type": "Review",
          "author": {"@type":"Person","name":"Michael R."},
          "datePublished": "2026-01-15",
          "reviewBody": "Ordered at 9 AM for my wife's birthday — flowers arrived by noon, perfectly arranged. They confirmed immediately. This is the only florist I'll ever use in Boston.",
          "reviewRating": {"@type":"Rating","ratingValue":"5","bestRating":"5"}
        },
        {
          "@type": "Review",
          "author": {"@type":"Person","name":"Anastasia K."},
          "datePublished": "2026-02-03",
          "reviewBody": "Same-day, beautiful flowers, they picked up the phone. No other florist does this at this level.",
          "reviewRating": {"@type":"Rating","ratingValue":"5","bestRating":"5"}
        },
        {
          "@type": "Review",
          "author": {"@type":"Person","name":"David L."},
          "datePublished": "2026-02-20",
          "reviewBody": "100 roses, same-day, on time. Professionally packed. Genuinely impressive.",
          "reviewRating": {"@type":"Rating","ratingValue":"5","bestRating":"5"}
        }
      ],
      "makesOffer": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Same-Day Flower Delivery",
            "description": "Guaranteed same-day flower delivery in Greater Boston when ordered by 10:30 AM."
          },
          "priceSpecification": {
            "@type": "PriceSpecification",
            "minPrice": "20",
            "priceCurrency": "USD"
          },
          "areaServed": "Greater Boston",
          "availability": "https://schema.org/InStock"
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Custom Floral Arrangements",
            "description": "Bespoke flower compositions crafted to order for any occasion."
          },
          "availability": "https://schema.org/InStock"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://bostonflowers.com/same-day-delivery",
      "url": "https://bostonflowers.com/same-day-delivery",
      "name": "Same-Day Flower Delivery Boston | Boston Flowers Studio",
      "description": "Same-day flower delivery across Greater Boston. Order by 10:30 AM — delivered today.",
      "image": "https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-craft-full-bouquet.webp",
      "inLanguage": "en-US",
      "isPartOf": {"@id": "https://bostonflowers.com/#website"},
      "about": {"@id": "https://bostonflowers.com/#business"},
      "dateModified": "2026-04-23",
      "speakable": {
        "@type": "SpeakableSpecification",
        "cssSelector": [".hero-h1",".hero-sub",".cutoff-label",".status-txt",".schedule-title"]
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://bostonflowers.com/#website",
      "url": "https://bostonflowers.com/",
      "name": "Boston Flowers",
      "publisher": {"@id": "https://bostonflowers.com/#business"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the same-day flower delivery cutoff in Boston?",
          "acceptedAnswer": {"@type":"Answer","text":"Order by 10:30 AM for guaranteed same-day delivery anywhere in Greater Boston. After that we check studio inventory and confirm minutes."}
        },
        {
          "@type": "Question",
          "name": "Can you deliver flowers after the 10:30 AM cutoff?",
          "acceptedAnswer": {"@type":"Answer","text":"Often yes. We accept requests until 8 PM. After cutoff we check studio inventory and confirm same-day availability within minutes."}
        },
        {
          "@type": "Question",
          "name": "How much does same-day flower delivery cost in Boston?",
          "acceptedAnswer": {"@type":"Answer","text":"Boston, Cambridge, and Newton: $20. Needham, Burlington, Waltham, Medford: $35–40. Rhode Island and extended areas: ~$120+. Studio pickup at 267 North Beacon St is free."}
        },
        {
          "@type": "Question",
          "name": "How long does flower delivery take in Boston?",
          "acceptedAnswer": {"@type":"Answer","text":"1–2 hours from studio to door if flowers are in stock. 3–4 hours if sourcing is required. We always confirm the timeline upfront."}
        },
        {
          "@type": "Question",
          "name": "Does Boston Flowers do rush delivery?",
          "acceptedAnswer": {"@type":"Answer","text":"Yes. Rush delivery is available for an additional fee. Call the studio directly for urgent same-day requests."}
        },
        {
          "@type": "Question",
          "name": "Can I pick up flowers from the studio?",
          "acceptedAnswer": {"@type":"Answer","text":"Yes. Free pickup at 267 North Beacon St, Brighton, daily 8 AM – 8 PM."}
        }
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"https://bostonflowers.com/"},
        {"@type":"ListItem","position":2,"name":"Delivery","item":"https://bostonflowers.com/delivery-areas"},
        {"@type":"ListItem","position":3,"name":"Same-Day Delivery","item":"https://bostonflowers.com/same-day-delivery"}
      ]
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/1XXXXXXXXXX" class="wa-float" id="waFloat" aria-label="Order via WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-bg"><div class="hero-glow-l"></div><div class="hero-glow-r"></div></div>
  <div class="hero-bf" aria-hidden="true">BF</div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Same-Day &mdash; Greater Boston</span></div>
      <h1 class="hero-h1 serif">
        Luxury flowers.<br>
        <em>Delivered today.</em>
        <span class="hero-h1-sub">Order by 10:30 AM &mdash; guaranteed.</span>
      </h1>
      <p class="hero-sub">We craft every arrangement to order. Same day, anywhere in Greater Boston.</p>
      <p class="hero-confirm" id="heroConfirm">Typically confirmed within 5 minutes.</p>
      <div class="hero-btns">
        <a href="https://wa.me/1XXXXXXXXXX" class="btn btn-ghost" id="heroCta">Order for today</a>
        <a href="tel:+1XXXXXXXXXX" class="btn-text" style="margin-top:2px;">Call us &#8594;</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="cutoff-card" id="cutoffCard">
        <div class="cutoff-inner">
          <span class="cutoff-label">Today&rsquo;s cutoff</span>
          <div class="cutoff-time">10:30</div>
          <div class="cutoff-unit">AM &mdash; same-day guaranteed</div>
          <div class="status-bar" id="statusBar">
            <span class="status-dot" id="statusDot"></span>
            <span class="status-txt" id="statusTxt">Checking&hellip;</span>
          </div>
          <div class="countdown-row" id="countdownRow">
            <span class="countdown-label">Window closes in</span>
            <span class="countdown-val" id="countdownVal">&mdash;</span>
          </div>
          <div class="zone-table">
            <div class="zone-row"><span class="zone-row-name">Boston &middot; Cambridge &middot; Newton</span><span class="zone-row-price">$20</span></div>
            <div class="zone-row"><span class="zone-row-name">Dorchester</span><span class="zone-row-price">$20</span></div>
            <div class="zone-row"><span class="zone-row-name">Needham &middot; Burlington</span><span class="zone-row-price">$35&ndash;40</span></div>
            <div class="zone-row"><span class="zone-row-name">Rhode Island</span><span class="zone-row-price">~$120</span></div>
            <div class="zone-row"><span class="zone-row-name">Pickup at studio</span><span class="zone-row-price">Free</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── SECTION: photo-break-1 ── -->
<!-- ══════ PHOTO BREAK 1 — студийное/продуктовое фото ══════ -->
<!--
  ═══ ФОТО СЛОТ 1 ═══
  ТИП: Продуктовое / студийное
  КАДР: Крупный план букета, флористические детали, ленты с инициалами,
        или букет в красивой упаковке. Тёмный фон. Studio mood.
  ФОРМАТ: Горизонтальный, landscape
  ТОНИРОВКА: Тёмная, filter: brightness(0.7)
  КАК ВСТАВИТЬ:
    В CSS добавь к #photo-break-1:
    background-image: url('/assets/images/photo-product.jpg');
    background-size: cover;
    background-position: center;
    И удали элемент .photo-placeholder-txt
-->
<section id="photo-break-1" class="r">
  <div class="photo-placeholder">
    <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-craft-full-bouquet.webp" 
         alt="A master florist at Boston Flowers Studio in Brighton precisely crafting a luxury bouquet, showing the full vertical detail of premium stems and artistic composition." 
         title="Luxury Bouquet Crafting at Boston Flowers Studio - Full View"
         loading="lazy"
         style="width:100%; height:100%; object-fit:cover; object-position:center top !important; transform:scale(1.12); transform-origin:center top; display:block;">
  </div>
  <div class="photo-content-1">
    <div class="photo-eyebrow"><div class="photo-eyebrow-line"></div><span class="lbl">From our studio</span></div>
    <h2 class="photo-title-1 serif">Every stem placed<br>with <em>intention.</em></h2>
  </div>
</section>

<!-- ── SECTION: schedule (order window) ── -->
<!-- ══════ SCHEDULE ══════ -->
<section id="schedule">
  <div class="container">
    <div class="schedule-grid">
      <div class="schedule-left">
        <p class="lbl r" style="margin-bottom:0">Order Window</p>
        <h2 class="schedule-title serif r d1">When you order<br><em>is everything.</em></h2>
        <p class="schedule-desc r d2">Same-day guaranteed before 10:30 AM. After that we check studio inventory and confirm. We always tell you upfront &mdash; no surprises.</p>
      </div>
      <div class="r d2">
        <div class="time-blocks">
          <div class="time-block green"><div class="time-tag"><div class="time-tag-val">By<br>10:30</div><div class="time-tag-unit">AM</div></div><div class="time-body"><div class="time-body-title">Same-Day Guaranteed</div><div class="time-body-desc">Any arrangement, any size. We start immediately.</div></div></div>
          <div class="time-block amber"><div class="time-tag"><div class="time-tag-val">11 AM<br>&ndash;6 PM</div></div><div class="time-body"><div class="time-body-title">Manager Confirmation</div><div class="time-body-desc">We check studio inventory and confirm same-day within minutes.</div></div></div>
          <div class="time-block amber"><div class="time-tag"><div class="time-tag-val">Rush</div><div class="time-tag-unit">Any time</div></div><div class="time-body"><div class="time-body-title">Rush Delivery</div><div class="time-body-desc">Faster than standard &mdash; additional fee. Call directly.</div></div></div>
          <div class="time-block grey"><div class="time-tag"><div class="time-tag-val">Pick<br>up</div><div class="time-tag-unit">Free</div></div><div class="time-body"><div class="time-body-title">Studio Pickup</div><div class="time-body-desc">267 North Beacon St, Brighton &mdash; daily 8 AM &ndash; 8 PM.</div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── SECTION: zones (delivery areas) ── -->
<!-- ══════ ZONES — LIGHT ══════ -->
<section id="zones">
  <div class="container">
    <div class="zones-hd r">
      <p class="lbl lbl-dark">Delivery Areas</p>
      <h2 class="zones-title serif">Greater Boston<br>&amp; beyond.</h2>
    </div>
    <table class="zones-table r d1">
      <tbody>
        <tr><td><div class="zt-zone">Boston Core</div><div class="zt-areas">Boston &middot; Cambridge &middot; Newton &middot; Watertown &middot; Dorchester</div></td><td style="text-align:center;"><span class="zt-badge green">Guaranteed</span></td><td><div class="zt-price">$20</div></td></tr>
        <tr><td><div class="zt-zone">Mid-Zone</div><div class="zt-areas">Needham &middot; Burlington &middot; Waltham &middot; Medford</div></td><td style="text-align:center;"><span class="zt-badge green">Same-day</span></td><td><div class="zt-price">$35&ndash;40</div></td></tr>
        <tr><td><div class="zt-zone">Extended</div><div class="zt-areas">Rhode Island &middot; Southern MA &middot; Long distance</div></td><td style="text-align:center;"><span class="zt-badge amber">On request</span></td><td><div class="zt-price">~$120+</div></td></tr>
        <tr><td><div class="zt-zone">Pickup</div><div class="zt-areas">267 North Beacon St, Brighton &mdash; daily 8 AM &ndash; 8 PM</div></td><td style="text-align:center;"><span class="zt-badge green">Always</span></td><td><div class="zt-price">Free</div></td></tr>
      </tbody>
    </table>
    <div class="zones-note r">
      <p class="zones-note-txt"><strong>Not sure about your area?</strong> Message us &mdash; we confirm within minutes. We cover most of Greater Boston and discuss extended delivery for special occasions.</p>
    </div>
  </div>
</section>

<!-- ── SECTION: how-it-works ── -->
<!-- ══════ HOW IT WORKS ══════ -->
<section id="how">
  <div class="container">
    <div class="how-hd r">
      <p class="lbl">The process</p>
      <h2 class="how-title serif">Order to door,<br><em>without the wait.</em></h2>
    </div>
    <div class="how-grid">
      <div class="how-step r"><div class="step-num">01</div><div class="step-title">You choose</div><div class="step-desc">Via WhatsApp, phone, or website. Tell us the occasion &mdash; we respond within minutes.</div><span class="step-time">Instant</span></div>
      <div class="how-step r d1"><div class="step-num">02</div><div class="step-title">We prepare</div><div class="step-desc">Studio starts immediately. 1&ndash;2h if in stock. 3&ndash;4h if sourcing required. You always know which.</div><span class="step-time">1&ndash;4 hours</span></div>
      <div class="how-step r d2"><div class="step-num">03</div><div class="step-title">We confirm</div><div class="step-desc">You get a message when the arrangement is ready and leaving the studio.</div><span class="step-time">Included</span></div>
      <div class="how-step r d3"><div class="step-num">04</div><div class="step-title">We deliver</div><div class="step-desc">Direct to the address. No hubs, no sorting centers. Delivery notification sent.</div><span class="step-time">1&ndash;2 hours</span></div>
    </div>
  </div>
</section>

<!-- ── SECTION: photo-break-2 ── -->
<!-- ══════ PHOTO BREAK 2 — эмоциональный блок ══════ -->
<!--
  ═══ ФОТО СЛОТ 2 ═══
  ТИП: Эмоциональный / момент вручения
  КАДР: Руки передающие букет у двери, или курьер у подъезда,
        или получатель держит букет — лицо не обязательно.
        Это про МОМЕНТ и ЭМОЦИЮ, не про продукт.
  ФОРМАТ: Вертикальный / portrait — занимает левую половину блока
  ТОНИРОВКА: Тёмная тёплая, filter: brightness(0.7) saturate(0.9)
  КАК ВСТАВИТЬ:
    На .emotion-photo добавь:
    background-image: url('/assets/images/photo-delivery-moment.jpg');
    background-size: cover;
    background-position: center top;
    И удали элемент .emotion-photo-ph
-->
<section id="photo-break-2">
  <div class="emotion-split">
    <div class="emotion-photo r">
      <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-delivery-moment-landscape.webp" 
           alt="Wide view of a luxury flower delivery moment at a Boston residence, showing the elegant bouquet and the emotional doorstep experience." 
           title="Luxury Flower Delivery Moment in Greater Boston"
           loading="lazy"
           style="width:100%; height:100%; object-fit:cover; object-position:center; display:block; filter: brightness(0.72) saturate(0.9); transform: scale(1.0); transform-origin: center; position: relative; z-index: 1;">
    </div>
    <div class="emotion-copy r d1">
      <span class="lbl" style="margin-bottom:20px">The moment</span>
      <h2 class="emotion-title serif">Not just flowers.<br><em>A feeling.</em></h2>
      <p class="emotion-desc">We think about the person receiving it &mdash; not just the arrangement. Every delivery is a moment. We make sure it lands right.</p>
      <blockquote class="emotion-quote">
        &ldquo;The arrangement was beyond anything I expected &mdash; the studio took care of every detail.&rdquo;
      </blockquote>
    </div>
  </div>
</section>

<!-- ── SECTION: faq ── -->
<!-- ══════ FAQ ══════ -->
<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div class="faq-left">
        <p class="lbl r" style="margin-bottom:0">Questions</p>
        <h2 class="faq-title serif r d1">The answers<br><em>you need.</em></h2>
        <p class="faq-intro r d2">Real questions from real customers. If yours isn&rsquo;t here &mdash; ask directly.</p>
        <span class="faq-contact-label r d3">Still need help?</span>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="r d3">
          <a href="https://wa.me/1XXXXXXXXXX" class="btn btn-ghost">WhatsApp</a>
          <a href="tel:+1XXXXXXXXXX" class="btn-text">Call &#8594;</a>
        </div>
      </div>
      <div class="faq-right r d1">
        <div class="faq-list">
          <div class="faq-item"><div class="faq-q">I missed the 10:30 AM cutoff &mdash; can you still deliver today?<span class="faq-icon">+</span></div><div class="faq-a">Often yes. After the cutoff we check studio inventory and confirm availability. Message or call us &mdash; straight answer within minutes. We accept requests until 8 PM.</div></div>
          <div class="faq-item"><div class="faq-q">How long from order to delivery?<span class="faq-icon">+</span></div><div class="faq-a">If flowers are in studio: 1&ndash;2h to craft, then 1&ndash;2h delivery. If sourcing required: 3&ndash;4h to craft, then 1&ndash;2h delivery. We tell you the timeline upfront.</div></div>
          <div class="faq-item"><div class="faq-q">Can you do a custom arrangement same-day?<span class="faq-icon">+</span></div><div class="faq-a">Yes, if ordered before 10:30 AM. Custom palette, packaging, initials on ribbon &mdash; all available same-day. After cutoff depends on studio availability.</div></div>
          <div class="faq-item"><div class="faq-q">What if you don&rsquo;t have the flowers I want?<span class="faq-icon">+</span></div><div class="faq-a">We tell you immediately and propose an alternative or sourcing timeline. We never substitute without asking first.</div></div>
          <div class="faq-item"><div class="faq-q">Is rush delivery available?<span class="faq-icon">+</span></div><div class="faq-a">Yes, for an additional fee. Call us directly for rush requests &mdash; WhatsApp may be slower for urgent orders.</div></div>
          <div class="faq-item"><div class="faq-q">Do you deliver to Rhode Island or outside Boston?<span class="faq-icon">+</span></div><div class="faq-a">Yes. Rhode Island and extended areas available at ~$120+. Advance notice preferred. Contact us to confirm for your destination.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ── SECTION: trust (reviews) ── -->
<!-- ══════ TRUST ══════ -->
<section id="trust">
  <div class="container">
    <div class="trust-hd r">
      <p class="lbl lbl-dark">What clients say</p>
      <h2 class="trust-title serif">&ldquo;Delivered exactly when they said.&rdquo;</h2>
      <a href="https://maps.app.goo.gl/nPwTeq92z9QtTUGX7?g_st=ic" target="_blank" rel="noopener" class="google-badge" style="margin-top:20px;display:inline-flex;">
        <span class="google-badge-g">G</span><span class="google-badge-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="google-badge-score">5.0</span><span class="google-badge-label">Google Reviews</span>
      </a>
    </div>
    <div class="trust-grid">
      <div class="trust-card featured r"><div class="trust-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="trust-txt">&ldquo;Ordered at 9 AM for my wife&rsquo;s birthday &mdash; flowers arrived by noon, perfectly arranged. They confirmed immediately. This is the only florist I&rsquo;ll ever use in Boston.&rdquo;</p><p class="trust-by"><strong>Michael R.</strong> &middot; Boston, MA</p></div>
      <div class="trust-card r d1"><div class="trust-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="trust-txt">&ldquo;Same-day, beautiful flowers, they picked up the phone. No other florist does this at this level.&rdquo;</p><p class="trust-by"><strong>Anastasia K.</strong> &middot; Cambridge, MA</p></div>
      <div class="trust-card r d2"><div class="trust-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="trust-txt">&ldquo;100 roses, same-day, on time. Professionally packed. Genuinely impressive.&rdquo;</p><p class="trust-by"><strong>David L.</strong> &middot; Newton, MA</p></div>
    </div>
  </div>
</section>

<!-- ── SECTION: payment-strip ── -->
<!-- ══════ PAYMENT STRIP ══════ -->
<section id="proof">
  <div class="container">
    <div class="proof-inner">
      <div class="proof-group">
        <span class="proof-label">We accept</span>
        <span class="pay-chip">PayPal</span>
        <span class="pay-chip">Zelle</span>
        <span class="pay-chip">Square</span>
        <span class="pay-chip">Venmo</span>
      </div>
      <div class="proof-divider"></div>
      <div class="proof-facts">
        <span class="proof-fact">Pickup available</span>
        <span class="proof-fact">Same-day until 10:30 AM</span>
        <span class="proof-fact">Rush on request</span>
        <span class="proof-fact">Confirmed in 5 min</span>
      </div>
    </div>
  </div>
</section>

<!-- ── SECTION: cta ── -->
<!-- ══════ CTA ══════ -->
<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eyebrow">Ready to order?</p>
      <h2 class="cta-title" id="ctaTitle">Tell us what you need.<br>We&rsquo;ll handle the rest.</h2>
      <p class="cta-sub" id="ctaSub">Order by 10:30 AM for same-day delivery.<br>After that &mdash; just ask. We rarely say no.</p>
      <div class="cta-btns">
        <a href="https://wa.me/1XXXXXXXXXX" class="btn btn-ivory" id="ctaBtn1">Order via WhatsApp</a>
        <a href="tel:+1XXXXXXXXXX" class="btn btn-outline-ivory">Call the Studio</a>
      </div>
      <p class="cta-confirm" id="ctaConfirm">Typically confirmed within 5 minutes.</p>
    </div>
  </div>
</section>

<!-- FOOTER -->
<!-- ═══ EDELGERA THEME: FOOTER REGION START ═══
     WordPress: get_footer() → footer.php
     CSS: .footer-animated, .ft-grid, .ft-col, .ft-bottom classes
     DO NOT place page content here
═══════════════════════════════════════════ -->

<script>
// SCROLL PROGRESS
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',()=>{prog.style.width=Math.min(scrollY/(document.body.scrollHeight-innerHeight)*100,100)+'%';},{passive:true});

// SCROLL REVEAL
const ro=new IntersectionObserver(e=>{e.forEach(x=>{if(x.isIntersecting){x.target.classList.add('on');ro.unobserve(x.target)}});},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r').forEach(el=>ro.observe(el));
setTimeout(()=>document.querySelectorAll('.r:not(.on)').forEach(el=>el.classList.add('on')),2400);

// NAV handled by header-footer.js
// FLOATING WHATSAPP
const waBtn=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waBtn.classList.toggle('visible',scrollY>300);},{passive:true});

// BURGER handled by header-footer.js
// LIVE STATUS + COUNTDOWN + SMART CTA
function pad(n){return String(n).padStart(2,'0')}
function getBostonMins(){
  const now=new Date(new Date().toLocaleString('en-US',{timeZone:'America/New_York'}));
  return now.getHours()*60+now.getMinutes();
}
function updateAll(){
  const mins=getBostonMins();
  const cutoff=630,close=1200;
  const dot=document.getElementById('statusDot');
  const txt=document.getElementById('statusTxt');
  const bar=document.getElementById('statusBar');
  const card=document.getElementById('cutoffCard');
  const cdRow=document.getElementById('countdownRow');
  const cdVal=document.getElementById('countdownVal');
  const ids=['heroCta','ctaBtn1'];
  const set=(id,val)=>{const el=document.getElementById(id);if(el)el.textContent=val;};

  if(mins<cutoff){
    const rem=cutoff-mins;
    const h=Math.floor(rem/60),m=rem%60;
    dot.className='status-dot';bar.className='status-bar';
    txt.textContent='Open for same-day orders';
    cdRow.classList.add('show');
    cdVal.textContent=h>0?h+'h '+pad(m)+'m':m+' min';
    if(rem<60)card.classList.add('urgent');else card.classList.remove('urgent');
    ids.forEach(id=>set(id,'Order for today'));
    document.getElementById('ctaTitle').innerHTML='Tell us what you need.<br>We’ll handle the rest.';
    set('ctaSub','Order by 10:30 AM for same-day delivery. After that — just ask. We rarely say no.');
    set('heroConfirm','Typically confirmed within 5 minutes.');
    set('ctaConfirm','Typically confirmed within 5 minutes.');
  }else if(mins<close){
    dot.className='status-dot amber';bar.className='status-bar amber';
    txt.textContent='Past cutoff — contact us to check availability';
    cdRow.classList.remove('show');card.classList.remove('urgent');
    ids.forEach(id=>set(id,'Check today’s availability'));
    set('ctaTitle','Past the cutoff? Ask us anyway.');
    set('ctaSub','We often manage same-day after 10:30 AM. Call or message — we’ll tell you immediately.');
    set('heroConfirm','We respond within minutes.');
    set('ctaConfirm','We respond within minutes.');
  }else{
    dot.className='status-dot closed';bar.className='status-bar closed';
    txt.textContent='Studio closed — order now for tomorrow';
    cdRow.classList.remove('show');card.classList.remove('urgent');
    ids.forEach(id=>set(id,'Order for tomorrow'));
    set('ctaTitle','Place your order tonight. We’ll deliver tomorrow.');
    set('ctaSub','Studio opens at 8:00 AM. Order now and we’ll have it ready first thing.');
    set('heroConfirm','Open tomorrow from 8:00 AM.');
    set('ctaConfirm','We’ll confirm first thing in the morning.');
  }
}
updateAll();setInterval(updateAll,30000);

// FAQ
document.querySelectorAll('.faq-item').forEach(item=>{
  item.querySelector('.faq-q').addEventListener('click',()=>{
    const isOpen=item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
    if(!isOpen)item.classList.add('open');
  });
});

// LANG handled by header-footer.js
// CART
(function(){
  const count=0;
  const badge=document.getElementById('cartCount');
  const mBadge=document.getElementById('mCartCount');
  if(count>0){
    if(badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items');}
    if(mBadge){mBadge.textContent=count;mBadge.style.display='flex';}
  }
})();
</script>

<?php get_footer(); ?>
