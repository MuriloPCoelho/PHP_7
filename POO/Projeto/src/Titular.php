<?php

class Titular {
  private $nome;
  private $cpf;

  public function __construct(string $nome, CPF $cpf) 
  {
    $this->nome = $nome;
    $this->cpf = $cpf;

  }

  // public function setNome(string $nome) : void
  // {
  //   $this->nomeTitular = $nome;
  // }

  public function getNome() : string
  {
    return $this->nome;
  }

  // public function setCPF(string $cpf) : void
  // {
  //   $this->cpfTitular = $cpf;
  // }

  public function getCPF() : string
  {
    return $this->cpf->getCPF();
  }
}