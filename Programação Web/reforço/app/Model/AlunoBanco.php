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
        return $this->hidratar($listaDoBanco);
    }

    public function cadastrarAluno($matricula, $nome, $nota1, $nota2){
        $sql = "INSERT INTO alunos(matricula, nome, media1, media2) VALUES (:m,:n,:m1,:m2)";
        $pdo = $this->pdo;

        $comando = $pdo->prepare($sql);
        $comando->bindValue("m",$matricula,PDO::PARAM_STR);
        $comando->bindValue("n",$nome,PDO::PARAM_STR);
        $comando->bindValue("m1",$nota1,PDO::PARAM_STR);
        $comando->bindValue("m2",$nota2,PDO::PARAM_STR);

        $comando->execute();
        
    }

    public function hidratar(array $array){
        $arrayAlunos = [];
        foreach ($array as $valor){
            $arrayAlunos[] = new Aluno($valor['matricula'],$valor['nome'],$valor['media1'],$valor['media2']);
        }

        return $arrayAlunos;

    }
}