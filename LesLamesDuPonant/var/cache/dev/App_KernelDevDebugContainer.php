<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFYSaQzx\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFYSaQzx/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerFYSaQzx.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerFYSaQzx\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerFYSaQzx\App_KernelDevDebugContainer([
    'container.build_hash' => 'FYSaQzx',
    'container.build_id' => '2ce11b2f',
    'container.build_time' => 1596575182,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFYSaQzx');
