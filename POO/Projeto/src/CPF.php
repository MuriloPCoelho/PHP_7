<?php 

class CPF 
{
  protected $cpf;

  public function __construct(string $cpf) {
    
    // if ($this->validaCPF()) {
      $this->cpf = $cpf;

    // } else {
    //   exit;

    // }

  }

  // public function validaCPF() : bool 
  // {
  //   if (strlen($this->cpf) > 5) {
  //     echo "cpf válido";
  //     return true;
  //   } else {
  //     echo "cpf inválido";
  //     return false;
  //   }

  // }

  public function getCPF() : string
  {
    return $this->cpf;
  }
}
