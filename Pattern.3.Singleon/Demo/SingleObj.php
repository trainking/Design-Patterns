<?php

namespace Demo;

class SingleObj
{
    private static $instance = null;
    private function __construct() {}

    public static function getInstance()
    {
        if (self::$instance instanceof self) {
            return self::$instance;
        }
        // PHP原生不支持多线程的，如果使用多线程框架，这里得加锁
        self::$instance = new self();
        return self::$instance;
    }

    public function hello()
    {
        echo "hello,I am Single.\n";
    }
}