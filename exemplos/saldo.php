<?php

use Cliente as GlobalCliente;
use Diarista as GlobalDiarista;

interface Saldo
{
  public function depositar($valor);
  public function sacar($valor);
}

class Cliente implements Saldo
{ 
  private $saldo;

  public function depositar($valor)
  {
    $this->saldo = $this->saldo + ($valor * 1.1);
  }

  public function sacar($valor)
  {
    $this->saldo = $this->saldo - $valor;
  }
}

class Diarista implements Saldo
{ 
  private $saldo;

  public function depositar($valor)
  {
    $this->saldo = $this->saldo + $valor;
  }

  public function sacar($valor)
  {
    $this->saldo = $this->saldo - $valor;
  }
}

function realizaAcaoDepositar(Saldo $pessoa, $valor){
  $pessoa->depositar($valor);
}


realizaAcaoDepositar($cliente, 500);

$diarista = new Diarista;
realizaAcaoDepositar($diarista, 500);

var_dump($cliente, $diarista);