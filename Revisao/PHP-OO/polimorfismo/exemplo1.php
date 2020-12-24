<?php

abstract class Veiculo
{
    abstract public function acelerar(): void;
}

class Carro extends Veiculo
{
    public function acelerar(): void
    {
        echo "Injeta gasolina";
    }
}

class Bicicleta extends Veiculo
{
    public function acelerar():void
    {
        echo "Pedala | ";
    }
}

// function irDeCarro($a, $b, Carro $meioDeTransporte)
// {
//     $meioDeTransporte->acelerar();
// }
//
// function irDeBicicleta($a, $b, Bicicleta $meioDeTransporte)
// {
//     $meioDeTransporte->acelerar();
// }

//ao invés de declarar a mesma função váraias vezes para várias classes, é possível
//usar um classe mais genérica para representar as classes mais específicas :

function ir($a, $b, Veiculo $meioDeTransporte)
{
    $meioDeTransporte->acelerar();
}

ir("ponto a", "ponto b", new Bicicleta);
ir("ponto c", "ponto d", new Carro);
