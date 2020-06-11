<?php
$nome = "Asdrúbal";
$idade = 30;
$casado = true;

if ($casado){
 $estadocivil = "casado";
} else {
 $estadocivil = 'solteiro';
}

if ($idade >= 18){
  $maior = "maior de idade";
} else {
  $maior = "menor de idade";

}
?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content='width=device width, initial-scale=1.0'>
    <title>Aula PHP - 10 de junho de 2020</title>
  </head>
    <body>
      <h1>Olá, <?php echo $nome; ?></h1>

        <p>
          Tenho <?php echo $idade;?> anos de idade e sou <?php echo $estadocivil;?>.
        </p>

        <p>Eu sou <?php echo $maior; ?>.</p>




    </body>
</html>
