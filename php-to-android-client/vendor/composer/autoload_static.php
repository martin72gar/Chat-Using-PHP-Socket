<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4909efb3725ac9a12a1cf2a2d17000de
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Workerman\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Workerman\\' => 
        array (
            0 => __DIR__ . '/..' . '/workerman/workerman',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4909efb3725ac9a12a1cf2a2d17000de::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4909efb3725ac9a12a1cf2a2d17000de::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit4909efb3725ac9a12a1cf2a2d17000de::$classMap;

        }, null, ClassLoader::class);
    }
}
