<?php

     $diaEnsolorado = true;

     if ($diaEnsolorado == true){
       echo "Vamos para a praia<br>";
   } else {
       echo "Pegue um guarda-chuva<br>";
       echo "ou fique em casa<br>";
   }

//elseif

    $idade = 25;

 if ($idade < 16) {
   echo " Não pode votar<br> ";
 } elseif ($idade == 16 && $idade == 17){   //não deu certo
   echo " Voto opcional<br> ";
 } elseif ($idade >= 18) {
   echo "Voto obrigatório<br>";
 }

//if ternário
// condição ? true : false
  $num1 = 32;
  $num2 = 58;

  $maior = $num1 > $num2 ? $num1 : $num2;

  echo "$maior<br>";
  
  //switch

 $numero = 3;
  switch ($numero) {
    case 1:
    echo "O número é igual a 1<br>";
    break;
    case 2:
    echo " O número é igual a 2<br>";
    break;
    default:
    echo " O número é diferente a 1 e 2<br>";
    break;
  }

$cazzo = 23;

switch ($cazzo) {
    case 45:
    echo "---o número é tucaninho<br>";
    break;
    case 17:
    echo " pelo amor escolhe outro número<br>";
    break;
    default:
    echo " errou o número, tente de novo<br>";
    break;
}

 ?>
