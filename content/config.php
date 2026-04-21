<?php

use Terdelyi\Phanstatic\Models\Config;
use Terdelyi\Phanstatic\Models\CollectionConfig;

$context = getenv('CONTEXT');

if ($context === 'production') {
    $baseUrl = getenv('URL') ?: '';
} elseif ($context === 'deploy-preview' || $context === 'branch-deploy') {
    $baseUrl = getenv('DEPLOY_PRIME_URL') ?: '';
} else {
    $baseUrl = getenv('BASE_URL') ?: 'http://localhost:8082';
}

return new Config(
    baseUrl: $baseUrl,
    title: 'PHPFixer',
    collections: [
        'blog' => new CollectionConfig(
            title: 'Blog',
            slug: 'blog',
            pageSize: 10,
        )
    ]
);