<?php

$pessoas = ['nome'=>'Fulano', 'idade'=>31, 'time' => 'Corinthians'];

foreach ($pessoas as $key => $valor){
  echo "$key: $valor<br />";
 //ou
 //echo $key.": ".$valor."<br>";

}

//exemplo sem o key

$meuArray = [17, 45, 68];

foreach ($meuArray as $valor){
  echo $valor;
  echo "<br>";
}

//outro exemplo com $chave:

$carro = [
    "Cor" => "Preto",
    "Marca" => "Hyundai",
    "Modelo" => 'HB20',
    "Ano" => 2018,
    "Preço" => "R$ 30 mil"
];

foreach ($carro as $chave => $value) {
  echo "$chave: $value";
  echo "<br>";
}

 ?>
