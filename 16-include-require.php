<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name='viewport' content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="master.css">
    <title>Include - Require</title>
  </head>
  <body>
    <?php $titulo = "Home";?>
    <?php include_once('header.php') ?>

    <?php include_once('header.php') ?>
    <section>
        <h1>Página Home</h1>
    </section>
  <?php require_once('footer.php') ?>

  <?php require_once('footer.php') ?>


  </body>
</html>
