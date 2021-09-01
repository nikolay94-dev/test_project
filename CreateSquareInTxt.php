<?php

class CreateSquareInTxt extends CreateSquareAsText
{

    public function drawSquare(int $width, int $height)
    {
        // Не успеваю)) примерный код отрисовки в txt
        $filename = 'somefile.txt';
        $text = $this->createSquareText($width, $height);

        file_put_contents($filename, $text);

        $text = file_get_contents($filename);
    }
}