<?php
/**
 * Template Name: Доставка (RU)
 * Boston Flowers — Same-Day Delivery page
 * Slug: /same-day-delivery
 */

add_action('wp_head', function() { ?>
<title>Доставка цветов день в день Бостон | Boston Flowers Studio</title>
<meta name="description" content="Безупречная доставка цветов по Большому Бостону день в день. Заказы до 10:30 утра. Архитектурная флористика и тихая роскошь от студии в Брайтоне.">
<link rel="canonical" href="https://bostonflowers.com/ru/dostavka/">
<meta property="og:title" content="Доставка цветов день в день Бостон | Boston Flowers Studio">
<meta property="og:description" content="Безупречная доставка цветов по Большому Бостону день в день. Заказы до 10:30 утра. Архитектурная флористика и тихая роскошь.">
<meta property="og:image" content="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-craft-full-bouquet.webp">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/ru/dostavka/">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Florist","LocalBusiness"],
      "@id": "https://bostonflowers.com/#business",
      "name": "Boston Flowers",
      "description": "Премиальная флористическая студия в Брайтоне, Бостон. Доставка цветов день в день, авторские композиции, свадебная флористика и гранд-аранжировки по всему Большому Бостону.",
      "url": "https://bostonflowers.com/ru/",
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
      "makesOffer": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Доставка цветов день в день",
            "description": "Гарантированная доставка цветов день в день по Большому Бостону при заказе до 10:30 утра."
          },
          "priceSpecification": {
            "@type": "PriceSpecification",
            "minPrice": "20",
            "priceCurrency": "USD"
          },
          "areaServed": "Большой Бостон",
          "availability": "https://schema.org/InStock"
        }
      ]
    },
    {
      "@type": "WebPage",
      "@id": "https://bostonflowers.com/ru/dostavka/",
      "url": "https://bostonflowers.com/ru/dostavka/",
      "name": "Доставка цветов день в день Бостон | Boston Flowers Studio",
      "description": "Безупречная доставка цветов по Большому Бостону день в день. Заказы до 10:30 утра.",
      "image": "https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-craft-full-bouquet.webp",
      "inLanguage": "ru-RU",
      "isPartOf": {"@id": "https://bostonflowers.com/#website"},
      "about": {"@id": "https://bostonflowers.com/#business"}
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "До какого времени принимаются заказы на доставку сегодня?",
          "acceptedAnswer": {"@type":"Answer","text":"Оформите заказ до 10:30 утра для гарантированной доставки день в день по всему Большому Бостону. После 10:30 мы подтверждаем заказы исходя из наличия цветов в студии."}
        },
        {
          "@type": "Question",
          "name": "Сколько стоит доставка цветов в Бостоне?",
          "acceptedAnswer": {"@type":"Answer","text":"Бостон, Кембридж и Ньютон: $20. Нидхэм, Берлингтон, Уолтем: $35–40. Род-Айленд и дальние районы: от $120. Самовывоз из студии в Брайтоне — бесплатно."}
        }
      ]
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+заказать+цветы+на+сегодня." class="wa-float" id="waFloat" aria-label="Order via WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-bg"><div class="hero-glow-l"></div><div class="hero-glow-r"></div></div>
  <div class="hero-bf" aria-hidden="true">BF</div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Доставка &mdash; Большой Бостон</span></div>
      <h1 class="hero-h1 serif">
        Доставка цветов в Бостоне.<br>
        <em>Гарантия сегодня.</em>
        <span class="hero-h1-sub">Заказ до 10:30 AM &mdash; гарантировано.</span>
      </h1>
      <p class="hero-sub">Каждая композиция собирается под заказ. День в день, по всему Большому Бостону.</p>
      <p class="hero-confirm" id="heroConfirm">Подтверждаем в течение 5 минут.</p>
      <div class="hero-btns">
        <a href="https://wa.me/19172514669" class="btn btn-ghost" id="heroCta">Заказать на сегодня</a>
        <a href="tel:+16178173157" class="btn-text" style="margin-top:2px;">Позвонить нам &#8594;</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="cutoff-card" id="cutoffCard">
        <div class="cutoff-inner">
          <span class="cutoff-label">Дедлайн сегодня</span>
          <div class="cutoff-time">10:30</div>
          <div class="cutoff-unit">AM &mdash; гарантия на сегодня</div>
          <div class="status-bar" id="statusBar">
            <span class="status-dot" id="statusDot"></span>
            <span class="status-txt" id="statusTxt">Проверка&hellip;</span>
          </div>
          <div class="countdown-row" id="countdownRow">
            <span class="countdown-label">Окно закроется через</span>
            <span class="countdown-val" id="countdownVal">&mdash;</span>
          </div>
          <div class="zone-table">
            <div class="zone-row"><span class="zone-row-name">Boston &middot; Cambridge &middot; Newton</span><span class="zone-row-price">$20</span></div>
            <div class="zone-row"><span class="zone-row-name">Dorchester</span><span class="zone-row-price">$20</span></div>
            <div class="zone-row"><span class="zone-row-name">Needham &middot; Burlington</span><span class="zone-row-price">$35&ndash;40</span></div>
            <div class="zone-row"><span class="zone-row-name">Rhode Island</span><span class="zone-row-price">~$120</span></div>
            <div class="zone-row"><span class="zone-row-name">Самовывоз из студии</span><span class="zone-row-price">0$</span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="photo-break-1" class="r">
  <div class="photo-placeholder">
    <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-craft-full-bouquet.webp" 
         alt="Процесс создания авторской цветочной композиции в студии Boston Flowers." 
         title="Архитектурная флористика Boston Flowers"
         loading="lazy"
         style="width:100%; height:100%; object-fit:cover; object-position:center top !important; transform:scale(1.12); transform-origin:center top; display:block;">
  </div>
  <div class="photo-content-1">
    <div class="photo-eyebrow"><div class="photo-eyebrow-line"></div><span class="lbl">Из нашей студии</span></div>
    <h2 class="photo-title-1 serif">Каждый цветок выбран<br>со <em>смыслом.</em></h2>
  </div>
