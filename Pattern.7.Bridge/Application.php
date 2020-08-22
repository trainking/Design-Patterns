<?php

use Demo\Circle;
use Demo\RedCircle;
use Demo\GreenCircle;

class Application
{
    public static function main()
    {
        self::registe();
        
        $c = new Circle(3,4, new RedCircle());
        $c->draw();

        $c = new Circle(3,4, new GreenCircle());
        $c->draw();
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