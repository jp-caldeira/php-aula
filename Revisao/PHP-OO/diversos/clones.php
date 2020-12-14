<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;

$prod1->titulo = "Cerveja";
$prod1->descricao = "Cerveja lata 350 ml";
$prod1->preco = 2.49;

$prod2 = clone $prod1;
$prod2->titulo = "Heineken";//a mudança só ocorre em prod2, porque agora ele aponta para outro objeto

function alterarProduto($produto)
{
    $produto->titulo = "Skol Litrão";

    return $produto;
}

$prod3 = alterarProduto(clone $prod1);
//agora temos um novo objeto com o titulo skol litrao. a propriedade de prod1 é inalterada

var_dump($prod1);
var_dump($prod2);
var_dump($prod3);
