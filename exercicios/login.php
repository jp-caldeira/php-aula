<?php

// echo "var dump no post:";
// var_dump($_POST);
// echo "<br><br>";

$newEmail = $_POST['email'];

$newName = $_POST['nome'];

$senhaC = password_hash($_POST['senha'], PASSWORD_DEFAULT);

 $arraydecode = file_get_contents('rgst.json');
 echo "var dump depois do get contents:";
 var_dump($arraydecode);
 echo "<br><br>";

 $arrayUsers = json_decode($arraydecode, true);
 echo "var dump depois do json_decode:";
 var_dump($arrayUsers);
 echo  "<br>";


if (in_array($newEmail, $arrayUsers[$newEmail])){
    echo "<br>E-mail já existe<br>";
} else {
   $arrayUsers[$newEmail] = array("nome"=>$newName,"email"=> $newEmail, "senha"=> $senhaC);
   $userData = json_encode($arrayUsers);
   file_put_contents('rgst.json', $userData);
   echo "<br>Informações inseridas com sucesso!<br>";
   echo "var dump nas informações inseridas:<br>";
  }








 ?>
