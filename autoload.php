<?php

class AutoLoader
{

    public static function AutoLoad($className)
    {
        $className = ltrim($className, '\\');
        $fileName = '';

        if ($lastNsPos = strrpos($className, '\\')) {
            $namespace = substr($className, 0, $lastNsPos);
            $className = substr($className, $lastNsPos + 1);
            $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
        }
        $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

        /** @noinspection PhpIncludeInspection */
        require __DIR__.DIRECTORY_SEPARATOR.$fileName;
    }

    /**
* Register automatic class loader with SPL
*/
    public static function register()
    {
        spl_autoload_register(array('AutoLoader', 'AutoLoad'));
    }
}
