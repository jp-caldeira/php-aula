<?php

$array = ["Maçã", "Goiaba", "Melancia"];

echo "Fruta em promoção: $array[1]";

exit;

echo "Frutas em promoção: $array[0] $array[2]";

//aqui ele só vai imprimir:
//Fruta em promoção: Goiaba
//depois do exit, nada mais é executado

?>