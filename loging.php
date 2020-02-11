
<!--------------------------------------------->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>




<?php
if(isset($_POST['login']))
{
	$u=$_POST['username'];
	$p=md5($_POST['password']);

	$servername="localhost";
$username="root";
$password="";
$dbname="courier";
$conn=mysqli_connect($servername,$username,$password,$dbname);
	
	
	switch($_POST['type'])
	{
		case "employee":
					$select_user_query="SELECT * FROM `employee` WHERE `username`='$u' AND `password`='$p'";
					$select_user=mysqli_query($conn,$select_user_query);
					if(mysqli_num_rows($select_user)>0)
					{
						include 'employee.php';
						
						$_SESSION['type']="employee";
						$_SESSION['username']=$u;
						
					}
					else
					{
						echo '<script language="javascript">';
echo 'alert("Invalid Username AND Password")';
echo '</script>';
						unset($_POST['submit']);
						$error_login=1;
						include 'login.php';
					}
					break;
					
	
		case "client":
					$select_user_query="SELECT * FROM `client` WHERE `username`='$u' AND `password`='$p'";
					$select_user=mysqli_query($conn,$select_user_query);
					if(mysqli_num_rows($select_user)>0)
					{
						include 'cust.php';
						
						$_SESSION['type']="client";
						$_SESSION['username']=$u;
						
					}
					else
					{
						echo '<script language="javascript">';
echo 'alert("Invalid Username AND Password")';
echo '</script>';
						unset($_POST['submit']);
						$error_login=1;
						include 'login.php';
					}
					
					break;
		case "admin":
					$select_user_query="SELECT * FROM `admin` WHERE `username`='$u' AND `password`='$p'";
					$select_user=mysqli_query($conn,$select_user_query);
					if(mysqli_num_rows($select_user)>0)
					{
						include 'admin.php';
						
						$_SESSION['type']="admin";
						$_SESSION['username']=$u;
						
					}
					else
					{
						echo '<script language="javascript">';
echo 'alert("Invalid Username AND Password")';
echo '</script>';
						unset($_POST['submit']);
						$error_login=1;
						include 'login.php';
					}
					break;
					
	
	
	
	}
}

	
?>
</body>
</html>