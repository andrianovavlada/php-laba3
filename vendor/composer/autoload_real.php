<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf66fa14e98a46f0ded9078862172e816
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

        spl_autoload_register(array('ComposerAutoloaderInitf66fa14e98a46f0ded9078862172e816', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf66fa14e98a46f0ded9078862172e816', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf66fa14e98a46f0ded9078862172e816::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}