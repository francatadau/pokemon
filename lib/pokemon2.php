<?php
/**
 *
 */
class Pokemon2 extends Pokemon
{

  private $nivel=0;


  function __construct($nombre,$tipo,$poder,$nivel)
  {
    parent::__construct($nombre,$tipo,$poder);

    $this->nivel=$nivel;
  }

    public function getNivel()
    {
        return $this->nivel;
    }

    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    public function calcularNivel(){
      $this->nivel=rand(1,100);
      return $this->nivel;
    }
}


 ?>
