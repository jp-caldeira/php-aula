<?php
$sessao =["Home", "Quem Somos", "Contato"];
$produtos = ["iPhone", "Samsung", "Motorola", "Televisões", "Air Fryer"];
$user = 'Fulano da Silva';
$maravilhasDoMundo = ["Pirâmides do Egito", "Cristo Redentor", "Muralha da China", "Taj Mahal", "Borba Gato"];
 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <meta name='viewport' content="width=device-width, initial-scale=1.0">
     <title>Incorporando HTML</title>
   </head>
   <body>
     <ul>
       <?php foreach($sessao as $valor): ?>
         <li><?php echo $valor; ?></li>
       <?php endforeach; ?>
     </ul>

     <section>
       <h2>
        <?php if ($user === null){ ?>
          Usuário não logado!!!
        <?php } else { ?>
          <?="Olá, $user"; ?>
        <?php } ?>
      </h2>
     </section>

        <section>
          <h2>Produtos</h2>
          <ul>
            <?php foreach($produtos as $produto) {?>
            <h3><?=$produto; ?></h3> <!-- sintaxe curta -->
          <?php } ?>
          </ul>
        </section>
<?php foreach($maravilhasDoMundo as $maravilha){ echo "$maravilha<br>"; } ?>


   </body>
 </html>
