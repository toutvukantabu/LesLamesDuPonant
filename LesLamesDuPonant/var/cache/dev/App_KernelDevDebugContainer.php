<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerQ8x7phH\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerQ8x7phH/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerQ8x7phH.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerQ8x7phH\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerQ8x7phH\App_KernelDevDebugContainer([
    'container.build_hash' => 'Q8x7phH',
    'container.build_id' => 'ef94be30',
    'container.build_time' => 1598544638,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerQ8x7phH');
