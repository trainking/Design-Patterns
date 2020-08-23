<?php

use Demo\ShapeFactory;

class Application
{
    public static function main()
    {
        self::registe();

        $factory = new ShapeFactory();
        $obj = $factory->getCricle("red");
        $obj->draw();

        $obj = $factory->getCricle("blue");
        $obj->draw();

        $obj = $factory->getCricle("red");
        $obj->draw();
    }

    public static function registe()
    {
        spl_autoload_register("Application::loadClass");
    }

    public static function loadClass($class)
    {
        $base_dir = __DIR__;
        $class = str_replace('\\', '/', $class);
        $class = $base_dir."/".$class.'.php';

        // 判断文件是否存在，用require效率更高
        if (file_exists($class)) {
            require $class;
        }
    }
}

Application::main();