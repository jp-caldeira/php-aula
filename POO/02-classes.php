<?php

//exemplo:

class ContaBancaria {
  public $ag;
  public $cc;
  public $dinheiro;
  public $limite_saque;

  function sacar($valor){
    if ($valor > $this->$dinheiro){
      echo "Saldo insuficiente";
    } else {
      $this->$dinheiro -= $valor;
    }
  }

function transferir($valor, $conta_bancaria){
  $this->$dinheiro -= $valor;
  $conta_bancaria->$dinheiro += $valor;
  }
}

class Produto {
  public $nome;
  public $preco;
  public $categoria;
  public $quantidade;
  public $descrição;

  function mostrarNome(){
    echo $this->nome;
  }

  function mostrarPreco(){
  echo $this->preco;
}
}

  class Carrinho {

    public $items;

    function addItem(Produto $produto){
      $this->items[] = $produto;
    }

    function removeItem($posicao){
      $this->items[$posicao] = null;
    }

    function exibeItems(){
      if (empty($this->items)){
        echo "Seu carrinho está vazio!<br>";
        } else {
       foreach($this->items as $item){
        var_dump($item). '/n';
      }
    }
  }

    function limpaItems(){
      $this->items = [];
      }

}


 ?>
