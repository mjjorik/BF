<?php
/**
 * Template Name: Зоны доставки (RU)
 * Boston Flowers — Delivery Areas page
 * Slug: /delivery-areas
 */

add_action('wp_head', function() { ?>
<title>Районы доставки цветов Бостон | Boston Flowers</title>
<meta name="description" content="Доставка цветов день в день по Бостону и Кембриджу. Расширенная доставка по Большому Бостону и далее по запросу.">
<link rel="canonical" href="https://bostonflowers.com/ru/zony-dostavki/">
<meta property="og:title" content="Районы доставки цветов Бостон | Boston Flowers">
<meta property="og:description" content="Доставка цветов день в день по Бостону, Кембриджу, Ньютону. Расширенные зоны по запросу. Заказ до 10:30 утра.">
<meta property="og:image" content="https://bostonflowers.com/og-delivery.jpg">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/ru/zony-dostavki/">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Florist",
      "@id": "https://bostonflowers.com/#business",
      "name": "Boston Flowers",
      "description": "Премиальная флористическая студия в Бостоне. Доставка день в день по Большому Бостону.",
      "url": "https://bostonflowers.com/ru/",
      "telephone": "+16178173157",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "267 North Beacon St",
        "addressLocality": "Brighton",
        "addressRegion": "MA",
        "postalCode": "02135",
        "addressCountry": "US"
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"Доставляете ли вы в мой район?","acceptedAnswer":{"@type":"Answer","text":"Если вы в Бостоне, Кембридже или Ньютоне — да, в тот же день. Дальние районы обсуждаются индивидуально."}},
        {"@type":"Question","name":"Сколько стоит доставка за город?","acceptedAnswer":{"@type":"Answer","text":"Центр Бостона — от $20. Большой Бостон — $35–40. Дальние маршруты — по запросу."}}
      ]
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669?text=Здравствуйте!+Вы+доставляете+в+мой+район%3F" class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-word" aria-hidden="true">DELIVER</div>
  <div class="hero-inner">
    <div class="hero-eyebrow r"><div class="hero-line"></div><span class="lbl">Районы доставки</span></div>
    <h1 class="hero-h1 serif r d1">Доставка цветов.<br><em>Бостон и пригороды.</em></h1>
    <p class="hero-sub r d2">День в день по Бостону и соседним районам. Доставка по всему Большому Бостону — по запросу.</p>
    <div class="hero-actions r d3">
      <a href="#zones" class="btn btn-ghost">Проверить свой район</a>
      <a href="/ru/dostavka/" class="btn-text">Заказать сегодня →</a>
    </div>
    <p class="hero-meta r d3">Брайтон, Бостон · Доставка сегодня · Дальние зоны по запросу</p>
  </div>
</section>

<div id="status-strip">
  <div class="status-strip-inner">
    <div class="ss-item"><span class="ss-dot green"></span>Доставка сегодня по Бостону и пригородам</div>
    <div class="ss-item"><span class="ss-dot amber"></span>Заказы до 10:30 AM получают приоритет</div>
    <div class="ss-item"><span class="ss-dot"></span>Дальние маршруты — по индивидуальному расчету</div>
    <div class="ss-item"><span class="ss-dot"></span>Самовывоз в Брайтоне (267 North Beacon St)</div>
  </div>
</div>

<section id="zones">
  <div class="container">
    <div class="zones-head r">
      <span class="lbl lbl-dark">Полный список</span>
      <h2 class="zones-title serif">Районы, с которыми мы работаем.<br><em>Чистая логистика. Прозрачные цены.</em></h2>
    </div>

    <div class="zone-grid r d1">
      <article class="zone-card">
        <span class="zone-tag">Центр · Сегодня</span>
        <h3 class="zone-name serif">Бостон и рядом</h3>
        <div class="zone-price serif">от $20 <span>доставка</span></div>
        <div class="city-list">
          <span class="city-chip">Boston</span><span class="city-chip">Brighton</span><span class="city-chip">Allston</span><span class="city-chip">Back Bay</span><span class="city-chip">Beacon Hill</span><span class="city-chip">South End</span><span class="city-chip">Seaport</span><span class="city-chip">Cambridge</span><span class="city-chip">Brookline</span><span class="city-chip">Somerville</span><span class="city-chip">Watertown</span><span class="city-chip">Newton</span><span class="city-chip">Dorchester</span>
        </div>
      </article>

      <article class="zone-card">
        <span class="zone-tag">Расширенная · Большой Бостон</span>
        <h3 class="zone-name serif">Средний радиус</h3>
        <div class="zone-price serif">$35–40 <span>доставка</span></div>
        <div class="city-list">
          <span class="city-chip">Waltham</span><span class="city-chip">Quincy</span><span class="city-chip">Needham</span><span class="city-chip">Burlington</span><span class="city-chip">Lexington</span><span class="city-chip">Winchester</span><span class="city-chip">Milton</span><span class="city-chip">Dedham</span><span class="city-chip">Framingham</span><span class="city-chip">Natick</span><span class="city-chip">Wellesley</span>
        </div>
      </article>

      <article class="zone-card">
        <span class="zone-tag">По запросу · Дальняя</span>
        <h3 class="zone-name serif">За пределы Бостона</h3>
        <div class="zone-price serif">от $100–120 <span>доставка</span></div>
        <div class="city-list">
          <span class="city-chip">Providence, RI</span><span class="city-chip">Rhode Island</span><span class="city-chip">Cape Cod</span><span class="city-chip">New Hampshire</span><span class="city-chip">Worcester</span><span class="city-chip">Salem</span><span class="city-chip">Newburyport</span>
        </div>
      </article>
    </div>

    <div class="not-listed r d2">
      <div>
        <div class="nl-title serif">Нет вашего города?</div>
        <p class="nl-sub">Всё равно спросите. Мы отправляем композиции за пределы стандартных зон — напишите адрес, и мы рассчитаем логистику.</p>
      </div>
      <a href="https://wa.me/19172514669?text=Здравствуйте!+Вы+доставляете+в+мой+район%3F" class="nl-btn" target="_blank" rel="noopener">Уточнить напрямую</a>
    </div>
  </div>
