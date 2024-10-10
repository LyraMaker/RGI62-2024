<?php

require __DIR__ . "/app/Controller/ValidarUsuario.php";

if (!isset($_POST['usuario']) && !isset($_POST['senha'])) {
    header("Location: ./login.php");
}

$existeAluno = (new ValidarUsuario())->verificarSeExiste($_POST['usuario'], $_POST['senha']);

if ($_POST['usuario'] == "") {
    die("Usuário não digitado!");
}

if ($_POST['senha'] == "") {
    die("Senha não digitada!");
}

if (empty($existeAluno)) {
    die("Não existe este usuário!");
}

echo "Esse usuário existe!";
