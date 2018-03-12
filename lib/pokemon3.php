<?php
/**
 *
 */
class Pokemon3 extends Pokemon
{

  private $vida=0;

  function __construct($nombre,$tipo,$poder,$nivel,$vida)
  {
    parent::__construct($nombre,$tipo,$poder,$nivel);
    $this->vida=$vida;
  }

  public function getVida()
  {
      return $this->vida;
  }

  public function setVida($vida)
  {
      $this->vida = $vida;

      return $this;
  }

  public function calcularVida(){
    $this->vida=rand(10,400);
    return $this->vida;
  }
}
 ?>
