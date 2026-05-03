<?php
/**
 * Template Name: BF Journal
 * Boston Flowers — Journal page
 * Slug: /journal
 *
 * ДИНАМИЧЕСКИЕ БЛОКИ:
 * - #live-posts: fetch('/api/journal-posts?limit=6')
 *   JSON формат: [{"slug","title","excerpt","category","date","readTime","image"}]
 *   Или инжектировать .live-card в #livePostsGrid серверно — fetch не вызывается
 * - #articlesGrid: новые посты добавлять как .art-card с data-cat и data-pop
 * - Все новые карточки ОБЯЗАТЕЛЬНО с классом .r для scroll reveal
 */

add_action('wp_head', function() { ?>
<title>Studio Journal | Boston Flowers — Floral Design, Guides & Ideas</title>
<meta name="description" content="Floral design guides, wedding flower costs, event inspiration, and flower care tips from Boston Flowers studio. Real insights — no filler.">
<link rel="canonical" href="https://bostonflowers.com/journal">
<meta property="og:title" content="Studio Journal | Boston Flowers">
<meta property="og:description" content="Floral design guides, wedding flower costs, event inspiration, and flower care from Boston's premium floral studio.">
<meta property="og:image" content="/assets/images/journal-og.jpg">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {"@type":"Florist","name":"Boston Flowers","@id":"https://bostonflowers.com/#florist","url":"https://bostonflowers.com/","telephone":"+16178173157","priceRange":"$$$","address":{"@type":"PostalAddress","streetAddress":"267 North Beacon St","addressLocality":"Brighton","addressRegion":"MA","postalCode":"02135","addressCountry":"US"},"geo":{"@type":"GeoCoordinates","latitude":42.3601,"longitude":-71.1531},"openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"08:00","closes":"20:00"}],"sameAs":["https://www.instagram.com/boston.flowers"],"areaServed":["Boston","Brighton","Cambridge","Newton","Watertown"]},
    {"@type":"Blog","@id":"https://bostonflowers.com/journal#blog","name":"Boston Flowers Studio Journal","description":"Expert floral design guides, wedding flower costs, event inspiration, and flower care tips.","url":"https://bostonflowers.com/journal","inLanguage":"en-US","publisher":{"@id":"https://bostonflowers.com/#florist"}},
    {"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Home","item":"https://bostonflowers.com/"},{"@type":"ListItem","position":2,"name":"Journal","item":"https://bostonflowers.com/journal"}]}
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669" class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-journal-bg" aria-hidden="true">JOURNAL</div>
  <div class="container">
    <div class="hero-inner">
      <div>
        <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Studio Journal</span></div>
        <h1 class="hero-h1 serif">Floral design,<br><em>explained properly.</em></h1>
        <p class="hero-sub">Guides, ideas, and real event insights from the studio. No filler, no generic tips &mdash; just what actually matters when flowers are involved.</p>
        <div class="hero-btns">
          <a href="#articles" class="btn btn-ghost">Explore articles ↓</a>
          <a href="/custom-orders" class="btn-text">Request proposal →</a>
        </div>
      </div>
      <div class="hero-stats r">
        <a href="#articles" class="hero-stat">
          <div class="hero-stat-num">24</div>
          <div class="hero-stat-info">
            <span class="hero-stat-lbl">Articles</span>
            <span class="hero-stat-sub">Guides &amp; insights</span>
          </div>
        </a>
        <a href="#topics" class="hero-stat">
          <div class="hero-stat-num">5</div>
          <div class="hero-stat-info">
            <span class="hero-stat-lbl">Topics</span>
            <span class="hero-stat-sub">Weddings, events, care&hellip;</span>
          </div>
        </a>
        <a href="#guides" class="hero-stat">
          <div class="hero-stat-num">3</div>
          <div class="hero-stat-info">
            <span class="hero-stat-lbl">Complete guides</span>
            <span class="hero-stat-sub">Start to finish</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- STICKY CATEGORY NAV -->
<div id="cat-nav">
  <div class="cat-nav-inner">
    <div class="cat-pills" id="catPills">
      <div class="cat-indicator" id="catIndicator"></div>
      <button class="cat-pill active" data-cat="all">All <span class="cat-pill-count">24</span></button>
      <button class="cat-pill" data-cat="weddings">Weddings <span class="cat-pill-count">8</span></button>
      <button class="cat-pill" data-cat="events">Events <span class="cat-pill-count">5</span></button>
      <button class="cat-pill" data-cat="corporate">Corporate <span class="cat-pill-count">4</span></button>
      <button class="cat-pill" data-cat="flower-care">Flower care <span class="cat-pill-count">4</span></button>
      <button class="cat-pill" data-cat="inspiration">Inspiration <span class="cat-pill-count">3</span></button>
    </div>
    <div class="cat-toggle" id="catToggle">
      <button class="cat-toggle-btn active" data-sort="latest">Latest</button>
      <button class="cat-toggle-btn" data-sort="popular">Popular</button>
    </div>
  </div>
</div>

<!-- FEATURED ARTICLE -->
<section id="featured">
  <div class="container">
    <a href="/wedding-flowers-cost-boston-2026/" class="featured-card r">
      <div class="featured-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/wedding-flowers-cost-boston-2026-guide.webp');"></div>
      <div class="featured-overlay"></div>
      <div class="featured-meta-top">
        <span class="featured-tag-pill">Weddings &middot; Guide</span>
        <span class="featured-meta-item">April 2026</span>
        <span class="featured-meta-item">8 min read</span>
      </div>
      <div class="featured-content">
        <span class="featured-label">Featured article</span>
        <h2 class="featured-h2 serif">How much do wedding flowers cost<br>in Boston? <em>(2026 complete guide)</em></h2>
        <span class="featured-cta">Read article →</span>
      </div>
    </a>
  </div>
</section>

<!-- EDITORIAL DIVIDER -->
<div class="editorial-divider">
  <div class="editorial-divider-inner">
    <p class="ed-text">What people search for. <em>What actually matters.</em></p>
    <div class="ed-line"></div>
  </div>
</div>

<!-- ARTICLE GRID -->
<section id="articles">
  <div class="container">
    <div class="articles-grid" id="articlesGrid">

      <a href="/how-to-design-dinner-table-flowers/" class="art-card art-medium r d1" data-cat="events" data-pop="1">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/event-flowers-dinner-table.webp" alt="Floral centerpiece on a dinner table with candles" title="Designing a Dinner Table with Flowers" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Events</div>
          <h3 class="art-title serif">How to design a dinner table with flowers</h3>
          <p class="art-desc">Scale, height, spacing, and what not to do.</p>
          <div class="art-meta"><span>April 2026</span><span class="art-read">5 min read</span></div>
        </div>
      </a>

      <a href="/how-to-keep-flowers-fresh-longer/" class="art-card art-medium r d2" data-cat="flower-care" data-pop="2">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/how-to-keep-flowers-fresh.webp" alt="Close-up of fresh flowers in a vase with clear water" title="How to Keep Flowers Fresh Longer" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Flower care</div>
          <h3 class="art-title serif">How to keep flowers fresh longer</h3>
          <p class="art-desc">What actually works &mdash; and what&rsquo;s a myth.</p>
          <div class="art-meta"><span>March 2026</span><span class="art-read">4 min read</span></div>
        </div>
      </a>

      <a href="/what-flowers-last-the-longest/" class="art-card r d3" data-cat="flower-care" data-pop="3">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/best-long-lasting-flowers-vase-life-boston.webp" alt="Top-down view of a diverse floral arrangement featuring vibrant orchids, carnations, and alstroemeria, known for their exceptional vase life, curated by Boston Flowers." title="Expert Guide: Which Flowers Last the Longest? | Boston Flowers 2026" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Flower care</div>
          <h3 class="art-title serif">What flowers last the longest?</h3>
          <p class="art-desc">Ranked by vase life — roses, orchids, and what surprises most people.</p>
          <div class="art-meta"><span>February 2026</span><span class="art-read">3 min read</span></div>
        </div>
      </a>

      <a href="/ceremony-arches-what-works/" class="art-card r d4" data-cat="weddings" data-pop="5">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/wedding-ceremony-arch-flowers.webp" alt="Beautiful floral ceremony arch for a wedding" title="Ceremony Arches: Design and Structure" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Weddings</div>
          <h3 class="art-title serif">Ceremony arches: what works and what doesn&rsquo;t</h3>
          <p class="art-desc">Size, density, structure, and common mistakes that show up in photos.</p>
          <div class="art-meta"><span>February 2026</span><span class="art-read">6 min read</span></div>
        </div>
      </a>

      <a href="/why-office-flowers-matter/" class="art-card r d5" data-cat="corporate" data-pop="7">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/corporate-flowers-office-boston.webp" alt="Elegant floral arrangement in a modern office reception" title="Why Office Flowers Matter for Business" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Corporate</div>
          <h3 class="art-title serif">Why office flowers matter more than most think</h3>
          <p class="art-desc">How florals affect how clients read a space.</p>
          <div class="art-meta"><span>January 2026</span><span class="art-read">4 min read</span></div>
        </div>
      </a>

      <a href="/roses-vs-peonies-weddings/" class="art-card r d6" data-cat="weddings" data-pop="4">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/roses-vs-peonies-wedding.webp" alt="Comparison of lush roses and peonies in a wedding bouquet" title="Roses vs. Peonies for Weddings" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Weddings</div>
          <h3 class="art-title serif">Roses vs. peonies for weddings</h3>
          <p class="art-desc">Availability, cost, visual weight, and what each flower says in a composition.</p>
          <div class="art-meta"><span>January 2026</span><span class="art-read">5 min read</span></div>
        </div>
      </a>

      <a href="/seasonal-flowers-boston/" class="art-card r d7" data-cat="inspiration" data-pop="6">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/seasonal-flowers-boston-2026.webp" alt="Assortment of seasonal flowers in Boston" title="Seasonal Flowers in Boston" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Inspiration</div>
          <h3 class="art-title serif">Seasonal flowers in Boston — month by month</h3>
          <p class="art-desc">A practical calendar for anyone planning a wedding or event.</p>
          <div class="art-meta"><span>January 2026</span><span class="art-read">4 min read</span></div>
        </div>
      </a>

      <a href="/flowers-brand-launches-what-works/" class="art-card r d8" data-cat="events" data-pop="8">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/brand-launch-flowers.webp" alt="Minimalist floral arrangement at a brand launch event" title="Flowers for Brand Launches" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Events</div>
          <h3 class="art-title serif">Flowers at brand launches: what actually works</h3>
          <p class="art-desc">When florals support visual identity and when they fight it.</p>
          <div class="art-meta"><span>December 2025</span><span class="art-read">5 min read</span></div>
        </div>
      </a>

      <a href="/how-to-choose-wedding-florist-boston/" class="art-card r d9" data-cat="weddings" data-pop="9">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/how-to-choose-wedding-florist-boston.webp" alt="Florist working on a wedding bouquet with hands visible" title="How to Choose a Wedding Florist in Boston" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Weddings</div>
          <h3 class="art-title serif">How to choose a wedding florist in Boston</h3>
          <p class="art-desc">What questions to ask, what red flags to watch for.</p>
          <div class="art-meta"><span>December 2025</span><span class="art-read">6 min read</span></div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- LIVE POSTS — DYNAMIC SECTION -->
<!--
  ════════════════════════════════════════════════════════
  АВТОПОСТИНГ — КАК ЭТО РАБОТАЕТ

  Вариант 1 — Backend inject (как WinFix):
    Найди маркер JOURNAL_POSTS_INSERT и замени его
    готовыми HTML-карточками через string replace при деплое
    или через webhook endpoint.

  Вариант 2 — JS fetch (автоматически):
    Добавь endpoint: GET /api/journal-posts?limit=6
    Он должен вернуть JSON массив:
    [
      {
        "slug": "wedding-bouquet-guide",
        "title": "...",
        "excerpt": "...",
        "category": "Weddings",
        "date": "April 2026",
        "readTime": "5 min read",
        "image": "/assets/images/posts/slug.jpg"
      }
    ]
    JS ниже автоматически подтянет и отрисует карточки.

  Вариант 3 — Смешанный:
    Inject через backend + JS-refresh каждые 5 минут
    для living page без перезагрузки.

  Schema.org разметка проставляется автоматически в JS.
  ════════════════════════════════════════════════════════
-->
<section id="live-posts">
  <div class="container">
    <div class="live-hd r">
      <p class="lbl">From the studio</p>
      <h2 class="live-title serif">Latest<br><em>published.</em></h2>
      <div class="live-badge">Auto-updating</div>
    </div>

    <div class="live-posts-grid" id="livePostsGrid" itemscope itemtype="https://schema.org/ItemList">
      <a href="/how-many-roses-to-buy/" class="live-card r d1" itemprop="itemListElement" itemscope itemtype="https://schema.org/Article">
        <meta itemprop="position" content="1">
        <div class="live-card-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/100-red-roses-v6-perfect.webp" alt="How many roses should you buy?" loading="lazy"></div>
        <div class="live-card-body">
          <span class="live-card-tag" itemprop="articleSection">Roses / Gifts</span>
          <h3 class="live-card-title serif" itemprop="headline">How many roses <br><em>should you buy?</em></h3>
          <p class="live-card-excerpt" itemprop="description">What different rose counts actually mean — and how to choose the right one for maximum impact.</p>
          <div class="live-card-meta">
            <span itemprop="datePublished">April 2026</span>
            <span class="live-card-read">4 min read</span>
          </div>
        </div>
      </a>
    </div>
    </div>

    <div style="text-align:center;margin-top:40px;" class="r">
      <a href="#articles" class="btn-text" style="color:var(--rose);">View all articles →</a>
    </div>
  </div>
</section>

<!-- POPULAR TOPICS — CHIPS -->
<section id="topics">
  <div class="container">
    <div class="topics-grid">
      <div>
        <p class="lbl lbl-dark r">Common questions</p>
        <h2 class="topics-title serif r d1">What people<br><em>actually ask.</em></h2>
        <p class="topics-sub r d2">The questions we get most often &mdash; answered directly in our guides.</p>
        <span class="topics-label r d2">Popular searches</span>
      </div>
      <div class="r d1">
        <div class="topic-chips">
          <a href="/how-many-roses-to-buy/" class="topic-chip serif">How many roses should you buy? <span class="topic-chip-arr">→</span></a>
          <a href="/wedding-flowers-cost-boston-2026/" class="topic-chip serif">How much do wedding flowers cost? <span class="topic-chip-arr">→</span></a>
          <a href="/how-to-keep-flowers-fresh-longer/" class="topic-chip serif">How do you keep flowers fresh longer? <span class="topic-chip-arr">→</span></a>
          <a href="/what-flowers-last-the-longest/" class="topic-chip serif">What flowers last the longest in a vase? <span class="topic-chip-arr">→</span></a>
          <a href="/how-to-design-dinner-table-flowers/" class="topic-chip serif">How to design a dinner table with flowers? <span class="topic-chip-arr">→</span></a>
          <a href="/seasonal-flowers-boston/" class="topic-chip serif">What flowers are in season in Boston? <span class="topic-chip-arr">→</span></a>
          <a href="/how-to-choose-wedding-florist-boston/" class="topic-chip serif">How do I choose a wedding florist? <span class="topic-chip-arr">→</span></a>
          <a href="/why-office-flowers-matter/" class="topic-chip serif">Are office flowers worth it for businesses? <span class="topic-chip-arr">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GUIDES — PILLAR CONTENT -->
<section id="guides">
  <div class="container">
    <div class="guides-hd">
      <p class="lbl r">Complete guides</p>
      <h2 class="guides-title serif r d1">Everything you need,<br><em>in one place.</em></h2>
    </div>
    <div class="guides-grid">
      <a href="/wedding-flowers-guide/" class="guide-card r">
        <div class="guide-num">01</div>
        <span class="guide-tag">Weddings</span>
        <h3 class="guide-title serif">The complete wedding flowers guide</h3>
        <p class="guide-desc">From budgeting to booking to what to expect on the day. Everything a couple needs to know about working with a florist.</p>
        <div class="guide-topics">
          <span class="guide-topic-item">How much do wedding flowers cost?</span>
          <span class="guide-topic-item">Bridal bouquets, ceremony, reception tables</span>
          <span class="guide-topic-item">When to book and what to prepare</span>
          <span class="guide-topic-item">Questions to ask your florist</span>
        </div>
        <span class="guide-link">Read guide →</span>
      </a>
      <a href="/event-flowers-guide/" class="guide-card r d1">
        <div class="guide-num">02</div>
        <span class="guide-tag">Events</span>
        <h3 class="guide-title serif">Flowers for private &amp; brand events</h3>
        <p class="guide-desc">What works at dinners, launches, and VIP receptions &mdash; and the difference between decoration and atmosphere.</p>
        <div class="guide-topics">
          <span class="guide-topic-item">Table design: scale, height, density</span>
          <span class="guide-topic-item">Entry pieces and statement installations</span>
          <span class="guide-topic-item">Brand event florals that don&rsquo;t clash</span>
        </div>
        <span class="guide-link">Read guide →</span>
      </a>
      <a href="/flower-care/" class="guide-card r d2">
        <div class="guide-num">03</div>
        <span class="guide-tag">Flower care</span>
        <h3 class="guide-title serif">How to make your flowers last</h3>
        <p class="guide-desc">Water chemistry, temperature, trimming, and what not to do. The practical guide.</p>
        <div class="guide-topics">
          <span class="guide-topic-item">Which flowers last the longest</span>
          <span class="guide-topic-item">Correct water and temperature</span>
          <span class="guide-topic-item">Common mistakes that shorten vase life</span>
        </div>
        <span class="guide-link">Read guide →</span>
      </a>
    </div>
  </div>
</section>

<!-- SOFT CTA -->
<section id="journal-cta">
  <div class="container">
    <div class="r" style="text-align:center">
      <p class="jcta-eyebrow">Ready to order?</p>
      <h2 class="jcta-title serif">Still not sure what fits<br><em>your event?</em></h2>
      <p class="jcta-sub">We&rsquo;ll point you in the right direction. No pressure, no templates &mdash; just a direct conversation.</p>
      <div class="jcta-btns">
        <a href="/custom-orders" class="btn btn-wine">Request Proposal</a>
        <a href="https://wa.me/19172514669?text=Hi%2C+I'd+like+to+discuss+a+floral+project." class="btn-text">WhatsApp →</a>
      </div>
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
setTimeout(()=>document.querySelectorAll('.r:not(.on)').forEach(el=>el.classList.add('on')),0);

// NAV handled by header-footer.js
// WA FLOAT
window.addEventListener('scroll',()=>{document.getElementById('waFloat').classList.toggle('visible',scrollY>300);},{passive:true});

// STICKY CATEGORY BAR
const catNav=document.getElementById('cat-nav');
let catStuck=false;
function checkCatStuck(){
  const rect=catNav.getBoundingClientRect();
  const navH=parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h'))||72;
  const stuck=rect.top<=navH;
  if(stuck!==catStuck){catStuck=stuck;catNav.classList.toggle('stuck',stuck);}
}
window.addEventListener('scroll',checkCatStuck,{passive:true});

// CATEGORY SLIDING INDICATOR
const indicator=document.getElementById('catIndicator');
function moveIndicator(pill){
  if(!pill||!indicator)return;
  const pillsEl=document.getElementById('catPills');
  const pillRect=pill.getBoundingClientRect();
  const pillsRect=pillsEl.getBoundingClientRect();
  // offset relative to cat-pills container itself
  const left=pillRect.left - pillsRect.left + pillsEl.scrollLeft;
  indicator.style.left=left+'px';
  indicator.style.width=pillRect.width+'px';
}
// Init indicator on first active pill
window.addEventListener('load',()=>{
  const active=document.querySelector('.cat-pill.active');
  if(active)moveIndicator(active);
});

// CATEGORY FILTER
const pills=document.querySelectorAll('.cat-pill');
const cards=document.querySelectorAll('.art-card');
let currentCat='all';
pills.forEach(pill=>{
  pill.addEventListener('click',()=>{
    pills.forEach(p=>p.classList.remove('active'));
    pill.classList.add('active');
    moveIndicator(pill);
    currentCat=pill.dataset.cat;
    cards.forEach((card,i)=>{
      const show=currentCat==='all'||card.dataset.cat===currentCat;
      card.style.display=show?'block':'none';
      if(show){
        card.classList.remove('on');
        setTimeout(()=>card.classList.add('on'),i*50);
      }
    });
  });
});

// LATEST / POPULAR TOGGLE
const toggleBtns=document.querySelectorAll('.cat-toggle-btn');
const grid=document.getElementById('articlesGrid');
const originalOrder=[...grid.querySelectorAll('.art-card')];
toggleBtns.forEach(btn=>{
  btn.addEventListener('click',()=>{
    toggleBtns.forEach(b=>b.classList.remove('active'));
    btn.classList.add('active');
    const sort=btn.dataset.sort;
    const items=[...grid.querySelectorAll('.art-card')];
    if(sort==='popular'){
      items.sort((a,b)=>parseInt(a.dataset.pop||99)-parseInt(b.dataset.pop||99));
    }else{
      originalOrder.forEach(item=>grid.appendChild(item));
      return;
    }
    items.forEach(item=>{
      item.classList.remove('on');
      grid.appendChild(item);
    });
    setTimeout(()=>items.forEach((item,i)=>{setTimeout(()=>item.classList.add('on'),i*60);}),50);
  });
});

// BURGER handled by header-footer.js
// SMOOTH SCROLL
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const t=document.querySelector(a.getAttribute('href'));
    if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'});}
  });
});

