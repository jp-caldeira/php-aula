<?php

echo "var dump no post:";
var_dump($_POST);
echo "<br><br>";

$newEmail = $_POST['email'];

$newName = $_POST['nome'];

$senhaC = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$arraydecode = file_get_contents('rgst.json');
echo "var dump depois do get contents:";
var_dump($arraydecode);
echo "<br><br>";


$array1 = json_decode($arraydecode, true);
echo "var dump depois do json_decode:";
var_dump($array1);
echo  "<br>";


if (in_array($newEmail, $array1)){
    echo "<br>E-mail já existe<br>";
} else {
   $userData = array("nome"=>$newName,"email"=> $newEmail, "senha"=> $senhaC);
   $userData = json_encode($userData);
   file_put_contents('rgst.json', $userData);
   echo "<br>Informações inseridas com sucesso!<br>";
   echo "var dump nas informações inseridas:<br>";
   var_dump($userData);
}

// $arraydecode1 = file_get_contents('rgst.json');

// $arraydecode1 = json_decode($arraydecode1, true);

// var_dump($arraydecode1);







 ?>
