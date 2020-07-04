<?php

include 'PDO-01-index.php';

$db->beginTransaction();//desativa o auto commit

$query = $db->prepare("INSERT INTO ator (primeiro_nome) VALUES ('John')");
$query->execute();
$ultimoId = $db->lastInsertId();

var_dump($ultimoId);

$db->commit();


 ?>
