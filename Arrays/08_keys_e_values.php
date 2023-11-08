<?php 

//ARRAY_KEYS
// retorna um array com todas as chaves do array passado
//ARRAY_VALUES
// retorna um array com todos os valores do array passado

$listaAlunos1 = [
	"Jairo" => 5.3,
	"Fernanda" => 2.1,
	"Alberto" => 7,
	"Julia" => 9.2,
  "Augusto" => 6.4,
  "Jenniffer" => 7,
  "Oliver" => 2,
];

$listaAlunos2 = [
	"Jairo" => 5.3,
	"Fernanda" => 2.1,
	"Alberto" => 4,
	"Julia" => 9.2,
  "Jorge" => 1.8,
];

$alunosFaltantes = array_keys(array_diff_key($listaAlunos1, $listaAlunos2));
$notasFaltantes = array_values(array_diff_key($listaAlunos1, $listaAlunos2));
$listasCombinadas = array_combine($notasFaltantes,$alunosFaltantes);

echo "<pre>";
echo var_dump(array_diff_key($listaAlunos1, $listaAlunos2)) . PHP_EOL;
echo "Alunos Faltantes: ";
echo var_dump($alunosFaltantes) . PHP_EOL;
echo "Notas Faltantes: ";
echo var_dump($notasFaltantes) . PHP_EOL;
echo "Combinado: ";
echo var_dump($listasCombinadas) . PHP_EOL;
echo "Invertido: ";
echo var_dump(array_flip($listasCombinadas));
echo "</pre>";
