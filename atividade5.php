<html>
  <body>

    <?php
      //Array com chave => Valor
      $listaAlunoIdade = Array(
        "Leonardo" => 31,
        "Gabriela" => 27,
        "Bianca" => 07
      );

      //Array apenas com valor
      $listacores = Array(
        "Vermelho",
        "Amarelo",
        "Verde",
        "Laranja"
      );

      //Acesso ao item de Array $listaAlunoIdade[CHAVE]
      echo $listaAlunoIdade["Leonardo"];

      echo "<br />";

      echo $listacores[2];

      echo "<br />";

      //Exibir em tela todo o conteudo (chave e valo) de um Array var_dump(Array)
      var_dump(listaAlunoIdade);

      echo "<br />";

      var_dump(listacores);
    ?>
  </body>
</html>