<?php

require_once "autoload/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;

$configDB = require 'config/banco-de-dados.php';

//var_dump($configDB);

$conexao = new Conexao($configDB);

$cursoRepositorio = new Curso($conexao);

$cursoRepositorio->todos();


//require_once "exibicao/principal.php";
