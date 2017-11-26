<?php

abstract class dice{
    protected $numbers = array();

    public function __construct(){

    }
    protected abstract function getNumber();
    protected abstract function roll();
}

class normalDice extends dice{

    public function getNumber() {
      for ($i = 0; $i <= 6; $i++) {
        array_push($this->numbers, mt_rand(1,6));
      }
      return $this->numbers;
    }

    public function roll() {
      foreach ($this->numbers as $value) {
          echo '<img src=img/faces/'. $value .'.png height="100" width="100">';
      }
  }
}

$normal = new normalDice();
$normal->getNumber();
echo $normal->roll();

 ?>
