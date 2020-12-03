<?php

$i = 1;

while ($i <= 10){
  echo "executou $i<br>";
  $i++;
}

echo "<br>Loop For<br>";

for($i = 0; $i < 12; $i++){
    echo "executou $i <br>";
}

//Array
echo "<br>";

$numeros = [3, 4, 7, 2, 1];

for ($i = 0; $i < count($numeros); $i++){
   echo "$numeros[$i] <br>";
}

//foreach

foreach($numeros as $chave => $valor){
  echo "chave: {$chave} - valor: {$valor}<br>";
}
