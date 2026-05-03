<?php
/**
 * Template Name: BF Wedding
 * Boston Flowers — Wedding Floral Design page
 * Slug: /wedding
 * 
 * Инструкция:
 * 1. Поместить файл в: wp-content/themes/YOUR_THEME/page-wedding.php
 * 2. В WP Admin: Pages → Add New → Title: "Wedding" → Slug: wedding
 *    → Page Template: "BF Wedding" → Publish
 * 3. Убедиться что header.php и footer.php темы подключены
 */

// ══ SEO + PAGE-SPECIFIC STYLES ══
add_action('wp_head', function() { ?>
<title><?php echo esc_html('Wedding Floral Design Boston | Boston Flowers Studio'); ?></title>
<meta name="description" content="<?php echo esc_attr('Wedding florals that hold the room. Boston Flowers designs a limited number of custom weddings each year. Floral design for ceremonies and full venue transformations.'); ?>">
<link rel="canonical" href="https://bostonflowers.com/wedding">
<meta property="og:title" content="Wedding Floral Design Boston | Boston Flowers Studio">
<meta property="og:description" content="Wedding florals that hold the room. Boston Flowers designs a limited number of custom weddings each year.">
<meta property="og:image" content="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-bouquet-full.webp">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/wedding">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph": [
    {
      "@type":"Florist",
      "name":"Boston Flowers",
      "image":"https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-bouquet-full.webp",
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
      "serviceType":"Wedding floral design",
      "provider":{"@id":"https://bostonflowers.com/#florist"},
      "areaServed":["Boston","Brighton","Cambridge","Newton"],
      "description":"Custom floral design for wedding ceremonies, receptions, and full venue transformations."
    },
    {
      "@type":"FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"What is the minimum budget?","acceptedAnswer":{"@type":"Answer","text":"Wedding florals start from $800 for intimate ceremonies. Full wedding design starts from $2,500."}},
        {"@type":"Question","name":"How far in advance should I book?","acceptedAnswer":{"@type":"Answer","text":"We recommend 6–8 weeks minimum. For peak season (May–September) — 3–4 months is better."}}
      ]
    }
  ]
}
</script>
<style>@media (min-width: 1024px) { #hero .hero-left, #hero .hero-right { flex: 0 0 50% !important; } } @media (max-width: 1023px) { #hero .hero-right { display: none; } }</style>
<?php }, 5);

get_header(); ?>

<?php // ══ WA FLOAT + SCROLL PROGRESS ══ ?>
<a href="https://wa.me/19172514669?text=Hi%2C+I%27d+like+to+discuss+wedding+florals." class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24" width="24" height="24" style="width:24px; height:24px; fill:#fff; display:block;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<?php // ══ PAGE CONTENT ══ ?>
<section id="hero">
  <div class="hero-left">
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Wedding Floral Design — Boston</span></div>
    <h1 class="hero-h1 serif">Wedding florals that<br><em>hold the room.</em></h1>
    <p class="hero-sub">A limited number of custom weddings each year.<br>Each one designed from scratch.</p>
    <p class="hero-micro">No templates. No repeats.</p>
    <div class="hero-btns">
      <a href="#inquiry" class="btn btn-ghost">Request Proposal</a>
      <a href="#gallery" class="btn-text">View Work →</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-right-inner">
      <div class="hero-photo" >
        <div class="hero-photo-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-bouquet-full.webp'); background-size: cover !important; opacity: 1 !important;"></div>
      </div>
      <span class="hero-ph-lbl">Bespoke bridal floral arrangement by Boston Flowers studio</span>
    </div>
  </div>
</section>

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>✦</span>Custom-designed weddings only</span>
      <span class="marquee-item"><span>✦</span>Limited bookings per month</span>
      <span class="marquee-item"><span>✦</span>Boston & surrounding areas</span>
      <span class="marquee-item"><span>✦</span>Setup & on-site installation</span>
      <span class="marquee-item"><span>✦</span>No templates. No repeats.</span>
      <span class="marquee-item"><span>✦</span>Custom-designed weddings only</span>
      <span class="marquee-item"><span>✦</span>Limited bookings per month</span>
      <span class="marquee-item"><span>✦</span>Boston & surrounding areas</span>
      <span class="marquee-item"><span>✦</span>Setup & on-site installation</span>
      <span class="marquee-item"><span>✦</span>No templates. No repeats.</span>
    </div>
  </div>
  <div class="marquee-track" style="border-top:1px solid var(--bd)">
    <div class="marquee-inner rev">
      <span class="marquee-item"><span>✦</span>Design-first approach</span>
      <span class="marquee-item"><span>✦</span>Direct client collaboration</span>
      <span class="marquee-item"><span>✦</span>Premium seasonal sourcing</span>
      <span class="marquee-item"><span>✦</span>Boutique studio — Brighton, Boston</span>
      <span class="marquee-item"><span>✦</span>Each project built from scratch</span>
      <span class="marquee-item"><span>✦</span>Design-first approach</span>
      <span class="marquee-item"><span>✦</span>Direct client collaboration</span>
      <span class="marquee-item"><span>✦</span>Premium seasonal sourcing</span>
      <span class="marquee-item"><span>✦</span>Boutique studio — Brighton, Boston</span>
      <span class="marquee-item"><span>✦</span>Each project built from scratch</span>
    </div>
  </div>
