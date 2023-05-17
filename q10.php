<?php

$n = intval($argv[1]);

function calcular_fatorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        $fatorial = 1;
        for ($i = 2; $i <= $n; $i++) {
            $fatorial *= $i;
        }
        return $fatorial;
    }
}

$fatorial = calcular_fatorial($n);

var_dump($fatorial);

?>