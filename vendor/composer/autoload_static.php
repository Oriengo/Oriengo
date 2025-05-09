<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3fce7afb2f44779d6d91c7fc3519b8a7
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Oriengo\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Oriengo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3fce7afb2f44779d6d91c7fc3519b8a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3fce7afb2f44779d6d91c7fc3519b8a7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3fce7afb2f44779d6d91c7fc3519b8a7::$classMap;

        }, null, ClassLoader::class);
    }
}
