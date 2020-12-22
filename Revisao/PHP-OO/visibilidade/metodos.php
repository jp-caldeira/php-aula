<?php

require_once "../autoload/autoload-psr4.php";

$prod = new App\Classes\Produto("Refrigerante");

// $prod->defineCodigoBarras("000121100101");
//
// $prod->definePreco(45.65);
//
// $prod->detalhes();

$microondas = new App\Classes\Microondas("Microondas", 110, 750);

$microondas->definePreco(399.99);
$microondas->defineCodigoBarras("01010010");

$microondas->detalhes();
