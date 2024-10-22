<?php
use UserBanco;

class ListarUsuario{
    public function retornar(){

        $usuarios = (new UserBanco())->listarTodos();
          require __DIR__."/../../exibir-dados.php";
    }
}