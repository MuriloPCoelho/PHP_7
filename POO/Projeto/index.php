<?php 
require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '091829402';
$primeiraConta->nomeTitular = 'Mauricio Saraiva';
$primeiraConta->saldo = 25000;

$primeiraConta->sacar(150);


$segundaConta = new Conta();
$segundaConta->saldo = 10000;

$primeiraConta->tranferir(625, $segundaConta);

echo '<pre>';
echo var_dump($primeiraConta);
echo var_dump($segundaConta);
echo '</pre>';