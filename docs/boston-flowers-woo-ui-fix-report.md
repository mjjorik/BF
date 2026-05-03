# Boston Flowers — WooCommerce UI Fix Report

**Date:** 2026-05-03  
**Branch:** `claude/audit-woocommerce-shop-YzEg1`  
**Files changed:** `functions.php`, `assets/css/woocommerce.css`

---

## Summary

Six UI inconsistencies identified and fixed in the Boston Flowers WooCommerce integration. No new CSS files created, no inline styles added, no homepage or product data changed.

---

## P1 — Hero height and nav transparency

**Root cause:** The `.bf-wc-hero` block had uniform large padding (`clamp(64px,8vw,104px)`) for every WooCommerce page type, making cart/checkout/account pages feel overly decorative. The site nav (`nav` element in `main.css`) starts fully transparent and only gains a dark background when the JS scroll handler fires — which never happens at page load on short WC pages.

**Fix (`assets/css/woocommerce.css`):**
- `body.woocommerce-page nav` — always applies the dark scrolled state (same `background`, `backdrop-filter`, `box-shadow` as `nav.scrolled`).
- `.bf-wc-cart-page .bf-wc-hero`, `.bf-wc-checkout-page .bf-wc-hero`, `.bf-wc-account-page .bf-wc-hero`, `.bf-wc-order-received-page .bf-wc-hero` — reduced padding to `clamp(36px,5vw,56px) / clamp(24px,3vw,36px)`.
- Suppressed the `::before` "BF" watermark on those same page classes (decorative, not appropriate on transactional pages).
- Reduced `h1` font-size to `clamp(32px,4.5vw,52px)` on transactional pages.

**QA:** Verify nav background is dark immediately on page load for cart, checkout, account, single product, and order-received URLs. Confirm shop/category pages are also dark (they already had content that triggers scroll quickly).

---

## P2 — Breadcrumb hierarchy missing "Shop" parent

**Root cause:** WooCommerce's default breadcrumb only inserts the direct taxonomy parents. For single products (`Home / Product Name`) and transactional pages (`Home / Cart`), there was no "Shop" link in the trail.

**Fix (`functions.php`):**
- Added `add_filter('woocommerce_get_breadcrumb', 'boston_flowers_fix_breadcrumbs', 10, 2)`.
- The filter inserts a "Shop" crumb (linked to the WC shop page) after "Home" for all non-shop WooCommerce pages. It skips injection if "Shop" is already present.
- Expected output: `Home / Shop / Product Name`, `Home / Shop / Cart`, `Home / Shop / Checkout`, `Home / Shop / My Account`, `Home / Shop / Roses / Product Name`.

Also added:
- `.bf-wc-product-breadcrumbs .woocommerce-breadcrumb` flex layout (was unstyled — the breadcrumb wrapper inside the slim product breadcrumb bar lacked styles).

**QA:** Check breadcrumbs on single product, cart, checkout, account, order-received, and category pages.

---

## P3 — Foreign button colors (purple/blue from WordPress block editor)

**Root cause:** WordPress block editor injects `--wp--preset--color--primary` (typically a blue/purple) via `theme.json` or inline block styles. WooCommerce block buttons (`.wc-block-components-button`, `.wp-element-button`) inherit this variable. Additionally, `input[name="update_cart"]`, `input[name="apply_coupon"]`, and `.checkout-button` were not included in the existing button selector list.

**Fix (`assets/css/woocommerce.css`):**
- Set `--wp--preset--color--primary: var(--bf-rose)` on `.bf-wc` to override any upstream block editor value.
- Extended button rules to explicitly cover `input[name="update_cart"]`, `input[name="apply_coupon"]`, `.checkout-button`, and `.wc-block-components-checkout-place-order-button`.
- Added disabled/`[disabled]` state with `opacity: .5` and `cursor: not-allowed`.

