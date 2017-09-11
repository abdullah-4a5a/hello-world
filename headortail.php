<html>
<head>
</head>
<body>

<?php
$kop = 1;
$munt = 2;

$result = mt_rand(1, 4);

// if($result === 1){
//   echo "Kop";
// } elseif($result === 3){
//   echo "Gelijkspel";
// } elseif($result === 4){
//   echo "Gelijkspel";
// } elseif($result === 2){
//   echo "Munt";
// } else{
//   echo "Error";
// }

switch($result){
  case 1:
    echo "Kop";
    break;
  case 2:
    echo "Munt";
    break;
  case 3:
    echo "Gelijkspel";
    break;
  case 4:
    echo "Gelijkspel";
    break;
  default:
       echo "Error";
}

?>


</body>
</html>
