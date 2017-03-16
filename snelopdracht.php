<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>title</title>
	<style>
	</style>
  </head>
  <body>
	<script>
		function func(){
			var a = document.getElementById("product").value;
			a = a.split(',').join('</li><li>');
			document.getElementById("demo").innerHTML = a;
		}
	</script>
	Product: <input id="product"><br>
	<button onclick="func()">Click me</button>
	<ul><li id="demo"></li></ul>
  </body>
</html>
