<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>--- Exemplo -- html e php</title>
</head>
<body>
    <h1>Exemplo de página html com php</h1>

    <?php $nome = "João" ?>

    <h2>Olá, <?php echo $nome; ?></h2>    
    <p>10 mais 10 é igual a <?php echo 10 + 10; ?></p>

    <?php   

    echo "Linha 1<br>";
    echo "Linha 2<br>";
    echo "linha 3<br>";

    ?>

    <!-- short tags -->

    <?= "olá short tag" ?>
    <p>10 mais 10 é igual a <?= 10 + 10 ?></p>
    
</body>
</html>