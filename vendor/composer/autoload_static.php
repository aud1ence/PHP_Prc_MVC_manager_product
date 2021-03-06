<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1eb81a711b8f98e276bd800f58777f9c
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\services\\' => 13,
            'App\\models\\' => 11,
            'App\\controllers\\' => 16,
            'App\\Middleware\\' => 15,
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\services\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/services',
        ),
        'App\\models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/models',
        ),
        'App\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/controllers',
        ),
        'App\\Middleware\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/middleware',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1eb81a711b8f98e276bd800f58777f9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1eb81a711b8f98e276bd800f58777f9c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
