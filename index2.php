




 






<?php



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

