<?php
/**
 * Template Name: BF Corporate
 * Boston Flowers — Corporate Flower Delivery page
 * Slug: /corporate
 */
$bf_corporate_hero_image_id = 359;
$bf_corporate_hero_image_url = wp_get_attachment_image_url($bf_corporate_hero_image_id, 'full');

add_action('wp_head', function() use ($bf_corporate_hero_image_url) { ?>
<title>Corporate Flower Delivery Boston | Boston Flowers Studio</title>
<meta name="description" content="Corporate floral service, weekly office installations, and client gifting in Greater Boston. Custom floral systems designed for businesses.">
<link rel="canonical" href="https://bostonflowers.com/corporate">
<meta property="og:title" content="Corporate Flower Delivery Boston | Boston Flowers Studio">
<meta property="og:description" content="Corporate floral service, weekly office installations, and client gifting in Greater Boston.">
<meta property="og:image" content="<?php echo esc_url($bf_corporate_hero_image_url); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/corporate">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?php echo esc_url($bf_corporate_hero_image_url); ?>">
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph": [
    {
      "@type":"Florist",
      "name":"Boston Flowers",
      "image":"<?php echo esc_url($bf_corporate_hero_image_url); ?>",
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
      "serviceType":"Corporate floral service",
      "provider":{"@id":"https://bostonflowers.com/#florist"},
      "image":"<?php echo esc_url($bf_corporate_hero_image_url); ?>",
      "areaServed":["Boston","Brighton","Cambridge","Newton"],
      "description":"Weekly floral service, corporate events, and client gifting for Boston offices, hotels, restaurants, and branded spaces."
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669?text=Hi%2C+I%27d+like+to+discuss+corporate+floral+service." class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-left">
    <div class="hero-bf" aria-hidden="true">BF</div>
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Corporate Floral Service — Boston</span></div>
    <h1 class="hero-h1 serif">Corporate florals.<br><em>On schedule.</em></h1>
    <p class="hero-sub">Floral systems designed for businesses that need to look structured, consistent, and high-level.</p>
    <p class="hero-micro">Weekly service · Greater Boston coverage</p>
    <div class="hero-bullets">
      <div class="hero-bullet">Weekly installations</div>
      <div class="hero-bullet">Event & corporate setups</div>
      <div class="hero-bullet">Client & partner gifting</div>
    </div>
    <div class="hero-btns">
      <a href="#contact" class="btn btn-ghost">Get Proposal</a>
      <a href="#handle" class="btn-text">What we handle →</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-right-inner">
      <div class="hero-photo">
        <?php
          echo wp_get_attachment_image($bf_corporate_hero_image_id, 'full', false, array(
            'class' => 'hero-photo-img',
            'alt' => 'pastel pink and white floral basket on a corporate reception counter by Boston Flowers',
            'title' => 'Corporate Lobby Floral Arrangement in Boston',
            'loading' => 'eager',
            'fetchpriority' => 'high',
            'decoding' => 'async',
            'sizes' => '(max-width: 640px) 100vw, (max-width: 1023px) 45vw, 45vw',
          ));
        ?>
      </div>
      <span class="hero-ph-lbl">Reception / lobby · Corporate florals · Boston Flowers</span>
    </div>
  </div>
</section>

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>✦</span>Delivered weekly without delays</span>
      <span class="marquee-item"><span>✦</span>Used by offices, hotels & restaurants</span>
      <span class="marquee-item"><span>✦</span>Custom-built for each business</span>
      <span class="marquee-item"><span>✦</span>Direct communication</span>
      <span class="marquee-item"><span>✦</span>Greater Boston coverage</span>
      <span class="marquee-item"><span>✦</span>Delivered weekly without delays</span>
      <span class="marquee-item"><span>✦</span>Used by offices, hotels & restaurants</span>
      <span class="marquee-item"><span>✦</span>Custom-built for each business</span>
      <span class="marquee-item"><span>✦</span>Direct communication</span>
      <span class="marquee-item"><span>✦</span>Greater Boston coverage</span>
    </div>
  </div>
  <div class="marquee-track" style="border-top:1px solid var(--bd)">
    <div class="marquee-inner rev">
      <span class="marquee-item"><span>✦</span>Reliable schedules maintained</span>
      <span class="marquee-item"><span>✦</span>Setup and breakdown included</span>
      <span class="marquee-item"><span>✦</span>Seasonal updates handled</span>
      <span class="marquee-item"><span>✦</span>No coordination from your side</span>
      <span class="marquee-item"><span>✦</span>One contact, start to finish</span>
      <span class="marquee-item"><span>✦</span>Reliable schedules maintained</span>
      <span class="marquee-item"><span>✦</span>Setup and breakdown included</span>
      <span class="marquee-item"><span>✦</span>Seasonal updates handled</span>
      <span class="marquee-item"><span>✦</span>No coordination from your side</span>
      <span class="marquee-item"><span>✦</span>One contact, start to finish</span>
    </div>
  </div>
</section>

<section id="stats">
  <div class="stats-grid r-grid">
    <div class="stat-item r">
      <div class="stat-num serif" data-target="100" data-suffix="+">0</div>
      <div class="stat-lbl">Corporate Events</div>
    </div>
    <div class="stat-item r">
      <div class="stat-num serif" data-target="48" data-suffix="hr">0</div>
      <div class="stat-lbl">Fast Turnaround</div>
    </div>
    <div class="stat-item r">
      <div class="stat-num serif" data-target="3" data-suffix="+">0</div>
      <div class="stat-lbl">Industry Experience</div>
    </div>
  </div>
</section>

<section id="handle">
  <div class="container">
    <div class="handle-hd">
      <span class="section-line r"></span>
      <p class="lbl lbl-dark r">What we handle</p>
      <h2 class="handle-title serif rc d1">Floral systems,<br><em>handled end to end.</em></h2>
      <p class="handle-sub r d2">We remove the floral management from your team’s plate and handle it from design to delivery.</p>
    </div>
    <div class="handle-grid r-grid">
      <div class="handle-item r">
        <div class="handle-num serif">01</div>
        <div class="handle-name serif">Weekly office flowers</div>
        <p class="handle-desc">Regular installations for reception areas, meeting rooms, and executive spaces. Consistent quality, no chasing.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">02</div>
        <div class="handle-name serif">Restaurant & hotel atmosphere</div>
        <p class="handle-desc">Table compositions, lobby arrangements, and bar displays that feel intentional — not filler.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">03</div>
        <div class="handle-name serif">Corporate events & launches</div>
        <p class="handle-desc">Dinners, conferences, product launches, VIP receptions. Setup and breakdown included.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">04</div>
        <div class="handle-name serif">Client & partner gifting</div>
        <p class="handle-desc">Premium arrangements delivered to your clients, executives, or partners. Coordinated directly with your team.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">05</div>
        <div class="handle-name serif">Seasonal installations</div>
        <p class="handle-desc">Holiday displays, seasonal refreshes, and branded moment setups that mark the calendar properly.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">06</div>
        <div class="handle-name serif">Branded environments</div>
        <p class="handle-desc">Shoots, showrooms, and client-facing spaces. Florals that work as part of your visual identity.</p>
      </div>
    </div>
  </div>
</section>

<section id="who">
  <div class="container">
    <div class="who-hd">
      <span class="section-line r"></span>
      <p class="lbl r">Built for</p>
      <h2 class="who-title serif rc d1">The businesses<br><em>that need it right.</em></h2>
    </div>
    <div class="who-grid r-grid">
      <div class="who-item r">
        <span class="who-seg">Offices</span>
        <div class="who-name serif">Corporate & professional spaces</div>
        <p class="who-pain">Need to look structured and high-level for clients and partners without managing vendors themselves.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Hotels</span>
        <div class="who-name serif">Hospitality & lodging</div>
        <p class="who-pain">Lobby and reception florals that reflect the class of the property — changed regularly, handled reliably.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Restaurants</span>
        <div class="who-name serif">Dining & hospitality venues</div>
        <p class="who-pain">Atmosphere that works on the dining experience. Composition that matches the room — not just a vase.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Agencies & brands</span>
        <div class="who-name serif">Creative & media companies</div>
        <p class="who-pain">Reliable setups for launches, shoots, campaigns, and client-facing events. On time, on brand.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Real estate</span>
        <div class="who-name serif">Showrooms & luxury properties</div>
        <p class="who-pain">Premium feel from the moment a client walks in. Staged arrangements that sell the lifestyle, not just the space.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Salons & clinics</span>
        <div class="who-name serif">Wellness & premium retail</div>
        <p class="who-pain">Fresh arrangements that communicate care and attention to detail — the same values your clients come for.</p>
      </div>
    </div>
  </div>
</section>

<section id="visual">
  <div class="visual-hd r">
    <p class="lbl">Studio work</p>
    <h2 class="visual-title serif r d1">Designed to integrate<br><em>not distract.</em></h2>
    <p class="visual-sub r d2">Applicable to corporate and hospitality spaces. Real work — no stock.</p>
  </div>
  <div class="visual-scroll" id="visualScroll">
    <div class="visual-slide">
      <div class="visual-img"><?php echo wp_get_attachment_image(360, 'full', false, array('class' => 'visual-img-el', 'title' => 'Pastel Reception Floral Arrangement for Boston Medical Office', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 640px) 88vw, (max-width: 1024px) 42vw, 420px')); ?></div>
      <div class="visual-ph">Medical reception · Brighton · Pastel florals</div>
    </div>
    <div class="visual-slide">
      <div class="visual-img"><?php echo wp_get_attachment_image(361, 'full', false, array('class' => 'visual-img-el', 'title' => 'Lavender Hydrangea Table Florals for Corporate Dinner', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 640px) 78vw, (max-width: 1024px) 34vw, 320px')); ?></div>
      <div class="visual-ph">Hydrangea table florals · Corporate dinner</div>
    </div>
    <div class="visual-slide">
      <div class="visual-img"><?php echo wp_get_attachment_image(362, 'full', false, array('class' => 'visual-img-el', 'title' => 'Purple Floral Arrangement for Boston Skin Care Studio', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 640px) 88vw, (max-width: 1024px) 48vw, 500px')); ?></div>
      <div class="visual-ph">Skin care studio · Reception arrangement</div>
    </div>
    <div class="visual-slide">
      <div class="visual-img"><?php echo wp_get_attachment_image(363, 'full', false, array('class' => 'visual-img-el', 'title' => 'Hospitality Event Tablescape with Boston Floral Design', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 640px) 88vw, (max-width: 1024px) 56vw, 640px')); ?></div>
      <div class="visual-ph">Hospitality venue · Event tablescape</div>
    </div>
  </div>
  <div class="visual-counter">
    <span class="visual-counter-lbl">Scroll to explore</span>
    <div class="visual-dots" id="visualDots">
      <div class="visual-dot active"></div>
      <div class="visual-dot"></div>
      <div class="visual-dot"></div>
      <div class="visual-dot"></div>
    </div>
  </div>
</section>

<section id="ways">
  <div class="container">
    <div class="ways-hd">
      <p class="lbl lbl-dark r">Ways to work with us</p>
      <h2 class="ways-title serif rc d1">Three models.<br><em>One standard.</em></h2>
    </div>
    <div class="ways-grid r-grid">
      <div class="ways-item r">
        <span class="ways-tag">Recurring</span>
        <div class="ways-name serif">Weekly floral service</div>
        <p class="ways-desc">Consistent installations for offices, hotels, and restaurants. We design, deliver, and replace on your schedule — no coordination required from your side.</p>
        <div class="ways-detail">Best for — offices, lobbies, restaurants, salons</div>
      </div>
      <div class="ways-item r">
        <span class="ways-tag">One-time</span>
        <div class="ways-name serif">Event & corporate setup</div>
        <p class="ways-desc">Dinners, launches, conferences, VIP receptions, and holiday parties. Full setup and breakdown. Briefed and handled directly with your team.</p>
        <div class="ways-detail">Best for — events, openings, branded moments</div>
      </div>
      <div class="ways-item r">
        <span class="ways-tag">Gifting</span>
        <div class="ways-name serif">Client & partner gifting</div>
        <p class="ways-desc">Premium arrangements for clients, partners, executives, and teams. Coordinated delivery with personal notes on request.</p>
        <div class="ways-detail">Best for — client retention, onboarding, appreciation</div>
      </div>
    </div>
  </div>
</section>

<section id="investment">
  <div class="container">
    <div class="inv-grid">
      <div>
        <p class="lbl r">Investment</p>
        <h2 class="inv-title serif rc d1">Quoted by<br><em>scope and scale.</em></h2>
        <p class="inv-sub r d2">No fixed packages. Every business has different needs — we build the service around yours after a short consultation.</p>
      </div>
      <div class="r-grid r d1">
        <div class="inv-tiers">
          <div class="inv-tier r">
            <div>
              <div class="inv-tier-name serif">Weekly floral service</div>
              <div class="inv-tier-desc">Regular office, lobby, or restaurant installations</div>
            </div>
            <div class="inv-tier-price">Quoted after consultation</div>
          </div>
          <div class="inv-tier r">
            <div>
              <div class="inv-tier-name serif">Corporate events</div>
              <div class="inv-tier-desc">Dinners, launches, conferences, holiday setups</div>
            </div>
            <div class="inv-tier-price">Quoted by scope</div>
          </div>
          <div class="inv-tier r">
            <div>
              <div class="inv-tier-name serif">Client gifting</div>
              <div class="inv-tier-desc">Individual or bulk arrangements with delivery</div>
            </div>
            <div class="inv-tier-price">Quoted by order</div>
          </div>
        </div>
        <p class="inv-note r d2">We respond to all corporate inquiries within a few hours. A 15-minute call is usually enough to scope the project.</p>
      </div>
    </div>
  </div>
</section>

<section id="how">
  <div class="container">
    <div class="how-hd">
      <p class="lbl lbl-dark r">How it works</p>
      <h2 class="how-title serif rc d1">Five steps.<br><em>Then it runs itself.</em></h2>
    </div>
    <div class="how-steps r-grid">
      <div class="how-step r">
        <div class="how-step-num serif">01</div>
        <div class="how-step-name serif">You send a request</div>
        <p class="how-step-desc">Tell us the type of service, location, and rough scope. We respond within a few hours.</p>
      </div>
      <div class="how-step r">
        <div class="how-step-num serif">02</div>
        <div class="how-step-name serif">We define scope</div>
        <p class="how-step-desc">Short call or message exchange. We ask what we need, you get clarity on what to expect.</p>
      </div>
      <div class="how-step r">
        <div class="how-step-num serif">03</div>
        <div class="how-step-name serif">We propose & confirm</div>
        <p class="how-step-desc">Concept, schedule, and pricing. You approve before anything starts.</p>
      </div>
      <div class="how-step r">
        <div class="how-step-num serif">04</div>
        <div class="how-step-name serif">We execute</div>
        <p class="how-step-desc">Delivery, installation, and setup handled by us. No coordination required from your team.</p>
      </div>
      <div class="how-step r">
        <div class="how-step-num serif">05</div>
        <div class="how-step-name serif">Ongoing support</div>
        <p class="how-step-desc">For weekly clients — we manage replacements, seasonal updates, and adjustments automatically.</p>
      </div>
    </div>
  </div>
</section>

<section id="why">
  <div class="container">
    <div class="why-grid">
      <div>
        <p class="lbl r">Why this studio</p>
        <h2 class="why-title serif rc d1">Control.<br><em>Consistency.<br>No chaos.</em></h2>
        <p class="why-sub r d2">We built the studio around reliability, not just design. For corporate clients, both matter equally.</p>
      </div>
      <div class="why-points r-grid r d1">
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Reliable delivery</strong>We show up when we said we would. No delays, no excuses, no chasing.</div>
        </div>
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Clean execution</strong>Setup handled without disrupting your space or team. In and out.</div>
        </div>
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">No missed deadlines</strong>Events have dates. We treat them the same way you do.</div>
        </div>
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Direct communication</strong>You deal with one person, not a chain. Fast responses, no back-and-forth overhead.</div>
        </div>
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Designed for business environments</strong>Not just beautiful — appropriate. We know the difference between a home arrangement and a reception display.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="statement">
  <div class="container">
    <div class="statement-line r"></div>
    <div class="statement-inner r d1">
      <blockquote>“We just needed it handled. And it was.”</blockquote>
      <cite>Boston Flowers — Corporate Client</cite>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-left-col">
        <p class="lbl lbl-dark r">Get proposal</p>
        <h2 class="contact-h2 serif r d1"><em>Tell us what<br>you need.</em></h2>
        <p class="contact-p r d2">We’ll come back within a few hours with clarity on scope, approach, and next steps.</p>
        <div class="contact-note r d3">
          For weekly service, events, gifting — any scope.<br>
          A 15-minute call is usually enough.
        </div>
      </div>
      <div class="r d1">
        <form class="bf-form c-form" data-intent="corporate" method="post" action="/api/lead" novalidate>
          <input type="hidden" name="source" value="corporate.html">
          <input type="hidden" name="intent" value="corporate">
          <input type="text" name="_h" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px">
          
          <div class="c-row">
            <div class="c-field">
              <label for="c-name">Your name</label>
              <input type="text" id="c-name" name="name" placeholder="Alex" required>
            </div>
            <div class="c-field">
              <label for="c-company">Company</label>
              <input type="text" id="c-company" name="company" placeholder="Acme Corp">
            </div>
          </div>
          <div class="c-field">
            <label for="c-type">Type of service</label>
            <select id="c-type" name="type">
              <option value="" disabled selected>Select</option>
              <option value="weekly">Weekly floral service</option>
              <option value="event">Corporate event</option>
              <option value="gifting">Client gifting</option>
              <option value="other">Other / not sure yet</option>
            </select>
          </div>
          <div class="c-field">
            <label for="c-phone">Phone or Email</label>
            <input type="text" id="c-phone" name="contact" placeholder="To reach you back" required>
          </div>
          <div class="c-field full-w">
            <label for="c-message">Tell us more</label>
            <textarea id="c-message" name="message" placeholder="Location, rough scope, specific dates, or requirements..."></textarea>
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
      <p class="cta-eye">Ready to start?</p>
      <h2 class="cta-title serif">Tell us what you need.<br>We’ll take care of the rest.</h2>
      <p class="cta-sub">For weekly service, gifting, events, and seasonal installs.</p>
      <div class="cta-btns">
        <a href="#contact" class="btn btn-ivory">Get Proposal</a>
        <a href="https://wa.me/19172514669?text=Hi%2C+I%27d+like+to+discuss+corporate+floral+service." class="btn btn-outline-ivory">WhatsApp directly</a>
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

const statNums=document.querySelectorAll('.stat-num');
if(statNums.length>0){
  const statIo=new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        const target=parseInt(e.target.getAttribute('data-target'));
        const suffix=e.target.getAttribute('data-suffix');
        let count=0;
        const dur=2000;
        const inc=target/(dur/16);
        const timer=setInterval(()=>{
          count+=inc;
          if(count>=target){
            e.target.innerText=target+suffix;
            clearInterval(timer);
          }else{
            e.target.innerText=Math.ceil(count)+suffix;
          }
        },16);
        statIo.unobserve(e.target);
      }
    });
  },{threshold:.5});
  statNums.forEach(num=>statIo.observe(num));
}

const line=document.querySelector('.statement-line');
if(line){
  const lineIo=new IntersectionObserver(e=>{if(e[0].isIntersecting){line.classList.add('on');lineIo.disconnect();}});
  lineIo.observe(line);
}

// NAV, BURGER, LANG handled by header-footer.js

window.addEventListener('scroll',()=>{document.getElementById('waFloat').classList.toggle('visible',scrollY>400);},{passive:true});

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

// VISUAL GALLERY DRAG SCROLL
const vs=document.getElementById('visualScroll');
if(vs){
  const vdots=document.querySelectorAll('.visual-dot');
  let isDown=false,startX,scrollLeft;
  vs.addEventListener('mousedown',e=>{isDown=true;vs.classList.add('grabbing');startX=e.pageX-vs.offsetLeft;scrollLeft=vs.scrollLeft;});
  vs.addEventListener('mouseleave',()=>{isDown=false;vs.classList.remove('grabbing');});
  vs.addEventListener('mouseup',()=>{isDown=false;vs.classList.remove('grabbing');});
  vs.addEventListener('mousemove',e=>{if(!isDown)return;e.preventDefault();const x=e.pageX-vs.offsetLeft;vs.scrollLeft=scrollLeft-(x-startX)*1.5;});
  vs.addEventListener('scroll',()=>{
    const slides=vs.querySelectorAll('.visual-slide');
    if(slides.length&&vdots.length){
      const ratio=vs.scrollLeft/(vs.scrollWidth-vs.clientWidth);
      const active=Math.round(ratio*(slides.length-1));
      vdots.forEach((d,i)=>d.classList.toggle('active',i===active));
    }
  },{passive:true});
}

(function(){const count=0;const badge=document.getElementById('cartCount');const mBadge=document.getElementById('mCartCount');if(count>0){if(badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items');}if(mBadge){mBadge.textContent=count;mBadge.style.display='flex';}}})();
</script>

<?php get_footer(); ?>
