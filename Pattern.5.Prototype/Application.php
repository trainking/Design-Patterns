<?php

use Demo\ShapeCache;

class Application 
{
    public static function main() 
    {
        self::registe();

        ShapeCache::loadCache();

        $_c1 = ShapeCache::getShape("1");
        $_c1->draw();
        $_c1 = ShapeCache::getShape("2");
        $_c1->draw();

        $_c1 = ShapeCache::getShape("3");
        $_c1->draw();
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