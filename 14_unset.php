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

unset($listaContasCorrente[1001]);
unset($listaContasCorrente[1002]['saldo']);

echo "<pre>";
echo var_dump($listaContasCorrente);
echo "</pre>";