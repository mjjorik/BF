<?php
/**
 * Template Name: Журнал (RU)
 * Boston Flowers — Journal page
 * Slug: /journal
 */

add_action('wp_head', function() { ?>
<title>Журнал студии | Boston Flowers — Гиды, идеи и дизайн</title>
<meta name=description content="Гид по флористике, стоимость свадебных цветов, идеи для событий и советы по уходу от студии Boston Flowers. Реальный опыт без лишних слов.">
<link rel="canonical" href="https://bostonflowers.com/journal">
<meta property="og:title" content="Журнал студии | Boston Flowers">
<meta property="og:description" content="Гиды по дизайну, стоимость свадебных цветов, вдохновение для событий и уход за цветами от премиальной студии Бостона.">
<meta property="og:image" content="/assets/images/journal-og.jpg">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {"@type":"Florist","name":"Boston Flowers","@id":"https://bostonflowers.com/#florist","url":"https://bostonflowers.com/","telephone":"+16178173157","priceRange":"2392003$","address":{"@type":"PostalAddress","streetAddress":"267 North Beacon St","addressLocality":"Brighton","addressRegion":"MA","postalCode":"02135","addressCountry":"US"},"geo":{"@type":"GeoCoordinates","latitude":42.3601,"longitude":-71.1531},"openingHoursSpecification":[{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"08:00","closes":"20:00"}],"sameAs":["https://www.instagram.com/boston.flowers"],"areaServed":["Boston","Brighton","Cambridge","Newton","Watertown"]},
    {"@type":"Blog","@id":"https://bostonflowers.com/journal#blog","name":"Boston Flowers Studio Journal","description":"Expert floral design guides, wedding flower costs, event inspiration, and flower care tips.","url":"https://bostonflowers.com/journal","inLanguage":"ru-RU","publisher":{"@id":"https://bostonflowers.com/#florist"}},
    {"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"Главная","item":"https://bostonflowers.com/"},{"@type":"ListItem","position":2,"name":"Журнал","item":"https://bostonflowers.com/journal"}]}
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
        <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Журнал студии</span></div>
        <h1 class="hero-h1 serif">Флористический журнал:<br><em>искусство и практика.</em></h1>
        <p class="hero-sub">Практические гиды, идеи и реальный опыт нашей студии. Только то, что действительно важно при выборе цветов.</p>
        <div class="hero-btns">
          <a href="#articles" class="btn btn-ghost">Читать статьи ↓</a>
          <a href="/custom-orders" class="btn-text">Заказать проект →</a>
        </div>
      </div>
      <div class="hero-stats r">
        <a href="#articles" class="hero-stat">
          <div class="hero-stat-num">24</div>
          <div class="hero-stat-info">
            <span class="hero-stat-lbl">Статьи</span>
            <span class="hero-stat-sub">Гиды и опыт</span>
          </div>
        </a>
        <a href="#topics" class="hero-stat">
          <div class="hero-stat-num">5</div>
          <div class="hero-stat-info">
            <span class="hero-stat-lbl">Темы</span>
            <span class="hero-stat-sub">Свадьбы, события, уход&hellip;</span>
          </div>
        </a>
        <a href="#guides" class="hero-stat">
          <div class="hero-stat-num">3</div>
          <div class="hero-stat-info">
            <span class="hero-stat-lbl">Полные гиды</span>
            <span class="hero-stat-sub">От и до</span>
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
      <button class="cat-pill active" data-cat="all">Все <span class="cat-pill-count">24</span></button>
      <button class="cat-pill" data-cat="weddings">Свадьбы <span class="cat-pill-count">8</span></button>
      <button class="cat-pill" data-cat="events">События <span class="cat-pill-count">5</span></button>
      <button class="cat-pill" data-cat="corporate">Бизнес <span class="cat-pill-count">4</span></button>
      <button class="cat-pill" data-cat="flower-care">Уход <span class="cat-pill-count">4</span></button>
      <button class="cat-pill" data-cat="inspiration">Вдохновение <span class="cat-pill-count">3</span></button>
    </div>
    <div class="cat-toggle" id="catToggle">
      <button class="cat-toggle-btn active" data-sort="latest">Последние</button>
      <button class="cat-toggle-btn" data-sort="popular">Популярные</button>
    </div>
  </div>
</div>

<!-- FEATURED ARTICLE -->
<section id="featured">
  <div class="container">
    <a href="/wedding-flowers-cost-boston-2026-2/" class="featured-card r">
      <div class="featured-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/wedding-flowers-cost-boston-2026-guide.webp');"></div>
      <div class="featured-overlay"></div>
      <div class="featured-meta-top">
        <span class="featured-tag-pill">Свадьбы &middot; Гид</span>
        <span class="featured-meta-item">Апрель 2026</span>
        <span class="featured-meta-item">8 мин</span>
      </div>
      <div class="featured-content">
        <span class="featured-label">Главная тема</span>
        <h2 class="featured-h2 serif">Сколько стоит флористика на свадьбу<br>в Бостоне? <em>(полный гид 2026)</em></h2>
        <span class="featured-cta">Читать статью →</span>
      </div>
    </a>
  </div>
</section>

<!-- EDITORIAL DIVIDER -->
<div class="editorial-divider">
  <div class="editorial-divider-inner">
    <p class="ed-text">Что ищут люди. <em>Что важно на самом деле.</em></p>
    <div class="ed-line"></div>
  </div>
</div>

<!-- ARTICLE GRID -->
<section id="articles">
  <div class="container">
    <div class="articles-grid" id="articlesGrid">

      <a href="/oformlenie-obidennogo-stola-cvetami/" class="art-card art-medium r d1" data-cat="events" data-pop="1">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/event-flowers-dinner-table.webp" alt="Floral centerpiece on a dinner table with candles" title="Designing a Dinner Table with Flowers" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">События</div>
          <h3 class="art-title serif">Как оформить обеденный стол цветами</h3>
          <p class="art-desc">Масштаб, высота, расстановка и ошибки.</p>
          <div class="art-meta"><span>Апрель 2026</span><span class="art-read">5 мин</span></div>
        </div>
      </a>

      <a href="/kak-sohranit-cvety-svezhimi/" class="art-card art-medium r d2" data-cat="flower-care" data-pop="2">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/how-to-keep-flowers-fresh.webp" alt="Close-up of fresh flowers in a vase with clear water" title="How to Keep Flowers Fresh Longer" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Уход</div>
          <h3 class="art-title serif">Как сохранить цветы свежими</h3>
          <p class="art-desc">Что работает на самом деле, а что &mdash; миф.</p>
          <div class="art-meta"><span>Март 2026</span><span class="art-read">4 мин</span></div>
        </div>
      </a>

      <a href="/kakie-cvety-stoyat-dolshe/" class="art-card r d3" data-cat="flower-care" data-pop="3">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/best-long-lasting-flowers-vase-life-boston.webp" alt="Top-down view of a diverse floral arrangement featuring vibrant orchids, carnations, and alstroemeria, known for their exceptional vase life, curated by Boston Flowers." title="Expert Guide: Which Flowers Last the Longest? | Boston Flowers 2026" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Уход</div>
          <h3 class="art-title serif">Какие цветы стоят дольше всех?</h3>
          <p class="art-desc">Рейтинг стойкости: от роз до экзотики.</p>
          <div class="art-meta"><span>Февраль 2026</span><span class="art-read">3 мин</span></div>
        </div>
      </a>

      <a href="/svadebnye-arki-chto-rabotaet/" class="art-card r d4" data-cat="weddings" data-pop="5">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/wedding-ceremony-arch-flowers.webp" alt="Beautiful floral ceremony arch for a wedding" title="Ceremony Arches: Design and Structure" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Свадьбы</div>
          <h3 class="art-title serif">Свадебные арки: что работает, а что нет</h3>
          <p class="art-desc">Размер, плотность и ошибки, заметные на фото.</p>
          <div class="art-meta"><span>Февраль 2026</span><span class="art-read">6 мин</span></div>
        </div>
      </a>

      <a href="/zachem-cvety-v-ofise/" class="art-card r d5" data-cat="corporate" data-pop="7">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/corporate-flowers-office-boston.webp" alt="Elegant floral arrangement in a modern office reception" title="Why Office Flowers Matter for Business" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Бизнес</div>
          <h3 class="art-title serif">Почему цветы в офисе важнее, чем кажется</h3>
          <p class="art-desc">Как флористика меняет восприятие бренда.</p>
          <div class="art-meta"><span>Январь 2026</span><span class="art-read">4 мин</span></div>
        </div>
      </a>

      <a href="/rozy-ili-piony-dlya-svadby/" class="art-card r d6" data-cat="weddings" data-pop="4">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/roses-vs-peonies-wedding.webp" alt="Comparison of lush roses and peonies in a wedding bouquet" title="Roses vs. Peonies for Weddings" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Свадьбы</div>
          <h3 class="art-title serif">Розы или пионы для свадьбы?</h3>
          <p class="art-desc">Доступность, цена и визуальный вес в букете.</p>
          <div class="art-meta"><span>Январь 2026</span><span class="art-read">5 мин</span></div>
        </div>
      </a>

      <a href="/sezonnye-cvety-v-bostone/" class="art-card r d7" data-cat="inspiration" data-pop="6">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/seasonal-flowers-boston-2026.webp" alt="Assortment of seasonal flowers in Boston" title="Seasonal Flowers in Boston" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Вдохновение</div>
          <h3 class="art-title serif">Сезонные цветы в Бостоне: календарь</h3>
          <p class="art-desc">Практичный гид для тех, кто планирует событие.</p>
          <div class="art-meta"><span>Январь 2026</span><span class="art-read">4 мин</span></div>
        </div>
      </a>

      <a href="/cvety-na-prezentaciyah-brendov/" class="art-card r d8" data-cat="events" data-pop="8">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/brand-launch-flowers.webp" alt="Minimalist floral arrangement at a brand launch event" title="Flowers for Brand Launches" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">События</div>
          <h3 class="art-title serif">Цветы на презентациях: что работает</h3>
          <p class="art-desc">Когда декор помогает бренду, а когда мешает.</p>
          <div class="art-meta"><span>Декабрь 2025</span><span class="art-read">5 мин</span></div>
        </div>
      </a>

      <a href="/kak-vybrat-svadebnogo-florista-v-bostone/" class="art-card r d9" data-cat="weddings" data-pop="9">
        <div class="art-img"><div class="art-img-inner"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/how-to-choose-wedding-florist-boston.webp" alt="Florist working on a wedding bouquet with hands visible" title="How to Choose a Wedding Florist in Boston" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;"></div></div>
        <div class="art-body">
          <div class="art-tag">Свадьбы</div>
          <h3 class="art-title serif">Как выбрать свадебного флориста в Бостоне</h3>
          <p class="art-desc">Какие вопросы задать и на что обратить внимание.</p>
          <div class="art-meta"><span>Декабрь 2025</span><span class="art-read">6 мин</span></div>
        </div>
      </a>

    </div>
  </div>
</section>

<!-- LIVE POSTS — DYNAMIC SECTION -->
<section id="live-posts">
  <div class="container">
    <div class="live-hd r">
      <p class="lbl">Из студии</p>
      <h2 class="live-title serif">Последнее<br><em>в блоге.</em></h2>
      <div class="live-badge">Обновляется</div>
    </div>

    <div class="live-posts-grid" id="livePostsGrid" itemscope itemtype="https://schema.org/ItemList">
      <a href="/skolko-roz-darit/" class="live-card r d1" itemprop="itemListElement" itemscope itemtype="https://schema.org/Article">
        <meta itemprop="position" content="1">
        <div class="live-card-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/100-red-roses-v6-perfect.webp" alt="Сколько роз стоит дарить?" loading="lazy"></div>
        <div class="live-card-body">
          <span class="live-card-tag" itemprop="articleSection">Розы / Подарки</span>
          <h3 class="live-card-title serif" itemprop="headline">Сколько роз <br><em>стоит дарить?</em></h3>
          <p class="live-card-excerpt" itemprop="description">Что означают разные числа в букете — и как выбрать идеальное количество.</p>
          <div class="live-card-meta">
            <span itemprop="datePublished">Апрель 2026</span>
            <span class="live-card-read">4 мин</span>
          </div>
        </div>
      </a>
    </div>
    </div>

    <div style="text-align:center;margin-top:40px;" class="r">
      <a href="#articles" class="btn-text" style="color:var(--rose);">Все статьи →</a>
    </div>
  </div>
</section>

<!-- POPULAR TOPICS — CHIPS -->
<section id="topics">
  <div class="container">
    <div class="topics-grid">
      <div>
        <p class="lbl lbl-dark r">Частые вопросы</p>
        <h2 class="topics-title serif r d1">О чем нас<br><em>действительно спрашивают.</em></h2>
        <p class="topics-sub r d2">Ответы на самые частые вопросы из нашей практики.</p>
        <span class="topics-label r d2">Популярные запросы</span>
      </div>
      <div class="r d1">
        <div class="topic-chips">
          <a href="/skolko-roz-darit/" class="topic-chip serif">Сколько роз стоит дарить? <span class="topic-chip-arr">→</span></a>
          <a href="/wedding-flowers-cost-boston-2026-2/" class="topic-chip serif">Сколько стоит флористика на свадьбу? <span class="topic-chip-arr">→</span></a>
          <a href="/kak-sohranit-cvety-svezhimi/" class="topic-chip serif">Как продлить жизнь букету? <span class="topic-chip-arr">→</span></a>
          <a href="/kakie-cvety-stoyat-dolshe/" class="topic-chip serif">Какие цветы самые стойкие? <span class="topic-chip-arr">→</span></a>
          <a href="/oformlenie-obidennogo-stola-cvetami/" class="topic-chip serif">Как оформить обеденный стол цветами? <span class="topic-chip-arr">→</span></a>
          <a href="/sezonnye-cvety-v-bostone/" class="topic-chip serif">Какие сейчас сезонные цветы? <span class="topic-chip-arr">→</span></a>
          <a href="/kak-vybrat-svadebnogo-florista-v-bostone/" class="topic-chip serif">Как найти своего флориста? <span class="topic-chip-arr">→</span></a>
          <a href="/zachem-cvety-v-ofise/" class="topic-chip serif">Нужны ли цветы в офисе? <span class="topic-chip-arr">→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- GUIDES — PILLAR CONTENT -->
<section id="guides">
  <div class="container">
    <div class="guides-hd">
      <p class="lbl r">Полные гиды</p>
      <h2 class="guides-title serif r d1">Всё, что нужно знать,<br><em>в одном разделе.</em></h2>
    </div>
    <div class="guides-grid">
      <a href="/wedding-flowers-guide/" class="guide-card r">
        <div class="guide-num">01</div>
        <span class="guide-tag">Свадьбы</span>
        <h3 class="guide-title serif">Полный гид по свадебной флористике</h3>
        <p class="guide-desc">От планирования бюджета до тайминга в день свадьбы. Всё, что нужно знать паре.</p>
        <div class="guide-topics">
          <span class="guide-topic-item">Сколько стоит флористика на свадьбу?</span>
          <span class="guide-topic-item">Букет невесты, церемония, декор залов</span>
          <span class="guide-topic-item">Сроки бронирования и подготовка</span>
          <span class="guide-topic-item">Какие вопросы задать флористу</span>
        </div>
        <span class="guide-link">Читать гид →</span>
      </a>
      <a href="/event-flowers-guide/" class="guide-card r d1">
        <div class="guide-num">02</div>
        <span class="guide-tag">События</span>
        <h3 class="guide-title serif">Цветы для частных и бренд-событий</h3>
        <p class="guide-desc">Что уместно на ужинах, презентациях и приемах — разница между декором и атмосферой.</p>
        <div class="guide-topics">
          <span class="guide-topic-item">Дизайн столов: масштаб, высота, плотность</span>
          <span class="guide-topic-item">Входные группы и инсталляции</span>
          <span class="guide-topic-item">Флористика для брендов без конфликта стилей</span>
        </div>
        <span class="guide-link">Читать гид →</span>
      </a>
      <a href="/flower-care/" class="guide-card r d2">
        <div class="guide-num">03</div>
        <span class="guide-tag">Уход</span>
        <h3 class="guide-title serif">Как продлить жизнь вашим цветам</h3>
        <p class="guide-desc">Химия воды, температура, подрезка и типичные ошибки. Практический гид.</p>
        <div class="guide-topics">
          <span class="guide-topic-item">Какие цветы стоят дольше всего</span>
          <span class="guide-topic-item">Правильная вода и температура</span>
          <span class="guide-topic-item">Ошибки, которые губят букет</span>
        </div>
        <span class="guide-link">Читать гид →</span>
      </a>
    </div>
  </div>
</section>

<!-- SOFT CTA -->
<section id="journal-cta">
  <div class="container">
    <div class="r" style="text-align:center">
      <p class="jcta-eyebrow">Готовы заказать?</p>
      <h2 class="jcta-title serif">Не уверены, что подойдет<br><em>вашему событию?</em></h2>
      <p class="jcta-sub">Мы подскажем верное направление. Никакого давления и шаблонов — только прямой диалог.</p>
      <div class="jcta-btns">
        <a href="/custom-orders" class="btn btn-wine">Обсудить проект</a>
        <a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+флористический+проект." class="btn-text">WhatsApp →</a>
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
  const left=pillRect.left - pillsRect.left + pillsEl.scrollLeft;
  indicator.style.left=left+'px';
  indicator.style.width=pillRect.width+'px';
}
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

// SMOOTH SCROLL
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const t=document.querySelector(a.getAttribute('href'));
    if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'});}
  });
});

