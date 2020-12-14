<?php

class Fornecedor
{
    public string $nomeFantasia;

    public string $cnpj;

    public string $razaoSocial;

    public const PAIS = "Brasil";

    public const NORMA = "1050";

    public function autorizar(object $usuario) : void
    {
      if($usuario->nome == "Joao" && $usuario->senha == "123456"){
          echo "<br>Usuário Autorizado";
      } else {
          echo "<br>Acesso negado";
      }
    }

}
