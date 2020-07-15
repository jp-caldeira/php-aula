<?php

$amigos = [
      [ "nome" => "Fulano",
        "sobrenome" => "Silva",
        "qnt_amigos_comum" => 30,
        "link" => "aaa"
      ],
      [ "nome" => "Alberto",
        "sobrenome" => "Silva",
        "qnt_amigos_comum" => 5,
        "link" => "aaa"
      ],
      [ "nome" => "Jonas",
        "sobrenome" => "Oliveira",
        "qnt_amigos_comum" => 11,
        "link" => "aaa"
      ],
      [ "nome" => "Robson",
        "sobrenome" => "Silveira",
        "qnt_amigos_comum" => 9,
        "link" => "aaa"
      ],
      [ "nome" => "Janaina",
        "sobrenome" => "Souza",
        "qnt_amigos_comum" => 12,
        "link" => "aaa"
      ],
      [ "nome" => "Fulano",
        "sobrenome" => "Rodrigues",
        "qnt_amigos_comum" => 4,
        "link" => "aaa"
      ],
      [ "nome" => "João",
        "sobrenome" => "Assis",
        "qnt_amigos_comum" => 75,
        "link" => "aaa"
      ]
];

//usando o for para filtrar amigos em comum
$amigos10 = [];
for ($i=0; $i < sizeof($amigos); $i++) {
    if ($amigos[$i]["qnt_amigos_comum"] > 10) {
        $amigos10[] = $amigos[$i];
    }
}
//var_dump($amigos10);
echo "<br>usando o for para colocar amigos10 na tela:<br>";
for ($x = 0; $x < sizeof($amigos10); $x++){ ?>
  <div>
      <p><?php echo $amigos10[$x]['nome']." ".$amigos10[$x]['sobrenome'] ?></p>
      <p><?php echo "Amigos em comum: ".$amigos10[$x]['qnt_amigos_comum']?></p>
  </div>
<?php
}

//usando o foreach para filtrar
$amigos100 = [];
foreach ($amigos as $amigo) {
  if ($amigo['qnt_amigos_comum'] > 10){
    $amigos100[] = $amigo;
  }
}
// echo "<br><br>var dump no amigos100:<br>";
// var_dump($amigos100);

//botando na função
function verificaAmigosMaiorQue10 ($amigos){
  $amigos100 = [];
  foreach ($amigos as $amigo) {
    if ($amigo['qnt_amigos_comum'] > 10){
      $amigos100[] = $amigo;
    }
  }
  return $amigos100;
}
//função para exibir as infos
function exibeAmigos($amigos){
  foreach($amigos as $amigo_retornado){?>
      <div>
          <p><?php echo $amigo_retornado['nome']." ".$amigo_retornado['sobrenome']."<br>Amigos em comum: ".$amigo_retornado['qnt_amigos_comum'] ?></p>
      </div>
    <?php
    }
  }

echo "<br>filtrando e exibindo com as funções:<br>";
$amigos_filtrados = verificaAmigosMaiorQue10($amigos);
exibeAmigos($amigos_filtrados);

?>
