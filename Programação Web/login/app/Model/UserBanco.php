<?php

class UserBanco{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Database/Conectar.php";

        $this->pdo = $banco;
    }

    public function verificarSeExiste($usuario,$senha){
        $sql = "SELECT * FROM usuarios WHERE username = :u AND senha = :s and ativo = true";
        $comando = $this->pdo->prepare($sql);

        $comando->bindValue("u",$usuario);
        $comando->bindValue("s",$senha);

        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function cadastrar($usuario,$senha,$ativo){
        $sql = "INSERT INTO usuarios(username,senha,ativo) VALUES (:u,:s,:a)";
        $comando = $this->pdo->prepare($sql);

        $comando->bindValue("u",$usuario);
        $comando->bindValue("s",$senha);
        $comando->bindValue("a",$ativo);

        return $comando->execute();
    }

}