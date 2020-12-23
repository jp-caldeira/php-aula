<?php

//acesso a membros privados em objetos do mesmo tipo

class a 
{
    public function acao(b $b): void
    {
        echo $b->prop;
    }
}

class b 
{
    private $prop = "privado";
}

$a = new a;
$b = new b;
//$a->acao($b);//erro - não pode acessar uma propriedade privada de b

class c
{
    private $prop = "privado";

    public function acao(c $c)
    {
        echo $c->prop;
    }
}

$c = new c;
$outroC = new c;

$c->acao($outroC);

