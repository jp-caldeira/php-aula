<?php

class Produto
{
    public $titulo;

    public $descricao = "Cerveja lata 350 ml";//definindo um valor padrão para a propriedade

    public $preco;

    public function defineCodigoBarras($codigo)
    {
        $this->codigoBarras = $codigo;
    }

    public function getCodigo()
    {
        echo $this->codigoBarras;
    }
}
