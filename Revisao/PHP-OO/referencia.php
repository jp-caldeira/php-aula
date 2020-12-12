<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;

$prod1->titulo = "Cerveja";
//$prod1->descricao = "Cerveja lata 350 ml";
$prod1->preco = 2.49;

$prod2 = $prod1;//não é passagem por referência, e sim uma cópia
$prod2->titulo = "Heineken";//a mudança é aplicada em ambos os objetos

//$prod2 = 10;//agora prod2 é um int, mas prod1 continua sendo um objeto com as mesmas propriedades

// var_dump($prod1);
// var_dump($prod2);

$prod3 = &$prod1;
$prod3->titulo = "Skol latinha";

//$prod3 = 20;//agora prod1 e prod3 são iguais a 20

$prod2->preco = 3.40;

function alterarProduto($produto)
{
    $produto->titulo = "Skol Litrão";
}

alterarProduto($prod1);//alterar os dois objetos

var_dump($prod1);
var_dump($prod2);
