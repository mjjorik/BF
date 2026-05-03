<?php
/**
 * Template Name: BF Delivery Areas
 * Boston Flowers — Delivery Areas page
 * Slug: /delivery-areas
 */

add_action('wp_head', function() { ?>
<title>Flower Delivery Areas Boston | Boston Flowers</title>
<meta name="description" content="Same-day flower delivery across Boston and nearby areas. Extended delivery across Greater Boston and beyond by request.">
<link rel="canonical" href="https://bostonflowers.com/delivery-areas">
<meta property="og:title" content="Flower Delivery Areas Boston | Boston Flowers">
<meta property="og:description" content="Same-day flower delivery across Boston, Cambridge, Newton and Greater Boston. Extended areas by request. Order by 10:30 AM.">
<meta property="og:image" content="https://bostonflowers.com/og-delivery.jpg">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/delivery-areas">
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
      "paymentAccepted": "Square, PayPal, Venmo, Zelle",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "267 North Beacon St",
        "addressLocality": "Brighton",
        "addressRegion": "MA",
        "postalCode": "02135",
        "addressCountry": "US"
      },
      "geo": {"@type":"GeoCoordinates","latitude":42.3601,"longitude":-71.1531},
      "openingHoursSpecification": [{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"08:00","closes":"20:00"}],
      "image": "https://bostonflowers.com/og-delivery.jpg",
      "logo": "https://bostonflowers.com/logo.png",
      "sameAs": ["https://www.instagram.com/boston.flowers","https://maps.app.goo.gl/nPwTeq92z9QtTUGX7"],
      "areaServed": [
        {"@type":"City","name":"Boston"},{"@type":"City","name":"Cambridge"},
        {"@type":"City","name":"Newton"},{"@type":"City","name":"Brighton"},
        {"@type":"City","name":"Brookline"},{"@type":"City","name":"Somerville"},
        {"@type":"City","name":"Watertown"},{"@type":"City","name":"Dorchester"},
        {"@type":"City","name":"Needham"},{"@type":"City","name":"Burlington"},
        {"@type":"City","name":"Waltham"},{"@type":"City","name":"Quincy"}
      ],
      "makesOffer": [
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Same-Day Flower Delivery","description":"Guaranteed same-day delivery in core Boston when ordered by 10:30 AM."},"priceSpecification":{"@type":"PriceSpecification","minPrice":"20","priceCurrency":"USD"},"availability":"https://schema.org/InStock"},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Greater Boston Flower Delivery","description":"Extended delivery to Needham, Burlington, Waltham, Quincy and nearby."},"priceSpecification":{"@type":"PriceSpecification","minPrice":"35","maxPrice":"40","priceCurrency":"USD"},"availability":"https://schema.org/InStock"},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Long-Distance Flower Delivery","description":"Delivery to Rhode Island, Cape Cod, and other extended areas by request."},"priceSpecification":{"@type":"PriceSpecification","minPrice":"100","priceCurrency":"USD"},"availability":"https://schema.org/InStock"}
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://bostonflowers.com/delivery-areas",
      "url": "https://bostonflowers.com/delivery-areas",
      "name": "Flower Delivery Areas Boston | Boston Flowers",
      "description": "Same-day flower delivery across Boston and Greater Boston. Clear zones and pricing.",
      "inLanguage": "en-US",
      "isPartOf": {"@id":"https://bostonflowers.com/#website"},
      "about": {"@id":"https://bostonflowers.com/#business"},
      "dateModified": "2026-04-16",
      "speakable": {"@type":"SpeakableSpecification","cssSelector":[".hero-h1",".hero-sub",".hero-meta"]}
    },
    {
      "@type": "WebSite",
      "@id": "https://bostonflowers.com/#website",
      "url": "https://bostonflowers.com/",
      "name": "Boston Flowers",
      "publisher": {"@id":"https://bostonflowers.com/#business"},
      "inLanguage": "en-US"
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"Do you deliver to my area?","acceptedAnswer":{"@type":"Answer","text":"If you are in Boston, Cambridge, Brookline, Newton, Watertown, or Somerville — yes, same-day. Extended areas like Needham and Burlington — usually yes. Rhode Island or farther — ask directly."}},
        {"@type":"Question","name":"How much is delivery outside central Boston?","acceptedAnswer":{"@type":"Answer","text":"Core Boston starts at $20. Extended Greater Boston is $35–40. Long-distance routes are quoted individually."}},
        {"@type":"Question","name":"Do you offer same-day delivery outside the city?","acceptedAnswer":{"@type":"Answer","text":"For extended zones it is often possible, but availability depends on timing. Before 10:30 AM you have the best chance."}},
        {"@type":"Question","name":"Can I pick up instead of delivery?","acceptedAnswer":{"@type":"Answer","text":"Yes. Free pickup at 267 North Beacon St, Brighton, MA 02135. Mention pickup when placing the order."}}
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"https://bostonflowers.com/"},
        {"@type":"ListItem","position":2,"name":"Delivery Areas","item":"https://bostonflowers.com/delivery-areas"}
      ]
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/1XXXXXXXXXX?text=Hi%2C+can+you+deliver+to+my+area%3F" class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-word" aria-hidden="true">DELIVER</div>
  <div class="hero-inner">
    <div class="hero-eyebrow r"><div class="hero-line"></div><span class="lbl">Delivery Areas</span></div>
    <h1 class="hero-h1 serif r d1">Flower delivery across<br><em>Boston and beyond.</em></h1>
    <p class="hero-sub r d2">Same-day in Boston and nearby areas. Extended delivery available across Greater Boston and beyond — just ask.</p>
    <div class="hero-actions r d3">
      <a href="#zones" class="btn btn-ghost">Check your area</a>
      <a href="/custom-orders" class="btn-text">Order today →</a>
    </div>
    <p class="hero-meta r d3">Brighton, Boston · Same-day when timing allows · Extended areas by request</p>
  </div>
