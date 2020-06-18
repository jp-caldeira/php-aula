<form class="" action="18-metodo-post.php" method="post">
        <input type="text" name="nome" value="">
        <input type="text" name="sobrenome" value = "">
        <input type="number" name="idade" >
        <button type="submit" name="button"> Enviar </button>
        <br>
</form>


<?php

var_dump($_POST);

if ($_POST['nome'] != ""){
    echo "<br><br>Olá, $_POST[nome] $_POST[sobrenome], tudo bem com você?";
}else{
    echo "<br><br>Bem-vindo, usuário desconhecido! Digite acima seus dados.";
}


?>