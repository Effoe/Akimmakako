<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFKNCoTx\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFKNCoTx/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerFKNCoTx.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerFKNCoTx\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerFKNCoTx\appAppKernelProdContainer([
    'container.build_hash' => 'FKNCoTx',
    'container.build_id' => '0e272f0b',
    'container.build_time' => 1720796606,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFKNCoTx');
