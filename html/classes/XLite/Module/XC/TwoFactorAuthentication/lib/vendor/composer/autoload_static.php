<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite47f4e1d7513b7b892d909ec0e63f094
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'megastruktur\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'megastruktur\\' => 
        array (
            0 => __DIR__ . '/..' . '/megastruktur/phone-country-codes/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite47f4e1d7513b7b892d909ec0e63f094::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite47f4e1d7513b7b892d909ec0e63f094::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite47f4e1d7513b7b892d909ec0e63f094::$classMap;

        }, null, ClassLoader::class);
    }
}
