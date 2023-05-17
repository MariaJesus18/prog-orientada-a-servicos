<?php
$stringNumeros = $argv[1];
function calcular_media($stringNumeros) {
    $numeros = explode(" ", $stringNumeros);
    $numerosFloat = array_map('floatval', $numeros);
    $soma = array_sum($numerosFloat);
    $quantidade = count($numerosFloat);
    $media = $soma / $quantidade;
    return $media;
}



$media = calcular_media($stringNumeros);
var_dump($media);

?>