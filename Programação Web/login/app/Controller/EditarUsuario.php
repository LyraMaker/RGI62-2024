<?php
use UserBanco;

class EditarUsuario{
    public function retornar(){
        $usuario = (new UserBanco())->listarUsuario($_GET['username']);
        require __DIR__."/../../editar-usuario.php";
    }
}