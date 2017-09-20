<doctype! html>
<head>
</head>
<body>

<?php

$result = function(){
$gewicht = $_POST['gewicht'];
$lengte = $_POST['lengte'];

$lengteSum = $lengte * $lengte;
$sum = $gewicht / $lengteSum;
echo number_format($sum,2);
}
?>
  <form method="post">
    Gewicht<br>
    <input type="text" name="gewicht">
    <br>
    Lengte<br>
    <input type="text" name="lengte">
    <br><br>
    <input type="submit" value="Bereken">
    <p id="result"><?php echo $result() ?></p>
  </form>
</body>
</html>
