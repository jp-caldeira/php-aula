<?php

require_once "src/Classes/Fornecedor.php";

 // Class Usuario
 // {
 //   public $nome = "Joao";
 //   public $senha = "123456";
 // }


 $fornecedor = new Fornecedor;

 //usando classe anonima
 
  $fornecedor->autorizar(new Class {
   public $nome = "Joao";
   public $senha = "123456";
 });
