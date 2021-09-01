<?php

class DrawSquare
{

    private $width;
    private $height;
    private $createSquare;

    public function __construct(int $width, int $height, CreateSquare $createSquare)
    {
        $this->width = $width;
        $this->height = $height;
        $this->createSquare = $createSquare;
    }

    public function draw()
    {
        return $this->createSquare->drawSquare($this->width, $this->height);
    }
}