<?php
session_start();

echo "Nome: ".$_SESSION['usuar']['nome'];
echo "<br>";
echo "Idade: ".$_SESSION['usuar']['idade']." anos.";



 ?>
