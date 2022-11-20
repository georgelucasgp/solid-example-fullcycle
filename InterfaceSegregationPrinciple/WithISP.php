<?php

interface Movie
{
    public function play();
}

interface AudioControl
{
    public function increaseVolume();
}

class TheLionKing implements Movie, AudioControl
{
    public function play()
    {
        //play movie
    }

    public function increaseVolume()
    {
        //increase volume
    }
}

class ModerTimes implements Movie
{
    public function play()
    {
        //play movie
    }
}
