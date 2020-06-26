<?php

// $carros = [
//             ["marca"=>"Honda","modelo"=>"Civic"],
//             ["marca"=>"Volkswagen", "modelo" => "Gol"],
//            ["marca"=>"Ford", "modelo"=> "Focus"],
//             ["marca"=>"Fiat", "modelo"=> "Palio"]
//            ];
//
// $json = json_encode($carros);
//
// file_put_contents('25-carros.json', $json);

// $carros2 = file_get_contents('25-carros.json');
//
// $json2 = json_decode($carros2, true);
//
// var_dump($json2);
// echo "<br><br>";
//
// $json2[] = ["marca" => "Toyota", "modelo" => "Corolla"];
//
// $jsonFinal = json_encode($json2);
//
// file_put_contents('25-carros.json', $jsonFinal);

$carros3 = file_get_contents('25-carros.json');
var_dump($carros3);
echo "<br><br>";

$json3 = json_decode($carros3, true);
var_dump($json3);
echo "<br><br>";

foreach ($json3 as $value) {
  echo "Marca: ".$value['marca']."<br>";
  echo "Modelo: ".$value['modelo']."<br><br>";
}



 ?>
