<?php

//a. salvar as informações do formulário de inscrição em JSON com a senha criptografada usando password_hash
//i. fazer a verificação da existência dos e-mails e, caso já exista uma conta com o email anterior, as informações
//novas não devem ser salvas e o usuário deve ser avisado;
//ii. atribuir ao usuário um id único, com númeração automática, usando como referência o último id inserido
//no arquivo

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content='width=device-width initial-scale=1.0'>
    <title>Register</title>
  </head>
  <body>
      <h2>Faça seu cadastro!</h2>
      <form class="" action="login.php" method="post">
        <input type="text" name="nome" required minlength="2" value="">Digite seu nome</input><br>
        <input type='email' name='email' required minlength="4" value=''>Insira seu email</input><br>
        <input type="password" name="senha" required minlength='6' value="senha">Digite uma senha</input><br>
        <br>
        <button type="submit" name="button">Enviar</button>
      </form>


  </body>
</html>