</section>

<section id="inquiry">
  <div class="container">
    <div class="inquiry-grid">
      <div class="inquiry-left">
        <p class="lbl lbl-dark">Start here</p>
        <h2 class="inquiry-left"><em>Let’s design<br>your wedding.</em></h2>
        <p>We design a limited number of weddings each year.<br>Each one starts with a conversation — not a quote sheet.</p>
        <div class="inquiry-note">
          Every project starts with a conversation,<br>not a quote sheet.
        </div>
      </div>
      <div>
        <form class="bf-form inquiry-form" data-intent="wedding" method="post" action="/api/lead" novalidate>
          <input type="hidden" name="source" value="wedding.html">
          <input type="hidden" name="intent" value="wedding">
          <input type="text" name="_h" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px">
          
          <div class="form-row">
            <div class="form-field">
              <label>Your name</label>
              <input type="text" name="name" placeholder="Sarah" required>
            </div>
            <div class="form-field">
              <label>Wedding date</label>
              <input type="text" name="date" placeholder="June 14, 2026">
            </div>
          </div>
          <div class="form-row">
            <div class="form-field">
              <label>Venue</label>
              <input type="text" name="venue" placeholder="The Liberty Hotel, Boston">
            </div>
            <div class="form-field">
              <label>Phone or Email</label>
              <input type="text" name="contact" placeholder="To reach you back" required>
            </div>
          </div>
          <div class="form-field full-w">
            <label>What you have in mind</label>
            <textarea name="message" placeholder="Style, flowers, guest count, budget range, anything that matters to you..."></textarea>
          </div>
          <div class="form-submit-row">
            <button type="submit" class="btn btn-wine-solid">Request Proposal</button>
          </div>
          <p class="form-legal">We respond within 24 hours. No spam, no templates.</p>
        </form>
        <div class="form-success">We got it. We will review your details and reply shortly.</div>
      </div>
    </div>
  </div>
</section>

