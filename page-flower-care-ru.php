<?php
/**
 * Template Name: Уход за цветами (RU)
 * Boston Flowers — Гид по уходу page
 * Slug: /flower-care
 */

add_action('wp_head', function() { ?>

<title>Как сохранить цветы свежими | Boston Flowers Гид по уходу</title>
<meta name="description" content="Simple, practical flower care guide from Boston Flowers studio. Как сохранить срезанные цветы свежими — water, stems, temperature, and flower-specific tips for roses, tulips, hydrangeas, and peonies.">
<link rel="canonical" href="https://bostonflowers.com/flower-care">
<meta property="og:title" content="Гид по уходу | Boston Flowers">
<meta property="og:description" content="Как сохранить срезанные цветы свежими. Используется в нашей студии ежедневно.">
<meta property="og:image" content="https://bostonflowers.com/assets/images/flower-care-og.jpg">
<meta property="og:type" content="article">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Florist","LocalBusiness"],
      "@id": "https://bostonflowers.com/#business",
      "name": "Boston Flowers",
      "description": "Premium floral studio in Brighton, Boston. Same-day flower delivery, custom compositions, wedding florals across Greater Boston.",
      "url": "https://bostonflowers.com/",
      "telephone": "+16178173157",
      "email": "bostons.flowers@gmail.com",
      "priceRange": "$$$",
      "paymentAccepted": "Square, PayPal, Venmo, Zelle",
      "image": "https://bostonflowers.com/assets/images/flower-care-og.jpg",
      "logo": "https://bostonflowers.com/logo.png",
      "address": {"@type":"PostalAddress","streetAddress":"267 North Beacon St","addressLocality":"Brighton","addressRegion":"MA","postalCode":"02135","addressCountry":"US"},
      "geo": {"@type":"GeoCoordinates","latitude":42.3601,"longitude":-71.1531},
      "openingHoursSpecification": [{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"08:00","closes":"20:00"}],
      "sameAs": ["https://www.instagram.com/boston.flowers","https://maps.app.goo.gl/nPwTeq92z9QtTUGX7"],
      "makesOffer": [
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Same-Day Flower Delivery Boston","description":"Premium flower delivery across Greater Boston. Order by 10:30 AM for guaranteed same-day delivery."},"priceSpecification":{"@type":"PriceSpecification","minPrice":"20","priceCurrency":"USD"},"availability":"https://schema.org/InStock"},
        {"@type":"Offer","itemOffered":{"@type":"Service","name":"Custom Floral Arrangements","description":"Bespoke flower compositions crafted to order for any occasion."},"availability":"https://schema.org/InStock"}
      ]
    },
    {
      "@type": "HowTo",
      "name": "Как сохранить срезанные цветы свежими",
      "description": "Simple steps to extend the life of cut flowers at home, используемые в студии Boston Flowers каждый день.",
      "totalTime": "PT5M",
      "publisher": {"@id":"https://bostonflowers.com/#business"},
      "step": [
        {"@type":"HowToStep","position":1,"name":"Меняйте воду каждые 1–2 дня","text":"Бактерии — причина №1 гибели срезанных цветов. Чистая вода — самый важный шаг для продления жизни букета."},
        {"@type":"HowToStep","position":2,"name":"Подрезайте под углом 45°","text":"Trim 1–2 cm at a 45° angle before placing in water. More surface area means more water absorption. Repeat every 2 дней."},
        {"@type":"HowToStep","position":3,"name":"Берегите от тепла и фруктов","text":"Avoid direct sunlight, radiators, and fruit bowls. Ethylene gas from ripening fruit accelerates wilting."},
        {"@type":"HowToStep","position":4,"name":"Используйте чистую вазу","text":"Bacteria from a dirty vase can shorten flower life by 30–50%. Wash with hot soapy water every time."},
        {"@type":"HowToStep","position":5,"name":"Удаляйте листья ниже воды","text":"Any leaf submerged in water rots quickly and contaminates the arrangement. Remove immediately."}
      ]
    },
    {
      "@type": "Article",
      "@id": "https://bostonflowers.com/flower-care#article",
      "headline": "How to Keep Cut Flowers Fresh Longer — Гид по уходу",
      "description": "Simple, practical flower care guide from Boston Flowers studio. Как сохранить срезанные цветы свежими.",
      "image": "https://bostonflowers.com/assets/images/flower-care-og.jpg",
      "author": {"@id":"https://bostonflowers.com/#business"},
      "publisher": {"@id":"https://bostonflowers.com/#business"},
      "datePublished": "2026-01-01",
      "dateModified": "2026-04-17",
      "inLanguage": "en-US",
      "isPartOf": {"@id":"https://bostonflowers.com/flower-care"}
    },
    {
      "@type": "WebPage",
      "@id": "https://bostonflowers.com/flower-care",
      "url": "https://bostonflowers.com/flower-care",
      "name": "Как сохранить цветы свежими | Boston Flowers Гид по уходу",
      "description": "Simple, practical flower care guide from Boston Flowers studio. Как сохранить срезанные цветы свежими.",
      "inLanguage": "en-US",
      "isPartOf": {"@id":"https://bostonflowers.com/#website"},
      "about": {"@id":"https://bostonflowers.com/#business"},
      "dateModified": "2026-04-17",
      "speakable": {"@type":"SpeakableSpecification","cssSelector":[".hero-h1",".hero-sub",".quick-title",".quick-sub"]}
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
        {"@type":"Question","name":"How long do cut roses last?","acceptedAnswer":{"@type":"Answer","text":"Cut roses last 5–7 дней with proper care: fresh water changed every 1–2 дней, stems trimmed at a 45° angle, kept away from direct heat and fruit."}},
        {"@type":"Question","name":"How long do tulips last in a vase?","acceptedAnswer":{"@type":"Answer","text":"Тюльпаны last 4–6 дней in a vase. Keep them in cool water, away from direct sunlight — they continue to grow after cutting."}},
        {"@type":"Question","name":"How long do hydrangeas last?","acceptedAnswer":{"@type":"Answer","text":"Гортензияs last 3–5 дней. They need frequent water changes and benefit from stems cut at an angle immediately after purchase."}},
        {"@type":"Question","name":"How long do peonies last?","acceptedAnswer":{"@type":"Answer","text":"Пионы last 5–7 дней. Buy them slightly closed and let them open at room temperature. Keep away from heat sources."}},
        {"@type":"Question","name":"How long do lilies last in a vase?","acceptedAnswer":{"@type":"Answer","text":"Лилии last 7–10 дней — among the longest lasting cut flowers. Remove stamens immediately to prevent staining and keep away from cats, as lily pollen is toxic to them."}}
      ]
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {"@type":"ListItem","position":1,"name":"Home","item":"https://bostonflowers.com/"},
        {"@type":"ListItem","position":2,"name":"Studio","item":"https://bostonflowers.com/about"},
        {"@type":"ListItem","position":3,"name":"Flower Care","item":"https://bostonflowers.com/flower-care"}
      ]
    }
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
  <div class="hero-left">
    <div class="hero-bg-word" aria-hidden="true">CARE</div>
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Гид по уходу</span></div>
    <h1 class="hero-h1 serif">Как сохранить цветы<br><em>свежими дольше.</em></h1>
    <p class="hero-sub">Простые правила, которые действительно работают &mdash; те же, что мы используем в студии каждый день. Без лишней химии.</p>
    <div class="hero-btns">
      <a href="#quick" class="btn btn-ghost">Читать гид ↓</a>
      <a href="/shop" class="btn-text" style="color:var(--rose);">Заказать свежие цветы →</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-photo">
      <div class="hero-photo-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/flower-care-studio-vertical.webp'); background-size:cover; background-position:center 20%; width:100%; height:100%;"></div><div class="hero-photo-ph" style="display:none;">
        ФОТО СЛОТ &mdash; HERO<br>
        Флорист обрезает стебли / Букет в вазе<br>
        Close detail &middot; Studio mood &middot; Dark grade
      </div>
    </div>
  </div>
