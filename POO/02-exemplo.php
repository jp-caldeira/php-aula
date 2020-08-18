<?php

require_once('02-classes.php');

$livro = new Produto();
$livro->nome = "Bad Gateway";
$livro->preco = 120.5;
$livro->quantidade = 25;
$livro->descrição = "Um livro muito legal e tal.";
$livro->categoria = "Quadrinhos";

echo "Nome do produto: ";
$livro->mostrarNome();
echo "<br>Preço: R$ ";
$livro->mostrarPreco();

$moto = new Produto();
$moto->nome = "CG 125";
$moto->preco = 3000;
$moto->quantidade = 1;
$moto->categoria = "Motocicletas";

$carrinho = new Carrinho();
$carrinho->addItem($livro);
$carrinho->addItem($moto);
echo "<br><br>Exibir items após adicionar no carrinho:<br><br>";
$carrinho->exibeItems();
$carrinho->valorTotal();
$carrinho->exibeTotal();
$carrinho->limpaItems();
echo "<br><br>Exibir items após limpar carrinho:<br><br>";
$carrinho->exibeItems();

 ?>
