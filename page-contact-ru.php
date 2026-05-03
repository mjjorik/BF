<?php
/**
 * Template Name: Контакты (RU)
 * Boston Flowers — Contact page
 * Slug: /contact
 */

add_action('wp_head', function() { ?>
<title>Контакты — Boston Flowers | Свяжитесь со студией в Брайтоне, Бостон</title>
<meta name="description" content="Свяжитесь со студией Boston Flowers в Брайтоне. WhatsApp, звонок или сообщение — мы подтвердим время, наличие цветов и варианты доставки по всему Бостону.">
<link rel="canonical" href="https://bostonflowers.com/ru/kontakty/">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "ContactPage",
      "@id": "https://bostonflowers.com/ru/kontakty/#webpage",
      "url": "https://bostonflowers.com/ru/kontakty/",
      "name": "Контакты — Boston Flowers",
      "description": "Контактная информация студии Boston Flowers в Бостоне.",
      "inLanguage": "ru-RU",
      "isPartOf": {"@id": "https://bostonflowers.com/#website"}
    }
  ]
}
</script>
<style>
  #contact-photo { height: 640px; background: var(--ink); }
  .cp-img { background: url('https://red-cod-475508.hostingersite.com/wp-content/uploads/2026/04/boston-flowers-studio-interior-contact.webp') no-repeat center 45% / cover; }
  @media (max-width: 768px) {
    #contact-photo { height: 400px; }
    .cp-img { background-position: 20% 15%; }
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
      <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Контакты &mdash; Брайтон, Бостон</span></div>
      <h1 class="hero-h1 serif">Свяжитесь <em>со студией.</em></h1>
      <p class="hero-sub">WhatsApp, звонок или сообщение &mdash; мы подтвердим сроки, наличие цветов и варианты доставки.</p>
      <div class="hero-btns">
        <a href="https://wa.me/19172514669" class="btn btn-ghost" target="_blank" rel="noopener">Открыть WhatsApp</a>
        <a href="tel:+16178173157" class="btn-text">Позвонить флористу &rarr;</a>
      </div>
    </div>
    <aside class="hero-meta" aria-label="Contact facts">
      <span class="hero-meta-ttl">Коротко</span>
      <div class="hero-meta-row"><span class="hero-meta-k">Студия</span><span class="hero-meta-v">Brighton, Boston</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Часы</span><span class="hero-meta-v">8 AM &mdash; 8 PM</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Быстрее</span><span class="hero-meta-v">WhatsApp</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Доставка</span><span class="hero-meta-v">Большой Бостон</span></div>
      <div class="hero-meta-row"><span class="hero-meta-k">Забор</span><span class="hero-meta-v">По записи</span></div>
    </aside>
  </div>
</section>

<div id="contact-photo" style="position:relative;overflow:hidden;background:var(--ink);">
  <div class="cp-img" style="position:absolute;inset:0;z-index:1;"></div>
  <div style="position:absolute;top:0;left:0;right:0;height:100px;background:linear-gradient(to bottom,var(--ink),transparent);z-index:2;pointer-events:none;"></div>
  <div style="position:absolute;bottom:0;left:0;right:0;height:200px;background:linear-gradient(to top,rgba(17,19,21,.95),transparent);z-index:2;pointer-events:none;"></div>
</div>

<section id="channels">
  <div class="container">
    <div class="ch-eyebrow r"><div class="hero-line"></div><span class="lbl">Выберите способ связи</span></div>
    <h2 class="ch-h serif r d1">Как вам удобнее <em>связаться с нами?</em></h2>
    <span class="ch-line r d1"></span>
    <div class="ch-grid">
      <a href="https://wa.me/19172514669" target="_blank" rel="noopener" class="ch-card r d1">
        <div class="ch-icon"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg></div>
        <div class="ch-tag"><span class="ch-dot"></span>Ответ в течение 5 мин</div>
        <h3 class="ch-ttl serif">WhatsApp</h3>
        <p class="ch-txt">Самый быстрый способ. Заказы «день в день», индивидуальные запросы и быстрые вопросы.</p>
        <span class="ch-cta">Написать в WhatsApp &rarr;</span>
      </a>
      <a href="tel:+16178173157" class="ch-card r d2">
        <div class="ch-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/></svg></div>
        <div class="ch-tag"><span class="ch-dot"></span>В часы работы, 8 AM &mdash; 8 PM</div>
        <h3 class="ch-ttl serif">Телефон</h3>
        <p class="ch-txt">Если нужно моментальное подтверждение, обсуждение сложного проекта или живое общение.</p>
        <span class="ch-cta">Позвонить в студию &rarr;</span>
      </a>
    </div>
  </div>
</section>

<section id="chips">
  <div class="container">
    <div class="ch-eyebrow r"><div class="hero-line"></div><span class="lbl">Быстрый старт</span></div>
    <h2 class="ch-h serif r d1">Что вы <em>заказываете?</em></h2>
    <span class="ch-line r d1"></span>
    <p class="chips-sub r d2">Нажмите — откроется WhatsApp с готовым текстом сообщения.</p>
    <div class="chips-grid r d3">
      <a class="chip" href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+заказать+букет+с+доставкой+сегодня." target="_blank" rel="noopener"><span class="chip-num">01</span>Букет на сегодня</a>
      <a class="chip" href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+обсудить+авторский+заказ." target="_blank" rel="noopener"><span class="chip-num">02</span>Индивидуальный заказ</a>
      <a class="chip" href="https://wa.me/19172514669?text=Здравствуйте!+Меня+интересует+гранд-аранжировка+от+$200." target="_blank" rel="noopener"><span class="chip-num">03</span>Гранд-аранжировка</a>
      <a class="chip" href="https://wa.me/19172514669?text=Здравствуйте!+Хочу+обсудить+свадебную+флористику." target="_blank" rel="noopener"><span class="chip-num">04</span>Свадебный запрос</a>
      <a class="chip" href="https://wa.me/19172514669?text=Здравствуйте!+Меня+интересуют+корпоративные+заказы." target="_blank" rel="noopener"><span class="chip-num">05</span>Бизнесу и событиям</a>
      <a class="chip" href="https://wa.me/19172514669?text=Здравствуйте!+Я+хочу+забрать+заказ+из+студии+в+Брайтоне." target="_blank" rel="noopener"><span class="chip-num">06</span>Забор из студии</a>
    </div>
  </div>
</section>

<section id="template">
  <div class="container">
    <div class="tpl-grid">
      <div class="tpl-left">
        <div class="ch-eyebrow r"><div class="hero-line"></div><span class="lbl">Или напишите сами</span></div>
        <h2 class="ch-h serif r d1">Скопируйте шаблон, <em>отправьте нам.</em></h2>
        <span class="ch-line r d1"></span>
        <p class="tpl-sub r d2">Готовое сообщение, которое даст нам всё необходимое для подтверждения заказа за один ответ.</p>
        <div class="tpl-meta r d3">
          <span class="lbl">Включает</span>
          <ul class="tpl-list">
            <li>Повод</li>
            <li>Бюджет</li>
            <li>Район доставки</li>
            <li>Желаемое время</li>
          </ul>
        </div>
      </div>
      <div class="tpl-card r d2">
        <div class="tpl-card-top">
          <span class="lbl">Пример сообщения</span>
          <div class="tpl-dots"><span></span><span></span><span></span></div>
        </div>
        <pre id="tplText" class="tpl-text">Здравствуйте, я хочу заказать цветы.

Повод:
Бюджет:
Район доставки:
Желаемое время:
Референсы (если есть):</pre>
        <button id="copyBtn" class="tpl-btn" type="button">
          <span class="copy-default">Копировать шаблон</span>
          <span class="copy-done">Скопировано ✓</span>
        </button>
      </div>
    </div>
  </div>
</section>

<section id="studio">
  <div class="container">
    <div class="studio-grid">
      <div class="studio-left">
        <div class="studio-eyebrow r"><div class="hero-line"></div><span class="lbl">Студия</span></div>
        <h2 class="studio-h serif r d1">Брайтон, <em>Бостон.</em></h2>
        <div class="studio-addr r d2">
          <small>Адрес</small>
          267 North Beacon St,<br>Brighton, MA 02135
        </div>
        <div class="studio-rows r d3">
          <div class="studio-row"><span class="sr-k">Часы</span><span class="sr-v">8 AM &mdash; 8 PM</span></div>
          <div class="studio-row"><span class="sr-k">Забор</span><span class="sr-v">По записи</span></div>
          <div class="studio-row"><span class="sr-k">Охват</span><span class="sr-v">Большой Бостон</span></div>
        </div>
        <p class="studio-pitch r d4"><strong>Одна студия. Одна команда. Без посредников.</strong></p>
        <p class="studio-zones-ttl r d4"><span class="lbl">Зоны доставки</span></p>
        <ul class="studio-zones r d5">
          <li><span>Boston / Newton / Cambridge / Watertown</span><strong>от $20</strong></li>
          <li><span>Needham / Burlington</span><strong>$35&ndash;40</strong></li>
          <li><span>Rhode Island и дальние районы</span><strong>от $100+</strong></li>
        </ul>
      </div>
      <div class="studio-map r d2">
        <iframe
          class="studio-map-iframe"
          src="https://www.google.com/maps?q=267+North+Beacon+St,+Brighton,+MA+02135&output=embed&z=14"
          loading="lazy"
          title="Boston Flowers studio location"></iframe>
        <a class="studio-map-label" href="https://maps.google.com/?q=267+North+Beacon+St,+Brighton,+MA+02135" target="_blank" rel="noopener">
          <span class="lbl">Студия</span>
          <span class="map-coord">267 North Beacon St &middot; Brighton, MA</span>
          <span class="map-open">В картах &rarr;</span>
        </a>
      </div>
    </div>
  </div>
</section>

<section id="form">
  <div class="container">
    <div class="ch-eyebrow r"><div class="hero-line"></div><span class="lbl">Или через форму</span></div>
    <h2 class="ch-h serif r d1">Отправьте нам <em>сообщение.</em></h2>
    <span class="ch-line r d1"></span>
    <p class="form-sub r d2">Если WhatsApp вам не подходит — мы ответим по телефону или email.</p>
    <form id="contactForm" class="form-grid r d3" onsubmit="return handleSubmit(event)">
      <div class="fld">
        <label for="fName">Ваше имя</label>
        <input id="fName" type="text" placeholder="Алексей" required>
      </div>
      <div class="fld">
        <label for="fContact">Телефон или Email</label>
        <input id="fContact" type="text" placeholder="Для связи" required>
      </div>
      <div class="fld fld-full">
        <label for="fAbout">Тема задачи</label>
        <select id="fAbout">
          <option>Букет на сегодня</option>
          <option>Индивидуальный заказ</option>
          <option>Гранд-аранжировка</option>
          <option>Свадебный запрос</option>
          <option>Бизнес и события</option>
          <option>Другое</option>
        </select>
      </div>
      <div class="fld fld-full">
        <label for="fMsg">Детали</label>
        <textarea id="fMsg" rows="4" placeholder="Повод, бюджет, адрес доставки, время..."></textarea>
      </div>
      <button type="submit" class="btn btn-wine form-submit">Отправить</button>
    </form>
    <div id="formSuccess" class="form-success">
      <span class="success-line"></span>
      <h3 class="serif">Принято. Мы скоро ответим.</h3>
      <p>Обычно в течение нескольких минут в часы работы.</p>
    </div>
  </div>
</section>

<section id="final">
  <div class="final-inner">
    <span class="final-eyebrow r">Напишите сейчас</span>
    <h2 class="final-h serif r d1">Мы <em>всё сделаем.</em></h2>
    <p class="final-sub r d2">Одного сообщения достаточно, чтобы начать. WhatsApp — самый быстрый способ связи.</p>
    <div class="final-btns r d3">
      <a href="https://wa.me/19172514669" target="_blank" rel="noopener" class="btn btn-ivory">Открыть WhatsApp</a>
      <a href="tel:+16178173157" class="btn btn-outline-ivory">Позвонить в студию</a>
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

const copyBtn=document.getElementById('copyBtn');
const tplText=document.getElementById('tplText');
if(copyBtn&&tplText){
  copyBtn.addEventListener('click',()=>{
    navigator.clipboard.writeText(tplText.textContent).then(()=>{
      copyBtn.classList.add('done');
      setTimeout(()=>copyBtn.classList.remove('done'),2200);
    });
  });
}

function handleSubmit(e){
  e.preventDefault();
  document.getElementById('contactForm').style.display='none';
  const s=document.getElementById('formSuccess');
  s.classList.add('shown');
  s.scrollIntoView({behavior:'smooth',block:'center'});
  return false;
}
</script>

<?php get_footer(); ?>
