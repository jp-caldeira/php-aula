<?php

$idade = $_POST['idade'];
$nome = $_COOKIE['nome'];

$infos = ["nome" => $nome, "idade" => $idade];

$infosencode = json_encode($infos);

file_put_contents('infos.json', $infosencode);

session_start();

$_SESSION['usuar'] = ['nome' => $_COOKIE['nome'], 'idade' => $idade];

echo "Olá, ".$_COOKIE['nome'];

if($_POST['idade'] == null){
    echo "Você precisa digitar sua idade!<br><br>Clique em voltar e digite sua idade para continuar";
  } elseif ($_POST['idade'] < 18) {
    echo "Você não está autorizado a entrar no sistema<br><br>Adeus :( <br>";
    exit;
} else {
  echo "<br>Autorização aceita!<br><br>";
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width initial-scale=1.0'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Exercicio 8 - Hobbies</title>
  </head>
  <body>
<form class="" action="exercicio8c.php" method="post">
  <label for="hobbies">Digite seus hobbies abaixo, separados por vírgula:</label><br>
      <input type="text" name="hobbies" value="" placeholder="digite seus hobbies aqui..."><br>
      <input class='btn btn-primary' type="submit" name="" value="Enviar">
</form>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
