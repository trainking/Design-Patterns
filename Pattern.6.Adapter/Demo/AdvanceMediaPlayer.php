<?php

namespace Demo;

interface AdvanceMediaPlayer
{
    function playVlc($fileName);
    function playMp4($fileName);
}