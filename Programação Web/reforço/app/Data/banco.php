<?php

try {
    $banco = new PDO("sqlite:".__DIR__."/../../dado.sqlite");
} catch (PDOException $e) {
    echo "Deu ruim ".$e->getMessage();
}