<?php

/**
 * Fetches end-of-life data from endoflife.date and writes content/data/eol.json.
 *
 * Run daily by .github/workflows/update-eol.yml. The output only changes when the
 * upstream data changes, so the workflow commits (and Netlify rebuilds) only then.
 *
 * Usage: php scripts/fetch-eol.php
 */

const API_URL = 'https://endoflife.date/api/v1/products/%s/';
const OUTPUT = __DIR__ . '/../content/data/eol.json';

// Versions whose end of life passed longer ago than this are dropped. Matches the
// start of the timeline on the page.
const KEEP_ENDED_FOR = '-1 year';

$groups = [
    'Languages and tools' => [
        'php' => ['label' => 'PHP'],
        'nodejs' => ['label' => 'Node.js', 'ltsOnly' => true],
        'composer' => ['label' => 'Composer', 'max' => 4],
    ],
    'Frameworks and CMS' => [
        'laravel' => ['label' => 'Laravel'],
        'symfony' => ['label' => 'Symfony'],
        'wordpress' => ['label' => 'WordPress', 'max' => 4],
        'drupal' => ['label' => 'Drupal'],
        // Magento only publishes the Adobe Commerce support end date.
        'magento' => ['label' => 'Magento / Adobe Commerce', 'eolField' => 'eoesFrom'],
    ],
    'Databases and caching' => [
        'mysql' => ['label' => 'MySQL', 'ltsOnly' => true],
        'mariadb' => ['label' => 'MariaDB', 'ltsOnly' => true],
        'postgresql' => ['label' => 'PostgreSQL'],
        'redis' => ['label' => 'Redis'],
    ],
    'Servers and hosting' => [
        'ubuntu' => ['label' => 'Ubuntu', 'ltsOnly' => true],
        'debian' => ['label' => 'Debian'],
        'plesk' => ['label' => 'Plesk', 'max' => 4],
    ],
];

$cutoff = date('Y-m-d', strtotime(KEEP_ENDED_FOR));
$output = [];

foreach ($groups as $group => $products) {
    foreach ($products as $slug => $config) {
        $data = fetchProduct($slug);
        $eolField = $config['eolField'] ?? 'eolFrom';

        $releases = [];
        foreach ($data['releases'] as $index => $release) {
            $eol = $release[$eolField] ?? null;

            // Short-lived interim releases crowd out the LTS versions servers actually run,
            // so for these products show LTS releases plus the newest release only.
            $isLts = $release['isLts'] || $release['ltsFrom'] !== null;
            if (!empty($config['ltsOnly']) && !$isLts && $index > 0) {
                continue;
            }

            // No date announced: keep it only while it is still maintained.
            $keep = $eol === null ? $release['isMaintained'] : $eol >= $cutoff;
            if (!$keep) {
                continue;
            }

            $releases[] = [
                'version' => $release['name'],
                'codename' => $release['codename'],
                'lts' => $isLts,
                'released' => $release['releaseDate'],
                'activeUntil' => $release['eoasFrom'] ?? null,
                'eol' => $eol,
                'ended' => $eol === null ? !$release['isMaintained'] : null,
                'latest' => $release['latest']['name'] ?? null,
                'latestLink' => $release['latest']['link'] ?? null,
            ];
        }

        // Some products (Drupal) list releases out of order.
        usort($releases, fn ($a, $b) => strcmp($b['released'], $a['released']));

        $output[$group][$slug] = [
            'label' => $config['label'],
            'link' => $data['links']['html'],
            'policy' => $data['links']['releasePolicy'] ?? null,
            'releases' => array_slice($releases, 0, $config['max'] ?? 6),
        ];
    }
}

$json = json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . "\n";

if (!is_dir(dirname(OUTPUT))) {
    mkdir(dirname(OUTPUT), 0755, true);
}
file_put_contents(OUTPUT, $json);

echo 'Wrote ' . realpath(OUTPUT) . PHP_EOL;

function fetchProduct(string $slug): array
{
    $context = stream_context_create(['http' => [
        'timeout' => 20,
        'header' => "User-Agent: phpfixer.com EOL tracker\r\n",
    ]]);

    $body = @file_get_contents(sprintf(API_URL, $slug), false, $context);
    $data = $body === false ? null : json_decode($body, true);

    // Fail the whole run rather than write a partial file.
    if (!isset($data['result']['releases'])) {
        fwrite(STDERR, "Failed to fetch {$slug}" . PHP_EOL);
        exit(1);
    }

    return $data['result'];
}
