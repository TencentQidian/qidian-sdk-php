<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit44597e17216ea61d175e07e76dd520ef
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TencentQidian\\App\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TencentQidian\\App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit44597e17216ea61d175e07e76dd520ef::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit44597e17216ea61d175e07e76dd520ef::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
