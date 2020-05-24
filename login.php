<?php

session_start();

$conn = mysqli_connect("localhost","root","","phahila");


$name = $_POST['name'];
$pass = $_POST['pswd'];

$s = "select * from usertable where name ='$name' and password ='$pass'";
 
$result = mysqli_query($conn, $s);

$row = mysqli_fetch_array($result);

if($row['name'] == $name && $row['password'] == $pass)
{
header("location:useraccount.html" );
}
else
{
echo "Failed to login!";
}
?>