<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerEhcmzxw\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerEhcmzxw/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerEhcmzxw.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerEhcmzxw\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerEhcmzxw\appProdProjectContainer([
    'container.build_hash' => 'Ehcmzxw',
    'container.build_id' => 'c7861b11',
    'container.build_time' => 1577796335,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerEhcmzxw');
