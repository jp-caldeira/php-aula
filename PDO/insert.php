<?php

require 'connect.php';


$nome = $_POST['Nome'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];

$db->beginTransaction();

$query = $db->prepare("INSERT INTO usuarios (ID, Nome, Email, Senha) VALUES (DEFAULT, :nome, :email, :senha)");
$query->bindValue(':nome', $nome, PDO::PARAM_STR);
$query->bindValue(':email', $email, PDO::PARAM_STR);
$query->bindValue(':senha', $senha, PDO::PARAM_STR);
$query->execute();
$ultimoId = $db->lastInsertId();
var_dump($ultimoId);

$db->rollBack();



// $query = $db->prepare("UPDATE usuarios SET Senha='' WHERE ID = 3;");
// $query->execute();







 ?>
