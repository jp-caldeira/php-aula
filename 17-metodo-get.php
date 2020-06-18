<?php

//echo "<h2>Olá, $_GET[nome] $_GET[sobrenome], bom dia!</h2>";

//echo "<h3>Está tudo bem com a família $_GET[sobrenome] ?</h3>";

//echo "Será mesmo que você tem $_GET[idade] anos de idade?????";

var_dump($_GET);

?>

<br>
<br>

<form class="" action="metodo-get.php" method="GET">

<input type="text" name="nome" value="" placeholder="Digite seu nome">
<input type="text" name="sobrenome" value="" placeholder="Digite seu sobrenome">
<input type="number" name="idade" value="" placeholder="Idade">

<button type="submit" name="button">Enviar</button> 

</form>

<?php 

echo "<h1>Olá,  ".$_GET['nome']." ".$_GET['sobrenome']."</h1>";
//ou
echo "<h1>Olá, $_GET[nome] $_GET[sobrenome]</h1>";


?>