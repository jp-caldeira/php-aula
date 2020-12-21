<?php

namespace App\Classes;

class Produto
{
    public string $titulo;

    public string $descricao = "Produtos em geral";//definindo um valor padrão para a propriedade

    public float $preco;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    //metódo final - evita que seja sobreescrito
    final public function defineCodigoBarras(string $codigo) : void
    {
        $this->codigoBarras = $codigo;
    }

    public function getCodigo() : void
    {
        echo $this->codigoBarras;
    }

    public function detalhes():void
    {
        echo "<br>Nome do produto: " . $this->titulo."<br>";
    }
}
