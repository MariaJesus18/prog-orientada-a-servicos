<?php

$x1 =  intval($argv[1]);
$y1 =  intval($argv[2]);
$x2 =  intval($argv[3]);
$y2 =  intval($argv[4]);

$diferenca_x = $x2 - $x1;
$diferenca_y = $y2 - $y1;

$distancia = sqrt(($diferenca_x ** 2) + ($diferenca_y ** 2));

var_dump($distancia);

?>