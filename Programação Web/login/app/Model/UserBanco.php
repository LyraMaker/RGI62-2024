<?php
require __DIR__."/User.php";

use User;
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

    public function atualizar($usuario,$senha,$ativo){
        $sql = "UPDATE usuarios set username= :u, senha= :s , ativo = :a WHERE username= :u";

        $comando = $this->pdo->prepare($sql);

        $comando->bindValue("u",$usuario);
        $comando->bindValue("s",$senha);
        $comando->bindValue("a",$ativo);

        return $comando->execute();
    }

    public function excluir($usuario){
        $sql = "DELETE FROM usuarios WHERE username = :u";

        $comando = $this->pdo->prepare($sql);

        $comando->bindValue("u",$usuario);
    

        return $comando->execute();
    }

    public function listarTodos(){
        $sql = "SELECT * FROM usuarios";
        $comando = $this->pdo->prepare($sql);

        $comando->execute();

        return $this->hidratar($comando->fetchAll(PDO::FETCH_ASSOC));
    }

    public function listarUsuario($username){
        $sql = "SELECT * FROM usuarios WHERE username = :u";

        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("u",$username);

        $comando->execute();

        return $this->hidratar($comando->fetchAll(PDO::FETCH_ASSOC));
    }

    public function hidratar($array){
        $todosUsuarios = [];
        foreach($array as $usuario){
            $valor = new User();
            $valor->setUsername($usuario['username']);
            $valor->setSenha($usuario['senha']);
            $valor->setAtiva($usuario['ativo']);

            $todosUsuarios[]=$valor;
        }
        return $todosUsuarios;
    }
}