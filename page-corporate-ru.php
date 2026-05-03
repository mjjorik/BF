<?php
/**
 * Template Name: Корпоративным (RU)
 * Boston Flowers — Corporate Flower Delivery page
 * Slug: /corporate
 */

$bf_corporate_hero_image_id = 359;
$bf_corporate_hero_image_url = wp_get_attachment_image_url($bf_corporate_hero_image_id, 'full');

add_action('wp_head', function() use ($bf_corporate_hero_image_url) { ?>
<title>Корпоративная флористика Бостон | Boston Flowers Studio</title>
<meta name="description" content="Флористика для бизнеса в Бостоне: еженедельное оформление офисов, корпоративные события и VIP-подарки. Безупречный сервис от Boston Flowers.">
<link rel="canonical" href="https://bostonflowers.com/ru/korporativnym/">
<meta property="og:title" content="Корпоративная флористика Бостон | Boston Flowers Studio">
<meta property="og:description" content="Флористика для бизнеса в Бостоне: еженедельное оформление офисов, корпоративные события и VIP-подарки.">
<meta property="og:image" content="<?php echo esc_url($bf_corporate_hero_image_url); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://bostonflowers.com/ru/korporativnym/">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:image" content="<?php echo esc_url($bf_corporate_hero_image_url); ?>">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "Florist",
      "name": "Boston Flowers",
      "image": "<?php echo esc_url($bf_corporate_hero_image_url); ?>",
      "@id": "https://bostonflowers.com/#florist",
      "url": "https://bostonflowers.com/ru/",
      "telephone": "+16178173157",
      "priceRange": "$$$",
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
      "@type": "Service",
      "serviceType": "Corporate flower delivery",
      "provider": {"@id": "https://bostonflowers.com/#florist"},
      "image": "<?php echo esc_url($bf_corporate_hero_image_url); ?>",
      "areaServed": ["Boston","Cambridge","Newton","Brighton","Seaport","Back Bay"],
      "description": "Еженедельное оформление офисов, отелей и корпоративных мероприятий в Большом Бостоне."
    }
  ]
}
</script>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+корпоративное+обслуживание." class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-left">
    <div class="hero-bf" aria-hidden="true">BF</div>
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Бизнес-флористика — Бостон</span></div>
    <h1 class="hero-h1 serif">Бизнес-флористика.<br><em>По графику.</em></h1>
    <p class="hero-sub">Флористические решения для компаний, которым важна структура, стабильность и безупречное исполнение.</p>
    <p class="hero-micro">Еженедельный сервис · Охват всего Большого Бостона</p>
    <div class="hero-bullets">
      <div class="hero-bullet">Еженедельное обслуживание</div>
      <div class="hero-bullet">События и инсталляции</div>
      <div class="hero-bullet">Подарки клиентам и партнерам</div>
    </div>
    <div class="hero-btns">
      <a href="#contact" class="btn btn-ghost">Запросить проект</a>
      <a href="#handle" class="btn-text">Что мы берем на себя →</a>
    </div>
  </div>
  <div class="hero-right">
    <div class="hero-right-inner">
      <div class="hero-photo">
        <?php
          echo wp_get_attachment_image($bf_corporate_hero_image_id, 'full', false, array(
            'class' => 'hero-photo-img',
            'alt' => 'пастельная розово-белая цветочная корзина на стойке ресепшн от Boston Flowers',
            'title' => 'Корпоративная цветочная композиция для лобби в Бостоне',
            'loading' => 'eager',
            'fetchpriority' => 'high',
            'decoding' => 'async',
            'sizes' => '(max-width: 640px) 100vw, (max-width: 1023px) 45vw, 45vw',
          ));
        ?>
      </div>
      <span class="hero-ph-lbl">Ресепшн / лобби · Корпоративная флористика · Boston Flowers</span>
    </div>
  </div>
