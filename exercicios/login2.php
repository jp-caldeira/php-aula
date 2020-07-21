<?php

//Em login, verificar a existência dos dados inseridos
//i.verificar a existência do e-mail, se a senha está correta

if($_POST){
$email = $_POST['email'];
$passwordString = $_POST['senha'];
}

$arraydecode = file_get_contents('rgst.json');

$arrayUsers = json_decode($arraydecode, true);

$arrayEmails = array();

if (isset($arrayUsers)){
  foreach ($arrayUsers as $row){
    $arrayEmails[] = $row["email"];}
  }


if($_POST){
if(in_array($email, $arrayEmails)){
  echo "Email registrado<br>";
} else { ?>
  <p>Email não encontrado!</p>
  <p>Clique em <strong>voltar</strong> para fazer seu cadastro:</p>
  <br>
  <button type="button" name="button"><a href='register.php'>Voltar</a></button>
<br>
<?php }

if (password_verify($passwordString, $arrayUsers[$email]['senha'])){
    echo "<br>Senha Correta";
} else { ?>
  <p>Senha INCORRETA!</p>
  <p>Clique em <strong>voltar</strong>:</p>
  <br>
  <button type="button" name="button"><a href='login.php'>Voltar</a></button>
  <br>
<?php }
} else {
  echo "Insira suas informações<br><button type='button' name='button'><a href='login.php'>Voltar</a></button><br>";
  }

?>
