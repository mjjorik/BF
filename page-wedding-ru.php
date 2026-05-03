<?php
/**
 * Template Name: Свадьбы (RU)
 * Boston Flowers — Wedding Floral Design page
 * Slug: /wedding
 */

add_action('wp_head', function() { ?>
<title>Свадебная флористика Бостон | Студия Boston Flowers</title>
<meta name="description" content="Свадебная флористика, формирующая пространство. Студия Boston Flowers создает ограниченное число авторских свадеб в год. Дизайн церемоний и полная трансформация залов.">
<link rel="canonical" href="https://bostonflowers.com/ru/svadba/">
<meta property="og:title" content="Свадебная флористика Бостон | Студия Boston Flowers">
<meta property="og:description" content="Свадебная флористика, формирующая пространство. Ограниченное число авторских свадеб в год.">
<meta property="og:image" content="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-bouquet-full.webp">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/ru/svadba/">
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
      "url":"https://bostonflowers.com/ru/",
      "telephone":"+16178173157",
      "priceRange":"$$$",
      "address":{"@type":"PostalAddress","streetAddress":"267 North Beacon St","addressLocality":"Brighton","addressRegion":"MA","postalCode":"02135","addressCountry":"US"}
    },
    {
      "@type":"Service",
      "serviceType":"Wedding floral design",
      "provider":{"@id":"https://bostonflowers.com/#florist"},
      "areaServed":["Boston","Brighton","Cambridge","Newton"],
      "description":"Индивидуальный дизайн для свадебных церемоний, приемов и полная трансформация пространств."
    },
    {
      "@type":"FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"Какой минимальный бюджет на свадьбу?","acceptedAnswer":{"@type":"Answer","text":"Стоимость флористики для камерных церемоний начинается от $800. Полное оформление свадьбы — от $2,500."}},
        {"@type":"Question","name":"За какое время нужно бронировать дату?","acceptedAnswer":{"@type":"Answer","text":"Мы рекомендуем минимум 6–8 недель. Для высокого сезона (май–сентябрь) лучше планировать за 3–4 месяца."}}
      ]
    }
  ]
}
</script>
<style>@media (min-width: 1024px) { #hero .hero-left, #hero .hero-right { flex: 0 0 50% !important; } } @media (max-width: 1023px) { #hero .hero-right { display: none; } }</style>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+свадебную+флористику." class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24" width="24" height="24" style="width:24px; height:24px; fill:#fff; display:block;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-left">
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Wedding Floral Design — Boston</span></div>
    <h1 class="hero-h1 serif">Свадебная флористика в Бостоне:<br><em>дизайн событий.</em></h1>
    <p class="hero-sub">Ограниченное число свадеб в год.<br>Каждый проект — с чистого листа.</p>
    <p class="hero-micro">Никаких шаблонов. Только суть.</p>
    <div class="hero-btns">
      <a href="#inquiry" class="btn btn-ghost">Запросить проект</a>
      <a href="#gallery" class="btn-text">Наши работы →</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-right-inner">
      <div class="hero-photo" >
        <div class="hero-photo-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-bouquet-full.webp'); background-size: cover !important; opacity: 1 !important;"></div>
      </div>
      <span class="hero-ph-lbl">Bespoke bridal arrangement by Boston Flowers studio</span>
    </div>
  </div>
</section>

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>✦</span>Только индивидуальный дизайн</span>
      <span class="marquee-item"><span>✦</span>Ограниченное число броней в месяц</span>
      <span class="marquee-item"><span>✦</span>Бостон и пригороды</span>
      <span class="marquee-item"><span>✦</span>Монтаж и оформление на месте</span>
      <span class="marquee-item"><span>✦</span>Никаких шаблонов. Без повторов.</span>
      <span class="marquee-item"><span>✦</span>Только индивидуальный дизайн</span>
      <span class="marquee-item"><span>✦</span>Ограниченное число броней в месяц</span>
      <span class="marquee-item"><span>✦</span>Бостон и пригороды</span>
      <span class="marquee-item"><span>✦</span>Монтаж и оформление на месте</span>
      <span class="marquee-item"><span>✦</span>Никаких шаблонов. Без повторов.</span>
    </div>
  </div>
  <div class="marquee-track" style="border-top:1px solid var(--bd)">
    <div class="marquee-inner rev">
      <span class="marquee-item"><span>✦</span>Дизайн-ориентированный подход</span>
      <span class="marquee-item"><span>✦</span>Прямой диалог с клиентом</span>
      <span class="marquee-item"><span>✦</span>Премиальный сезонный отбор</span>
      <span class="marquee-item"><span>✦</span>Бутик-студия — Брайтон, Бостон</span>
      <span class="marquee-item"><span>✦</span>Проект с нулевой точки</span>
      <span class="marquee-item"><span>✦</span>Дизайн-ориентированный подход</span>
      <span class="marquee-item"><span>✦</span>Прямой диалог с клиентом</span>
      <span class="marquee-item"><span>✦</span>Премиальный сезонный отбор</span>
      <span class="marquee-item"><span>✦</span>Бутик-студия — Брайтон, Бостон</span>
      <span class="marquee-item"><span>✦</span>Проект с нулевой точки</span>
    </div>
  </div>
</section>

<section id="inquiry">
  <div class="container">
    <div class="inquiry-grid">
      <div class="inquiry-left">
        <p class="lbl lbl-dark">С чего начать</p>
        <h2 class="inquiry-left"><em>Спроектируем<br>вашу свадьбу.</em></h2>
        <p>Мы берем в работу ограниченное число проектов.<br>Всё начинается с диалога — не с прайс-листа.</p>
        <div class="inquiry-note">
          Каждый проект — это разговор,<br>а не заполнение анкеты.
        </div>
      </div>
      <div>
        <form class="bf-form inquiry-form" data-intent="wedding" method="post" action="/api/lead" novalidate>
          <input type="hidden" name="source" value="wedding.html">
          <input type="hidden" name="intent" value="wedding">
          <input type="text" name="_h" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px">
          
          <div class="form-row">
            <div class="form-field">
              <label>Ваше имя</label>
              <input type="text" name="name" placeholder="Имя" required>
            </div>
            <div class="form-field">
              <label>Дата свадьбы</label>
              <input type="text" name="date" placeholder="14 июня 2026">
            </div>
          </div>
          <div class="form-row">
            <div class="form-field">
              <label>Локация</label>
              <input type="text" name="venue" placeholder="Название площадки">
            </div>
            <div class="form-field">
              <label>Телефон или Email</label>
              <input type="text" name="contact" placeholder="Для связи с вами" required>
            </div>
          </div>
          <div class="form-field full-w">
            <label>Ваше видение</label>
            <textarea name="message" placeholder="Стиль, цветы, количество гостей, ориентир бюджета..."></textarea>
          </div>
          <div class="form-submit-row">
            <button type="submit" class="btn btn-wine-solid">Запросить проект</button>
          </div>
          <p class="form-legal">Отвечаем в течение 24 часов. Никаких шаблонов.</p>
        </form>
        <div class="form-success">Запрос принят. Мы изучим детали и скоро свяжемся с вами.</div>
      </div>
    </div>
  </div>
</section>

<section id="what">
  <div class="container r-grid">
    <div class="what-hd">
      <p class="lbl r">Что мы создаем</p>
      <h2 class="what-title serif rc d1">Каждая свадьба<br><em>— это разовая композиция.</em></h2>
    </div>
    <div class="what-grid">
      <div class="what-item r">
        <div class="what-num">01</div>
        <div class="what-name serif">Образ невесты</div>
        <p class="what-desc">Букет, детали, аксессуары. Единая концепция, а не подбор по каталогу.</p>
        <div class="what-img" style="margin-top:var(--space-m); aspect-ratio:9/7; overflow:hidden;">
          <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/luxury-bridal-bouquet-composition-boston-flowers.webp" 
               alt="Авторский букет невесты от Boston Flowers" 
               loading="lazy" 
               style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
        </div>
      </div>
      <div class="what-item r">
        <div class="what-num">02</div>
        <div class="what-name serif">Архитектура церемонии</div>
        <p class="what-desc">Арки, алтари, проходы — проектируются под пространство, а не копируются.</p>
        <div class="what-img" style="margin-top:var(--space-m); aspect-ratio:9/7; overflow:hidden;">
          <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/bespoke-wedding-ceremony-floral-structures-boston-flowers.webp" 
               alt="Роскошная цветочная арка для свадебной церемонии с белыми розами и архитектурной зеленью, индивидуально спроектированная Boston Flowers." 
               title="Эксклюзивное оформление церемоний и алтарей | Студия Boston Flowers 2026" 
               loading="lazy" 
               style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
        </div>
      </div>
      <div class="what-item r">
        <div class="what-num">03</div>
        <div class="what-name serif">Композиции столов</div>
        <p class="what-desc">Центральные элементы и раннеры. Каждый стол — часть общего ритма дизайна.</p>
        <div class="what-img" style="margin-top:var(--space-m); aspect-ratio:9/7; overflow:hidden;">
          <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/bespoke-wedding-reception-table-decor-boston.webp" 
               alt="Флористика столов Boston Flowers" 
               loading="lazy" 
               style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
        </div>
      </div>
      <div class="what-item r">
        <div class="what-num">04</div>
        <div class="what-name serif">Трансформация залов</div>
        <p class="what-desc">Когда всё пространство должно чувствоваться дизайнерским. Полный цикл оформления.</p>
        <div class="what-img" style="margin-top:var(--space-m); aspect-ratio:9/7; overflow:hidden;">
          <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/luxury-full-venue-floral-installations-boston-flowers.webp" 
               alt="Полная трансформация свадебного зала с масштабными цветочными инсталляциями и единой концепцией дизайна от Boston Flowers." 
               title="Роскошное оформление залов и масштабные инсталляции | Boston Flowers 2026" 
               loading="lazy" 
               style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="gallery">
  <div class="gallery-hd">
    <p class="lbl r">Работы студии</p>
    <h2 class="gallery-title serif rc d1">Избранные<br><em>композиции.</em></h2>
    <p class="gallery-sub r d2">Запись на сезон открыта. Только реальные проекты.</p>
  </div>
  <div class="gallery-scroll" id="galleryScroll">
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-bridal-bouquet-white-roses.webp');"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-reception-v3.webp');"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-ceremony-floral-arch.webp');"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-floral-detail-petals.webp');"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-venue-v3.webp');"></div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-wedding-bridal-getting-ready.webp');"></div>
    </div>
  </div>
  <div class="gallery-counter">
    <span class="gallery-counter-lbl">Листайте для просмотра</span>
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
        <p class="lbl lbl-dark r">Бюджет</p>
        <h2 class="inv-title rc d1"><em>Дизайн,<br>а не сборка.</em></h2>
        <p class="inv-sub r d2">Каждый проект оценивается индивидуально. Это ориентиры, а не фиксированные пакеты.</p>
      </div>
      <div class="r d1">
        <div class="inv-tiers">
          <div class="inv-tier">
            <div class="inv-tier-left">
              <div class="inv-tier-name serif">Камерная церемония</div>
              <div class="inv-tier-desc">Малые свадьбы · Фокус на деталях</div>
            </div>
            <div class="inv-tier-price">от $800</div>
          </div>
          <div class="inv-tier">
            <div class="inv-tier-left">
              <div class="inv-tier-name serif">Полный дизайн свадьбы</div>
              <div class="inv-tier-desc">Образ невесты + церемония + прием</div>
            </div>
            <div class="inv-tier-price">от $2,500</div>
          </div>
          <div class="inv-tier">
            <div class="inv-tier-left">
              <div class="inv-tier-name serif">Трансформация зала</div>
              <div class="inv-tier-desc">Масштабные инсталляции · Арт-дирекшн</div>
            </div>
            <div class="inv-tier-price">от $5,000</div>
          </div>
        </div>
        <p class="inv-note r d2">Итоговая стоимость зависит от масштаба, выбора цветов и сложности монтажа на локации.</p>
      </div>
    </div>
  </div>
