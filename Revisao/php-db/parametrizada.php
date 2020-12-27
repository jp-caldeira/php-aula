<?php

require_once "connect.php";

$conexao  = new mysqli($host, $user, $pass, $dbname);

$id = '1';
$id2 = '2';

$stmt = $conexao->stmt_init();

$stmt->prepare('SELECT * FROM ALUNOS WHERE id = ? or id = ?');

$stmt->bind_param('ii', $id, $id2);

$stmt->execute();

$stmt->bind_result($idAluno, $nomeAluno);

while ($stmt->fetch()){
  var_dump($idAluno, $nomeAluno);
}