</section>

<!-- STICKY GUIDE NAV -->

<!-- ═ BF SECTION: guide-nav ═ -->

<div id="guide-nav">
  <div class="guide-nav-inner" id="guideNavInner">
    <a href="#quick" class="guide-link active" data-section="quick">Основы</a>
    <a href="#duration" class="guide-link" data-section="duration">Стойкость</a>
    <a href="#core" class="guide-link" data-section="core">Вода и стебли</a>
    <a href="#types" class="guide-link" data-section="types">По сортам</a>
    <a href="#mistakes" class="guide-link" data-section="mistakes">Ошибки</a>
    <div class="guide-indicator" id="guideIndicator"></div>
  </div>
</div>

<!-- QUICK ANSWER -->

<!-- ═ BF SECTION: quick ═ -->

<section id="quick">
  <div class="container">
    <div class="quick-inner">
      <div class="r">
        <span class="quick-label">5 главных правил</span>
        <h2 class="quick-title serif">Коротко<br><em>о главном.</em></h2>
        <p class="quick-sub">Соблюдайте эти пять шагов, и ваш букет проживет заметно дольше. Всё остальное — бонусы.</p>
      </div>
      <div>
        <div class="checklist" id="checklist">
          <div class="check-item" data-check="1">
            <span class="check-num">01</span>
            <div class="check-body">
              <div class="check-name">Меняйте воду каждые 1–2 дня</div>
              <div class="check-note">Бактерии — причина №1 гибели срезанных цветов. Чистая вода — самый важный шаг для продления жизни букета.</div>
            </div>
          </div>
          <div class="check-item" data-check="2">
            <span class="check-num">02</span>
            <div class="check-body">
              <div class="check-name">Подрезайте под углом 45°</div>
              <div class="check-note">Больше площадь среза — лучше питание. Срезайте 1–2 см под углом 45° каждые два дня.</div>
            </div>
          </div>
          <div class="check-item" data-check="3">
            <span class="check-num">03</span>
            <div class="check-body">
              <div class="check-name">Берегите от тепла и фруктов</div>
              <div class="check-note">Солнце, радиаторы и вазы с фруктами сокращают жизнь букета. Газ этилен от фруктов ускоряет увядание.</div>
            </div>
          </div>
          <div class="check-item" data-check="4">
            <span class="check-num">04</span>
            <div class="check-body">
              <div class="check-name">Используйте чистую вазу</div>
              <div class="check-note">Бактерии со стенок грязной вазы губят букет. Мойте вазу с мылом при каждой смене воды.</div>
            </div>
          </div>
          <div class="check-item" data-check="5">
            <span class="check-num">05</span>
            <div class="check-body">
              <div class="check-name">Удаляйте листья ниже воды</div>
              <div class="check-note">Листья в воде быстро гниют и портят воду. Удаляйте всё, что находится ниже уровня воды.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- HOW LONG THEY LAST -->

