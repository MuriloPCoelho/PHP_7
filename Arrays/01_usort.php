<?php 

$listaAlunos = [
  [
    'nome' => "Jairo",
    'nota' => 7.4,   
  ],
  [
    'nome' => "Fernanda",
    'nota' => 4.1,   
  ],
  [
    'nome' => "Alberto",
    'nota' => 9.8,   
  ],
  [
    'nome' => "Julia",
    'nota' => 8.1,   
  ]

];

function ordenaPorNota(array $aluno1, array $aluno2) : int
{
  // return $aluno1['nota'] > $aluno2['nota'] ? -1 : 1; //operador ternário
  return $aluno1['nota'] <=> $aluno2['nota']; //operador spaceship

}

usort($listaAlunos, 'ordenaPorNota');

echo "<pre>";
echo var_dump($listaAlunos);
echo "</pre>";