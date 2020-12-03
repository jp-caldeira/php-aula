<?php

function somar($valor1, $valor2)
{

  echo "antes do retorno(será executado) ";

  return $valor1 + $valor2;

  echo "depois do return (nunca será executado)";

}


$soma = somar(12, 10);

echo $soma;
echo "<br>";

$soma2 = somar(120, 110);

echo $soma2;
echo "<br>";

echo somar(13,90);//também dá para chamar direto assim

//EXEMPLOS DE FUNÇÕES EXTERNAS

echo strtolower("ANANIAS");
echo "<br>";
echo strtoupper("ananias");
echo "<br>";
echo str_replace("a", "o", "ananias");

echo "<br>";


var_dump(2020 % 400 == 0);
var_dump(2020 % 4 == 0);
var_dump(2020 % 100 != 0);




// function anoBissexto($ano)
// {
//  if ($ano % 4 == 0)
//  {
//
