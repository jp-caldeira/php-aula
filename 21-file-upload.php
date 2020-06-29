<?php
//1. formulário com post e enctype;
//2. ter input tipo file com um name;
//3. onde foi recebido os dados, capturamos os dados no $_Files
//4.armazenar dados em algum lugar através do $_FILE['nome_do-input']['tmp_name'];

?>

<form action="22file.php" method="post" enctype="multipart/form-data">
    <label for="nomeCompleto">Nome Completo</label><br>
        <input type="text" id="nomeCompleto" placeholder="Digite seu nome"><br><br>
    <label for="email">E-mail</label><br>
        <input type="email" id="email" placeholder="digite seu email"><br><br>
    <label for="">Imagem do Usuário</label><br>
        <input type="file" name="imagem[]" value=""><br><br>
    <input type='submit' value="Enviar">
    <!-- funciona igual o button -->







</form>
