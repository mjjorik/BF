<?php
/**
 * Single Journal Post Template
 * Boston Flowers
 */

$bf_post_id   = get_the_ID();
$bf_category  = get_post_meta($bf_post_id, "_bf_category", true) ?: (get_the_category() ? get_the_category()[0]->name : "Journal");
$bf_read_time = get_post_meta($bf_post_id, "_bf_read_time", true) ?: "5";
$bf_key_raw   = get_post_meta($bf_post_id, "_bf_key_points", true);
$bf_faq_raw   = get_post_meta($bf_post_id, "_bf_faq", true);
$bf_rel_raw   = get_post_meta($bf_post_id, "_bf_related", true);
$bf_keys      = $bf_key_raw ? json_decode($bf_key_raw, true) : [];
$bf_faq       = $bf_faq_raw ? json_decode($bf_faq_raw, true) : [];
$bf_related   = $bf_rel_raw ? json_decode($bf_rel_raw, true) : [];

$post_title    = get_the_title();
$post_date     = get_the_date("F j, Y");
$post_date_iso = get_the_date("c");
$post_excerpt  = get_the_excerpt();
$post_url      = get_permalink();
$post_img      = get_the_post_thumbnail_url(null, "full") ?: "";

// Standard contacts
$studio_wa = "https://wa.me/19172514669";
$studio_tel = "tel:+16178173157";

$faq_schema = [];
foreach ($bf_faq as $item) {
    $faq_schema[] = ["@type" => "Question", "name" => $item["q"], "acceptedAnswer" => ["@type" => "Answer", "text" => $item["a"]]];
}
$graph = [[
    "@type"          => "Article",
    "headline"       => $post_title,
    "description"    => $post_excerpt,
    "datePublished"  => $post_date_iso,
    "dateModified"   => $post_date_iso,
    "author"         => ["@type" => "Organization", "name" => "Boston Flowers"],
    "publisher"      => ["@type" => "Organization", "name" => "Boston Flowers"],
    "articleSection" => $bf_category,
    "inLanguage"     => "en-US",
]];
if ($post_img) $graph[0]["image"] = $post_img;
if (!empty($faq_schema)) $graph[] = ["@type" => "FAQPage", "mainEntity" => $faq_schema];
$graph[] = ["@type" => "BreadcrumbList", "itemListElement" => [
    ["@type" => "ListItem", "position" => 1, "name" => "Home", "item" => "https://bostonflowers.com/"],
    ["@type" => "ListItem", "position" => 2, "name" => "Journal", "item" => "https://bostonflowers.com/journal"],
    ["@type" => "ListItem", "position" => 3, "name" => $post_title, "item" => $post_url],
]];

