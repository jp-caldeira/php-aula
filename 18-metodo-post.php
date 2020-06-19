<form class="" action="18-metodo-post.php" method="post">
        <input type="text" name="nome" value="">
        <input type="text" name="sobrenome" value = "">
        <input type="number" name="idade" >
        <button type="submit" name="button"> Enviar </button>
        <br>
</form>



<?php

//var_dump($_POST);
//var_dump($_REQUEST);

if ($_POST['nome'] || $_POST['sobrenome'] != ""){
    echo "<br><br>Olá, $_REQUEST[nome] $_POST[sobrenome], tudo bem com você?";
}else{
    echo "<br><br>Bem-vindo, usuário desconhecido! Digite acima seus dados.";
}


?>