// ═══════════════════════════════════════════════════════
// LIVE POSTS — DYNAMIC LOADER
// ═══════════════════════════════════════════════════════
// Builds a live-card HTML string from a post object
function buildLiveCard(post,index){
  const imgHtml=post.image
    ? `<img src="${post.image}" alt="${post.title}" loading="lazy">`
    : `<div class="live-card-img-ph">ФОТО · ${post.category}</div>`;
  return `
    <a href="/journal/${post.slug}" class="live-card r d${Math.min(index+1,9)}"
       itemprop="itemListElement" itemscope itemtype="https://schema.org/Article">
      <meta itemprop="position" content="${index+1}">
      <div class="live-card-img">${imgHtml}</div>
      <div class="live-card-body">
        <span class="live-card-tag" itemprop="articleSection">${post.category||''}</span>
        <h3 class="live-card-title serif" itemprop="headline">${post.title}</h3>
        <p class="live-card-excerpt" itemprop="description">${post.excerpt||''}</p>
        <div class="live-card-meta">
          <span itemprop="datePublished">${post.date||''}</span>
          <span class="live-card-read">${post.readTime||'Read'}</span>
        </div>
      </div>
    </a>`;
}

// Render posts into grid
function renderLivePosts(posts){
  const grid=document.getElementById('livePostsGrid');
  const loader=document.getElementById('livePostsLoading');
  if(loader)loader.remove();
  if(!posts||!posts.length){
    grid.innerHTML='<div class="live-posts-empty">New articles coming soon.</div>';
    return;
  }
  grid.innerHTML=posts.map((p,i)=>buildLiveCard(p,i)).join('');
  // Trigger reveal on new cards
  grid.querySelectorAll('.r').forEach(el=>ro.observe(el));
}

