<?php

$secundarios = [
                ["imagem" => "https://www.metabonita.com/wp-content/uploads/2020/03/alimenta%C3%A7%C3%A3o-saud%C3%A1vel1.jpg",
                 "titulo" => "Como comer menos carne: 6 dicas fáceis para você experimentar",
                 "legenda" => "Confira estas maneiras super fáceis para reduzir seu consumo de carne!"
               ],
               ["imagem" => "https://www.metabonita.com/wp-content/uploads/2020/03/motivação-treino-1.jpg",
                "titulo" => "19 dicas motivacionais para treinar em casa e não surtar na quarentena",
                "legenda" => "Um pouco de motivação é sempre bom, né? Confira estas dicas e se prepare para malhar com tudo!"
              ],
              ["imagem" => "https://www.metabonita.com/wp-content/uploads/2020/03/comida-saudável.jpg",
               "titulo" => "7 superalimentos que não podem ficar de fora da sua dieta",
               "legenda" => "Se você quer ter uma vida mais saudável, estes alimentos tem que estar na sua dieta diariamente!"
             ],
             ["imagem" => "https://www.metabonita.com/wp-content/uploads/2020/03/beleza-pele.jpg",
              "titulo" => "4 dicas de beleza para proteger sua pele da poluição",
              "legenda" => "Morar em um cidade grande exige vários cuidados com a nossa pele. Quer saber como ter uma pele maravilhosa? Então confira!"
            ],
            ["imagem" => "https://www.metabonita.com/wp-content/uploads/2020/04/quarentena-corona-fique-em-casa-1180x788.jpg",
             "titulo" => "6 alimentos que vão te ajudar a dormir melhor",
             "legenda" => "Uma boa noite de sono vai melhorar seu sistema imunológico e diminuir o risco de desenvolver várias doenças crônicas. Veja alimentos saudáveis para comer antes de ir para cama!"
           ],
           ["imagem" => "https://www.metabonita.com/wp-content/uploads/2020/04/quarentena-corona-fique-em-casa-1180x788.jpg",
            "titulo" => "5 Dicas de Saúde para Manter a Diabetes Longe",
            "legenda" => "É possível prevenir esta doença com algumas mudanças no nosso estilo de vida. Confira!"
          ]
];

foreach ($secundarios as $secundario) {
  echo "<div class='col-lg-4'><img src=$secundario[imagem] class='img-fluid'>
  <h3 class='titulo-secondary'>$secundario[titulo]</h3>
  <p class='legenda-secondary'>$secundario[legenda]</p>
  </div>";
}


 ?>
