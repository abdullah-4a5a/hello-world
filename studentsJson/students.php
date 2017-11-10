<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<style>
</style>
</head>
<body>

<script type="text/javascript">
var xhr = new XMLHttpRequest();

xhr.addEventListener("load", ajaxLoad);
xhr.addEventListener("error", ajaxError);

xhr.open("GET", "students.json");
xhr.send();

function ajaxLoad(event) {
    if (this.status === 200) {
        table(this.responseText);
    } else {
        console.log("Unsuccessful request");
    }
}

function ajaxError(event) {
    console.log('error');
}

function table(json){
  var result = JSON.parse(json);
  console.log(json.length);
  var tabel = '<table><tr><th>Name</th><th>Age</th></tr>';
  for (var i = 0; i < result.student.length; i++) {
    tabel += '<tr><td>'+result.student[i].name+'</td><th>'+result.student[i].age+'</th></tr>'
  }
  console.log(json);
  document.write(tabel);
}

</script>
</body>
</html>
