<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerYuUxd2P\srcApp_KernelEnvDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerYuUxd2P/srcApp_KernelEnvDebugContainer.php') {
    touch(__DIR__.'/ContainerYuUxd2P.legacy');

    return;
}

if (!\class_exists(srcApp_KernelEnvDebugContainer::class, false)) {
    \class_alias(\ContainerYuUxd2P\srcApp_KernelEnvDebugContainer::class, srcApp_KernelEnvDebugContainer::class, false);
}

return new \ContainerYuUxd2P\srcApp_KernelEnvDebugContainer([
    'container.build_hash' => 'YuUxd2P',
    'container.build_id' => '6102433c',
    'container.build_time' => 1614858971,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerYuUxd2P');
