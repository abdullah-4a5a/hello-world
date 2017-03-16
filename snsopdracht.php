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
  function klik(){
  var invoeren = document.getElementById("invoer").value;
  var result1 = invoeren.replace(/a/g, "!").replace(/e/g, "@").replace(/o/g, "#").replace(/u/g, "$").replace(/i/g, "%");
  document.getElementById("tekst").innerHTML = result1;
}

function klik2(){
  var invoeren = document.getElementById("invoer2").value;
  var result1 = invoeren.replace(/a/g, "&").replace(/e/g, "*").replace(/o/g, "=").replace(/u/g, "+").replace(/i/g, "-");
  document.getElementById("tekst2").innerHTML = result1;
}
	</script>

  <input id="invoer" type="text">
  <button onclick="klik()">Klik</button>
  <p id="tekst"></p>

  <input id="invoer2" type="text">
  <button onclick="klik2()">Klik</button>
  <p id="tekst2"></p>
  </body>
</html>
