<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita2244010bcf50258adbf303ab5efe848
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita2244010bcf50258adbf303ab5efe848::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita2244010bcf50258adbf303ab5efe848::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita2244010bcf50258adbf303ab5efe848::$classMap;

        }, null, ClassLoader::class);
    }
}
