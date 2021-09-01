<?php

class CreateSquareInConsole extends CreateSquareAsText
{

    public function drawSquare(int $width, int $height)
    {
        return $this->createSquareText($width, $height);
    }
}