</section>

<section id="timing">
  <div class="container">
    <div class="timing-grid">
      <div class="r">
        <span class="lbl">Как это работает</span>
        <h2 class="timing-title serif">От заказа<br>до <em>вашей двери.</em></h2>
        <p class="timing-sub">Чистый логистический процесс без лишних звеньев. Мы информируем вас на каждом этапе.</p>
      </div>
      <div class="timing-steps r d1">
        <div class="timing-step"><div class="ts-time serif">0 мин</div><div><div class="ts-name">Вы оформляете заказ</div><div class="ts-note">Через WhatsApp или телефон. Мы оперативно подтверждаем детали.</div></div></div>
        <div class="timing-step"><div class="ts-time serif">1–2 ч</div><div><div class="ts-name">Сборка композиции</div><div class="ts-note">При наличии в студии. Если нужна закупка, это займет 2–3 часа дополнительно.</div></div></div>
        <div class="timing-step"><div class="ts-time serif">+ 1–2 ч</div><div><div class="ts-name">Путь до адреса</div><div class="ts-note">Прямая курьерская передача. Вы узнаете, когда цветы покинут студию.</div></div></div>
        <div class="timing-step"><div class="ts-time serif">10:30 AM</div><div><div class="ts-name">Дедлайн на гарантию</div><div class="ts-note">Заказы, поступившие до 10:30, выполняются день в день со 100% гарантией.</div></div></div>
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div>
        <span class="lbl lbl-dark r">Вопросы</span>
        <h2 class="faq-title serif r d1">Прямые<br><em>ответы.</em></h2>
      </div>
      <div class="faq-list r d1">
        <div class="faq-item">
          <div class="faq-q">Доставляете ли вы в мой район?<span class="faq-icon">+</span></div>
          <div class="faq-a">Если вы в Бостоне, Кембридже или Ньютоне — да, в тот же день. Для средних зон (Берлингтон, Квинси) — чаще всего да. Род-Айленд — уточняйте.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Сколько стоит доставка за город?<span class="faq-icon">+</span></div>
          <div class="faq-a">Центр Бостона стартует от $20. Большой Бостон — $35–40. Дальние поездки оцениваются по расстоянию и загруженности трафика.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Есть ли доставка сегодня за город?<span class="faq-icon">+</span></div>
          <div class="faq-a">До 10:30 утра шансы на это высоки. В течение дня мы подтверждаем логистику в зависимости от текущей загрузки курьеров.</div>
        </div>
        <div class="faq-item">
          <div class="faq-q">Можно забрать заказ лично?<span class="faq-icon">+</span></div>
          <div class="faq-a">Да. Самовывоз из студии в Брайтоне (267 North Beacon St) бесплатен. Просто укажите это при оформлении заказа.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <h2 class="cta-title serif">Укажите точку доставки.<br>Мы займемся остальным.</h2>
      <p class="cta-sub">Пришлите адрес, желаемое время и примерный бюджет или стиль.</p>
      <p class="cta-send">Нам потребуется: адрес · удобное время · бюджет</p>
      <div class="cta-btns">
        <a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+заказать+цветы+с+доставкой." class="btn btn-ivory" target="_blank" rel="noopener">Оформить в WhatsApp</a>
        <a href="tel:+16178173157" class="btn btn-ghost">Позвонить флористу</a>
      </div>
    </div>
  </div>
</section>

<script>
const ro=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('on');ro.unobserve(e.target)}})},{threshold:.08,rootMargin:'0px 0px -24px 0px'});
document.querySelectorAll('.r').forEach(el=>ro.observe(el));
setTimeout(()=>document.querySelectorAll('.r:not(.on)').forEach(el=>el.classList.add('on')),1200);

const prog=document.getElementById('scrollProgress');
if(prog)window.addEventListener('scroll',()=>{prog.style.width=Math.min(scrollY/(document.body.scrollHeight-innerHeight)*100,100)+'%';},{passive:true});

const wa=document.getElementById('waFloat');
if(wa)window.addEventListener('scroll',()=>wa.classList.toggle('visible',scrollY>300),{passive:true});

document.querySelectorAll('.faq-item').forEach(item=>{
  item.querySelector('.faq-q').addEventListener('click',()=>{
    const open=item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i=>i.classList.remove('open'));
    if(!open)item.classList.add('open');
  });
});
</script>

<?php get_footer(); ?>
