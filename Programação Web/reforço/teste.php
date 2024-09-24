<?php

require "Aluno.php";
require "AlunoPerfeito.php";

$frafin = new Aluno("170","Fravio da Silva");

$mediaFravin = $frafin->calcularMedia(5,1);

echo $frafin->exibirSituacao($mediaFravin)."\n";


var_dump($frafin);

$vagner = new AlunoPerfeito("171","Vagner Legal@gmail.com",5.7,6.8);

$mediaVagner = $vagner->calcularMedia();

echo $vagner->exibirSituacao($mediaVagner)."\n";

var_dump($vagner);