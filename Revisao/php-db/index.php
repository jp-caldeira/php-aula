<?php

require_once "connect.php";

$host = "Localhost";
$user = "root";
$dbname = "teste_db";

//conectando com o construtor do mysqli
$conexao  = new mysqli($host, $user, $pass, $dbname);

//var_dump($conexao);

//$sql = "CREATE TABLE alunos (id INT PRIMARY KEY, nome VARCHAR(100))";

//$sql = "INSERT INTO alunos (id, nome) VALUES (1, 'João')";

$sql = "SELECT * FROM ALUNOS";

$resultado = $conexao->query($sql);
$resultado2 = $conexao->query($sql);
$resultado3 = $conexao->query($sql);
$resultado4 = $conexao->query($sql);

//var_dump($resultado->fetch_assoc());

// while ($linha = $resultado->fetch_assoc()){
//     var_dump($linha);
// }
//
// while ($linha = $resultado2->fetch_row()){
//     var_dump($linha);
// }
//
// while ($linha = $resultado3->fetch_object()){
//     var_dump($linha);
// }

//fetch all
$linhas = $resultado->fetch_all(MYSQLI_ASSOC);

var_dump($linhas);

foreach($linhas as $linha) {
  echo $linha['id'] . " " . $linha['nome'] . "<br>";
}

//conectando com a funcao connect -- procedural
$conexao2 = mysqli_connect($host, $user, $pass, $dbname);
//var_dump($conexao2);
