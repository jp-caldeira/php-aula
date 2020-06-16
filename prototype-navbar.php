<?php

$categorias = array('Saúde','Alimentação', 'Bem Estar','Beleza','Moda');

 ?>


<nav class='navbar navbar-expand-lg navbar-dark' style='background-color: #a3268e;'>
    <div class="container navbar-container">
        <a class='navbar-brand brand-1'>Meta Bonita</a>
      <ul class='navbar-nav'>
        <?php foreach($categorias as $categoria) {
          echo "<li class='nav-link' a href='http://metabonita.com'>$categoria</li>";

        }

        ?>
      </ul>
    </div>
</nav>
