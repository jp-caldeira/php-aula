<?php

require_once "../connect.php";

$conexao = mysqli_connect($host, $user, $pass, $dbname);//retorna um objeto, igual o new mysqli

$result = mysqli_query($conexao, "SELECT * FROM ALUNOS");
$result2 = mysqli_query($conexao, "SELECT * FROM ALUNOS");//retorna objeto mysqli_result

var_dump($result);

$array1 = mysqli_fetch_all($result);

$arrayAssoc = mysqli_fetch_all($result2, MYSQLI_ASSOC);

//var_dump($array1, $arrayAssoc);
