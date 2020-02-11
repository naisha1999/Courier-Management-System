<?php
$con=mysqli_connect("localhost","root","");
			if(!$con)
			{
			die('could not connect'.mysqli_error());
			}
			
			mysqli_select_db($con,"courier");

$sql1="select * from courier_table where `status`='Loaded'";
			$sql2="select * from courier_table where `status`='In Transit'";
			$sql3="select * from courier_table where `status`='Delivered'";
			$sql4="select * from courier_table";
			
		$result1=mysqli_query($con,$sql1);
			$result2=mysqli_query($con,$sql2);
			$result3=mysqli_query($con,$sql3);
			$result4=mysqli_query($con,$sql4);


if(!$result1)
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
			background-color: #508abb;
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
			background-color: #f4fbff;
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

          <h1 >Courier Report&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="admin.php#home" class="slider_nav_btn home_btn" >	home</a></h2>

            
	<h1>Couriers in 'Loaded' state-->></h1>
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
		
		while ($row = mysqli_fetch_array($result1))
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
	<h1>Couriers in 'In-Transit' state</h1><br>
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
		
		while ($row = mysqli_fetch_array($result2))
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
	<h1>Couriers in 'Delivered' state-->></h1><br>
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
		
		while ($row = mysqli_fetch_array($result3))
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
			
		}
		
		
		
		?>
		</tbody>
	
	</table>
	<table>
	<?php	echo "</br>";echo "</br>";
			$sum = 0;
			while ($row = mysqli_fetch_assoc($result4))
			{
    			$sum += $row['rate'];
			}

			
		?>
		<tfoot>
			<tr style="font-size:45px">
				<th colspan="9">TOTAL RATE -</th>
				<th><?=number_format($sum)?></th>
			</tr>
		</tfoot>
		
	</table>
</body>
</html>