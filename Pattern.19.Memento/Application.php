<?php

use Demo\Originator;
use Demo\Memento;
use Demo\CareTaker;

class Application
{
    public static function main()
    {
        self::registe();

        $ori = new Originator();
        $care = new CareTaker();
        $ori->setState("State #1");
        $ori->setState("State #2");
        $care->add($ori->save2Memento());
        echo $ori->getState()."\n";
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