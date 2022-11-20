<?php

class Video
{
    private $type;

    public function calculateInterest()
    {
        if ($this->type == 'Movie') {
            //calculate interest for movie
        } elseif ($this->type == 'TVShow') {
            //calculate interest for TVShow
        }
    }
}
