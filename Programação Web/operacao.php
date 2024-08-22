<?php

include "Pessoa.php";

$pessoa = new Pessoa();

$pessoa->nome = "Cráudio Baixaria";
$pessoa->altura = "130";
$pessoa->idade = "68";
var_dump($pessoa);
echo "----------";
$pessoa->envelhecer(1);
$pessoa->formar("Doutor em Pipa Avoada");
$pessoa->crescer(50);
var_dump($pessoa);
