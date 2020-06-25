<?php

if($_POST['idade'] == null){
    echo "Você precisa digitar sua idade!<br><br>Clique em voltar e digite sua idade para continuar";
  } elseif ($_POST['idade'] < 18) {
    echo "Você não está autorizado a entrar no sistema";
    exit;
} else {
  echo "Autorização aceita";
}




?>
