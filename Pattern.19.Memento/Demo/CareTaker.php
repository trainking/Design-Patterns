<?php

namespace Demo;

use Demo\Memento;

class CareTaker
{
    private $mementoList = [];

    public function add($memento)
    {
        array_push($this->mementoList, $memento);
    }

    public function get(int $index)
    {
        return $this->mementoList[$index];
    }
}