</section>

<section id="process">
  <div class="container r-grid">
    <div class="process-hd">
      <p class="lbl r">Процесс</p>
      <h2 class="process-title serif rc d1">Как мы<br><em>работаем вместе.</em></h2>
    </div>
    <div class="process-steps">
      <div class="process-step r">
        <div class="step-num">01</div>
        <div class="step-name serif">Запрос</div>
        <p class="step-note">Вы присылаете дату, место и видение. Мы отвечаем в течение 24 часов.</p>
      </div>
      <div class="process-step r">
        <div class="step-num">02</div>
        <div class="step-name serif">Концепция</div>
        <p class="step-note">Мы готовим визуальное направление и мудборд на основе вашего брифа.</p>
      </div>
      <div class="process-step accent r">
        <div class="step-num">03</div>
        <div class="step-name serif">Проект</div>
        <p class="step-note">Полный расчет и выбор цветов. Вы утверждаете всё до начала работы.</p>
      </div>
      <div class="process-step r">
        <div class="step-num">04</div>
        <div class="step-name serif">Производство</div>
        <p class="step-note">Закупка и сборка. Вы получаете превью до свадебного дня.</p>
      </div>
      <div class="process-step accent r">
        <div class="step-num">05</div>
        <div class="step-name serif">Монтаж</div>
        <p class="step-note">Работа на локации и демонтаж. Вы наслаждаетесь моментом.</p>
      </div>
    </div>
  </div>
