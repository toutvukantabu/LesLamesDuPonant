<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8qYSiHy\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8qYSiHy/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container8qYSiHy.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container8qYSiHy\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container8qYSiHy\App_KernelDevDebugContainer([
    'container.build_hash' => '8qYSiHy',
    'container.build_id' => 'fbe420d6',
    'container.build_time' => 1598191765,
], __DIR__.\DIRECTORY_SEPARATOR.'Container8qYSiHy');
