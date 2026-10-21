---
title: "Two critical PHP vulnerabilities: what you need to do now"
description: "PHP has released 8.5.12, 8.4.27, 8.3.36 and 8.2.35 to fix two critical remote code execution flaws (CVE-2026-109618 and CVE-2026-109619, nicknamed php2shell). Who is at risk, what to do if your site runs PHP 8.1 or older, and how to protect it today."
date: "2026-10-21"
tags: ["Security", "Emergency", "Upgrades"]
image: "images/blog/critical-php-vulnerabilities-october-2026.jpg"
---

<blockquote><strong>Updated: 21 October 2026, 14:30 UTC.</strong> PHP has released the fixes and published the full details. This post now reflects the <a href="https://www.php.net/archive/2026.php#2026-10-21-5" target="_blank" rel="noopener">official security advisory</a>. Correction: an earlier version said no fix was expected for PHP 7.4, 8.0 and 8.1. The PHP team has since published source patches for those versions.</blockquote>

PHP has released emergency security updates for two critical vulnerabilities that can let an attacker run their own code on your server without logging in. The fixed versions are **PHP 8.5.12, 8.4.27, 8.3.36 and 8.2.35**, and the PHP team's advice is simple: "All PHP users are strongly encouraged to update immediately."

PHP powers most of the web, including every WordPress, Drupal, Magento and Craft CMS website, and web applications built with Laravel or Symfony, so if you own a website, there's a good chance this affects you. This post explains what's been confirmed, what to do today, and what your options are if your site runs an old version of PHP.

## What PHP has confirmed

These points come from the <a href="https://www.php.net/archive/2026.php#2026-10-21-5" target="_blank" rel="noopener">official PHP security advisory</a>:

- **Two critical flaws in PHP itself:** <strong>CVE-2026-109618</strong> and <strong>CVE-2026-109619</strong>, both rated 9.2 out of 10. They're in PHP, not in a plugin or a framework, so keeping WordPress, your theme or your plugins up to date doesn't protect you on its own.
- **Attackers don't need to log in.** Both flaws can allow remote code execution from an ordinary web request. That's the worst kind of web vulnerability: it can mean stolen customer data, a defaced site, malware served to your visitors, or your server being used to attack others.
- **Every common server setup is at risk.** PHP lists all installations that serve web requests, whatever the server setup (PHP-FPM, Apache with mod_php, php-cgi, FrankenPHP and LiteSpeed). It considers the risk highest for Apache with mod_php, where a demonstrated attack works before your website's own code even runs.
- **There's no complete workaround.** PHP has listed some temporary configuration changes that reduce the risk, but says that "updating is the only safe choice."

## How we got here

On 20 October, the PHP security team gave public advance notice of the release, which it rarely does. Details had leaked online before the fixes were ready: according to <a href="https://www.huntress.com/blog/php2shell-leaked-critical-php-vulnerabilities" target="_blank" rel="noopener">Huntress</a>, they first appeared in a Hacker News post on the morning of 20 October that was quickly removed, but screenshots spread on social media. The security firm <a href="https://watchtowr.com/intelligence/php-cve-2026-109618-faq/" target="_blank" rel="noopener">watchTowr</a> said it had reproduced one of the flaws, researchers nicknamed the pair "php2shell", and <a href="https://cert.europa.eu/publications/security-advisories/2026-018/" target="_blank" rel="noopener">CERT-EU</a>, the cybersecurity service for the EU institutions, issued an advisory telling organisations to prepare for immediate patching.

Before the release, neither Huntress nor watchTowr had seen the flaws being exploited in the wild. Now that the fixes and technical details are public, that might change quickly. The e-commerce security firm Sansec <a href="https://www.securityweek.com/php2shell-mass-exploitation-looms-for-leaked-critical-php-flaws/" target="_blank" rel="noopener">expects mass exploitation to start within minutes of the patch being released</a>, because attackers can study the fix to work out how the flaws work and then scan the internet for sites that haven't updated yet.

## What if your site runs PHP 8.1 or older

PHP only releases updates for versions that are still supported, which right now are **PHP 8.2, 8.3, 8.4 and 8.5**. Everything older has reached end of life: PHP 8.1 at the end of December 2025, PHP 8.0 in November 2023, and PHP 7.4 in November 2022.

Because these flaws are so serious, the PHP team made an exception this time and published minimal source patches for **PHP 7.4, 8.0 and 8.1**. These aren't ready-made releases. They're code changes for people who build PHP themselves, so whether your site actually gets the fix depends on your hosting provider or Linux distribution. Some of them maintain patched builds of older versions and might apply the fix for you, so ask them directly and get the answer in writing.

If your site runs **PHP 7.3 or older**, including PHP 5, there's no patch at all.