<!-- ═ BF SECTION: duration ═ -->

<section id="duration">
  <div class="container">
    <div class="r">
      <span class="lbl lbl-dark">Стойкость в вазе</span>
      <h2 class="dur-title serif">Сколько они<br><em>стоят на самом деле.</em></h2>
    </div>
    <div class="dur-rows">
      <div class="dur-row r d1">
        <div class="dur-flower"><span class="dur-flower-name serif">Лилии</span></div>
        <div class="dur-bar-wrap"><div class="dur-bar-bg"><div class="dur-bar-fill" style="--w:1" data-w="1"></div></div></div>
        <div class="dur-дней">7–10 <span>дней</span></div>
      </div>
      <div class="dur-row r d2">
        <div class="dur-flower"><span class="dur-flower-name serif">Розы</span></div>
        <div class="dur-bar-wrap"><div class="dur-bar-bg"><div class="dur-bar-fill" data-w="0.7"></div></div></div>
        <div class="dur-дней">5–7 <span>дней</span></div>
      </div>
      <div class="dur-row r d2">
        <div class="dur-flower"><span class="dur-flower-name serif">Пионы</span></div>
        <div class="dur-bar-wrap"><div class="dur-bar-bg"><div class="dur-bar-fill" data-w="0.7"></div></div></div>
        <div class="dur-дней">5–7 <span>дней</span></div>
      </div>
      <div class="dur-row r d3">
        <div class="dur-flower"><span class="dur-flower-name serif">Тюльпаны</span></div>
        <div class="dur-bar-wrap"><div class="dur-bar-bg"><div class="dur-bar-fill" data-w="0.5"></div></div></div>
        <div class="dur-дней">4–6 <span>дней</span></div>
      </div>
      <div class="dur-row r d4">
        <div class="dur-flower"><span class="dur-flower-name serif">Гортензия</span></div>
        <div class="dur-bar-wrap"><div class="dur-bar-bg"><div class="dur-bar-fill" data-w="0.4"></div></div></div>
        <div class="dur-дней">3–5 <span>дней</span></div>
      </div>
      <div class="dur-row r d5">
        <div class="dur-flower"><span class="dur-flower-name serif">Подсолнухи</span></div>
        <div class="dur-bar-wrap"><div class="dur-bar-bg"><div class="dur-bar-fill" data-w="0.6"></div></div></div>
        <div class="dur-дней">5–8 <span>дней</span></div>
      </div>
    </div>
    <p class="dur-note r">Эти данные верны при правильном уходе.: fresh water every 1–2 дней, trimmed stems, indirect light, room temperature below 22°C. Без ухода срок жизни цветов сокращается вдвое.</p>
  </div>
