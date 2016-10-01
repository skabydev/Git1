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