</section>

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>✦</span>Доставка каждую неделю без задержек</span>
      <span class="marquee-item"><span>✦</span>Нам доверяют офисы, отели и рестораны</span>
      <span class="marquee-item"><span>✦</span>Индивидуальные решения для каждого бизнеса</span>
      <span class="marquee-item"><span>✦</span>Прямая связь с флористом</span>
      <span class="marquee-item"><span>✦</span>Весь Большой Бостон</span>
      <span class="marquee-item"><span>✦</span>Доставка каждую неделю без задержек</span>
      <span class="marquee-item"><span>✦</span>Нам доверяют офисы, отели и рестораны</span>
      <span class="marquee-item"><span>✦</span>Индивидуальные решения для каждого бизнеса</span>
      <span class="marquee-item"><span>✦</span>Прямая связь с флористом</span>
      <span class="marquee-item"><span>✦</span>Весь Большой Бостон</span>
    </div>
  </div>
  <div class="marquee-track" style="border-top:1px solid var(--bd)">
    <div class="marquee-inner rev">
      <span class="marquee-item"><span>✦</span>Надежное соблюдение графиков</span>
      <span class="marquee-item"><span>✦</span>Монтаж и демонтаж включены</span>
      <span class="marquee-item"><span>✦</span>Сезонные обновления</span>
      <span class="marquee-item"><span>✦</span>Никакой координации с вашей стороны</span>
      <span class="marquee-item"><span>✦</span>Один контакт от старта до финиша</span>
      <span class="marquee-item"><span>✦</span>Надежное соблюдение графиков</span>
      <span class="marquee-item"><span>✦</span>Монтаж и демонтаж включены</span>
      <span class="marquee-item"><span>✦</span>Сезонные обновления</span>
      <span class="marquee-item"><span>✦</span>Никакой координации с вашей стороны</span>
      <span class="marquee-item"><span>✦</span>Один контакт от старта до финиша</span>
    </div>
  </div>
</section>

<section id="stats">
  <div class="stats-grid r-grid">
    <div class="stat-item r">
      <div class="stat-num serif" data-target="100" data-suffix="+">0</div>
      <div class="stat-lbl">Корпоративных событий</div>
    </div>
    <div class="stat-item r">
      <div class="stat-num serif" data-target="48" data-suffix="ч">0</div>
      <div class="stat-lbl">На подготовку концепта</div>
    </div>
    <div class="stat-item r">
      <div class="stat-num serif" data-target="3" data-suffix="+">0</div>
      <div class="stat-lbl">Года на рынке Бостона</div>
    </div>
  </div>
</section>

<section id="handle">
  <div class="container">
    <div class="handle-hd">
      <span class="section-line r"></span>
      <p class="lbl lbl-dark r">Что мы берем на себя</p>
      <h2 class="handle-title serif rc d1">Флористика<br><em>под ключ.</em></h2>
      <p class="handle-sub r d2">Мы берем на себя управление флористикой, чтобы ваша команда могла сосредоточиться на бизнесе.</p>
    </div>
    <div class="handle-grid r-grid">
      <div class="handle-item r">
        <div class="handle-num serif">01</div>
        <div class="handle-name serif">Цветы в офис еженедельно</div>
        <p class="handle-desc">Оформление зон ресепшн, переговорных и кабинетов руководства. Стабильное качество без напоминаний.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">02</div>
        <div class="handle-name serif">Атмосфера отелей и ресторанов</div>
        <p class="handle-desc">Композиции, которые продолжают концепцию интерьера, а не просто занимают место в лобби или на баре.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">03</div>
        <div class="handle-name serif">События и презентации</div>
        <p class="handle-desc">Ужины, презентации, клиентские приемы. Монтаж и демонтаж декора полностью на нас.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">04</div>
        <div class="handle-name serif">Подарки клиентам и партнерам</div>
        <p class="handle-desc">Премиальные композиции для ваших клиентов. Мы берем на себя всю логистику и координацию.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">05</div>
        <div class="handle-name serif">Сезонные инсталляции</div>
        <p class="handle-desc">Новогоднее оформление, сезонные обновления и масштабный декор входных групп.</p>
      </div>
      <div class="handle-item r">
        <div class="handle-num serif">06</div>
        <div class="handle-name serif">Брендированные пространства</div>
        <p class="handle-desc">Съемки, шоурумы и поп-апы. Флористика как органичное продолжение визуального языка бренда.</p>
      </div>
    </div>
  </div>
