<?php

use Demo\Game;
use Demo\Cricket;
use Demo\Football;

class Application
{
    public static function main()
    {
        self::registe();

        $game = new Cricket();
        $game->play();

        $game = new Football();
        $game->play();
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