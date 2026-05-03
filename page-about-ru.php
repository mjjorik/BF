<?php
/**
 * Template Name: О нас (RU)
 * Boston Flowers — About page
 * Slug: /about
 */

add_action('wp_head', function() { ?>
<title>О студии — Boston Flowers | Цветочная студия в Брайтоне, Бостон</title>
<meta name="description" content="Независимая цветочная студия в Брайтоне, Бостон. Авторские композиции, гранд-аранжировки и доставка день в день. Работаем семейной парой.">
<link rel="canonical" href="https://bostonflowers.com/ru/o-nas/">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "AboutPage",
      "@id": "https://bostonflowers.com/ru/o-nas/#webpage",
      "url": "https://bostonflowers.com/ru/o-nas/",
      "name": "О студии — Boston Flowers",
      "description": "История и принципы работы независимой цветочной студии в Бостоне.",
      "inLanguage": "ru-RU",
      "isPartOf": {"@id": "https://bostonflowers.com/#website"}
    },
    {
      "@type": "Florist",
      "name": "Boston Flowers",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "267 North Beacon St",
        "addressLocality": "Brighton",
        "addressRegion": "MA",
        "postalCode": "02135"
      }
    }
  ]
}
</script>
<style>
  @media (min-width: 1025px) {
    .s-photo[data-label="Студия"] { background-position: 20% center !important; }
  }
</style>
<?php }, 5);

get_header(); ?>

<a href="https://wa.me/19172514669" class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<section id="hero">
  <div class="hero-bg"><div class="hero-glow-l"></div><div class="hero-glow-r"></div></div>
  <div class="hero-bf" aria-hidden="true">BF</div>
  <div class="hero-inner">
    <div class="hero-left">
      <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">О студии &mdash; Брайтон, Бостон</span></div>
      <h1 class="hero-h1 serif">
        Студия флористики в Бостоне:<br>
        <em>искусство живых цветов.</em>
      </h1>
      <p class="hero-sub">Независимая студия, сфокусированная на авторских работах, гранд-композициях и доставке в тот же день.</p>
      <div class="hero-btns">
        <a href="/custom-orders" class="btn btn-ghost">Сделать заказ</a>
        <a href="https://wa.me/19172514669" class="btn-text">Обсудить проект &rarr;</a>
      </div>
    </div>
    <aside class="hero-meta" aria-label="Studio facts">
      <span class="hero-meta-ttl">Коротко о нас</span>
      <div class="hero-meta-row"><span class="hero-meta-k">Локация</span><span class="hero-meta-v">Брайтон, Бостон</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Модель</span><span class="hero-meta-v">Независимая студия</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Команда</span><span class="hero-meta-v">Семейная пара</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Охват</span><span class="hero-meta-v">Большой Бостон</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Профиль</span><span class="hero-meta-v">Авторские заказы</span></div>
    </aside>
  </div>
</section>

<section id="think">
  <div class="container">
    <div class="think-eyebrow r"><div class="hero-line"></div><span class="lbl">Наш подход</span></div>
    <h2 class="think-main serif r d1">
      Сначала свежесть.<br>
      Затем дизайн. <em>Доставка подтверждена.</em>
    </h2>
    <div class="think-grid">
      <div class="think-card r d1">
        <span class="think-num">01 &middot; Наличие</span>
        <p class="think-txt">Мы создаем форму на основе того, что <strong>действительно свежее</strong> в день заказа, а не по фиксированному каталогу.</p>
      </div>
      <div class="think-card r d2">
        <span class="think-num">02 &middot; Подтверждение</span>
        <p class="think-txt">Каждый заказ <strong>подтверждается перед выездом</strong>. Время, адрес и получатель — проверяются нами лично.</p>
      </div>
      <div class="think-card r d3">
        <span class="think-num">03 &middot; Композиция</span>
        <p class="think-txt">Мы проектируем каждую аранжировку под конкретное пространство и задачу — <strong>без использования шаблонов</strong>.</p>
      </div>
    </div>
  </div>
