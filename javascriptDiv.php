<!DOCTYPE html>
<!--[if lte IE 6]><html class="preIE7 preIE8 preIE9"><![endif]-->
<!--[if IE 7]><html class="preIE8 preIE9"><![endif]-->
<!--[if IE 8]><html class="preIE9"><![endif]-->
<!--[if gte IE 9]><!--><html><!--<![endif]-->
<head>
   <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
   <title>Div style</title>

<style>
#achtergrond{
  background-color: #efefef;
  border: 4px solid #ccc;
  width: auto;
  height: auto;
  min-height: 400px;
}
input{
  padding: 5px;
  margin: 20px;
  color: #ccc;
}

#div1{
  margin-top: 15px;
  margin-bottom: 15px;
  transition: all 2.0s ease-out;
  max-width: 95%;
  max-height: 400px;
}
</style>
</head>
<body>
<center>
<div id="achtergrond">
<input onchange="klik()" id="breedte" type="number" value="breedte" placeholder="Breedte">pixels
<br>
<input onchange="klik()" id="hoogte" type="number" value="hoogte" placeholder="Hoogte">pixels
<br>
<select id="dropdown" onchange="klik()">
 <option value=""></option>
   <option value="Red">Rood</option>
    <option value="Yellow">Geel</option>
     <option value="Blue">Blauw</option>
      <option value="Orange">Oranje</option>
       <option value="Gray">Grijs</option>
        <option value="Purple">Paars</option>
</select>

<div id="div1"></div>
</div>
</center>

<script type="text/javascript">
function klik(){
  var breed = document.getElementById("breedte").value;
  var hoog = document.getElementById("hoogte").value;
document.getElementById("div1").style.width = breed + "px";
document.getElementById("div1").style.height = hoog + "px";

var background = document.getElementById('dropdown').value;
document.getElementById('div1').style.backgroundColor = background;
}

</script>
</body>
</html>