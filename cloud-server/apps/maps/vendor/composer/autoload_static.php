<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbabf4be7dede4c978790d4ec4ba5b8aa
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lsolesen\\pel\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lsolesen\\pel\\' => 
        array (
            0 => __DIR__ . '/..' . '/lsolesen/pel/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbabf4be7dede4c978790d4ec4ba5b8aa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbabf4be7dede4c978790d4ec4ba5b8aa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
