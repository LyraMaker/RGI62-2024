<?php

class Pessoa{
    var int $codigo;
    var string $nome;
    var float $altura;
    var int $idade;
    var string $dataNascimento;
    var string $escolaridade;
    var float $salario;

    function __construct(int $codigo, string $nome, string $dataNascimento){
        $this->codigo = $codigo; 
        $this->nome = $nome;
        $this->setDataNascimento($dataNascimento);
      
    }

    function setDataNascimento(string $ano){
        $anoAtual = date("Y");
        $this->idade = $anoAtual - $ano;
        $this->dataNascimento = $ano;
    }

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