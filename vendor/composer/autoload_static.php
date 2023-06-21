<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0a1380400ddc7aef9d2f51bbb84cefd7
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit0a1380400ddc7aef9d2f51bbb84cefd7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit0a1380400ddc7aef9d2f51bbb84cefd7::$classMap;

        }, null, ClassLoader::class);
    }
}