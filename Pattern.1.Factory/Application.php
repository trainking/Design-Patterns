<?php

use Demo\ShapeFactory;

class Application 
{
    public static function main() 
    {
        self::registe();
        $factory = new ShapeFactory();
        $_ins = $factory->getShape("CIRCLE");
        $_ins->draw();
        $_ins = $factory->getShape("SQUARE");
        $_ins->draw();
        $_ins = $factory->getShape("RECTANGLE");
        $_ins->draw();
        $_ins = $factory->getShape("");
        $_ins->draw();
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