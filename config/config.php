<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/sets/up-to-hyperf31.php');
    $rectorConfig->import(__DIR__ . '/sets/hyperf31.php');
};