</section>

<!-- PHOTO BREAK -->

<div style="background:var(--olive-dim);border-top:1px solid var(--bd);border-bottom:1px solid var(--bd);position:relative;overflow:hidden;min-height:340px;background-image:linear-gradient(160deg,#0d1a10 0%,#111315 45%,#150d0a 100%);background-size:200% 200%;animation:gradDrift 26s ease infinite;">
  <div style="position:absolute;inset:0;background:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/flower-care-studio-details-boston-flowers.webp') no-repeat center/cover; opacity:0.6;"></div>
  <div style="position:absolute;inset:0;background:linear-gradient(to top,rgba(17,19,21,.85) 0%,transparent 60%);z-index:2;pointer-events:none;"></div>
  <div style="position:absolute;inset:0;display:flex;align-items:center;justify-content:center;font-size:12px;letter-spacing:.16em;text-transform:uppercase;color:rgba(255,255,255,.1);text-align:center;line-height:2.2;padding:40px;z-index:1;display:none;">ФОТО СЛОТ &mdash; Букет в вазе &middot; Studio detail &middot; Dark grade</div>
  <div style="position:absolute;bottom:0;left:0;right:0;z-index:3;padding:40px 48px;">
    <p style="font-family:'Cormorant Garamond',serif;font-size:clamp(28px,4vw,52px);font-weight:300;font-style:italic;color:var(--t1);max-width:760px;line-height:1.4;">Разница между букетом, который стоит неделю, and flowers that die in two дней is almost always care, not quality.</p>
  </div>
</div>

<!-- CORE GUIDE -->

<!-- ═ BF SECTION: core ═ -->

<section id="core">
  <div class="container">
    <div class="core-header r">
      <span class="lbl lbl-dark">Глубокий уход</span>
      <h2 class="core-title serif">Детали, которые<br><em>решают всё.</em></h2>
    </div>
    <div class="guide-sections">

