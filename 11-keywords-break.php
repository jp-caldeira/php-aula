<?php

// for ($i=0;$i<5;$i++){
//     if ($i == 3){
//     break;   
//     }
//     echo "Valor do i: $i";

// }

// echo "<br>Acabou o loop";

$frutas = ["Goiaba", "Jaca", "Maçã"];

for ($i = 0; $i < count($frutas); $i++){
    if ($i == 2) {
        break;
    }
    
    $valor = $frutas[$i];

    echo "A fruta de hoje é $valor <br />";
}


?>