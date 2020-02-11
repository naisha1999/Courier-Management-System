<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	
	$eid = mysqli_real_escape_string($mysqli, $_POST['eid']);
	$salary = mysqli_real_escape_string($mysqli, $_POST['salary']);
	
	// checking empty fields
	if(empty($salary) ) {
				
		if(empty($salary)) {
			echo "<font color='red'>usernameName field is empty.</font><br/>";
		}
		
		
		header("Location: viewemp.php");
	}else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE employee SET salary='$salary' WHERE eid=$eid");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: viewemp.php");
	}
}
?>
<?php
//getting id from url
$eid = $_GET['eid'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM employee WHERE eid=$eid");

while($res = mysqli_fetch_array($result))
{
	$salary = $res['salary'];
	
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="viewemp.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="editsalary.php">
		<table border="0">
			
			<tr> 
				<td>Salary</td>
				<td><input type="text" name="salary" value="<?php echo $salary;?>"></td>
			</tr>
			
				<tr>
				<td><input type="hidden" name="eid" value=<?php echo $_GET['eid'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
