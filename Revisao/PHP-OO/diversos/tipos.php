<?php

declare(strict_types=1);

require_once 'src/Classes/Fornecedor.php';
require_once 'src/Classes/Produto.php';

$fornecedor = new Fornecedor;

$fornecedor->cnpj = "4587283";
$fornecedor->nomeFantasia = "Empresa X";
$fornecedor->razaoSocial = "Empresa XPTO Ltda";

//$fornecedor->autorizar("String");//o método espera um objeto, passando uma string para verificar o erro

$fornecedor->autorizar(new Class {
     public $nome = "Joao";
     public $senha = "123456";
});

var_dump($fornecedor);

$produto1 = new Produto;
$produto1->titulo = "Abóbora";
$produto1->preco = 2;

var_dump($produto1);
