<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Login</title>
</head>
<body>
    <center>
        <?php

        $user = $_POST['txtuser'];
        $pass = $_POST['txtpass'];
        // echo $user;
        // echo $pass;
        if(strcmp($user,"ahzam") == 0  and  strcasecmp($pass,"karachi")){
            echo "<font color = green size = 5>You are valid user</font>";
        }
        else{
            echo "<font color = red size = 5>You are Invalid user</font>";
        }
        ?>
    </center>
</body>
</html>