```
  <div class="guide-section r">
    <div class="gs-label">Вода</div>
    <div class="gs-content">
      <h3 class="gs-title serif">Меняйте её чаще, чем кажется</h3>
      <p class="gs-body">Обычная вода из-под крана подходит идеально. Температура важнее типа воды — используйте чуть теплую воду. Холод шокирует стебли и замедляет питание. Меняйте воду каждые 24–48 часов.</p>
      <div class="gs-tip">
        <div>
          <span class="gs-tip-label">Studio tip</span>
          Небольшое количество сахара (1 ч.л. на литр) дает цветам энергию. Несколько капель белизны убивают бактерии. Вам не нужны специальные порошки — эти два ингредиента справляются лучше.
        </div>
      </div>
    </div>
  </div>

  <div class="guide-section r d1">
    <div class="gs-label">Стебли</div>
    <div class="gs-content">
      <h3 class="gs-title serif">Как и когда подрезать</h3>
      <p class="gs-body">Режьте под углом 45°, никогда прямо. Косой срез увеличивает площадь впитывания и не дает стеблю плотно сесть на дно вазы. Используйте только острый нож или секатор.</p>
      <div class="gs-tip">
        <div>
          <span class="gs-tip-label">Studio tip</span>
          Cut stems while holding them under water or immediately before placing in a vase. Air enters the stem within seconds of cutting and forms a bubble that blocks water absorption. This matters more for roses than most other flowers.
        </div>
      </div>
    </div>
  </div>

  <div class="guide-section r d2">
    <div class="gs-label">Температура</div>
    <div class="gs-content">
      <h3 class="gs-title serif">Где поставить букет</h3>
      <p class="gs-body">Flowers last longest in cool, indirect light. Avoid windowsills in direct sun, surfaces near radiators or heating vents, and anywhere that gets above 22°C regularly. A cool room overnight can add 1–2 дней to the arrangement &mdash; this is why florists store flowers in coolers and why your flowers visibly perk up if you put them in a cool room at night.</p>
    </div>
  </div>

  <div class="guide-section r d3">
    <div class="gs-label">Гигиена вазы</div>
    <div class="gs-content">
      <h3 class="gs-title serif">Самый недооцененный шаг</h3>
      <p class="gs-body">Ваза, которая выглядит чистой, часто таковой не является. Бактерии живут на стенках даже после ополаскивания. Всегда мойте вазу с мылом и тщательно полощите перед использованием.</p>
      <div class="gs-tip">
        <div>
          <span class="gs-tip-label">Studio tip</span>
          Narrow vases are harder to clean thoroughly and trap more bacteria. Wide-mouth vases are easier to maintain and are generally better for mixed arrangements where stems need room.
        </div>
      </div>
    </div>
  </div>

</div>
```

  </div>
</section>

<!-- FLOWER TYPES -->

<!-- ═ BF SECTION: types ═ -->

<section id="types">
  <div class="container">
    <div class="types-header r">
      <span class="lbl lbl-dark">По сортам</span>
      <h2 class="types-title serif">Разные цветы &mdash;<br><em>разные правила.</em></h2>
      <p class="types-sub">Общие правила важны для всех цветов, но именно эти детали продлевают жизнь конкретным сортам.</p>
    </div>

