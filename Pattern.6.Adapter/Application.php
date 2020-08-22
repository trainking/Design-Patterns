<?php

use Demo\AudioPlayer;

class Application
{
    public static function main()
    {
        self::registe();

        $o = new AudioPlayer();
        $o->play("VLC", "gggvlc.vlc");

        $o->play("MP4", "gggmp4.mp4");
    }

    public static function registe()
    {
        spl_autoload_register("Application::loadClass");
    }

    public static function loadClass($class)
    {
        $class = str_replace('\\', '/', $class);
        $class = './'.$class.'.php';
        require_once $class;
    }
}
Application::main();