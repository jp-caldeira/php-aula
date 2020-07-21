
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
  </head>
<body>

      <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#news">Novidades</a></li>
        <li><a href="#contact">Contato</a></li>
        <li><a href="#about">Sobre</a></li>
      </ul>


    <section class='container first-section'>
<?php
  if($_POST){
    $newName = trim($_POST['nome']);
    $newEmail = trim($_POST['email']);
    $senha = trim($_POST['senha']);
            if (strlen($newName) < 2){
            echo "<br>ERRO: Você precisa digitar seu <strong>nome</strong> para se registrar<br><a href='register.php'>Voltar</a>";
            }
            if (filter_var($newEmail, FILTER_VALIDATE_EMAIL) == false) {
            echo "<br>ERRO:Você deve inserir um <strong>email válido</strong> para continuar<br><a href='register.php'>Voltar</a>";
          }
          if (strlen($senha) < 6){
            echo "<br>ERRO: O campo <strong>SENHA</strong> deve ter ao menos SEIS caracteres.<br><a href='register.php'>Voltar</a>";
          } else {
            $senhaC = password_hash($_POST['senha'], PASSWORD_DEFAULT);
          }
    } else { ?>
      <h1>Faça seu login:</h1>
      <h2>(ou cadastre-se <a href='register.php'>aqui</a>)</h2>
    <?php } ?>
</section>

<?php

 $arraydecode = file_get_contents('rgst.json');

 $arrayUsers = json_decode($arraydecode, true);

if (!isset($arrayUsers)){
    $id = 1;
  } else {
    $lastId = end($arrayUsers);
    $lastId = $lastId['id'];
    $id = $lastId + 1;
}

$arrayEmails = array();

if (isset($arrayUsers)){
  foreach ($arrayUsers as $row){
    $arrayEmails[] = $row["email"];}
  }


if(isset($newEmail) && isset($senhaC)){
    if (in_array($newEmail, $arrayEmails)){
      echo "<br>E-mail já existe<br>";
    } else {
   $arrayUsers[$newEmail] = array("id"=> $id, "nome"=>$newName,"email"=> $newEmail, "senha"=> $senhaC);
   $userData = json_encode($arrayUsers);
   file_put_contents('rgst.json', $userData);
   echo "<br>Informações inseridas com sucesso!<br>";
  }
}
//b.em login, verificar a existência dos dados inseridos
//i.verificar a existência do e-mail, se a senha está correta
 ?>
 <div class="container-fluid">
     <section class="login-form">
             <form action="login2.php" method='post'>
              <label for="email">Email:</label>
              <input type="email" name="email"></input>
              <br>
              <label for='senha'>Senha:</label>
              <input type="password" name="senha"></input>
              <br>
              <input type="submit" name="Fazer login">
            </form>
      </section>
    </div>
  <div class="box">
    bla bla bla<br>
    bla bla bla<br>
    bla bla bla<br>
    bla bla bla<br>
    bla bla bla<br>
  </div>
  <div class="box">
    bla bla bla 2<br>
    bla bla bla 2<br>
    bla bla bla 2<br>
    bla bla bla 2<br>
    bla bla bla 2<br>
  </div>
  <div class="box">
    bla bla bla 3<br>
    bla bla bla 3<br>
    bla bla bla 3<br>
    bla bla bla 3<br>
    bla bla bla 3<br>
  </div>


  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

 </body>
</html>