</section>

<section id="do">
  <div class="container">
    <div class="do-head">
      <h2 class="do-h serif r">Что мы <em>действительно</em> делаем.</h2>
      <p class="do-sub r d1">Фокусированная студия. Пять направлений, которые мы ведем полностью сами — от первого звонка до вручения цветов.</p>
    </div>
    <div class="do-list r d2">
      <div class="do-item">
        <span class="do-num">01</span>
        <h3 class="do-ttl serif">Доставка<br>сегодня</h3>
        <p class="do-tag">Большой Бостон &middot; до 10:30 AM</p>
      </div>
      <div class="do-item">
        <span class="do-num">02</span>
        <h3 class="do-ttl serif">Авторские<br>заказы</h3>
        <p class="do-tag">Индивидуальный дизайн</p>
      </div>
      <div class="do-item">
        <span class="do-num">03</span>
        <h3 class="do-ttl serif">Гранд-<br>аранжировки</h3>
        <p class="do-tag">Масштабные работы &middot; от $200</p>
      </div>
      <div class="do-item">
        <span class="do-num">04</span>
        <h3 class="do-ttl serif">Свадьбы<br>и события</h3>
        <p class="do-tag">Полное оформление</p>
      </div>
      <div class="do-item">
        <span class="do-num">05</span>
        <h3 class="do-ttl serif">Для<br>бизнеса</h3>
        <p class="do-tag">Контрактное обслуживание</p>
      </div>
    </div>
  </div>
</section>

<section id="process">
  <div class="container">
    <div class="proc-eyebrow r"><div class="hero-line"></div><span class="lbl">Как это работает</span></div>
    <h2 class="proc-h serif r d1">Простой процесс. <em>Без посредников.</em></h2>
    <div class="proc-grid">
      <div class="proc-step r d1">
        <span class="proc-num">01</span>
        <h3 class="proc-ttl serif">Ваша задача</h3>
        <p class="proc-txt">Отправьте то, что вам нужно — дату, бюджет, настроение или фото. Этого достаточно для старта.</p>
      </div>
      <div class="proc-step r d2">
        <span class="proc-num">02</span>
        <h3 class="proc-ttl serif">Наш проект</h3>
        <p class="proc-txt">Мы предлагаем визуальное направление на основе свежих цветов этого дня и согласовываем его.</p>
      </div>
      <div class="proc-step r d3">
        <span class="proc-num">03</span>
        <h3 class="proc-ttl serif">Подтверждение</h3>
        <p class="proc-txt">Адрес, время, открытка. Мы пришлем фото готовой работы перед отправкой курьера.</p>
      </div>
      <div class="proc-step r d4">
        <span class="proc-num">04</span>
        <h3 class="proc-ttl serif">Доставка</h3>
        <p class="proc-txt">Точная доставка по всему Большому Бостону — нами лично или проверенным курьером.</p>
      </div>
    </div>
  </div>
</section>

<section id="dont">
  <div class="container">
    <div class="dont-head">
      <h2 class="dont-h serif r">Чего мы <em>не</em> делаем.</h2>
      <p class="dont-sub r d1">Премиум-сервис имеет границы. Вещи, за которые мы не беремся, позволяют нам делать остальное на высшем уровне.</p>
    </div>
    <div class="dont-list">
      <div class="dont-item r d1">
        <div class="dont-x" aria-hidden="true"></div>
        <h3 class="dont-ttl serif">Никаких шаблонов</h3>
        <p class="dont-txt">Мы не собираем букеты по фиксированному каталогу повторов. Каждый заказ индивидуален.</p>
      </div>
      <div class="dont-item r d2">
        <div class="dont-x" aria-hidden="true"></div>
        <h3 class="dont-ttl serif">Никаких копий</h3>
        <p class="dont-txt">Мы используем референсы как направление, а не инструкцию. Мы создаем то, что живет в реальности.</p>
      </div>
      <div class="dont-item r d3">
        <div class="dont-x" aria-hidden="true"></div>
        <h3 class="dont-ttl serif">Никакой дешевизны</h3>
        <p class="dont-txt">Если бюджет не соответствует дизайну, мы скажем об этом прямо, вместо того чтобы экономить на качестве.</p>
      </div>
    </div>
  </div>
