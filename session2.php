<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session2</title>
</head>
<body>
<center>
<?php
 session_start();

 $uname = $_SESSION['username'];
 $upass = $_SESSION['password'];
 
 echo "User Name in 2nd page : " .$uname;
 echo "<br> Password in 2nd page : " .$upass;

 session_unset();
 session_destroy();
?>
</center>
</body>
</html>
