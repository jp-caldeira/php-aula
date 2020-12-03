<?php

$nome = "fulano";
$idade = 28;
$preco = 39.99;
$casado = false;



echo gettype($nome);
echo "<br>";
echo gettype($idade);
echo "<br>";
echo gettype($preco);
echo "<br>";
echo gettype($casado);
echo "<br>";
var_dump($nome, $idade, $preco, $casado);

echo "<br>A variável nome é do tipo: ";
echo gettype($nome);

$nome = 30000;

echo "<br>A variável nome agora é do tipo: ";
echo gettype($nome);


