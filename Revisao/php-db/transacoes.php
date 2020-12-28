<?php

require_once "connect.php";

try {

    $conexao = new PDO("mysql:host=localhost;dbname=teste_db", $user, $pass);

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $conexao->beginTransaction();

      $conexao->query("INSERT INTO alunos (id, nome) VALUES (7, 'Siclan')");
      $conexao->query("UPDATE alunosss SET nome = 'Siclano da Silva' WHERE ID = 7");

    $conexao->commit();//se não houver nenhum erro, o método commit irá efetivar as queries

} catch (\PDOException $e) {
    $conexao->rollBack();//caso dê erro, o rollback desfaz todas as queries

    echo "mensagem: " . $e->getMessage();
    echo "<br>código: " . $e->getCode();
}
