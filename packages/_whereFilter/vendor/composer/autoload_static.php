<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit11f32059ab3e347f4e481f6a5c82cd69
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vendor\\WhereableFilter\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vendor\\WhereableFilter\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit11f32059ab3e347f4e481f6a5c82cd69::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit11f32059ab3e347f4e481f6a5c82cd69::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit11f32059ab3e347f4e481f6a5c82cd69::$classMap;

        }, null, ClassLoader::class);
    }
}