<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOBrTMex\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOBrTMex/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOBrTMex.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOBrTMex\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerOBrTMex\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'OBrTMex',
    'container.build_id' => '807e4106',
    'container.build_time' => 1614874571,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOBrTMex');
