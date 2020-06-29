<?php

//var_dump($_GET);

if ($_POST != null) {
$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$idade = $_POST['idade'];
$profissao = $_POST['profissao'];
} else {
  $nome = " ";
  $sobrenome = " ";
  $idade = " ";
  $profissao = " ";

}

$array_profissoes = ["Professor", "Programador", "Analista"];

 ?>


<br>
<br>

 <form class=""  action="19-persistencia.php" method="POST">
    <input type="text" name="nome" value="<?=$nome?>" placeholder="digite seu nome"> <!--sintaxe curta -->
    <input type="text" name="sobrenome" value="<?php echo $sobrenome?>" placeholder="digite seu sobrenome">
    <input type="number" name="idade" value="<?=$idade?>" placeholder="digite sua idade">


<select name="profissao">
    <option default value="Escolha uma profissão">
      Escolha uma profissão
    </option>

<?php foreach($array_profissoes as $valor):?>
  <?php if($profissao == $valor){ ?>
  <option selected value="<?=$valor?>"><?=$valor?></option>
    <?php }else{ ?>
        <option value="<?=$valor?>"><?=$valor?></option>
      <?php } endforeach ?>

</select>
  <button type="submit" name="button"> Enviar </button>

 </form>
