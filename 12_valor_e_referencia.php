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

  function sacar(&$conta, $valor) //utilizar '&' para atribuir a referência 
  {
    $conta['saldo'] -= $valor;

  }

  function depositar($conta, $valor) 
  {
    $conta['saldo'] += $valor;

  }

  sacar($listaContasCorrente[1001], 500);

  depositar($listaContasCorrente[1001], 40000);

  echo "<pre>";
  echo var_dump($listaContasCorrente);
  echo "</pre>";