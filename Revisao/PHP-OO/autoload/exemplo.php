<?php

require_once "autoload.php";

$prod1 = new Produto;

$prod1->titulo = "Cerveja";
$prod1->descricao = "Cerveja lata 350 ml";
$prod1->preco = 2.49;

$cliente1 = new Cliente;
$cliente1->nome = "João";
$cliente1->endereco = "São Paulo";
$cliente1->idade = 34;
$cliente1->telefone = "11 89898989898";

$fornecedor = new Fornecedor;
$fornecedor->cnpj = "4587283";
$fornecedor->nomeFantasia = "Empresa X";
$fornecedor->razaoSocial = "Empresa XPTO Ltda";

var_dump($prod1, $cliente1, $fornecedor);
