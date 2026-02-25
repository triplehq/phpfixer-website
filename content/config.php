<?php

use Terdelyi\Phanstatic\Models\Config;

return new Config(
    baseUrl: getenv('URL') ?? '',
    title:'PHPFixer'
);