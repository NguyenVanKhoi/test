<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitefca39b642ad101e3d27a6ee1690e5de
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitefca39b642ad101e3d27a6ee1690e5de', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitefca39b642ad101e3d27a6ee1690e5de', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitefca39b642ad101e3d27a6ee1690e5de::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
