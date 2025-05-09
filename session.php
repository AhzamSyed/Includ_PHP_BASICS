<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session1</title>
</head>
<body>
<center>
<?php

$user = $_POST['txtuser'];
$pass = $_POST['txtpass'];
echo "Username :".$user;
echo "<br>Password :".$pass;

session_start();
$_SESSION['username'] = $user;
$_SESSION['password'] = $pass;
?>
<form method="post" action="session2.php">
    <input type="submit" value="Submit">
</form>
</center>
</body>
</html>
