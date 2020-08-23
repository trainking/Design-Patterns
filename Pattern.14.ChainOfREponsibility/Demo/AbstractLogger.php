<?php

namespace Demo;

abstract class AbstractLogger
{
    const INFO = 1;
    const DEBUG = 2;
    const ERROR = 3;

    protected $level;
    protected $nextLogger;

    public function __construct($level)
    {
        $this->level = $level;
    }

    public function setNextLogger(AbstractLogger $nextLogger)
    {
        $this->nextLogger = $nextLogger;
    }

    abstract function logMessage($level, $message);

    abstract protected function write($message);
}