</section>

<section id="schedule">
  <div class="container">
    <div class="schedule-grid">
      <div class="schedule-left">
        <p class="lbl r" style="margin-bottom:0">Окно заказа</p>
        <h2 class="schedule-title serif r d1">Время заказа<br><em>решает всё.</em></h2>
        <p class="schedule-desc r d2">Гарантия на сегодня при заказе до 10:30 утра. Далее — по наличию в студии. Мы всегда честны с вами. Никаких сюрпризов.</p>
      </div>
      <div class="r d2">
        <div class="time-blocks">
          <div class="time-block green"><div class="time-tag"><div class="time-tag-val">До<br>10:30</div><div class="time-tag-unit">AM</div></div><div class="time-body"><div class="time-body-title">Гарантия на сегодня</div><div class="time-body-desc">Любой масштаб. Начинаем немедленно.</div></div></div>
          <div class="time-block amber"><div class="time-tag"><div class="time-tag-val">11 AM<br>&ndash;6 PM</div></div><div class="time-body"><div class="time-body-title">С подтверждением</div><div class="time-body-desc">Проверяем наличие в студии и отвечаем за минуты.</div></div></div>
          <div class="time-block amber"><div class="time-tag"><div class="time-tag-val">Срочно</div><div class="time-tag-unit">Всегда</div></div><div class="time-body"><div class="time-body-title">Срочная доставка</div><div class="time-body-desc">Быстрее обычного — за доплату. Звоните напрямую.</div></div></div>
          <div class="time-block grey"><div class="time-tag"><div class="time-tag-val">Забор</div><div class="time-tag-unit">0$</div></div><div class="time-body"><div class="time-body-title">Самовывоз из студии</div><div class="time-body-desc">267 North Beacon St, Brighton — ежедневно 8:00&ndash;20:00.</div></div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="zones">
  <div class="container">
    <div class="zones-hd r">
      <p class="lbl lbl-dark">Районы доставки</p>
      <h2 class="zones-title serif">Большой Бостон<br>&amp; пригороды.</h2>
    </div>
    <table class="zones-table r d1">
      <tbody>
        <tr><td><div class="zt-zone">Центр</div><div class="zt-areas">Boston &middot; Cambridge &middot; Newton &middot; Watertown &middot; Dorchester</div></td><td style="text-align:center;"><span class="zt-badge green">Гарантировано</span></td><td><div class="zt-price">$20</div></td></tr>
        <tr><td><div class="zt-zone">Средняя зона</div><div class="zt-areas">Needham &middot; Burlington &middot; Waltham &middot; Medford</div></td><td style="text-align:center;"><span class="zt-badge green">Сегодня</span></td><td><div class="zt-price">$35&ndash;40</div></td></tr>
        <tr><td><div class="zt-zone">Дальняя</div><div class="zt-areas">Rhode Island &middot; Southern MA &middot; По запросу</div></td><td style="text-align:center;"><span class="zt-badge amber">По запросу</span></td><td><div class="zt-price">~$120+</div></td></tr>
        <tr><td><div class="zt-zone">Самовывоз</div><div class="zt-areas">267 North Beacon St, Brighton &mdash; ежедневно 8:00&ndash;20:00</div></td><td style="text-align:center;"><span class="zt-badge green">Всегда</span></td><td><div class="zt-price">0$</div></td></tr>
      </tbody>
    </table>
    <div class="zones-note r">
      <p class="zones-note-txt"><strong>Не уверены насчет вашего района?</strong> Напишите нам — мы ответим мгновенно. Мы охватываем большую часть Большого Бостона.</p>
    </div>
  </div>
