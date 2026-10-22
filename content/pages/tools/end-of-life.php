<?php
$metaTitle = 'End-of-life dates for PHP, Laravel, WordPress, Ubuntu and more | PHPFixer';
$metaDescription = 'Check when PHP, Laravel, Symfony, WordPress, Drupal, Magento, MySQL, Ubuntu and other common web software stop getting security updates. Updated daily.';
include 'content/pages/_partials/header.php';

$groups = json_decode(file_get_contents('content/data/eol.json'), true);
$today = date('Y-m-d');

// Mirrors the eolStatus component in src/main.js, which recalculates in the browser
// so the page stays correct between rebuilds.
$status = function (array $release) use ($today): string {
    $eol = $release['eol'];
    if ($eol === null ? $release['ended'] : $eol <= $today) {
        return 'ended';
    }
    if ($eol !== null && $eol <= date('Y-m-d', strtotime('+6 months'))) {
        return 'soon';
    }
    if ($release['activeUntil'] !== null && $release['activeUntil'] <= $today) {
        return 'security';
    }
    return 'supported';
};

$statusLabels = [
    'ended' => 'No longer supported',
    'soon' => 'Support ends soon',
    'security' => 'Security fixes only',
    'supported' => 'Supported',
];

$formatDate = fn (?string $date): string => $date === null ? 'Not announced' : date('j M Y', strtotime($date));

// Timeline window shared by every product: one year back, three years ahead.
$windowStart = strtotime('-1 year');
$windowEnd = strtotime('+3 years');
$position = fn (string $date): float => round(max(0, min(100, (strtotime($date) - $windowStart) / ($windowEnd - $windowStart) * 100)), 2);
$todayPosition = $position($today);
$years = range((int) date('Y', $windowStart) + 1, (int) date('Y', $windowEnd));

// Bar segments for one release: full support, then security fixes only.
$segments = function (array $release) use ($position, $windowEnd): array {
    $start = $position($release['released']);
    $end = $release['eol'] !== null ? $position($release['eol']) : 100;
    $split = $release['activeUntil'] !== null ? min($end, $position($release['activeUntil'])) : $end;

    return [
        'start' => $start,
        'split' => $split,
        'end' => $end,
        'openEnded' => $release['eol'] === null || strtotime($release['eol']) > $windowEnd,
    ];
};

// Everything with a security end date in the next 6 months, soonest first.
$upcoming = [];
foreach ($groups as $products) {
    foreach ($products as $slug => $product) {
        foreach ($product['releases'] as $release) {
            $eol = $release['eol'];
            if ($eol !== null && $eol > $today && $eol <= date('Y-m-d', strtotime('+6 months'))) {
                $upcoming[] = ['slug' => $slug, 'label' => $product['label'], 'release' => $release];
            }
        }
    }
}
usort($upcoming, fn ($a, $b) => strcmp($a['release']['eol'], $b['release']['eol']));

