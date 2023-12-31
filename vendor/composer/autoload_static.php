<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6308d6624a3198b6d8767fe58b79c3ee
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Fguedez\\Poo\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Fguedez\\Poo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6308d6624a3198b6d8767fe58b79c3ee::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6308d6624a3198b6d8767fe58b79c3ee::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6308d6624a3198b6d8767fe58b79c3ee::$classMap;

        }, null, ClassLoader::class);
    }
}
