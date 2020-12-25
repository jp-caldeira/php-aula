<?php

require_once "../autoload/autoload-psr4.php";
use App\Classes\Vendedor;
use App\Classes\Representante;

//var_dump($vendedor->bonus); // erro: não é possível acessar uma propriedade estática através de uma
//instância da classe vendedor

echo "Comissão do vendedor: " . Vendedor::calculaComissao(true, 100_000);//100_000 é um jeito mais legível de escrever 100 mil
echo "<br>";
echo "Comissão do representante: " . Representante::calculaComissao(true, 100_000);

$joao = new Vendedor;
$joao->addVenda(100_000);
echo "<br>";
$joao->addVenda(100_000);
echo $joao->minhaComissao();
