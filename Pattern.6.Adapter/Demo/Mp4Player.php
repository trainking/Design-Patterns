<?php

namespace Demo;

use Demo\AdvanceMediaPlayer;

class Mp4Player implements AdvanceMediaPlayer
{
    public function playVlc($fileName)
    {
        // nothing to do.
    }

    public function playMp4($fileName)
    {
        echo "Broadcast MP4: ".$fileName."\n";
    }
}