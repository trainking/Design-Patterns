<?php

namespace Demo;

use Demo\Observer;

class BinaryObserver extends Observer
{
    
    public function update()
    {
        echo __CLASS__.": ".$this->subject->getState()."\n";
    }
}