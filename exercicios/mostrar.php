<?php

var_dump($_POST);
session_start();

if(!isset($_SESSION['contador'])){
  $_SESSION['contador'] = 0;
} else {
if(isset($_POST['reiniciar'])){
  $_SESSION['contador'] = 0;
  echo "<br>O contador foi reiniciado: ".$_SESSION['contador'];
} elseif (isset($_POST['aumentar'])) {
  $_SESSION['contador']++;
  echo "<br>O contador está no número: ".$_SESSION['contador'];
}
}



 ?>
