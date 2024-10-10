<?php

class ValidarUsuario{
    private $pdo;

    public function __construct()
    {
        require __DIR__."/../Database/Conectar.php";
        $this->pdo = $banco;
    }

    public function verificarSeExiste($usuario,$senha){
        $sql = "SELECT * FROM usuario WHERE username = :u AND senha = :s and perfil_ativo = true";
        $comando = $this->pdo->prepare($sql);

        $comando->bindValue("u",$usuario);
        $comando->bindValue("s",$senha);

        $comando->execute();

        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }
}