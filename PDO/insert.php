<?php

require 'connect.php';

if($_POST){
$nome = $_POST['Nome'];
$email = $_POST['Email'];
$senha = $_POST['Senha'];

//
$query = $db->prepare("INSERT INTO usuarios (ID, Nome, Email, Senha) VALUES (DEFAULT, '$nome', '$email', '$senha')");
$query->execute();

// $query = $db->prepare("UPDATE usuarios SET Senha='' WHERE ID = 3;");
// $query->execute();




}


 ?>
