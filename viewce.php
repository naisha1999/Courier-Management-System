<?php

 //retrieved using session
 session_start();
$con=mysqli_connect("localhost","root","");
			if(!$con)
			{
			die('could not connect'.mysqli_error());
			}
			      $username =$_SESSION['username'];
			mysqli_select_db($con,"courier");
$var=$_SESSION['username'];
$sql="select * from courier_table inner join employee where courier_table.orig=employee.city and employee.username='".$var."'";
			
			
		$result=mysqli_query($con,$sql);
			

if(!$result)
			{
			echo "Error!" . "</br>";
			include 'report.php';
			}
?>
<html>
<head>
	
    <meta charset="utf-8">
    
	</head>
	<style type="text/css">
		body {
			font-size: 18px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
			
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 15px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			
			
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #171819;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #c9c7c7;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			
		}
		
	</style>

<body>

          <h1 >Courier details&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="employee.php#home" class="slider_nav_btn home_btn" >	home</a></h2>

            
	
	<br>
	<table class="data-table">
		
		<thead>
			<tr>
				<th>cid</th>
				<th>ORG</th>
				<th>DEST</th>
				<th>RNAME</th>
				<th>SNAME</th>
				<th>RADD</th>
				<th>DATE</th>
				<th>RATE</th>
				<th>MOD</th>
				<th>STATUS</th>
				
			</tr>
		</thead>
		<tbody>
		<?php
		
		while ($row = mysqli_fetch_array($result))
		{
			
			echo '<tr>
					
					<td>'.$row['cid'].'</td>
					<td>'.$row['orig'].'</td>
					<td>'.$row['dest'].'</td>
					<td>'.$row['sname'].'</td>
					<td>'.$row['rname'].'</td>
					<td>'.$row['radd'].'</td>
					<td>'.$row['date'].'</td>
					<td>'.$row['rate'].'</td>
					<td>'.$row['mode'].'</td>
					<td>'.$row['status'].'</td>
					
				</tr>';
			
		}?>
		</tbody>
		
	</table>
	
		
		
	
</body>
</html>