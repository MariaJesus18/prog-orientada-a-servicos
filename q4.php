<?php

function converter_tempo_duracao($t) {
    $horas = intdiv($t, 3600);  
    $minutos = intdiv($t % 3600, 60);  
    $segundos = $t % 60;  
    
  return "{$horas}h{$minutos}m{$segundos}s";
}
$tempo_em_segundos = intval($argv[1]);
$duracao_formatada = converter_tempo_duracao($tempo_em_segundos);
var_dump($duracao_formatada);
?>