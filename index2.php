<DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>
		Gitter
	</title>
<link rel="stylesheet" type="text/css" href="css/style1.css">
<link rel="javascript" type="text/javascript" href="js/script.js">
</head>
<body>
<div class="first">
<h1>Gitter</h1>

<div class="second">
<form action="" method="POST">
Login:<input type="text" name="usrname1" placeholder="Enter Username" >    Password:<input type="password" name="paswrd1" placeholder="Enter Password">    <input type="submit" name="login" value="login">
</form> 
</div> <!--second -->
<br><br><br>
<div class="third">
<h3>SignUp</h3>
<form action="" method="POST">

Name:<input type="text" name="usrname"><br><br>
Phone number:<input type="text" name="number"><br><br>
Password:<input type="password" name="paswrd"><br><br>
<input type="submit" name="signup" value="SignUp"><br><br><br><br>

</form>
</div> <!--third-->

<p style="text-align: center;">A website to practice GIT by Skaby</p>
</div> <!--first-->




<?php

$conn=mysqli_connect("localhost","root","","db");
if(!$conn)
{
	die('error in connection');
}
else{
	print "connected";
}
if (isset($_POST['signup'])) {


$username= $_POST["usrname"];
$ph=$_POST["number"];
$pass=$_POST["paswrd"];
$sql1= "INSERT INTO userdb(`username`,`phone`,`password`) VALUES ('$username', '$ph', '$pass')";
$result=mysqli_query($conn,$sql1);
if ($result) {
	echo "working";
	# code...
}


mysqli_close($conn);
}
?>


</body>
</html>

