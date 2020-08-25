<?php

namespace Demo;

use Demo\State;
use Demo\Context;

class StartState implements State
{

    public function doAction(Context $context)
    {
        echo "StartState-->doAction: \n";
        $context->setState($this);
    }

    public function __toString()
    {
        return "StartState";
    }
}