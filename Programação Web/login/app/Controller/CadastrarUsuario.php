<?php

use UserBanco;

class CadastrarUsuario{
    public function retornar(){
        $cadastro = (new UserBanco())->cadastrar($_POST['usuario'],$_POST['senha'],$_POST['ativo']);

        if($cadastro){
            return "Usuário cadastrado!";
        }
        return "Não foi possível cadastrar no banco";
    }
}