<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
	$startdate = mysqli_real_escape_string($mysqli, $_POST['startdate']);
	$enddate = mysqli_real_escape_string($mysqli, $_POST['enddate']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);	
	
	// checking empty fields
	if(empty($startdate) || empty($enddate) || empty($description)) {
				
		if(empty($startdate)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($enddate)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($description)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE employee SET startdate='$startdate',enddate='$enddate',description='$description' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: index.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM offer WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$startdate = $res['startdate'];
	$enddate = $res['enddate'];
	$description = $res['description'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br/><br/>
	
	<form name="form1" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Startdate</td>
				<td><input type="date" name="startdate" value="<?php echo $startdate;?>"></td>
			</tr>
			<tr> 
				<td>Enddate</td>
				<td><input type="date" name="enddate" value="<?php echo $enddate;?>"></td>
			</tr>
			<tr> 
				<td>Description</td>
				<td><input type="text" name="description" value="<?php echo $description;?>"></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