</section>

<section id="how">
  <div class="container">
    <div class="how-hd r">
      <p class="lbl">Процесс</p>
      <h2 class="how-title serif">От заказа до двери,<br><em>без ожиданий.</em></h2>
    </div>
    <div class="how-grid">
      <div class="how-step r"><div class="step-num">01</div><div class="step-title">Вы выбираете</div><div class="step-desc">Напишите нам. Опишите повод — ответим мгновенно.</div><span class="step-time">Сразу</span></div>
      <div class="how-step r d1"><div class="step-num">02</div><div class="step-title">Мы создаем</div><div class="step-desc">1&ndash;2 часа из наличия. 3&ndash;4 часа, если нужна закупка. Вы знаете всё заранее.</div><span class="step-time">1&ndash;4 часа</span></div>
      <div class="how-step r d2"><div class="step-num">03</div><div class="step-title">Мы подтверждаем</div><div class="step-desc">Вы узнаете точный момент, когда заказ покинет студию.</div><span class="step-time">Включено</span></div>
      <div class="how-step r d3"><div class="step-num">04</div><div class="step-title">Мы доставляем</div><div class="step-desc">Прямо в руки. Никаких транзитных складов.</div><span class="step-time">1&ndash;2 часа</span></div>
    </div>
  </div>
</section>

