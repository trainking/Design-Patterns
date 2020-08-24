<?php

namespace Demo;

use Demo\Command;

class Execute
{
    private $command;

    public function __construct(Command $command)
    {
        $this->command = $command;
    }

    public function exeDo()
    {
        $this->command->try();
        $this->command->do();
        $this->command->commit();
    }

    public function exeUndo()
    {
        $this->command->try();
        $this->command->do();
        $this->command->cancel();
    }
}