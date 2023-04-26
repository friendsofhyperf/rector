<?php

declare(strict_types=1);
/**
 * This file is part of friendsofhyperf/components.
 *
 * @link     https://github.com/friendsofhyperf/components
 * @document https://github.com/friendsofhyperf/components/blob/3.x/README.md
 * @contact  huangdijia@gmail.com
 */
namespace RectorHyperf\Set;

use Rector\Set\Contract\SetListInterface;

final class HyperfSetList implements SetListInterface
{
    public const HYPERF_31 = __DIR__ . '/../../config/sets/hyperf31.php';
}
