<?php 

// include '10_stringsComplexas.php'; não apresenta erro direto
// require '10_stringsComplexas.php'; não limita a quantidade de vezes que pode ser requisitado
require_once '11_funcoes.php'; //não permitirá que o mesmo arquivo seja requisitado diversas vezes

//é possível executar as funções dos arquivos requisitados

$listaContasCorrente = [
  1001 => [
    'titular' => 'Vinícius',
    'saldo' => 1000,
  ], 
  1002 => [
    'titular' => 'Bernardo',
    'saldo' => 13020,
  ], 
  1003 => [
    'titular' => 'Augusto',
    'saldo' => 233,
  ],
];

$resultado = adiciona2(adiciona2(5));

$listaContasCorrente[1001] = sacar($listaContasCorrente[1001], 500);
$listaContasCorrente[1001] = depositar($listaContasCorrente[1001], 400);

foreach ($listaContasCorrente as $index => $conta) {
  echo exibeMensagem($index, $conta);
}

echo $resultado;
