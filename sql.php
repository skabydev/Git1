<?php

$conn=mysqli_connect("localhost");
if(!$conn)
{
	die('error in connection');
}

$username= $_POST["usrname"];
$ph=$_POST["number"];
$pass=$_POST["paswrd"];
$sql1= "INSERT INTO userdb(username,phone,password) VALUES('$username'.$ph,'$pass')";
mysqli_query($userdb,$sql1);
?>