<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2ZZOqOj\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2ZZOqOj/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2ZZOqOj.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2ZZOqOj\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2ZZOqOj\App_KernelDevDebugContainer([
    'container.build_hash' => '2ZZOqOj',
    'container.build_id' => 'f2296de1',
    'container.build_time' => 1598126243,
], __DIR__.\DIRECTORY_SEPARATOR.'Container2ZZOqOj');
