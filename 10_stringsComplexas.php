<?php

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

// function exibeMensagem(int $index, array $conta) : string
// { 
//   $mensagem = "$index => $conta[titular] => $conta[saldo] <br>";

//   return $mensagem; 
// }

function exibeMensagem(int $index, array $conta) : string
{ 
  $mensagem = "$index => {$conta['titular']} => {$conta['saldo']} <br>";

  return $mensagem; 
}

foreach ($listaContasCorrente as $index => $conta) {
  echo exibeMensagem($index, $conta);
}