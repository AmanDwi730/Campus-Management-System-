<?php


$username=$_POST['username'];
$password=$_POST['password'];
if($username=="admin"&&$password=="admin")
{header('Location:DashBoard.php');}
else{
echo '<script>alert("Wrong ID password ID: admin Pass:admin");window.location.href="Admin.php";</script>';}

?>