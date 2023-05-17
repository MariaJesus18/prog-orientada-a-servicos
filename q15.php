<?php
$numeros = intval($argv[1]);
function calcular_media($numeros) {
    $soma = array_sum($numeros);
    $quantidade = count($numeros);
    $media = $soma / $quantidade;
    return $media;
}

$numeros = array_slice($argv, 1);

$numerosFloat = array_map('floatval', $numeros);

// Calcula a média
$media = calcular_media($numerosFloat);
var_dump($media);

?>