<?php

echo "Sistema de credenciamento";
//var_dump($_POST);

?>

<form action='29-06-exercicio.php' method="POST" enctype="multipart/form-data">
    Nome:<br>
    <input type="text" name="nome" value=""><br>
    Email:<br>
    <input type="email" name="email" value=""><br>
    Senha:<br>
    <input type="password" name="senha" value=""><br>
    Insira sua foto:<br>
    <input type="file" name="arquivo" value="">
    <br>
    <button type="submit" name="button">Enviar</button>

</form>
<!-- - confirmação de senha (hash) -->
<?php var_dump($_POST);

var_dump($_FILES);
echo "<br><br>";
echo $_FILES['arquivo']['name'];


$extensoesValidas = ["image/jpeg", "image/jpg", "image/png"];

if ($_FILES['arquivo']['error'] === UPLOAD_ERR_OK){
    if (array_search($_FILES['arquivo']['type'], $extensoesValidas) === false) {
        echo "Extensão de arquivo inválida. Por favor, envie um arquivo JPEG, JPG, ou PNG";
        exit;
    }

if (move_uploaded_file($_FILES['arquivo']['tmp_name'],'img/'.$_FILES['arquivo']['name'])) {
    echo "Arquivo salvo com sucesso<br><br>";
} else {
    echo "Erro na hora de salvar seu arquivo<br><br>";
}
} else {
    echo "Erro no envio do arquivo<br><br>";
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$foto = 'img/'.$_FILES['arquivo']['name'];

$senhacripto = password_hash($senha, PASSWORD_DEFAULT);

$arrayzinho = ["nome" => $nome, "email" => $email, "senha" => $senhacripto, "foto" => $foto];//criando um array associativo

echo "<br><br>";
var_dump($arrayzinho);
echo"<br>";
$arrazy2 = json_encode($arrayzinho);

file_put_contents('aula26.json', $arrazy2);

$arrayzinho = file_get_contents('aula26.json');

$arrayzinho3 = json_decode($arrayzinho, true);//transforma a string do json em um array

echo "<br><br>";

var_dump($arrayzinho3);

$variavel = password_verify($arrayzinho3["senha"], $senhacripto);

var_dump($variavel);

?>