</section>

<section id="who">
  <div class="container">
    <div class="who-hd">
      <span class="section-line r"></span>
      <p class="lbl r">Для кого</p>
      <h2 class="who-title serif rc d1">Бизнесу, которому<br><em>важен контекст.</em></h2>
    </div>
    <div class="who-grid r-grid">
      <div class="who-item r">
        <span class="who-seg">Офисы</span>
        <div class="who-name serif">Корпоративные пространства</div>
        <p class="who-pain">Нуждаются в статусной атмосфере для клиентов без необходимости еженедельно контролировать подрядчиков.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Отели</span>
        <div class="who-name serif">Сектор гостеприимства</div>
        <p class="who-pain">Флористика в лобби, отражающая уровень сервиса. Точное соблюдение графика и эстетики.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Рестораны</span>
        <div class="who-name serif">Гастрономические проекты</div>
        <p class="who-pain">Атмосфера, дополняющая опыт гостя. Дизайн, вписанный в архитектуру зала.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Агентства</span>
        <div class="who-name serif">Креативные компании</div>
        <p class="who-pain">Надежное партнерство для съемок и мероприятий. Реализация в стилистике бренда.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Недвижимость</span>
        <div class="who-name serif">Шоурумы и премиум-объекты</div>
        <p class="who-pain">Цветы, которые продают образ жизни. Безупречный вид пространства перед важным показом.</p>
      </div>
      <div class="who-item r">
        <span class="who-seg">Салоны и клиники</span>
        <div class="who-name serif">Wellness и ритейл</div>
        <p class="who-pain">Живые цветы как маркер заботы и внимания к деталям, за которыми приходят ваши гости.</p>
      </div>
    </div>
  </div>
</section>

