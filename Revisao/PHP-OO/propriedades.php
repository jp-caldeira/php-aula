<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;

$prod1->titulo = "Cerveja";
//$prod1->descricao = "Cerveja lata 350 ml";
$prod1->preco = 2.49;
$prod1->desconto = 0.01;//colocando uma propriedade que não foi definida na classe

$prod1->defineCodigoBarras("1222453453");

var_dump($prod1);

$prod1->getCodigo();
