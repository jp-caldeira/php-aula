<?php

require 'connect.php';

// $query = $db->prepare('CREATE TABLE usuarios (
//                            ID int(4) AUTO_INCREMENT PRIMARY KEY,
//                            nome VARCHAR(40) NOT NULL,
//                            Email VARCHAR(30) NOT NULL,
//                            senha VARCHAR(60) NOT NULL
// )');
//  $query->execute();

$produtos = file_get_contents('json/produtos.json');

$produtos = json_decode($produtos, TRUE);

$nomeProduto = $produtos[1]['nome'];
$precoProduto = $produtos[1]['preço'];
$descricaoProduto = $produtos[1]['descrição'];
$produtoImagem =  $produtos[1]['imagem'];

foreach($produtos as $produto){
    $id = $produto['idProduto'];
    $nomeProduto = $produto['nome'];
    $precoProduto = $produto['preço'];
    $descricaoProduto = $produto['descrição'];
    $produtoImagem =  $produto['imagem'];

  echo "<br>";
  echo "<strong>Id do produto:</strong> ".$id;
  echo "<br>Nome: ".$nomeProduto;
  echo "<br>Preço: ".$precoProduto;
  echo "<br>Descrição: ".$descricaoProduto;
  echo "<br>Imagem: ".$produtoImagem;
  echo "<br>";
}

// $query = $db->prepare("INSERT INTO usuarios(ID, nome, Email, senha)
//                          VALUES(DEFAULT, 'Fulaninho', 'fulano@bol.com', '12345747565')");
// $query->execute();


$arrayUsuarios = file_get_contents('json/usuarios.json');
$arrayUsuarios = json_decode($arrayUsuarios, TRUE);

foreach($arrayUsuarios as $usuario){
  $nomeUsuario = $usuario['nome'];
  $emailUsuario = $usuario['email'];
  $senhaUsuario = $usuario['senha'];

// $query = $db->prepare("INSERT INTO usuarios(ID, nome, Email, senha) VALUES (DEFAULT, '$nomeUsuario', '$emailUsuario', '$senhaUsuario')");
// $query->execute();


}


 ?>
