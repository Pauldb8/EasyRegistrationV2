<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 9/12/2017
 * Time: 2:10 PM
 */
function autoload($classname)
{
    if (file_exists($file = __DIR__ . '/' . $classname . '.php'))
    {
        require $file;
    }
}

spl_autoload_register('autoload');