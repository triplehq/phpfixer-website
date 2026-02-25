# PHPFixer Project Guide

## Project Overview

Static site built with **Phanstatic** (PHP-based static site generator) + **Vite** for asset compilation.

## Structure

```
content/
├── pages/              # PHP templates (source files)
│   ├── _partials/      # header.php, footer.php (shared components)
│   ├── index.php       # Homepage
│   └── *.php           # Other pages
├── assets/             # Static assets (images, etc.)
└── config.php          # Phanstatic config

src/
├── main.js             # JS entry point (Alpine.js initialization)
└── style.css           # CSS entry point (TailwindCSS + custom styles)

dist/                   # Generated output (DO NOT EDIT)
└── assets/
    ├── css/main.css    # Compiled CSS
    └── js/main.js      # Compiled JS
```

## Build Process

**CRITICAL:** Always run builds in this order:

1. `php vendor/bin/phanstatic build` (clears dist/ and generates HTML from PHP templates)
2. `npm run build` (compiles assets into dist/assets/)

Or use combined: `npm run build:all`

**Why this order?** Phanstatic cleans the entire `dist/` directory, so Vite assets must be built after.

### Development Server

`npm run dev` starts Vite dev server on `http://localhost:5173` with HMR. Note: Since this is a static site, you'll need to update asset URLs in PHP templates to point to the dev server during development (not commonly used).

## Technologies

- **Phanstatic**: Converts `content/pages/*.php` to `dist/**/*.html`
- **Vite**: Bundles Alpine.js + TailwindCSS (no CDN)
- **Alpine.js**: Loaded via `src/main.js`, available globally as `window.Alpine`
- **TailwindCSS v4**: Scans `content/**/*.php` for classes
- **Fonts**: Bunny Fonts CDN (Archivo, Inter)
- **Analytics**: Fathom Analytics

## PHP Template Helpers

Available in all templates:
- `asset('path')` → URL to asset (e.g., `asset('images/logo.png')`)
- `url('path')` → URL to page (e.g., `url('/services')`)
- `$page->is('/path/')` → Check current page

## Asset References

In PHP templates, always use helpers:
```php
<link rel="stylesheet" href="<?php echo asset('css/main.css'); ?>">
<script type="module" src="<?php echo asset('js/main.js'); ?>"></script>
<img src="<?php echo asset('images/logo.png'); ?>">
```

## Custom Styles

Add to `src/style.css` (NOT inline in templates):
```css
@import "tailwindcss";

/* Custom styles here */
```

## Alpine.js

Available globally after `src/main.js` loads. Use directives in templates:
```html
<div x-data="{ open: false }">...</div>
<button @click="open = true">...</button>
```

## Development Workflow

1. Edit PHP templates in `content/pages/`
2. Edit styles in `src/style.css`
3. Edit JS in `src/main.js`
4. Run `npm run build:all` to regenerate
5. Test from `dist/` directory

## Common Tasks

**Add new page:**
1. Create `content/pages/newpage.php`
2. Run `npm run build:all`
3. Output: `dist/newpage/index.html`

**Modify shared header/footer:**
1. Edit `content/pages/_partials/header.php` or `footer.php`
2. Run `npm run build:all` (affects all pages)

**Add TailwindCSS utility:**
- Just use it in templates, TailwindCSS auto-detects from `content/**/*.php`

**Add new Alpine.js component:**
- Add initialization logic to `src/main.js`

## Important Notes

- IDE warnings about `x-data`, `@click` etc. are expected (Alpine.js directives)
- `#contact` anchor warning is expected (modal on same page)
- The site uses PHP for templating but outputs static HTML
- No PHP runtime needed for production (static files only)
