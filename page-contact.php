<?php
/**
 * Template Name: BF Contact
 * Boston Flowers — Contact page
 * Slug: /contact
 */

add_action('wp_head', function() { ?>

<title>Contact — Boston Flowers | Talk to the Studio in Brighton, Boston</title>
<meta name="description" content="Talk to Boston Flowers studio in Brighton, MA. WhatsApp, call, or message — we confirm timing, availability, and delivery across Greater Boston.">
<link rel="canonical" href="https://bostonflowers.com/contact">

<style>
  #contact-photo { 
    height: 640px; 
    background: var(--ink); 
  }
  .cp-img {
    background: url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-interior-contact.webp') no-repeat center 45% / cover;
  }
  @media (max-width: 768px) {
    #contact-photo { height: 400px; }
    /* Сдвигаем влево на 20%, чтобы увидеть логотип, и немного вниз по вертикали */
    .cp-img { background-position: 20% 15%; }
  }
</style>

<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669" class="wa-float" id="waFloat" aria-label="Order via WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-bg"><div class="hero-glow-l"></div><div class="hero-glow-r"></div></div>
  <div class="hero-bf" aria-hidden="true">BF</div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Contact &mdash; Brighton, Boston</span></div>
      <h1 class="hero-h1 serif">
        Talk to <em>the studio.</em>
      </h1>
      <p class="hero-sub">WhatsApp, call, or send a message &mdash; we&rsquo;ll confirm timing, availability, and delivery options.</p>
      <div class="hero-btns">
        <a href="https://wa.me/19172514669" class="btn btn-ghost" target="_blank" rel="noopener">Open WhatsApp</a>
        <a href="tel:+16178173157" class="btn-text">Call studio &rarr;</a>
      </div>
    </div>
    <aside class="hero-meta" aria-label="Contact at a glance">
      <span class="hero-meta-ttl">At a glance</span>
      <div class="hero-meta-row"><span class="hero-meta-k">Studio</span><span class="hero-meta-v">Brighton, Boston</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Hours</span><span class="hero-meta-v">8 AM &mdash; 8 PM</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Fastest</span><span class="hero-meta-v">WhatsApp</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Delivery</span><span class="hero-meta-v">Greater Boston</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Pickup</span><span class="hero-meta-v">By request</span></div>
    </aside>
  </div>
</section>

<!-- ══════ CHANNELS ══════ -->

<!-- ═ BF SECTION: photo-hero ═ -->

<div id="contact-photo" style="position:relative;overflow:hidden;background:var(--ink);">
  <div class="cp-img" style="position:absolute;inset:0;z-index:1;"></div>
  <div style="position:absolute;top:0;left:0;right:0;height:100px;background:linear-gradient(to bottom,var(--ink),transparent);z-index:2;pointer-events:none;"></div>
  <div style="position:absolute;bottom:0;left:0;right:0;height:200px;background:linear-gradient(to top,rgba(17,19,21,.95),transparent);z-index:2;pointer-events:none;"></div>
  <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:rgba(255,255,255,.1);text-align:center;line-height:2.2;padding:40px;z-index:1;display:none;">
    ФОТО СЛОТ &mdash; СТУДИЯ
  </div>
</div>

<section id="channels">
  <div class="container">
    <div class="ch-eyebrow r"><div class="hero-line"></div><span class="lbl">Choose your channel</span></div>
    <h2 class="ch-h serif r d1">How would you like <em>to reach us?</em></h2>
    <span class="ch-line r d1"></span>
    <div class="ch-grid">
      <a href="https://wa.me/19172514669" target="_blank" rel="noopener" class="ch-card r d1">
        <div class="ch-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></div>
        <div class="ch-tag"><span class="ch-dot"></span>Typically replies within 5 min</div>
        <h3 class="ch-ttl serif">WhatsApp</h3>
        <p class="ch-txt">Fastest way to reach us. Same-day orders, custom requests, quick questions &mdash; this is the channel we monitor first.</p>
        <span class="ch-cta">Open WhatsApp &rarr;</span>
      </a>
      <a href="tel:+16178173157" class="ch-card r d2">
        <div class="ch-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg></div>
        <div class="ch-tag"><span class="ch-dot"></span>During studio hours, 8 AM &mdash; 8 PM</div>
        <h3 class="ch-ttl serif">Phone</h3>
        <p class="ch-txt">Best when you need immediate confirmation, want to discuss a complex order, or prefer hearing a voice on the other end.</p>
        <span class="ch-cta">Call studio &rarr;</span>
      </a>
    </div>
  </div>
</section>

<!-- ══════ QUICK START CHIPS ══════ -->

<section id="chips">
  <div class="container">
    <div class="ch-eyebrow r"><div class="hero-line"></div><span class="lbl">Quick start</span></div>
    <h2 class="ch-h serif r d1">What are you <em>ordering?</em></h2>
    <span class="ch-line r d1"></span>
    <p class="chips-sub r d2">Tap a chip &mdash; we&rsquo;ll open WhatsApp with a starting message ready to send.</p>
    <div class="chips-grid r d3">
      <a class="chip" href="https://wa.me/19172514669?text=Hi%2C%20I%27d%20like%20a%20bouquet%20for%20delivery%20today." target="_blank" rel="noopener"><span class="chip-num">01</span>Same-day bouquet</a>
      <a class="chip" href="https://wa.me/19172514669?text=Hi%2C%20I%27d%20like%20to%20order%20a%20custom%20arrangement.%20Can%20we%20discuss%3F" target="_blank" rel="noopener"><span class="chip-num">02</span>Custom arrangement</a>
      <a class="chip" href="https://wa.me/19172514669?text=Hi%2C%20I%27m%20interested%20in%20a%20grand%20arrangement%20%28%24200%2B%29." target="_blank" rel="noopener"><span class="chip-num">03</span>Grand arrangement</a>
      <a class="chip" href="https://wa.me/19172514669?text=Hi%2C%20I%27m%20planning%20a%20wedding%20and%20would%20like%20to%20discuss%20flowers." target="_blank" rel="noopener"><span class="chip-num">04</span>Wedding inquiry</a>
      <a class="chip" href="https://wa.me/19172514669?text=Hi%2C%20I%27m%20looking%20for%20corporate%20%2F%20event%20florals." target="_blank" rel="noopener"><span class="chip-num">05</span>Corporate &amp; events</a>
      <a class="chip" href="https://wa.me/19172514669?text=Hi%2C%20I%27d%20like%20to%20pick%20up%20an%20order%20at%20your%20Brighton%20studio." target="_blank" rel="noopener"><span class="chip-num">06</span>Studio pickup</a>
    </div>
  </div>
</section>

<!-- ══════ COPY TEMPLATE ══════ -->

<section id="template">
  <div class="container">
    <div class="tpl-grid">
      <div class="tpl-left">
        <div class="ch-eyebrow r"><div class="hero-line"></div><span class="lbl">Or write your own</span></div>
        <h2 class="ch-h serif r d1">Copy this template, <em>send it anywhere.</em></h2>
        <span class="ch-line r d1"></span>
        <p class="tpl-sub r d2">A complete starting message that gives us everything we need to confirm your order in one reply &mdash; instead of 6 back-and-forth questions.</p>
        <div class="tpl-meta r d3">
          <span class="lbl">Includes</span>
          <ul class="tpl-list">
            <li>Occasion</li>
            <li>Budget range</li>
            <li>Delivery area</li>
            <li>Preferred timing</li>
          </ul>
        </div>
      </div>
      <div class="tpl-card r d2">
        <div class="tpl-card-top">
          <span class="lbl">Example message</span>
          <div class="tpl-dots"><span></span><span></span><span></span></div>
        </div>
        <pre id="tplText" class="tpl-text">Hi, I&rsquo;d like to order flowers.

Occasion:
Budget:
Delivery area:
Preferred timing:
References (optional):</pre>
<button id="copyBtn" class="tpl-btn" type="button">
<span class="copy-default">Copy template</span>
<span class="copy-done">Copied ✓</span>
</button>
</div>
</div>

  </div>
</section>

<!-- ══════ STUDIO — LIGHT SECTION ══════ -->

<section id="studio">
  <div class="container">
    <div class="studio-grid">
      <div class="studio-left">
        <div class="studio-eyebrow r"><div class="hero-line"></div><span class="lbl">The studio</span></div>
        <h2 class="studio-h serif r d1">Brighton, <em>Boston.</em></h2>
        <div class="studio-addr r d2">
          <small>Address</small>
          267 North Beacon St,<br>Brighton, MA 02135
        </div>
        <div class="studio-rows r d3">
          <div class="studio-row"><span class="sr-k">Hours</span><span class="sr-v">8 AM &mdash; 8 PM</span></div>
          <div class="studio-row"><span class="sr-k">Pickup</span><span class="sr-v">By appointment</span></div>
          <div class="studio-row"><span class="sr-k">Coverage</span><span class="sr-v">Greater Boston</span></div>
        </div>
        <p class="studio-pitch r d4"><strong>One studio. One team. No outsourcing.</strong></p>
        <p class="studio-zones-ttl r d4"><span class="lbl">Delivery zones</span></p>
        <ul class="studio-zones r d5">
          <li><span>Boston / Newton / Cambridge / Watertown</span><strong>from $20</strong></li>
          <li><span>Needham / Burlington</span><strong>$35&ndash;40</strong></li>
          <li><span>Rhode Island &amp; far suburbs</span><strong>from $100+</strong></li>
        </ul>
      </div>
      <div class="studio-map r d2">
        <iframe
          class="studio-map-iframe"
          src="https://www.google.com/maps?q=267+North+Beacon+St,+Brighton,+MA+02135&output=embed&z=14"
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          allowfullscreen
          title="Boston Flowers studio location"></iframe>
        <div class="studio-map-overlay"></div>
        <div class="studio-map-frame"></div>
        <a class="studio-map-label" href="https://maps.google.com/?q=267+North+Beacon+St,+Brighton,+MA+02135" target="_blank" rel="noopener">
          <span class="lbl">The studio</span>
          <span class="map-coord">267 North Beacon St &middot; Brighton, MA</span>
          <span class="map-open">Open in Maps &rarr;</span>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- ══════ FORM ══════ -->

<section id="form">
  <div class="container">
    <div class="ch-eyebrow r"><div class="hero-line"></div><span class="lbl">Or fill the form</span></div>
    <h2 class="ch-h serif r d1">Send us <em>a message.</em></h2>
    <span class="ch-line r d1"></span>
    <p class="form-sub r d2">If WhatsApp isn&rsquo;t your thing &mdash; we&rsquo;ll reply by phone or email.</p>
    <form id="contactForm" class="form-grid r d3" onsubmit="return handleSubmit(event)">
      <div class="fld">
        <label for="fName">Your name</label>
        <input id="fName" type="text" required>
      </div>
      <div class="fld">
        <label for="fContact">Phone or email</label>
        <input id="fContact" type="text" required>
      </div>
      <div class="fld fld-full">
        <label for="fAbout">What&rsquo;s this about?</label>
        <select id="fAbout">
          <option>Same-day bouquet</option>
          <option>Custom arrangement</option>
          <option>Grand arrangement ($200+)</option>
          <option>Wedding inquiry</option>
          <option>Corporate &amp; events</option>
          <option>Other</option>
        </select>
      </div>
      <div class="fld fld-full">
        <label for="fMsg">Message</label>
        <textarea id="fMsg" rows="4" placeholder="Occasion, budget, delivery area, timing..."></textarea>
      </div>
      <button type="submit" class="btn btn-wine form-submit">Send message</button>
    </form>
    <div id="formSuccess" class="form-success">
      <span class="success-line"></span>
      <h3 class="serif">Got it. We&rsquo;ll reply shortly.</h3>
      <p>Usually within minutes during studio hours.</p>
    </div>
  </div>
</section>

<!-- ══════ FINAL CTA ══════ -->

<section id="final">
  <div class="final-inner">
    <span class="final-eyebrow r">Send it now</span>
    <h2 class="final-h serif r d1">We&rsquo;ll take it <em>from here.</em></h2>
    <p class="final-sub r d2">One message is all we need to get started. WhatsApp opens fastest &mdash; or call the studio directly.</p>
    <div class="final-btns r d3">
      <a href="https://wa.me/19172514669" target="_blank" rel="noopener" class="btn btn-ivory">Open WhatsApp</a>
      <a href="tel:+16178173157" class="btn btn-outline-ivory">Call studio</a>
    </div>
  </div>
</section>

<script>
// SCROLL PROGRESS
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',()=>{prog.style.width=Math.min(scrollY/(document.body.scrollHeight-innerHeight)*100,100)+'%';},{passive:true});

// SCROLL REVEAL
const ro=new IntersectionObserver(e=>{e.forEach(x=>{if(x.isIntersecting){x.target.classList.add('on');ro.unobserve(x.target)}});},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r').forEach(el=>ro.observe(el));
setTimeout(()=>document.querySelectorAll('.r:not(.on)').forEach(el=>el.classList.add('on')),2400);

// NAV
// NAV handled by header-footer.js

window.addEventListener('scroll',()=>nav.classList.toggle('scrolled',scrollY>60),{passive:true});

// FLOATING WHATSAPP
const waBtn=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waBtn.classList.toggle('visible',scrollY>300);},{passive:true});

// BURGER
// BURGER handled by header-footer.js

// BURGER + DATA-TOGGLE handled by header-footer.js

// COPY TEMPLATE
const copyBtn=document.getElementById('copyBtn');
const tplText=document.getElementById('tplText');
if(copyBtn&&tplText){
  copyBtn.addEventListener('click',()=>{
    const txt=tplText.textContent;
    navigator.clipboard.writeText(txt).then(()=>{
      copyBtn.classList.add('done');
      setTimeout(()=>copyBtn.classList.remove('done'),2200);
    }).catch(()=>{
      const ta=document.createElement('textarea');ta.value=txt;document.body.appendChild(ta);ta.select();
      try{document.execCommand('copy');copyBtn.classList.add('done');setTimeout(()=>copyBtn.classList.remove('done'),2200);}catch(e){}
      document.body.removeChild(ta);
    });
  });
}

// FORM SUBMIT (inline success, no reload)
function handleSubmit(e){
  e.preventDefault();
  const form=document.getElementById('contactForm');
  const success=document.getElementById('formSuccess');
  form.style.display='none';
  success.classList.add('shown');
  success.scrollIntoView({behavior:'smooth',block:'center'});
  return false;
}

</script>

<?php get_footer(); ?>
