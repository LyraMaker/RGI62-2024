<?php

$host = "localhost";
$dbname = "Alunos";
$username = "root";
$password = "masterkey";

try{
    //$banco = new PDO("sqlite:../Var/banco.sqlite"); // O DSN sqlite manipulará um arquivo que será o própio banco
    $banco = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
}catch(PDOException $e){
    echo "Deu ruim! ".$e->getMessage();
}

$tabela = "create table if not exists aluno(
    matricula varchar(10) not null primary key,
    nome text not null)";

//$novoAluno = "insert into aluno(matricula, nome) values ('001','Maria')";
//$banco->query($tabela); $banco->query($novoAluno);