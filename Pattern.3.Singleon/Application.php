<?php

use Demo\SingleObj;

class Application 
{
    public static function main() 
    {
        self::registe();
        $obj = SingleObj::getInstance();
        $obj->hello();
    }

    // 注册自动加载类的方法
    public static function registe()
    {
        spl_autoload_register("Application::loadClass");
    }

    // 自动加载
    public static function loadClass($class)
    {
        $class = str_replace('\\', '/', $class);
        $class = './'.$class.'.php';
        require_once $class;
    }
}

Application::main();