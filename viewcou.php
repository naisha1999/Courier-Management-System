<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Courier Management System</title>
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
			
			if($_POST['pay'])
			{
			$sn=$_POST['sname'];
			
			$sql="SELECT * from courier_table  INNER JOIN shippment ON courier_table.cid=shippment.cid where sname='$sn'";
			
			
			
			$result=mysqli_query($con,$sql);
			
			if(!$result)
			{
			echo "Incorrect details !" . "</br>";
			include 'cust.php';
			}
			else {
			
			echo "<table>";
			
			while( $row=mysqli_fetch_row($result))
			{
				echo '<div class="center">';
				echo "<h5>Courier ID: ->> ".$row[0]."</h5>";
		echo "<h5>Origin: ->> ".$row[1]."</h5>";
		echo "<h5>Desination: ->> ".$row[2]."</h5>";
		echo "<h5>Sender's Name ->> ".$row[3]."</h5>";
		echo "<h5>Sender's Address: ->> ".$row[4]."</h5>";
		echo "<h5>Receiver's Name: ->> ".$row[5]."</h5>";
		echo "<h5>Receiver's Address: ->> ".$row[6]."</h5>";
		echo "<h5>Date: ->> ".$row[7]."</h5>";
		echo "<h5>Rate: ->> ".$row[8]."</h5>";
		echo "<h5>Mode: ->> ".$row[9]."</h5>";
		echo "<h5>Status: ->> ".$row[10]."</h5>";
		echo "<h5>Shippment id: ->> ".$row[12]."</h5>";
		echo "<h5>Shippment date: ->> ".$row[13]."</h5>";
		
		
				echo '</div>';
						include 'back.php';

			
			
			}
			 
							
			echo "</table>";
			}
			} ?>
			
</body>
</html>