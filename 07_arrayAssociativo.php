<?php 

$conta1 = [
  'titular' => 'Vinícius',
  'saldo' => 1000,
];

$conta2 = [
  'titular' => 'Bernardo',
  'saldo' => 13020,
];

$conta3 = [
  'titular' => 'Augusto',
  'saldo' => 233,
];

$listaContasCorrente = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($listaContasCorrente); $i++) {
  echo $listaContasCorrente[$i]['titular'] . "<br>";

}