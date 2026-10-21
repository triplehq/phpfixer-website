<?php
// Site-wide notice bar. Remove the include in header.php once the notice is no longer relevant.
$noticeUrl = url('blog/critical-php-vulnerabilities-october-2026');
?>
<?php if (!str_contains($page->url, 'critical-php-vulnerabilities-october-2026')) : ?>
<div class="bg-zinc-800 text-zinc-100 text-sm px-6 py-2.5 text-center">
    <a href="<?php echo $noticeUrl; ?>" @click="fathom.trackEvent('security notice clicked')" class="inline-flex items-center gap-2 hover:text-white">
        <span class="inline-block w-2 h-2 rounded-full bg-amber-400 shrink-0" aria-hidden="true"></span>
        <span><strong class="font-semibold">Critical PHP security release, 21 October.</strong> <span class="underline underline-offset-4 decoration-zinc-500">Is your site affected? Here's what to do.</span></span>
    </a>
</div>
<?php endif; ?>
