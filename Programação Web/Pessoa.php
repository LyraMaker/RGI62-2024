<?php

class Pessoa{
    var int $codigo;
    var string $nome;
    var float $altura;
    var int $idade;
    var string $dataNascimento;
    var string $escolaridade;
    var float $salario;

    function crescer(int $centimetro){
        $this->altura += $centimetro; // O this significa que eu estarei utilizando como referência o objeto que invocou o método
    } 

    function formar(string $titulo){
        $this->escolaridade = $titulo;
    }

    function envelhecer(int $anos){
        $this->idade += $anos;
    }
}