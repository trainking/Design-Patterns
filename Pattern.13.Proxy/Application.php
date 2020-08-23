<?php

use Demo\Cricle;
use Demo\ShapeProxy;

class Application
{
    public static function main()
    {
        self::registe();

        $obj = new Cricle();
        $_encode = serialize($obj);  // 模拟编码

        // 模拟proxy接收
        $_g_obj = new ShapeProxy($_encode);
        $_g_obj->draw();
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