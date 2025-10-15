<?php

use Terdelyi\Phanstatic\Models\Config;

if (getenv('ENV') === 'production') {
    $baseUrl = getenv('URL') ?? '';
} else {
    $baseUrl = getenv('DEPLOY_URL') ? getenv('DEPLOY_URL') : 'http://localhost:8000';
}

return new Config(
    baseUrl: $baseUrl,
    title:'PHPFixer'
);