<?php 

//LIST()=ARRAY
//atribui variáveis para os elementos passados como parâmetro com base no array

$dadosAluno1 = [
  'nome' => 'Arthur',
  'nota' => 8,
  'idade' => 23

];

$dadosAluno2 = ['Barbara', 6, 24];

list('nome' => $nome,'nota' => $nota,'idade' => $idade) = $dadosAluno1; //caso o array seja associativo, faz-se necessário a utilização da sintaxe com as chaves
echo "Aluno: $nome <br>Nota: $nota <br>Idade: $idade <br><br>";

[$nome, $nota, $idade] = $dadosAluno2; //sitaxe reduzida
echo "Aluno: $nome <br>Nota: $nota <br>Idade: $idade";