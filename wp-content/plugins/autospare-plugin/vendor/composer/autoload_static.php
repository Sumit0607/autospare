<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitcdb8ee2048474fbae4bf064da57460a0
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Inc\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Inc\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitcdb8ee2048474fbae4bf064da57460a0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitcdb8ee2048474fbae4bf064da57460a0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
