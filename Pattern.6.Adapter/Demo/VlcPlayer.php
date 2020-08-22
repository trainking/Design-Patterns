<?php

namespace Demo;

use Demo\AdvanceMediaPlayer;

class VlcPlayer implements AdvanceMediaPlayer
{
    public function playVlc($fileName)
    {
        echo "Broadcast VLC: ".$fileName."\n";
    }

    public function playMp4($fileName)
    {
        // nothing to do.
    }
}