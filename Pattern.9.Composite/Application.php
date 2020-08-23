<?php

use Demo\Employee;

class Application
{
    public static function main()
    {
        self::registe();
        $ceo = new Employee("张三", 28, 1);
        $cfo = new Employee("王丽", 45, 2);
        $coo = new Employee("马云", 17, 1);

        $ceo->add($cfo);
        $ceo->add($coo);

        print($ceo);
        $ceo->remove($coo);
        print($ceo);
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