<?php

namespace Demo;

use Demo\State;
use Demo\Context;

class StopState implements State
{

    public function doAction(Context $context)
    {
        echo "StopState-->doAction: \n";
        $context->setState($this);
    }

    public function __toString()
    {
        return "StopState";
    }
}