<?php 
//tipagem de atributos só está disponível na versão 7.4 ou superior 

class Conta 
{
  private $titular;
  private $saldo;
  private $idConta;
  private static $totalDeContas;

  function __construct(Titular $titular)
  {
    self::$totalDeContas++ ;
    $this->titular = $titular;
    $this->idConta = self::$totalDeContas;

  }

  public function setSaldo(float $saldo) : void
  {
    $this->saldo = $saldo;
  }

  public function getSaldo() : float
  {
    return $this->saldo;
  }

  public static function getTotalDeContas() : int 
  {
    return Conta::$totalDeContas;
  }

  public function getTitular() 
  {
    return $this->titular;
  }
  
}