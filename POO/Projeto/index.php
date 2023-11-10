<?php 
require_once 'src/Conta.php';

$primeiraConta = new Conta();
$primeiraConta->cpfTitular = '091829402';
$primeiraConta->nomeTitular = 'Mauricio Saraiva';
$primeiraConta->saldo = 25000;

echo '<pre>';
echo var_dump($primeiraConta);
echo '</pre>';