<section id="visual">
  <div class="visual-hd r">
    <p class="lbl">Наши работы</p>
    <h2 class="visual-title serif r d1">Дизайн, который формирует,<br><em>а не отвлекает.</em></h2>
    <p class="visual-sub r d2">Примеры оформления для бизнеса. Реальные проекты студии.</p>
  </div>
  <div class="visual-scroll" id="visualScroll">
    <div class="visual-slide">
      <div class="visual-img"><?php echo wp_get_attachment_image(360, 'full', false, array('class' => 'visual-img-el', 'alt' => 'Пастельная цветочная композиция на стойке ресепшн медицинского офиса в Бостоне', 'title' => 'Пастельная композиция для ресепшн медицинского офиса в Бостоне', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 640px) 88vw, (max-width: 1024px) 42vw, 420px')); ?></div>
      <div class="visual-ph">Медицинский ресепшн · Brighton · Пастельные цветы</div>
    </div>
    <div class="visual-slide">
      <div class="visual-img"><?php echo wp_get_attachment_image(361, 'full', false, array('class' => 'visual-img-el', 'alt' => 'Лавандовая гортензия в центре стола с свечами и стеклянной сервировкой', 'title' => 'Лавандовая гортензия для корпоративного ужина', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 640px) 78vw, (max-width: 1024px) 34vw, 320px')); ?></div>
      <div class="visual-ph">Гортензия на столе · Корпоративный ужин</div>
    </div>
    <div class="visual-slide">
      <div class="visual-img"><?php echo wp_get_attachment_image(362, 'full', false, array('class' => 'visual-img-el', 'alt' => 'Фиолетово-розовая цветочная композиция на ресепшн студии ухода за кожей', 'title' => 'Фиолетовая композиция для студии ухода за кожей в Бостоне', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 640px) 88vw, (max-width: 1024px) 48vw, 500px')); ?></div>
      <div class="visual-ph">Студия ухода за кожей · Композиция у ресепшн</div>
    </div>
    <div class="visual-slide">
      <div class="visual-img"><?php echo wp_get_attachment_image(363, 'full', false, array('class' => 'visual-img-el', 'alt' => 'Просторный зал для мероприятия с пастельными цветочными композициями и видом на Бостон', 'title' => 'Флористика для event-зала и сервировки в Бостоне', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 640px) 88vw, (max-width: 1024px) 56vw, 640px')); ?></div>
      <div class="visual-ph">Event-пространство · Сервировка и цветы</div>
    </div>
  </div>
  <div class="visual-counter">
    <span class="visual-counter-lbl">Листайте для просмотра</span>
    <div class="visual-dots" id="visualDots">
      <div class="visual-dot active"></div>
      <div class="visual-dot"></div>
      <div class="visual-dot"></div>
      <div class="visual-dot"></div>
    </div>
  </div>
</section>

<section id="ways">
  <div class="container">
    <div class="ways-hd">
      <p class="lbl lbl-dark r">Форматы сотрудничества</p>
      <h2 class="ways-title serif rc d1">Три формата.<br><em>Один стандарт.</em></h2>
    </div>
    <div class="ways-grid r-grid">
      <div class="ways-item r">
        <span class="ways-tag">Регулярно</span>
        <div class="ways-name serif">Еженедельный сервис</div>
        <p class="ways-desc">Подписка для офисов, отелей и ресторанов. Мы сами создаем, привозим и заменяем цветы по расписанию.</p>
        <div class="ways-detail">Идеально для: лобби, ресепшн, переговорных</div>
      </div>
      <div class="ways-item r">
        <span class="ways-tag">Разово</span>
        <div class="ways-name serif">Оформление событий</div>
        <p class="ways-desc">Ужины, презентации, VIP-приемы. Полный цикл от концепции до демонтажа вместе с вашей командой.</p>
        <div class="ways-detail">Идеально для: открытий, корпоративов, PR</div>
      </div>
      <div class="ways-item r">
        <span class="ways-tag">Подарки</span>
        <div class="ways-name serif">Бизнес-подарки</div>
        <p class="ways-desc">Премиальные букеты для клиентов и сотрудников. Отслеживаем логистику, вкладываем ваши открытки.</p>
        <div class="ways-detail">Идеально для: программ лояльности, важных дат</div>
      </div>
    </div>
  </div>
</section>

<section id="investment">
  <div class="container">
    <div class="inv-grid">
      <div>
        <p class="lbl r">Бюджет</p>
        <h2 class="inv-title serif rc d1">Оценка по<br><em>масштабу.</em></h2>
        <p class="inv-sub r d2">Никаких пакетных предложений. У каждого бизнеса свои вводные. Мы формируем бюджет после короткого брифа.</p>
      </div>
      <div class="r-grid r d1">
        <div class="inv-tiers">
          <div class="inv-tier r">
            <div>
              <div class="inv-tier-name serif">Еженедельный сервис</div>
              <div class="inv-tier-desc">Постоянное оформление коммерческих площадей</div>
            </div>
            <div class="inv-tier-price">Индивидуально</div>
          </div>
          <div class="inv-tier r">
            <div>
              <div class="inv-tier-name serif">Деловые события</div>
              <div class="inv-tier-desc">Оформление ужинов, залов и фотозон</div>
            </div>
            <div class="inv-tier-price">От масштаба</div>
          </div>
          <div class="inv-tier r">
            <div>
              <div class="inv-tier-name serif">Подарки партнерам</div>
              <div class="inv-tier-desc">Персональные или массовые отправки</div>
            </div>
            <div class="inv-tier-price">По запросу</div>
          </div>
        </div>
        <p class="inv-note r d2">Мы отвечаем на корпоративные запросы в течение пары часов. Пятнадцати минут разговора достаточно для старта.</p>
      </div>
    </div>
  </div>
</section>

<section id="how">
  <div class="container">
    <div class="how-hd">
      <p class="lbl lbl-dark r">Процесс</p>
      <h2 class="how-title serif rc d1">Пять шагов.<br><em>Остальное за нами.</em></h2>
    </div>
    <div class="how-steps r-grid">
      <div class="how-step r">
        <div class="how-step-num serif">01</div>
        <div class="how-step-name serif">Ваш запрос</div>
        <p class="how-step-desc">Напишите нам формат, локацию и примерные ожидания. Мы ответим в течение пары часов.</p>
      </div>
      <div class="how-step r">
        <div class="how-step-num serif">02</div>
        <div class="how-step-name serif">Уточнение деталей</div>
        <p class="how-step-desc">Короткий созвон или переписка. Мы задаем правильные вопросы, вы получаете ясность.</p>
      </div>
      <div class="how-step r">
        <div class="how-step-num serif">03</div>
        <div class="how-step-name serif">Проект и смета</div>
        <p class="how-step-desc">Презентация концепции, график работ и точная стоимость. Без скрытых платежей.</p>
      </div>
      <div class="how-step r">
        <div class="how-step-num serif">04</div>
        <div class="how-step-name serif">Реализация</div>
        <p class="how-step-desc">Доставка, монтаж и финальные штрихи на месте. От вашей команды ничего не требуется.</p>
      </div>
      <div class="how-step r">
        <div class="how-step-num serif">05</div>
        <div class="how-step-name serif">Постоянная работа</div>
        <p class="how-step-desc">Для контрактников — автоматическое обновление цветов и поддержание идеального вида.</p>
      </div>
    </div>
  </div>
</section>

<section id="why">
  <div class="container">
    <div class="why-grid">
      <div>
        <p class="lbl r">Почему мы</p>
        <h2 class="why-title serif rc d1">Контроль.<br><em>Стабильность.<br>Никакого хаоса.</em></h2>
        <p class="why-sub r d2">Мы построили студию вокруг идеи надежности. В бизнесе своевременность так же важна, как эстетика.</p>
      </div>
      <div class="why-points r-grid r d1">
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Соблюдение сроков</strong>Мы приезжаем точно в срок. Без извинений и оправданий.</div>
        </div>
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Безупречный монтаж</strong>Работаем незаметно для вашего пространства. Сделали и ушли.</div>
        </div>
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Понимание задач</strong>У мероприятий есть график. Мы интегрируемся в него идеально.</div>
        </div>
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Прямая коммуникация</strong>Один контакт, никаких цепочек менеджеров. Быстро и по делу.</div>
        </div>
        <div class="why-point r">
          <div class="why-dot"></div>
          <div class="why-text"><strong class="serif">Архитектурный подход</strong>Не просто цветы, а элементы интерьера. Мы знаем, как работать с пространством.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="statement">
  <div class="container">
    <div class="statement-line r"></div>
    <div class="statement-inner r d1">
      <blockquote>«Нам нужно было, чтобы вопрос был закрыт безупречно. Так оно и вышло.»</blockquote>
      <cite>Boston Flowers — Корпоративный клиент</cite>
    </div>
  </div>
</section>

<section id="contact">
  <div class="container">
    <div class="contact-grid">
      <div class="contact-left-col">
        <p class="lbl lbl-dark r">Связаться с нами</p>
        <h2 class="contact-h2 serif r d1"><em>Обсудим ваш<br>проект.</em></h2>
        <p class="contact-p r d2">Мы вернемся с ясностью по срокам, подходу и бюджету в течение пары часов.</p>
        <div class="contact-note r d3">
          Для сервиса, событий или подарков.<br>
          Одного сообщения достаточно.
        </div>
      </div>
      <div class="r d1">
        <form class="bf-form c-form" data-intent="corporate" method="post" novalidate>
          <div class="c-row">
            <div class="c-field">
              <label for="c-name">Ваше имя</label>
              <input type="text" id="c-name" name="name" placeholder="Алексей" required>
            </div>
            <div class="c-field">
              <label for="c-company">Компания</label>
              <input type="text" id="c-company" name="company" placeholder="Название">
            </div>
          </div>
          <div class="c-field">
            <label for="c-type">Тип задачи</label>
            <select id="c-type" name="type">
              <option value="" disabled selected>Выберите</option>
              <option value="weekly">Еженедельный сервис</option>
              <option value="event">Корпоративное событие</option>
              <option value="gifting">Подарки клиентам</option>
              <option value="other">Иное</option>
            </select>
          </div>
          <div class="c-field">
            <label for="c-phone">Телефон или Email</label>
            <input type="text" id="c-phone" name="contact" placeholder="Для связи с вами" required>
          </div>
          <div class="c-field full-w">
            <label for="c-message">Комментарий</label>
            <textarea id="c-message" name="message" placeholder="Площадка, сроки или пожелания..."></textarea>
          </div>
          <div class="c-submit">
            <button type="submit" class="btn btn-wine-solid">Отправить запрос</button>
          </div>
          <p class="c-legal">Отвечаем быстро. Без спама.</p>
        </form>
        <div class="form-success">Запрос принят. Мы скоро свяжемся с вами.</div>
      </div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-inner r">
      <p class="cta-eye">Готовы начать?</p>
      <h2 class="cta-title serif">Опишите задачу.<br>Мы реализуем.</h2>
      <p class="cta-sub">Контрактное обслуживание, VIP-подарки и корпоративные события.</p>
      <div class="cta-btns">
        <a href="#contact" class="btn btn-ivory">Запросить проект</a>
        <a href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+корпоративное+обслуживание." class="btn btn-outline-ivory">Написать в WhatsApp</a>
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

const statNums=document.querySelectorAll('.stat-num');
if(statNums.length>0){
  const statIo=new IntersectionObserver(entries=>{
    entries.forEach(e=>{
      if(e.isIntersecting){
        const target=parseInt(e.target.getAttribute('data-target'));
        const suffix=e.target.getAttribute('data-suffix');
        let count=0;
        const dur=2000;
        const inc=target/(dur/16);
        const timer=setInterval(()=>{
          count+=inc;
          if(count>=target){
            e.target.innerText=target+suffix;
            clearInterval(timer);
          }else{
            e.target.innerText=Math.ceil(count)+suffix;
          }
        },16);
        statIo.unobserve(e.target);
      }
    });
  },{threshold:.5});
  statNums.forEach(num=>statIo.observe(num));
}

const line=document.querySelector('.statement-line');
if(line){
  const lineIo=new IntersectionObserver(e=>{if(e[0].isIntersecting){line.classList.add('on');lineIo.disconnect();}});
  lineIo.observe(line);
}

window.addEventListener('scroll',()=>{document.getElementById('waFloat').classList.toggle('visible',scrollY>400);},{passive:true});

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

const vs=document.getElementById('visualScroll');
if(vs){
  const vdots=document.querySelectorAll('.visual-dot');
  let isDown=false,startX,scrollLeft;
  vs.addEventListener('mousedown',e=>{isDown=true;vs.classList.add('grabbing');startX=e.pageX-vs.offsetLeft;scrollLeft=vs.scrollLeft;});
  vs.addEventListener('mouseleave',()=>{isDown=false;vs.classList.remove('grabbing');});
  vs.addEventListener('mouseup',()=>{isDown=false;vs.classList.remove('grabbing');});
  vs.addEventListener('mousemove',e=>{if(!isDown)return;e.preventDefault();const x=e.pageX-vs.offsetLeft;vs.scrollLeft=scrollLeft-(x-startX)*1.5;});
  vs.addEventListener('scroll',()=>{
    const slides=vs.querySelectorAll('.visual-slide');
    if(slides.length&&vdots.length){
      const ratio=vs.scrollLeft/(vs.scrollWidth-vs.clientWidth);
      const active=Math.round(ratio*(slides.length-1));
      vdots.forEach((d,i)=>d.classList.toggle('active',i===active));
    }
  },{passive:true});
}
</script>

<?php get_footer(); ?>
