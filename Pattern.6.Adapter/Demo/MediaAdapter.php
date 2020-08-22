<?php

namespace Demo;

use Demo\MediaPlayer;
use Demo\VlcPlayer;
use Demo\Mp4Player;

class MediaAdapter implements MediaPlayer
{
    private $advanceMediaPlayer;

    public function __construct($audioType)
    {
        if ($audioType == "VLC") {
            $this->advanceMediaPlayer = new VlcPlayer();
        } elseif ($audioType == "MP4") {
            $this->advanceMediaPlayer = new Mp4Player();
        } else {
            throw new \Exception("not found Player!error audioType.");
        }
    }

    public function play($audioType, $fileName)
    {
        if ($audioType == "VLC") {
            $this->advanceMediaPlayer->playVlc($fileName);
        } elseif ($audioType == "MP4") {
            $this->advanceMediaPlayer->playMp4($fileName);
        } else {
            throw new \Exception("not found Player!error audioType.");
        }
    }
}