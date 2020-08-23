<?php

use Demo\AbstractLogger;
use Demo\ConsoleLogger;
use Demo\FileLogger;
use Demo\ErrorLogger;

class Application
{
    public static function main()
    {
        self::registe();

        $logger = self::getLogger();
        $logger->logMessage(AbstractLogger::INFO, "一般般");
        $logger->logMessage(AbstractLogger::DEBUG, "洒洒水");
        $logger->logMessage(AbstractLogger::ERROR, "42 乌拉！");

    }

    public static function getLogger()
    {
        $log1 = new ConsoleLogger(AbstractLogger::INFO);
        $log2 = new FileLogger(AbstractLogger::DEBUG);
        $log3 = new ErrorLogger(AbstractLogger::ERROR);
        
        $log1->setNextLogger($log2);
        $log2->setNextLogger($log3);
        return $log1;
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