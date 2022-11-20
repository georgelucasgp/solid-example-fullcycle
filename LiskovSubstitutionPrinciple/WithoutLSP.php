<?php

class Movie
{
    public function play()
    {
        //play movie
    }

    public function increaseVolume()
    {
    }
}

class TheLionKing extends Movie
{
}

class ModerTimes extends Movie
{
    public function increaseVolume()
    {
        //putz
    }
}