add_action("wp_head", function() use ($post_title, $post_excerpt, $post_url, $post_img, $graph) {
    echo "<title>" . esc_html($post_title) . " | Boston Flowers Journal</title>" . "\n";
    echo "<meta name=\"description\" content=\"" . esc_attr($post_excerpt) . "\">" . "\n";
    echo "<link rel=\"canonical\" href=\"" . esc_url($post_url) . "\">" . "\n";
    echo "<meta property=\"og:type\" content=\"article\">" . "\n";
    if ($post_img) echo "<meta property=\"og:image\" content=\"" . esc_url($post_img) . "\">" . "\n";
    echo "<script type=\"application/ld+json\">" . json_encode(["@context" => "https://schema.org", "@graph" => $graph], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "</script>" . "\n";
}, 5);

add_action("wp_enqueue_scripts", function() {
    $file = "/assets/css/journal-post.css";
    if (file_exists(get_stylesheet_directory() . $file)) {
        wp_enqueue_style("bf-journal-post", get_stylesheet_directory_uri() . $file, ["boston-flowers-main"], filemtime(get_stylesheet_directory() . $file));
    }
});

get_header(); ?>

<a href="<?php echo esc_url($studio_wa); ?>" class="wa-float" id="waFloat" aria-label="WhatsApp" target="_blank" rel="noopener">
  <svg viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
</a>
<div class="scroll-progress" id="scrollProgress"></div>

<!-- ═ BF SECTION: hero ═ -->

<section id="hero">
  <div class="hero-bg"><div class="hero-glow-l"></div><div class="hero-glow-r"></div></div>
  <div class="hero-bf" aria-hidden="true">BF</div>
  <div class="hero-inner post-hero-inner">
    <div class="hero-left">
      <a href="/journal" class="post-back r">&#8592; Back to Journal</a>
      <div class="hero-eyebrow r"><div class="hero-line"></div><span class="lbl"><?php echo esc_html($bf_category); ?> &mdash; Boston Flowers</span></div>
      <h1 class="hero-h1 serif r"><?php echo $post_title; ?></h1>
      <div class="post-meta r">
        <span><?php echo esc_html($post_date); ?></span>
        <span class="post-meta-sep"></span>
        <span><?php echo esc_html($bf_read_time); ?> min read</span>
        <span class="post-meta-sep"></span>
        <span>Boston Flowers Studio</span>
      </div>
    </div>
    <div class="hero-right">
      <?php /* Studio card removed */ ?>
    </div>
  </div>
</section>

<!-- ═ BF SECTION: trust-marquee ═ -->

<section id="trust-marquee">
  <div class="marquee-track">
    <div class="marquee-inner">
      <span class="marquee-item"><span>&#10022;</span><?php echo esc_html($bf_category); ?></span>
      <span class="marquee-item"><span>&#10022;</span>Same-day delivery across Boston</span>
      <span class="marquee-item"><span>&#10022;</span>Real photo before delivery</span>
      <span class="marquee-item"><span>&#10022;</span>Custom arrangements</span>
      <span class="marquee-item"><span>&#10022;</span>Brighton, Boston studio</span>
      <span class="marquee-item"><span>&#10022;</span>Response in 5 minutes</span>
      <span class="marquee-item"><span>&#10022;</span><?php echo esc_html($bf_category); ?></span>
      <span class="marquee-item"><span>&#10022;</span>Same-day delivery across Boston</span>
      <span class="marquee-item"><span>&#10022;</span>Real photo before delivery</span>
      <span class="marquee-item"><span>&#10022;</span>Custom arrangements</span>
      <span class="marquee-item"><span>&#10022;</span>Brighton, Boston studio</span>
      <span class="marquee-item"><span>&#10022;</span>Response in 5 minutes</span>
    </div>
  </div>
</section>

<!-- ═ BF SECTION: post-photo-break ═ -->

<?php if ($post_img): ?>

<section id="post-photo-break">
  <img src="<?php echo esc_url($post_img); ?>" alt="<?php echo esc_attr($post_title); ?>" loading="lazy" style="width:100%;height:100%;object-fit:cover;object-position:center;display:block;">
</section>
<?php else: ?>
<section id="post-photo-break" class="post-photo-ph"></section>
<?php endif; ?>

<!-- ═ BF SECTION: post-article ═ -->

<style>
  .post-body h2, .post-body h3, #post-faq h2 { color: var(--ink); }
  .post-body h2 em, .post-body h3 em, #post-faq h2 em { color: var(--rose); font-style: italic; }
  .post-footer-cta-title { font-size: clamp(32px, 5vw, 64px) !important; line-height: 1.1 !important; }
</style>

<section id="post-article">
  <div class="container">
    <div class="post-layout">
      <article class="post-body">
        <?php if (!empty($bf_keys)): ?>
        <div class="bf-key r">
          <span class="bf-key-label">Key takeaways</span>
          <ul>
            <?php foreach ($bf_keys as $key): ?>
            <li><?php echo esc_html($key); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>
        <div class="post-content r d1">
          <?php the_content(); ?>
        </div>

        <?php if (!empty($bf_faq)): ?>
        <div id="post-faq" class="r d2" style="background:var(--ivory); padding: 80px 0; border-top:1px solid var(--bdl); margin-top: 60px;">
          <h2 class="serif" style="border-top:none; margin-top:0; padding-top:0;">Frequently Asked <em>Questions.</em></h2>
          <div class="faq-list">
            <?php foreach ($bf_faq as $item): ?>
            <div class="faq-item" style="border-bottom:1px solid var(--bdl);">
              <div class="faq-q" style="color:var(--ink); font-size: 20px; padding: 22px 0;"><?php echo esc_html($item["q"]); ?><span class="faq-icon" style="border-color:var(--bdl);">+</span></div>
              <div class="faq-a" style="color:#5a554f; font-size: 15px;"><?php echo esc_html($item["a"]); ?></div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; ?>

      </article>
      <aside class="post-sidebar">
        <div class="post-sidebar-card r">
          <span class="post-sidebar-label">Order today</span>
          <p class="post-sidebar-title serif">Custom arrangement,<br><em>same-day delivery.</em></p>
          <p class="post-sidebar-sub">Order before 10:30 AM. We send a photo before every delivery.</p>
          <a href="<?php echo esc_url($studio_wa); ?>" class="btn btn-wine" style="width:100%;text-align:center;display:block;margin-bottom:10px;">WhatsApp &rarr;</a>
          <a href="<?php echo $studio_tel; ?>" class="btn btn-ghost" style="width:100%;text-align:center;display:block;color:var(--wine);border-color:var(--wine);">Call the Studio</a>
        </div>
      </aside>
    </div>
  </div>
</section>

<!-- ═ BF SECTION: post-footer-cta (wine) ═ -->

<section class="post-footer-cta">
  <div class="post-footer-cta-bg"></div>
  <div class="container post-footer-cta-inner r">
    <div>
      <span class="lbl" style="color:rgba(243,238,231,.4)">Boston Flowers Studio</span>
      <p class="post-footer-cta-title serif">267 North Beacon St,<br><em>Brighton, Boston.</em></p>
    </div>
    <div style="display:flex;flex-direction:column;gap:12px;flex-shrink:0;">
      <a href="/shop" class="btn btn-ivory">Shop Bouquets &rarr;</a>
    </div>
  </div>
</section>

<script>
const prog=document.getElementById("scrollProgress");
window.addEventListener("scroll",()=>{prog.style.width=Math.min(window.scrollY/(document.body.scrollHeight-window.innerHeight)*100,100)+"%";},{passive:true});
const ro=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add("on");ro.unobserve(e.target);}});},{threshold:.06,rootMargin:"0px 0px -16px 0px"});
document.querySelectorAll(".r,.rc").forEach(el=>ro.observe(el));
const line=document.querySelector(".statement-line");
if(line){const lineIo=new IntersectionObserver(e=>{if(e[0].isIntersecting){line.classList.add("on");lineIo.disconnect();}});lineIo.observe(line);}
window.addEventListener("scroll",()=>{document.getElementById("waFloat").classList.toggle("visible",scrollY>400);},{passive:true});
document.querySelectorAll(".faq-item").forEach(item=>{
  item.querySelector(".faq-q").addEventListener("click",()=>{
    const isOpen=item.classList.contains("open");
    document.querySelectorAll(".faq-item").forEach(i=>i.classList.remove("open"));
    if(!isOpen)item.classList.add("open");
  });
});
</script>

<?php get_footer(); ?>
