<?php

include __DIR__."/../app/Data/ConectarBanco.php"; //O __DIR__ serve para
                                                  // indicar o endereço
                                                  // completo da pasta que
                                                  // você está!
include __DIR__."/../app/Model/Aluno.php";

$consulta = $banco->query("SELECT * FROM ALUNO");

$alunos = $consulta->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;
foreach ($alunos as $aluno) {

    $objAluno[] = new Aluno();
    $objAluno[$contador]->setMatricula($aluno["matricula"]);
    $objAluno[$contador]->setNome($aluno["nome"]);

    echo $objAluno[$contador]->getNome()."<br>";
}

