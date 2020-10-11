<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2857c6e7dff81628a45c4f89b3f2f77f
{
    public static $prefixLengthsPsr4 = array (
        'Z' => 
        array (
            'Zigaform\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Zigaform\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Zigaform\\Admin\\List_data' => __DIR__ . '/../..' . '/includes/admin/class-admin-list.php',
        'Zigaform\\Template' => __DIR__ . '/../..' . '/includes/class-template.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2857c6e7dff81628a45c4f89b3f2f77f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2857c6e7dff81628a45c4f89b3f2f77f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2857c6e7dff81628a45c4f89b3f2f77f::$classMap;

        }, null, ClassLoader::class);
    }
}
