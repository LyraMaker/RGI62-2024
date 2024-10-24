<?php
use UserBanco;

class ExcluirUsuario{
    public function retornar(){
        (new UserBanco())->excluir($_GET['username']);
    }
}