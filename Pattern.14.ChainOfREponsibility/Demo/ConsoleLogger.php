<?php

namespace Demo;

use Demo\AbstractLogger;

class ConsoleLogger extends AbstractLogger
{

    public function __construct($level)
    {
        parent::__construct($level);
    }

    public function logMessage($level, $message)
    {
        if ($this->level < $level)
        {
            $this->write($message);
        }

        if ($this->nextLogger != null)
        {
            $this->nextLogger->logMessage($level, $message);
        }
    }

    protected function write($message)
    {
        echo __CLASS__.": ".$message."\n";
    }
}