<?php

// echo "var dump no post:";
// var_dump($_POST);
// echo "<br><br>";

$newEmail = $_POST['email'];

$newName = $_POST['nome'];

$senhaC = password_hash($_POST['senha'], PASSWORD_DEFAULT);

 $arraydecode = file_get_contents('rgst.json');
 // echo "var dump depois do get contents:";
 // var_dump($arraydecode);
 // echo "<br><br>";

 $arrayUsers = json_decode($arraydecode, true);
 // echo "var dump depois do json_decode:";
 // var_dump($arrayUsers);
 // echo  "<br>";

if (!isset($arrayUsers)){
    $id = 1;
  } else {
    $lastId = array_key_last($arrayUsers);
    $id = $lastId + 1;
}

$arrayEmails = array();

if (isset($arrayUsers)){
  foreach ($arrayUsers as $row){
    $arrayEmails[] = $row["email"];}
  }


//coloca outro isset, depois um if dentro do if que vai avaliar se o newEmail está dentro do array Emails e aí sim
//vai adicionar o valor;
    if (in_array($newEmail, $arrayEmails)){
      echo "<br>E-mail já existe<br>";
    } else {
   $arrayUsers[$id] = array("nome"=>$newName,"email"=> $newEmail, "senha"=> $senhaC);
   $userData = json_encode($arrayUsers);
   file_put_contents('rgst.json', $userData);
   echo "<br>Informações inseridas com sucesso!<br>";
  }



 ?>
