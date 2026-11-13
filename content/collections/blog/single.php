<?php
$metaTitle = $page->title . ' | PHPFixer';
$metaDescription = $page->description ?? '';
$ogType = 'article';
$ogImage = !empty($page->meta['image']) ? asset($page->meta['image']) : null;
include 'content/pages/_partials/header.php';
require_once 'content/pages/_partials/posts.php';

$published = (string) $page->date;
$updated = $page->updated ? (string) $page->updated : null;
$humanDate = fn (string $date) => date('j F Y', strtotime($date));
$relatedPosts = blog_posts(2, $page->url);
?>

    <article class="px-6 md:px-4 py-4">
        <div class="max-w-3xl mx-auto">

            <header class="mb-10">
                <div class="flex flex-wrap gap-2 mb-4">
                    <?php foreach ($page->tags as $tag) : ?>
                        <span class="text-xs font-medium px-2 py-1 bg-zinc-100 text-zinc-600 rounded"><?php echo $tag; ?></span>
                    <?php endforeach; ?>
                </div>
                <h1 class="text-3xl md:text-5xl font-bold leading-tight tracking-tight text-zinc-700"><?php echo $page->title; ?></h1>
                <div class="mt-6 flex items-center gap-3 text-sm text-stone-600">
                    <img src="<?php echo asset('images/tamas-photo.png'); ?>" alt="" class="w-10 h-10 rounded-full object-cover object-top bg-zinc-200">
                    <div>
                        <a href="<?php echo url('about/'); ?>" rel="author" class="font-semibold text-zinc-700 hover:text-blue-600">Tamas Erdelyi</a>, PHP developer with 25+ years of experience
                        <div>
                            Published <time datetime="<?php echo $published; ?>"><?php echo $humanDate($published); ?></time>
                            <?php if ($updated && $updated !== $published) : ?>
                                · Updated <time datetime="<?php echo $updated; ?>"><?php echo $humanDate($updated); ?></time>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </header>

            <?php if (!empty($page->meta['image'])) : ?>
                <img
                    src="<?php echo asset($page->meta['image']); ?>"
                    alt="<?php echo htmlspecialchars($page->title); ?>"
                    class="w-full aspect-video object-cover rounded-2xl mb-10"
                >
            <?php endif; ?>

            <div class="blog-content">
                <?php echo $page->content; ?>

                <?php if (! str_contains((string) $page->content, 'blog-cta')) : ?>
                    <div class="blog-cta">
                        <p class="blog-cta-heading">Need a hand with your PHP site?</p>
                        <p>Tell me what's broken and I'll tell you what it takes to fix it. No fix, no fee.</p>
                        <a href="#contact" @click.prevent="showContact = true; fathom.trackEvent('blog cta clicked')" class="blog-cta-button">Request a free bug check</a>
                    </div>
                <?php endif; ?>
            </div>

            <?php if ($relatedPosts) : ?>
                <aside class="mt-12 pt-8 border-t border-zinc-200">
                    <h2 class="text-xl font-semibold tracking-tight text-zinc-700 mb-4">More guides</h2>
                    <ul class="space-y-4">
                        <?php foreach ($relatedPosts as $post) : ?>
                            <li>
                                <a href="<?php echo $post['url']; ?>" class="font-medium text-blue-600 hover:underline"><?php echo $post['title']; ?></a>
                                <p class="text-stone-600 font-light text-sm mt-1"><?php echo $post['description']; ?></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </aside>
            <?php endif; ?>

            <footer class="py-8">
                <a href="<?php echo url('blog/'); ?>" class="text-blue-600 text-sm font-medium hover:underline">← Back to the blog</a>
            </footer>

        </div>
    </article>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": <?php echo json_encode($page->url, JSON_UNESCAPED_SLASHES); ?>,
  "headline": <?php echo json_encode($page->title, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>,
  "description": <?php echo json_encode($page->description ?? '', JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>,
  "image": "<?php echo $ogImage ?? asset('images/og-image.png'); ?>",
  "datePublished": "<?php echo $published; ?>",
  "dateModified": "<?php echo $updated ?? $published; ?>",
  "author": {
    "@type": "Person",
    "name": "Tamas Erdelyi",
    "url": "https://phpfixer.com/about/"
  },
  "publisher": {
    "@type": "Organization",
    "name": "PHPFixer",
    "url": "https://phpfixer.com"
  }
}
</script>

<?php include 'content/pages/_partials/footer.php'; ?>
