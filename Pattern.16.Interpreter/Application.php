<?php

use Demo\OrExpression;
use Demo\AndExpression;
use Demo\TerminalExpression;


class Application
{
    public static function main()
    {
        self::registe();

        $robet = new TerminalExpression("robet");
        $john = new TerminalExpression("john");
        $is = new OrExpression($robet, $john);
        echo "john is ".$is->interpret("john")."\n";

        $robet = new TerminalExpression("Julie");
        $john = new TerminalExpression("Married");
        $is = new OrExpression($robet, $john);
        echo "Julie is ".$is->interpret("Married")."\n";
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