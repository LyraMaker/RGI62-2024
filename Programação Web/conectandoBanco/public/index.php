<?php

include __DIR__."/../app/Data/ConectarBanco.php"; //O __DIR__ serve para
                                                  // indicar o endereço
                                                  // completo da pasta que
                                                  // você está!
include __DIR__."/../app/Model/Aluno.php";

$consulta = $banco->query("SELECT * FROM ALUNO");

$alunos = $consulta->fetchAll(PDO::FETCH_ASSOC);

foreach ($alunos as $aluno) {
    echo $aluno["matricula"]."|<strong>".$aluno['nome']."</strong><br>";
}