<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8464f195facf523671fc7962d77cea19
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8464f195facf523671fc7962d77cea19::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8464f195facf523671fc7962d77cea19::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8464f195facf523671fc7962d77cea19::$classMap;

        }, null, ClassLoader::class);
    }
}