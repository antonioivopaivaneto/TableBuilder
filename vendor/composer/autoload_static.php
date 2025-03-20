<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9bb9737efe134d239a40fcbfba6db9e6
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TabelaBuilder\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TabelaBuilder\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9bb9737efe134d239a40fcbfba6db9e6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9bb9737efe134d239a40fcbfba6db9e6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9bb9737efe134d239a40fcbfba6db9e6::$classMap;

        }, null, ClassLoader::class);
    }
}
