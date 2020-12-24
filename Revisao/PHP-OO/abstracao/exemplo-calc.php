<?php

interface Aritmetica{
    public function divisao_soma(int $n): int;
}

class Calculadora implements Aritmetica
{

    public function divisao_soma(int $n): int
    {
        $soma = 0;
        for($i = 1; $i <= $n; $i++)
        {
            if($n % $i == 0)
                $soma += $i;
        }

        return $soma;
    }
}
