<?php

// file include
  if(isset($_POST['submit'])){
    $error = [];
    $fileName = $_FILES['filename']['name'];
    $file_tmp = $_FILES['filename']['tmp_name'];
    $fileSize = $_FILES['filename']['size'];
    $arr = explode("." , $fileName);
    $fileExtension = strtolower(end($arr));
    
    $allowedExtension = ["jpg","jpeg","png"];

    if(!in_array($fileExtension,$allowedExtension)){
      $error [] = "Ivalid extension only jpg, jpeg and png are allow";
    }
    if($fileSize > 4194304){
      $error [] = "File size should not greater than 4 MB";
    }
    if(empty($error)){
       $destination = getcwd() . "/uploads/" . $fileName;
      
      if(move_uploaded_file($file_tmp , $destination)){
        echo "File uploaded successfully!";
      }
      else{
        echo "File cannot uploaded";
      }
    }
    else{
      echo "<pre>";
      print_r($error);
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOME</title>
</head>
<body>
  <!-- <?php
  include "header.php";
  ?>
  <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, neque. Neque error totam dolorem a molestiae corporis ratione! Quis, dignissimos earum? Enim harum provident saepe deleniti adipisci laboriosam ipsa optio!</div>
  <?php
  include "footer.php";
  ?> -->

  <form method="POST" action="" enctype="multipart/form-data">
    <input type="file" name="filename" />
    <input type="submit" name ="submit" value="SUBMIT"/>
  </form>
</body>
</html>