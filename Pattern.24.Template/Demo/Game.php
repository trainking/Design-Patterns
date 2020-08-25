<?php

namespace Demo;

abstract class Game
{
    abstract function initialize();
    abstract function start();
    abstract function end();
    
    // 模板方法，共用代码抽取
    public final function play()
    {
        $this->initialize();
        $this->start();
        $this->end();
    }


}