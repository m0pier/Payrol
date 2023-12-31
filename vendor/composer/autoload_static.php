<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39f9aac263a33488fc280fdac8f894d3
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\Pagos\\modelo\\' => 17,
            'App\\Pagos\\controlador\\' => 22,
            'App\\Pagos\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\Pagos\\modelo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/modelo',
        ),
        'App\\Pagos\\controlador\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controlador',
        ),
        'App\\Pagos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit39f9aac263a33488fc280fdac8f894d3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit39f9aac263a33488fc280fdac8f894d3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit39f9aac263a33488fc280fdac8f894d3::$classMap;

        }, null, ClassLoader::class);
    }
}
