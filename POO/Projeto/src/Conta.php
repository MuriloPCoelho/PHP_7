<?php 
//tipagem de atributos só está disponível na versão 7.4 ou superior 

class Conta 
{
  // Atributos
  public $cpfTitular;
  public $saldo = 0; //define um valor inicial
  public $nomeTitular;


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

}