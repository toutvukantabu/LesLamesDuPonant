<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerK18fGoN\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerK18fGoN/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerK18fGoN.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerK18fGoN\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerK18fGoN\App_KernelDevDebugContainer([
    'container.build_hash' => 'K18fGoN',
    'container.build_id' => 'b04afe4d',
    'container.build_time' => 1599054559,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerK18fGoN');