</section>

<!-- ═ BF SECTION: status-strip ═ -->
<div id="status-strip">
  <div class="status-strip-inner">
    <div class="ss-item"><span class="ss-dot green"></span>Same-day available in Boston &amp; nearby areas</div>
    <div class="ss-item"><span class="ss-dot amber"></span>Orders before 10:30 AM get best availability</div>
    <div class="ss-item"><span class="ss-dot"></span>Farther areas available by request</div>
    <div class="ss-item"><span class="ss-dot"></span>Pickup free at 267 North Beacon St, Brighton</div>
  </div>
</div>

<!-- ═ BF SECTION: zones ═ -->
<section id="zones">
  <div class="container">
    <div class="zones-head r">
      <span class="lbl lbl-dark">Full coverage list</span>
      <h2 class="zones-title serif">Every area we serve.<br><em>Clear zones. Clear pricing.</em></h2>
    </div>

    <div class="zone-grid r d1">
      <article class="zone-card">
        <span class="zone-tag">Core · Same-day</span>
        <h3 class="zone-name serif">Boston &amp; Nearby</h3>
        <div class="zone-price serif">from $20 <span>delivery</span></div>
        <div class="city-list">
          <span class="city-chip">Boston</span><span class="city-chip">Brighton</span><span class="city-chip">Allston</span><span class="city-chip">Back Bay</span><span class="city-chip">Beacon Hill</span><span class="city-chip">South End</span><span class="city-chip">Seaport</span><span class="city-chip">Cambridge</span><span class="city-chip">Brookline</span><span class="city-chip">Somerville</span><span class="city-chip">Watertown</span><span class="city-chip">Newton</span><span class="city-chip">Dorchester</span>
        </div>
      </article>

      <article class="zone-card">
        <span class="zone-tag">Extended · Greater Boston</span>
        <h3 class="zone-name serif">Wider Area</h3>
        <div class="zone-price serif">$35–40 <span>delivery</span></div>
        <div class="city-list">
          <span class="city-chip">Waltham</span><span class="city-chip">Quincy</span><span class="city-chip">Needham</span><span class="city-chip">Burlington</span><span class="city-chip">Lexington</span><span class="city-chip">Winchester</span><span class="city-chip">Milton</span><span class="city-chip">Dedham</span><span class="city-chip">Framingham</span><span class="city-chip">Natick</span><span class="city-chip">Wellesley</span>
        </div>
      </article>

      <article class="zone-card">
        <span class="zone-tag">By request · Extended</span>
        <h3 class="zone-name serif">Long Distance</h3>
        <div class="zone-price serif">from $100–120 <span>delivery</span></div>
        <div class="city-list">
          <span class="city-chip">Providence, RI</span><span class="city-chip">Rhode Island</span><span class="city-chip">Cape Cod</span><span class="city-chip">New Hampshire</span><span class="city-chip">Worcester</span><span class="city-chip">Salem</span><span class="city-chip">Newburyport</span>
        </div>
      </article>
    </div>

    <div class="not-listed r d2">
      <div>
        <div class="nl-title serif">Don’t see your town listed?</div>
        <p class="nl-sub">Ask us anyway. We deliver beyond listed zones by request — just send the address and we’ll confirm options.</p>
      </div>
      <a href="https://wa.me/1XXXXXXXXXX?text=Hi%2C+can+you+deliver+to+my+area%3F" class="nl-btn" target="_blank" rel="noopener">Ask us directly</a>
    </div>
  </div>
</section>

