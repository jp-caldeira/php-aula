<?php
session_start();
var_dump($_POST);

if($_POST){
    $_SESSION['cor'] = $_POST['cor'];}   ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Cores - escolher</title>
  </head>
  <body style="background-color:<?php echo $_SESSION['cor']?>">
    <form action="cores.php" method="post">
      <label>Escolha sua cor de fundo para o site:</label>
      <input type="color" name="cor">
    <button type="submit" name="Enviar">Enviar</button>
    <button type="submit" name="cor" value= " ">Reiniciar</button>
    </form>
  </body>
</html>
