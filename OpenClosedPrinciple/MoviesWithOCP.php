<?php

// Open/Closed Principle - You should be able to extend a behavior of a class without the need to modify it.

abstract class Video
{
    abstract public function calculateInterest();
}

class Movie extends Video
{
    public function calculateInterest()
    {
        //calculate interest for movie
    }
}

class TVShow extends Video
{
    public function calculateInterest()
    {
        //calculate interest for TVShow
    }
}
