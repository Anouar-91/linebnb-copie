<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHU0eWHO\srcApp_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHU0eWHO/srcApp_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerHU0eWHO.legacy');

    return;
}

if (!\class_exists(srcApp_KernelProdContainer::class, false)) {
    \class_alias(\ContainerHU0eWHO\srcApp_KernelProdContainer::class, srcApp_KernelProdContainer::class, false);
}

return new \ContainerHU0eWHO\srcApp_KernelProdContainer([
    'container.build_hash' => 'HU0eWHO',
    'container.build_id' => '714c0995',
    'container.build_time' => 1614879254,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerHU0eWHO');