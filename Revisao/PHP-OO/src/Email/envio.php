<?php

namespace App\Email;

use App\Classes\Cliente;
use App\Email\Adaptadores\Mailgun\Adaptador as Mailgun;
use App\Email\Adaptadores\SES\Adaptador as SES;


const VERSAO = 1.0;

class Envio {

    public function enviar(): void
    {
      $adaptador = new Mailgun;

      $transporte = new Transporte;//estão no mesmo namespace, então não precisa colocar o caminho

      $obj = new \stdClass;

      $cliente = new Cliente;

      var_dump($adaptador, $obj, $transporte, $cliente);
    }

    public function m1()
    {
      $adaptador = new Adaptadores\Mailgun\Adaptador;
    }

    public function m2()
    {
      $adaptador = new SES;
    }

}

function validar(string $email): void
{
    echo "o endereço $email é válido";
}
