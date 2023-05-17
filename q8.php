<?php

    $inicio1 = intval($argv[1]);
    $fim1 =intval($argv[2]);
    $inicio2 = intval($argv[3]);
    $fim2 = intval($argv[4]);

function verificar_conflito($inicio1, $fim1, $inicio2, $fim2) {
    
    if ($inicio1 < $fim2 && $inicio2 < $fim1) {
        return false; // Há conflito
    } else {
        return true; // Não há conflito
    }
}

$conflito = verificar_conflito($inicio1, $fim1, $inicio2, $fim2);
var_dump($conflito);

?>