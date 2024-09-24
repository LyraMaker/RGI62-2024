<?php

class AlunoBanco{
    private $pdo;
    
    public function __construct(){
        require __DIR__."/../Data/banco.php";
        $this->pdo = $banco;
    }
    public function exibirAlunos(){
        $sql = "SELECT * FROM alunos";
        $resultado = $this->pdo->query($sql);
        return $resultado->fetchAll(PDO::FETCH_ASSOC);
    }
}