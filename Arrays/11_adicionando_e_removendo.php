<?php 

$alunos2023 = [
  "Augusto",
  "Bruna",
  "Charles",
  "Daneila",
  "Edwardo",

];

array_push($alunos2023 , "Gabriel", "Hercules", "Ísis", "Julia"); //consegue adicionar vários elementos ao mesmo tempo ao final do array

$alunos2023[] = "Kaio"; //como adicionar um elemento no final do array

array_unshift($alunos2023, "Amélia"); //adiciona um elemento no início do array

$alunosRemovidos = [];
$alunosRemovidos[] = array_shift($alunos2023); //remove o primeiro elemento do array e retorna o mesmo
$alunosRemovidos[] = array_pop($alunos2023); //remove o ultimo elemento do array e retorna o mesmo

echo "<pre>";
echo var_dump($alunos2023) . PHP_EOL;
echo "Pessoas Removidas: ";
echo var_dump($alunosRemovidos);
echo "</pre>";