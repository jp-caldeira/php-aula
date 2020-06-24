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

<?php
$myString = "Adoro php, Eu também adoro php!";
$findme = "php";
$pos = strpos($myString, $findme);

if ($pos === false){
  echo "A string <strong>$findme</strong> não foi encontrada na string <em>$myString</em>.";
} else {
  echo "A string <strong>$findme</strong> foi encontrado na string <em>$myString</em> ";
  echo "e está na posição <strong>$pos</strong>.";
  }
?>

<p>8. Criar um processo executado a partir da linha de comando que:
<ul>
<li>Cumprimente o usuário dizendo “Olá, Mundo”.</li>
<li>Peça para ele inserir o nome e depois diga “Boas-vindas, nome”, em que nome seja substituído pela informação inserida.</li>
<li>Peça para o usuário inserir a idade. Se ele for menor de 18 anos, diremos “Você não está autorizado no sistema” e o programa terminará. Se ele for maior de 18 anos, diremos “Autorização aceita”.</br>
<li>Criar uma função hobbyValido. Essa função recebe uma string e retorna verdadeiro caso essa string tenha menos de 15 caracteres e mais de 3 caracteres.</li>
<li>Pediremos para o usuário inserir os hobbies <strong>separados por vírgula</strong>.</li>
<li>Para cada hobby válido, dizer “Você confirma que gosta de HOBBY?” (a palavra HOBBY será substituída por cada valor inserido).</li>
<li>Ao final, imprimir:</li>

<ul>
  <li>Nome: João</li>
  <li>Idade: 25</li>
  <li>Hobbies: Futebol, Netflix, Sorvete</li>
</ul>
</ul>

<p>Só devem ser impressos os hobbies confirmados.</p>
<p>Dica: Utilizar a função explode</p>

</p>
