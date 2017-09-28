<DOCTYPE! html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>
<form method="post">
  <input type="text" name="input">
<br><br>
  <input type="submit" value="Verzenden"/>
  <?php
if(empty($_POST['input'])==true){
  echo "";
}else{
  echo htmlspecialchars($_POST['input']);
}
?>
</form>
</body>
</html>
