<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Projetinho de revisão</title>
  </head>
  <body>    
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Olá mundo</a>
        </nav>

        <h1>Tabela</h1>

        
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome do curso</th>
                        <th scope="col">Versão da Ferramenta</th>
                        <th scope="col">Carga Horária</th>                        
                    </tr>
                </thead>
                
                <tbody>

                <?php foreach(cursos() as $curso) : ?>
                    <?php if(!$curso["ativo"]) {
                        continue;
                    } ?>

                    <tr>
                        <td><?= $curso["nome_curso"] ?></th>
                        <td><?= $curso["versao_ferramenta"] ?></td>
                        <td><?= carga_horaria($curso["carga_horaria"]) ?> </td>                        
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        
        
        
        
        
        </div>
    



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    
  </body>
</html>