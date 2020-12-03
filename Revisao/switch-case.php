<?php

$a = 3;

switch ($a){

  case 0:
      echo "A é igual a zero";
      break;

  case 1:
      echo "A é igual a 1";
      break;

  case 2:
      echo "A igual 2";
      break;

  case 3:
  case 4:
  case 5:
      echo "A tem o valor entre 3 e 5";
      break;

  default:
      echo "a tem o valor maior que 5";
}

echo "<br>";

$curso = "PHP";

switch($curso){

  case "PHP":
    echo "Curso de PHP";
    break;

  case "Java":
    echo "Curso de Java";
    break;

  default:
    echo "Outro curso";
    break;
}
