
<!DOCTYPE html>
<html>
<head>
	<title>
		Gitter
	</title>
<link rel="stylesheet" type="text/css" href="css/style1.css"> 
<!-- <link rel="javascript" type="text/javascript" href="js/script.js"> -->
<script type="text/javascript">

function mychelam() {
	var passwrd1= document.getElementById("pass1").value;
	var passwrd2= document.getElementById("pass2").value;
	
	
	if(passwrd1!=passwrd2){
	 	
	 alert("Enter again");

	}
	
	
}
</script>
</head>
<body>
<div class="first">
<h1>Gitter</h1>

<div class="second">


<form action="" method="POST">
Login:<input type="text" name="usr" placeholder="Enter Username" >    

Password:<input type="password" name="pas" placeholder="Enter Password">    <input type="submit" name="login" value="login">
</form> 



</div> <!--second -->
<br><br><br>
<div class="third">
<h3>SignUp</h3>





<form action="" method="POST" onsubmit="mychelam()">

Name:<input type="text" name="usrname"><br><br>
Phone number:<input type="text" name="number"><br><br>



Password:<input type="password" id="pass1" name="paswrd"  > <br><br>

Confirm Password: <input type="password" id="pass2" name="paswrd1" >  


  <br><br>



<input type="submit" name="signup" value="SignUp" > <br><br><br><br>

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

if(isset($_POST['login'])){
	unset($_POST['login']);
	$usrn=$_POST['usr'];
	$pasn=$_POST['pas'];
	$sqln="SELECT username,password FROM userdb WHERE username='$usrn'" ;



    $resultn=mysqli_query($conn,$sqln);
 	if(mysqli_num_rows($resultn)==0){
		echo "Sign up";
		
	}
   else
   {
    	$row=mysqli_fetch_assoc($resultn);
    	
    	if($row['password'] == "$pasn" )
    	{
    		echo "Enter";
       	}
       	else
       	{
       		echo "Reenter";
       	}       
    }
    
}

unset($_POST['login']);
if (isset($_POST['signup'])) {


$username= $_POST["usrname"];
$ph=$_POST["number"];
$pass=$_POST["paswrd"];
$cnfrmpass=$_POST["paswrd1"];

if($pass==$cnfrmpass){
$sql1= "INSERT INTO userdb(`username`,`phone`,`password`) VALUES ('$username', '$ph', '$pass')";

$result=mysqli_query($conn,$sql1);
if ($result) {
	echo "working";
	# code...
}
}

mysqli_close($conn);
}
?>


</body>
</html>

