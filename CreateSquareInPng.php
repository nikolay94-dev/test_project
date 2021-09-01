<?php

class CreateSquareInPng implements CreateSquare
{

    public function drawSquare(int $width, int $height)
    {

        // Не успеваю)) примерный код отрисовки картинкой
        $img = imagecreatetruecolor($width, $height);

        $rgb = 0xFFFFFF;

        imagefill($img, 0, 0, $rgb);

        $red = imagecolorallocate($img, 255, 0, 0);
        $green = imagecolorallocate($img, 0, 255, 0);
        $blue = imagecolorallocate($img, 0, 0, 255);

        imagesetthickness($img, 3);

        $x1 = 20; $y1 = 40; $x2 = 150; $y2 = 90;
        imagerectangle($img, $x1, $y1, $x2, $y2, $red);

        $x1 = 20; $y1 = 110; $x2 = 150; $y2 = 160;
        imagefilledrectangle($img, $x1, $y1, $x2, $y2, $green);

        $x1 = 60; $y1 = 180; $x2 = 110; $y2 = 230;
        imagefilledrectangle($img, $x1, $y1, $x2, $y2, $blue);

        header("Content-Type: image/png");
        imagepng($img);
        imagedestroy($img);
    }
}