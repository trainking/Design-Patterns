<?php

namespace Demo;

use Demo\MediaPlayer;
use Demo\MediaAdapter;

class AudioPlayer implements MediaPlayer
{

    public function play($audioType, $fileName)
    {
        (new MediaAdapter($audioType))->play($audioType, $fileName);
    }
}