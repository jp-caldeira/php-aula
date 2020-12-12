<?php

class Fornecedor
{
    public $nomeFantasia;

    public $cnpj;

    public $razaoSocial;

    public const PAIS = "Brasil";

    public const NORMA = "1050";

    public function autorizar($usuario)
    {
      if($usuario->nome == "Joao" && $usuario->senha == "123456"){
          echo "<br>Usuário Autorizado";
      } else {
          echo "<br>Acesso negado";
      }
    }
    
}
