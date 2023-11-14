<?php 
require_once 'src/Conta.php';
require_once 'src/Titular.php';

$titular = new Titular('Mauricio Saraiva','091829402');
$primeiraConta = new Conta($titular);
$primeiraConta->setSaldo(25000);

echo '<pre>';
echo var_dump($primeiraConta);
echo '</pre>';