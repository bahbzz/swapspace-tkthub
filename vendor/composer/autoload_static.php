<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita9a3f8dbc5252aa14a6c2594240105da
{
    public static $classMap = array (
        'QRCode' => __DIR__ . '/..' . '/ph-7/qrcode-generator-php-class/QRCode.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInita9a3f8dbc5252aa14a6c2594240105da::$classMap;

        }, null, ClassLoader::class);
    }
}