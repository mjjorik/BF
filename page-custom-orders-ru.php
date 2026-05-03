<?php
/**
 * Template Name: Авторские заказы (RU)
 * Boston Flowers — Custom Orders page
 * Slug: /custom-orders
 * 
 * ДИНАМИЧЕСКИЕ ЭЛЕМЕНТЫ:
 * - paStatus/paDot/paTxt — показывает статус same-day (открыто/закрыто/amber)
 * - heroCta, ctaBtn1 — текст кнопки меняется по времени
 * - chips — budget selector, меняет контент bHintHeading/bHintBody/bHintMicro
 * - updateStatus() запускается каждые 30 секунд
 */

add_action('wp_head', function() { ?>
<title>Авторские букеты под заказ Бостон | Boston Flowers Studio</title>
<meta name="description" content="Индивидуальный дизайн букетов. Доставка день в день по Большому Бостону. Опишите повод и бюджет — мы создадим уникальную композицию.">
<link rel="canonical" href="https://red-cod-475508.hostingersite.com/ru/custom-orders">

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["Florist","LocalBusiness"],
      "@id": "https://red-cod-475508.hostingersite.com/ru/#business",
      "name": "Boston Flowers",
      "description": "Премиальная флористическая студия в Брайтоне, Бостон. Авторские букеты, доставка день в день, оформление свадеб и мероприятий.",
      "url": "https://red-cod-475508.hostingersite.com/ru/",
      "telephone": "+16178173157",
      "email": "bostons.flowers@gmail.com",
      "priceRange": "$$$",
      "address": {"@type":"PostalAddress","streetAddress":"267 North Beacon St","addressLocality":"Brighton","addressRegion":"MA","postalCode":"02135","addressCountry":"US"},
      "geo": {"@type":"GeoCoordinates","latitude":42.3601,"longitude":-71.1531},
      "openingHoursSpecification": [{"@type":"OpeningHoursSpecification","dayOfWeek":["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],"opens":"08:00","closes":"20:00"}],
      "sameAs": ["https://www.instagram.com/boston.flowers"]
    },
    {
      "@type": "Service",
      "name": "Авторские цветочные композиции",
      "description": "Расскажите нам о поводе, бюджете и стиле. Мы спроектируем и доставим уникальный букет в тот же день.",
      "image": "https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/05/custom-red-roses-studio-arrangement-boston-flowers.webp",
      "provider": {"@id":"https://red-cod-475508.hostingersite.com/ru/#business"},
      "areaServed": ["Boston", "Cambridge", "Newton", "Brighton", "Watertown", "Brookline"],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Custom Arrangements",
        "itemListElement": [
          {"@type":"Offer","name":"Композиция из 25 роз","price":"80","priceCurrency":"USD"},
          {"@type":"Offer","name":"Композиция из 50 роз","price":"180","priceCurrency":"USD"},
          {"@type":"Offer","name":"Композиция из 100 роз","price":"350","priceCurrency":"USD"}
        ]
      }
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+авторский+заказ." class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-bg"><div class="hero-glow-l"></div><div class="hero-glow-r"></div></div>
  <div class="hero-bf" aria-hidden="true">BF</div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Авторские заказы &mdash; Boston Flowers</span></div>
      <h1 class="hero-h1 serif">Букеты для<br>особых моментов.<br><em>Доставка сегодня.</em></h1>
      <p class="hero-sub">Опишите повод, ваш бюджет и стиль &mdash; мы спроектируем и доставим композицию в тот же день.</p>
      <p class="hero-confirm" id="heroConfirm">Подтверждаем в течение 5 минут.</p>
      <div class="hero-btns">
        <a href="https://wa.me/19172514669?text=Здравствуйте!+Мне+нужен+авторский+букет+на+сегодня." class="btn btn-ghost" id="heroCta">Заказать в WhatsApp</a>
        <a href="tel:+16178173157" class="btn-text" style="margin-top:2px">Позвонить нам &#8594;</a>
      </div>
    </div>
    <div class="hero-right">
      <div class="pa-card">
        <div class="pa-inner">
          <span class="pa-label">Ориентир цен &mdash; Розы</span>
          <div class="pa-scale">
            <div class="pa-row"><div><span class="pa-name">25 роз</span><span class="pa-note">сегодня &middot; авторская палитра</span></div><div><div class="pa-price">$80</div><span class="pa-price-from">от</span></div></div>
            <div class="pa-row"><div><span class="pa-name">50 роз</span><span class="pa-note">доступны инициалы на ленте</span></div><div><div class="pa-price">$180</div><span class="pa-price-from">от</span></div></div>
            <div class="pa-row"><div><span class="pa-name">100 роз</span><span class="pa-note">знаковая аранжировка студии</span></div><div><div class="pa-price">$350</div><span class="pa-price-from">от</span></div></div>
            <div class="pa-row"><div><span class="pa-name">200+ роз</span><span class="pa-note">масштабная гранд-композиция</span></div><div><div class="pa-price">$650</div><span class="pa-price-from">от</span></div></div>
          </div>
          <div class="pa-status" id="paStatus"><span class="pa-dot" id="paDot"></span><span class="pa-status-txt" id="paTxt">Проверка&hellip;</span></div>
          <p class="pa-foot">Доставка $20&ndash;$40 по Бостону &middot; <a href="/ru/delivery-areas/">Все зоны &rarr;</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>✦</span>Доставка сегодня при раннем заказе</span>
      <span class="marquee-item"><span>✦</span>Фото букета перед отправкой</span>
      <span class="marquee-item"><span>✦</span>Без шаблонов. Без лишнего.</span>
      <span class="marquee-item"><span>✦</span>Доставка по всему Бостону</span>
      <span class="marquee-item"><span>✦</span>Ответ в течение 5 минут</span>
      <span class="marquee-item"><span>✦</span>Ваша палитра и стиль</span>
      <span class="marquee-item"><span>✦</span>Доставка сегодня при раннем заказе</span>
      <span class="marquee-item"><span>✦</span>Фото букета перед отправкой</span>
      <span class="marquee-item"><span>✦</span>Без шаблонов. Без лишнего.</span>
      <span class="marquee-item"><span>✦</span>Доставка по всему Бостону</span>
      <span class="marquee-item"><span>✦</span>Ответ в течение 5 минут</span>
      <span class="marquee-item"><span>✦</span>Ваша палитра и стиль</span>
    </div>
  </div>
</section>

<!-- PHOTO SLOT 1: Custom red roses studio arrangement, WordPress media ID 373. -->
<section id="photo-1">
  <figure class="ph-media" aria-label="Авторская композиция из красных роз в студии Boston Flowers">
    <?php
      echo wp_get_attachment_image(
        373,
        'full',
        false,
        [
          'class' => 'ph-img',
          'alt' => 'флорист собирает большую корзину красных роз в студии Boston Flowers',
          'title' => 'Авторская композиция из красных роз от Boston Flowers',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '100vw',
        ]
      );
    ?>
  </figure>
  <div class="ph-copy">
    <div class="ph-eyebrow"><div class="ph-eyebrow-line"></div><span class="lbl">Авторские розы студии</span></div>
    <h2 class="ph-title serif">Собрано для момента.<br><em>Доставлено сегодня.</em></h2>
  </div>
</section>

<section id="budget">
  <div class="container">
    <div class="budget-hd r">
      <p class="lbl lbl-dark">С чего начать</p>
      <h2 class="budget-title serif">На какой бюджет<br>вы ориентируетесь?</h2>
    </div>
    <div class="pas-wrap r d1">
      <span class="pas-lbl">Розы &mdash; ориентир по цене</span>
      <div class="pas-strip">
        <div class="pas-item"><span class="pas-stems">25 стеблей</span><div class="pas-price">$80</div><span class="pas-sub">от</span></div>
        <div class="pas-item"><span class="pas-stems">50 стеблей</span><div class="pas-price">$180</div><span class="pas-sub">от</span></div>
        <div class="pas-item"><span class="pas-stems">100 стеблей</span><div class="pas-price">$350</div><span class="pas-sub">от</span></div>
        <div class="pas-item"><span class="pas-stems">200+ стеблей</span><div class="pas-price">$650</div><span class="pas-sub">от</span></div>
      </div>
    </div>
    <div class="budget-layout">
      <div>
        <div class="chips-row r" id="budgetChips">
          <button class="chip" data-heading="Лаконично и стильно" data-body="Изящная небольшая композиция с акцентом на форму и свежесть. Идеально для знака внимания или спонтанного подарка сегодня." data-micro="Те же принципы дизайна — малый масштаб." data-wa="Здравствуйте!+Я+ищу+небольшой+стильный+букет+до+$100.+Для+%5Bповод%5D%2C+доставка+в+%5Bрайон%5D%2C+сегодня+если+возможно.">До $100</button>
          <button class="chip" data-heading="Популярный выбор" data-body="Оптимальный баланс объема и выбора цветов. Более точный контроль палитры и уверенный визуальный эффект." data-micro="Лучшее сочетание стиля и наполнения." data-wa="Здравствуйте!+Хочу+заказать+авторский+букет+в+диапазоне+$100–200.+Для+%5Bповод%5D%2C+доставка+в+%5Bрайон%5D%2C+предпочитаю+%5Bстиль/цвета%5D.">$100 &ndash; $200</button>
          <button class="chip" data-heading="Премиальный эффект" data-body="Выразительная аранжировка с редкими сортами. Когда букет должен выглядеть статусно и эмоционально сильно." data-micro="Больше объема. Больше искусства. Больше восторга." data-wa="Здравствуйте!+Меня+интересует+премиальный+заказ+в+диапазоне+$200–350.+Для+%5Bповод%5D%2C+доставка+в+%5Bрайон%5D%2C+%5Bстиль/цвета%5D.">$200 &ndash; $350</button>
          <button class="chip" data-heading="Гранд-композиция" data-body="Масштабная работа для особых дат: юбилеи, предложения, VIP-подарки. Дизайн, который заполняет пространство." data-micro="Создано, чтобы это запомнили." data-wa="Здравствуйте!+Мне+нужен+впечатляющий+заказ+в+диапазоне+$350–650.+Для+%5Bповод%5D%2C+доставка+в+%5Bрайон%5D%2C+хочу+что-то+масштабное.">$350 &ndash; $650</button>
          <button class="chip" data-heading="Мастерство студии" data-body="Полная творческая свобода флориста. Уникальные инсталляции, редчайшие цветы и максимальный масштаб." data-micro="Всё внимание студии. Без компромиссов." data-wa="Здравствуйте!+Я+хочу+обсудить+гранд-заказ+от+$650.+Для+%5Bповод%5D%2C+доставка+в+%5Bрайон%5D.">$650+</button>
        </div>
        <div class="b-hint r d1" id="budgetHint">
          <div class="b-hint-lbl">Что входит в бюджет</div>
          <div class="b-hint-heading" id="bHintHeading" style="color:var(--stone);font-size:16px;font-family:'DM Sans',sans-serif;font-weight:300;">Выберите сумму, чтобы увидеть возможности.</div>
          <div class="b-hint-body" id="bHintBody"></div>
          <div class="b-hint-micro" id="bHintMicro"></div>
          <div class="b-hint-trust">Мы работаем в рамках вашего бюджета &mdash; без навязывания лишнего.</div>
        </div>
        <a href="https://wa.me/19172514669?text=Здравствуйте!+Мне+нужен+авторский+букет+на+сегодня." class="b-wa r d2" id="budgetWaBtn"><svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg> Заказать в WhatsApp</a>
      </div>
      <div class="r d1">
        <h3 class="dir-hd serif">Популярные направления</h3>
        <p class="dir-sub">Что мы делаем чаще всего &mdash; доступно сегодня при заказе до 10:30.</p>
        <div class="dir-list">
          <div class="dir-row"><div><div class="dir-name">Розы с инициалами</div><div class="dir-detail">50 или 100 стеблей &middot; монограмма на ленте</div></div><div class="dir-price">от $180</div></div>
          <div class="dir-row"><div><div class="dir-name">Розовый Премиум Микс</div><div class="dir-detail">Пионовидные розы &middot; ранункулюсы &middot; сезонные</div></div><div class="dir-price">от $200</div></div>
          <div class="dir-row"><div><div class="dir-name">Букет с гортензией</div><div class="dir-detail">Подпись студии &middot; для любого повода</div></div><div class="dir-price">от $125</div></div>
          <div class="dir-row"><div><div class="dir-name">Пионы и Тюльпаны</div><div class="dir-detail">Только в сезон &middot; стоит того, чтобы подождать</div></div><div class="dir-price">от $160</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="photo-2">
  <div class="emo-split">
    <figure class="emo-photo r" aria-label="Композиция из красных и белых роз перед доставкой Boston Flowers">
      <?php
        echo wp_get_attachment_image(
          374,
          'full',
          false,
          [
            'class' => 'emo-img',
            'alt' => 'большая композиция из красных и белых роз в автомобиле перед доставкой в Бостоне',
            'title' => 'Момент доставки красных и белых роз в Бостоне',
            'loading' => 'lazy',
            'decoding' => 'async',
            'sizes' => '(max-width: 1024px) 100vw, 50vw',
          ]
        );
      ?>
    </figure>
    <div class="emo-copy r d1">
      <span class="lbl" style="margin-bottom:18px">Момент</span>
      <h2 class="emo-title serif">Не просто цветы.<br><em>Чувства.</em></h2>
      <p class="emo-desc">Мы думаем о человеке, который получит букет, а не только о композиции. Каждый авторский заказ &mdash; это событие.</p>
      <blockquote class="emo-quote">&ldquo;Букет превзошел все мои ожидания &mdash; каждая деталь была продумана до мелочей.&rdquo;</blockquote>
    </div>
  </div>
</section>

<section id="how">
  <div class="container">
    <div class="how-hd r"><p class="lbl">Процесс</p><h2 class="how-hd-title serif">Четыре шага.<br><em>Один день.</em></h2></div>
    <div class="how-grid">
      <div class="how-step r"><div class="step-num">01</div><div class="step-ttl">Вы присылаете запрос</div><div class="step-desc">Повод, бюджет, стиль или цвета, район доставки. В WhatsApp или по телефону. Отвечаем за минуты.</div><span class="step-tag">Мгновенно</span></div>
      <div class="how-step r d1"><div class="step-num">02</div><div class="step-ttl">Мы подтверждаем наличие</div><div class="step-desc">Если цветы в студии &mdash; 1&ndash;2ч. Если нужна поставка &mdash; 3&ndash;4ч. Сообщим сроки до оплаты.</div><span class="step-tag">1&ndash;4 часа</span></div>
      <div class="how-step step-preview r d2"><div class="step-num">03</div><div class="step-ttl">Присылаем фото</div><div class="step-desc">Фото готовой композиции перед тем, как она покинет студию. Вы одобряете. Это наш стандарт качества.</div><span class="step-tag">Перед доставкой</span></div>
      <div class="how-step r d3"><div class="step-num">04</div><div class="step-ttl">Доставляем</div><div class="step-desc">Прямо по адресу. Бостон и окрестности, 1&ndash;2ч после готовности. Присылаем уведомление о вручении.</div><span class="step-tag">1&ndash;2 часа</span></div>
    </div>
  </div>
</section>

<section id="statement">
  <figure class="stmt-media" aria-label="Авторский букет с белой гортензией от Boston Flowers">
    <?php
      echo wp_get_attachment_image(
        376,
        'full',
        false,
        [
          'class' => 'stmt-img',
          'alt' => 'авторский букет с белой гортензией в черной упаковке от Boston Flowers',
          'title' => 'Авторский букет с белой гортензией от Boston Flowers',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '100vw',
        ]
      );
    ?>
  </figure>
  <div class="stmt-overlay"></div>
  <div class="container stmt-content">
    <div class="stmt-inner r">
      <span class="stmt-kicker">Авторские заказы без шаблонов</span>
      <p class="stmt-txt serif">Если это важно,<br><em>мы сделаем это правильно.</em></p>
      <span class="stmt-divider r" aria-hidden="true"></span>
      <p class="stmt-note">Розы, гортензии, сезонные цветы или большая композиция — каждый заказ мы собираем под повод, получателя и момент доставки.</p>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div>
        <p class="lbl r" style="margin-bottom:0">Вопросы</p>
        <h2 class="faq-ttl serif r d1">Прямые<br><em>ответы.</em></h2>
        <p class="faq-intro r d2">Честно и уверенно. Если вашего вопроса нет здесь &mdash; спрашивайте напрямую.</p>
        <span class="faq-lbl r d3">Нужна помощь?</span>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="r d3">
          <a href="https://wa.me/19172514669" class="btn btn-ghost">WhatsApp</a>
          <a href="tel:+16178173157" class="btn-text">Позвонить &#8594;</a>
        </div>
      </div>
      <div class="r d1">
        <div class="faq-list">
          <div class="faq-item"><div class="faq-q">Можно ли сделать на сегодня?<span class="faq-icon">+</span></div><div class="faq-a">Да, при заказе до 10:30 утра. После этого &mdash; свяжитесь с нами, и мы проверим, что доступно прямо сейчас.</div></div>
          <div class="faq-item"><div class="faq-q">Можно выбрать конкретные цветы?<span class="faq-icon">+</span></div><div class="faq-a">Да. Опишите палитру, стиль и повод. Мы работаем с тем, что есть в наличии, и всегда предложим альтернативу, если чего-то нет.</div></div>
          <div class="faq-item"><div class="faq-q">Я увижу букет до доставки?<span class="faq-icon">+</span></div><div class="faq-a">Да. Мы присылаем фото готовой работы. Вы можете одобрить её или попросить внести корректировки.</div></div>
          <div class="faq-item"><div class="faq-q">На какой бюджет рассчитывать?<span class="faq-icon">+</span></div><div class="faq-a">Авторские заказы начинаются от $80. Самые популярные — $150–350. Гранд-композиции от $500.</div></div>
          <div class="faq-item"><div class="faq-q">Доставляете ли вы за пределы Бостона?<span class="faq-icon">+</span></div><div class="faq-a">Да. Бостон и Кембридж от $20. Дальние зоны $35–40. Род-Айленд около $120. Напишите нам для уточнения.</div></div>
          <div class="faq-item"><div class="faq-q">Что написать в первом сообщении?<span class="faq-icon">+</span></div><div class="faq-a">Повод &middot; Бюджет &middot; Стиль или цвета &middot; Район доставки &middot; Желаемое время. Этого достаточно.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="occasions">
  <div class="container">
    <div class="occasions-hd r">
      <p class="lbl lbl-dark">По какому поводу заказывают</p>
      <h2 class="occasions-title serif">Каждое событие<br><em>требует своего подхода.</em></h2>
    </div>
    <div class="occasions-grid">
      <div class="occ-card r d1">
        <div class="occ-num">01</div>
        <h3 class="occ-title serif">Дни рождения</h3>
        <p class="occ-body">Доставка в тот же день. Добавим персональную открытку и подберем цвета под вкус именинника.</p>
        <span class="occ-range">От $80</span>
      </div>
      <div class="occ-card r d2">
        <div class="occ-num">02</div>
        <h3 class="occ-title serif">Годовщины</h3>
        <p class="occ-body">Розы, пионы или микс &mdash; спроектируем в вашей палитре. Гранд-аранжировки доступны от $350.</p>
        <span class="occ-range">От $150</span>
      </div>
      <div class="occ-card r d3">
        <div class="occ-num">03</div>
        <h3 class="occ-title serif">Предложения</h3>
        <p class="occ-body">Мы делали это много раз. 100 роз или авторская палитра &mdash; мы зададим правильные вопросы.</p>
        <span class="occ-range">От $350</span>
      </div>
      <div class="occ-card r d4">
        <div class="occ-num">04</div>
        <h3 class="occ-title serif">Корпоративные подарки</h3>
        <p class="occ-body">Фирменная упаковка, стабильное качество. Сообщите объем, и мы сделаем всё безупречно.</p>
        <span class="occ-range">От $120</span>
      </div>
      <div class="occ-card r d1">
        <div class="occ-num">05</div>
        <h3 class="occ-title serif">Извинения</h3>
        <p class="occ-body">Без лишних слов. Мы создаем букеты, которые говорят то, что трудно выразить словами. Доставим быстро.</p>
        <span class="occ-range">От $100</span>
      </div>
      <div class="occ-card r d2">
        <div class="occ-num">06</div>
        <h3 class="occ-title serif">Просто так</h3>
        <p class="occ-body">Лучший вид заказа. Расскажите, что они любят, или доверьтесь нам &mdash; мы редко ошибаемся.</p>
        <span class="occ-range">От $80</span>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eye">Готовы заказать?</p>
      <h2 class="cta-ttl" id="ctaTitle">Расскажите, что вам нужно.<br>Мы создадим это сегодня.</h2>
      <p class="cta-sub" id="ctaSub">Доступно на сегодня при заказе до 10:30.<br>После этого &mdash; спрашивайте, мы редко говорим «нет».</p>
      <div class="cta-btns">
        <a href="https://wa.me/19172514669?text=Здравствуйте!+Мне+нужен+авторский+букет+на+сегодня." class="btn btn-ivory" id="ctaBtn1">Заказать в WhatsApp</a>
        <a href="tel:+16178173157" class="btn btn-outline-ivory">Позвонить в студию</a>
      </div>
      <p class="cta-conf" id="ctaConf">Время ответа: 5&ndash;10 минут</p>
      <div class="cta-inst">
        <span class="cta-inst-lbl">Пришлите нам</span>
        <div class="cta-inst-items">
          <span class="cta-inst-item">Повод</span>
          <span class="cta-inst-item">Бюджет</span>
          <span class="cta-inst-item">Стиль или цвета</span>
          <span class="cta-inst-item">Район доставки</span>
          <span class="cta-inst-item">Время</span>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
const prog=document.getElementById('scrollProgress');
window.addEventListener('scroll',function(){prog.style.width=Math.min(scrollY/(document.body.scrollHeight-innerHeight)*100,100)+'%';},{passive:true});
const ro=new IntersectionObserver(function(e){e.forEach(function(x){if(x.isIntersecting){x.target.classList.add('on');ro.unobserve(x.target)}});},{threshold:.06,rootMargin:'0px 0px -16px 0px'});
document.querySelectorAll('.r').forEach(function(el){ro.observe(el)});
setTimeout(function(){document.querySelectorAll('.r:not(.on)').forEach(function(el){el.classList.add('on')})},2000);

window.addEventListener('scroll',function(){document.getElementById('waFloat').classList.toggle('visible',scrollY>300)},{passive:true});

function pad(n){return String(n).padStart(2,'0')}
function getBostonMins(){var now=new Date(new Date().toLocaleString('en-US',{timeZone:'America/New_York'}));return now.getHours()*60+now.getMinutes()}
function set(id,val){var el=document.getElementById(id);if(el&&val!==undefined)el.textContent=val}
function updateStatus(){
  var mins=getBostonMins();
  var dot=document.getElementById('paDot');var txt=document.getElementById('paTxt');var bar=document.getElementById('paStatus');
  if(mins<630){
    var rem=630-mins;var h=Math.floor(rem/60),m=rem%60;
    dot.className='pa-dot';bar.className='pa-status';
    txt.textContent='Доставка сегодня открыта — '+(h>0?h+'ч '+pad(m)+'м':m+' мин')+' осталось';
    set('heroCta','Заказать на сегодня');set('ctaBtn1','Заказать на сегодня');
    set('heroConfirm','Подтверждаем в течение 5 минут.');
    set('ctaConf','Время ответа: 5\u201310 минут');
    set('ctaTitle','Расскажите, что вам нужно. Мы создадим это сегодня.');
    set('ctaSub','Доступно на сегодня при заказе до 10:30. После этого — спрашивайте, мы редко говорим «нет».');
  }else if(mins<1200){
    dot.className='pa-dot amber';bar.className='pa-status amber';
    txt.textContent='Поздний заказ? Мы всё равно проверим возможности.';
    set('heroCta','Уточнить наличие на сегодня');set('ctaBtn1','Уточнить наличие');
    set('heroConfirm','Отвечаем в течение нескольких минут.');set('ctaConf','Отвечаем мгновенно.');
    set('ctaTitle','Уже после дедлайна? Всё равно спросите.');
    set('ctaSub','Мы часто успеваем сделать доставку и после 10:30. Напишите нам — ответим сразу.');
  }else{
    dot.className='pa-dot closed';bar.className='pa-status closed';
    txt.textContent='Студия закрыта — принимаем заказы на завтра';
    set('heroCta','Заказать на завтра');set('ctaBtn1','Заказать на завтра');
    set('heroConfirm','Откроемся завтра в 8:00 утра.');set('ctaConf','Подтвердим первым делом утром.');
    set('ctaTitle','Оформите заказ сейчас. Мы подготовим его завтра.');
    set('ctaSub','Студия открывается в 8:00. Закажите сейчас, и букет будет готов к утру.');
  }
}
updateStatus();setInterval(updateStatus,30000);

var chips=document.querySelectorAll('.chip');
var bHintHeading=document.getElementById('bHintHeading');
var bHintBody=document.getElementById('bHintBody');
var bHintMicro=document.getElementById('bHintMicro');
var waBtn=document.getElementById('budgetWaBtn');
chips.forEach(function(chip){chip.addEventListener('click',function(){chips.forEach(function(c){c.classList.remove('active')});chip.classList.add('active');bHintHeading.textContent=chip.dataset.heading;bHintHeading.style.color='';bHintHeading.style.fontSize='';bHintHeading.style.fontFamily='';bHintHeading.style.fontWeight='';bHintBody.textContent=chip.dataset.body;bHintMicro.textContent=chip.dataset.micro;waBtn.href='https://wa.me/19172514669?text='+chip.dataset.wa;})});

document.querySelectorAll('.faq-item').forEach(function(item){item.querySelector('.faq-q').addEventListener('click',function(){var isOpen=item.classList.contains('open');document.querySelectorAll('.faq-item').forEach(function(i){i.classList.remove('open')});if(!isOpen)item.classList.add('open')})});
</script>

<?php get_footer(); ?>
