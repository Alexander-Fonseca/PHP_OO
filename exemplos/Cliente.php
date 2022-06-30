<?php

use Cliente as GlobalCliente;

class Cliente 
{
  private $nome;

  public function __construct($nome)
  {
    $this->nome = $nome;
  }

  public function __toString()
  {
    return 'Nome do cliente: ' . $this->nome;
  }

  public function __invoke()
  {
    return 'chamou como uma função';
  }
}

$cli1 = new Cliente('Leco');

echo $cli1();