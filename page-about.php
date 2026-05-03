<?php
/**
 * Template Name: BF About
 * Boston Flowers — About page
 * Slug: /about
 */

add_action('wp_head', function() { ?>

<title>About — Boston Flowers | Floral Studio in Brighton, MA</title>
<meta name="description" content="An independent floral studio in Brighton, Boston. Custom arrangements, grand compositions, and same-day delivery — built around real availability, by a husband-and-wife team.">
<link rel="canonical" href="https://bostonflowers.com/about">
<style>
  @media (min-width: 1025px) {
    .s-photo[data-label="The space"] { background-position: 20% center !important; }
  }
</style>

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
      <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">About the Studio &mdash; Brighton, Boston</span></div>
      <h1 class="hero-h1 serif">
        A Boston floral studio,<br>
        <em>built around real orders.</em>
      </h1>
      <p class="hero-sub">An independent studio focused on custom work, grand compositions, and same-day delivery — with full control of the process from intake to handoff.</p>
      <div class="hero-btns">
        <a href="/custom-orders" class="btn btn-ghost">Start an order</a>
        <a href="https://wa.me/1XXXXXXXXXX" class="btn-text">Custom request &rarr;</a>
      </div>
    </div>
    <aside class="hero-meta" aria-label="Studio facts">
      <span class="hero-meta-ttl">The studio at a glance</span>
      <div class="hero-meta-row"><span class="hero-meta-k">Located</span><span class="hero-meta-v">Brighton, Boston</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Model</span><span class="hero-meta-v">Independent studio</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Run by</span><span class="hero-meta-v">A husband &amp; wife team</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Coverage</span><span class="hero-meta-v">Greater Boston</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Speciality</span><span class="hero-meta-v">Custom &amp; grand work</span></div>
    </aside>
  </div>
</section>

<!-- ══════ HOW WE THINK ══════ -->

<section id="think">
  <div class="container">
    <div class="think-eyebrow r"><div class="hero-line"></div><span class="lbl">How we think</span></div>
    <h2 class="think-main serif r d1">
      Real availability first.<br>
      Design second. <em>Delivery confirmed.</em>
    </h2>
    <div class="think-grid">
      <div class="think-card r d1">
        <span class="think-num">01 &middot; Availability</span>
        <p class="think-txt">We design around what is <strong>actually fresh and available</strong> on the day of your order — not from a fixed catalog or a stock template.</p>
      </div>
      <div class="think-card r d2">
        <span class="think-num">02 &middot; Confirmation</span>
        <p class="think-txt">Every order is <strong>confirmed before it leaves the studio</strong>. Timing, address, sender, recipient — checked, not assumed.</p>
      </div>
      <div class="think-card r d3">
        <span class="think-num">03 &middot; Composition</span>
        <p class="think-txt">We build each arrangement for the space and the moment it&rsquo;s going into — <strong>not from a fixed template</strong>.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════ WHAT WE DO ══════ -->

<section id="do">
  <div class="container">
    <div class="do-head">
      <h2 class="do-h serif r">What we <em>actually</em> do.</h2>
      <p class="do-sub r d1">A focused studio. Five things we handle in-house, with direct communication from intake to handoff.</p>
    </div>
    <div class="do-list r d2">
      <div class="do-item">
        <span class="do-num">01</span>
        <h3 class="do-ttl serif">Same-day<br>delivery</h3>
        <p class="do-tag">Greater Boston &middot; cutoff 10:30 AM</p>
      </div>
      <div class="do-item">
        <span class="do-num">02</span>
        <h3 class="do-ttl serif">Custom<br>arrangements</h3>
        <p class="do-tag">Built per order &middot; from intake</p>
      </div>
      <div class="do-item">
        <span class="do-num">03</span>
        <h3 class="do-ttl serif">Grand<br>arrangements</h3>
        <p class="do-tag">Statement scale &middot; from $200</p>
      </div>
      <div class="do-item">
        <span class="do-num">04</span>
        <h3 class="do-ttl serif">Weddings<br>&amp; events</h3>
        <p class="do-tag">Full installation &middot; on-site</p>
      </div>
      <div class="do-item">
        <span class="do-num">05</span>
        <h3 class="do-ttl serif">Corporate<br>work</h3>
        <p class="do-tag">Recurring &middot; seasonal &middot; one-off</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════ PROCESS ══════ -->

<section id="process">
  <div class="container">
    <div class="proc-eyebrow r"><div class="hero-line"></div><span class="lbl">How it works</span></div>
    <h2 class="proc-h serif r d1">A short process. <em>No handoff chain.</em></h2>
    <div class="proc-grid">
      <div class="proc-step r d1">
        <span class="proc-num">01</span>
        <h3 class="proc-ttl serif">Tell us</h3>
        <p class="proc-txt">You send what you need — a date, a budget, a feeling, a reference. Anything is enough to start.</p>
      </div>
      <div class="proc-step r d2">
        <span class="proc-num">02</span>
        <h3 class="proc-ttl serif">We design</h3>
        <p class="proc-txt">We design the arrangement based on real availability for that day, and confirm direction with you.</p>
      </div>
      <div class="proc-step r d3">
        <span class="proc-num">03</span>
        <h3 class="proc-ttl serif">We confirm</h3>
        <p class="proc-txt">Address, timing, sender note. A short photo before delivery if you want to see the final piece.</p>
      </div>
      <div class="proc-step r d4">
        <span class="proc-num">04</span>
        <h3 class="proc-ttl serif">We deliver</h3>
        <p class="proc-txt">On-time hand delivery across Greater Boston — by us or a courier we trust personally.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════ DON'T DO ══════ -->

<section id="dont">
  <div class="container">
    <div class="dont-head">
      <h2 class="dont-h serif r">What we <em>don&rsquo;t</em> do.</h2>
      <p class="dont-sub r d1">Premium has limits. The things we don&rsquo;t take on are part of the reason the things we do take on come out the way they do.</p>
    </div>
    <div class="dont-list">
      <div class="dont-item r d1">
        <div class="dont-x" aria-hidden="true"></div>
        <h3 class="dont-ttl serif">No stock templates</h3>
        <p class="dont-txt">We don&rsquo;t build from a fixed catalog of repeated arrangements. Every order is designed for its day and its recipient.</p>
      </div>
      <div class="dont-item r d2">
        <div class="dont-x" aria-hidden="true"></div>
        <h3 class="dont-ttl serif">No literal copies</h3>
        <p class="dont-txt">We use references as <em>direction, not instruction</em>. Send us anything you like — we&rsquo;ll build something that holds in real life, not just in a photo.</p>
      </div>
      <div class="dont-item r d3">
        <div class="dont-x" aria-hidden="true"></div>
        <h3 class="dont-ttl serif">No cheap alternatives</h3>
        <p class="dont-txt">If your budget doesn&rsquo;t match the design, we&rsquo;ll say so directly and propose something that does — instead of cutting corners on flowers you&rsquo;ll see for a week.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══════ STUDIO ══════ -->

<section id="studio">
  <div class="container">
    <div class="studio-grid">
      <div class="studio-left">
        <div class="studio-eyebrow r"><div class="hero-line"></div><span class="lbl">The studio</span></div>
        <h2 class="studio-h serif r d1">A real space in <em>Brighton, Boston.</em></h2>
        <div class="studio-addr r d2">
          <small>Address</small>
          267 North Beacon St,<br>Brighton, MA 02135
        </div>
        <p class="studio-pitch r d3"><strong>One studio. One team. No outsourcing.</strong></p>
        <p class="studio-human r d4">Run by a husband-and-wife team from a real working space in Brighton, Boston &mdash; not a virtual shopfront, not a network of intermediaries.</p>
        <div class="studio-cta r d5">
          <a href="/contact" class="btn btn-ghost">Get in touch</a>
          <a href="/custom-orders" class="btn-text">Start a custom order &rarr;</a>
        </div>
      </div>
      <div class="studio-photos r d2">
        <div class="s-photo" data-label="The space" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-space-v7.webp'); background-size:cover; background-position:25% center; min-height:100%;">
          <span class="s-num">01</span>
        </div>
        <div class="s-photo" data-label="In progress" style="background: #111315 url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-about-in-progress.webp') no-repeat center/cover; min-height:100%;"><span class="s-num">02</span></div>
        <div class="s-photo" data-label="Hand delivery" style="background: #111315 url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/hand-delivery-boston-flowers-brighton.webp') no-repeat center/cover; min-height:100%;"><span class="s-num">03</span></div>
      </div>
    </div>
  </div>
</section>

<!-- ══════ PROMISE — LIGHT SECTION before BURGUNDY ══════ -->

<section id="promise" class="r">
  <span class="promise-eyebrow">The standard</span>
  <h2 class="promise-h serif">Built properly. <em>Delivered on time.</em></h2>
  <p class="promise-sub">Three things every order gets &mdash; without exceptions, without negotiation, without small print.</p>
  <span class="promise-line"></span>
  <div class="promise-grid">
    <div class="promise-card">
      <span class="promise-num">01</span>
      <h3 class="promise-ttl serif">Real availability</h3>
      <p class="promise-txt">Designed around what is actually fresh on the day of your order &mdash; never from a fixed catalog.</p>
    </div>
    <div class="promise-card">
      <span class="promise-num">02</span>
      <h3 class="promise-ttl serif">Direct confirmation</h3>
      <p class="promise-txt">Every order is confirmed by us before it leaves the studio. Timing, address, recipient &mdash; checked, not assumed.</p>
    </div>
    <div class="promise-card">
      <span class="promise-num">03</span>
      <h3 class="promise-ttl serif">Hand delivery</h3>
      <p class="promise-txt">Across Greater Boston, by us or a courier we trust personally. On time, or you hear from us first.</p>
    </div>
  </div>
</section>

<!-- ══════ FINAL CTA ══════ -->

<section id="final">
  <div class="final-inner">
    <span class="final-eyebrow r">Tell us what you need</span>
    <h2 class="final-h serif r d1">If it matters &mdash; <em>we handle it.</em></h2>
    <p class="final-sub r d2">Send us a date, a budget, a feeling, a reference photo &mdash; whatever you have. We&rsquo;ll take it from there.</p>
    <div class="final-btns r d3">
      <a href="/custom-orders" class="btn btn-ivory">Start an order</a>
      <a href="tel:+1XXXXXXXXXX" class="btn btn-outline-ivory">Call the studio</a>
    </div>
  </div>
</section>

<!-- FOOTER -->

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
</script>

<?php get_footer(); ?>
