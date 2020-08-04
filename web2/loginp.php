<?php
session_start();
if(isset($_POST["submit"]))
{
	$con=mysqli_connect("localhost","root","","hotel");
	$un=$_POST["username"];
	$pass=$_POST["passcode"];

	$info=mysqli_query($con,"select * from admin where username='$un'");
	while($row=mysqli_fetch_array($info))
	{
	if($row['username']=="admin")
	{
		if($pass==$row["passcode"])
		{
			$_SESSION['admin']=$row['username'];
			header('Location:../adminpanel.php');
			
		}
		else
		{
			echo "Error";
			}
	}		
		else
		{	
		if($row['username']=="kitchen")
		{
		if($pass==$row["passcode"])
		{
			$_SESSION['admin']=$row['username'];
			header('Location:../vieworders.php');
			
		}
		else
		{
			echo "Error";
			}
	}		
		
		}
		
	}
	
}


?>