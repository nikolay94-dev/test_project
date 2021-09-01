<?php

abstract class CreateSquareAsText implements CreateSquare
{

    protected function createSquareText($width, $height)
    {
        $text = '';
        for($i = 0; $i < $width; $i++) {
            $text .= "\n";
            for($z = 0; $z < $height; $z++) {
                $text .= "-";
            }
        }

        return $text;
    }
}