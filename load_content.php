<html>
<head>
<style>
.divs{
  width: 300px;
  height: 300px;
  background-color: aqua;
  margin: 10px;
  display: inline-block;
}
</style>
</head>
<body>

<div class='divs'><button id='uno' value='klik'>klik</button></div>
<div class='divs'><button id='dos' value='klik'>klik</button></div>
<div class='divs'><button id='tres' value='klik'>klik</button></div>


<script>
var xhr = new XMLHttpRequest();
var een = document.getElementById('uno');
var twee = document.getElementById('dos');
var drie = document.getElementById('tres');

xhr.addEventListener("load", ajaxLoad);
xhr.addEventListener("error", ajaxError);
een.addEventListener("click", ajaxClickUno);
twee.addEventListener("click", ajaxClickDos);
drie.addEventListener("click", ajaxClickTres);

xhr.open("GET", "load_content.php");
xhr.send();


// Callbacks:

function ajaxLoad(event) {
    if (this.status === 200) {
        console.log(this.responseText);   // this === xhr
    } else {
        console.log("unsuccessful request");
    }
}

function ajaxError(event) {
    console.log('error');
}

function ajaxClickUno(event) {
document.getElementById("een").innerHTML = "Hello World";
alert('Hello World');
}

function ajaxClickDos(event) {
document.getElementById("twee").innerHTML = "Lorem ipsum";
}

function ajaxClickTres(event) {
document.getElementById("drie").innerHTML = '<img src="turkey.jpg" height="300" width="300">';
}

</script>
</body>
</html>