**QA:** Test "Proceed to Checkout", "Apply Coupon", "Update Cart", and "Place Order" buttons — all should render in `--bf-rose` (#cfa29a) with dark ink text.

---

## P4 — WooCommerce notice pseudo-icons colliding with text

**Root cause:** WooCommerce's default stylesheet uses an icon font (`WooCommerce` icon font) for `::before` pseudo-elements on `.woocommerce-info` and `.woocommerce-message`. Without that font loaded, the `content` glyph renders as a box character that overlaps the notice text. The theme's existing rule only recolored the pseudo-element without removing its content.

**Fix (`assets/css/woocommerce.css`):**
- Added `content: none !important; display: none !important` to all notice `::before` selectors.
- Applied `display: flex; align-items: center; gap: 14px` to `.woocommerce-info` and `.woocommerce-message` so inline action links sit cleanly beside the notice text.
- Set `float: none; flex-shrink: 0` on `.button` / `a.button` inside notices to prevent the float-right layout conflict.

**QA:** Trigger a "Product added to cart" notice and a coupon validation error. No box characters should appear; text and button should be horizontally aligned.

---

## P5 — Coupon / promo-code toggle UI missing CSS

**Root cause:** `assets/js/woocommerce.js` creates a `button.bf-cart-coupon-toggle` element ("Have a promo code?") and inserts it before the `.coupon` row, adding `.bf-cart-coupon` and `.is-open` classes. Zero CSS existed for any of these classes, so the toggle appeared as an unstyled floating element and the coupon row was always visible.

**Fix (`assets/css/woocommerce.css`):**
- `.bf-cart-coupon-toggle` — link-style button with rose underline, circular `+` indicator that rotates 45° when `aria-expanded="true"`.
- `.bf-wc .bf-cart-coupon { display: none !important }` — hides the coupon row by default (overrides the earlier `.bf-wc .coupon { display: flex }` rule).
- `.bf-wc .bf-cart-coupon.is-open { display: flex !important }` — restores flex layout when JS toggles the class.
- Mobile (`≤560px`): `display: grid` when open so the input and button stack vertically.

**QA:** Visit Cart page. Coupon row should be hidden on load. Clicking "Have a promo code?" should reveal it. Clicking again should hide it. `+` icon should rotate to `×` when open.

---

## P6 — Mobile product card cascade bug (431–560 px)

**Root cause:** The `.woocommerce ul.products li.product a img { aspect-ratio: 3/4 }` rule added in Session 2 (line 377) has the same CSS specificity (0,3,4) as the `@media (max-width: 560px)` rule at line 230 — but appears *later* in source order. CSS cascade gives later rules priority when specificity is equal, so the `3/4` portrait ratio wins at all viewport widths including 390 px mobile. The `≤430 px` block further down corrects the ratio at very small sizes, but the 431–560 px range still gets the tall `3/4` ratio.

**Fix (`assets/css/woocommerce.css`):**
- Appended a new `@media (max-width: 560px)` block at the very end of the file with `.woocommerce ul.products li.product a img { aspect-ratio: 4/3.55 }`. This comes after the problematic rule in source order and restores the compact ratio for the entire ≤560 px range.

**QA:** At 480 px and 520 px viewport widths, product card images should appear moderately portrait (≈4:3.55), not tall portrait (3:4).

---

## Remaining known issues (out of scope for this fix)

| Issue | Description |
|---|---|
| Sticky filter sidebar | `.bf-wc { overflow: hidden }` (line 29) breaks `position: sticky` on the desktop filter sidebar. Removing it risks overflow leakage from the radial gradient background. Needs separate investigation. |
| Block checkout breadcrumbs | The `woocommerce_get_breadcrumb` filter only applies to classic shortcode pages. Block-based checkout/cart pages render breadcrumbs differently; may need a separate block filter. |
| `page.php` filter duplication | The shop filter HTML in `page.php` is an inline duplicate of `boston_flowers_shop_filters()`. Both produce identical output. Refactoring `page.php` to call the shared function is safe but was left out of this task scope. |

---

## Deployment checklist

- [ ] Push branch `claude/audit-woocommerce-shop-YzEg1` and merge to `main`
- [ ] Clear any page/object caches (LiteSpeed, WP Rocket, Cloudflare)
- [ ] Hard-refresh on mobile (CMD+Shift+R / Ctrl+Shift+R) to bust CSS cache
- [ ] Test cart, checkout, single product, account, and shop/category pages across Chrome mobile and Safari iOS
- [ ] Confirm WooCommerce version compatibility (filter tested on WC 7+)