// LIVE POSTS — DYNAMIC LOADER
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
          <span class="live-card-read">${post.readTime||'мин'}</span>
        </div>
      </div>
    </a>`;
}

function renderLivePosts(posts){
  const grid=document.getElementById('livePostsGrid');
  const loader=document.getElementById('livePostsLoading');
  if(loader)loader.remove();
  if(!posts||!posts.length){
    grid.innerHTML='<div class="live-posts-empty">Новые статьи скоро появятся.</div>';
    return;
  }
  grid.innerHTML=posts.map((p,i)=>buildLiveCard(p,i)).join('');
  grid.querySelectorAll('.r').forEach(el=>ro.observe(el));
}

async function loadLivePosts(){
  const grid=document.getElementById('livePostsGrid');
  if(grid.querySelectorAll('.live-card').length>0){
    const loader=document.getElementById('livePostsLoading');
    if(loader)loader.remove();
    return;
  }
  try{
    const res=await fetch('/api/journal-posts?limit=6',{method:'GET',headers:{'Accept':'application/json'}});
    if(!res.ok)throw new Error('no endpoint');
    const posts=await res.json();
    renderLivePosts(posts);
  }catch(e){
    const placeholders=[
      {slug:"/skolko-roz-darit/",title:"Сколько роз <br><em>стоит дарить?</em>",excerpt:"Что означают разные числа в букете — и как выбрать идеальное количество.",category:"Розы / Подарки",date:"Апрель 2026",readTime:"4 мин",image:"https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/100-red-roses-v6-perfect.webp"},
    ];
    renderLivePosts(placeholders);
  }
}
loadLivePosts();

// CART
(function(){const count=0;const badge=document.getElementById('cartCount');if(count>0&&badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items');}})();
</script>

<?php get_footer(); ?>
