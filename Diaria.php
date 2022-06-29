<?php

class Atendimento
{
  public $data;
  private $tempo;

  public function definirTempo($tempo)
  {
    if($tempo < 1){
      echo 'Não pode adicionar um tempo menor que 1';
      return;
    }
    $this->tempo = $tempo;
  }
}

$at1 = new Atendimento;
$at1->data = '01/10/2022';
$at1->definirTempo(0);

var_dump($at1);