<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courier Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }  
  .container-fluid {
      
    padding-top: 50px;
    padding-right: 50px;
    padding-bottom: 50px;
    padding-left: 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .navbar {
      margin-bottom: 0;
      border-radius: 0;
	  padding:30px;
	  
    }
  
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }

    .sidenav {
    height: 20000px;
    width: 200px;
    bottom: 0;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #000;
    overflow-x: hidden;
    padding-top: 50px;
}



.sidenav a:hover {
    color: #f1f1f1;
}

.main {
    margin-left: 200px; 
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
  .sidenav.col-sm-3{position:fixed;} 

}

footer {
      background-color: #000000;
      padding: 25px;
    }


  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" >


 <nav class="navbar navbar-inverse ">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="intro.html">Musically</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li><a href="project.html">Home</a></li>
        <li><a href="songs.html">Songs</a></li>
        <li><a href="cart.html">Cart</a></li>
        <li><a href="contact.html">Contact Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
</nav>



<div class="col-sm-3">
</div>
  <div class="col-sm-12">
<div id="Add Courier" class="container-fluid bg-grey">
  <h2 class="text-center">	Add Courier</h2>
	  <form action="addcourier.php" method="post" name="frmShipment" >
          <h3>Senders Name</h3>
           <input name="sname"  maxlength="100" size="40" type="TEXT">
          <h3>Origin</h3>
        <input name="orig" id="orig" maxlength="13" size="40" type="TEXT">
                <h3>Senders address</h3>           
 <textarea name="saddress" cols="32" rows="3" id="raddress"></textarea>
           
				<br>
<br>         
		 <h3>Receiver's name </h3>        
<input name="rname" id="rname" maxlength="100" size="40" type="TEXT">
                         <h3>Destination </h3>            
<input name="dest" id="dest" maxlength="13" size="40" type="TEXT"></td>
 <h3>Receiver's Address </h3>          
		 <textarea name="raddress" cols="32" rows="3" id="raddress"></textarea>
                             <h3>Mode of Transport</h3>     
							 <select id="mode" name="mode">
                                <option value="air" selected="selected">Air</option>
                                <option value="surface">Surface</option>
                                <option value="water">Water</option>
                            </select>
							<h3>Weight</h3>  
<input id="weight" size="10" maxlength="10" name="wt"> <strong>kg</strong>
<h3>No.of Packages</h3>  
<input name="num" id="num" size="40" maxlength="20"  type="INT"></td>
                          <h3>Status</h3>  
						  <select name="status" id="status">
                                <option selected="selected" value="Loaded">Loaded</option>
                            </select>							

						<br>
         <br>
		                       
         <button class="btn btn-primary btn-large" style="background-color: #000;" type="submit" name="pay">Add Courier</button>
		 </form>
    </div>
    </div>

<!-- Container (Update price) -->
<div id="uprice" class="container-fluid col-sm-10">
      <h2 class="text-center">Update Price</h2><br>
	  	<form action="change_price.php" method="post">
       <h3>Song Name</h3>
          <input class="form-control" id="sname" name="sname" placeholder="SongName" type="text" required>
          <br>
          <h3>Song ID</h3>
        <input class="form-control" id="SID" name="SID" placeholder="Song ID" type="text" required>
          <br>
          <h3>New Price</h3>
          <input class="form-control" id="price" name="price" placeholder="Rs.xxxx" type="text" required>
          <br>
          <br>
          <button class="btn btn-primary btn-large" style="background-color: #000;" type="submit">Update</button>
		 </form>
		  
  </div>


<div id="sale" class="container-fluid bg-grey col-sm-10">
    <h2 class="text-center">Sales</h2>
	
	
	
	<?php
 

$con= mysqli_connect('localhost','root','', 'musically');
if(!$con)
	die("Cannot Connect" );


$sql1= " select * from sales_view_new ";
$data=mysqli_query($con, $sql1) or die("Cannot Connect=");

//$sql=" select * from sales_view" ;


//$data=mysqli_query($con, $sql) or die("Cannot Connect=");

echo '
<table width=95% height=65% border=2 >
<tr >

<th class="text-center">Song ID</th>
<th class="text-center">NO OF SALES</th>



</tr>';

while($record=mysqli_fetch_array($data)) 
{
	echo '
	<tr>
	<th class="text-center;">';  echo $record['song_id']; echo '</th>
	<th class="text-center;">';
			
			echo $record['COUNT(song_id)']; echo '</th>
			
		</tr>';

}
echo '
</table>';

mysqli_close($con);

?>
	
	
	
	
</div>
  </div>

  
<script type="text/javascript">
  $(document).ready(function () {
    var height1 = $('.content').height()
    var height2 = $('body').height()

    if (height1 > height2) {
        $('.sidebar').height(height1)
    } else {
        $('.sidebar').height(height2)
    }
});



</script>
 
</body>
</html>
