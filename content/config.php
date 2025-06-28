<?php

use Terdelyi\Phanstatic\Config\ConfigBuilder;

if (getenv('ENV') === 'production') {
    $baseUrl = getenv('URL');
} else {
    $baseUrl = getenv('DEPLOY_URL') ? getenv('DEPLOY_URL') : 'http://localhost:8000';
}

return ConfigBuilder::make()
    ->setBaseUrl($baseUrl)
    ->setTitle('PHPfixer')
    ->addCollection(
        'blog',
        'Blog',
        'blog',
        10
    )
    ->build();