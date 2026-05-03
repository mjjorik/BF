# Boston Flowers Custom Theme Map

## Structure
- **Homepage:** `front-page.php` (Raw HTML integration)
- **Assets:** 
  - CSS: `assets/css/main.css` (Extracted from source)
  - JS: `assets/js/main.js`
  - Images: `assets/images/`
- **Templates:** `templates/` (Custom page layouts)

## Rules
1. **Source of Truth:** All layout changes must be made in the PHP files, not the WP Editor.
2. **Assets:** Use `get_stylesheet_directory_uri()` for all asset paths.
3. **No Builders:** Page builders are disabled to maintain clean code.
