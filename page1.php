<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <center>
        <?php
        $user = $_COOKIE['username'];
        $pass = $_COOKIE['password'];

        echo "User name in second page " . $user;
        echo "<br> Pasword in second page " . $pass;
        ?>

    </center>
</body>
</html>