<?php

namespace App\Classes;

use App\Interfaces\Imprimivel;
use App\Interfaces\Retornavel;

class Produto implements Imprimivel
{
    private string $titulo;

    public string $descricao = "Produtos em geral";//definindo um valor padrão para a propriedade

    private float $preco;

    private string $codigoBarras;

    public function __construct(string $titulo)
    {
        $this->titulo = $titulo;
    }

    //metódo final - evita que seja sobreescrito
    final public function defineCodigoBarras(string $codigo) : void
    {
        $this->codigoBarras = $codigo;
    }

    private function getCodigo() : string
    {
        return "<br>Código de barras do produto: " . $this->codigoBarras;
    }

    public function definePreco(float $preco): void
    {
        if($preco > 0){
            $this->preco = $preco;
        }
    }

    public function detalhes():void
    {
        echo "<br>Nome do produto: " . $this->titulo."<br>";
        echo "<br>Preço: " . $this->preco."<br>";
        echo "<br>Descrição: " . $this->descricao."<br>";
        echo $this->getCodigo();
    }

    public function retornaDetalhes(): string
    {
        $saida = "<br>Nome do produto: " . $this->titulo."<br>";
        $saida = $saida . "<br>Preço: " . $this->preco."<br>";
        $saida = $saida . "<br>Descrição: " . $this->descricao."<br>";
        $saida = $saida . $this->getCodigo();

        return $saida;
    }

}
