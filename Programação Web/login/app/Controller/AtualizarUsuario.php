<?php
use UserBanco;

class AtualizarUsuario{
    public function retornar(){
        $resultado = (new UserBanco())->atualizar($_POST['usuario'],$_POST['senha'],$_POST['ativo']);
    }
}