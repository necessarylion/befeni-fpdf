<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticIniteb4792c0d5fc6a5b8549278473028fc7
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Befeni\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Befeni\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticIniteb4792c0d5fc6a5b8549278473028fc7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticIniteb4792c0d5fc6a5b8549278473028fc7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
