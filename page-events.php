<?php
/**
 * Template Name: BF Events
 * Boston Flowers — Event Floral Design page
 * Slug: /events
 */

add_action('wp_head', function() { ?>
<title>Event Floral Design Boston | Boston Flowers Studio</title>
<meta name="description" content="Floral design for private dinners, brand launches, celebrations, and VIP events in Boston. Unforgettable atmosphere. Boston Flowers Studio.">
<link rel="canonical" href="https://bostonflowers.com/events">
<meta property="og:title" content="Event Floral Design Boston | Boston Flowers Studio">
<meta property="og:description" content="Floral design for private dinners, brand launches, celebrations, and VIP events in Boston. Unforgettable atmosphere.">
<meta property="og:image" content="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/05/event-floral-lounge-installation-boston-flowers.webp">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/events">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph": [
    {
      "@type":"Florist",
      "name":"Boston Flowers",
      "image":"https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/05/event-floral-lounge-installation-boston-flowers.webp",
      "@id":"https://bostonflowers.com/#florist",
      "url":"https://bostonflowers.com/",
      "telephone":"+16178173157",
      "priceRange":"$$$",
      "address":{"@type":"PostalAddress","streetAddress":"267 North Beacon St","addressLocality":"Brighton","addressRegion":"MA","postalCode":"02135","addressCountry":"US"},
      "geo":{"@type":"GeoCoordinates","latitude":42.3601,"longitude":-71.1531},
      "openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"08:00","closes":"20:00"}],
      "sameAs":["https://www.instagram.com/boston.flowers"],
      "areaServed":["Boston","Brighton","Cambridge","Newton","Watertown","Dorchester","Needham","Burlington"]
    },
    {
      "@type":"Service",
      "serviceType":"Event floral design",
      "provider":{"@id":"https://bostonflowers.com/#florist"},
      "areaServed":["Boston","Brighton","Cambridge","Newton"],
      "description":"Floral design for private dinners, brand launches, celebrations, and VIP events in Boston. Comprehensive room styling and installations."
    },
    {
      "@type":"FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"How far in advance should I book?","acceptedAnswer":{"@type":"Answer","text":"Ideally 2–4 weeks for most events. For large installations or peak season, 4–6 weeks is better."}},
        {"@type":"Question","name":"What is the minimum spend for an event?","acceptedAnswer":{"@type":"Answer","text":"Every event is quoted individually. Small event florals start from $800, full room styling from $1,800."}},
        {"@type":"Question","name":"Do you handle setup and breakdown?","acceptedAnswer":{"@type":"Answer","text":"Yes. On-site installation and breakdown are included."}},
        {"@type":"Question","name":"Can you work from a reference or moodboard?","acceptedAnswer":{"@type":"Answer","text":"Yes. Bring references, Pinterest boards, or just a color palette and a feeling. We translate it into a concrete direction before quoting."}},
        {"@type":"Question","name":"Do you travel outside Boston?","acceptedAnswer":{"@type":"Answer","text":"Yes. We serve Greater Boston and surrounding areas. Contact us with your venue location to confirm."}}
      ]
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669?text=Hi%2C+I%27d+like+to+discuss+event+florals." class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24" width="24" height="24" style="width:24px; height:24px; fill:#fff; display:block;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-left">
    <div class="hero-bf" aria-hidden="true">BF</div>
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Event Floral Design — Boston</span></div>
    <h1 class="hero-h1 serif">Event florals,<br><em>built for the night.</em></h1>
    <p class="hero-sub">For private dinners, celebrations, brand launches, and VIP gatherings — designed to shape the room, not just fill it.</p>
    <p class="hero-micro">No templates. No filler. Built for the moment.</p>
    <div class="hero-bullets">
      <div class="hero-bullet">Private & branded events</div>
      <div class="hero-bullet">Setup on site, breakdown included</div>
      <div class="hero-bullet">Designed for the room</div>
    </div>
    <div class="hero-btns">
      <a href="#contact" class="btn btn-ghost">Request Event Proposal</a>
      <a href="#gallery" class="btn-text">View Event Work →</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-right-inner">
      <div class="hero-photo">
        <?php echo wp_get_attachment_image(364, 'full', false, array(
          'class' => 'hero-photo-img',
          'alt' => 'Pink lounge chair with rose and stock floral installations and candles for a Boston event',
          'title' => 'Event Floral Lounge Installation in Boston',
          'loading' => 'eager',
          'fetchpriority' => 'high',
          'decoding' => 'async',
          'sizes' => '(min-width: 1101px) 45vw, (max-width: 1024px) and (orientation: landscape) 45vw, 0px'
        )); ?>
      </div>
      <span class="hero-ph-lbl">Boston event florals · Lounge installation</span>
    </div>
  </div>
</section>

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>✦</span>Private & branded events</span>
      <span class="marquee-item"><span>✦</span>Setup & breakdown on site</span>
      <span class="marquee-item"><span>✦</span>Designed for the room</span>
      <span class="marquee-item"><span>✦</span>No templates. No filler.</span>
      <span class="marquee-item"><span>✦</span>Greater Boston</span>
      <span class="marquee-item"><span>✦</span>Private & branded events</span>
      <span class="marquee-item"><span>✦</span>Setup & breakdown on site</span>
      <span class="marquee-item"><span>✦</span>Designed for the room</span>
      <span class="marquee-item"><span>✦</span>No templates. No filler.</span>
      <span class="marquee-item"><span>✦</span>Greater Boston</span>
    </div>
  </div>
</section>

<section id="handle">
  <div class="container">
    <div class="handle-hd">
      <p class="lbl lbl-dark r">What we handle</p>
      <h2 class="handle-title serif rc d1">Not just flowers<br><em>on the table.</em></h2>
      <p class="handle-sub r d2">From a single focal installation to full room styling — we remove the floral problem from your plate and handle it properly.</p>
    </div>
    <div class="handle-grid">
      <div class="handle-item r">
        <div class="handle-num">01</div>
        <div class="handle-name serif">Dinner table compositions</div>
        <p class="handle-desc">Centerpieces, runners, table-level florals. Each piece part of one design — coherent, not identical.</p>
      </div>
      <div class="handle-item r d1">
        <div class="handle-num">02</div>
        <div class="handle-name serif">Entry & welcome pieces</div>
        <p class="handle-desc">Entrance florals, columns, arched installations. The first thing guests see — it has to land right.</p>
      </div>
      <div class="handle-item r d2">
        <div class="handle-num">03</div>
        <div class="handle-name serif">Bar & reception florals</div>
        <p class="handle-desc">Compositions for bars, buffets, and high-traffic areas that hold up visually all evening.</p>
      </div>
      <div class="handle-item r d3">
        <div class="handle-num">04</div>
        <div class="handle-name serif">Statement installations</div>
        <p class="handle-desc">One large focal piece that defines the room — launches, VIP receptions, branded photo areas.</p>
      </div>
      <div class="handle-item r d4">
        <div class="handle-num">05</div>
        <div class="handle-name serif">Host & guest gifting</div>
        <p class="handle-desc">Premium arrangements for VIP guests or host gifts. Delivered on-site or direct to recipients.</p>
      </div>
    </div>
  </div>
</section>

<section id="who">
  <div class="container">
    <div class="who-hd">
      <p class="lbl r">Built for</p>
      <h2 class="who-title serif rc d1">Events that need<br><em>to feel right.</em></h2>
    </div>
    <div class="who-grid">
      <div class="who-item r">
        <span class="who-seg">Private dinners</span>
        <div class="who-name serif">Intimate celebrations</div>
        <p class="who-pain">Birthday dinners, anniversaries, proposal evenings. Need the room to feel intentional without looking overdesigned.</p>
      </div>
      <div class="who-item r d1">
        <span class="who-seg">Brand launches</span>
        <div class="who-name serif">Product & PR events</div>
        <p class="who-pain">Need florals that support the visual language of the event — not fight it. On brand, on time, no guesswork.</p>
      </div>
      <div class="who-item r d2">
        <span class="who-seg">VIP receptions</span>
        <div class="who-name serif">Client & executive events</div>
        <p class="who-pain">Everything needs to read premium on arrival. One wrong element breaks the room. We make sure it doesn't.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Restaurant & hospitality</span>
        <div class="who-name serif">Special evenings & closings</div>
        <p class="who-pain">Private dining nights, chef's table events, seasonal closings where the atmosphere needs to feel curated, not routine.</p>
      </div>
      <div class="who-item r d1">
        <span class="who-seg">Showrooms & openings</span>
        <div class="who-name serif">Retail & real estate events</div>
        <p class="who-pain">Opening nights, art shows, property reveals. Florals that elevate the space without competing with what's on display.</p>
      </div>
      <div class="who-item r d2">
        <span class="who-seg">Proposals & surprises</span>
        <div class="who-name serif">Personal moments</div>
        <p class="who-pain">When the setting needs to feel like it was designed for this exact moment. Setup handled. Room ready before you arrive.</p>
      </div>
    </div>
  </div>
</section>

<section id="gallery">
  <div class="gallery-hd">
    <p class="lbl r">Selected work</p>
    <h2 class="gallery-hd-title serif rc d1">Event<br><em>compositions.</em></h2>
    <p class="gallery-sub r d2">Private events, brand setups, table styling, and installations. Real work — no stock.</p>
  </div>
  <div class="gallery-scroll" id="galleryScroll">
    <div class="gallery-item">
      <div class="gallery-item-img gallery-overlay-soft">
        <?php echo wp_get_attachment_image(365, 'full', false, array(
          'alt' => 'large floral entrance arch with roses and greenery for a Boston event by Boston Flowers',
          'title' => 'Event Floral Entrance Arch in Boston',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 420px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Floral entrance arch<br>Roses · Event arrival</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img">
        <?php echo wp_get_attachment_image(366, 'full', false, array(
          'alt' => 'pink and burgundy floral arrangement on a bar with candles for a Boston event',
          'title' => 'Event Bar Floral Composition in Boston',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 320px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Bar florals<br>Pink roses · Candlelight</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img">
        <?php echo wp_get_attachment_image(367, 'full', false, array(
          'alt' => 'soft pastel floral centerpiece with candles and glassware on an event table by Boston Flowers',
          'title' => 'Candlelit Event Tablescape in Boston',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 540px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Candlelit tablescape<br>Pastel florals · Glassware</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img gallery-overlay-soft">
        <?php echo wp_get_attachment_image(368, 'full', false, array(
          'alt' => 'light floral installation on white pedestals with candles for a private Boston event',
          'title' => 'Event Pedestal Floral Installation in Boston',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 360px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Pedestal installation<br>Light florals · Candles</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img gallery-overlay-soft">
        <?php echo wp_get_attachment_image(369, 'full', false, array(
          'alt' => 'romantic dinner table with pale roses, candles, wine glasses, and waterfront view',
          'title' => 'Romantic Waterfront Dinner Florals in Boston',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 440px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Romantic dinner<br>Waterfront · Pale roses</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img">
        <?php echo wp_get_attachment_image(370, 'full', false, array(
          'alt' => 'long dinner table with burgundy taper candles and floral runner for a Boston event',
          'title' => 'Long Event Table Floral Runner in Boston',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 300px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Long event table<br>Floral runner · Burgundy candles</div>
    </div>
  </div>
  <div class="gallery-counter">
    <span class="gallery-counter-lbl" id="galleryLbl">1 / 6</span>
    <div class="gallery-dots" id="galleryDots">
      <div class="gallery-dot active"></div>
      <div class="gallery-dot"></div>
      <div class="gallery-dot"></div>
      <div class="gallery-dot"></div>
      <div class="gallery-dot"></div>
      <div class="gallery-dot"></div>
    </div>
  </div>
</section>

<section id="ways">
  <div class="container">
    <div class="ways-hd">
      <p class="lbl lbl-dark r">Ways to work with us</p>
      <h2 class="ways-title serif rc d1">Three formats.<br><em>One standard.</em></h2>
    </div>
    <div class="ways-grid r d1">
      <div class="ways-item">
        <span class="ways-tag">Private event</span>
        <div class="ways-name serif">Celebration & personal</div>
        <p class="ways-desc">Birthday dinners, anniversaries, proposal setups, intimate gatherings. Designed for the occasion, not assembled from a catalog.</p>
        <div class="ways-detail">Best for — dinners, birthdays, proposals, family gatherings</div>
      </div>
      <div class="ways-item">
        <span class="ways-tag">Brand & hosted event</span>
        <div class="ways-name serif">Launch & corporate</div>
        <p class="ways-desc">Product launches, client dinners, PR events, showroom openings. On-brand, on time, setup handled directly with your team.</p>
        <div class="ways-detail">Best for — launches, client events, brand moments</div>
      </div>
      <div class="ways-item">
        <span class="ways-tag">Statement setup</span>
        <div class="ways-name serif">Single focal installation</div>
        <p class="ways-desc">One piece that defines the room. An arch, a monumental arrangement, a table that becomes the visual anchor of the evening.</p>
        <div class="ways-detail">Best for — receptions, art shows, VIP settings</div>
      </div>
    </div>
  </div>
</section>

<section id="investment">
  <div class="container">
    <div class="inv-grid">
      <div>
        <p class="lbl r">Investment</p>
        <h2 class="inv-title serif r d1">Quoted by<br><em>scope and scale.</em></h2>
        <p class="inv-sub r d2">Every event is different. Flowers, format, setup complexity, and timeline all affect the price. The ranges below are starting points — not packages.</p>
      </div>
      <div class="r d1">
        <div class="inv-tiers">
          <div class="inv-tier">
            <div>
              <div class="inv-tier-name serif">Small event florals</div>
              <div class="inv-tier-desc">1–3 table pieces, intimate setting</div>
            </div>
            <div class="inv-tier-price">from $800</div>
          </div>
          <div class="inv-tier">
            <div>
              <div class="inv-tier-name serif">Full room styling</div>
              <div class="inv-tier-desc">Tables, entry, bar — cohesive design</div>
            </div>
            <div class="inv-tier-price">from $1,800</div>
          </div>
          <div class="inv-tier">
            <div>
              <div class="inv-tier-name serif">Statement installation</div>
              <div class="inv-tier-desc">Single large focal piece, on-site build</div>
            </div>
            <div class="inv-tier-price">from $3,500</div>
          </div>
        </div>
        <p class="inv-note r d2">Final pricing depends on flowers, scale, and setup. We quote individually after a short conversation — a message with your date and rough format is enough.</p>
        <div class="inv-limit r d3">
          <span class="inv-limit-label">What we don't do</span>
          <p class="inv-limit-text">No bulk decor, generic centerpieces, or last-minute event florals without advance notice.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="statement">
  <div class="stmt-photo r">
    <?php
    echo wp_get_attachment_image(371, 'full', false, [
      'class' => 'stmt-photo-img',
      'alt' => 'Candlelit rooftop dinner table with red and blush floral arrangements overlooking the Boston skyline',
      'title' => 'Rooftop Dinner Event Florals in Boston',
      'loading' => 'lazy',
      'decoding' => 'async',
      'sizes' => '100vw',
    ]);
    ?>
    <p class="stmt-photo-caption">Candlelit rooftop event florals overlooking the Boston skyline.</p>
  </div>
  <div class="container">
    <div class="stmt-text r d1">
      <h2>Unforgettable atmosphere.<br><em>An evening, remembered.</em></h2>
      <span class="statement-line" aria-hidden="true"></span>
    </div>
  </div>
</section>

<section id="process">
  <div class="container">
    <div class="process-hd">
      <p class="lbl lbl-dark r">Process</p>
      <h2 class="process-title serif rc d1">Four steps.<br><em>Room ready.</em></h2>
    </div>
    <div class="process-steps r d1">
      <div class="process-step">
        <div class="process-step-num">01</div>
        <div class="process-step-name serif">Inquiry</div>
        <p class="process-step-note">Tell us the date, venue, format, and what the room needs to feel like. We respond within a few hours.</p>
        <span class="process-step-tag">Same day</span>
      </div>
      <div class="process-step accent">
        <div class="process-step-num">02</div>
        <div class="process-step-name serif">Concept & quote</div>
        <p class="process-step-note">We prepare a direction and pricing based on your input. You approve before we source anything.</p>
        <span class="process-step-tag">1–2 days</span>
      </div>
      <div class="process-step">
        <div class="process-step-num">03</div>
        <div class="process-step-name serif">Preparation</div>
        <p class="process-step-note">We source, design, and prepare. You get a preview before the event if needed. No surprises on the day.</p>
        <span class="process-step-tag">Before event</span>
      </div>
      <div class="process-step accent">
        <div class="process-step-num">04</div>
        <div class="process-step-name serif">Setup & breakdown</div>
        <p class="process-step-note">We arrive before your guests, set up on site, and handle breakdown. Your team handles nothing.</p>
        <span class="process-step-tag">Day of event</span>
      </div>
    </div>
  </div>
</section>

<section id="why">
  <div class="container">
    <div class="why-grid">
      <div>
        <p class="lbl r">Why this studio</p>
        <h2 class="why-title serif rc d1">Built for<br><em>execution.</em></h2>
        <p class="why-sub r d2">Design is the easy part. The hard part is showing up on time, setting up correctly, and leaving a room that looks like it was always supposed to look that way.</p>
      </div>
      <div class="why-points r d1">
        <div class="why-point">
          <div class="why-dot"></div>
          <div class="why-text"><strong>Room-scale thinking</strong>We design for the whole space — not just what looks good in a photo. Scale, visual weight, sightlines.</div>
        </div>
        <div class="why-point">
          <div class="why-dot"></div>
          <div class="why-text"><strong>No templates reused</strong>Each event is a separate design problem. Different format, different palette, different room. We start from scratch every time.</div>
        </div>
        <div class="why-point">
          <div class="why-dot"></div>
          <div class="why-text"><strong>Setup handled. Nothing left to you.</strong>We arrive before guests, install, and manage breakdown. Your team coordinates nothing on the day.</div>
        </div>
        <div class="why-point">
          <div class="why-dot"></div>
          <div class="why-text"><strong>One contact, start to finish</strong>No chain. No coordinator. You talk to the same person from the first message through breakdown.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div>
        <p class="lbl r" style="margin-bottom:0">Questions</p>
        <h2 class="faq-title serif r d1">Straight<br><em>answers.</em></h2>
        <p class="faq-intro r d2">If yours isn't here, ask directly. We'll answer without the usual back-and-forth.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="r d3">
          <a href="https://wa.me/19172514669" class="btn btn-ghost" style="padding:12px 24px;">WhatsApp</a>
          <a href="tel:+16178173157" class="btn-text">Call →</a>
        </div>
      </div>
      <div class="r d1">
        <div class="faq-list">
          <div class="faq-item"><div class="faq-q">How far in advance should I book?<span class="faq-icon">+</span></div><div class="faq-a">Ideally 2–4 weeks for most events. For large installations or peak season, 4–6 weeks is better. Shorter timelines are sometimes possible — contact us and we'll tell you immediately what's feasible.</div></div>
          <div class="faq-item"><div class="faq-q">What is the minimum spend for an event?<span class="faq-icon">+</span></div><div class="faq-a">Every event is quoted individually after a brief conversation. There is no fixed minimum — but we'll be upfront if the scope isn't a fit. A short message with your date, format, and rough scale is enough to get a quick read.</div></div>
          <div class="faq-item"><div class="faq-q">Do you handle setup and breakdown?<span class="faq-icon">+</span></div><div class="faq-a">Yes. On-site installation and breakdown are included. We coordinate directly with your venue — your team doesn't need to manage us on the day.</div></div>
          <div class="faq-item"><div class="faq-q">Can you work from a reference or moodboard?<span class="faq-icon">+</span></div><div class="faq-a">Yes — and it helps. Bring references, Pinterest boards, or just a color palette and a feeling. We translate it into a concrete direction before we quote anything.</div></div>
          <div class="faq-item"><div class="faq-q">Do you travel outside Boston?<span class="faq-icon">+</span></div><div class="faq-a">Yes. We serve Greater Boston and surrounding areas. For venues further out, we discuss travel logistics upfront. Contact us with your location and we'll confirm.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="contact-grid">
      <div>
        <p class="lbl lbl-dark r">Get proposal</p>
        <h2 class="contact-h2 serif rc d1">Tell us about<br><em>your event.</em></h2>
        <p class="contact-p r d2">We'll come back within a few hours with a clear sense of direction, scope, and next steps. A short message is enough to start.</p>
        <div class="contact-note r d3">Every event starts with a conversation,<br>not a quote sheet.</div>
      </div>
      <div class="r d1">
        <form class="bf-form c-form" data-intent="event" method="post" action="/api/lead" novalidate>
          <input type="hidden" name="source" value="events.html">
          <input type="hidden" name="intent" value="event">
          <input type="text" name="_h" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px">
          
          <div class="c-row">
            <div class="c-field">
              <label for="c-name">Your name</label>
              <input type="text" id="c-name" name="name" placeholder="Alex" required>
            </div>
            <div class="c-field">
              <label for="c-date">Event date</label>
              <input type="text" id="c-date" name="date" placeholder="May 20, 2026">
            </div>
          </div>
          <div class="c-field">
            <label for="c-type">Event type</label>
            <select id="c-type" name="type">
              <option value="" disabled selected>Select</option>
              <option value="private">Private dinner or celebration</option>
              <option value="birthday">Birthday or anniversary</option>
              <option value="launch">Brand launch or PR event</option>
              <option value="vip">VIP reception or client event</option>
              <option value="proposal">Proposal setup</option>
              <option value="other">Other / not sure yet</option>
            </select>
          </div>
          <div class="c-field">
            <label for="c-budget">Budget range</label>
            <select id="c-budget" name="budget">
              <option value="" disabled selected>Select</option>
              <option value="small">Under $500</option>
              <option value="mid">$500 – $1,500</option>
              <option value="full">$1,500 – $3,000</option>
              <option value="large">$3,000+</option>
            </select>
          </div>
          <div class="c-field">
            <label for="c-phone">Phone or Email</label>
            <input type="text" id="c-phone" name="contact" placeholder="To reach you back" required>
          </div>
          <div class="c-submit">
            <button type="submit" class="btn btn-wine-solid">Request Proposal</button>
          </div>
          <p class="c-legal">We respond within a few hours. No spam, no templates.</p>
        </form>
        <div class="form-success">We got it. We will review your details and reply shortly.</div>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eye">One evening. One design.</p>
      <h2 class="cta-title">Let's shape<br>your event.</h2>
      <div class="cta-btns" style="margin-top:36px;">
        <a href="#contact" class="btn btn-ivory">Request Event Proposal</a>
        <a href="https://wa.me/19172514669?text=Hi%2C+I%27d+like+to+discuss+event+florals." class="btn btn-outline-ivory">WhatsApp directly</a>
      </div>
      <p class="cta-note">Boston Flowers · 267 North Beacon St, Brighton · Greater Boston</p>
    </div>
  </div>
</section>




<script>
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',()=>{prog.style.width=Math.min(window.scrollY/(document.body.scrollHeight-window.innerHeight)*100,100)+'%';},{passive:true});

const ro=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('on');ro.unobserve(e.target);}});},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r,.rc').forEach(el=>ro.observe(el));

document.querySelectorAll('.r-grid').forEach(grid=>{
  const io=new IntersectionObserver(entries=>{
    entries.forEach(e=>{if(e.isIntersecting){e.target.querySelectorAll(':scope > *').forEach((child,i)=>{child.style.transitionDelay=(i*.08)+'s';child.classList.add('on');});io.unobserve(e.target);}});
  },{threshold:.15});
  io.observe(grid);
});

const line=document.querySelector('.statement-line');
if(line){
  const lineIo=new IntersectionObserver(e=>{if(e[0].isIntersecting){line.classList.add('on');lineIo.disconnect();}});
  lineIo.observe(line);
}

// NAV, BURGER, LANG handled by header-footer.js
window.addEventListener('scroll',()=>{document.getElementById('waFloat').classList.toggle('visible',scrollY>400);},{passive:true});

const gs=document.getElementById('galleryScroll');
if(gs){
  const dots=document.querySelectorAll('.gallery-dot');
  let isDown=false,startX,scrollLeft;
  gs.addEventListener('mousedown',e=>{isDown=true;gs.classList.add('grabbing');startX=e.pageX-gs.offsetLeft;scrollLeft=gs.scrollLeft;});
  gs.addEventListener('mouseleave',()=>{isDown=false;gs.classList.remove('grabbing');});
  gs.addEventListener('mouseup',()=>{isDown=false;gs.classList.remove('grabbing');});
  gs.addEventListener('mousemove',e=>{if(!isDown)return;e.preventDefault();const x=e.pageX-gs.offsetLeft;const walk=(x-startX)*1.5;gs.scrollLeft=scrollLeft-walk;});
  gs.addEventListener('scroll',()=>{
    const items=gs.querySelectorAll('.gallery-item');
    if(items.length>0&&dots.length>0){
      const scrollRatio=gs.scrollLeft/(gs.scrollWidth-gs.clientWidth);
      const active=Math.round(scrollRatio*(items.length-1));
      dots.forEach((d,i)=>d.classList.toggle('active',i===active));
    }
  },{passive:true});
}

document.querySelectorAll('.faq-item').forEach(item=>{
  item.querySelector('.faq-q').addEventListener('click',()=>{
    const isOpen=item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
    if(!isOpen)item.classList.add('open');
  });
});

document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const target=document.querySelector(a.getAttribute('href'));
    if(target){e.preventDefault();target.scrollIntoView({behavior:'smooth',block:'start'});}
  });
});

const bfForm=document.querySelector('.c-form');
const bfSuccess=document.querySelector('.form-success');
if(bfForm){
  bfForm.addEventListener('submit',e=>{e.preventDefault();bfForm.style.display='none';bfSuccess.classList.add('active');});
}

(function(){const count=0;const badge=document.getElementById('cartCount');const mBadge=document.getElementById('mCartCount');if(count>0){if(badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items');}if(mBadge){mBadge.textContent=count;mBadge.style.display='flex';}}})();
</script>

<?php get_footer(); ?>
