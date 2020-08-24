<?php

namespace Demo;

use Demo\Memento;

class Originator
{
    private $state;

    public function setState($state)
    {
        $this->state = $state;
    }

    public function getState()
    {
        return $this->state;
    }

    public function save2Memento()
    {
        return new Memento($this->state);
    }

    public function getStateFromMemento($memento)
    {
        $this->state = $memento->getState();
    }
}