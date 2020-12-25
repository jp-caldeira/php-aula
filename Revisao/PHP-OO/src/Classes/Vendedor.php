<?php

namespace App\Classes;

class Vendedor
{
    private float $totalVendas = 0;

    protected static float $bonus = 1.2;

    protected static float $comissao = 2.5;

    private static function comissao(bool $temBonus): float
    {
        if ($temBonus){
            return self::$comissao * self::$bonus;
        }
        return self::$comissao;
    }

    public static function calculaComissao(bool $temBonus, float $valor): float
    {
        $porcentagemComissao = static::comissao($temBonus) / 100;
        return $porcentagemComissao * $valor;
    }

    public function addVenda(float $valor): void
    {
        $this->totalVendas += $valor;
    }

    public function minhaComissao(): float
    {
        return static::calculaComissao(true, $this->totalVendas);
    }

}
