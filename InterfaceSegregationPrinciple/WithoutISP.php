<?php

interface Movie
{
    public function play();

    public function increaseVolume();
}


class TheLionKing implements Movie
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

    public function increaseVolume()
    {
        //this method will not be used, but will have to be implemented
    }
}
