# MyTheme (custom WordPress theme)

This theme is a **classic PHP theme** built for the Takahashi site.

## Pages in this project

You said your site has these pages:

- Top
- About
- Support
- Used Product
- Contact
- News
- News detail

This theme already includes templates for that structure.

## Quick setup (WordPress admin)

1. **Activate the theme**
   - Appearance → Themes → activate **MyTheme**
2. **Create pages**
   - Pages → Add New
   - Create pages with these **slugs**:
     - `about`
     - `support`
     - `used-product` (or `used_product`)
     - `contact`
     - `news` (Page title can be “News”)
3. **Configure News**
   - Settings → Reading
   - Set:
     - “Your homepage displays” → **A static page**
     - “Homepage” → your Top page (or leave it and use `front-page.php`)
     - “Posts page” → the **News** page
4. **Create menus**
   - Appearance → Menus
   - Create a menu and assign it to:
     - **Primary Menu**
     - (Optional) **Footer Menu**

## Which file controls which page?

Edit these files to change layout/design:

- **Top page**: `front-page.php`
- **About / Support / Used Product / Contact pages (default layout)**: `page.php`
- **About page (slug: about)**: `page-about.php` (currently uses `page.php`)
- **Support page (slug: support)**: `page-support.php` (currently uses `page.php`)
- **Used Product page (slug: used-product)**: `page-used-product.php` (currently uses `page.php`)
- **Used Product page (slug: used_product)**: `page-used_product.php` (currently uses `page.php`)
- **News list** (Posts page): `home.php`
- **News detail** (single post): `single.php`
- **Header / navigation**: `header.php`
- **Footer**: `footer.php`
- **Styles**: `assets/css/main.css`
- **Page-specific styles**: `assets/css/pages/*.css`
- **Mobile menu JS**: `assets/js/main.js`

## How to update content

### Static pages (About/Support/Used Product/Contact)

Edit the page content in WordPress:

- Pages → (select the page) → edit content

The theme outputs the content via `the_content()` in `page.php`.

### News

News is using **WordPress posts**:

- Posts → Add New
- Featured image (optional) appears at the top of the news detail page (`single.php`).

### Top page sections

The Top page is currently **hardcoded sections** in `front-page.php` (hero, cards, banner, etc).

To change:

- Text/buttons/sections: edit `front-page.php`
- Base styles: edit `assets/css/main.css`
- Page-only styles (optional):
  - Top: `assets/css/pages/front-page.css`
  - Default pages: `assets/css/pages/page.css`
  - About: `assets/css/pages/about.css`
  - Support: `assets/css/pages/support.css`
  - Used Product: `assets/css/pages/used-product.css`
  - Contact: `assets/css/pages/contact.css`
  - News: `assets/css/pages/news.css`

## TailwindCSS CDN

Tailwind is loaded via CDN in `functions.php`.

- If you want Tailwind to also apply its base reset, enable preflight by editing:
  - `functions.php` → `tailwind.config = { corePlugins: { preflight: false } };`
  - Change `false` to `true`

## Images

Placeholder images are in:

- `assets/img/hero-placeholder.svg`
- `assets/img/card-1.svg`
- `assets/img/card-2.svg`
- `assets/img/card-3.svg`

Replace them with real images (you can keep the same filenames), or update the image paths in `front-page.php`.

## Notes / common changes

- **Menu items**: best practice is to manage from WP admin (Appearance → Menus).
- **Contact form**: usually handled by a plugin (e.g. Contact Form 7). Put the shortcode in the Contact page content.

