---
title: "What to do when your web developer disappears"
description: "When your web developer disappears, here's how to regain access, take a safe backup, and avoid making an expensive mistake."
date: "2026-04-27"
tags: ["Maintenance", "Legacy", "Hosting"]
image: "images/blog/what-to-do-when-your-developer-disappears.jpg"
---
When a web developer disappears, it puts you in a difficult position, especially when something stops working or you need to make changes. It creates uncertainty, and the pressure to act quickly often leads to expensive or unnecessary decisions. The priority is not to rebuild or replace everything, but to regain control, understand the system, and stabilise it properly.

## Take back control

The first step is to make sure you have full ownership of your infrastructure. This includes access to everything your website depends on:

- Hosting account
- Domain registrar
- Server or control panel
- Database
- Any third-party services such as email, payments, or APIs

If any of these are still tied to your former developer, start recovering access immediately through password resets or by contacting providers. Without full access, you are effectively locked out of your own system.

Once access is secured, take a complete backup before making any changes. This gives you a safety net and prevents further damage during investigation.

Make sure you have a backup of:

- The application codebase
- The database
- Environment or server configuration (if available)

Most hosting control panels have a built-in backup tool — no server access needed. If you do have SSH access, a database dump and a copy of the application files will cover you.

## Getting help

With a backup in place, the next step is to understand what is actually wrong. Many systems appear broken when the issue is relatively minor. Websites often fail due to environmental changes rather than fundamental problems in the code.

At this stage, what you need is a clear diagnosis, not assumptions. Without understanding the root cause, any fix is guesswork and can easily make things worse. If your site is actively down, the [emergency PHP checklist](/blog/emergency-php-checklist/) covers the most common causes.

If you're not sure what's actually wrong, a structured review can save days of guesswork. PHPFixer specialises in quickly assessing unfamiliar PHP systems and identifying the real cause of issues.

A proper assessment should clarify:

- What the system does and how it behaves
- Which technologies and frameworks it relies on
- What external services it depends on
- Where the risks and unstable areas are

## Avoid cowboys

One of the biggest mistakes in this situation is bringing in someone to apply quick fixes without understanding the system as a whole. While this may resolve the immediate issue, it often introduces new problems that are harder to detect.

Typical risks include:

- Fixing symptoms instead of root causes
- Introducing new bugs in unrelated areas
- Creating inconsistent or fragile code
- Making future maintenance more difficult

What you need instead is a controlled approach where changes are made carefully, with a clear understanding of how the system behaves.

Once the system is stabilised, you can make informed decisions about what to do next. In many cases, the existing system can continue to run reliably with the right maintenance and gradual improvements. A full rebuild is only necessary when the system can no longer support the business or becomes too costly to maintain.

Most businesses in this situation are not dealing with a failed system, but with a lack of visibility and control. The goal is not just to fix what is broken, but to ensure the system is understandable, maintainable, and no longer dependent on a single developer.

<div class="blog-cta">
<p class="blog-cta-heading">Need help getting your system back under control?</p>
<p>If your developer has disappeared and you're left with a system you don't fully understand, the priority is to stabilise it quickly and safely.</p>
<p>PHPFixer can help you take control of your codebase and infrastructure and keep your site running reliably going forward. No more ghosting!</p>
<a href="#contact" @click.prevent="showContact = true; fathom.trackEvent('blog cta clicked')" class="blog-cta-button">Book a quick call and get your system assessed</a>
</div>
