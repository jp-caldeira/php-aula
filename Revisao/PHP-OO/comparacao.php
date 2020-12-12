<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;

$prod1->titulo = "Cerveja";
$prod1->descricao = "Cerveja lata 350 ml";
$prod1->preco = 2.49;

$prod2 = new Produto;

$prod2->titulo = "Cerveja";
$prod2->descricao = "Cerveja lata 350 ml";
$prod2->preco = 2.49;

///comparadores

var_dump($prod1 == $prod2);//compara tipo e as propriedades. retorna true pois tudo igual
var_dump($prod1 === $prod2);//verifica a referência

$prod4 = &$prod1;
var_dump($prod1 === $prod4);//agora retorna true 

$prod3 = new Produto;

$prod3->titulo = "Kristal";
$prod3->descricao = "Cerveja lata 350 ml";
$prod3->preco = 2.49;

var_dump($prod1 == $prod3);//retorna false pois uma das propriedades é diferente
