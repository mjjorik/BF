<?php
/**
 * Template Name: Мероприятия (RU)
 * Boston Flowers — Event Floral Design page
 * Slug: /events
 */

add_action('wp_head', function() { ?>
<title>Флористика мероприятий Бостон | Boston Flowers Studio</title>
<meta name="description" content="Флористическое оформление частных ужинов, презентаций брендов и VIP-встреч в Бостоне. Мы формируем пространство, а не просто заполняем его.">
<link rel="canonical" href="https://bostonflowers.com/ru/meropriyatiya/">
<meta property="og:title" content="Флористика мероприятий Бостон | Boston Flowers Studio">
<meta property="og:description" content="Флористическое оформление частных ужинов, презентаций брендов и VIP-встреч в Бостоне.">
<meta property="og:image" content="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/05/event-floral-lounge-installation-boston-flowers.webp">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/ru/meropriyatiya/">
<meta name="twitter:card" content="summary_large_image">
<script type="application/ld+json">
{
  "@context":"https://schema.org",
  "@graph": [
    {
      "@type":"Florist",
      "name":"Boston Flowers",
      "image":"https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/05/event-floral-lounge-installation-boston-flowers.webp",
      "@id":"https://bostonflowers.com/#florist",
      "url":"https://bostonflowers.com/ru/",
      "telephone":"+16178173157",
      "priceRange":"$$$",
      "address":{"@type":"PostalAddress","streetAddress":"267 North Beacon St","addressLocality":"Brighton","addressRegion":"MA","postalCode":"02135","addressCountry":"US"}
    },
    {
      "@type":"Service",
      "serviceType":"Event floral design",
      "provider":{"@id":"https://bostonflowers.com/#florist"},
      "areaServed":["Boston","Brighton","Cambridge","Newton"],
      "description":"Флористика для частных ужинов, брендовых событий и VIP-приемов. Полное визуальное оформление пространства в Бостоне."
    },
    {
      "@type":"FAQPage",
      "mainEntity": [
        {"@type":"Question","name":"За какое время нужно бронировать событие?","acceptedAnswer":{"@type":"Answer","text":"В идеале за 2–4 недели. Для крупных инсталляций лучше за 4–6 недель."}},
        {"@type":"Question","name":"Есть ли минимальный бюджет?","acceptedAnswer":{"@type":"Answer","text":"Оформление малых событий начинается от $800, полного зала — от $1,800."}},
        {"@type":"Question","name":"Вы осуществляете монтаж и демонтаж?","acceptedAnswer":{"@type":"Answer","text":"Да, полный цикл на локации включен."}},
        {"@type":"Question","name":"Вы работаете по референсам?","acceptedAnswer":{"@type":"Answer","text":"Да. Присылайте ваши мудборды, мы адаптируем их в реальный проект."}},
        {"@type":"Question","name":"Выезжаете ли вы за пределы Бостона?","acceptedAnswer":{"@type":"Answer","text":"Да. Мы работаем по всему Большому Бостону и соседним штатам."}}
      ]
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+оформление+события." class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24" width="24" height="24" style="width:24px; height:24px; fill:#fff; display:block;"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-left">
    <div class="hero-bf" aria-hidden="true">BF</div>
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Оформление событий — Бостон</span></div>
    <h1 class="hero-h1 serif">Флористика событий.<br><em>Дизайн вечера.</em></h1>
    <p class="hero-sub">Для частных ужинов, презентаций и VIP-приемов. Мы формируем пространство, а не просто заполняем его.</p>
    <p class="hero-micro">Никаких шаблонов. Только суть. Создано для момента.</p>
    <div class="hero-bullets">
      <div class="hero-bullet">Частные и корпоративные события</div>
      <div class="hero-bullet">Монтаж и демонтаж включены</div>
      <div class="hero-bullet">Дизайн под пространство</div>
    </div>
    <div class="hero-btns">
      <a href="#contact" class="btn btn-ghost">Запросить проект</a>
      <a href="#gallery" class="btn-text">Наши работы →</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-right-inner">
      <div class="hero-photo">
        <?php echo wp_get_attachment_image(364, 'full', false, array(
          'class' => 'hero-photo-img',
          'alt' => 'Розовое lounge-кресло с цветочными инсталляциями из роз, маттиолы и свечами для события в Бостоне',
          'title' => 'Флористическая lounge-инсталляция для события в Бостоне',
          'loading' => 'eager',
          'fetchpriority' => 'high',
          'decoding' => 'async',
          'sizes' => '(min-width: 1101px) 45vw, (max-width: 1024px) and (orientation: landscape) 45vw, 0px'
        )); ?>
      </div>
      <span class="hero-ph-lbl">Флористика события · Lounge-инсталляция</span>
    </div>
  </div>
</section>

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>✦</span>Частные и корпоративные события</span>
      <span class="marquee-item"><span>✦</span>Монтаж и демонтаж на месте</span>
      <span class="marquee-item"><span>✦</span>Дизайн под ваше пространство</span>
      <span class="marquee-item"><span>✦</span>Никаких шаблонов. Только свежесть.</span>
      <span class="marquee-item"><span>✦</span>Весь Большой Бостон</span>
      <span class="marquee-item"><span>✦</span>Частные и корпоративные события</span>
      <span class="marquee-item"><span>✦</span>Монтаж и демонтаж на месте</span>
      <span class="marquee-item"><span>✦</span>Дизайн под ваше пространство</span>
      <span class="marquee-item"><span>✦</span>Никаких шаблонов. Только свежесть.</span>
      <span class="marquee-item"><span>✦</span>Весь Большой Бостон</span>
    </div>
  </div>
</section>

<section id="handle">
  <div class="container">
    <div class="handle-hd">
      <p class="lbl lbl-dark r">Что мы берем на себя</p>
      <h2 class="handle-title serif rc d1">Больше чем цветы<br><em>на столах.</em></h2>
      <p class="handle-sub r d2">От одиночной инсталляции до полного изменения зала — мы снимаем вопрос декора с ваших плеч.</p>
    </div>
    <div class="handle-grid">
      <div class="handle-item r">
        <div class="handle-num">01</div>
        <div class="handle-name serif">Оформление столов</div>
        <p class="handle-desc">Центральные композиции и раннеры. Единый дизайн без монотонности.</p>
      </div>
      <div class="handle-item r d1">
        <div class="handle-num">02</div>
        <div class="handle-name serif">Входные зоны</div>
        <p class="handle-desc">Архитектурные композиции и арки. Первое впечатление от события.</p>
      </div>
      <div class="handle-item r d2">
        <div class="handle-num">03</div>
        <div class="handle-name serif">Флористика бара</div>
        <p class="handle-desc">Композиции для зон с высокой активностью. Идеальный вид на весь вечер.</p>
      </div>
      <div class="handle-item r d3">
        <div class="handle-num">04</div>
        <div class="handle-name serif">Акцентные инсталляции</div>
        <p class="handle-desc">Масштабные объекты для презентаций или фотозон. Точка притяжения зала.</p>
      </div>
      <div class="handle-item r d4">
        <div class="handle-num">05</div>
        <div class="handle-name serif">Подарки гостям</div>
        <p class="handle-desc">Премиальные композиции для VIP. Передача на месте или прямая доставка.</p>
      </div>
    </div>
  </div>
</section>

<section id="who">
  <div class="container">
    <div class="who-hd">
      <p class="lbl r">События</p>
      <h2 class="who-title serif rc d1">Моменты, которые<br><em>остаются в памяти.</em></h2>
    </div>
    <div class="who-grid">
      <div class="who-item r">
        <span class="who-seg">Частные ужины</span>
        <div class="who-name serif">Камерные торжества</div>
        <p class="who-pain">Дни рождения и юбилеи. Когда нужно создать настроение без лишнего шума.</p>
      </div>
      <div class="who-item r d1">
        <span class="who-seg">Запуски брендов</span>
        <div class="who-name serif">PR-события</div>
        <p class="who-pain">Флористика, которая усиливает визуальный код вашего бренда.</p>
      </div>
      <div class="who-item r d2">
        <span class="who-seg">VIP-приемы</span>
        <div class="who-name serif">Для клиентов и партнеров</div>
        <p class="who-pain">Безупречность с первого взгляда. Одна ошибка рушит статус всего вечера.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Рестораны и отели</span>
        <div class="who-name serif">Особые вечера</div>
        <p class="who-pain">Шеф-тейблы и частные залы. Декор, который продолжает эстетику места.</p>
      </div>
      <div class="who-item r d1">
        <span class="who-seg">Шоурумы и выставки</span>
        <div class="who-name serif">Ритейл и арт</div>
        <p class="who-pain">Цветы, которые возвышают пространство, не перетягивая внимание на себя.</p>
      </div>
      <div class="who-item r d2">
        <span class="who-seg">Помолвки и сюрпризы</span>
        <div class="who-name serif">Личные моменты</div>
        <p class="who-pain">Абсолютная готовность до вашего прихода. Эмоции, воплощенные в форме.</p>
      </div>
    </div>
  </div>
</section>

<section id="gallery">
  <div class="gallery-hd">
    <p class="lbl r">Избранное</p>
    <h2 class="gallery-hd-title serif rc d1">Проекты<br><em>для событий.</em></h2>
    <p class="gallery-sub r d2">От камерных ужинов до масштабных презентаций. Только наши реальные работы.</p>
  </div>
  <div class="gallery-scroll" id="galleryScroll">
    <div class="gallery-item">
      <div class="gallery-item-img gallery-overlay-soft">
        <?php echo wp_get_attachment_image(365, 'full', false, array(
          'alt' => 'большая цветочная арка у входа с розами и зеленью для события Boston Flowers',
          'title' => 'Цветочная входная арка для события в Бостоне',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 420px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Цветочная арка<br>Розы · Входная зона</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img">
        <?php echo wp_get_attachment_image(366, 'full', false, array(
          'alt' => 'розово-бордовая цветочная композиция на баре со свечами для события в Бостоне',
          'title' => 'Барная цветочная композиция для события в Бостоне',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 320px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Флористика бара<br>Розы · Свечи</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img">
        <?php echo wp_get_attachment_image(367, 'full', false, array(
          'alt' => 'пастельная цветочная композиция со свечами и бокалами на столе события от Boston Flowers',
          'title' => 'Стол со свечами и пастельной флористикой в Бостоне',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 540px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Стол со свечами<br>Пастель · Бокалы</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img gallery-overlay-soft">
        <?php echo wp_get_attachment_image(368, 'full', false, array(
          'alt' => 'светлая цветочная инсталляция на белых пьедесталах со свечами для частного события',
          'title' => 'Светлая цветочная инсталляция на пьедесталах в Бостоне',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 360px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Пьедесталы<br>Светлая флористика · Свечи</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img gallery-overlay-soft">
        <?php echo wp_get_attachment_image(369, 'full', false, array(
          'alt' => 'романтический стол с бледными розами, свечами, бокалами вина и видом на воду',
          'title' => 'Романтический ужин у воды с флористикой в Бостоне',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 440px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Романтический ужин<br>Вода · Светлые розы</div>
    </div>
    <div class="gallery-item">
      <div class="gallery-item-img">
        <?php echo wp_get_attachment_image(370, 'full', false, array(
          'alt' => 'длинный ужинный стол с бордовыми свечами и цветочным раннером для события в Бостоне',
          'title' => 'Длинный стол с цветочным раннером для события в Бостоне',
          'loading' => 'lazy',
          'decoding' => 'async',
          'sizes' => '(max-width: 640px) 82vw, 300px'
        )); ?>
      </div>
      <div class="gallery-item-ph">Длинный стол<br>Цветочный раннер · Бордо</div>
    </div>
  </div>
  <div class="gallery-counter">
    <span class="gallery-counter-lbl" id="galleryLbl">1 / 6</span>
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

<section id="ways">
  <div class="container">
    <div class="ways-hd">
      <p class="lbl lbl-dark r">Форматы работы</p>
      <h2 class="ways-title serif rc d1">Три формата.<br><em>Один стандарт.</em></h2>
    </div>
    <div class="ways-grid r d1">
      <div class="ways-item">
        <span class="ways-tag">Частное событие</span>
        <div class="ways-name serif">Праздники и ужины</div>
        <p class="ways-desc">Дни рождения и юбилеи. Уникальный дизайн для вашего повода, никаких стандартных решений.</p>
        <div class="ways-detail">Идеально для: ужинов, дат, семейных событий</div>
      </div>
      <div class="ways-item">
        <span class="ways-tag">Бренд и PR</span>
        <div class="ways-name serif">Лончи и корпоративы</div>
        <p class="ways-desc">Деловые ужины и шоурумы. Точное попадание в стиль компании, монтаж «под ключ».</p>
        <div class="ways-detail">Идеально для: запусков, событий для клиентов</div>
      </div>
      <div class="ways-item">
        <span class="ways-tag">Инсталляция</span>
        <div class="ways-name serif">Акцент в пространстве</div>
        <p class="ways-desc">Один масштабный объект, задающий тон всему залу. Арка или монументальная композиция.</p>
        <div class="ways-detail">Идеально для: ресепшн, арт-показов, VIP-зон</div>
      </div>
    </div>
  </div>
</section>

<section id="investment">
  <div class="container">
    <div class="inv-grid">
      <div>
        <p class="lbl r">Бюджет</p>
        <h2 class="inv-title serif r d1">Оценка по<br><em>масштабу.</em></h2>
        <p class="inv-sub r d2">Каждое событие уникально. Цветы, формат и сложность монтажа влияют на стоимость. Это — стартовые ориентиры.</p>
      </div>
      <div class="r d1">
        <div class="inv-tiers">
          <div class="inv-tier">
            <div>
              <div class="inv-tier-name serif">Малые события</div>
              <div class="inv-tier-desc">1–3 композиции, камерная атмосфера</div>
            </div>
            <div class="inv-tier-price">от $800</div>
          </div>
          <div class="inv-tier">
            <div>
              <div class="inv-tier-name serif">Полный стиль зала</div>
              <div class="inv-tier-desc">Единый дизайн: столы, вход, бар</div>
            </div>
            <div class="inv-tier-price">от $1,800</div>
          </div>
          <div class="inv-tier">
            <div>
              <div class="inv-tier-name serif">Акцентная работа</div>
              <div class="inv-tier-desc">Один крупный объект, монтаж на месте</div>
            </div>
            <div class="inv-tier-price">от $3,500</div>
          </div>
        </div>
        <p class="inv-note r d2">Итоговая цена формируется после обсуждения задачи. Отправьте нам дату и формат для быстрого расчета.</p>
        <div class="inv-limit r d3">
          <span class="inv-limit-label">Чего мы не делаем</span>
          <p class="inv-limit-text">Мы не используем стоковый декор и не беремся за проекты «вчера на сегодня» без подготовки.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="statement">
  <div class="stmt-photo r">
    <?php
    echo wp_get_attachment_image(371, 'full', false, [
      'class' => 'stmt-photo-img',
      'alt' => 'Вечерняя сервировка на крыше с красными и нежно-розовыми цветочными композициями на фоне skyline Бостона',
      'title' => 'Цветочное оформление вечернего события на крыше в Бостоне',
      'loading' => 'lazy',
      'decoding' => 'async',
      'sizes' => '100vw',
    ]);
    ?>
    <p class="stmt-photo-caption">Вечерние цветочные композиции на крыше с видом на skyline Бостона.</p>
  </div>
  <div class="container">
    <div class="stmt-text r d1">
      <h2>Атмосфера вечера.<br><em>Момент, который запомнят.</em></h2>
      <span class="statement-line" aria-hidden="true"></span>
    </div>
  </div>
</section>

<section id="process">
  <div class="container">
    <div class="process-hd">
      <p class="lbl lbl-dark r">Процесс</p>
      <h2 class="process-title serif rc d1">Четыре шага.<br><em>Всё готово.</em></h2>
    </div>
    <div class="process-steps r d1">
      <div class="process-step">
        <div class="process-step-num">01</div>
        <div class="process-step-name serif">Запрос</div>
        <p class="process-step-note">Опишите дату, локацию и характер события. Мы ответим в течение нескольких часов.</p>
        <span class="process-step-tag">В тот же день</span>
      </div>
      <div class="process-step accent">
        <div class="process-step-num">02</div>
        <div class="process-step-name serif">Концепция</div>
        <p class="process-step-note">Мы предлагаем визуальный вектор и бюджет. Старт работы — только после утверждения.</p>
        <span class="process-step-tag">1–2 дня</span>
      </div>
      <div class="process-step">
        <div class="process-step-num">03</div>
        <div class="process-step-name serif">Подготовка</div>
        <p class="process-step-note">Закупка и сборка. Без неожиданностей в день события.</p>
        <span class="process-step-tag">До события</span>
      </div>
      <div class="process-step accent">
        <div class="process-step-num">04</div>
        <div class="process-step-name serif">Монтаж</div>
        <p class="process-step-note">Мы всё готовим до прибытия гостей и убираем после. Вы не отвлекаетесь ни на минуту.</p>
        <span class="process-step-tag">День события</span>
      </div>
    </div>
  </div>
</section>

<section id="why">
  <div class="container">
    <div class="why-grid">
      <div>
        <p class="lbl r">Почему мы</p>
        <h2 class="why-title serif rc d1">Сделано для<br><em>реальности.</em></h2>
        <p class="why-sub r d2">Красивый эскиз — это половина дела. Настоящая работа — это приехать вовремя, смонтировать идеально и оставить зал безупречным.</p>
      </div>
      <div class="why-points r d1">
        <div class="why-point">
          <div class="why-dot"></div>
          <div class="why-text"><strong>Пространственное мышление</strong>Мы учитываем архитектуру зала, свет и линии взгляда, а не только вид букета в кадре.</div>
        </div>
        <div class="why-point">
          <div class="why-dot"></div>
          <div class="why-text"><strong>Без повторов</strong>Новое событие — новая форма. Мы не переиспользуем готовые шаблоны.</div>
        </div>
        <div class="why-point">
          <div class="why-dot"></div>
          <div class="why-text"><strong>Всё под контролем</strong>Мы берем на себя координацию с площадкой. Ваша команда отдыхает.</div>
        </div>
        <div class="why-point">
          <div class="why-dot"></div>
          <div class="why-text"><strong>Один голос</strong>Никаких менеджеров-посредников. С вами говорит тот, кто отвечает за проект.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="faq">
  <div class="container">
    <div class="faq-grid">
      <div>
        <p class="lbl r" style="margin-bottom:0">Вопросы</p>
        <h2 class="faq-title serif r d1">Прямые<br><em>ответы.</em></h2>
        <p class="faq-intro r d2">Если вашего вопроса здесь нет — задайте его лично.</p>
        <div style="display:flex;gap:12px;flex-wrap:wrap;" class="r d3">
          <a href="https://wa.me/19172514669" class="btn btn-ghost" style="padding:12px 24px;">WhatsApp</a>
          <a href="tel:+16178173157" class="btn-text">Звонок →</a>
        </div>
      </div>
      <div class="r d1">
        <div class="faq-list">
          <div class="faq-item"><div class="faq-q">За какое время нужно бронировать событие?<span class="faq-icon">+</span></div><div class="faq-a">В идеале за 2–4 недели. Для крупных инсталляций лучше за 4–6 недель. Но мы готовы обсуждать и срочные проекты.</div></div>
          <div class="faq-item"><div class="faq-q">Есть ли минимальный бюджет?<span class="faq-icon">+</span></div><div class="faq-a">Каждое событие считается индивидуально. Мы открыто скажем, если масштаб не совпадает с нашим профилем. Напишите нам для быстрой оценки.</div></div>
          <div class="faq-item"><div class="faq-q">Вы осуществляете монтаж и демонтаж?<span class="faq-icon">+</span></div><div class="faq-a">Да. Полный цикл работы на локации включен в наши услуги.</div></div>
          <div class="faq-item"><div class="faq-q">Вы работаете по референсам?<span class="faq-icon">+</span></div><div class="faq-a">Да, это ускоряет процесс. Присылайте мудборды или палитры — мы превратим их в реальный дизайн-код события.</div></div>
          <div class="faq-item"><div class="faq-q">Выезжаете ли вы за пределы Бостона?<span class="faq-icon">+</span></div><div class="faq-a">Да. Мы обслуживаем Большой Бостон и соседние штаты. Уточните локацию, и мы всё организуем.</div></div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="contact-grid">
      <div>
        <p class="lbl lbl-dark r">Запросить проект</p>
        <h2 class="contact-h2 serif rc d1">Расскажите о<br><em>вашем вечере.</em></h2>
        <p class="contact-p r d2">Мы вернемся в течение нескольких часов с видением и оценкой проекта.</p>
        <div class="contact-note r d3">Все события начинаются с диалога,<br>а не с прайс-листа.</div>
      </div>
      <div class="r d1">
        <form class="bf-form c-form" data-intent="event" method="post" action="/api/lead" novalidate>
          <input type="hidden" name="source" value="events.html">
          <input type="hidden" name="intent" value="event">
          <input type="text" name="_h" tabindex="-1" autocomplete="off" style="position:absolute;left:-9999px">
          
          <div class="c-row">
            <div class="c-field">
              <label for="c-name">Ваше имя</label>
              <input type="text" id="c-name" name="name" placeholder="Алексей" required>
            </div>
            <div class="c-field">
              <label for="c-date">Дата события</label>
              <input type="text" id="c-date" name="date" placeholder="20 мая 2026">
            </div>
          </div>
          <div class="c-field">
            <label for="c-type">Формат события</label>
            <select id="c-type" name="type">
              <option value="" disabled selected>Выберите</option>
              <option value="private">Частный ужин</option>
              <option value="birthday">День рождения</option>
              <option value="launch">Презентация бренда</option>
              <option value="vip">VIP-прием</option>
              <option value="proposal">Помолвка</option>
              <option value="other">Иное</option>
            </select>
          </div>
          <div class="c-field">
            <label for="c-budget">Ориентир бюджета</label>
            <select id="c-budget" name="budget">
              <option value="" disabled selected>Выберите</option>
              <option value="small">До $500</option>
              <option value="mid">$500 – $1,500</option>
              <option value="full">$1,500 – $3,000</option>
              <option value="large">От $3,000</option>
            </select>
          </div>
          <div class="c-field">
            <label for="c-phone">Связь (Телефон/Email)</label>
            <input type="text" id="c-phone" name="contact" placeholder="Ваши контакты" required>
          </div>
          <div class="c-submit">
            <button type="submit" class="btn btn-wine-solid">Отправить запрос</button>
          </div>
          <p class="c-legal">Отвечаем в тот же день. Никакого спама.</p>
        </form>
        <div class="form-success">Запрос принят. Ожидайте нашего ответа.</div>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eye">Один вечер. Один дизайн.</p>
      <h2 class="cta-title">Сформируем пространство<br>вашего события.</h2>
      <div class="cta-btns" style="margin-top:36px;">
        <a href="#contact" class="btn btn-ivory">Запросить предложение</a>
        <a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+оформление+события." class="btn btn-outline-ivory">Написать напрямую</a>
      </div>
      <p class="cta-note">Boston Flowers · 267 North Beacon St, Brighton · Большой Бостон</p>
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

const bfForm=document.querySelector('.c-form');
const bfSuccess=document.querySelector('.form-success');
if(bfForm){
  bfForm.addEventListener('submit',e=>{e.preventDefault();bfForm.style.display='none';bfSuccess.classList.add('active');});
}

(function(){const count=0;const badge=document.getElementById('cartCount');const mBadge=document.getElementById('mCartCount');if(count>0){if(badge){badge.textContent=count>9?'9+':count;badge.classList.add('has-items');}if(mBadge){mBadge.textContent=count;mBadge.style.display='flex';}}})();
</script>

<?php get_footer(); ?>
