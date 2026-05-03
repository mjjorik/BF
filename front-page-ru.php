<?php 
/**
 * Template Name: Front Page RU
 */
get_header(); ?>

<a href="https://wa.me/19172514669" class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></a>

<section id="hero">
  <div class="hero-bg"><div class="glow-r"></div><div class="glow-l"></div></div>
  <div class="hero-wrap">
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Brighton, Boston &mdash; Est. 2023</span></div>
    <h1 class="hero-h1 serif">Премиальная флористика.<br><em>Доставка цветов в Бостоне.</em></h1>
    <p class="hero-sub">Студия архитектурной флористики в Бостоне. Гранд-аранжировки, авторские розы и безупречный сервис с доставкой день в день.</p>
    <div class="hero-btns"><a href="/shop" class="btn btn-ghost">В магазин</a><a href="#personalized" class="btn-text">Спецзаказ <span>&#8594;</span></a></div>
  </div>
  <div class="hero-scroll"><div class="scroll-line"></div><span class="scroll-txt">Листайте</span></div>
</section>

<section id="categories">
  <div class="container">
    <div class="cat-hd r r-up"><p class="lbl lbl-dark">Коллекции</p><h2 class="cat-title serif">Категории</h2></div>
    <div class="cat-grid r r-up d1">
      <a href="/shop/roses" class="cat-card"><span class="cat-name">Розы</span><span class="cat-arr">&#8594;</span></a>
      <a href="/shop/luxury-bouquets" class="cat-card"><span class="cat-name">Люкс-букеты</span><span class="cat-arr">&#8594;</span></a>
      <a href="/shop/grand-arrangements" class="cat-card"><span class="cat-name">Гранд-аранжировки</span><span class="cat-arr">&#8594;</span></a>
      <a href="/shop/peonies" class="cat-card"><span class="cat-name">Пионы</span><span class="cat-arr">&#8594;</span></a>
      <a href="/shop/tulips" class="cat-card"><span class="cat-name">Тюльпаны</span><span class="cat-arr">&#8594;</span></a>
      <a href="/custom-orders" class="cat-card"><span class="cat-name">Авторские заказы</span><span class="cat-arr">&#8594;</span></a>
    </div>
  </div>
</section>

<style>
  /* Slider Fix: Ensure only active slide is visible even when reveal animation is ON */
  .prod-card .prod-slide { opacity: 0 !important; z-index: 1; transition: opacity .45s ease-in-out !important; display: block !important; }
  .prod-card .prod-slide.active { opacity: 1 !important; z-index: 2; }
  .prod-card .prod-arr, .prod-card .prod-dots { z-index: 10 !important; }
  .prod-card .prod-slide img { width: 100% !important; height: 100% !important; object-fit: cover !important; object-position: center center !important; }
  
  /* Mobile Aspect Ratio Fix: theme uses 16:10 which zooms vertical photos. We override to 1:1 for the first card. */
  @media (max-width: 768px) {
    .prod-grid .prod-card:nth-child(1) .prod-img,
    .prod-grid .prod-card:nth-child(2) .prod-img,
    .prod-grid .prod-card:nth-child(3) .prod-img,
    .prod-grid .prod-card:nth-child(4) .prod-img,
    .prod-grid .prod-card:nth-child(5) .prod-img { 
      aspect-ratio: 1/1 !important; /* Making it square on mobile to show more height */
    }
  }
</style>

