<?php

require_once "autoload/autoload.php";

use App\Repositorio\Curso;
use App\Uteis\Conexao;

$configDB = require 'config/banco-de-dados.php';

//var_dump($configDB);

$conexao = new Conexao($configDB);

var_dump($conexao);

$cursoRepositorio = new Curso;

require_once "exibicao/principal.php";
