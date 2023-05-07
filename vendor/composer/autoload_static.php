<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c397c74e79da4db0820dd83a5db9622
{
    public static $files = array (
        'd96b417b240c26a48a88dd3f77c1f531' => __DIR__ . '/../..' . '/src/config.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'tomaszkordas\\Vimeo\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'tomaszkordas\\Vimeo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c397c74e79da4db0820dd83a5db9622::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c397c74e79da4db0820dd83a5db9622::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2c397c74e79da4db0820dd83a5db9622::$classMap;

        }, null, ClassLoader::class);
    }
}
