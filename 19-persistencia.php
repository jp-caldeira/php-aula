<?php

//var_dump($_GET);

if ($_GET != null) {
$nome = $_GET['nome'];
$sobrenome = $_GET['sobrenome'];
$idade = $_GET['idade'];
$profissao = $_GET['profissao'];
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

 <form class=""  action="19-persistencia.php" method="GET">
    <input type="text" name="nome" value="<?=$nome?>"> <!--sintaxe curta -->
    <input type="text" name="sobrenome" value="<?php echo $sobrenome?>">
    <input type="number" name="idade" value="<?=$idade?>">


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
