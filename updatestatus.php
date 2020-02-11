<?php 

		if($_POST['update'])
		{
			$cid=$_POST['cid'];
			$status=$_POST['status'];
			

			$conn=mysqli_connect("localhost","root","");
if(!$conn)
{
die('could not connect'.mysql_error());
}

mysqli_select_db($conn,"courier");


			$select_user_query="SELECT * FROM `courier_table` WHERE `cid`=$cid";
			$select_user=mysqli_query($conn,$select_user_query);
	
		
		if (mysqli_num_rows ($select_user) == 0)
			
			{
				
					echo'<script>alert("CID not present")</script>';
					include'employee.php';
					
				}
				else
				{
					$change=mysqli_query($conn,"UPDATE `courier`.`courier_table` SET `status`='$status' WHERE `courier_table`.`cid`=$cid");
				
	
$result1=mysqli_query($conn,"INSERT INTO `shippment`(cid) VALUES ('$cid')")or die( mysqli_error($conn));
	
	
		$query1="select * from shippment order by sid  desc limit 1 ";
$result2=mysqli_query($conn,$query1);
	$row=mysqli_fetch_row($result2);

		 echo '<script> alert("shippment id-->'.$row[1].'")</script>';
		include'employee.php';
				
					
				}					
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>
</body>
</html>