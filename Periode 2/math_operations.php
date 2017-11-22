 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Math Operations</title>
   </head>
   <body>
<?php

class mathOperation{

  protected $uno = null;
  protected $dos = null;
  protected $result = null;
  protected $values = array();

  public function __construct(){
  }

  public function showResult(){
    return $this->result;
  }

  public function getUno(){
    return $this->uno;
  }

  public function getDos(){
    return $this->dos;
  }

  public function setArray($values){
    $this->values = $values;
  }

  public function __destruct(){
  }

}

class plus extends mathOperation{
  public function calculate(){
    $this->result = $this->uno + $this->dos;
  }
  public function calculateMultiple(){
    foreach ($this->values as $key => $value) {
      $this->result = ($this->result + $value);
    }
  }
}

class min extends mathOperation{
  public function calculate(){
    $this->result = $this->uno - $this->dos;
  }
  public function calculateMultiple(){
    foreach ($this->values as $key => $value) {
      $this->result = ($value - $this->result);
    }
  }
}

class keer extends mathOperation{
  public function calculate(){
    $this->result = $this->uno * $this->dos;
  }
  public function calculateMultiple(){
    foreach ($this->values as $key => $value) {
      if($this->result === null){
        $this->result = $value;
      }
      else{
        $this->result = ($value * $this->result);
      }
    }
  }
}

class delen extends mathOperation{
  public function calculate(){
    $this->result = $this->uno / $this->dos;
  }
  public function calculateMultiple(){
    foreach ($this->values as $key => $value) {
      if($this->result === null){
        $this->result = $value;
      }
      else{
        $this->result = ($value / $this->result);
      }
    }
  }
}

$plus = new plus();
$plus->setArray(array(10,4,9,33));
$plus->calculateMultiple();
echo $plus->showResult();

echo '<br />';

$min = new min();
$min->setArray(array(31,6,4));
$min->calculateMultiple();
echo $min->showResult();

echo '<br />';

$keer = new keer();
$keer->setArray(array(3,3));
$keer->calculateMultiple();
echo $keer->showResult();

echo '<br />';

$delen = new delen();
$delen->setArray(array(5,2,3));
$delen->calculateMultiple();
echo $delen->showResult();

echo '<br />';
?>
</body>
</html>
