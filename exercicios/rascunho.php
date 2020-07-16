<?php

$email = 'etc';

$array = [ 1 => ["fruta1" => "laranja", "fruta2" => "abacate", "email" => "jpcm@gmail.com"],
           2 => ["fruta1" => "laranja", "fruta2" => "abacate", "email" => "blabla"],
           3 => ["fruta1" => "laranja", "fruta2" => "abacate", "email" => "aaaa"],
           4 => ["fruta1" => "laranja", "fruta2" => "abacate", "email" => "etc"]
         ];

echo array_key_last($array);

echo "<br><br>";

var_dump($array);

echo "<br><br>";

foreach ($array as $row){
    $arrayEmails[] = $row["email"];
  }

var_dump($arrayEmails);

echo "<br>";

if(in_array($email, $arrayEmails)){
  echo "existe";
} else {
  echo "inexiste";
}

// foreach($row as $key){
//   $arrayEmails[] = $row["email"];
//   echo $row["email"]."<br>";
// }



 ?>
