<?php

use Demo\Context;
use Demo\OperationAdd;
use Demo\OperationSub;
use Demo\OperationMul;
use Demo\OperationDiv;

class Application
{
    public static function main()
    {
        self::registe();

        $context = new Context(new OperationAdd());
        echo "Add: ".$context->exec(1, 3). "\n";

        $context->setStategy(new OperationSub());
        echo "Sub: ".$context->exec(1, 3). "\n";

        $context->setStategy(new OperationMul());
        echo "Mul: ".$context->exec(1, 3). "\n";

        $context->setStategy(new OperationDiv());
        echo "Div: ".$context->exec(1, 3). "\n";
        
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