<?php
session_start();
?>
<?php
if(!ISSET($_SESSION['colour'])){
  $_SESSION['colour'] = $_POST['colour'];
}
else{
  $_SESSION['colour'];
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form method='POST' action=''>
      <input onchange='setColour()' name='colour' type='color' id='colour' />
      Gewicht: <input type='number' name='gewicht' />
      Lengte: <input type='number' step='.01' name='lengte' />
      <input type='submit' name='submit' value='Berekenen' />
    </form>
    <script>
      document.body.style.backgroundColor = ' <?= $_SESSION['colour'] ?> ';
    </script>

<script>
var colour;
  function setColour(){
    var colour = document.querySelector('#colour').value;
  }
</script>
<?php
$lengte;
$gewicht;
$bmi = array();
$bmi2 = array();
$_SESSION['uno'] = $bmi;
$_SESSION['dos'] = $bmi2;
if(ISSET($_POST['submit'])){
  $lengte = $_POST['lengte'];
  $gewicht = $_POST['gewicht'];
  $colour = $_POST['colour'];
  $_SESSION['colour'] = $colour;
  echo 'BMI is: ' . calculate($lengte, $gewicht);
  ?>
  <script>
    document.body.style.backgroundColor = ' <?= $_SESSION['colour'] ?> ';
  </script>
  <?php
  array_push($bmi, $gewicht, $lengte, calculate($lengte, $gewicht));
  array_push($bmi2, $bmi);
}
function calculate($lengte, $gewicht){
  $bmiCalc = $gewicht/($lengte*$lengte);
  $result = round($bmiCalc, 2);
  return $result;

}
echo "<table border='1'><tr><th>Gewicht</th><th>Lengte</th><th>bmi</th></tr>";
foreach ($bmi2 as $value) {
    echo "<tr><td>$value[0]</td><td>$value[1]</td><td>$value[2]</td></tr>";
}
echo "</table>";
?>
</body>
</html>