Even if your provider does patch an old version this time, it's a one-off. The next serious vulnerability might not get the same treatment, so a supported version is the only real long-term fix. For anything that can't be patched straight away, CERT-EU recommends isolating internet-facing applications from public networks until a fix can be applied. In practice, that might mean restricting access to a staging site or internal tool so it's only reachable from your office or over a VPN. For a public website it's a much harder call, which is why upgrading matters so much.

I covered the wider risk of running an outdated version in <a href="/blog/php-8-0-and-8-1-end-of-life/">PHP 8.0 and 8.1 are end of life</a>. Until now, that risk was mostly theoretical. With two critical vulnerabilities now public, it might become very real for many businesses over the coming weeks.

## What to do today

You don't need to be a developer to get started. Here's what I'd recommend, in this order:

1. **Find out which PHP version your site runs.** Most hosting control panels (cPanel, Plesk, Laravel Forge and similar) show it on the main dashboard or under a "PHP version" setting. On WordPress, go to **Tools → Site Health → Info → Server**. Write down the full version number, for example 8.3.36.
2. **Ask whoever manages your server to update.** If you're on managed or shared hosting, your provider usually updates PHP for you, so ask them when they're installing the fix. If you have your own server or a developer manages it, make sure someone updates it today. Linux distributions received the patches in advance, so updated packages should already be available for supported versions.
3. **Check every place PHP runs.** It's not only your main website. Staging sites, old microsites, internal tools and forgotten installs on the same server can all be entry points.
4. **Take a fresh backup** of your files and database before anything changes, and make sure it's stored somewhere other than the server itself.
5. **If you're on PHP 8.2 to 8.5,** make sure you end up on 8.5.12, 8.4.27, 8.3.36 or 8.2.35 (or a newer one). This is a routine minor update, and it's the single most important thing you can do.
6. **If you're on PHP 8.1 or older,** ask your host or developer whether a patched build is available for your version. Until it's patched or upgraded, ask them to apply the temporary measures from PHP's advisory, such as switching off PHP's upload progress feature and limiting how much data a single request can send. These reduce the risk, but PHP is clear that they don't make a server safe. Restrict access to anything that doesn't need to be public, and if a site can't be patched or upgraded quickly, consider taking it offline until it can.
7. **Watch for warning signs** over the next few weeks: unfamiliar admin users, new files you didn't upload, unexpected redirects, a sudden spike in server load, or your hosting provider flagging malware. If anything looks wrong, my <a href="/blog/emergency-php-checklist/">emergency PHP checklist</a> explains what to do first without making things worse.

One more thing if you're on **PHP 8.2**: it's covered by today's fix, but it reaches end of life on 31 December 2026 and won't get security fixes after that. If you're planning an upgrade, aim for PHP 8.4 or 8.5.

## Why "just switch the PHP version" isn't a quick fix for old sites

If you're on PHP 7, it's tempting to go into your hosting panel and select PHP 8.5. Please don't do that on a live site without testing first. Sites written for PHP 7 often rely on behaviour that has changed or been removed in PHP 8, and a plugin or library that hasn't been updated in years might stop working entirely. The usual result is a blank page or a broken checkout, which is the last thing you need while trying to deal with a security problem.

A safe upgrade means checking the code and its dependencies against the new version, fixing what's incompatible, testing on a copy of the site, and only then switching over the live site with a way to roll back. It's routine work when it's done in the right order, and it's the only lasting fix for a site that's stuck on an unsupported version.

<div class="blog-cta">
<p class="blog-cta-heading">Not sure if your site is exposed?</p>
<p>These are two of the most serious PHP vulnerabilities in years, and websites and web applications on old versions depend on someone else patching them, if a patch exists at all. PHPFixer can help you with both sides of the problem, starting today:</p>
<p><strong>1. Upgrade from PHP 7 (or 8.0 and 8.1) to PHP 8.5.</strong> I'll check your code and dependencies, fix everything that's incompatible, test the upgrade on a copy of your site, and move you to PHP 8.5, the newest supported version, with a fixed quote before any work starts.</p>
<p><strong>2. Check your servers and keep them patched.</strong> I can help you identify if your website is affected and check the PHP versions running on your server. Then I'll apply today's security update and any follow-up patches as they're released, and keep an eye out for signs of compromise.</p>
<p>Book a short call and I'll tell you where you stand, free of charge.</p>
<a href="https://cal.com/phpfixer/introduction?utm_source=phpfixer.com&utm_medium=cta&utm_campaign=intro-call&utm_content=blog-php-vulnerabilities-oct-2026" target="_blank" rel="noopener" @click="fathom.trackEvent('blog cta clicked')" class="blog-cta-button">Book a free security check</a>
</div>
