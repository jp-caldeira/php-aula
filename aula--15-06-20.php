<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <title>Laços de repetição --- aula 15.06.2020</title>
  </head>
  <body>
      <h1>Exercícios ----- Laços de Repetição</h1>

    <p><strong>1. crie um contador que exiba a contagem na tela até 50, lembre-se de adicionar espaço ou quebra de linha para melhorar a visibilidade;
</strong></p>

<?php
  for ($i=0; $i <= 50; $i++){
  echo $i. "\n";
    }
 ?>
<p><strong>2. faça um contador que conte 50x em ordem regressiva!</strong></p>

<?php
for ($i=50; $i >= 0; $i--){
  echo $i."\n";
}
 ?>

 <strong><p>3. utilizando o foreach e o array abaixo, faça exibir a frase para cada uma das interações:</p>
 <p> "o número da posição x é y"</p>
 <p>onde x é o índice do array e y é o valor; array(100, 404, 500, 200);</p></strong>

<?php
$array = [100, 404, 500, 200];

foreach($array as $key => $valor){
  echo "O número da posição $key é $valor"."<br>";
}
 ?>


<p><strong>4. exiba o podium com a frase, "o medalista X ganhou medalha de Y"</strong></p>

<?php

$podium = [
	[
		"nome" => "João da Silva",
		"medalha" => "Prata"
	],
	[
		"nome" => "Wagner Albuquerque",
		"medalha" => "Bronze"
	],
	[
		"nome" => "Henrique Oliveira",
		"medalha" => "Ouro"
	]
];


 foreach ($podium as $atleta){
     echo "O medalhista $atleta[nome] ganhou medalha de $atleta[medalha]"."<br><br>";
}


//ou

// foreach($podium as $atleta){
//   echo "O medalhista ".$atleta['nome']." ganhou medalha de ".$atleta['medalha']."<br><br>";
// }
//
 ?>

 <p>5. No array abaixo, nos temos um array bidimensional que contem os dados da caixa de email de um usuário.</p>
	<p>Como pode-se reparar no primeiro nível do array, temos um array enumerativo(Que não possuí chave e a posição é assumida de forma automática pela linguagem);</p>
	Já no segundo nível temos um array que possui as seguintes chaves,
		de  	 => Email que enviou o email
		assunto  => Assunto do email
		data 	 => Data que o email foi enviado
		content  => Resumo do email

Utilizando HTML com ajuda do PHP, crie uma lista de emails, parecida com uma caixa de email que exiba demonstre esses dados.
	Para poder criar esse conteúdo você pode usar tanto as tags ul/li quanto a table/tr/td

