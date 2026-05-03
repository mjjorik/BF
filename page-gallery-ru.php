<?php
/**
 * Template Name: Галерея
 */

add_action('wp_head', function() { ?>
<title>Галерея работ | Boston Flowers — Студийная флористика в Бостоне</title>
<meta name="description" content="Фотографии наших работ: авторские букеты, розы с инициалами, оформление свадеб и мероприятий в Бостоне.">
<link rel="canonical" href="https://bostonflowers.com/ru/galereya/">
<?php }, 5);

get_header(); ?>

<section id="hero">
  <div class="container">
    <div class="hero-eyebrow"><div class="hero-line"></div><span class="lbl">Галерея работ</span></div>
    <h1 class="hero-h1 serif">Живые цветы.<br><em>Настоящие моменты.</em></h1>
    <p class="hero-sub">Каждая композиция сфотографирована в нашей студии в Брайтоне. Более 270 выполненных заказов.</p>
  </div>
</section>

<section id="gallery">
  <div class="container">
    <p style="text-align: center; color: var(--stone); font-family: 'DM Sans', sans-serif;">Галерея работ загружается...</p>
  </div>
</section>

<?php get_footer(); ?>
