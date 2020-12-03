<?php

error_reporting(E_ALL);

$valor1 = 10;

//erro notice - não interrompe a execução:

// echo $valor; //NOTICE: undefined variable (variavel valor não foi definida)
//
// echo "<br>fim do programa<br>";

//erro warning - também não interrompe a execução

//$numero = NAO_EXISTE;
//Warning: Use of undefined constant NAO_EXISTE (this will throw an Error in a future version of PHP)

//erro fatal - para a execução do script

function somar($valor1, $valor2)
{
return $valor1 + $valor2;

}

// function somar($valor1)
// {
//    return $valor1++;
// }
//Fatal error: Cannot redeclare somar() on line 26

//parse - erro de sintaxe - interrompe a execução

echo "bla bla bla" // Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ';' or ',

echo "<br>fim do programa<br>";
