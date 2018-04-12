<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf57d7a27160714f0d2afcc6878c38bfa
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf57d7a27160714f0d2afcc6878c38bfa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf57d7a27160714f0d2afcc6878c38bfa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
