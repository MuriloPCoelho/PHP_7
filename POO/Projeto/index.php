<?php 
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/CPF.php';

$titular1 = new Titular('Mauricio Saraiva',new CPF('091829402'));
$titular2 = new Titular('Jasmin Osiris',new CPF('83839402'));
$primeiraConta = new Conta($titular1);
$segundaConta = new Conta($titular2);
$primeiraConta->setSaldo(25000);

$primeiraConta->tranferir(625, $segundaConta);

echo '<pre>';
echo var_dump($primeiraConta) . "<br>";
echo var_dump($segundaConta) . "<br>";
echo '</pre>';

echo $primeiraConta->getTitular()->getNome() . '<br>';
echo $primeiraConta->getTitular()->getCPF() . '<br>';
echo $primeiraConta->getSaldo() . '<br>';
echo "Total de contas criadas: {$primeiraConta->getTotalDeContas()}";