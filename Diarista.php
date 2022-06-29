<?php
//Classe PAI
class Pessoa 
{
  public $nome;
  public $telefone;
  public $endereco;
}
//Classe FILHO
class Cliente extends Pessoa
{
  public $saldo;
}
//Classe FILHO
class Diarista extends Pessoa
{
  public $chavePix;
  /**
   * Atende ao cliente
   *
   * @param string $nomeCliente
   * @return void
   */
  public function atenderCliente($nomeCliente)
  {
    //chamando a propriedade
    $nomeDiarista = $this->nome;
    echo "<br> A diarista $nomeDiarista atendeu o cliente $nomeCliente.";
  }
  /**
   * Avalia o cliente
   *
   * @param string $nomeCliente
   * @param int $nota
   * @return void
   */
  public function avaliarCliente($nomeCliente, $nota)
  {
    $this->atenderCliente($nomeCliente);
    echo " Avaliou o cliente com a nota $nota";
  }
}
//declaração do objeto
$maria = new Diarista;
$maria ->nome = "Maria da Silva";
$maria ->telefone = "(48) 99943 5467";
$maria ->endereco = "Rua Luxemburgo, 480";
$maria ->avaliarCliente('Alex',7);
var_dump($maria);

$joao = new Diarista;
$joao ->nome = "João da Silva";
$joao ->telefone = "(43) 98443 5457";
$joao ->endereco = "Rua Paraguai, 80";
$joao ->avaliarCliente('Fernanda',9);
var_dump($joao);