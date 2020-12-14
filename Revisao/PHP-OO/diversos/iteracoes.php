<?php

require_once "src/Classes/Produto.php";

$prod1 = new Produto;

$prod1->titulo = "Cerveja";
//$prod1->descricao = "Cerveja lata 350 ml";
$prod1->preco = 2.49;


foreach($prod1 as $nome => $valor){
   echo "$nome: $valor";
   echo "<br>";
}
