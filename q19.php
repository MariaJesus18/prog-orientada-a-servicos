<?php
class Pessoa {
    public $nome;
    public $idade;
    public $dependentes;

    public function __construct($nome, $idade, $dependentes) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->dependentes = $dependentes;
    }
}

$nome = $argv[1];
$idade = intval($argv[2]);
$dependentes = array_slice($argv, 3);

$pessoa = new Pessoa($nome, $idade, $dependentes);

var_dump($pessoa);



?>