<section id="what">
  <div class="container r-grid">
    <div class="what-hd">
      <p class="lbl r">What we design</p>
      <h2 class="what-title serif rc d1">Each wedding<br><em>is a one-time composition.</em></h2>
    </div>
    <div class="what-grid">
      <div class="what-item r">
        <div class="what-num">01</div>
        <div class="what-name serif">Bridal compositions</div>
        <p class="what-desc">The bouquet, the details, the accessories. Designed as a whole — not assembled from a catalog.</p>
        <div class="what-img" style="margin-top:var(--space-m); aspect-ratio:9/7; overflow:hidden;">
          <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/luxury-bridal-bouquet-composition-boston-flowers.webp" 
               alt="Exquisite bridal bouquet with a mix of premium white roses and textured greenery, meticulously composed by Boston Flowers wedding artisans." 
               title="Signature Bridal Composition | Boston Flowers Custom Wedding" 
               loading="lazy" 
               style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
        </div>
      </div>
      <div class="what-item r">
        <div class="what-num">02</div>
        <div class="what-name serif">Ceremony structures</div>
        <p class="what-desc">Arches, altars, aisle arrangements — designed for the space, not copied from a template.</p>
        <div class="what-img" style="margin-top:var(--space-m); aspect-ratio:9/7; overflow:hidden;">
          <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/bespoke-wedding-ceremony-floral-structures-boston-flowers.webp" 
               alt="Lush wedding ceremony floral arch with premium white roses and architectural greenery, custom-designed for a Boston venue by Boston Flowers." 
               title="Bespoke Wedding Ceremony Floral Structures & Altars | Boston Flowers Studio 2026" 
               loading="lazy" 
               style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
        </div>
      </div>
      <div class="what-item r">
        <div class="what-num">03</div>
        <div class="what-name serif">Reception tables</div>
        <p class="what-desc">Centerpieces, runners, table compositions. Every table part of one design — none of them identical.</p>
        <div class="what-img" style="margin-top:var(--space-m); aspect-ratio:9/7; overflow:hidden;">
          <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/bespoke-wedding-reception-table-decor-boston.webp" 
               alt="Close-up of a beautifully set wedding reception table with elegant floral centerpieces, crystal glassware, and artistic table runners, designed by Boston Flowers." 
               title="Bespoke Reception Table Compositions | Boston Flowers Wedding 2026" 
               loading="lazy" 
               style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
        </div>
      </div>
      <div class="what-item r">
        <div class="what-num">04</div>
        <div class="what-name serif">Full venue installations</div>
        <p class="what-desc">When the whole venue needs to feel designed, not just decorated. We handle everything from entrance to exit.</p>
        <div class="what-img" style="margin-top:var(--space-m); aspect-ratio:9/7; overflow:hidden;">
          <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/luxury-full-venue-floral-installations-boston-flowers.webp" 
               alt="Comprehensive wedding venue transformation with large-scale floral installations, hanging flowers, and cohesive design elements by Boston Flowers." 
               title="Luxury Full Venue Floral Installations & Atmosphere | Boston Flowers 2026" 
               loading="lazy" 
               style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="gallery">
  <div class="gallery-hd">
    <p class="lbl r">Studio work</p>
    <h2 class="gallery-title serif rc d1">Selected<br><em>compositions.</em></h2>
    <p class="gallery-sub r d2">Wedding bookings open. Real work — no stock.</p>
  </div>
  <div class="gallery-scroll" id="galleryScroll">
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-bridal-bouquet-white-roses.webp');" alt="Close-up of a classic bridal bouquet featuring premium white roses and delicate textures by Boston Flowers" title="Classic White Rose Bridal Bouquet Boston"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-reception-v3.webp'); " alt="Close-up of a vibrant wedding reception floral centerpiece with roses and seasonal textures by Boston Flowers" title="Lush Wedding Reception Table Centerpiece Boston"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-ceremony-floral-arch.webp');" alt="Magnificent wedding ceremony floral arch with lush white and pastel flowers by Boston Flowers" title="Grand Wedding Floral Arch Ceremony Boston"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-floral-detail-petals.webp');" alt="Close-up of delicate floral petals and intricate textures in a studio setting by Boston Flowers" title="Delicate Wedding Floral Detail Petals Boston"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-venue-v3.webp'); background-position: center 25%;" alt="Comprehensive wedding venue floral transformation including arches, centerpieces, and atmospheric arrangements by Boston Flowers" title="Grand Wedding Venue Floral Installation Boston"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-bridal-getting-ready.webp');" alt="Emotional moment of bridal preparation with floral details on the wedding morning by Boston Flowers" title="Bridal Preparation Wedding Morning Boston"></div>
    </div>
  </div>
  <div class="gallery-counter">
    <span class="gallery-counter-lbl">Scroll to explore</span>
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

<section id="investment">
  <div class="container">
    <div class="inv-grid">
      <div>
        <p class="lbl lbl-dark r">Investment</p>
        <h2 class="inv-title rc d1"><em>Designed,<br>not assembled.</em></h2>
        <p class="inv-sub r d2">Every project is quoted individually after consultation. These are starting points, not packages.</p>
      </div>
      <div class="r d1">
        <div class="inv-tiers">
          <div class="inv-tier">
            <div class="inv-tier-left">
              <div class="inv-tier-name serif">Intimate ceremony</div>
              <div class="inv-tier-desc">Small weddings · Focused floral design</div>
            </div>
            <div class="inv-tier-price">from $800</div>
          </div>
          <div class="inv-tier">
            <div class="inv-tier-left">
              <div class="inv-tier-name serif">Full wedding design</div>
              <div class="inv-tier-desc">Bridal + ceremony + reception</div>
            </div>
            <div class="inv-tier-price">from $2,500</div>
          </div>
          <div class="inv-tier">
            <div class="inv-tier-left">
              <div class="inv-tier-name serif">Venue transformation</div>
              <div class="inv-tier-desc">Full installation · Art direction</div>
            </div>
            <div class="inv-tier-price">from $5,000</div>
          </div>
        </div>
        <p class="inv-note r d2">Each project is quoted individually after a consultation. Pricing depends on scale, flowers, and installation requirements.</p>
      </div>
    </div>
  </div>
</section>

