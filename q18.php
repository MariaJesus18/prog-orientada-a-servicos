<?php
$caminhoArquivo = $argv[1];
function exibir_conteudo_arquivo($caminhoArquivo) {
    $conteudo = file_get_contents($caminhoArquivo);
    return $conteudo;
}

var_dump(exibir_conteudo_arquivo($caminhoArquivo));

?>