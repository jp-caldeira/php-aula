<?php

//ENCAPSULAMENTO E COMPORTAMENTO DOS MÉTODOS MÁGICOS GET E SET

class a
{
    private string $prop = "privado";

    public function __get(string $nome)
    {
        return $this->$nome;
    }

    public function __set(string $nome, $valor):void
    {
        $this->$nome = $valor;
    }

    public function imprimir(): void 
    {
        echo $this->prop;   
    }
}

$a = new a;

echo $a->prop;//vai exibir o valor de $prop, mesmo sendo uma propriedade privada
$a->prop = "teste"; // como o metodo __set foi definido, o encapsulamento foi quebrado e agora é possível redefinir a variavel diretamente

$a->imprimir();





