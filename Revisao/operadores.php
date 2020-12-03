<?php

$soma = 5 + 6;
$subtracao = 10 - 5;
$mult = 10 * 5;
$divisao = 100 / 9;
$modulo = 21 % 2;
$modulo2 = 4 % 2;
$exponencial = 10 ** 3;

var_dump($soma, $subtracao, $mult, $divisao);

echo "<br>";
echo "o resto da divisão de 21 por 2 é ".$modulo;
echo "<br>";
echo "o resto da divisão de 4 por 2 é ".$modulo2;
echo "<br>";
echo "10 elevado a 3 é igual a ".$exponencial;
echo "<br>";
//COMPARAÇÃO

$a = 10;
$b = 20;

var_dump($a == $b);
echo "<br>";
var_dump($a != $b); //ou $a <> $b
echo "<br>";
var_dump($a > $b);
echo "<br>";

//IGUALDADE E TIPO

$d = 10;
$e = "10";

var_dump($d == $e);
echo "<br>";
var_dump($d === $e);
echo "<br>";

//OPERADORES LÓGICOS

$blabla = true;
$asdaf = false; 

//&& and
echo "<br>Operadores lógicos<br>";
echo "<br>";
var_dump($blabla && $asdaf); 
var_dump($blabla and $asdaf); 

//|| or
echo "<br>";
var_dump($blabla || $asdaf); //($blabla or || $asdaf)

//xor 
echo "<br>";
var_dump($blabla xor $asdaf);

//not ! 
echo "<br>";
var_dump(!$a);

