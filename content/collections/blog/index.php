<?php
$metaTitle = 'Blog – PHP Tips, Fixes & Guides | PHPFixer';
$metaDescription = 'Practical PHP guides on bug fixes, legacy code, upgrades, and when to bring in help. Written by Tamas Erdelyi, PHP specialist.';
include 'content/pages/_partials/header.php';
?>

    <section class="px-6 md:px-4 py-2">
        <div class="max-w-5xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 leading-tight tracking-tight text-zinc-700">Blog</h1>
            <p class="text-lg font-light text-stone-600 mb-12">Practical guides on PHP bug fixes, legacy code and upgrades.</p>

            <div class="flex flex-col divide-y divide-zinc-200">
                <?php foreach ($collection->items() as $item) : ?>
                    <article class="py-8 first:pt-0 flex flex-col sm:flex-row gap-4 sm:gap-6">
                        <?php if (!empty($item->meta['image'])) : ?>
                            <a href="<?php echo $item->link; ?>" class="shrink-0">
                                <img src="<?php echo asset($item->meta['image']); ?>" alt="" loading="lazy" class="w-full sm:w-52 h-48 sm:h-36 object-cover rounded-xl shadow-sm">
                            </a>
                        <?php endif; ?>
                        <div>
                            <h2 class="text-xl font-semibold mb-2 leading-snug tracking-tight">
                                <a href="<?php echo $item->link; ?>" class="text-zinc-700 hover:text-blue-600 transition-colors"><?php echo $item->title; ?></a>
                            </h2>
                            <p class="text-stone-600 font-light leading-relaxed mb-3"><?php echo $item->excerpt; ?></p>
                            <a href="<?php echo $item->link; ?>" class="text-blue-600 text-sm font-medium hover:underline">Read more →</a>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <?php if ($pagination) : ?>
                <nav class="flex justify-between mt-12 pt-6 border-t border-zinc-200">
                    <?php if ($pagination->previous) : ?>
                        <a href="<?php echo $pagination->previous; ?>" class="text-blue-600 font-medium hover:underline">← Newer posts</a>
                    <?php else : ?>
                        <span></span>
                    <?php endif; ?>
                    <?php if ($pagination->next) : ?>
                        <a href="<?php echo $pagination->next; ?>" class="text-blue-600 font-medium hover:underline">Older posts →</a>
                    <?php endif; ?>
                </nav>
            <?php endif; ?>
        </div>
    </section>

<?php include 'content/pages/_partials/footer.php'; ?>