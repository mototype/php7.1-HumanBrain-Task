<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf244307907891eb4ea28cad13c05b352
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf244307907891eb4ea28cad13c05b352::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf244307907891eb4ea28cad13c05b352::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
