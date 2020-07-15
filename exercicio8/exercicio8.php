<?php

echo "Olá, Mundo<br><br>";

if($_POST == null){
  echo "Digite seu nome<br>"; ?>
<form action="exercicio8a.php" method="post">
  <input type="text" name="nome" value="">
  <input type="submit" name="" value="Enviar">
</form>
<?php } else { ?>
  <?php
    echo "Boas vindas, ".$_POST['nome'];?>
    <p>Digite sua idade:</p>
    <form action="exercicio8a.php" method="GET">
      <input type="number" name="idade" value="">
      <input type="submit" name="" value="Enviar">
    </form>
  <?php }
    if (array_key_exists("idade", $_GET) == false){
      echo "-----------------------------------------";
    } else {
      if($_GET['idade'] == null){
          echo "Você precisa digitar sua idade!<br><br>Clique em voltar e digite sua idade para continuar";
        } elseif ($_GET['idade'] < 18) {
          echo "Você não está autorizado a entrar no sistema<br><br>Adeus :( <br>";
          exit;
      } else {
        echo "Autorização aceita!<br><br>";
      }
    }






    ?>
