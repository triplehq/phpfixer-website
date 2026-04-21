# Blog post review

Review the blog post at $ARGUMENTS against the PHPFixer blog guidelines below, then run through the pre-publish checklist and report any issues.

---

## Content guidelines

### Voice and tone
- PHPFixer is a service, not a personal brand. Use "PHPFixer" in service-level references. "I" is fine in the post body when speaking as the practitioner.
- Direct and practical. No filler, no hand-holding.
- Don't assume the reader is less technical — they may be a business owner or a developer. Write for both without patronising either.
- For steps that require server access, add a bridging line that contextualises the requirement without making non-technical readers feel excluded (e.g. "Most hosting control panels have a built-in log viewer — no server access needed. If you do have SSH access...").

### Structure
- Every post ends with the conversion bridge CTA using the `blog-cta` div structure — never a plain paragraph link.
- No author bio at the end. PHPFixer is the brand, not a personal blog.
- No date or author shown in the post header.

### Copy rules
- Fix grammar and accuracy errors only. Never rewrite the author's wording or copy choices.
- No exclamation points in headings.
- Sentence case everywhere — headings, title, tags display. Never title case.
- No em dashes inserted by AI — use the author's punctuation style.

### SEO rules
- Title: sentence case, target keyword near the front, aim for ~60 chars without the brand suffix.
- Meta description: include the primary keyword, ~130 chars, make it a hook not a summary.
- Primary keyword should appear in the first paragraph naturally.
- Every Pillar 1 post (emergency/bug fix) must link to at least one Pillar 3 post (when to hire) when those posts exist.
- Every Pillar 2 post (legacy/upgrades) must link contextually to Services or Pricing once.

### Internal linking
- After publishing, add contextual links from relevant existing pages (homepage, services, pricing) where the topic naturally fits.
- Add the post URL to `public/sitemap.xml`.

---

## Pre-publish checklist

Go through each item and report pass, fail, or not applicable.

### Frontmatter
- [ ] `title` is present and in sentence case
- [ ] `title` is ~60 chars or under (without brand suffix)
- [ ] `description` is present, ~130 chars, includes primary keyword
- [ ] `date` is set in `YYYY-MM-DD` format
- [ ] `tags` are set (2–4 tags, sentence case)

### Content
- [ ] Primary keyword appears in the first paragraph
- [ ] No author bio at the end
- [ ] No date or author shown in the post (check single.php renders correctly)
- [ ] All headings in sentence case
- [ ] Technical steps have bridging lines for readers without server access
- [ ] Grammar and accuracy reviewed — no broken sentences, wrong prepositions, subject-verb agreement errors
- [ ] Conversion bridge CTA at the end using `<div class="blog-cta">` with `<p class="blog-cta-heading">` (not `<h2>`)

### SEO
- [ ] `og:type` will render as `article` (automatic via single.php — verify if in doubt)
- [ ] Article schema present with `image`, `datePublished`, `dateModified` (automatic via single.php)
- [ ] No duplicate H1s
- [ ] Post URL added to `public/sitemap.xml`

### Internal links
- [ ] At least one internal link from an existing page to this post
- [ ] CTA link in the post points to `/pricing` or a relevant service page
- [ ] CTA button includes Fathom event: `onclick="fathom.trackEvent('blog cta clicked')"`

### Build
- [ ] `npm run build:all` runs without errors
- [ ] Post appears correctly on the blog listing page
- [ ] Post renders correctly at its URL