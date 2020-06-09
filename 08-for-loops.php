<?php

//1 exemplo

for ($i=0; $i < 5; $i++){
  echo "valor do i:".$i;
  echo "<br>";
}

//exemplo 2

$lista = ["pão","leite","suco","alface","bolacha","arroz","feijão"];


echo "<br>Lista de Compras:<br><br>";

for ($i=0; $i < count($lista); $i++) {
  echo $lista[$i]."<br><br>";

}



 ?>
