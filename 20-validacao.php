<?php

var_dump($_POST);

if ($_POST == null) {
$_POST['nomeCompleto'] = " ";
$_POST['usuario'] = " ";
$_POST['senha'] = " ";
$_POST['email'] = " ";
}



if ($_POST !== null) {
    $nometrim = trim($_POST['nomeCompleto']);
    $userName = trim($_POST['usuario']);
            if (strlen($nometrim) == 0) {
                echo "<br>Nome não pode ser vazio. Digite seu nome.<br>";
          }
            if (strlen($userName) < 8) {
              echo "Seu nome de usuário deve ter ao menos OITO caracteres!<br>";
          }


          if (is_numeric($_POST['senha']) == false) {
              echo "Campo senha deve ter apenas números!<br>";
          }

          if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
            echo "Digite um email válido!<br>";
          }
}
 ?>


<form class=""  action="20-validacao.php" method="post">
  <label for="nomeCompleto">Nome</label>
    <input type="text" name="nomeCompleto" value=""><br>
  <label for="usuario">Usuário</label>
      <input type="text" name="usuario" value=""><br>
  <label for="senha">Senha</label>
      <input type="password" name="senha" value=""><br>
  <label for="email">Email</label>
    <input type="text" name="email" value=""><br>
  <button type="submit" name="button">Enviar</button>
</form>
