<?php

/**
 * Writes dist/sitemap.xml from the built pages. Run after the site is built.
 *
 * lastmod comes from the post's `updated` or `date` frontmatter for blog posts,
 * and from the source file's last git commit for everything else.
 */

declare(strict_types=1);

use Symfony\Component\Yaml\Yaml;

require __DIR__ . '/../vendor/autoload.php';

const SITE_URL = 'https://phpfixer.com';

$root = dirname(__DIR__);
$dist = $root . '/dist';
$pagesDir = $root . '/content/pages';
$blogDir = $root . '/content/collections/blog';

function isShallowClone(): bool
{
    global $root;

    return trim((string) shell_exec('git -C ' . escapeshellarg($root) . ' rev-parse --is-shallow-repository')) === 'true';
}

// CI builds may clone without history, which would give every page the same date.
if (isShallowClone()) {
    shell_exec('git -C ' . escapeshellarg($root) . ' fetch --unshallow --quiet 2>&1');
}
$isShallowClone = isShallowClone();

function gitLastModified(string $file): ?string
{
    global $root, $isShallowClone;

    if ($isShallowClone || ! is_file($file)) {
        return null;
    }

    $date = trim((string) shell_exec(sprintf(
        'git -C %s log -1 --format=%%cs -- %s',
        escapeshellarg($root),
        escapeshellarg($file),
    )));

    return $date !== '' ? $date : null;
}

function postLastModified(string $file): ?string
{
    if (! preg_match('/\A---\R(.*?)\R---/s', (string) file_get_contents($file), $match)) {
        return null;
    }

    $frontmatter = Yaml::parse($match[1]);
    $date = $frontmatter['updated'] ?? $frontmatter['date'] ?? null;

    return $date === null ? null : (is_int($date) ? date('Y-m-d', $date) : (string) $date);
}

function latest(?string ...$dates): ?string
{
    $dates = array_filter($dates);

    return $dates === [] ? null : max($dates);
}

$postDates = [];
foreach (glob($blogDir . '/*/*.md') as $postFile) {
    $postDates[basename($postFile, '.md')] = postLastModified($postFile);
}

$entries = [];
$htmlFiles = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dist, FilesystemIterator::SKIP_DOTS));

foreach ($htmlFiles as $file) {
    if ($file->getFilename() !== 'index.html') {
        continue;
    }

    $html = (string) file_get_contents($file->getPathname());
    if (preg_match('/<meta[^>]+name=["\']robots["\'][^>]+noindex/i', $html)) {
        continue;
    }

    $path = trim(substr($file->getPath(), strlen($dist)), '/');

    $lastmod = match (true) {
        $path === '' => gitLastModified($pagesDir . '/index.php'),
        $path === 'blog' => latest(gitLastModified($blogDir . '/index.php'), ...array_values($postDates)),
        str_starts_with($path, 'blog/') => $postDates[substr($path, 5)] ?? null,
        $path === 'tools/eol-tracker' => latest(gitLastModified($pagesDir . '/tools/eol-tracker.php'), gitLastModified($root . '/content/data/eol.json')),
        default => gitLastModified($pagesDir . '/' . $path . '.php'),
    };

    $entries[$path] = $lastmod;
}

ksort($entries);

$xml = ['<?xml version="1.0" encoding="UTF-8"?>', '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'];
foreach ($entries as $path => $lastmod) {
    $xml[] = '  <url>';
    $xml[] = '    <loc>' . SITE_URL . '/' . ($path === '' ? '' : $path . '/') . '</loc>';
    if ($lastmod !== null) {
        $xml[] = '    <lastmod>' . $lastmod . '</lastmod>';
    }
    $xml[] = '  </url>';
}
$xml[] = '</urlset>';

file_put_contents($dist . '/sitemap.xml', implode("\n", $xml) . "\n");

echo sprintf("Sitemap: %d URLs%s\n", count($entries), $isShallowClone ? ' (shallow clone, page lastmod omitted)' : '');
