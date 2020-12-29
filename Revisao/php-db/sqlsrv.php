<?php

try {

    $serverName = "localhost\SQLEXPRESS";
    $database = "teste_mssql";
    $user = "sa";
    $pass = "123456789";

    $conexao = new PDO("sqlsrv:server=$serverName;Database = $database", $user, $pass);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // $sql = "CREATE TABLE alunos (id int primary key, nome VARCHAR(100))";
    //
    // $conexao->query($sql);

    $sql = "INSERT INTO alunos (id, nome) VALUES (2, 'Catarina')";

    $conexao->query($sql);

    $sql = "SELECT * FROM alunos";

    $resultado = $conexao->query($sql);

    $alunos = $resultado->fetchAll(PDO::FETCH_ASSOC);

    var_dump($alunos);

} catch (\PDOException $e) {
  echo $e->getMessage();
  echo "<br>". $e->getCode();
}