<!-- ═ BF SECTION: timing ═ -->
<section id="timing">
  <div class="container">
    <div class="timing-grid">
      <div class="r">
        <span class="lbl">How it works</span>
        <h2 class="timing-title serif">From order<br>to <em>your door.</em></h2>
        <p class="timing-sub">Understanding timing helps customers plan. Here is the clean delivery flow without noise.</p>
      </div>
      <div class="timing-steps r d1">
        <div class="timing-step"><div class="ts-time serif">0 min</div><div><div class="ts-name">You place the order</div><div class="ts-note">Via WhatsApp, phone, or website. We respond quickly to confirm details.</div></div></div>
        <div class="timing-step"><div class="ts-time serif">1–2 hrs</div><div><div class="ts-name">Arrangement prepared</div><div class="ts-note">If flowers are already in the studio. If sourcing is needed, add 2–3 hours.</div></div></div>
        <div class="timing-step"><div class="ts-time serif">+ 1–2 hrs</div><div><div class="ts-name">Delivery to address</div><div class="ts-note">Direct delivery. No extra routing. You know when it leaves the studio.</div></div></div>
        <div class="timing-step"><div class="ts-time serif">10:30 AM</div><div><div class="ts-name">Same-day guaranteed cutoff</div><div class="ts-note">Orders before 10:30 AM get best availability. After that, we check and confirm manually.</div></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ═ BF SECTION: faq ═ -->
<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div>
        <span class="lbl lbl-dark r">Questions</span>
        <h2 class="faq-title serif r d1">Straight<br><em>answers.</em></h2>
      </div>
      <div class="faq-list r d1">
        <div class="faq-item">
          <div class="faq-q">Do you deliver to my area?<span class="faq-icon">+</span></div>
          <div class="faq-a">If you are in Boston, Cambridge, Brookline, Newton, Watertown, Somerville, or nearby — yes, same-day. For extended areas like Quincy, Needham, or Burlington — usually yes. For Rhode Island or farther areas — ask directly.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">How much is delivery outside central Boston?<span class="faq-icon">+</span></div>
          <div class="faq-a">Core Boston starts at $20. Extended Greater Boston is usually $35–40. Long-distance routes are quoted individually based on address and timing.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Do you offer same-day delivery outside the city?<span class="faq-icon">+</span></div>
          <div class="faq-a">For extended zones it is often possible, but availability depends on timing and inventory. Before 10:30 AM you have the best chance.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Can I pick up instead of delivery?<span class="faq-icon">+</span></div>
          <div class="faq-a">Yes. Pickup is free at 267 North Beacon St, Brighton, MA 02135. Mention pickup when placing the order.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═ BF SECTION: cta ═ -->
<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <h2 class="cta-title serif">Tell us where it needs to go.<br>We’ll handle the rest.</h2>
      <p class="cta-sub">Send the delivery address, preferred time, and bouquet type or budget.</p>
      <p class="cta-send">We need: delivery address · preferred time · bouquet type or budget</p>
      <div class="cta-btns">
        <a href="https://wa.me/19172514669?text=Hi%2C+I'd+like+to+order+flowers+for+delivery." class="btn btn-ivory" target="_blank" rel="noopener">Order via WhatsApp</a>
        <a href="tel:+16178173157" class="btn btn-ghost">Call the Studio</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ BF THEME: FOOTER START ═══
     Boston Flowers custom theme
     WordPress: get_footer() → footer.php
     Contains: footer.footer-animated
     CSS classes: .footer-animated, .ft-grid, .ft-col, .ft-contact, .ft-bottom
═══════════════════════════════════════════════ -->

<script>
const ro=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('on');ro.unobserve(e.target)}})},{threshold:.08,rootMargin:'0px 0px -24px 0px'});
document.querySelectorAll('.r').forEach(el=>ro.observe(el));
setTimeout(()=>document.querySelectorAll('.r:not(.on)').forEach(el=>el.classList.add('on')),1200);

// SCROLL PROGRESS
const prog=document.getElementById('scrollProgress');
if(prog)window.addEventListener('scroll',()=>{prog.style.width=Math.min(scrollY/(document.body.scrollHeight-innerHeight)*100,100)+'%';},{passive:true});

// NAV handled by header-footer.js

const wa=document.getElementById('waFloat');
if(wa)window.addEventListener('scroll',()=>wa.classList.toggle('visible',scrollY>300),{passive:true});

// BURGER handled by header-footer.js

// DATA-TOGGLE handled by header-footer.js

// LANG handled by header-footer.js

document.querySelectorAll('.faq-item').forEach(item=>{
  item.querySelector('.faq-q').addEventListener('click',()=>{
    const open=item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
    if(!open)item.classList.add('open');
  });
});
</script>

<?php get_footer(); ?>
