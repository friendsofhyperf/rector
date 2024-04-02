<?php

declare(strict_types=1);

namespace Rector\Hyperf\Set;

use Rector\Set\Contract\SetListInterface;

final class HyperfLevelSetList implements SetListInterface
{
    public const UP_TO_HYPERF_31 = __DIR__ . '/../../config/sets/up-to-hyperf31.php';
}
