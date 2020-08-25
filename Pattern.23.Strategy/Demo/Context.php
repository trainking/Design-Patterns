<?php

namespace Demo;

use Demo\Strategy;

class Context
{
    private $strategy;

    public function __construct(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStategy(Strategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function exec(int $x, int $y)
    {
        return $this->strategy->doOperation($x, $y);
    }
}