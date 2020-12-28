<?php

require_once "connect.php";

$conexao = new PDO('mysql:host=localhost;dbname=teste_db', $user, $pass);

$nome = "";

$query = $conexao->prepare("SELECT * FROM alunos WHERE nome LIKE :nome");

$query->bindParam(':nome', $nome, PDO::PARAM_STR);

$nome = "%maria%";

$query->execute();

foreach ($query as $linha){
  var_dump($linha);
}
