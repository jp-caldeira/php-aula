<?php

$senha = "curso123";
$hash = password_hash($senha, PASSWORD_DEFAULT);
$passString = $_POST['senha'];

//echo $senha."<br>";

//echo $senhacripto."<br>";

//var_dump(password_verify($string, $senhacripto));

if (password_verify($passString, $hash)) {
    echo "Senha correta.";
} else {
  echo "Senha incorreta. Depois de três tentativas sua conta será bloqueada";
}

?>