// Fetch from API endpoint (adjust URL to match your backend)
async function loadLivePosts(){
  const grid=document.getElementById('livePostsGrid');
  // If backend already injected posts via JOURNAL_POSTS_INSERT, grid will have content
  if(grid.querySelectorAll('.live-card').length>0){
    const loader=document.getElementById('livePostsLoading');
    if(loader)loader.remove();
    return;
  }
  try{
    // ── CHANGE THIS URL to your actual endpoint ──
    const res=await fetch('/api/journal-posts?limit=6',{method:'GET',headers:{'Accept':'application/json'}});
    if(!res.ok)throw new Error('no endpoint');
    const posts=await res.json();
    renderLivePosts(posts);
  }catch(e){
    // API not ready — show placeholder cards
    const placeholders=[
      {slug:"/how-many-roses-to-buy/",title:"How many roses <br><em>should you buy?</em>",excerpt:"What different rose counts actually mean — and how to choose the right one for maximum impact.",category:"Roses / Gifts",date:"April 2026",readTime:"4 min",image:"https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/100-red-roses-v6-perfect.webp"},
    ];
    renderLivePosts(placeholders);
  }
}
loadLivePosts();
// ═══════════════════════════════════════════════════════

// CART
(function(){const count=0;const badge=document.getElementById('cartCount');if(count>0&&badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items');}})();
</script>

<?php get_footer(); ?>
