<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Hyperf\Set\HyperfSetList;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->sets([HyperfSetList::HYPERF_31]);
};