```
<div class="type-jumps r d1">
  <button class="type-jump active" data-type="roses" onclick="openType('roses',this)">Розы</button>
  <button class="type-jump" data-type="tulips" onclick="openType('tulips',this)">Тюльпаны</button>
  <button class="type-jump" data-type="hydrangea" onclick="openType('hydrangea',this)">Гортензия</button>
  <button class="type-jump" data-type="peonies" onclick="openType('peonies',this)">Пионы</button>
  <button class="type-jump" data-type="lilies" onclick="openType('lilies',this)">Лилии</button>
</div>

<div class="type-list r d2">

  <div class="type-item open" id="type-roses">
    <div class="type-q" onclick="toggleType(this)">
      <div class="type-q-left">
        
        <div>
          <div class="type-q-name serif">Розы</div>
          <div class="type-q-meta">Самые требовательные</div>
        </div>
      </div>
      <div class="type-q-duration">
        <div>
          <div class="type-duration-val">5–7</div>
          <div class="type-duration-lbl">дней</div>
        </div>
        <div class="type-icon-chev">+</div>
      </div>
    </div>
    <div class="type-body">
      <div class="type-rules">
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Подрезайте под водой.</strong> Розы are the most susceptible to air bubbles blocking the stem. Always cut immediately before placing in water.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Удаляйте «рубашку».</strong> The outermost 2–3 petals are often damaged or tightly closed. Removing them helps the bloom open properly.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Меняйте воду ежедневно.</strong> Розы are particularly sensitive to bacteria. Daily changes make a visible difference.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Избегайте шока.</strong> Room-temperature water, not cold from the tap.</div></div>
      </div>
    </div>
  </div>

  <div class="type-item" id="type-tulips">
    <div class="type-q" onclick="toggleType(this)">
      <div class="type-q-left">
        
        <div>
          <div class="type-q-name serif">Тюльпаны</div>
          <div class="type-q-meta">Растут в вазе</div>
        </div>
      </div>
      <div class="type-q-duration">
        <div>
          <div class="type-duration-val">4–6</div>
          <div class="type-duration-lbl">дней</div>
        </div>
        <div class="type-icon-chev">+</div>
      </div>
    </div>
    <div class="type-body">
      <div class="type-rules">
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Тюльпаны keep growing after cutting.</strong> They will lean toward light and continue to elongate. Rotate the vase daily for even growth.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Используйте мало воды.</strong> 5–7 cm is enough. Deep water encourages stem rot.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Держите в прохладе.</strong> Тюльпаны are one of the most heat-sensitive flowers. A warm room can shorten their life by half.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Проколите стебель.</strong> A small needle prick 2–3 cm below the flower head releases trapped air and helps tulips stay upright.</div></div>
      </div>
    </div>
  </div>

  <div class="type-item" id="type-hydrangea">
    <div class="type-q" onclick="toggleType(this)">
      <div class="type-q-left">
        
        <div>
          <div class="type-q-name serif">Гортензия</div>
          <div class="type-q-meta">Пьет лепестками</div>
        </div>
      </div>
      <div class="type-q-duration">
        <div>
          <div class="type-duration-val">3–5</div>
          <div class="type-duration-lbl">дней</div>
        </div>
        <div class="type-icon-chev">+</div>
      </div>
    </div>
    <div class="type-body">
      <div class="type-rules">
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Подрежьте стебель сразу.</strong> Гортензияs wilt faster than almost any other flower. Cut at an angle the moment they arrive and place directly in water.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Погрузите бутон полностью.</strong> If a hydrangea wilts, submerge the entire bloom in cool water for 30–45 minutes. They often fully recover.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Опрыскивайте ежедневно.</strong> Гортензияs absorb moisture through their petals as well as stems. A light mist in the morning extends their life.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Используйте широкую вазу.</strong> The flower heads are large and need air circulation to prevent rot at the base.</div></div>
      </div>
    </div>
  </div>

  <div class="type-item" id="type-peonies">
    <div class="type-q" onclick="toggleType(this)">
      <div class="type-q-left">
        
        <div>
          <div class="type-q-name serif">Пионы</div>
          <div class="type-q-meta">Покупайте бутоны</div>
        </div>
      </div>
      <div class="type-q-duration">
        <div>
          <div class="type-duration-val">5–7</div>
          <div class="type-duration-lbl">дней</div>
        </div>
        <div class="type-icon-chev">+</div>
      </div>
    </div>
    <div class="type-body">
      <div class="type-rules">
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Покупайте в бутонах.</strong> Пионы should feel like a marshmallow when squeezed — soft but not yet open. This gives you 3–4 дней of opening to enjoy.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Тепло помогает раскрыться.</strong> To slow opening, keep in a cool room. To speed up, place near a gentle heat source for a few hours.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Удалите муравьев.</strong> Пионы naturally attract ants in the garden. Shake gently or hold briefly over a bucket of water to remove them.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Меняйте воду часто.</strong> Peony stems are thick and create more bacterial waste. Every 24 hours is best.</div></div>
      </div>
    </div>
  </div>

  <div class="type-item" id="type-lilies">
    <div class="type-q" onclick="toggleType(this)">
      <div class="type-q-left">
        
        <div>
          <div class="type-q-name serif">Лилии</div>
          <div class="type-q-meta">Долгожители</div>
        </div>
      </div>
      <div class="type-q-duration">
        <div>
          <div class="type-duration-val">7–10</div>
          <div class="type-duration-lbl">дней</div>
        </div>
        <div class="type-icon-chev">+</div>
      </div>
    </div>
    <div class="type-body">
      <div class="type-rules">
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Удаляйте тычинки сразу.</strong> Lily pollen stains permanently and is toxic to cats. Remove stamens before the flowers fully open using a dry tissue — never wet, which spreads the stain.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Покупайте полузакрытыми.</strong> Лилии open sequentially from bottom to top. Buying them partially open means you get дней of watching the arrangement evolve.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Берегите кошек.</strong> Lily pollen is highly toxic to cats and can cause kidney failure. If you have cats, choose a different flower entirely.</div></div>
        <div class="type-rule"><div class="type-rule-dot"></div><div class="type-rule-text"><strong>Стандартный уход.</strong> Fresh water every 2 дней, stems trimmed at an angle, indirect light. Лилии are among the most forgiving cut flowers.</div></div>
      </div>
    </div>
  </div>

</div>
```

  </div>
