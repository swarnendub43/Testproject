<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<body>
<?php
//error_reporting(0);
include("dbconnection.php");

if(isset($_POST['submit']))
{
	
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$sql="select * from login WHERE email = '$email' AND password= '$pass'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) 
	{
            header ('Location:dashboard.php');
		echo"login Sucessful"; 
		$arr= $result->fetch_assoc();
		$_SESSION['user']=$arr; 
		//print_r($_SESSION);
		exit();
  
	}
	else {
		echo    "plz Try again."; 
		//header ('Location:login_action.php?err=1');
	}
}
?>
</body>
</html>
