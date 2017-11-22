<?php

class Car
{

  public $color = null;
  public $brand = null;
  private $model = null;
  private $fuel = null;

  public function __construct($brand, $model, $fuel, $color = 'black'){
    $this->brand = $brand;
    $this->model = $model;
    $this->fuel = $fuel;
    $this->color = $color;
  }

  public function showInfo(){
  return '<table><tr><td>' . $this->color . '</td></tr>' .
  '<tr><td>' . $this->brand . '</td></tr>' .
  '<tr><td>' . $this->model . '</td></tr>' .
  '<tr><td>' . $this->fuel . '</td></tr></td></table><br>';
  }

  public function getFuel(){
    return $this->fuel;
  }

  public function duurzaamCheck(){
    if($this->fuel == 'Electricity'){
      return 'duurzaam';
      }
      else{
        return false;
      }
  }

  public function getColor(){
    return $this->color;
  }

  public function setColor(){
    if($color = 'Red'){
      return true;
    }else{
      return false;
    }
  }
}

// main code
$ford = new Car('Ford', 'Mustang', 'Gasoline', 'white');
var_dump($ford->setColor());
echo $ford->showInfo();
echo $ford->duurzaamCheck();


echo '<br>';
$toyota = new Car('Toyota', 'Prius', 'Electricity', 'Red');
echo $toyota->setColor();
echo $toyota->showInfo();
echo $toyota->duurzaamCheck();

echo '<br>';
echo '<br>';
$volksagon = new Car('Volksagon', 'Golf', 'Diesel', 'Blue');
echo $volksagon->setColor();
echo $volksagon->showInfo();
echo $volksagon->duurzaamCheck();

// $sharon = new Car('Sharon', 25);
// echo $sharon->showInfo();

?>
