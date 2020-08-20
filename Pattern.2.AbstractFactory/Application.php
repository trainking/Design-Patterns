<?php

use Demo\FactoryProducer;

class Application 
{
    public static function main() 
    {
        self::registe();
        $factory = FactoryProducer::getFactory("SHAPE");
        $_ins = $factory->getShape("CIRCLE");
        $_ins->draw();
        $_ins = $factory->getShape("SQUARE");
        $_ins->draw();
        $_ins = $factory->getShape("RECTANGLE");
        $_ins->draw();
        $factory = FactoryProducer::getFactory("COLOR");
        $_ins = $factory->getColor("RED");
        $_ins->fill();
        $_ins = $factory->getColor("GREEN");
        $_ins->fill();
        $_ins = $factory->getColor("BLUE");
        $_ins->fill();
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