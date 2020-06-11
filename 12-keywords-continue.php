<?php
 $array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

 for ($i=0; $i < count($array) ; $i++) { 
     if ($array[$i] == 3) {
         continue;
     }

     echo "O valor é $array[$i]<br />";
 }

//continue pula o valor segundo a condição indicado no if.
//neste código, é exibido na tela:
// 1
// 2
// 4   (pulou o 3)
// 5
// 6
// 7
// 8
// 9


?>

