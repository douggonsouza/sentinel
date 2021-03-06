<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7dcce446b616e42e95bf2832fb13a0a2
{
    public static $prefixLengthsPsr4 = array (
        'd' => 
        array (
            'douggonsouza\\propertys\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'douggonsouza\\propertys\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'douggonsouza\\propertys\\propertys' => __DIR__ . '/../..' . '/src/propertys.php',
        'douggonsouza\\propertys\\propertysInterface' => __DIR__ . '/../..' . '/src/propertysInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7dcce446b616e42e95bf2832fb13a0a2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7dcce446b616e42e95bf2832fb13a0a2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7dcce446b616e42e95bf2832fb13a0a2::$classMap;

        }, null, ClassLoader::class);
    }
}
