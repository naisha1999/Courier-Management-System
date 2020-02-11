<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Courier Management System</title>
</head>
<style>
.center{
	padding-left:300px;
	padding-top:100px;
	padding-right:30px;
	
	position:center;
}
</style>
<body>
		<?php
        
			$con=mysqli_connect("localhost","root","");
			if(!$con)
			{
			die('could not connect'.mysqli_error());
			}
			
			mysqli_select_db($con,"courier");
							if($_POST['submit'])
							{
			$un=$_POST['username'];
			$cid=$_POST['cid'];
			
			$sqli="select * from courier_table where sname='$un' and cid='$cid'";
			
			
			
			$result=mysqli_query($con,$sqli);
			
			if(!$result)
			{
			 echo '<script>alert("incorrect details");</script>' ;;
			include 'cust.php';
			
			}
			else {
			
			echo "<table>";
			
			while( $row=mysqli_fetch_row($result))
			{
				echo '<div class="center">';
				echo "<h1>Courier ID: ->> ".$row[0]."</h1>";
		echo "<h1>Sender's name: ->> ".$row[3]."</h1>";
		echo "<h1>Status: ->> ".$row[10]."</h1>";
				echo '</div>';
						include 'back.php';

			
			
			}
			 }
							}
        ?>

</body>
</html>
