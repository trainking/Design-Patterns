<?php

namespace Demo;

use Demo\State;

class Context
{
    private $state;

    public function setState(State $state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }
}