<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <form method="post" action= "cookieuser.php" > 
            <table border = "1">
                <tr>
                    <th>User Name</th>
                    <td><input type=text name="txtuser"></td>
                </tr>
                <tr>
                    <th>Password</th>
                    <td><input type=password name = "txtpass"></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Submit" name = "submitbtn"/>
                        <input type="reset" value="Reset"/>
                    </td>
                </tr>
            </table>
        </form>

    </center>
</body>
</html>

<!-- <?php 
if(isset($_POST['submitbtn']))
{
        $user = $_POST['txtuser'];
        $pass = $_POST['txtpass'];
        // echo $user;
        // echo $pass;
        if(strcmp($user,"ahzam") == 0  and  strcasecmp($pass,"karachi")){
            echo "<font color = green size = 5 text = center> $user  You are valid user</font>";
        }
        else{
            echo "<font color = red size = 5>You are Invalid user</font>";
        }
}

?> -->