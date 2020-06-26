<?php

$carros = [ 0 => ['marca'=> 'Volkswagen','modelo'=> 'Gol'],
            1 => ['marca'=> 'Chevrolet', 'modelo'=> 'Onix'],
            2 => ['marca' => 'Honda', 'modelo' => 'Civic']
          ];

$json = json_encode($carros);

var_dump($json);
echo "<br><br>Usando o json_decode:<br><br>";
$newCars = json_decode($json);
var_dump($newCars);
echo "<br><br>Transformando em array associativo:<br><br>";
$newNewCars = json_decode($json, true);
var_dump($newNewCars);





 ?>
