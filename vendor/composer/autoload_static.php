<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitafaf372ac133e1a59308b8737af5eec3
{
    public static $prefixesPsr0 = array (
        'u' => 
        array (
            'utils' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
        ),
        's' => 
        array (
            'service' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
        ),
        'r' => 
        array (
            'repository' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
        ),
        'm' => 
        array (
            'model' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
        ),
        'l' => 
        array (
            'loader' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
        ),
        'f' => 
        array (
            'factory' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
        ),
        'e' => 
        array (
            'exception' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
            'entity' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
        ),
        'c' => 
        array (
            'controller' => 
            array (
                0 => __DIR__ . '/../..' . '/src/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitafaf372ac133e1a59308b8737af5eec3::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
