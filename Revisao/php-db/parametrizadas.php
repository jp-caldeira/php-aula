<?php

require_once "connect.php";

$conexao = new PDO('mysql:host=localhost;dbname=teste_db', $user, $pass);

$id = 2;

$query = $conexao->prepare('SELECT * FROM ALUNOS WHERE id = ?');

$query->bindValue(1, $id, PDO::PARAM_INT);

$query->execute();

// $alunos = $query->fetchAll(PDO::FETCH_ASSOC);
//   var_dump($alunos);

foreach($query as $aluno){
  var_dump($aluno);
}
