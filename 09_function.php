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

function exibeMensagem(int $index, array $conta) : string
{ 
  $mensagem = $index . " => " . $conta['titular'] . ' => ' . $conta['saldo'] . "<br>";

  return $mensagem; 
}

function adiciona2(float $x) : float
{
  return $x + 2;

}

function sacar(array $conta, float $valorSaque) : array
{
  if ($conta['saldo'] < $valorSaque) {
    echo '[ERROR] Você não possui saldo suficiente.';
  } else {
    $conta['saldo'] -= $valorSaque;
  }

  return $conta;

}

function depositar(array $conta, float $valorDeposito) : array
{
  if ($valorDeposito <= 0 || $valorDeposito != is_numeric($valorDeposito)) {
    echo '[ERROR] Valor inválido';
  } else {
    $conta['saldo'] += $valorDeposito;
  }

  return $conta;

}

$resultado = adiciona2(adiciona2(5));

$listaContasCorrente[1001] = sacar($listaContasCorrente[1001], 500);
$listaContasCorrente[1001] = depositar($listaContasCorrente[1001], 400);

foreach ($listaContasCorrente as $index => $conta) {
  echo exibeMensagem($index, $conta);
}

echo $resultado;
