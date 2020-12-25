<?php

namespace App\Classes;

class Representante extends Vendedor
{
    protected static function comissao(bool $temBonus): float
    {
        if ($temBonus){
          return (parent::$comissao * parent::$bonus) + 1;
        }

        return parent::$comissao + 1;
    }

}
