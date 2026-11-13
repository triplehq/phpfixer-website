<?php

/**
 * Notifies IndexNow (Bing, Yandex, Seznam, Naver) about pages that are new or
 * changed in this build. Run after generate-sitemap.php, on production builds only.
 *
 * Changed pages are found by comparing the freshly built sitemap with the one
 * that is still live, so no state needs to be stored between deploys.
 */

declare(strict_types=1);

const SITE_URL = 'https://phpfixer.com';
const INDEXNOW_KEY = 'cb821a5dfda9b424fe72fdef04738600';
const ENDPOINT = 'https://api.indexnow.org/indexnow';

if (getenv('CONTEXT') !== 'production') {
    echo "IndexNow: skipped outside production\n";
    exit(0);
}

$root = dirname(__DIR__);

if (! is_file($root . '/public/' . INDEXNOW_KEY . '.txt')) {
    fwrite(STDERR, "IndexNow: key file public/" . INDEXNOW_KEY . ".txt is missing\n");
    exit(0);
}

/** @return array<string, string> URL => lastmod */
function sitemapEntries(string $xml): array
{
    $sitemap = @simplexml_load_string($xml);
    if ($sitemap === false) {
        return [];
    }

    $entries = [];
    foreach ($sitemap->url as $url) {
        $entries[(string) $url->loc] = (string) $url->lastmod;
    }

    return $entries;
}

$built = sitemapEntries((string) file_get_contents($root . '/dist/sitemap.xml'));
$live = sitemapEntries((string) @file_get_contents(SITE_URL . '/sitemap.xml'));

$changed = array_keys(array_filter(
    $built,
    fn (string $lastmod, string $url) => ($live[$url] ?? null) !== $lastmod,
    ARRAY_FILTER_USE_BOTH,
));

if ($changed === []) {
    echo "IndexNow: no changed pages\n";
    exit(0);
}

$context = stream_context_create(['http' => [
    'method' => 'POST',
    'header' => "Content-Type: application/json; charset=utf-8\r\n",
    'content' => json_encode([
        'host' => parse_url(SITE_URL, PHP_URL_HOST),
        'key' => INDEXNOW_KEY,
        'keyLocation' => SITE_URL . '/' . INDEXNOW_KEY . '.txt',
        'urlList' => $changed,
    ]),
    'ignore_errors' => true,
    'timeout' => 10,
]]);

$response = @file_get_contents(ENDPOINT, false, $context);
$status = $http_response_header[0] ?? 'no response';

// A failed ping must never fail the deploy.
echo sprintf("IndexNow: submitted %d URL(s), %s\n", count($changed), $status);
foreach ($changed as $url) {
    echo "  {$url}\n";
}
if ($response) {
    echo "  {$response}\n";
}
