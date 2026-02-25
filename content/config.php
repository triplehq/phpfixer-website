<?php

use Terdelyi\Phanstatic\Models\Config;

$context = getenv('CONTEXT');

if ($context === 'production') {
    $baseUrl = getenv('URL') ?: '';
} elseif ($context === 'deploy-preview' || $context === 'branch-deploy') {
    $baseUrl = getenv('DEPLOY_PRIME_URL') ?: '';
} else {
    $baseUrl = getenv('LOCAL_URL') ?: 'localhost:3000';
}

return new Config(
    baseUrl: $baseUrl,
    title:'PHPFixer'
);