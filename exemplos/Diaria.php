<?php
//classe abstrata nunca poderá gerar objetos
// somente como base para herança
abstract class Atendimento
{
  public $data;
  private $tempo;
  protected $valor;

  public function definirTempo($tempo)
  {
    if($tempo < 1){
      echo 'Não pode adicionar um tempo menor que 1';
      return;
    }
    $this->tempo = $tempo;
  }
}
class Diaria extends Atendimento
{
  public function definirValor($valor)
  {
    $this->valor = $valor;
  }
}
// $at1 = new Atendimento;
// $at1->data = '01/10/2022';
// $at1->definirTempo(8);
$d1 = new Diaria;
$d1->definirValor(100.00);
$d1->data = '01/10/2022';

