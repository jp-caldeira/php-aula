<?php

//tratando exceções

error_reporting(E_ALL);

// $divisor = 1; // Warning: Division by zero
//
//
// try {
//   if($divisor == 0){
//     throw new \Exception("Não é possível dividir por zero. Defina um valor diferente de 0.", 1);
//   }
//
//     $valor = 100 / $divisor;
//     echo $valor;
// } catch (\Exception $e) {
//   echo $e->getMessage();
// }





try{

  $a = 3;
  $b = " ";
    if ($b === 0){
        throw new Exception("Erro: Divisão por zero não permitida", 1);
    }

    if(is_numeric($a) == false){
        throw new Exception("Valor não pode ser convertidado para inteiro: $a", 1);
    }

    if(is_numeric($b) == false){
        throw new Exception("Valor não pode ser convertidado para inteiro: $b", 1);
    }

    $resultado = $a / $b;
    echo $resultado;
  } catch (Exception $e){
    echo $e->getMessage();
}
