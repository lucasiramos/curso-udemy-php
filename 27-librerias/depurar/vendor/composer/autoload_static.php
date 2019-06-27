<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7fce3ba0ef65677705af3f292a0fc6e2
{
    public static $classMap = array (
        'FB' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/fb.php',
        'FirePHP' => __DIR__ . '/..' . '/firephp/firephp-core/lib/FirePHPCore/FirePHP.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit7fce3ba0ef65677705af3f292a0fc6e2::$classMap;

        }, null, ClassLoader::class);
    }
}
