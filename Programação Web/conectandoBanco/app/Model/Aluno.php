<?php

class Aluno{
    private string $matricula;
    private string $nome;

    public function setMatricula(string $matricula){
        $this->matricula = $matricula;
    }
    public function setNome(string $nome){
        $this->nome = $nome;      
    }

    public function getMatricula(){
        return $this->matricula;
    }
    public function getNome(){
        return $this->nome;
    }
}