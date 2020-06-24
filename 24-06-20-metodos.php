<?php

var_dump($_POST);

echo "<br><br>";


if($_POST){
echo "Olá, ".$_POST['nome']."<br><br>";
} else {
  echo "Olá! Digite suas informações.<br>";
}


if($_POST){
  foreach ($_POST as $key => $value) {
  echo $key.": ".$value."<br><br>";
}
}else{

echo " ";

}
?>

<!DOCTYPE HTML>
<html>
<body>

<form action="24-06-20-metodos.php" method="POST">
  <input type="text" name="nome" placeholder="digite seu nome"><br>
  <input type="text" name="email" placeholder="digite seu email"><br>
<br>
  <label for="ficou-sabendo">Como você ficou sabendo deste site?</label><br><br>
      <input type="checkbox" name="ficou-sabendo[]" value="Instagram">Instagram</input>
      <input type="checkbox" name="ficou-sabendo[]" value="Facebook">Facebook</input>
      <input type="checkbox" name="ficou-sabendo[]" value="YouTube">YouTube</input>
      <input type="checkbox" name="ficou-sabendo[]" value="Indicação de amigos">Indicação de amigos</input>
      <input type="checkbox" name="ficou-sabendo[]" value="Outro">Outro</input>
<br>
<br>
  <label for="sexo">Sexo</label><br>
        <input type="radio" name="sexo" value="masculino">Masculino</input>
        <input type="radio" name="sexo" value="feminino">Feminino</input>
<br>
<br>
<label for="dormiuBem">Você dormiu bem ontem?</label><br>
      <select name="dormiuBem">
          <option value=1>1</option>
          <option value=2>2</option>
          <option value=3>3</option>
          <option value=4>4</option>
          <option value=5>5</option>
          <option value=6>6</option>
          <option value=7>7</option>
          <option value=8>8</option>
          <option value=9>9</option>
          <option value=10>10</option>
      </select>
<br>
<br>

<label for="termos">Aceita termos e condições?</label><br>
    <input type="checkbox" name="termos[]" value="sim">Sim</input>
    <input type="checkbox" name="termos[]" value="não">Não</input>
<br>
<br>

  <input type="submit">
</form>

</body>
</html>

<p>Adicionar uma checkbox com opções, que responda à pergunta “Como você ficou sabendo
deste site?”.<br>
b. Adicionar um radio button para selecionar o sexo.<br>
c. Adicionar um select de 1 a 10 que responda à pergunta “Dormiu bem ontem?”.<br>
d. Adicionar uma checkbox para aceitar “Termos e Condições”.<br>
</p>
