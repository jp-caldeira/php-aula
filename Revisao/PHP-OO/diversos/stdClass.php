<?php

$generica = new stdClass;

$generica->nome = "Fulano";
$generica->curso = "PHP";

var_dump($generica);

$array = [
    "nome" => "João",
    "curso" => "PHP"
];

$objeto = (object) $array;

var_dump($objeto);
