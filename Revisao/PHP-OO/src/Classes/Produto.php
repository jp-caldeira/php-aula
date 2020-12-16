<?php

namespace App\Classes;

class Produto
{
    public string $titulo;

    public string $descricao = "Cerveja lata 350 ml";//definindo um valor padrão para a propriedade

    public float $preco;

    public function defineCodigoBarras(string $codigo) : void
    {
        $this->codigoBarras = $codigo;
    }

    public function getCodigo() : void
    {
        echo $this->codigoBarras;
    }
}
