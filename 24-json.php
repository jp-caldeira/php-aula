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

$pessoas = [
      [
        'nome' => "João",
        'email' => "joao@joao.com",
        'user' => '@joao',
        'perfil' => 'img/41413353.png'
      ],
      [
        'nome' => 'Roberval',
        'email' => 'roberval@gmail.com',
        'user' => '@roberval',
        'pefil' => 'img/41413354.png'
      ]

];

$myfile = json_encode($pessoas);

//file_put_contents('pessoas.json', $myfile);

$arrayx = file_get_contents('pessoas.json');

$arrayaexb12 = json_decode($arrayx, true);

echo "<br><br>Olá, ".$arrayaexb12[0]['nome'].", boa tarde!";


 ?>
