<DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Gitter
	</title>

</head>
<body>

<h1>Gitter</h1>



<h3>SignUp</h3>
<form action="" method="POST">

Name:<input type="text" name="usrname"><br><br>
Phone number:<input type="text" name="number"><br><br>
Password:<input type="password" name="paswrd"><br><br>
Confirm Password:<input type="password" name="paswrdcnfrm"><br><br>
<button type="button" name="signup">SignUp</button><br><br><br><br>

</form>


<p style="text-align: center;">A website to practice GIT by Skaby</p>


<?php

$conn=mysqli_connect("localhost");
if(!$conn)
{
	die('error in connection');
}
if (isset($_POST['signup'])) {


$username= $_POST["usrname"];
echo $username;
$ph=$_POST["number"];
$pass=$_POST["paswrd"];
$sql1= "INSERT INTO userdb (username,phone,password) VALUES('$username'.$ph,'$pass')";
mysqli_query($conn,$sql1);

}
?>


</body>
</html>

