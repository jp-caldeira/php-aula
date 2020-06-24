<?php
$funcoesExecutadas = 0;

include('22-06-20-funcoes.php');

include('22-06-20-superficie.php');

?>

<h1>Exercício 4 - tudo junto</h1>

<p>Inclua os arquivos superfície.php e funcoes.php, definindo uma função que receberá os raios de 3 círculos e retornará a maior superfície entre ambos. Para este exercício, devemos reutilizar as funções já definidas.
</p>

<?php function maiorCirculo ($raioA, $raioB, $raioC) {
  // $superficieA = circulo($raioA);
  // $superficieB = circulo($raioB);
  // $superficieC = circulo($raioC);
return maior(circulo($raioA), circulo($raioB), circulo($raioC));
}

echo circulo(14);
echo "<br>";
echo circulo(2);
echo "<br>";
echo circulo(30);
echo "<br>";
echo maiorCirculo(14,2,30);
echo "<br>";
?>

<p>5. Modificar <strong>tudoJunto.php</strong> para a primeira linha diga $funcoesExecutadas = 0.
Em seguida, modificar cada função de <strong>funcoes.php</strong> e <strong>superficie.php</strong> para que, ao
começar, façam $funcoesExecutadas++. Testar invocar várias funções e ver quanto
vale $funcoesExecutadas em cada momento. Isso está permitido? O que acontece?</p>

<p>Total de funções executadas neste arquivo: <strong><?=$funcoesExecutadas;?></strong></p>

<p>6. Caso o exercício anterior tenha provocado um erro, modificar a variável com a palavra reservada global para que funcione.</p>

<?="Foram executadas $funcoesExecutadas funções neste arquivo";?>

<p>7. Utilizando strpos(), encontrar a posição da primeira aparição de "php" dentro da cadeia: "Adoro php, Eu também adoro php!"</p>

<?=strpos("Adoro php, Eu também adoro php!", "o");?>
