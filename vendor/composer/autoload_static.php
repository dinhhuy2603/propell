<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec87c8fc17f1afa388f2a936a6bb4172
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitec87c8fc17f1afa388f2a936a6bb4172::$classMap;

        }, null, ClassLoader::class);
    }
}
