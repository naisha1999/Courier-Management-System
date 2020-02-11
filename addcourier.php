<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://w																																																																																																																																																																																																																					ww.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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



if($_POST['pay'])
{

if(strcmp($_POST['mode'],'air')) 
	$mode=100;
else if(strcmp($_POST['mode'],'surface')) 
	$mode=70;
else $mode=50;
$rate=$_POST['wt']*$_POST['num']*$mode;
$query="INSERT INTO `courier_table`(orig,dest,sname,sadd,rname,radd,rate,mode) VALUES ('$_POST[orig]','$_POST[dest]','$_POST[sname]','$_POST[saddress]','$_POST[rname]','$_POST[raddress]',$rate,'$_POST[mode]')";
$result=mysqli_query($con,$query);

	if(!$result)
	{	
		echo "Incorrect details !" . "</br>";
		include 'blank.php';
	}
	else {
		echo '<div class="center">';
		echo "<h1> Courier Loaded !</h1>";
		$query="select * from courier_table order by cid desc limit 1 ";
$result=mysqli_query($con,$query);
	$row=mysqli_fetch_row($result);
		
		echo "<h1>Courier ID for tracking purposes: ->> ".$row[0]."</h1>";
		
		echo "<h1>Amount to be payed: ->> &#x20B9;".$row[8]."</h1>";
		echo '</div>';
		include 'blank.php';
	}

}	
	mysqli_close($con);
?>

</body>
</html>