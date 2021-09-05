<?php 
  session_start();
  $con = mysqli_connect('localhost','root','');
  mysqli_select_db($con,'Car_On_Hire');
  $a=$_SESSION['name'];
  $b=$_SESSION['username'];
	$sql1="DELETE FROM booking WHERE username='$a' AND loginid='$b'";
	$ab=mysqli_query($con,$sql1);
	if($ab)
	{
		unset($_SESSION['name']);
		unset($_SESSION['pcity']);
		unset($_SESSION['pdate']);	
		unset($_SESSION['dcity']);
		unset($_SESSION['ddate']);
		unset($_SESSION['car']);
		unset($_SESSION['submit']);
		header('Location:Previous.php');
	}
	else
	{
		echo "err";
	}	
?>
