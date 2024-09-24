<?php

class AlunoPerfeito{
    private $matricula;
    private $nome;
    private $nota1;
    private $nota2;

    public function __construct(string $matricula, string $nome, float $nota1, float $nota2){
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;  
    }

    public function calcularMedia():float{
        return ($this->nota1+$this->nota2)/2;
    }
    public function exibirSituacao(float $media):string{
        if ($media>5){
            return "Aprovado!";
        }
        return "Reprovado!";
    }
}