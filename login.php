<?php

<div class="second">
<form action="" method="POST">
Login:<input type="text" name="usr" placeholder="Enter Username" >    

Password:<input type="password" name="pas" placeholder="Enter Password">    <input type="submit" name="login" value="login">
</form> 
</div>




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


?>