<section id="process">
  <div class="container r-grid">
    <div class="process-hd">
      <p class="lbl r">Process</p>
      <h2 class="process-title serif rc d1">How we<br><em>work together.</em></h2>
    </div>
    <div class="process-steps">
      <div class="process-step r">
        <div class="step-num">01</div>
        <div class="step-name serif">Inquiry</div>
        <p class="step-note">You tell us the date, venue, and vision. We respond within 24 hours.</p>
      </div>
      <div class="process-step r">
        <div class="step-num">02</div>
        <div class="step-name serif">Concept</div>
        <p class="step-note">We prepare a visual direction and moodboard based on your input.</p>
      </div>
      <div class="process-step accent r">
        <div class="step-num">03</div>
        <div class="step-name serif">Proposal</div>
        <p class="step-note">Full scope, flowers, and pricing. You approve before we start anything.</p>
      </div>
      <div class="process-step r">
        <div class="step-num">04</div>
        <div class="step-name serif">Production</div>
        <p class="step-note">We source and design. You see progress updates before the wedding day.</p>
      </div>
      <div class="process-step accent r">
        <div class="step-num">05</div>
        <div class="step-name serif">Installation</div>
        <p class="step-note">We set up on-site. Breakdown included. You focus on the day itself.</p>
      </div>
    </div>
  </div>
</section>

<section id="why">
  <div class="container">
    <div class="why-grid">
      <div>
        <p class="lbl lbl-dark r">Why this studio</p>
        <h2 class="why-title rc d1">A position,<br><em>not a promise.</em></h2>
        <div class="why-points r-grid">
          <div class="why-point r">
            <div class="why-point-num">01</div>
            <div class="why-point-text"><strong>Design-first approach</strong>We start with shape, scale, and composition — not a flower list. The catalog comes last.</div>
          </div>
          <div class="why-point r">
            <div class="why-point-num">02</div>
            <div class="why-point-text"><strong>Each project built from scratch</strong>No templates we reuse. Every wedding is a separate design problem with its own answer.</div>
          </div>
          <div class="why-point r">
            <div class="why-point-num">03</div>
            <div class="why-point-text"><strong>Boutique studio — no filler work</strong>We take a limited number of weddings each month. Every client gets direct attention, not a coordinator.</div>
          </div>
          <div class="why-point r">
            <div class="why-point-num">04</div>
            <div class="why-point-text"><strong>Premium seasonal sourcing</strong>We source for the composition, not from leftover inventory. What’s available shapes the design — never the other way around.</div>
          </div>
        </div>
      </div>
      <div class="why-photo r d1">
        <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-v2.webp" alt="Behind the scenes at Boston Flowers studio showcasing premium seasonal floral sourcing and meticulous design process" title="Boston Flowers Studio Workspace and Floral Design Process" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;">
      </div>
    </div>
  </div>
</section>

