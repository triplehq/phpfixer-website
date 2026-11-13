<?php

use Symfony\Component\Yaml\Yaml;

if (! function_exists('blog_posts')) {
    /**
     * Blog posts, newest first. Phanstatic only exposes the collection to its own
     * index template, so other pages read the Markdown frontmatter directly.
     *
     * @return list<array{title: string, url: string, description: string, date: string, image: ?string}>
     */
    function blog_posts(int $limit = PHP_INT_MAX, ?string $excludeUrl = null): array
    {
        $posts = [];

        foreach (glob('content/collections/blog/*/*.md') as $file) {
            if (! preg_match('/\A---\R(.*?)\R---/s', (string) file_get_contents($file), $match)) {
                continue;
            }

            $meta = Yaml::parse($match[1]);
            $url = url('blog/' . basename($file, '.md') . '/');

            if ($url === $excludeUrl) {
                continue;
            }

            $posts[] = [
                'title' => $meta['title'],
                'url' => $url,
                'description' => $meta['description'] ?? '',
                'date' => (string) $meta['date'],
                'image' => $meta['image'] ?? null,
            ];
        }

        usort($posts, fn (array $a, array $b) => strcmp($b['date'], $a['date']));

        return array_slice($posts, 0, $limit);
    }
}
