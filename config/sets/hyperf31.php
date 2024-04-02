<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Renaming\Rector\FuncCall\RenameFunctionRector;
use Rector\Renaming\Rector\MethodCall\RenameMethodRector;
use Rector\Renaming\Rector\Name\RenameClassRector;
use Rector\Renaming\ValueObject\MethodCallRename;

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig
        ->ruleWithConfiguration(RenameClassRector::class, [
            // AsyncQueue
            'Hyperf\AsyncQueue\Message' => 'Hyperf\AsyncQueue\JobMessage',

            // DbConnection
            'Hyperf\DbConnection\Listener\CreatingListener' => 'Hyperf\DbConnection\Listener\InitUidOnCreatingListener',

            // HttpMessage
            'Hyperf\HttpMessage\Server\ConnectionInterface' => 'Hyperf\Engine\Contract\Http\Writable',
            'Hyperf\HttpMessage\Server\Connection\SwooleConnection' => 'Hyperf\Engine\Http\WritableConnection',

            // Redis
            'Hyperf\Redis\ScanCaller' => 'Hyperf\Redis\Traits\ScanCaller',

            // Channel
            'Hyperf\Utils\Channel\Caller' => 'Hyperf\Coroutine\Channel\Caller',
            'Hyperf\Utils\Channel\ChannelManager' => 'Hyperf\Coroutine\Channel\Manager',

            // Codec
            'Hyperf\Utils\Codec\Base62' => 'Hyperf\Codec\Base62',
            'Hyperf\Utils\Codec\Json' => 'Hyperf\Codec\Json',
            'Hyperf\Utils\Codec\Xml' => 'Hyperf\Codec\Xml',

            // CodeGen
            'Hyperf\Utils\CodeGen\Package' => 'Hyperf\CodeParser\Package',
            'Hyperf\Utils\CodeGen\PhpDocReader' => 'Hyperf\CodeParser\PhpDocReader',
            'Hyperf\Utils\CodeGen\PhpDocReaderManager' => 'Hyperf\CodeParser\PhpDocReaderManager',
            'Hyperf\Utils\CodeGen\PhpParser' => 'Hyperf\CodeParser\PhpParser',
            'Hyperf\Utils\CodeGen\Project' => 'Hyperf\CodeParser\Project',

            // Command
            'Hyperf\Command\ConfirmableTrait' => 'Hyperf\Command\Concerns\Confirmable',
            'Hyperf\Command\DisableEventDispatcher' => 'Hyperf\Command\Concerns\DisableEventDispatcher',
            'Hyperf\Command\NullDisableEventDispatcher' => 'Hyperf\Command\Concerns\NullDisableEventDispatcher',

            // Contracts
            'Hyperf\Utils\Contracts\Arrayable' => 'Hyperf\Contract\Arrayable',
            'Hyperf\Utils\Contracts\Jsonable' => 'Hyperf\Contract\Jsonable',
            'Hyperf\Utils\Contracts\MessageBag' => 'Hyperf\Contract\MessageBag',
            'Hyperf\Utils\Contracts\MessageProvider' => 'Hyperf\Contract\MessageProvider',
            'Hyperf\Utils\Contracts\Xmlable' => 'Hyperf\Contract\Xmlable',

            // Coordinator
            'Hyperf\Utils\Coordinator\Constants' => 'Hyperf\Coordinator\Constants',
            'Hyperf\Utils\Coordinator\Coordinator' => 'Hyperf\Coordinator\Coordinator',
            'Hyperf\Utils\Coordinator\CoordinatorManager' => 'Hyperf\Coordinator\CoordinatorManager',

            // Coroutine
            'Hyperf\Utils\Coroutine\Concurrent' => 'Hyperf\Coroutine\Concurrent',
            'Hyperf\Utils\Coroutine\Locker' => 'Hyperf\Coroutine\Locker',

            // Exception
            'Hyperf\Utils\Exception\ChannelClosedException' => 'Hyperf\Coroutine\Exception\ChannelClosedException',
            'Hyperf\Utils\Exception\ExceptionThrower' => 'Hyperf\Support\Exception\ExceptionThrower',
            'Hyperf\Utils\Exception\InvalidArgumentException' => 'Hyperf\Support\Exception\InvalidArgumentException',
            'Hyperf\Utils\Exception\IPReadFailedException' => 'Hyperf\Support\Exception\IPReadFailedException',
            'Hyperf\Utils\Exception\ParallelExecutionException' => 'Hyperf\Coroutine\Exception\ParallelExecutionException',
            'Hyperf\Utils\Exception\TimeoutException' => 'Hyperf\Coroutine\Exception\TimeoutException',
            'Hyperf\Utils\Exception\WaitTimeoutException' => 'Hyperf\Coroutine\Exception\WaitTimeoutException',

            // Filesystem
            'Hyperf\Utils\Filesystem\FileNotFoundException' => 'Hyperf\Support\Filesystem\FileNotFoundException',
            'Hyperf\Utils\Filesystem\Filesystem' => 'Hyperf\Support\Filesystem\Filesystem',

            // Packer
            'Hyperf\Utils\Packer\JsonPacker' => 'Hyperf\Codec\Packer\JsonPacker',
            'Hyperf\Utils\Packer\PhpSerializerPacker' => 'Hyperf\Codec\Packer\PhpSerializerPacker',

            // Reflection
            'Hyperf\Utils\Reflection\ClassInvoker' => 'Hyperf\Support\Reflection\ClassInvoker',

            // Serializer
            'Hyperf\Utils\Serializer\ExceptionNormalizer' => 'Hyperf\Serializer\ExceptionNormalizer',
            'Hyperf\Utils\Serializer\JsonDeNormalizer' => 'Hyperf\Serializer\JsonDeNormalizer',
            'Hyperf\Utils\Serializer\ScalarNormalizer' => 'Hyperf\Serializer\ScalarNormalizer',
            'Hyperf\Utils\Serializer\Serializer' => 'Hyperf\Serializer\Serializer',
            'Hyperf\Utils\Serializer\SerializerFactory' => 'Hyperf\Serializer\SerializerFactory',
            'Hyperf\Utils\Serializer\SimpleNormalizer' => 'Hyperf\Serializer\SimpleNormalizer',
            'Hyperf\Utils\Serializer\SymfonyNormalizer' => 'Hyperf\Serializer\SymfonyNormalizer',

            // Traits
            'Hyperf\Utils\Traits\Conditionable' => 'Hyperf\Conditionable\Conditionable',
            'Hyperf\Utils\Traits\Container' => 'Hyperf\Support\Traits\Container',
            'Hyperf\Utils\Traits\CoroutineProxy' => 'Hyperf\Context\Traits\CoroutineProxy',
            'Hyperf\Utils\Traits\ForwardsCalls' => 'Hyperf\Support\Traits\ForwardsCalls',
            'Hyperf\Utils\Traits\StaticInstance' => 'Hyperf\Support\Traits\StaticInstance',
            'Hyperf\Utils\Traits\Tappable' => 'Hyperf\Tappable\Tappable',

            // Utils
            'Hyperf\Utils\ApplicationContext' => 'Hyperf\Context\ApplicationContext',
            'Hyperf\Utils\Arr' => 'Hyperf\Collection\Arr',
            'Hyperf\Utils\Backoff' => 'Hyperf\Support\Backoff',
            'Hyperf\Utils\ChannelPool' => 'Hyperf\Coroutine\Channel\Pool',
            'Hyperf\Utils\ClearStatCache' => 'Hyperf\Support\ClearStatCache',
            'Hyperf\Utils\Collection' => 'Hyperf\Collection\Collection',
            'Hyperf\Utils\Composer' => 'Hyperf\Support\Composer',
            'Hyperf\Utils\Coroutine' => 'Hyperf\Coroutine\Coroutine',
            'Hyperf\Utils\Fluent' => 'Hyperf\Support\Fluent',
            'Hyperf\Utils\HigherOrderCollectionProxy' => 'Hyperf\Collection\HigherOrderCollectionProxy',
            'Hyperf\Utils\HigherOrderTapProxy' => 'Hyperf\Tappable\HigherOrderTapProxy',
            'Hyperf\Utils\InteractsWithTime' => 'Hyperf\Support\Traits\InteractsWithTime',
            'Hyperf\Utils\IPReader' => 'Hyperf\Support\IPReader',
            'Hyperf\Utils\MessageBag' => 'Hyperf\Support\MessageBag',
            'Hyperf\Utils\MimeTypeExtensionGuesser' => 'Hyperf\Support\MimeTypeExtensionGuesser',
            'Hyperf\Utils\Network' => 'Hyperf\Support\Network',
            'Hyperf\Utils\Optional' => 'Hyperf\Support\Optional',
            'Hyperf\Utils\Parallel' => 'Hyperf\Coroutine\Parallel',
            'Hyperf\Utils\Pipeline' => 'Hyperf\Pipeline\Pipeline',
            'Hyperf\Utils\Pluralizer' => 'Hyperf\Support\Pluralizer',
            'Hyperf\Utils\ResourceGenerator' => 'Hyperf\Support\ResourceGenerator',
            'Hyperf\Utils\SafeCaller' => 'Hyperf\Support\SafeCaller',
            'Hyperf\Utils\Str' => 'Hyperf\Stringable\Str',
            'Hyperf\Utils\Stringable' => 'Hyperf\Stringable\Stringable',
            'Hyperf\Utils\System' => 'Hyperf\Support\System',
            'Hyperf\Utils\Waiter' => 'Hyperf\Coroutine\Waiter',
            'Hyperf\Utils\WaitGroup' => 'Hyperf\Coroutine\WaitGroup',
        ]);

    $rectorConfig
        ->ruleWithConfiguration(RenameFunctionRector::class, [
            // hyperf/config
            'config' => 'Hyperf\Config\config',

            // hyperf/collection
            'collect' => 'Hyperf\Collection\collect',
            'data_fill' => 'Hyperf\Collection\data_fill',
            'data_get' => 'Hyperf\Collection\data_get',
            'data_set' => 'Hyperf\Collection\data_set',
            'head' => 'Hyperf\Collection\head',
            'last' => 'Hyperf\Collection\last',

            // hyperf/continue
            'co' => 'Hyperf\Coroutine\co',
            'defer' => 'Hyperf\Coroutine\defer',
            'go' => 'Hyperf\Coroutine\go',
            'parallel' => 'Hyperf\Coroutine\parallel',
            'run' => 'Hyperf\Coroutine\run',
            'wait' => 'Hyperf\Coroutine\wait',

            // hyperf/tappable
            'tap' => 'Hyperf\Tappable\tap',

            // hyperf/translation
            '__' => 'Hyperf\Translation\__',
            'trans' => 'Hyperf\Translation\trans',
            'trans_choice' => 'Hyperf\Translation\trans_choice',

            // hyperf/utils
            'value' => 'Hyperf\Support\value',
            'env' => 'Hyperf\Support\env',
            'retry' => 'Hyperf\Support\retry',
            'with' => 'Hyperf\Support\with',
            'call' => 'Hyperf\Support\call',
            'class_basename' => 'Hyperf\Support\class_basename',
            'trait_uses_recursive' => 'Hyperf\Support\trait_uses_recursive',
            'class_uses_recursive' => 'Hyperf\Support\class_uses_recursive',
            'setter' => 'Hyperf\Support\setter',
            'getter' => 'Hyperf\Support\getter',
            'make' => 'Hyperf\Support\make',
            'swoole_hook_flags' => 'Hyperf\Support\swoole_hook_flags',
            'optional' => 'Hyperf\Support\optional',
        ]);

    $rectorConfig->ruleWithConfiguration(RenameMethodRector::class, [
        new MethodCallRename('Hyperf\Dag\Dag', 'checkCircularDependences', 'checkCircularDependencies'),
        // new MethodCallRename('Hyperf\DbConnection\Connection', 'isTransaction', 'transactionLevel'),
        new MethodCallRename('Hyperf\Testing\Client', 'init', 'initRequest'),
        new MethodCallRename('Hyperf\Cache\CacheListenerCollector', 'getListner', 'getListener'),
    ]);
};
