<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit042e500768e702c7cca6faea04a4242b
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Console\\' => 26,
            'SensioLabs\\Security\\' => 20,
        ),
        'C' => 
        array (
            'Composer\\CaBundle\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'SensioLabs\\Security\\' => 
        array (
            0 => __DIR__ . '/..' . '/sensiolabs/security-checker/SensioLabs/Security',
        ),
        'Composer\\CaBundle\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/ca-bundle/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit042e500768e702c7cca6faea04a4242b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit042e500768e702c7cca6faea04a4242b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}