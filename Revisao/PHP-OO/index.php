<?php

require_once "src/Classes/Produto.php";
require_once "src/Classes/Cliente.php";

$prod1 = new Produto;

$prod1->titulo = "Cerveja";
//$prod1->descricao = "Cerveja lata 350 ml";
$prod1->preco = 2.49;

var_dump($prod1);

$prod2 = new Produto;

$prod2->titulo = "Itaipava";
$prod2->descricao = "Cerveja lata 269 ml";
$prod2->preco = 1.49;

var_dump($prod2);

$prod3 = new Produto;

var_dump($prod3);

$cliente1 = new Cliente;
$cliente1->nome = "João";
$cliente1->idade = 33;
$cliente1->endereco = "São Paulo";
$cliente1->telefone = "11 XXXXX-XXXXX";

$cliente1->comprar();

//instanciando objetos dinamicamente

$nomeClasse = "Cliente";
$instancia = new $nomeClasse;
//var_dump($instancia);

$cliente2 = new $cliente1;


$nomeClasse2 = get_class($cliente1);
$cli3 = new $nomeClasse2;
$cli3->nome = "Maria";

var_dump($cliente1);
var_dump($cliente2);
var_dump($cli3);

//passagem por referência

$a = 1;
$b = $a;
$b = 2;

echo "a é igual a $a e b é igual a $b<br>";

$c = 1;
$d = &$c;
$d = 2;

echo "c é igual a $c e d é igual a $d";