<section id="photo-break-2">
  <div class="emotion-split">
    <div class="emotion-photo r">
      <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-delivery-moment-landscape.webp" 
           alt="Момент вручения премиального букета в Бостоне." 
           loading="lazy"
           style="width:100%; height:100%; object-fit:cover; object-position:center; display:block; filter: brightness(0.72) saturate(0.9); transform: scale(1.0); transform-origin: center; position: relative; z-index: 1;">
    </div>
    <div class="emotion-copy r d1">
      <span class="lbl" style="margin-bottom:20px">Впечатление</span>
      <h2 class="emotion-title serif">Не просто цветы.<br><em>Эмоции.</em></h2>
      <p class="emotion-desc">Мы думаем о том, кто их получит. Каждая доставка &mdash; это событие. Мы делаем всё, чтобы оно прошло безупречно.</p>
      <blockquote class="emotion-quote">
        &ldquo;Композиция превзошла все ожидания &mdash; студия позаботилась о каждой детали.&rdquo;
      </blockquote>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div class="faq-left">
        <p class="lbl r" style="margin-bottom:0">Вопросы</p>
        <h2 class="faq-title serif r d1">Прямые<br><em>ответы.</em></h2>
        <p class="faq-intro r d2">Если вашего вопроса здесь нет &mdash; задайте его лично.</p>
        <span class="faq-contact-label r d3">Нужна помощь?</span>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="r d3">
          <a href="https://wa.me/19172514669" class="btn btn-ghost">WhatsApp</a>
          <a href="tel:+16178173157" class="btn-text">Звонок &#8594;</a>
        </div>
      </div>
      <div class="faq-right r d1">
        <div class="faq-list">
          <div class="faq-item"><div class="faq-q">Я не успел до 10:30 &mdash; возможна ли доставка сегодня?<span class="faq-icon">+</span></div><div class="faq-a">Зачастую да. После дедлайна мы сверяем наличие цветов в студии. Напишите или позвоните &mdash; мы ответим прямо. Заявки принимаются до 20:00.</div></div>
          <div class="faq-item"><div class="faq-q">Сколько занимает путь от заказа до двери?<span class="faq-icon">+</span></div><div class="faq-a">Из наличия: 1&ndash;2 часа на сборку, затем доставка. При закупке: 3&ndash;4 часа на сборку, затем доставка. Мы всегда обозначаем тайминг до старта работы.</div></div>
          <div class="faq-item"><div class="faq-q">Доступен ли авторский дизайн день в день?<span class="faq-icon">+</span></div><div class="faq-a">Да, при заказе до 10:30 утра. Ваша палитра, инициалы на ленте и премиальная упаковка &mdash; всё доступно.</div></div>
          <div class="faq-item"><div class="faq-q">Что если нужных цветов сейчас нет?<span class="faq-icon">+</span></div><div class="faq-a">Мы сообщим об этом сразу и предложим альтернативу в том же бюджете и стиле. Никаких замен без вашего согласия.</div></div>
          <div class="faq-item"><div class="faq-q">Есть ли срочная доставка?<span class="faq-icon">+</span></div><div class="faq-a">Да, за дополнительную плату. В этом случае лучше звонить напрямую.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="trust">
  <div class="container">
    <div class="trust-hd r">
      <p class="lbl lbl-dark">Отзывы клиентов</p>
      <h2 class="trust-title serif">&ldquo;Доставили точно в обещанное время.&rdquo;</h2>
      <a href="https://maps.app.goo.gl/nPwTeq92z9QtTUGX7?g_st=ic" target="_blank" rel="noopener" class="google-badge" style="margin-top:20px;display:inline-flex;">
        <span class="google-badge-g">G</span><span class="google-badge-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="google-badge-score">5.0</span><span class="google-badge-label">Google Отзывы</span>
      </a>
    </div>
    <div class="trust-grid">
      <div class="trust-card featured r"><div class="trust-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="trust-txt">&ldquo;Заказал в 9 утра на день рождения жены &mdash; цветы привезли к полудню, идеально оформленные. Подтвердили всё сразу. Это единственный флорист в Бостоне, которого я буду советовать.&rdquo;</p><p class="trust-by"><strong>Michael R.</strong> &middot; Boston, MA</p></div>
      <div class="trust-card r d1"><div class="trust-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="trust-txt">&ldquo;Доставка в тот же день, прекрасные цветы, ответили на звонок сразу. Никто другой не делает это на таком уровне.&rdquo;</p><p class="trust-by"><strong>Анастасия К.</strong> &middot; Cambridge, MA</p></div>
      <div class="trust-card r d2"><div class="trust-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="trust-txt">&ldquo;100 роз, день в день, вовремя. Профессионально упаковано. Действительно впечатляет.&rdquo;</p><p class="trust-by"><strong>David L.</strong> &middot; Newton, MA</p></div>
    </div>
  </div>
</section>

