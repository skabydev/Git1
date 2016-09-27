<?php

$conn=mysqli_connect("localhost");
if(!$conn)
{
	die('error in connection'.mysql_error());
}
mysqli_select_db(sign);
$sql1= INSERT INTO userdb(username,password,phone) VALUES (.'$_POST[usrname]'.,.'$_POST[number]'.,.'$_POST[paswrd]'.);
mysqli_query($sql1,$conn);
mysqli_close($conn);
?>