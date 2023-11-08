<?php

//ARRAY_DIFF()
// ignora as chaves
// compara as diferenças entre X número de arrays passados como parâmetro
// retorna um novo array com todos elementos que possuem valores diferentes entre os arrays

//ARRAY_DIFF_KEY()
// ignora os valores
// compara as diferenças entre X número de arrays passados como parâmetro
// retorna um novo array com todos elementos que possuem chaves diferentes entre os arrays

//ARRAY_DIFF_ASSOC()
// leva em conta tanto as chaves quanto os valores
// retrona um novo array com todos os elementos que tiverem 
// compara as diferenças entre X número de arrays passados como parâmetro

// *Irá ser com parado A com B, o que tiver de diferente dos outros parâmetros em relação com o primeiro passado*

$listaAlunos1 = [
	"Jairo" => 5.3,
	"Fernanda" => 2.1,
	"Alberto" => 7,
	"Julia" => 9.2,
  "Augusto" => 6,
];

$listaAlunos2 = [
	"Jairo" => 5.3,
	"Fernanda" => 2.1,
	"Alberto" => 4,
	"Julia" => 9.2,

];

echo "<pre>";
echo "Array 1: " . PHP_EOL;
echo  var_dump($listaAlunos1) . PHP_EOL;
echo "Array 2: " . PHP_EOL;
echo  var_dump($listaAlunos2) . PHP_EOL;
echo "PHP_DIFF | Resultado: " . PHP_EOL;
var_dump(array_diff($listaAlunos1, $listaAlunos2)) . PHP_EOL;
echo "PHP_DIFF_KEY | Resultado: " . PHP_EOL;
var_dump(array_diff_key($listaAlunos1, $listaAlunos2)) . PHP_EOL;
echo "PHP_DIFF_ASSOC | Resultado: " . PHP_EOL;
var_dump(array_diff_assoc($listaAlunos1, $listaAlunos2)) . PHP_EOL;
echo "</pre>";

