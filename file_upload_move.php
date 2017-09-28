<?php
   if(isset($_FILES['image'])){
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_error = $_FILES['image']['error'];

      if($file_error == 4) {
        echo "No file was uploaded.";
      }else{
        $directory = "img/".$file_name;
         move_uploaded_file($file_tmp,$directory);
         echo "Geüpload!";
         echo "<br>";
         echo "<img src='$directory'>";
      }
   }
?>
<html>
<head>
<style>
  img{
    width: 250px;
    height: 250px;
  }
</style>
</head>
   <body>
      <form method ="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>
</body>
</html