</section>

<section id="why">
  <div class="container">
    <div class="why-grid">
      <div>
        <p class="lbl lbl-dark r">Почему мы</p>
        <h2 class="why-title rc d1">Позиция,<br><em>а не обещание.</em></h2>
        <div class="why-points r-grid">
          <div class="why-point r">
            <div class="why-point-num">01</div>
            <div class="why-point-text"><strong>Дизайн прежде всего</strong>Мы начинаем с формы и масштаба, а не со списка цветов.</div>
          </div>
          <div class="why-point r">
            <div class="why-point-num">02</div>
            <div class="why-point-text"><strong>Проект с нуля</strong>Никаких повторных шаблонов. Каждая свадьба — это новая визуальная задача.</div>
          </div>
          <div class="why-point r">
            <div class="why-point-num">03</div>
            <div class="why-point-text"><strong>Бутик-модель</strong>Ограниченное число свадеб в месяц. Прямое внимание флориста, а не менеджера.</div>
          </div>
          <div class="why-point r">
            <div class="why-point-num">04</div>
            <div class="why-point-text"><strong>Премиальный отбор</strong>Мы заказываем цветы под конкретную композицию, а не используем складские остатки.</div>
          </div>
        </div>
      </div>
      <div class="why-photo r d1">
        <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-v2.webp" alt="Студия Boston Flowers" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;">
      </div>
    </div>
  </div>
