# MyTheme – WordPress Theme Setup Guide

A custom WordPress theme for the Takahashi site, built with **Tailwind CSS v4**, **Tailwind CLI (no CDN)**, and **PHP templates**.

---

## Prerequisites

- **Node.js** (v16+) and **npm** (v9+) or **pnpm**
- **WordPress 5.9+** installed locally or on a server
- **XAMPP** or similar local WordPress environment (Windows example: `C:/xampp/htdocs/takahashi/wp-content/themes/mytheme/`)

---

## Project Setup

### 1. Install Dependencies

```bash
cd /path/to/mytheme
npm install
# or
pnpm install
```

### 2. Development Workflow

**Start Tailwind in watch mode:**
```bash
npm run dev
# Monitors changes to .php, .js, .html files and rebuilds CSS in real-time
```

**Build for production:**
```bash
npm run build
# Minifies output to assets/css/style.css
```

### 3. Activate Theme in WordPress

1. Go to **Appearance → Themes** in WordPress admin
2. Click **Activate** on **MyTheme**
3. Configure theme settings at **Appearance → Customize**

---

## CSS/Styling Architecture

### Build Process

```
input.css (source)
  ├── @import "./pages/front-page.css"    (page-specific styles)
  ├── @import "./pages/about.css"
  ├── @import "./pages/*.css"             (all page files)
  ├── @import "./main.css"                (custom theme styles)
  └── @import "tailwindcss"               (Tailwind utilities last for priority)
         ↓
   [Tailwind CLI processes]
         ↓
  style.css (compiled, minified)
         ↓
   functions.php enqueues it in WordPress
```

### File Structure

```
assets/css/
├── input.css              (Tailwind source entry point)
├── style.css              (Compiled output, minified)
├── main.css               (Custom theme variables & reusable styles)
└── pages/
    ├── front-page.css     (Top page styles)
    ├── about.css
    ├── contact.css
    ├── support.css
    ├── used-product.css
    └── news.css
```

### CSS Priority (Cascade)

1. **Page-specific CSS** (lowest priority)
2. Custom theme styles (`main.css`)
3. **Tailwind utilities** (highest priority) ← Tailwind classes override custom CSS

Use Tailwind utility classes to override page-specific styles:
```html
<!-- Tailwind utility overrides page CSS -->
<div class="top-hero text-white">...</div>
```

---

## Template Structure

### Page Templates

| Page | Template | Slug |
|------|----------|------|
| **Top/Home** | `front-page.php` | (WordPress reads as homepage) |
| **About** | `page-about.php` | `about` |
| **Support** | `page-support.php` | `support` |
| **Used Product** | `page-used-product.php` or `page-used_product.php` | `used-product` or `used_product` |
| **Contact** | `page-contact.php` | `contact` |
| **News** (Archive) | `home.php` or `index.php` | (set in Reading settings) |
| **News Detail** (Single) | `single.php` | (post slug) |
| **Generic Pages** | `page.php` | (fallback for any page) |

### Reusable Components

- `header.php` – Site header (logo, nav, CTA buttons)
- `footer.php` – Site footer (copyright, menus)
- `template-parts/` – Reusable partial templates

---

## WordPress Configuration

### 1. Create Pages

Go to **Pages → Add New** and create these pages with exact slugs:

- `about` (About)
- `support` (Support)
- `used-product` or `used_product` (Used Product)
- `contact` (Contact)
- `news` (News Archive)

### 2. Configure Reading Settings

**Settings → Reading:**
- "Your homepage displays" → **A static page**
- "Homepage" → Select your Top/Home page
- "Posts page" → Select **News** page

### 3. Set Up Menus

**Appearance → Menus:**
1. Create a menu named "Primary Menu"
2. Add pages/links as needed
3. Assign to **Primary Menu** location
4. (Optional) Create "Footer Menu" and assign to **Footer Menu** location

---

## Development Workflow

### Edit Styles

**Option A: Tailwind utility classes** (write in PHP templates)
```html
<!-- Use Tailwind utilities directly -->
<div class="text-white bg-blue-600 p-4 rounded-lg hover:bg-blue-700">
  Content here
</div>
```

**Option B: Custom CSS** (write in `main.css` or page-specific files)
```css
/* main.css */
:root {
  --mytheme-accent: #6eba38;
}

.custom-component {
  color: var(--mytheme-accent);
}
```

### Edit PHP Templates

1. Modify `front-page.php`, `page-*.php`, `single.php`, etc.
2. Use `<?php wp_head(); ?>` and `<?php wp_body_open(); ?>` in header/body tags
3. Access theme functions from `functions.php`

### Watch for Changes

With `npm run dev` running, CSS rebuilds automatically when you:
- Edit `.php` files
- Edit `.js` files
- Edit `.css` files in `assets/css/`

---

## Build & Deployment

### Local Testing
```bash
npm run dev
# Visit http://localhost/takahashi (or your WP domain)
```

### Production Build
```bash
npm run build
# Generates minified assets/css/style.css
# Commit and deploy
```

---

## Tailwind Configuration

**`tailwind.config.js`**
```javascript
export default {
  content: [
    "./**/*.php",
    "./**/*.js",
    "./**/*.html"
  ],
  theme: {
    extend: {
      // Add custom theme extensions here
    },
  },
  plugins: [],
}
```

Content paths tell Tailwind which files to scan for utility classes.

---

## Useful Functions from `functions.php`

```php
mytheme_setup()              // Register theme features
mytheme_enqueue_assets()     // Enqueue CSS/JS in WordPress
mytheme_top_asset($base)     // Load images from assets/img/top/
mytheme_widgets_init()       // Register widget areas
```

---

## Troubleshooting

| Issue | Solution |
|-------|----------|
| CSS not updating | Run `npm run build` → Clear browser cache (Ctrl+Shift+Delete) |
| Tailwind classes not showing | Check `input.css` imports; ensure `npm run dev` is running |
| Images not loading | Check `assets/img/` folder exists; use `get_template_directory_uri()` for paths |
| Menu not showing | Create menu in **Appearance → Menus** and assign to location |
| Homepage not showing | Go to **Settings → Reading** and select static homepage |

---

## Resources

- [Tailwind CSS Docs](https://tailwindcss.com/docs)
- [Tailwind CLI](https://tailwindcss.com/docs/installation)
- [WordPress Theme Development](https://developer.wordpress.org/themes/)
- [WordPress Template Hierarchy](https://developer.wordpress.org/themes/basics/template-hierarchy/)
