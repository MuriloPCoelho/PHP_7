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

  // Métodos
  public function sacar(float $valorDoSaque) : void
  {
    if ($valorDoSaque > $this->saldo) {
      echo "Saldo indisponível";

    } else {
      $this->saldo -= $valorDoSaque;

    }
  }

  public function depositar(float $valorDoDeposito) : void 
  {
    if ($valorDoDeposito < 0) {
      echo "Valor precisa ser positivo";

    } else {
      $this->saldo += $valorDoDeposito;

    }

  }

  public function tranferir(float $valorDaTransferencia, Conta $contaDeDestino): void
  {
    if ($valorDaTransferencia > $this->saldo) {
      echo "Saldo Indisponível";

    } else {
      $this->sacar($valorDaTransferencia);
      $contaDeDestino->depositar($valorDaTransferencia);

    }
  }

  //getters e setters

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