</section>

<section id="availability">
  <div class="container">
    <div class="avail-inner">
      <div class="avail-left">
        <div class="avail-eyebrow r">Календарь</div>
        <h2 class="avail-title serif rc d1">Мы принимаем<br><em>минимум свадеб</em><br>ежемесячно.</h2>
        <div class="avail-dates r d2">
          <div class="avail-date-row"><div class="avail-dot"></div><div class="avail-date-txt"><strong>Июнь 2026</strong> — 2 даты свободны</div></div>
          <div class="avail-date-row"><div class="avail-dot"></div><div class="avail-date-txt"><strong>Июль 2026</strong> — 3 даты свободны</div></div>
          <div class="avail-date-row"><div class="avail-dot amber"></div><div class="avail-date-txt"><strong>Август 2026</strong> — осталась 1 дата</div></div>
        </div>
        <p class="avail-note r d3">Бронирование минимум за 6–8 недель</p>
      </div>
      <div class="r d2">
        <a href="#inquiry" class="btn btn-ghost">Проверить дату →</a>
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div>
        <div class="statement-line r"></div>
        <p class="lbl lbl-dark r" style="margin-bottom:0">Вопросы</p>
        <h2 class="faq-title serif rc d1">Прямые<br><em>ответы.</em></h2>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="r d3">
          <a href="https://wa.me/19172514669" class="btn btn-wine-solid">WhatsApp</a>
          <a href="tel:+16178173157" class="btn-text dark">Звонок →</a>
        </div>
      </div>
      <div class="r d1">
        <div class="faq-list">
          <div class="faq-item"><div class="faq-q">Какой минимальный бюджет?<span class="faq-icon">+</span></div><div class="faq-a">Флористика камерных церемоний от $800. Полный дизайн — от $2,500. Мы считаем каждый проект индивидуально.</div></div>
          <div class="faq-item"><div class="faq-q">За сколько нужно бронировать?<span class="faq-icon">+</span></div><div class="faq-a">Рекомендуем за 6–8 недель. Для свадеб в высокий сезон (май–сентябрь) — за 3–4 месяца.</div></div>
          <div class="faq-item"><div class="faq-q">Вы работаете за пределами Бостона?<span class="faq-icon">+</span></div><div class="faq-a">Да. Мы обслуживаем Большой Бостон и выезжаем в соседние штаты для интересных проектов.</div></div>
          <div class="faq-item"><div class="faq-q">Можно заказать конкретные сорта?<span class="faq-icon">+</span></div><div class="faq-a">Да. Мы работаем с вашими предпочтениями, учитывая сезонность и доступность лучших плантаций.</div></div>
          <div class="faq-item"><div class="faq-q">Вы делаете монтаж и демонтаж?<span class="faq-icon">+</span></div><div class="faq-a">Да, работа на месте и последующая уборка декора включены в наши услуги.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eye">Одна дата. Один дизайн.</p>
      <h2 class="cta-title">Спроектируем<br>вашу свадьбу.</h2>
      <p class="cta-sub">Напишите дату, место и ваши пожелания.<br>Остальное мы возьмем на себя.</p>
      <div class="cta-btns">
        <a href="#inquiry" class="btn btn-ivory">Запросить проект</a>
        <a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+свадебную+флористику." class="btn btn-outline-ivory">WhatsApp напрямую</a>
      </div>
      <p class="cta-note">Доступность ограничена · Boston Flowers · Брайтон</p>
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

const bfForm=document.querySelector('.bf-form');
const bfSuccess=document.querySelector('.form-success');
if(bfForm){
  bfForm.addEventListener('submit',e=>{e.preventDefault();bfForm.style.display='none';bfSuccess.classList.add('active');});
}
</script>

<?php get_footer(); ?>
