<?php
// Site-wide notice bar. Remove the include in header.php once the notice is no longer relevant.
// Point $noticeUrl at the PHP 8.2 end-of-life post once it's published.
$noticeUrl = url('tools/eol-tracker/');
?>
<?php if (! $page->is('/tools/eol-tracker/')) : ?>
<div class="bg-zinc-800 text-zinc-100 text-sm px-6 py-2.5 text-center">
    <a href="<?php echo $noticeUrl; ?>" @click="fathom.trackEvent('php 8.2 eol notice clicked')" class="inline-flex items-center gap-2 hover:text-white">
        <span class="inline-block w-2 h-2 rounded-full bg-amber-400 shrink-0" aria-hidden="true"></span>
        <span><strong class="font-semibold">PHP 8.2 support ends 31 December.</strong> <span class="underline underline-offset-4 decoration-zinc-500">Check if your site is affected</span> →</span>
    </a>
</div>
<?php endif; ?>
