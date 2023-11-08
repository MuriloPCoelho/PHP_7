<?php 

//ARRAY_MERGE( array arrayX, array arrayY ):
// retorna um novo array com todos os elementos do arrayX e todos elementos do arrayY

$alunos2022 = [
  "Augusto",
  "Bruna",
  "Charles",
  "Daneila",
  "Edwardo"
];

$novosAlunos = [
  "Fabricia",
  "Gabriel",
  "Hercules",
  "Ísis",
  "Julia"
];

$alunos2023 = array_merge($alunos2022, $novosAlunos);

echo "<pre>";
echo var_dump($alunos2023) . PHP_EOL;
echo "</pre>";