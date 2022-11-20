<?php

// Liskov's principle of substitution - Derived classes must be substitutable for their base classes.

class Movie
{
    public function play()
    {
    }

    public function increaseVolume()
    {
    }
}

class MovieWithoutSound
{
    public function play()
    {
        //play movie
    }
}


class ModerTimes extends MovieWithoutSound
{
    public function play()
    {
        //play movie
    }
}


class TheLionKing extends Movie
{
    public function play()
    {
    }

    public function increaseVolume()
    {
    }
}
