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
    public $precoTotal;

    function exibeTotal(){
      echo $this->precoTotal;
    }

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
        echo "Nome do produto: ";
        $item->mostrarNome();
        echo "<br>";
        echo "Preço do produto: ";
        $item->mostrarPreco();
        echo "<br>";
        var_dump($item);
        echo "<br><br>";
        }
    }
  }

    function limpaItems(){
      $this->items = [];
      }
//tentando somar o valor do carrinho
function valorTotal(){
    $this->precoTotal = 0;
    if(!empty($this->items)){
      foreach($this->items as $item){
        $valorTotal = $this->precoTotal;
        $preco = $item->preco;
        $valorTotal = $valorTotal + $preco;
        $this->precoTotal = $valorTotal;
        }
        return $this->precoTotal;
    } else {
      echo "Carrinho está vazio<br>";
    }
}

}


 ?>
