<?php

use Demo\Persion;
use Demo\NameCriteria;
use Demo\AgeCriteria;

class Application
{
    public static function main()
    {
        self::registe();
        
        $p_list = [
            new Persion("Dalao", 101, "Player"),
            new Persion("Fuyou", 99, "Admin"),
            new Persion("Jimmly", 21, "Student"),
            new Persion("Hal", 7, "Pihai"),
        ];

        $criteria = new NameCriteria();
        print_r($criteria->filtterPersion($p_list));

        $criteria = new AgeCriteria();
        print_r($criteria->filtterPersion($p_list));
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