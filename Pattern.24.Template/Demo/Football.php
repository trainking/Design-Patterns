<?php

namespace Demo;

class Football extends Game
{
    public function initialize()
    {
        echo __CLASS__." initialize.\n";
    }

    public function start()
    {
        echo __CLASS__." start.\n";
    }

    public function end()
    {
        echo __CLASS__." end.\n";
    }
}