<?php

namespace Demo;

use Demo\Observer;

class HexaObserver extends Observer
{
    
    public function update()
    {
        echo __CLASS__.": ".$this->subject->getState()."\n";
    }
}