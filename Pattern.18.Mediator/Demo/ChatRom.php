<?php

namespace Demo;

use Demo\User;

class ChatRom
{
    public static function showMessage(User $user, string $msg)
    {
        echo "->".$user->getName().": ".$msg."\n";
    }
}