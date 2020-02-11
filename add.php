<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$startdate = mysqli_real_escape_string($mysqli, $_POST['startdate']);
	$enddate = mysqli_real_escape_string($mysqli, $_POST['enddate']);
	$description = mysqli_real_escape_string($mysqli, $_POST['description']);
		
	// checking empty fields
	if(empty($startdate) || empty($enddate) || empty($description)) {
				
		if(empty($startdate)) {
			echo "<font color='red'>Startdate field is empty.</font><br/>";
		}
		
		if(empty($enddate)) {
			echo "<font color='red'>Enddate field is empty.</font><br/>";
		}
		
		if(empty($description)) {
			echo "<font color='red'>Description field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// if all the fields are filled (not empty) 
			
      
      
   $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      
		//insert data to database	
		$result = mysqli_query($mysqli, "INSERT INTO offer(startdate,enddate,description,name) VALUES('$startdate','$enddate','$description','$file')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>
