<?php 
require_once 'src/Conta.php';
require_once 'src/Titular.php';

$titular1 = new Titular('Mauricio Saraiva','091829402');
$titular2 = new Titular('Jasmin Osiris','83839402');
$primeiraConta = new Conta($titular1);
$segundaConta = new Conta($titular2);
$primeiraConta->setSaldo(25000);

$primeiraConta->tranferir(625, $segundaConta);

echo '<pre>';
echo var_dump($primeiraConta) . "<br>";
echo var_dump($segundaConta) . "<br>";
echo '</pre>';
