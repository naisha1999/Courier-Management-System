

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Courier Management System</title>
</head>

<body>
<?php
        
			$con=mysqli_connect("localhost","root","");
			if(!$con)
			{
			die('could not connect'.mysqli_error());
			}
			
			mysqli_select_db($con,"courier");
			
			
			$emp=$_POST['emp'];			
			$sql="DELETE FROM `courier`.`employee` WHERE `employee`.`username`='$emp'";	
			
			$result=mysqli_query($con,$sql);
			
			if(!$result)
			{
			echo '<script language="javascript">';
echo 'alert("Invalid ")';
echo '</script>';

			include 'admin.php';
			}
			else {
			

			 include("admin.php");
			 }
        ?>
</body>
</html>