</section>

<section id="studio">
  <div class="container">
    <div class="studio-grid">
      <div class="studio-left">
        <div class="studio-eyebrow r"><div class="hero-line"></div><span class="lbl">Студия</span></div>
        <h2 class="studio-h serif r d1">Реальное пространство в <em>Брайтоне, Бостон.</em></h2>
        <div class="studio-addr r d2">
          <small>Адрес</small>
          267 North Beacon St,<br>Brighton, MA 02135
        </div>
        <p class="studio-pitch r d3"><strong>Одна студия. Одна команда. Без аутсорса.</strong></p>
        <p class="studio-human r d4">Управляется семейной парой из рабочего пространства в Брайтоне — это не виртуальный магазин, а живое дело.</p>
        <div class="studio-cta r d5">
          <a href="/ru/kontakty/" class="btn btn-ghost">Связаться</a>
          <a href="/custom-orders" class="btn-text">Индивидуальный заказ &rarr;</a>
        </div>
      </div>
      <div class="studio-photos r d2">
        <div class="s-photo" data-label="Студия" style="background-image:url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-space-v7.webp'); background-size:cover; background-position:25% center; min-height:100%;">
          <span class="s-num">01</span>
        </div>
        <div class="s-photo" data-label="В процессе" style="background: #111315 url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-about-in-progress.webp') no-repeat center/cover; min-height:100%;"><span class="s-num">02</span></div>
        <div class="s-photo" data-label="Доставка" style="background: #111315 url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/hand-delivery-boston-flowers-brighton.webp') no-repeat center/cover; min-height:100%;"><span class="s-num">03</span></div>
      </div>
    </div>
  </div>
</section>

<section id="promise" class="r">
  <span class="promise-eyebrow">Стандарт студии</span>
  <h2 class="promise-h serif">Сделано правильно. <em>Доставлено вовремя.</em></h2>
  <p class="promise-sub">Три правила, которые мы соблюдаем для каждого заказа — без исключений и компромиссов.</p>
  <span class="promise-line"></span>
  <div class="promise-grid">
    <div class="promise-card">
      <span class="promise-num">01</span>
      <h3 class="promise-ttl serif">Свежесть</h3>
      <p class="promise-txt">Дизайн на основе того, что действительно свежее в день заказа — никакого старого стока.</p>
    </div>
    <div class="promise-card">
      <span class="promise-num">02</span>
      <h3 class="promise-ttl serif">Подтверждение</h3>
      <p class="promise-txt">Каждый заказ подтверждается нами лично перед выездом курьера.</p>
    </div>
    <div class="promise-card">
      <span class="promise-num">03</span>
      <h3 class="promise-ttl serif">Доставка</h3>
      <p class="promise-txt">По всему Большому Бостону, вовремя — или вы узнаете об изменениях первыми.</p>
    </div>
  </div>
</section>

<section id="final">
  <div class="final-inner">
    <span class="final-eyebrow r">Расскажите, что вам нужно</span>
    <h2 class="final-h serif r d1">Если это важно — <em>мы это сделаем.</em></h2>
    <p class="final-sub r d2">Пришлите дату, бюджет или просто настроение — остальное мы возьмем на себя.</p>
    <div class="final-btns r d3">
      <a href="/custom-orders" class="btn btn-ivory">Начать заказ</a>
      <a href="tel:+19172514669" class="btn btn-outline-ivory">Позвонить флористу</a>
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
</script>

<?php get_footer(); ?>