<section id="proof">
  <div class="container">
    <div class="proof-inner">
      <div class="proof-group">
        <span class="proof-label">Принимаем</span>
        <span class="pay-chip">PayPal</span>
        <span class="pay-chip">Zelle</span>
        <span class="pay-chip">Square</span>
        <span class="pay-chip">Venmo</span>
      </div>
      <div class="proof-divider"></div>
      <div class="proof-facts">
        <span class="proof-fact">Возможен самовывоз</span>
        <span class="proof-fact">Сегодня до 10:30</span>
        <span class="proof-fact">Срочно по запросу</span>
        <span class="proof-fact">Ответ за 5 минут</span>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eyebrow">Готовы заказать?</p>
      <h2 class="cta-title" id="ctaTitle">Опишите задачу.<br>Мы сделаем остальное.</h2>
      <p class="cta-sub" id="ctaSub">Заказ до 10:30 &mdash; гарантия на сегодня.<br>Позже &mdash; просто спросите. Мы редко отказываем.</p>
      <div class="cta-btns">
        <a href="https://wa.me/19172514669" class="btn btn-ivory" id="ctaBtn1">Заказать в WhatsApp</a>
        <a href="tel:+16178173157" class="btn btn-outline-ivory">Позвонить в студию</a>
      </div>
      <p class="cta-confirm" id="ctaConfirm">Подтверждаем в течение 5 минут.</p>
    </div>
  </div>
</section>

<script>
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',()=>{prog.style.width=Math.min(scrollY/(document.body.scrollHeight-innerHeight)*100,100)+'%';},{passive:true});

const ro=new IntersectionObserver(e=>{e.forEach(x=>{if(x.isIntersecting){x.target.classList.add('on');ro.unobserve(x.target)}});},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r').forEach(el=>ro.observe(el));
setTimeout(()=>document.querySelectorAll('.r:not(.on)').forEach(el=>el.classList.add('on')),2400);

const waBtn=document.getElementById('waFloat');
window.addEventListener('scroll',()=>{waBtn.classList.toggle('visible',scrollY>300);},{passive:true});

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
    txt.textContent='Открыто для заказов на сегодня';
    cdRow.classList.add('show');
    cdVal.textContent=h>0?h+'ч '+pad(m)+'м':m+' мин';
    if(rem<60)card.classList.add('urgent');else card.classList.remove('urgent');
    ids.forEach(id=>set(id,'Заказать на сегодня'));
    document.getElementById('ctaTitle').innerHTML='Опишите задачу.<br>Мы сделаем остальное.';
    set('ctaSub','Заказ до 10:30 — гарантия на сегодня. Позже — просто спросите.');
    set('heroConfirm','Подтверждаем в течение 5 минут.');
    set('ctaConfirm','Подтверждаем в течение 5 минут.');
  }else if(mins<close){
    dot.className='status-dot amber';bar.className='status-bar amber';
    txt.textContent='После 10:30 — уточняйте наличие';
    cdRow.classList.remove('show');card.classList.remove('urgent');
    ids.forEach(id=>set(id,'Проверить наличие'));
    set('ctaTitle','Дедлайн прошел? Всё равно спросите.');
    set('ctaSub','Мы часто собираем заказы день в день даже после 10:30. Напишите нам.');
    set('heroConfirm','Отвечаем за пару минут.');
    set('ctaConfirm','Отвечаем за пару минут.');
  }else{
    dot.className='status-dot closed';bar.className='status-bar closed';
    txt.textContent='Студия закрыта — заказ на завтра';
    cdRow.classList.remove('show');card.classList.remove('urgent');
    ids.forEach(id=>set(id,'Заказать на завтра'));
    set('ctaTitle','Оформите вечером — доставим завтра.');
    set('ctaSub','Студия открывается в 8:00 утра. Ваш заказ будет в приоритете.');
    set('heroConfirm','Откроемся завтра в 8:00.');
    set('ctaConfirm','Подтвердим завтра утром.');
  }
}
updateAll();setInterval(updateAll,30000);

document.querySelectorAll('.faq-item').forEach(item=>{
  item.querySelector('.faq-q').addEventListener('click',()=>{
    const isOpen=item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
    if(!isOpen)item.classList.add('open');
  });
});
</script>

<?php get_footer(); ?>