</section>

<!-- COMMON MISTAKES -->

<!-- ═ BF SECTION: mistakes ═ -->

<section id="mistakes">
  <div class="container">
    <div class="r" style="margin-bottom:48px">
      <span class="lbl lbl-dark">Ошибки</span>
      <h2 class="core-title serif" style="margin-top:12px;">Что губит букет<br><em>раньше времени.</em></h2>
    </div>
    <div class="mistakes-grid">
      <div class="mistake-item r d1">
        <div class="mistake-num">01</div>
        <div class="mistake-title serif">Ваза рядом с фруктами</div>
        <p class="mistake-body">Ripening fruit produces ethylene gas, which triggers the ripening process in cut flowers too. A bowl of apples can cut flower life in half. <strong>Keep flowers and fruit in separate rooms.</strong></p>
      </div>
      <div class="mistake-item r d2">
        <div class="mistake-num">02</div>
        <div class="mistake-title serif">Забыли сменить воду</div>
        <p class="mistake-body">The most common mistake. Вода that looks clear can be heavily contaminated with bacteria after 48 hours. <strong>Change it every 1–2 дней, not when it looks bad.</strong></p>
      </div>
      <div class="mistake-item r d3">
        <div class="mistake-num">03</div>
        <div class="mistake-title serif">Грязная ваза</div>
        <p class="mistake-body">A vase that "looks clean" from rinsing with water is not clean. Bacteria cling to glass. <strong>Wash with hot soapy water every single time.</strong></p>
      </div>
      <div class="mistake-item r d4">
        <div class="mistake-num">04</div>
        <div class="mistake-title serif">Прямой срез стебля</div>
        <p class="mistake-body">A flat cut rests against the vase bottom and blocks water uptake. <strong>Always cut at 45° with sharp scissors</strong>, and repeat every 2 дней.</p>
      </div>
      <div class="mistake-item r d1">
        <div class="mistake-num">05</div>
        <div class="mistake-title serif">Цветы на солнце</div>
        <p class="mistake-body">A sunny windowsill looks like a good spot but accelerates wilting dramatically. <strong>Indirect light and cooler rooms extend life by 2–3 дней.</strong></p>
      </div>
      <div class="mistake-item r d2">
        <div class="mistake-num">06</div>
        <div class="mistake-title serif">Листья в воде</div>
        <p class="mistake-body">Any leaf submerged in water will rot within a day and release bacteria that affects the whole arrangement. <strong>Remove all leaves below the waterline immediately.</strong></p>
      </div>
    </div>
  </div>
</section>

<!-- FINAL CTA -->

<!-- ═ BF SECTION: fc-cta ═ -->

<section id="fc-cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eye">Готовы к свежести?</p>
      <h2 class="cta-title">Начните с безупречной свежести.</h2>
      <p class="cta-sub">Каждый букет в нашей студии собирается вручную из самых свежих цветов.<br>Доставка день в день по всему Большому Бостону.</p>
      <div class="cta-btns">
        <a href="https://wa.me/19172514669?text=Hi%2C+I%27d+like+to+order+flowers." class="btn btn-ivory">Заказать в WhatsApp</a>
        <a href="tel:+16178173157" class="btn btn-ghost">Позвонить в студию</a>
      </div>
    </div>
  </div>
</section>

<!-- ═══ BF THEME: PAGE CONTENT END ═══ -->

<!-- ═══ BF THEME: FOOTER START ═══
     WordPress: get_footer() → footer.php
     CSS: .footer-animated, .ft-grid, .ft-col, .ft-contact, .ft-bottom
═══════════════════════════════════════════ -->

<script>
// SCROLL PROGRESS
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',()=>{prog.style.width=Math.min(scrollY/(document.body.scrollHeight-innerHeight)*100,100)+'%';},{passive:true});

