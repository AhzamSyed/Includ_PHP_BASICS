<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Connection</title>
</head>
<body>
<center>
<form method="post" action="insertemp.php">
    ID <input type="text" name = "txtid"> <br>
    Name <input type="text" name = "txtname"> <br>
    Salary<input type="text" name = "txtsal"> <br>
    Department<input type="text" name = "txtdpt"> <br>
    <input type="submit" value="Submit" name = "btnsubmit">
</form>
<?php
// connection
// query (update, insert, delete)
if(isset($_POST['btnsubmit']))
{
// $empid = 213;
// $ename = "Ahzam";
// $esal = 10000;
// $edpt = "Web Development";

$con = mysqli_connect("localhost","root","","myfirstdb");
echo "Connection Success";

$sql = "insert into emp values(?,?,?,?)";
$ps = $con->prepare($sql);
$ps->bind_param("isis",$empid,$ename,$esal,$edpt);
$ps->execute();
echo "record inserted successfully";

}

?>
</center>
</body>
</html>