<section id="best-sellers">
  <div class="container">
    <div class="bs-hd r r-up"><div><p class="lbl lbl-dark">Коллекция</p><h2 class="bs-title serif">Выбор <em>клиентов</em></h2></div><a href="/shop" class="btn-text dark r d2">Смотреть всё <span>&#8594;</span></a></div>
    <div class="prod-grid">
      <a href="/shop/roses" class="prod-card r r-up" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <?php echo wp_get_attachment_image(354, 'full', false, array('alt' => 'букет из 100 красных эквадорских роз от Boston Flowers', 'title' => 'Букет из 100 эквадорских красных роз в Бостоне', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 33vw')); ?>
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/v2-100-ecuadorian-roses-2.webp" alt="Эквадорские розы детали">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/v2-100-ecuadorian-roses-3.webp" alt="Роскошные розы Бостон">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div><div class="prod-badge">Хит продаж</div></div><div class="prod-info"><p class="prod-cat">Розы</p><h3 class="prod-name">100 эквадорских роз</h3><p class="prod-desc">Роскошные эквадорские розы сорта Grade A. Гранд-букет, доступна доставка день в день.</p><div class="prod-ft"><div class="prod-price">$385 <span>/ 100 роз</span></div><span class="prod-order">Заказать</span></div></div></a>
      <a href="/shop/roses" class="prod-card r r-up d1" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/50-ohara-roses-scented-main-v2.webp" alt="50 ароматных роз O Hara подарок">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/50-ohara-roses-scented-boston-1.webp" alt="50 ароматных роз O Hara">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/50-ohara-roses-scented-boston-3.webp" alt="Доставка ароматных роз Бостон">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div></div><div class="prod-info"><p class="prod-cat">Розы</p><h3 class="prod-name">50 ароматных<br>роз O’Hara</h3><p class="prod-desc">Розы сорта Grade A с невероятным ароматом. Чувственный подарок для любого повода.</p><div class="prod-ft"><div class="prod-price">от $195 <span>/ 50 роз</span></div><span class="prod-order">Заказать</span></div></div></a>
      <a href="/shop/luxury-bouquets" class="prod-card r r-up d2" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/dopamine-basket-1-v2.webp" alt="Яркая люксовая цветочная композиция Дофаминовая корзина от Boston Flowers - Слайд 1" title="Дофаминовая корзина 1 - Люксовая цветочная композиция в Бостоне" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/dopamine-basket-2-v2.webp" alt="Дофаминовая корзина: детали люксового дизайна от Boston Flowers - Слайд 2" title="Дофаминовая корзина 2 - Люксовая цветочная композиция в Бостоне" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/dopamine-basket-3-v2.webp" alt="Дофаминовая корзина в варианте люкс-букета от Boston Flowers - Слайд 3" title="Дофаминовая корзина 3 - Люксовая цветочная композиция в Бостоне" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div><div class="prod-badge">Авторская работа</div></div><div class="prod-info"><p class="prod-cat">Люкс-букеты</p><h3 class="prod-name">Дофаминовая<br>корзина</h3><p class="prod-desc">Яркие премиальные цветы в фирменной корзине. Возможно исполнение в виде букета.</p><div class="prod-ft"><div class="prod-price">от $250</div><span class="prod-order">Заказать</span></div></div></a>
      <a href="/shop/luxury-bouquets" class="prod-card r r-up d1" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/mixed-bouquet-1.webp" alt="Яркий люксовый микс-букет из премиальных цветов от Boston Flowers - Слайд 1" title="Микс букет 1 - Люксовая цветочная композиция в Бостоне" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/mixed-bouquet-2.webp" alt="Микс букет: детали люксового дизайна от Boston Flowers - Слайд 2" title="Микс букет 2 - Люксовая цветочная композиция в Бостоне" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/mixed-bouquet-3.webp" alt="Микс букет как премиальный подарок от Boston Flowers - Слайд 3" title="Микс букет 3 - Люксовая цветочная композиция в Бостоне" loading="lazy" style="width:100%; height:100%; object-fit:cover; object-position:center; display:block;">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div></div><div class="prod-info"><p class="prod-cat">Люкс-букеты</p><h3 class="prod-name">Микс<br>букет</h3><p class="prod-desc">Авторская подборка премиальных цветов. Изысканно, ярко и собрано под заказ.</p><div class="prod-ft"><div class="prod-price">от $310</div><span class="prod-order">Заказать</span></div></div></a>
      <a href="/ru/zakazat/" class="prod-card r r-up d2" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/grand-pink-rose-basket-custom-order-boston-flowers-3.webp" alt="Большая корзина с розовыми розами и белыми корзинами от Boston Flowers" title="Большая корзина с розовыми розами на заказ в Бостоне" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/grand-rose-arrangements-custom-order-boston-flowers-1.webp" alt="Крупные розовые, красные и белые композиции из роз от Boston Flowers" title="Большие композиции из роз на заказ в Бостоне" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/grand-white-rose-baskets-boston-flowers-2.webp" alt="Большие корзины с белыми розами для заказа Boston Flowers" title="Большие корзины с белыми розами в Бостоне" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div></div><div class="prod-info"><p class="prod-cat">Большие композиции</p><h3 class="prod-name">Большая композиция<br>на заказ</h3><p class="prod-desc">Крупные цветочные композиции планируются студией как спецзаказ. Рекомендуемый срок: минимум 2 дня.</p><div class="prod-ft"><div class="prod-price">от $1,500+</div><span class="prod-order">Спецзаказ</span></div></div></a>
      <a href="/shop/peonies" class="prod-card r r-up d3" data-slides="3"><div class="prod-img"><div class="prod-slides">
            <div class="prod-slide active">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/seasonal-peony-tulip-arrangement-boston-flowers-1.webp" alt="Пастельная люксовая цветочная композиция в белой вазе от Boston Flowers" title="Пастельная люксовая композиция в Бостоне" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/luxury-peony-tulip-bouquet-boston-flowers-2.webp" alt="Пастельная композиция Boston Flowers доставлена в Brighton" title="Пастельная композиция с доставкой в Brighton" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
            <div class="prod-slide">
              <img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/premium-seasonal-peony-tulip-flowers-boston-3.webp" alt="Большая пастельная цветочная композиция для доставки в Бостоне" title="Премиальная пастельная композиция в Бостоне" loading="lazy" decoding="async" style="width:100%; height:100%; object-fit:cover; object-position:center center; display:block;">
            </div>
          </div><button class="prod-arr prod-arr-l">&#8592;</button><button class="prod-arr prod-arr-r">&#8594;</button><div class="prod-dots"><button class="prod-dot active"></button><button class="prod-dot"></button><button class="prod-dot"></button></div></div><div class="prod-info"><p class="prod-cat">Люкс-букеты</p><h3 class="prod-name">Пастельная<br>композиция</h3><p class="prod-desc">Нежные пастельные цветы в премиальной студийной композиции для подарка и доставки.</p><div class="prod-ft"><div class="prod-price">от $290</div><span class="prod-order">Заказать</span></div></div></a>
    </div>
  </div>
</section>

<section id="personalized">
  <div class="container">
    <div class="pers-grid">
      <div class="pers-left">
        <p class="lbl r r-left">Bespoke &amp; Custom</p>
        <h2 class="pers-title serif r r-left d1">Создано для вас.<br><em>В каждой детали.</em></h2>
        <p class="pers-desc r r-left d2">Инициалы на ленте. Ваша палитра. Ваш повод. Мы не используем шаблоны &mdash; каждый заказ создается с нуля для того, кто его получит.</p>
        <div class="pers-list r r-left d3">
          <div class="pers-row"><div class="pers-row-l"><div class="pers-row-name">Розы с инициалами &mdash; 50 штук</div><div class="pers-row-note">Лента с монограммой, упаковка на ваш выбор</div></div><div class="pers-row-price">от $180</div></div>
          <div class="pers-row"><div class="pers-row-l"><div class="pers-row-name">Розы с инициалами &mdash; 100 штук</div><div class="pers-row-note">Знаковая композиция, полная студийная аранжировка</div></div><div class="pers-row-price">от $350</div></div>
          <div class="pers-row"><div class="pers-row-l"><div class="pers-row-name">Полностью индивидуальный заказ</div><div class="pers-row-note">Ваше видение, ваша палитра &mdash; дизайн флориста</div></div><div class="pers-row-price">по запросу</div></div>
          <div class="pers-row"><div class="pers-row-l"><div class="pers-row-name">Выбор упаковки</div><div class="pers-row-note">Коробка, бумага, ваза &mdash; выбирается при заказе</div></div><div class="pers-row-price">включено</div></div>
        </div>
      </div>
      <div class="pers-right">
        <div class="pers-card r r-right"><div class="pers-num">01</div><div class="pers-card-title">Персонализация</div><div class="pers-card-desc">Инициалы, послания, цвет ленты. Ваша композиция несет ваш почерк.</div></div>
        <div class="pers-card r r-right d1"><div class="pers-num">02</div><div class="pers-card-title">Студийный отбор</div><div class="pers-card-desc">Мы заказываем цветы под ваш проект, а не используем то, что осталось в студии.</div></div>
        <div class="pers-card r r-right d2"><div class="pers-num">03</div><div class="pers-card-title">Никаких шаблонов</div><div class="pers-card-desc">Каждый заказ — это диалог. Результат должен быть уникальным.</div></div>
      </div>
    </div>
    <div class="pers-cta r r-up">
      <h3 class="pers-cta-title serif">&#8220;Не знаете, что заказать?<br>Опишите нам повод.&#8221;</h3>
      <p class="pers-cta-sub">Свяжитесь с флористом. Мы создадим это вместе.</p>
      <div class="pers-cta-btns"><a href="https://wa.me/19172514669" class="btn btn-ghost">Написать флористу</a><a href="/custom-orders" class="btn-text">Наши работы <span>&#8594;</span></a></div>
    </div>
  </div>
</section>

<section id="same-day">
  <div class="container">
    <div class="sd-grid">
      <div>
        <p class="lbl r r-left" style="margin-bottom:22px">Доставка сегодня</p>
        <h2 class="sd-title serif r r-left d1">Заказ до <em>10:30 AM</em> &mdash;<br>доставим сегодня.</h2>
        <p class="sd-desc r r-left d2">Мы создаем каждую композицию под заказ. Оформите до 10:30, и мы доставим цветы сегодня по всему Большому Бостону.</p>
        <div class="sd-rules r r-left d3">
          <div class="sd-rule"><div class="rule-t">10:30</div><div class="rule-body"><strong>Гарантия на сегодня</strong>Любой масштаб, любая сложность. Начинаем немедленно.</div></div>
          <div class="sd-rule"><div class="rule-t">11:00+</div><div class="rule-body"><strong>Уточняйте наличие</strong>Напишите флористу. Мы подтвердим заказ, если цветы в наличии.</div></div>
          <div class="sd-rule"><div class="rule-t">Срочно</div><div class="rule-body"><strong>Срочная доставка</strong>Нужно быстрее? Доступно за дополнительную плату.</div></div>
        </div>
      </div>
      <div class="r r-right d2">
        <p class="lbl" style="margin-bottom:18px">Районы доставки</p>
        <div class="zones">
          <div class="zone"><div class="zone-n">Бостон &middot; Кембридж &middot; Ньютон &middot; Уотертаун</div><div class="zone-p">$20</div></div>
          <div class="zone"><div class="zone-n">Дорчестер</div><div class="zone-p">$20</div></div>
          <div class="zone"><div class="zone-n">Нидхэм &middot; Берлингтон</div><div class="zone-p">$35&ndash;40</div></div>
          <div class="zone"><div class="zone-n">Род-Айленд</div><div class="zone-p">~$120</div></div>
        </div>
        <p class="sd-note"><strong>Самовывоз</strong> из студии &mdash;<br>267 North Beacon St, Brighton, MA 02135.<br>Открыты ежедневно 8:00 AM &ndash; 8:00 PM.</p>
        <span class="pay-label" style="margin-top:20px">Принимаем</span>
        <div class="pay-row">
          <span class="pay-badge"><svg viewBox="0 0 24 24"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg>Square</span>
          <span class="pay-badge"><svg viewBox="0 0 24 24"><path d="M7 11l5-5 5 5M7 17l5-5 5 5"/></svg>PayPal</span>
          <span class="pay-badge"><svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path d="M8 12h8M12 8v8"/></svg>Venmo</span>
          <span class="pay-badge"><svg viewBox="0 0 24 24"><path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/></svg>Zelle</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="studio-gallery">
  <div class="container">
    <div class="gallery-hd r r-up"><div><p class="lbl lbl-dark">Работы студии</p><h2 class="gallery-title serif">Живые цветы.<br><em>Живые моменты.</em></h2></div><a href="/gallery" class="btn-text dark r d1">Вся галерея <span>&#8594;</span></a></div>
    <div class="gallery-grid">
      <div class="gallery-item r r-in"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-main-zoomed.webp" alt="Элегантный букет из розовых ранункулюсов и гортензий на улицах Бостона" title="Портфолио: Букет с ранункулюсами" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">100 алых роз</span></div></div>
      <div class="gallery-item r r-left d1"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-2-highres.webp" alt="Оформление подарков красными розами в коробках и шарами-сердцами" title="Портфолио: Подарочный декор" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Спецзаказ</span></div></div>
      <div class="gallery-item r r-right d2"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-3-highres.webp" alt="Большая цветочная композиция в форме сердца из алых роз" title="Портфолио: Сердце из роз" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Свадьбы</span></div></div>
      <div class="gallery-item r r-up d1"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-4-highres.webp" alt="Сотни глубоких красных роз в гигантской люксовой корзине" title="Портфолио: Гранд-корзина роз" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Гранд-аранжировка</span></div></div>
      <div class="gallery-item r r-down d2"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-5-highres.webp" alt="Большой микс-букет из красных и кремовых роз для доставки" title="Портфолио: Микс-букет роз" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Люкс-букет</span></div></div>
      <div class="gallery-item r r-left d3"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-6-highres.webp" alt="Объемный фактурный букет с розовыми и фиолетовыми гортензиями" title="Портфолио: Фактурный букет" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Сезонные цветы</span></div></div>
      <div class="gallery-item r r-right d1"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-7-v2.webp" alt="Массивный букет малиновых и желтых роз на заснеженной улице Бостона" title="Портфолио: Зимняя доставка" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Подарок</span></div></div>
      <div class="gallery-item r r-up d2"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-8-highres.webp" alt="Огромный букет нежно-розовых роз в премиальной упаковке" title="Портфолио: Нежно-розовые розы" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Декор событий</span></div></div>
      <div class="gallery-item r r-in d3"><div class="gal-img"><img src="https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/gallery-9-highres.webp" alt="Идеально круглый букет ярко-розовых пионовидных роз в белой бумаге" title="Портфолио: Пионовидные розы" loading="lazy" style="width:100%; height:100%; object-fit:cover; display:block;"><span class="gal-tag"></span></div><div class="gal-overlay"><span class="gal-tag">Мастерство</span></div></div>
    </div>
    <div class="gallery-cta r r-up"><p class="gallery-note">Каждое фото сделано в нашей студии в Брайтоне. <em>Более 270 работ</em> &mdash; посмотрите весь архив.</p><a href="/gallery" class="btn btn-wine">Открыть галерею</a></div>
  </div>
</section>

<section id="grand">
  <div class="container">
    <div class="grand-inner">
      <div class="grand-left">
        <p class="lbl grand-label r r-up">БОЛЬШИЕ КОМПОЗИЦИИ</p>
        <h2 class="grand-title serif r r-up d1">Флористика высокого уровня.<br><em>от $1,500+</em></h2>
        <p class="grand-desc r r-up d2">Boston Flowers — премиальная цветочная студия в Бостоне. Мы создаём крупные цветочные композиции, спланированные с нашей дизайн-командой для статусных подарков, частных мероприятий, свадеб, корпоративных приёмов и оформления пространств. Рекомендуемый срок заявки — от 2 дней. Срочные запросы рассматриваются по согласованию со студией.</p>
        <div class="grand-rule r r-up d3" aria-hidden="true"></div>
        <div class="grand-tiers">
          <div class="grand-tier r r-up d3"><div><div class="tier-label">Большая корзина цветов</div><div class="tier-note">Премиальные розы, орхидеи, гортензии и сезонные цветы в крупной корзинной композиции.</div></div><div class="tier-price">от $1,500</div></div>
          <div class="grand-tier r r-up d4"><div><div class="tier-label">Prestige Collection</div><div class="tier-note">Выразительные композиции для люксовых подарков, входных зон, приёмов, частных и корпоративных событий.</div></div><div class="tier-price">от $3,800</div></div>
          <div class="grand-tier r r-up d5"><div><div class="tier-label">Инсталляции и event-флористика</div><div class="tier-note">Оформление залов, столов, арок, входных групп и индивидуальный цветочный декор по согласованию со студией.</div></div><div class="tier-price">по запросу</div></div>
        </div>
        <a href="https://wa.me/19172514669" class="btn btn-ghost grand-cta r r-up d5" style="margin-top:8px"><span class="grand-cta-text">ЗАПРОСИТЬ КОНСУЛЬТАЦИЮ</span><span class="grand-cta-arrow" aria-hidden="true">&#8594;</span></a>
      </div>
      <div class="grand-right r r-up d4"><div class="grand-img-wrap"><?php echo wp_get_attachment_image(346, 'large', false, array(
        'class' => 'grand-img',
        'alt' => 'композиция Prestige Grand Basket с красными и белыми розами от Boston Flowers',
        'title' => 'Prestige Grand Basket от Boston Flowers',
        'loading' => 'lazy',
        'decoding' => 'async',
        'sizes' => '(max-width: 768px) 100vw, (max-width: 1100px) 44vw, 520px'
      )); ?><div class="grand-caption"><div class="grand-caption-title">Prestige Grand Basket</div><div class="grand-caption-sub">Студийная композиция &middot; от $3,800</div></div></div></div>
    </div>
  </div>
</section>

<section id="services">
  <div class="container">
    <div class="svc-hd r r-up"><p class="lbl">Услуги студии</p><h2 class="svc-title serif">Больше чем букеты</h2></div>
    <div class="svc-grid">
      <a href="/ru/svadba/" class="svc-card r r-up"><div class="svc-img has-photo"><?php echo wp_get_attachment_image(355, 'full', false, array('class' => 'svc-photo', 'alt' => 'кремово-розовый свадебный букет от Boston Flowers', 'title' => 'Свадебный букет и флористика в Бостоне', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 1024px) calc(100vw - 64px), 31vw')); ?></div><div class="svc-body"><p class="svc-tag">Bridal Studio</p><h3 class="svc-name">Свадьбы</h3><p class="svc-desc">Индивидуальный дизайн от концепции до реализации. Детали, отражающие ваше видение и атмосферу дня.</p><span class="svc-link">Начать проект <span>&#8594;</span></span></div></a>
      <a href="/ru/korporativnym/" class="svc-card r r-up d1"><div class="svc-img has-photo"><?php echo wp_get_attachment_image(356, 'full', false, array('class' => 'svc-photo', 'alt' => 'белая корпоративная цветочная композиция для ресепшена от Boston Flowers', 'title' => 'Корпоративная цветочная композиция для ресепшена в Бостоне', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 1024px) calc(100vw - 64px), 31vw')); ?></div><div class="svc-body"><p class="svc-tag">B2B</p><h3 class="svc-name">Для бизнеса</h3><p class="svc-desc">Флористические решения для офисов и брендов. От еженедельных композиций до масштабных инсталляций.</p><span class="svc-link">Начать проект <span>&#8594;</span></span></div></a>
      <a href="/ru/meropriyatiya/" class="svc-card r r-up d2"><div class="svc-img has-photo"><?php echo wp_get_attachment_image(357, 'full', false, array('class' => 'svc-photo', 'alt' => 'цветочные композиции бордового и кремового цвета на столе частного мероприятия от Boston Flowers', 'title' => 'Флористика для частных событий в Бостоне', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 1024px) calc(100vw - 64px), 31vw')); ?></div><div class="svc-body"><p class="svc-tag">Bespoke</p><h3 class="svc-name">События</h3><p class="svc-desc">Авторские работы для частных праздников и мероприятий. Создано индивидуально, без шаблонов и повторов.</p><span class="svc-link">Начать проект <span>&#8594;</span></span></div></a>
    </div>
  </div>
</section>

<section id="seasonal">
  <div class="container">
    <div class="seas-hd"><div class="r r-left"><p class="lbl">Сезоны</p><h2 class="seas-title serif">Нужные цветы<br><em>в нужный момент.</em></h2></div><a href="/shop/seasonal" class="btn-text r r-right">Смотреть сезонное <span>&#8594;</span></a></div>
    <div class="seas-grid">
      <a href="/shop/seasonal" class="seas-card r r-up"><div class="seas-img"><?php echo wp_get_attachment_image(347, 'large', false, array('class' => 'seas-photo', 'alt' => 'розовая композиция в форме сердца ко Дню святого Валентина от Boston Flowers', 'title' => 'Композиция ко Дню святого Валентина от Boston Flowers', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 25vw')); ?></div><div class="seas-info"><p class="seas-occ">14 Февраля</p><h3 class="seas-name">День Св. Валентина<br>Коллекция</h3></div></a>
      <a href="/shop/seasonal" class="seas-card r r-up d1"><div class="seas-img"><?php echo wp_get_attachment_image(348, 'large', false, array('class' => 'seas-photo', 'alt' => 'розовый букет тюльпанов к Международному женскому дню от Boston Flowers', 'title' => 'Букет тюльпанов к 8 Марта от Boston Flowers', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 25vw')); ?></div><div class="seas-info"><p class="seas-occ">8 Марта</p><h3 class="seas-name">Международный<br>Женский День</h3></div></a>
      <a href="/shop/seasonal" class="seas-card r r-up d2"><div class="seas-img"><?php echo wp_get_attachment_image(351, 'large', false, array('class' => 'seas-photo', 'alt' => 'розово-кремовый букет ко Дню матери от Boston Flowers', 'title' => 'Сезонный букет ко Дню матери от Boston Flowers', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 25vw')); ?></div><div class="seas-info"><p class="seas-occ">Май</p><h3 class="seas-name">День Матери<br>Пионы и Тюльпаны</h3></div></a>
      <a href="/shop/seasonal" class="seas-card r r-up d3"><div class="seas-img"><?php echo wp_get_attachment_image(349, 'large', false, array('class' => 'seas-photo', 'alt' => 'тёплый осенний букет ко Дню благодарения от Boston Flowers', 'title' => 'Сезонный букет ко Дню благодарения от Boston Flowers', 'loading' => 'lazy', 'decoding' => 'async', 'sizes' => '(max-width: 768px) 100vw, 25vw')); ?></div><div class="seas-info"><p class="seas-occ">Ноябрь</p><h3 class="seas-name">Благодарение<br>Коллекция</h3></div></a>
    </div>
  </div>
</section>

<section id="reviews">
  <div class="container">
    <div class="rev-hd r r-up">
      <p class="lbl lbl-dark">Отзывы клиентов</p>
      <h2 class="rev-title serif">Достойно <em>каждого доллара.</em></h2>
      <a href="https://maps.app.goo.gl/nPwTeq92z9QtTUGX7?g_st=ic" target="_blank" rel="noopener" class="google-badge" style="margin-top:24px;display:inline-flex"><span class="google-badge-g">G</span><span class="google-badge-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</span><span class="google-badge-score">5.0</span><span class="google-badge-label">Google Отзывы</span></a>
    </div>
    <div class="rev-grid">
      <div class="rev-card r r-up"><div class="rev-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="rev-txt">&#8220;Заказал 100 роз с инициалами жены. Композиция превзошла все ожидания &mdash; студия позаботилась о каждой детали.&#8221;</p><p class="rev-by"><strong>Michael R.</strong> &middot; Boston, MA</p></div>
      <div class="rev-card r r-up d1"><div class="rev-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="rev-txt">&#8220;Доставка день в день, красивые цветы, ответили на звонок сразу. Это единственный флорист, которого я буду советовать.&#8221;</p><p class="rev-by"><strong>Анастасия К.</strong> &middot; Cambridge, MA</p></div>
      <div class="rev-card r r-up d2"><div class="rev-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div><p class="rev-txt">&#8220;Цветы для нашего корпоратива были потрясающими. Все спрашивали, кто их сделал. Boston Flowers знают, что такое премиум.&#8221;</p><p class="rev-by"><strong>Jennifer L.</strong> &middot; Newton, MA</p></div>
    </div>
    <div class="rev-addr r r-up d3">
      <div class="addr-item"><div class="addr-lbl">Адрес</div><div class="addr-val">267 North Beacon St, Brighton</div></div>
      <div class="addr-div"></div>
      <div class="addr-item"><div class="addr-lbl">Часы</div><div class="addr-val">Ежедневно 8:00&ndash;20:00</div></div>
      <div class="addr-div"></div>
      <div class="addr-item"><div class="addr-lbl">Заказ до</div><div class="addr-val">10:30 AM</div></div>
      <div class="addr-div"></div>
      <div class="addr-item"><div class="addr-lbl">Забор</div><div class="addr-val">Доступен в студии</div></div>
    </div>
  </div>
</section>

<section id="cta">
  <div class="container">
    <div class="cta-lbl r r-up"><p class="lbl">Связаться с нами</p></div>
    <h2 class="cta-title r r-up d1">Нужно больше, быстрее<br>или по-особому?</h2>
    <p class="cta-sub r r-up d2">Напишите флористу. Мы создадим это вместе.<br>Никаких шаблонов. Только суть.</p>
    <div class="cta-btns r r-up d3"><a href="https://wa.me/19172514669" class="btn btn-ivory">Написать флористу</a><a href="tel:+19172514669" class="btn btn-outline-ivory">Позвонить в студию</a></div>
  </div>
</section>

<script>
window.addEventListener('scroll',function(){var b=document.getElementById('waFloat');if(b)b.classList.toggle('visible',window.scrollY>400);},{passive:true});
(function(){
  document.querySelectorAll('.prod-card[data-slides]').forEach(function(card){
    var slides=card.querySelectorAll('.prod-slide');
    if(slides.length<2)return;
    var dots=card.querySelectorAll('.prod-dot');
    var bL=card.querySelector('.prod-arr-l'),bR=card.querySelector('.prod-arr-r');
    var cur=0,n=slides.length,busy=false;
    function go(i){if(busy)return;busy=true;slides[cur].classList.remove('active');if(dots[cur])dots[cur].classList.remove('active');cur=(i+n)%n;slides[cur].classList.add('active');if(dots[cur])dots[cur].classList.add('active');setTimeout(function(){busy=false;},460);}
    if(bL)bL.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();go(cur-1);});
    if(bR)bR.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();go(cur+1);});
    dots.forEach(function(d,i){d.addEventListener('click',function(e){e.preventDefault();e.stopPropagation();go(i);});});
    var tx=0;
    card.addEventListener('touchstart',function(e){tx=e.touches[0].clientX;},{passive:true});
    card.addEventListener('touchend',function(e){var dx=e.changedTouches[0].clientX-tx;if(Math.abs(dx)>40)go(dx<0?cur+1:cur-1);},{passive:true});
  });
})();
</script>
<?php get_footer(); ?>
