<?php

//a. salvar as informações do formulário de inscrição em JSON com a senha criptografada usando password_hash
//i. fazer a verificação da existência dos e-mails e, caso já exista uma conta com o email anterior, as informações
//novas não devem ser salvas e o usuário deve ser avisado;
//ii. atribuir ao usuário um id único, com númeração automática, usando como referência o último id inserido
//no arquivo

if(!isset($_POST['nome']) || $_POST['nome'] === ""){
  echo "<br>Insira seu nome para continuar<br>";  
  } else {
    $newName = $_POST['nome'];
  }

if (!isset($_POST['email'])){
  echo "<br>Insira seu email para continuar<br>";
} else {
  $newEmail = $_POST['email'];
}

if (!isset($_POST['senha'])){
  echo "<br>Digite uma senha para se registrar<br>";
} else {
$senhaC = password_hash($_POST['senha'], PASSWORD_DEFAULT);
}


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

  if(isset($newEmail)){
    if (in_array($newEmail, $arrayEmails)){
      echo "<br>E-mail já existe<br>";
    } else {
   $arrayUsers[$id] = array("nome"=>$newName,"email"=> $newEmail, "senha"=> $senhaC);
   $userData = json_encode($arrayUsers);
   file_put_contents('rgst.json', $userData);
   echo "<br>Informações inseridas com sucesso!<br>";
  }
}
//b.em login, verificar a existência dos dados inseridos
//i.verificar a existência do e-mail, se a senha está correta 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login</title>
 </head>
 <body>
 <h3>Faça seu login:</h3>
  <form action="login2.php" method='post'>
    <label for="email">Email:</label>
    <input type="email" name="email"></input>
    <br>
    <label for='senha'>Senha:</label>
    <input type="password" name="senha"></input>
    <br>
    <input type="submit" name="Fazer login">
  </form>
   
 </body>
 </html>
