<?php
use UserBanco;

class ValidarUsuario
{
    public function retornar()
    {

        if ($_POST['usuario'] == "") {
            die("Usuário não digitado!");
        }

        if ($_POST['senha'] == "") {
            die("Senha não digitada!");
        }

        $existeAluno = (new UserBanco())->verificarSeExiste($_POST['usuario'], $_POST['senha']);


        if (empty($existeAluno)) {
            die("Não existe este usuário!");
        }

        echo "Esse usuário existe!";
    }
}
