<?php

class Person
{

  public $name = '';
  public $age = '';

  public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
  }

  public function showInfo(){
  return 'Dit is ' . $this->name . ' en zijn/haar leeftijd is ' . $this->age;
  }

  public function getAge(){
    return $this->age;
  }

  public function setAge(){
    if($this->age < 151){
      return 'Mens';
    }else{
      return 'You are a legend';
    }
  }

  public function adultCheck(){
    if($this->age < 18){
      return 'Minderjarig';
    }else{
      return 'Volwassen';
    }
  }
}

// main code
$tim = new Person('Tim', 21);
echo $tim->showInfo() . '<br>';
echo $tim->setAge() . '<br>';
echo $tim->adultCheck() . '<br>';

echo '<br>';

$sharon = new Person('Sharon', 5);
echo $sharon->showInfo() . '<br>';
echo $sharon->setAge() . '<br>';
echo $sharon->adultCheck() . '<br>';

?>
