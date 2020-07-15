<?php
session_start();

var_dump($_POST);

foreach ($_POST as $key => $value) {
  if ($_POST[$key] === "sim"){
    $hobbiesValidos[] = $key;
  }
}
echo "<br><br>var dump nos hobbies que foram confirmados pelo usuário:<br>";
var_dump($hobbiesValidos);

echo "<br><br>pegando dados do arquivo json:<br>";
$userdata = file_get_contents("infos.json");
$userdata = json_decode($userdata, true);
var_dump($userdata);

$userdata['hobbies'] = $hobbiesValidos;

$userdata = json_encode($userdata);
file_put_contents('infos.json', $userdata);

echo "<br><br>";
$arrayCompleto = file_get_contents('infos.json');
$arrayCompleto = json_decode($arrayCompleto, true);

echo "<br><br>";
echo "Nome: ".$arrayCompleto['nome']."<br>";
echo "Idade: ".$arrayCompleto['idade']." anos<br>";
echo "Hobbies: ";
foreach($arrayCompleto['hobbies'] as $value){
  echo $value." ";
}


//$_SESSION["usuar"]["hobbies"]= $hobbiesValidos;
// echo "<br><br>var dump na session:<br>";
// var_dump($_SESSION);

// echo "<br><br>imprimindo para o usuário:<br>";
// foreach ($_SESSION['usuar'] as $key => $value) {
// }



?>
