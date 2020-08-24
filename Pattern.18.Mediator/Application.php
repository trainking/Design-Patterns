<?php

use Demo\User;

class Application
{
    public static function main()
    {
        self::registe();

        $u1 = new User("张三");
        $u1->sendMessage("hello");

        $u1 = new User("李四");
        $u1->sendMessage("hello");

        $u1 = new User("楼上两个傻逼");
        $u1->sendMessage("哈哈你麻痹");
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