$data = array(
	array("de"=>"eu.placerat.eget@Vivamusmolestie.edu","assunto"=>"bibendum sed,","data"=>"2021-03-02 10:58:50","content"=>"ac orci. Ut semper pretium neque."),
	array("de"=>"massa.Quisque.porttitor@uterosnon.net","assunto"=>"enim, condimentum eget,","data"=>"2020-10-02 14:58:44","content"=>"penatibus et magnis dis parturient montes,"),
	array("de"=>"eget.varius.ultrices@nequetellusimperdiet.co.uk","assunto"=>"convallis est,","data"=>"2020-02-23 01:44:12","content"=>"Praesent eu dui. Cum sociis natoque"),
	array("de"=>"suscipit.est.ac@luctusut.ca","assunto"=>"est","data"=>"2021-02-22 19:51:09","content"=>"ultricies adipiscing, enim mi tempor lorem,"),
	array("de"=>"pede@facilisis.net","assunto"=>"In","data"=>"2020-07-23 19:46:02","content"=>"Curae; Donec tincidunt. Donec vitae erat"),
	array("de"=>"odio.tristique.pharetra@diamvel.edu","assunto"=>"non,","data"=>"2021-04-12 06:10:37","content"=>"sapien imperdiet ornare. In faucibus. Morbi"),
	array("de"=>"euismod.ac@nonenim.co.uk","assunto"=>"iaculis aliquet","data"=>"2020-08-11 01:31:47","content"=>"pharetra. Nam ac nulla. In tincidunt"),
	array("de"=>"sem.ut.cursus@dolorvitaedolor.com","assunto"=>"nascetur ridiculus","data"=>"2021-02-26 07:23:29","content"=>"pede. Cum sociis natoque penatibus et"),
	array("de"=>"nibh.Donec.est@mattis.com","assunto"=>"quis lectus.","data"=>"2020-11-15 03:45:15","content"=>"at fringilla purus mauris a nunc."),
	array("de"=>"sagittis.semper@necanteblandit.co.uk","assunto"=>"lorem. Donec elementum,","data"=>"2021-03-05 22:38:27","content"=>"vitae, sodales at, velit. Pellentesque ultricies"),
	array("de"=>"dolor.sit@lorem.co.uk","assunto"=>"Nullam","data"=>"2020-05-13 12:28:08","content"=>"ipsum sodales purus, in molestie tortor"),
	array("de"=>"auctor.odio.a@nonarcu.ca","assunto"=>"ligula","data"=>"2019-08-21 12:54:05","content"=>"a tortor. Nunc commodo auctor velit."),
	array("de"=>"faucibus@dolortempusnon.edu","assunto"=>"semper egestas, urna","data"=>"2020-06-20 04:11:41","content"=>"non enim. Mauris quis turpis vitae"),
	array("de"=>"aliquet.sem@nisl.ca","assunto"=>"vel arcu. Curabitur","data"=>"2020-03-07 06:07:18","content"=>"Aliquam erat volutpat. Nulla facilisis. Suspendisse"),
	array("de"=>"interdum@mi.net","assunto"=>"Cras lorem","data"=>"2020-04-04 16:57:54","content"=>"semper et, lacinia vitae, sodales at,"),
	array("de"=>"ultrices@diamProin.edu","assunto"=>"interdum. Sed","data"=>"2020-03-08 09:55:27","content"=>"elit erat vitae risus. Duis a"),
	array("de"=>"parturient.montes.nascetur@semper.net","assunto"=>"neque","data"=>"2020-08-26 15:33:09","content"=>"Sed nec metus facilisis lorem tristique"),
	array("de"=>"pede@Suspendisse.ca","assunto"=>"nunc","data"=>"2021-02-08 09:17:32","content"=>"nec, cursus a, enim. Suspendisse aliquet,"),
	array("de"=>"risus.a.ultricies@elitNulla.org","assunto"=>"aliquet, sem ut","data"=>"2019-10-27 22:13:26","content"=>"felis. Donec tempor, est ac mattis"),
	array("de"=>"dignissim@rhoncus.com","assunto"=>"lorem","data"=>"2020-05-09 08:55:55","content"=>"Aliquam erat volutpat. Nulla facilisis. Suspendisse"),
	array("de"=>"lorem@rutrummagnaCras.net","assunto"=>"ante","data"=>"2019-08-18 21:01:31","content"=>"neque tellus, imperdiet non, vestibulum nec,"),
	array("de"=>"consequat.enim@ametconsectetueradipiscing.net","assunto"=>"posuere cubilia Curae;","data"=>"2019-07-19 19:50:40","content"=>"ultricies sem magna nec quam. Curabitur"),
	array("de"=>"et.pede@tinciduntneque.org","assunto"=>"Sed","data"=>"2021-04-24 09:45:55","content"=>"arcu. Vivamus sit amet risus. Donec"),
	array("de"=>"Phasellus.libero.mauris@tortorat.co.uk","assunto"=>"dui.","data"=>"2020-06-03 00:22:40","content"=>"risus. Morbi metus. Vivamus euismod urna."),
	array("de"=>"non.sapien.molestie@Namconsequatdolor.edu","assunto"=>"Fusce feugiat.","data"=>"2021-03-23 11:23:40","content"=>"enim non nisi. Aenean eget metus."),
	array("de"=>"scelerisque@dictumaugue.net","assunto"=>"aliquam iaculis, lacus","data"=>"2020-09-16 15:34:22","content"=>"neque pellentesque massa lobortis ultrices. Vivamus"),
	array("de"=>"adipiscing.non@ut.ca","assunto"=>"auctor,","data"=>"2020-08-22 03:04:50","content"=>"pretium neque. Morbi quis urna. Nunc"),
	array("de"=>"luctus.lobortis.Class@IntegerurnaVivamus.edu","assunto"=>"gravida sit","data"=>"2020-07-17 07:38:59","content"=>"Proin ultrices. Duis volutpat nunc sit"),
	array("de"=>"risus.Duis@faucibuslectus.net","assunto"=>"mollis non,","data"=>"2020-11-15 22:07:54","content"=>"Integer in magna. Phasellus dolor elit,"),
);


  </body>
</html>
