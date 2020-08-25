<?php

namespace Demo;

use Demo\Strategy;

class OperationDiv implements Strategy
{
    public function doOperation(int $x, int $y)
    {
        if ($y == 0) 
        {
            throw new \Exception("y is not 0.for div!");
        }
        return $x / $y;
    }
}