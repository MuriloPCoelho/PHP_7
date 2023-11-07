<?php 

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