<?php

include 'PDO-01-index.php';

// $query = $db->prepare("SELECT * FROM ator");
// $query->execute();
//
// $result = $query->rowCount();//retorna quantidade de linhas da consulta
//
// var_dump($result);

// $query = $db->prepare("INSERT INTO ator (primeiro_nome) VALUES ('Romulo')");
// $query->execute();
//
// $ultimoId = $db->lastInsertId();
// var_dump($ultimoId);

$query = $db->query('SELECT * FROM ator');
$result = $query->fetchAll(PDO::FETCH_ASSOC);
var_dump($result);

 ?>
