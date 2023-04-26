<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;

use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\Rector\FuncCall\RenameFunctionRector;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->import(__DIR__ . '/../config.php');

    $rectorConfig
        ->ruleWithConfiguration(RenameClassRector::class, [
            'Hyperf\Utils\ApplicationContext' => 'Hyperf\Context\ApplicationContext',
            'Hyperf\Utils\Arr' => 'Hyperf\Collection\Arr',
            'Hyperf\Utils\Collection' => 'Hyperf\Collection\Collection',
            'Hyperf\Utils\Coroutine' => 'Hyperf\Coroutine\Coroutine',
            'Hyperf\Utils\Coroutine\Concurrent' => 'Hyperf\Coroutine\Concurrent',
            'Hyperf\Utils\Str' => 'Hyperf\Stringable\Str',
            'Hyperf\Utils\Stringable' => 'Hyperf\Stringable\Stringable',

            'Hyperf\Utils\Channel\Caller' => 'Hyperf\Coroutine\Channel\Caller',
            'Hyperf\Utils\Channel\ChannelManager' => 'Hyperf\Coroutine\Channel\Manager',

            'Hyperf\Utils\Codec\Base62' => 'Hyperf\Codec\Base62',
            'Hyperf\Utils\Codec\Json' => 'Hyperf\Codec\Json',
            'Hyperf\Utils\Codec\Xml' => 'Hyperf\Codec\Xml',
            'Hyperf\Utils\CodeGen\Package' => 'Hyperf\CodeParser\Package',
        ]);

    $rectorConfig
        ->ruleWithConfiguration(RenameFunctionRector::class, [
            'collect' => 'Hyperf\Collection\collect',
            'data_fill' => 'Hyperf\Collection\data_fill',
            'data_get' => 'Hyperf\Collection\data_get',
            'data_set' => 'Hyperf\Collection\data_set',
            'value' => 'Hyperf\Collection\value',

            'tap' => 'Hyperf\Tappable\tap',

            'co' => 'Hyperf\Coroutine\co',
            'defer' => 'Hyperf\Coroutine\defer',
            'go' => 'Hyperf\Coroutine\go',
            'parallel' => 'Hyperf\Coroutine\parallel',
            'run' => 'Hyperf\Coroutine\run',
            'wait' => 'Hyperf\Coroutine\wait',

            'value' => 'Hyperf\Support\value',
        ]);
};
