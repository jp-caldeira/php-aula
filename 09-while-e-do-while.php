<?php

$array = ["mamão","banana", "caqui", "laranja", "mexerica","etc", "chega"];
$i = 0;

shuffle($array);

while ($array[$i] != "chega") {
 echo $array[$i]."<br>";
 $i++;
}

// echo "<br><br><br>";
// //do while
// $frutas =['abacate','mamão','morango','banana','fruta do conde', 'chega'];
// $j = 0;
// shuffle($frutas);
// do {
//   echo $frutas[$j]."<br>";
//   $j++;
// } while ($frutas[$j] != "chega");
// //se ele imprimir o chega primeiro, o loop fica infinito pois já passou da posição dele

$quantidade = 5;

do {
  echo $quantidade;
  $quantidade--;
} while ($quantidade > 5);


 ?>