// One column per month across the same window, so quiet months show as quiet.
$months = [];
for ($month = strtotime(date('Y-m-01')); $month <= strtotime('+6 months'); $month = strtotime('+1 month', $month)) {
    $months[date('Y-m', $month)] = [];
}
foreach ($upcoming as $item) {
    $months[substr($item['release']['eol'], 0, 7)][] = $item;
}
?>

    <main class="px-6 md:px-4 py-0 mb-24">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight tracking-tight bg-linear-to-b from-stone-800 to-stone-600 bg-clip-text text-transparent">End-of-life tracker</h1>
            <p class="text-lg md:text-xl font-light text-neutral-700">When software reaches its end of life, it stops getting security fixes. Your site keeps working, but every new vulnerability stays open. Bookmark this page to see what needs upgrading and what's coming up.</p>

            <!-- Coming up -->
            <section class="mt-10 rounded-xl bg-neutral-100 p-6 md:p-8">
                <h2 class="text-2xl font-bold tracking-tight text-neutral-800 mb-6">Coming up in the next 6 months</h2>
                <ol class="eol-months">
                    <?php foreach ($months as $key => $items): ?>
                        <li class="eol-month<?php if ($key === date('Y-m')): ?> eol-month-current<?php endif; ?>">
                            <h3 class="eol-month-name"><?php echo date('M Y', strtotime($key . '-01')); ?></h3>
                            <?php if ($items): ?>
                                <ul class="space-y-2">
                                    <?php foreach ($items as $item): ?>
                                        <li x-data="eolStatus(<?php echo htmlspecialchars(json_encode($item['release'])); ?>)" x-show="!isPast" :title="relative">
                                            <a href="#<?php echo $item['slug']; ?>" class="eol-month-item">
                                                <span class="eol-month-day"><?php echo date('j', strtotime($item['release']['eol'])); ?></span>
                                                <span><?php echo htmlspecialchars($item['label'] . ' ' . $item['release']['version']); ?></span>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php else: ?>
                                <p class="text-sm text-zinc-400">Nothing ends</p>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ol>
                <p class="mt-8 pt-5 border-t border-stone-200 text-neutral-700">
                    Something here running on your site? I can plan the upgrade before support ends.
                    <a href="https://cal.com/phpfixer/introduction?utm_source=phpfixer.com&utm_medium=cta&utm_campaign=intro-call&utm_content=eol-tracker-upcoming" target="_blank" rel="noopener" @click="fathom.trackEvent('book intro call clicked')" class="font-semibold text-blue-700 underline underline-offset-4 hover:text-blue-900">Book a free call</a>
                </p>
            </section>

            <!-- Products -->
            <div class="eol-legend mt-16" aria-hidden="true">
                <span><i class="eol-swatch eol-swatch-active"></i>Full support</span>
                <span><i class="eol-swatch eol-swatch-security"></i>Security fixes only</span>
                <span><i class="eol-swatch eol-swatch-soon"></i>Ends within 6 months</span>
                <span><i class="eol-swatch eol-swatch-ended"></i>No longer supported</span>
                <span><i class="eol-swatch eol-swatch-today"></i>Today</span>
            </div>

            <?php foreach ($groups as $group => $products): ?>
                <section class="mt-16">
                    <h2 class="text-2xl font-bold tracking-tight text-neutral-800"><?php echo $group; ?></h2>

                    <div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-6 mt-6">
                        <?php foreach ($products as $slug => $product): ?>
                            <div id="<?php echo $slug; ?>" class="scroll-mt-8 rounded-xl border border-stone-200 p-5 md:p-6">
                                <div class="flex flex-wrap items-baseline justify-between gap-x-4 mb-3">
                                    <h3 class="text-lg font-bold text-stone-800"><?php echo htmlspecialchars($product['label']); ?></h3>
                                    <?php if ($product['policy']): ?>
                                        <a href="<?php echo $product['policy']; ?>" target="_blank" rel="noopener" class="text-sm text-zinc-500 hover:text-blue-700 underline underline-offset-4">Release policy</a>
                                    <?php endif; ?>
                                </div>

                                <div class="eol-chart" style="grid-template-rows: 1.5rem repeat(<?php echo count($product['releases']); ?>, 2rem);">
                                    <div class="eol-grid" aria-hidden="true">
                                        <?php foreach ($years as $year): $left = $position($year . '-01-01'); ?>
                                            <span class="eol-year" style="left: <?php echo $left; ?>%"><?php echo $year; ?></span>
                                        <?php endforeach; ?>
                                        <span class="eol-today" style="left: <?php echo $todayPosition; ?>%"></span>
                                    </div>

                                    <?php foreach ($product['releases'] as $i => $release): $initial = $status($release); $bar = $segments($release); ?>
                                        <div class="eol-row" style="--row: <?php echo $i + 2; ?>"
                                             data-status="<?php echo $initial; ?>"
                                             x-data="eolStatus(<?php echo htmlspecialchars(json_encode($release)); ?>)" :data-status="status">
                                            <span class="eol-version"<?php if ($release['latest']): ?> title="Latest release: <?php echo htmlspecialchars($release['latest']); ?>"<?php endif; ?>>
                                                <?php echo htmlspecialchars($release['version']); ?><?php if ($release['lts']): ?><small>LTS</small><?php endif; ?>
                                            </span>
                                            <span class="eol-track" aria-hidden="true">
                                                <?php if ($bar['split'] > $bar['start']): ?>
                                                    <span class="eol-bar eol-bar-active<?php if ($bar['end'] <= $bar['split']): ?> eol-bar-end<?php endif; ?>" style="left: <?php echo $bar['start']; ?>%; width: <?php echo $bar['split'] - $bar['start']; ?>%"></span>
                                                <?php endif; ?>
                                                <?php if ($bar['end'] > $bar['split']): ?>
                                                    <span class="eol-bar eol-bar-security eol-bar-end" style="left: <?php echo $bar['split']; ?>%; width: <?php echo $bar['end'] - $bar['split']; ?>%"></span>
                                                <?php endif; ?>
                                                <?php if ($bar['openEnded']): ?><span class="eol-fade"></span><?php endif; ?>
                                            </span>
                                            <span class="eol-date" title="<?php echo $formatDate($release['eol']); ?>" :title="label + ', ' + <?php echo htmlspecialchars(json_encode($formatDate($release['eol']))); ?> + (relative ? ' (' + relative + ')' : '')"><?php echo $release['eol'] ? date('M Y', strtotime($release['eol'])) : 'No date'; ?></span>
                                            <span class="sr-only" x-text="label"><?php echo $statusLabels[$initial]; ?></span>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </section>
            <?php endforeach; ?>

            <!-- CTA -->
            <section class="mt-20 rounded-xl bg-neutral-100 p-8 md:p-10">
                <h2 class="text-2xl font-bold tracking-tight text-neutral-800 mb-3">Running something that's out of support?</h2>
                <p class="text-neutral-700 font-light text-lg max-w-3xl mb-6">Upgrading old PHP, Laravel, WordPress or server software is most of what I do. I'll tell you what's at risk, what the upgrade involves and what it costs, before any work starts.</p>
                <a href="https://cal.com/phpfixer/introduction?utm_source=phpfixer.com&utm_medium=cta&utm_campaign=intro-call&utm_content=eol-tracker" target="_blank" rel="noopener" @click="fathom.trackEvent('book intro call clicked')" class="inline-block px-6 py-3 md:text-lg font-semibold text-center rounded-xl bg-zinc-700 text-white shadow-lg hover:bg-zinc-800 transition">Book a free call</a>
            </section>

            <p class="mt-10 text-sm text-zinc-500">Data from <a href="https://endoflife.date" target="_blank" rel="noopener" class="underline underline-offset-4 hover:text-blue-700">endoflife.date</a>, checked daily. Dates are when security fixes stop. Some vendors sell paid extended support beyond these dates.</p>
        </div>
    </main>

<?php include 'content/pages/_partials/footer.php'; ?>
