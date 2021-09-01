<?php

require_once 'CreateSquareInConsole.php';
require_once 'CreateSquareInPng.php';
require_once 'CreateSquareInTxt.php';
require_once 'DrawSquare.php';

$createTxtSquare = new CreateSquareInTxt();
$createPngSquare = new CreateSquareInPng();
$createConsoleSquare = new CreateSquareInConsole();

return (new DrawSquare(5, 5, $createTxtSquare))->draw();
?>