// SCROLL REVEAL
const ro=new IntersectionObserver(e=>{e.forEach(x=>{if(x.isIntersecting){x.target.classList.add('on');ro.unobserve(x.target)}});},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r').forEach(el=>ro.observe(el));
setTimeout(()=>document.querySelectorAll('.r:not(.on)').forEach(el=>el.classList.add('on')),0);

// NAV handled by header-footer.js

// WA
window.addEventListener('scroll',()=>{document.getElementById('waFloat').classList.toggle('visible',scrollY>300);},{passive:true});

// BURGER handled by header-footer.js

// STICKY GUIDE NAV
const guideNav=document.getElementById('guide-nav');
let gnStuck=false;
function checkGuideNav(){
  const navH=parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h'))||72;
  const stuck=guideNav.getBoundingClientRect().top<=navH;
  if(stuck!==gnStuck){gnStuck=stuck;guideNav.classList.toggle('stuck',stuck);}
}
window.addEventListener('scroll',checkGuideNav,{passive:true});

// GUIDE NAV ACTIVE SECTION
const sections=['quick','duration','core','types','mistakes'];
const guideLinks=document.querySelectorAll('.guide-link');
function updateGuideActive(){
  const navH=(parseInt(getComputedStyle(document.documentElement).getPropertyValue('--nav-h'))||72)+60;
  let current='quick';
  sections.forEach(id=>{
    const el=document.getElementById(id);
    if(el&&el.getBoundingClientRect().top<navH)current=id;
  });
  guideLinks.forEach(l=>l.classList.toggle('active',l.dataset.section===current));
  const activeLink=document.querySelector('.guide-link.active');
  if(activeLink)moveGuideIndicator(activeLink);
}
const guideIndicator=document.getElementById('guideIndicator');
const guideNavInner=document.getElementById('guideNavInner');
function moveGuideIndicator(link){
  if(!link||!guideIndicator||!guideNavInner)return;
  const linkRect=link.getBoundingClientRect();
  const navRect=guideNavInner.getBoundingClientRect();
  const left=linkRect.left - navRect.left + guideNavInner.scrollLeft;
  guideIndicator.style.left=left+'px';
  guideIndicator.style.width=linkRect.width+'px';
}
window.addEventListener('load',()=>{
  const a=document.querySelector('.guide-link.active');
  if(a)moveGuideIndicator(a);
});
window.addEventListener('scroll',updateGuideActive,{passive:true});

// CHECKLIST STAGGER
const checkItems=document.querySelectorAll('.check-item');
const checkObs=new IntersectionObserver(e=>{
  e.forEach(x=>{
    if(x.isIntersecting){
      const i=parseInt(x.target.dataset.check||1);
      setTimeout(()=>x.target.classList.add('on'),(i-1)*100);
      checkObs.unobserve(x.target);
    }
  });
},{threshold:.1});
checkItems.forEach(el=>checkObs.observe(el));

// DURATION BAR ANIMATION
const barObs=new IntersectionObserver(e=>{
  e.forEach(x=>{
    if(x.isIntersecting){
      x.target.classList.add('on');
      barObs.unobserve(x.target);
    }
  });
},{threshold:.3});
document.querySelectorAll('.dur-bar-fill').forEach(bar=>{
  const w=parseFloat(bar.dataset.w||0);
  bar.style.width=(w*100)+'%';
  bar.style.transform='scaleX(0)';
  barObs.observe(bar);
});

// ACCORDION — flower types
function toggleType(btn){
  const item=btn.closest('.type-item');
  const isOpen=item.classList.contains('open');
  document.querySelectorAll('.type-item.open').forEach(i=>i.classList.remove('open'));
  if(!isOpen)item.classList.add('open');
}

function openType(id,btn){
  document.querySelectorAll('.type-jump').forEach(b=>b.classList.remove('active'));
  btn.classList.add('active');
  document.querySelectorAll('.type-item').forEach(i=>i.classList.remove('open'));
  const target=document.getElementById('type-'+id);
  if(target){
    target.classList.add('open');
    setTimeout(()=>{target.scrollIntoView({behavior:'smooth',block:'nearest'});},100);
  }
}

// LANG handled by header-footer.js

// SMOOTH SCROLL
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click',e=>{
    const t=document.querySelector(a.getAttribute('href'));
    if(t){e.preventDefault();t.scrollIntoView({behavior:'smooth',block:'start'});}
  });
});
</script>

<?php get_footer(); ?>