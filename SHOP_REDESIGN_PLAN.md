# Boston Flowers — WooCommerce Shop Redesign Plan
**Date:** 2026-05-03  
**Branch:** `claude/audit-woocommerce-shop-YzEg1`  
**Status:** Audit complete. No code changes have been made yet.

---

## PHASE 1 — AUDIT FINDINGS

### 1. WooCommerce Template Overrides in `woocommerce.php`

The theme uses a **single wrapper template** strategy rather than individual template overrides. `woocommerce.php` at the theme root is WordPress/WooCommerce's "catch-all" template for every WooCommerce page. It:

- Adds contextual body classes (`.bf-wc-catalog`, `.bf-wc-product-page`, `.bf-wc-cart-page`, etc.)
- Renders a custom `.bf-wc-hero` section with dynamic headings/subheadlines per page type
- Renders `.bf-wc-nav` category pills on catalog pages (shop, category, tag)
- For catalog pages: calls `boston_flowers_shop_filters()` — **which does not exist** (see Bug #1)
- Calls `woocommerce_content()` for all actual WooCommerce output (loop, single product, cart, checkout, account, order received)

**No individual template files are overridden.** There is no `woocommerce/` directory in the theme. All WooCommerce HTML output (product cards, single product layout, cart table, checkout form) is left as WooCommerce defaults, styled purely via CSS selectors in `woocommerce.css`.

**There is also `page.php`** which duplicates the shop chrome (hero, category nav pills, filter sidebar) using hardcoded PHP. It serves WordPress pages at `/shop/roses/`, `/shop/luxury-bouquets/`, etc. via `the_content()` — NOT `woocommerce_content()`. This means these pages output WordPress page content, not a real WooCommerce product archive. The two templates share the same CSS classes but serve different content (see Bug #4).

---

### 2. CSS Conflicts Between `woocommerce.css` and `main.css`

#### Critical — Breaks sticky sidebar
`woocommerce.css` line 1:
```css
.bf-wc { overflow: hidden; }
```
`woocommerce.css` also declares:
```css
.bf-filter-sidebar, .bf-wc-filters { position: sticky; top: calc(var(--nav-h) + 20px); }
```
**`overflow: hidden` on any ancestor element disables `position: sticky` for all descendants.** The filter sidebar will scroll away with the page on every desktop breakpoint. This is the single most disruptive CSS bug.

#### Color Token Drift
- `main.css` → `--rose: #C89B93`
- `woocommerce.css` → `--bf-rose: #cfa29a` (7% brighter, different hex)
Both are used in the same pages via the same components. The rose/pinkish accent colour is inconsistent between WooCommerce and non-WooCommerce pages.

#### Container Width Mismatch
- `main.css` → `.container { max-width: 1280px; padding: 0 48px }`
- `woocommerce.css` → `.bf-wc-container { max-width: 1200px; padding: 0 clamp(20px,4vw,32px) }`
WooCommerce pages are 80px narrower at full width and have slightly less padding, creating a visible layout shift when navigating between shop and content pages.

#### Product Grid Column Count
```css
.bf-wc ul.products {
  grid-template-columns: repeat(auto-fit, minmax(min(100%,270px), 1fr));
}
```
`auto-fit` + `minmax(270px)` on a 900px container yields **3 columns** — but on wider containers (1200px sidebar layout = ~880px main area) could yield 3, which is correct here. However, if the sidebar is absent (e.g. when `boston_flowers_shop_filters()` is missing and the grid becomes 1-column layout), the main area fills the full 1200px and `auto-fit` produces **4 columns** instead of 3. The spec calls for exactly 3/2/1 — this should use `repeat(3, 1fr)` with breakpoint overrides.

#### `overflow-x: hidden` Cascade
- `main.css` → `body { overflow-x: hidden }` (line 19)
- `woocommerce.css` → `body.woocommerce-page { overflow-x: hidden }` (redundant; also `overflow-x: hidden` on body implicitly sets `overflow-y: auto`, disabling the body scroll container — this causes layout issues on iOS Safari where the page may not scroll correctly)

#### Default WooCommerce CSS Is Never Removed
`functions.php` has no `add_filter('woocommerce_enqueue_styles', ...)` hook. WooCommerce's bundled stylesheet (`/wp-content/plugins/woocommerce/assets/css/woocommerce.css`) will be enqueued alongside the theme's custom CSS. This injects ~2,000 lines of default WooCommerce styling on top of the custom design, causing visual contamination on inputs, tables, buttons, and notices that aren't fully reset by the `.bf-wc` scope.

#### Duplicate CSS Declarations in `main.css`
`.bf-mark`, `.bf-b`, `.bf-f`, `.nav-item`, `.nav-item > a`, `.chev` are declared twice in `main.css` — once in the regular block (lines ~53–66) and once inside the `BF:CSS:HEADER:START` comment block (lines 318–327). No runtime conflict, but increases file size and creates maintenance confusion.

---

### 3. Shop Pages That Exist

| Page | URL Pattern | Routed Via | Content Output |
|---|---|---|---|
| Shop (main archive) | `/shop/` | `woocommerce.php` via `is_shop()` | `woocommerce_content()` ✓ |
| Category archive | `/product-category/roses/` | `woocommerce.php` via `is_product_category()` | `woocommerce_content()` ✓ |
| "Category" WP pages | `/shop/roses/`, `/shop/luxury-bouquets/` etc. | `page.php` | `the_content()` ✗ (no products) |
| Single product | `/product/[slug]/` | `woocommerce.php` via `is_product()` | `woocommerce_content()` ✓ |
| Cart | `/cart/` | `woocommerce.php` via `is_cart()` | `woocommerce_content()` ✓ |
| Checkout | `/checkout/` | `woocommerce.php` via `is_checkout()` | `woocommerce_content()` ✓ |
| Order received | `/checkout/order-received/` | `woocommerce.php` via `is_wc_endpoint_url()` | `woocommerce_content()` ✓ |
| My Account | `/my-account/` | `woocommerce.php` via `is_account_page()` | `woocommerce_content()` ✓ |

**Key finding:** Navigation links in `header.php` point to `/shop/roses`, `/shop/luxury-bouquets/`, etc. — these are WordPress page slugs, not WooCommerce category URLs. They are served by `page.php` using `the_content()` and never display actual WooCommerce products. The category nav pills in both `page.php` and `woocommerce.php` hardcode these same `/shop/{slug}/` URLs.

---

### 4. Filters/Attributes Registered

**No WooCommerce attribute registration exists in `functions.php`.** Attributes are assumed to be registered via the WooCommerce admin UI. The codebase references these attribute slugs:

| Attribute Slug | Taxonomy | Category Context |
|---|---|---|
| `color` | `pa_color` | All, Roses |
| `occasion` | `pa_occasion` | All, Roses, Luxury Bouquets, Grand Arrangements |
| `design-feature` | `pa_design-feature` | All, Roses |
| `flower-type` | `pa_flower-type` | All, Luxury Bouquets |
| `stem-count` | `pa_stem-count` | All, Roses |
| `palette` | `pa_palette` | All, Luxury Bouquets, Grand Arrangements |
| `format` | `pa_format` | All, Grand Arrangements |
| `availability` | `pa_availability` | All, Roses, Luxury Bouquets, Grand Arrangements |
| `season` | `pa_season` | All |

Filters use `filter_{attribute_slug}` GET parameters with `query_type_{attribute_slug}=or` — this is the WooCommerce layered nav URL pattern. However, the filter links are custom-built HTML anchors (not using WooCommerce's built-in filter widgets), so WooCommerce's layered nav query (`WC_Query::get_main_query()`) must be handling the actual filtering server-side.

**Two functions are called but never defined anywhere in the codebase:**
- `boston_flowers_shop_filters()` — called in `woocommerce.php`, handles filter sidebar render on WC pages
- `boston_flowers_shop_section_links()` — called in `page.php`, handles empty-cart link list

---

### 5. What Is Broken or Unstyled Right Now

#### Bug #1 — Filter Sidebar Invisible on WooCommerce-Routed Pages (Critical)
`boston_flowers_shop_filters()` does not exist in `functions.php`. On the actual WooCommerce shop archive (`/shop/`) and product category pages (`/product-category/roses/`), no filters are rendered. The `.bf-wc-catalog .bf-wc-content .bf-wc-container` grid still has 2 columns defined in CSS, so there's a blank left column where filters should be.

#### Bug #2 — Filter Sidebar Not Sticky on Desktop (Critical)
`overflow: hidden` on `.bf-wc` disables `position: sticky` on all descendants. The filter sidebar will scroll with the page content instead of staying fixed on the left. This affects every desktop user on every catalog page.

#### Bug #3 — `/shop/roses/` etc. Show Zero Products (Critical)
The category nav links in the header and in both template files point to `/shop/roses/`, `/shop/luxury-bouquets/` etc. These URLs resolve to WordPress pages served by `page.php`, which calls `the_content()` (WordPress page body) — NOT `woocommerce_content()`. No WooCommerce product loop runs. Visitors clicking "Roses" in the category nav see a blank product area.

#### Bug #4 — Default WooCommerce CSS Contaminating Design
Without `add_filter('woocommerce_enqueue_styles', '__return_empty_array')`, the WooCommerce plugin stylesheet loads on all shop pages. Default styles for buttons, form inputs, tables, notices, and layout will fight the custom `.bf-wc` styles. Most notably, the default WooCommerce product loop uses floats and fixed widths, directly conflicting with the custom CSS grid.

#### Bug #5 — Product Grid Produces Wrong Column Count When Sidebar Missing
Without the filter sidebar present (Bug #1), the main content area fills the full container width. `auto-fit` with `minmax(270px)` then creates 4 columns instead of 3.

#### Bug #6 — `add_theme_support('woocommerce')` Missing
`functions.php` has no `after_setup_theme` hook declaring WooCommerce theme support. Without this, WooCommerce may not apply product gallery features (zoom, lightbox, slider), and some WooCommerce hooks may not fire correctly.

#### Bug #7 — `boston_flowers_shop_section_links()` Undefined
Called in `page.php` when cart is empty. Silently produces no output (guarded by `function_exists()`), but the empty-cart helper section shows broken layout: a heading with no follow-up links.

#### Bug #8 — Mobile Scroll Blocked on iOS Safari
`overflow: hidden` on `.bf-wc` combined with `body { overflow-x: hidden }` can prevent momentum scrolling on iOS Safari. The `-webkit-overflow-scrolling` property is not set, and `overflow: hidden` on a non-body ancestor can clip viewport behavior on older iOS.

#### Bug #9 — Nav Account Icon Unstyled
`header.php` outputs `.nav-account` (account icon link in nav-r) — neither `main.css`, `header-footer.css` (not audited but referenced), nor `woocommerce.css` defines styles for `.nav-account`. The account SVG icon appears unstyled.

#### Bug #10 — Single Product Woo Tabs Hidden, Description Lost
`woocommerce.css` sets `.bf-wc .woocommerce-tabs { display: none; }`. This hides WooCommerce's full description, additional information, and reviews tabs entirely. The short description is shown, but the full `[product description]` content that goes into the tabs is invisible. Product SEO suffers. If a florist adds detailed care instructions in the "Additional Information" tab, customers never see it.

#### Minor — Inconsistent WC Nav Link Trailing Slashes
`header.php` links: `/shop/roses` (no slash), but `woocommerce.php` and `page.php` generate: `home_url('/shop/roses/')` (with slash). Inconsistency may cause 301 redirects.

---

## PHASE 2 — REDESIGN PROPOSAL

### Guiding Principle
The foundation is solid. The design system, CSS tokens, typography, hero sections, and filter UI are all production-quality. What's broken is the **wiring** — templates pointing to wrong content, missing PHP functions, one CSS property destroying sticky positioning, and no WooCommerce theme support. The majority of the work is fixing bugs and hardening the existing design, not rebuilding from scratch.

---

### Files to Create

| File | Purpose |
|---|---|
| `woocommerce/content-product.php` | Custom product card template — replaces WooCommerce default, matches `.prod-card` design language from `main.css` (full-bleed image, serif title, rose price, "Order" CTA) |
| `woocommerce/archive-product.php` | Thin override to wrap the product loop in the correct grid container class (`bf-wc-catalog-main`), so WC template hierarchy works without relying on the `woocommerce.php` wrapper for grid context |

---

### Files to Modify

#### 1. `functions.php` (~+60 lines)
- Add `after_setup_theme` with `add_theme_support('woocommerce')`, `add_theme_support('wc-product-gallery-zoom')`, `add_theme_support('wc-product-gallery-lightbox')`, `add_theme_support('wc-product-gallery-slider')`
- Add `add_filter('woocommerce_enqueue_styles', '__return_empty_array')` — remove all default WC CSS
- Add `add_filter('loop_shop_columns', fn() => 3)` — enforce 3-column grid
- Add `add_filter('woocommerce_product_thumbnails_columns', fn() => 4)` — 4-thumbnail gallery strip on single product
- Add `boston_flowers_shop_filters()` function — extracted from `page.php`, made reusable
- Add `boston_flowers_shop_section_links()` function — hardcoded category link list for empty cart state
- Add `add_filter('woocommerce_breadcrumb_defaults', ...)` — match breadcrumb delimiter to `.bf-wc-breadcrumb-sep` style

#### 2. `woocommerce.php` (~10 lines changed)
- Replace the `boston_flowers_shop_filters()` call with a direct `boston_flowers_shop_filters()` call that now works (after fixing functions.php)
- No structural changes needed — the hero/nav/content wrapper is correct

#### 3. `assets/css/woocommerce.css` (~50 lines changed, ~20 added)

**Fix 1 — Remove `overflow: hidden`, add `overflow-x: clip`:**
```css
/* Before */
.bf-wc { overflow: hidden; }

/* After */
.bf-wc { overflow-x: clip; }
```
`overflow-x: clip` hides horizontal overflow without creating a scroll container (unlike `overflow: hidden`), so `position: sticky` works again. Supported in all modern browsers including iOS Safari 16+.

**Fix 2 — Explicit 3-column product grid:**
```css
/* Before */
.bf-wc ul.products {
  grid-template-columns: repeat(auto-fit, minmax(min(100%,270px), 1fr));
}

/* After */
.bf-wc ul.products {
  grid-template-columns: repeat(3, minmax(0, 1fr));
}
@media (max-width: 900px) {
  .bf-wc ul.products { grid-template-columns: repeat(2, minmax(0, 1fr)); }
}
@media (max-width: 560px) {
  .bf-wc ul.products { grid-template-columns: minmax(0, 1fr); }
}
```

**Fix 3 — Unify rose token:**
```css
/* In :root scope at top of woocommerce.css */
--bf-rose: var(--rose, #C89B93);
--bf-rose-strong: #D4A89F;
```

**Fix 4 — Align container max-width:**
```css
.bf-wc-container { max-width: 1280px; } /* was 1200px */
```

**Fix 5 — Remove `body.woocommerce-page { overflow-x: hidden }` (redundant, causes iOS issues)**

**Fix 6 — Hide `.woocommerce-tabs` more gracefully:** Instead of `display: none`, move tab content inline by hooking into WooCommerce (see functions.php) and displaying the description section via `.bf-product-description`. Add fallback CSS that makes tab panels readable if they're still rendered.

**New — Single product gallery:**
Current gallery on single product is unstyled default WooCommerce thumbnails. Add thumbnail strip styles matching the dark card aesthetic.

**New — Cart/Checkout block support:**
WooCommerce 8.x+ ships block-based cart and checkout as default. Add CSS for `.wc-block-cart`, `.wc-block-checkout` alongside the classic shortcode selectors already present.

#### 4. `page.php` (~5 lines changed)
- Change the product output section from `the_content()` / `while(have_posts())` to `woocommerce_content()` when `$bf_is_shop_catalog` is true
- This makes `/shop/roses/` etc. actually display a filtered WooCommerce product loop

**Note on routing:** This only works if the WordPress pages at `/shop/roses/` are set up to use WooCommerce filtering. If these pages are plain WordPress pages (not WooCommerce category archives), the best fix is to change the nav links in `header.php` to point to the actual WooCommerce category URLs (`/product-category/roses/`) or to set up URL rewrites. The plan should include a routing audit as a prerequisite step.

#### 5. `header.php` (~6 lines changed)
- Normalize trailing slashes on shop nav links (`/shop/roses` → `/shop/roses/`)
- Add `.nav-account` CSS class styles (can be added inline in `main.css` or `header-footer.css`)

---

### WooCommerce Hooks to Use

| Hook | Purpose |
|---|---|
| `after_setup_theme` | Declare `add_theme_support('woocommerce')` and gallery features |
| `woocommerce_enqueue_styles` filter → `'__return_empty_array'` | Remove all default WooCommerce CSS |
| `loop_shop_columns` filter → `3` | Force 3 products per row |
| `woocommerce_product_thumbnails_columns` filter → `4` | 4 thumbnail columns on single product |
| `woocommerce_breadcrumb_defaults` filter | Customize breadcrumb wrapper/delimiter to match theme style |
| `woocommerce_before_shop_loop` action | Insert result count + sort dropdown above grid in theme style |
| `woocommerce_after_shop_loop_item` action | Remove default "Add to cart" button placement if using custom product card template |
| `woocommerce_single_product_summary` action hooks | Reorder: title → price → short description → form → custom care block |
| `wc_get_template_part` filter (optional) | Redirect `content-product` to theme override |

---

### How to Handle Filters on Mobile

The existing approach (JS drawer with `.bf-filter-sidebar` sliding from left, backdrop overlay, close button, Escape key) is correct and well-implemented in `woocommerce.js`. The only change needed is:

1. **Fix `overflow-x: clip`** on `.bf-wc` (see CSS Fix 1 above) — the drawer currently works in JS but may be visually clipped
2. **Move the backdrop element** in `woocommerce.js` to be a child of `<body>` rather than inserted before the filter panel — prevents any ancestor overflow clipping
3. **Accordion behavior** — already implemented (only first group open by default on mobile, accordion-style open/close)
4. **Filter count badge** on the toggle button — already implemented in the CSS (`.bf-filter-mobile-toggle strong`)
5. **No AJAX** — current page-reload-on-filter-click behavior is acceptable for Phase 1. AJAX filtering (using WooCommerce's `wc-ajax` endpoints) is a Phase 2 enhancement

---

### What to Keep vs Rebuild from Scratch

| Component | Decision | Reason |
|---|---|---|
| `woocommerce.php` wrapper structure | **Keep** | Hero, nav pills, breadcrumbs, content section — all correct |
| `.bf-wc` CSS scoping system | **Keep** | Clean, avoids leaking into site-wide styles |
| `woocommerce.js` filter drawer | **Keep** | Well-implemented, accessibility-aware |
| Design tokens (colors, fonts, spacing) | **Keep** | Correct and matches site system |
| Filter sidebar HTML structure | **Keep, extract to function** | Already in `page.php`, just needs to be a reusable function |
| Product card styles (`.bf-wc ul.products li.product`) | **Rebuild via template override** | Default WooCommerce card HTML doesn't allow full-bleed image above title; custom `content-product.php` needed |
| Default WooCommerce CSS | **Remove entirely** | Conflicts with custom design; `__return_empty_array` filter |
| Product loop grid (`auto-fit`) | **Rebuild to `repeat(3,1fr)`** | Explicit columns are more predictable |
| `overflow: hidden` on `.bf-wc` | **Replace with `overflow-x: clip`** | Critical sticky fix |
| `.woocommerce-tabs` (hidden) | **Rebuild as inline section** | Hiding tabs loses important product content; render as `.bf-product-description` |
| Cart/checkout styles | **Keep** | Already well-styled with dark card aesthetic |
| Account page styles | **Keep** | Well-styled with navigation + content grid |
| `page.php` shop sections | **Fix routing** | Change `the_content()` → `woocommerce_content()` or reroute to WC archives |

---

### Estimated Number of Changes

| File | Change Type | ~Lines |
|---|---|---|
| `functions.php` | Add hooks + 2 new functions | +65 |
| `woocommerce.php` | Fix filter call, minor cleanup | ±10 |
| `assets/css/woocommerce.css` | Fix overflow, grid, tokens, block support | ±70 |
| `page.php` | Fix product output routing | ±8 |
| `header.php` | Fix link trailing slashes | ±6 |
| `woocommerce/content-product.php` | New file — custom product card | +60 |
| `woocommerce/archive-product.php` | New file — thin archive wrapper | +30 |
| **Total** | | **~250 lines** |

**Risk:** Low. The design system is complete. All changes are structural fixes and template wiring. No design redesign needed — the CSS is already Awwwards-quality. The failing pieces are PHP functions that don't exist and one CSS property (`overflow: hidden`) that breaks sticky positioning.

---

### Implementation Order (Priority)

1. **functions.php** — Add `add_theme_support`, remove default WC CSS, add missing functions (unblocks everything else)
2. **woocommerce.css** — Fix `overflow-x: clip`, fix 3-column grid (fixes the two most visible visual bugs)
3. **woocommerce/content-product.php** — Custom product card (biggest visual upgrade)
4. **page.php** — Fix product routing on category pages
5. **woocommerce.php** — Minor cleanup once functions exist
6. **header.php** — Polish (trailing slashes, account icon)
7. **woocommerce/archive-product.php** — Optional, only if template hierarchy conflicts arise

---

*This document is the output of Phase 1 audit only. No code has been modified.*
