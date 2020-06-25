<?php

//var_dump($_FILES);

$extensoesValidas = ["image/jpeg", "image/jpg", "image/png"];
//validando arquivos
if ($_FILES['imagem']['error'] === UPLOAD_ERR_OK){
    if (array_search($_FILES['imagem']['type'], $extensoesValidas) === false) {
        echo "Extensão de arquivo inválida. Por favor, envie um arquivo JPEG, JPG, ou PNG";
        exit;
    }
//salvando arquivos
if (move_uploaded_file($_FILES['imagem']['tmp_name'], 'img/'.$_FILES['imagem']['name'])) {
    echo "Arquivo salvo com sucesso<br><br>";
} else {
    echo "Erro na hora de salvar seu arquivo<br><br>";
}
} else {
    echo "Erro no envio do arquivo<br><br>";
}




//loop para imprimir todas as infos do array $_FILES['imagem']: name, type, tmp_name, error, size

foreach($_FILES['imagem'] as $key => $value){
    echo $key.": ".$value."<br>";
}


$nome = $_FILES['imagem']['name'];

echo "<br><br>";
echo "A extensão do arquivo é: ".pathinfo($nome, PATHINFO_EXTENSION);

echo "<br><br>";
echo dirname(__FILE__);

?>