<section id="availability">
  <div class="container">
    <div class="avail-inner">
      <div class="avail-left">
        <div class="avail-eyebrow r">Availability</div>
        <h2 class="avail-title serif rc d1">We accept<br><em>limited weddings</em><br>each month.</h2>
        <div class="avail-dates r d2">
          <div class="avail-date-row">
            <div class="avail-dot"></div>
            <div class="avail-date-txt"><strong>June 2026</strong> — 2 dates available</div>
          </div>
          <div class="avail-date-row">
            <div class="avail-dot"></div>
            <div class="avail-date-txt"><strong>July 2026</strong> — 3 dates available</div>
          </div>
          <div class="avail-date-row">
            <div class="avail-dot amber"></div>
            <div class="avail-date-txt"><strong>August 2026</strong> — 1 date remaining</div>
          </div>
        </div>
        <p class="avail-note r d3">Updated monthly · Book at least 6–8 weeks in advance</p>
      </div>
      <div class="r d2">
        <a href="#inquiry" class="btn btn-ghost">Check availability →</a>
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div>
        <div class="statement-line r"></div>
        <p class="lbl lbl-dark r" style="margin-bottom:0">Questions</p>
        <h2 class="faq-title serif rc d1">Straight<br><em>answers.</em></h2>
        <p class="faq-intro r d2">If yours isn’t here, ask directly.<br>We’ll answer without the usual back-and-forth.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="r d3">
          <a href="https://wa.me/19172514669" class="btn btn-wine-solid">WhatsApp</a>
          <a href="tel:+16178173157" class="btn-text dark">Call →</a>
        </div>
      </div>
      <div class="r d1">
        <div class="faq-list">
          <div class="faq-item"><div class="faq-q">What is the minimum budget?<span class="faq-icon">+</span></div><div class="faq-a">Wedding florals start from $800 for intimate ceremonies. Full wedding design starts from $2,500. Everything is quoted individually after a consultation.</div></div>
          <div class="faq-item"><div class="faq-q">How far in advance should I book?<span class="faq-icon">+</span></div><div class="faq-a">We recommend 6–8 weeks minimum. For peak season (May–September) — 3–4 months is better. We take limited bookings per month, so earlier is always safer.</div></div>
          <div class="faq-item"><div class="faq-q">Do you travel outside Boston?<span class="faq-icon">+</span></div><div class="faq-a">Yes. We serve Greater Boston, surrounding areas, and can travel for the right project. Contact us with your venue location and we’ll confirm availability.</div></div>
          <div class="faq-item"><div class="faq-q">Can I request specific flowers?<span class="faq-icon">+</span></div><div class="faq-a">Yes. We work with your preferences and source accordingly. Seasonal availability affects specific varieties, but we’ll always tell you upfront and suggest alternatives.</div></div>
          <div class="faq-item"><div class="faq-q">Do you handle setup and breakdown?<span class="faq-icon">+</span></div><div class="faq-a">Yes. On-site installation and breakdown are included. We coordinate directly with your venue.</div></div>
          <div class="faq-item"><div class="faq-q">Do you work from a moodboard?<span class="faq-icon">+</span></div><div class="faq-a">Yes — and we create one as part of the process. Bring references, Pinterest boards, or just a feeling. We translate it into a concrete design proposal.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eye">One date. One design.</p>
      <h2 class="cta-title">Let’s design<br>your wedding.</h2>
      <p class="cta-sub">Tell us the date, venue, and what you have in mind.<br>We’ll take it from there.</p>
      <div class="cta-btns">
        <a href="#inquiry" class="btn btn-ivory">Request Proposal</a>
        <a href="https://wa.me/19172514669?text=Hi%2C+I%27d+like+to+discuss+wedding+florals." class="btn btn-outline-ivory">WhatsApp directly</a>
      </div>
      <p class="cta-note">Limited availability · Boston Flowers · 267 North Beacon St, Brighton</p>
    </div>
  </div>
</section>


<?php // ══ PAGE SCRIPTS ══ ?>
<script>
// SCROLL PROGRESS
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',()=>{prog.style.width=Math.min(window.scrollY/(document.body.scrollHeight-window.innerHeight)*100,100)+'%';},{passive:true});

// SCROLL REVEAL & STAGGER
const ro=new IntersectionObserver(entries=>{
  entries.forEach(e=>{
    if(e.isIntersecting){
      e.target.classList.add('on');
      ro.unobserve(e.target);
    }
  });
},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r,.rc').forEach(el=>ro.observe(el));

// GRID STAGGER LOGIC
document.querySelectorAll('.r-grid').forEach(grid=>{
  const io=new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        e.target.querySelectorAll(':scope > *').forEach((child,i)=>{
          child.style.transitionDelay=(i*.08)+'s';
          child.classList.add('on');
        });
        io.unobserve(e.target);
      }
    });
  },{threshold:.15});
  io.observe(grid);
});

// STATEMENT LINE DRAW
const line=document.querySelector('.statement-line');
if(line){
  const lineIo=new IntersectionObserver(e=>{if(e[0].isIntersecting){line.classList.add('on');lineIo.disconnect();}});
  lineIo.observe(line);
}

// NAV, BURGER & LANG handled by header-footer.js

// WA FLOAT
window.addEventListener('scroll',()=>{document.getElementById('waFloat').classList.toggle('visible',scrollY>400);},{passive:true});

// GALLERY DRAG SCROLL
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

// FAQ ACCORDION
document.querySelectorAll('.faq-item').forEach(item=>{
  item.querySelector('.faq-q').addEventListener('click',()=>{
    const isOpen=item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
    if(!isOpen)item.classList.add('open');
  });
});

// SMOOTH SCROLL
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const target=document.querySelector(a.getAttribute('href'));
    if(target){e.preventDefault();target.scrollIntoView({behavior:'smooth',block:'start'});}
  });
});

// FORM LOGIC
const bfForm=document.querySelector('.bf-form');
const bfSuccess=document.querySelector('.form-success');
if(bfForm){
  bfForm.addEventListener('submit',e=>{
    e.preventDefault();
    bfForm.style.display='none';
    bfSuccess.classList.add('active');
  });
}

// CART
(function(){const count=0;const badge=document.getElementById('cartCount');const mBadge=document.getElementById('mCartCount');if(count>0){if(badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items');}if(mBadge){mBadge.textContent=count;mBadge.style.display='flex';}}})();
</script>

<?php get_footer(); ?>
