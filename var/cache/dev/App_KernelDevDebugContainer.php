<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOycw7wM\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOycw7wM/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOycw7wM.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOycw7wM\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOycw7wM\App_KernelDevDebugContainer([
    'container.build_hash' => 'Oycw7wM',
    'container.build_id' => '6396d373',
    'container.build_time' => 1713724986,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOycw7wM');
