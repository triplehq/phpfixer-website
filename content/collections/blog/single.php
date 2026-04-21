<?php
$metaTitle = $page->title . ' | PHPFixer';
$metaDescription = $page->description ?? '';
$ogType = 'article';
include 'content/pages/_partials/header.php';
?>

    <article class="px-6 md:px-4 py-4">
        <div class="max-w-3xl mx-auto">

            <header class="mb-10">
                <div class="flex flex-wrap gap-2 mb-4">
                    <?php foreach ($page->tags as $tag) : ?>
                        <span class="text-xs font-medium px-2 py-1 bg-zinc-100 text-zinc-600 rounded"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold leading-tight tracking-tight text-zinc-700"><?php echo $page->title; ?></h1>
            </header>

            <div class="blog-content">
                <?php echo $page->content; ?>
            </div>

            <footer class="py-8">
                <a href="<?php echo url('blog'); ?>" class="text-blue-600 text-sm font-medium hover:underline">← Back to the blog</a>
            </footer>

        </div>
    </article>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "<?php echo addslashes($page->title); ?>",
  "description": "<?php echo addslashes($page->description ?? ''); ?>",
  "image": "<?php echo asset('images/og-image.png'); ?>",
  "datePublished": "<?php echo $page->date; ?>",
  "dateModified": "<?php echo $page->updated ?? $page->date; ?>",
  "author": {
    "@type": "Person",
    "name": "Tamas Erdelyi",
    "url": "https://phpfixer.com/about"
  },
  "publisher": {
    "@type": "Organization",
    "name": "PHPFixer",
    "url": "https://phpfixer.com"
  }
}
</script>

<?php include 'content/pages/_partials/footer.php'; ?>