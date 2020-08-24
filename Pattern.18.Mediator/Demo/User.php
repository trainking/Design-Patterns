<?php

namespace Demo;

use Demo\ChatRom;

class User
{
    private $name = null;

    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function sendMessage(string $message)
    {
        ChatRom::showMessage($this, $message);
    }
}