<?php
$stringNumeros = $argv[1];
function transformar_em_lista($stringNumeros) {
    $numeros = explode(" ", $stringNumeros);
    $numerosInteiros = array_map('intval', $numeros);
    return $numerosInteiros;
}

$numeros = transformar_em_lista($stringNumeros);
var_dump($numeros);

?>