<?php


if($_POST['idade'] == null){
    echo "Você precisa digitar sua idade!<br><br>Clique em voltar e digite sua idade para continuar";
  } elseif ($_POST['idade'] < 18) {
    echo "Você não está autorizado a entrar no sistema<br><br>Adeus :( <br>";
    exit;
} else {
  echo "Autorização aceita!<br><br>";
}

function hobbyValido($string){
  if (strlen($string) < 3){
  return "Você precisa digitar pelo menos três caracteres<br>";
} elseif (strlen($string) > 15) {
  return "Você excedeu o número máximo de caracteres. Digite um hobby até 15 caracteres.<br>";
} else {
  return "Hobby válido!";
}
}

?>

<form class="" action="exercicio8b.php" method="post">
  <label for="hobbies">Digite seus hobbies abaixo, separados por vírgula:</label><br>
      <input type="text" name="hobbies" value="" placeholder="digite seus hobbies aqui..."><br>
      <input type="submit" name="" value="Enviar">
</form>

<?php var_dump($_POST);?>
