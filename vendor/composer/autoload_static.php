<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6b405389f6cf5c755d254844d9939af5
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Module\\' => 7,
        ),
        'C' => 
        array (
            'Control\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Module\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
        'Control\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6b405389f6cf5c755d254844d9939af5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6b405389f6cf5c755d254844d9939af5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
