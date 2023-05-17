<?php

$n = intval($argv[1]);
function calcular_fibonacci($n) {
    if ($n == 1 || $n == 2) {
        return 1;
    } else {
        $fibonacci = [1, 1]; // Armazena os dois primeiros elementos da sequência

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }
        return $fibonacci[$n - 1];
    }
}

$termo = calcular_fibonacci($n);
var_dump($termo);

?>