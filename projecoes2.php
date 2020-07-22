<?php

//var_dump($_POST);

$semana1 = $_POST['semana1'];

$semana2 = $_POST['semana2'];

function totalSemana($array){
$resultado = 0;
foreach($array as $dia){
  $resultado = $resultado + $dia;
}
return $resultado;
}

function mediaSemana($array){
  $resultado = totalSemana($array)/7;
  return $resultado;
}

$casosSemana1 = totalSemana($semana1);
$mediaCasosSemana1 = floor(mediaSemana($semana1));
$casosSemana2 = totalSemana($semana2);
$mediaCasosSemana2 = floor(mediaSemana($semana2));

echo "<br>O total da semana 1 foi de ".$casosSemana1." casos<br>";
echo "<br>A média da semana 1 foi de ".$mediaCasosSemana1." casos por dia<br>";
echo "<br><br>O total da semana 2 foi de ".$casosSemana2." casos<br>";
echo "<br>A média da semana 2 foi de ".$mediaCasosSemana2." casos por dia<br>";

function diferencaSemana($casos1, $casos2){
    $diferenca = $casos1 - $casos2;
    return $diferenca;
}

$diferencaSemana = diferencaSemana($casosSemana2, $casosSemana1);

function percentualSemana($casos1, $diferenca){
  $resultado = ($diferenca / $casos1);
  return $resultado;
}

$percentual = percentualSemana($casosSemana1, $diferencaSemana);

echo "<br>A diferença percentual entre as duas semanas foi de ".$percentual."<br>";

$projecao = $casosSemana2;

for($i=1; $i <= 20; $i++){
  $projecao = $projecao + ($projecao * $percentual);
  $projround = round($projecao);
  $projmedia = round($projround / 7);
  echo "<br>Projeção para semana ".$i.": ".$projround." novos casos.";
  echo "<br>Média de ".$projmedia." novos casos por dia.<br>";
}


?>
