<?php

echo "1.var dump no post-hobbies:<br>";
var_dump($_POST['hobbies']);

$arrayHobbies = explode(", ", $_POST['hobbies']);

echo "<br><br>2. Usando a função explode para criar uma array com os hobbies:<br>";
var_dump($arrayHobbies);
echo "<br><br>3. Imprimindo cada um dos hobbies com o foreach<br>";
foreach($arrayHobbies as $value){
    echo $value."<br>";
}

function hobbyValido($string){
  if (strlen($string) < 3){
  echo $string." é muito curto. Seu hobby precisar ter ao menos <strong>três</strong> caracteres<br>.";
} elseif (strlen($string) > 15) {
  echo "Você excedeu o número máximo de caracteres. Digite um hobby até 15 caracteres.<br>";
} else {
  echo $string." é um hobby válido<br>";
}
}

echo "<br>4. Usando a função hobbyValido com o foreach para validar os hobbies:<br>";
foreach($arrayHobbies as $value){
   hobbyValido($value);

}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device-width initial-scale=1.0'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Exercicio 8-C</title>
    <form class="" action="exercicio8d.php" method="post">
        <?php foreach($arrayHobbies as $value){?>
          <br>Você confirma que gosta de <?=$value ?>?
          <br>
          <input type="radio" name=<?=$value?> value="sim">Sim</input>
          <input type="radio" name=<?=$value?> value="não">Não</input>
        <br>
  <?php } ?>
  <input type="submit" name="Enviar" value="Enviar">
</form>
  </head>
  <body>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
