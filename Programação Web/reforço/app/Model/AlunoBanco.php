<?php
require __DIR__."/Aluno.php";

class AlunoBanco{
    private $pdo;
    
    public function __construct(){
        require __DIR__."/../Data/banco.php";
        $this->pdo = $banco;
    }
    public function exibirAlunos(){
        $sql = "SELECT * FROM alunos";
        $resultado = $this->pdo->query($sql);
        $listaDoBanco = $resultado->fetchAll(PDO::FETCH_ASSOC);
        return $this->hidratar( $listaDoBanco);
    }

    public function hidratar(array $array){
        $arrayAlunos = [];
        foreach ($array as $valor){
            $arrayAlunos[] = new Aluno($valor['matricula'],$valor['nome'],$valor['media1'],$valor['media2']);
        }

        return $arrayAlunos;

    }
}