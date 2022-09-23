<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit22d4b0f5ae013463905f084de213490c
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit22d4b0f5ae013463905f084de213490c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit22d4b0f5ae013463905f084de213490c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit22d4b0f5ae013463905f084de213490c::$classMap;

        }, null, ClassLoader::class);
    }
}
