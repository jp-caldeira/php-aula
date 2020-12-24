<?php

require_once "../autoload/autoload-psr4.php";


$cliente = new App\Classes\Cliente;
$cliente->setId("1");
$cliente->setNome("Fulano");
$cliente->setIdade(30);
$cliente->setTelefone("454156124699");
$cliente->setEndereco("Rua Camomilas");

$produto = new App\Classes\Produto("Cerveja");
$produto->defineCodigoBarras("0100102123");
$produto->definePreco(19.90);

$pedido = new App\Classes\Pedido($cliente, $produto);
var_dump($pedido);

$pedido->pegarProduto()->detalhes();

//usando a trait Imprimir
$cliente->detalhes2();
$pedido->detalhes2();
