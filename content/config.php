<?php

use Terdelyi\Phanstatic\Models\Config;

// For local development, leave empty for relative paths
$baseUrl = getenv('DEPLOY_PRIME_URL') ?: getenv('URL') ?: '';

return new Config(
    baseUrl: $baseUrl,
    title:'PHPFixer'
);