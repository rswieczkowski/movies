<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerRrEJAeF\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerRrEJAeF/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerRrEJAeF.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerRrEJAeF\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerRrEJAeF\App_KernelDevDebugContainer([
    'container.build_hash' => 'RrEJAeF',
    'container.build_id' => '28d2477a',
    'container.build_time' => 1678951396,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerRrEJAeF');
