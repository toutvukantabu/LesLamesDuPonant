<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerXgxvAGP\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerXgxvAGP/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerXgxvAGP.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerXgxvAGP\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerXgxvAGP\App_KernelDevDebugContainer([
    'container.build_hash' => 'XgxvAGP',
    'container.build_id' => 'ef1486ab',
    'container.build_time' => 1600778700,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerXgxvAGP');
