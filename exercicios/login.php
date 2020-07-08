<?php

var_dump($_POST);

$senhaC = password_hash($_POST['senha'], PASSWORD_DEFAULT);

var_dump($senhaC);

 ?>
