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

  function $id(elementId) {
    var element = document.getElementById(elementId)
    return element;
  }

  var element = $id('someId');
  var otherElement = $id('otherId');

  element.innerHTML = '';

  document.getElementById('otherId').innerHTML = '';
  $id('otherId').innerHTML = '';

</script>
  </body>
</html>
