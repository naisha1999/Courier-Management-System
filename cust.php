
<?php
session_start();    //session start


 //retrieved using session
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Courier Management System</title>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	
	
	<script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
    
  </head>
<style>
/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;

}
a {
    color: white;
    text-decoration: none;
	font-size:25px;
	font-family:Arial;
	
}
.page-topbar {
    min-height: 60px;
    position: fixed;
    width: 100%;
    background-color: #35395c;
    top: 0px;
    left: 0px;
    z-index: 1999;
    box-shadow: 0 2px 4px rgba(33,33,33,.2);
    -webkit-box-shadow: 0 2px 4px rgba(33,33,33,.2);
    -moz-box-shadow: 0 2px 4px rgba(33,33,33,.2);
    -o-box-shadow: 0 2px 4px rgba(33,33,33,.2);
    -ms-box-shadow: 0 2px 4px rgba(33,33,33,.2);
    max-height: 60px;
}
.card .card-body {
    padding: 1.88rem 1.81rem;
}
.card-body {
    flex: 1 1 auto;
    padding: 1.25rem;
}
.btn, .btn-group.open .dropdown-toggle, .btn:active, .btn:focus, .btn:hover, .btn:visited, a, a:active, a:checked, a:focus, a:hover, a:visited, body, button, button:active, button:hover, button:visited, div, input, input:active, input:focus, input:hover, input:visited, select, select:active, select:focus, select:visited, textarea, textarea:active, textarea:focus, textarea:hover, textarea:visited {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
}
a, div, h1, h2, h3, h4, h5, p, span {
    text-shadow: none;
}
*, *::before, *::after {
    box-sizing: border-box;
}
user agent stylesheet
div {
    display: block;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0, 0, 0, 0.125);
    border-radius: 0.25rem;
}
/*Transition==========================*/
.page-topbar, .logo-area, .logo-area, #main-content, .logo-icon, .wraplist, .page-sidebar, .profile-info, .profile-image, .profile-details, .menu-title, .profile-image a img {
    -webkit-transition: 600ms;
    -moz-transition: 600ms;
    -o-transition: 600ms;
    transition: 600ms;
}

.page-topbar .logo-area {
    background-image: url("https://lh3.googleusercontent.com/-N4NB2F966TU/WM7V1KYusRI/AAAAAAAADsM/QUIsUhwEVAgj1-fK8mqzAqDiDwEKlKc7QCL0B/w185-d-h40-p-rw/logo.png");
    background-repeat: no-repeat;
}
.page-topbar .logo-area {
    width: 440px;
    background-color: #35395c;
    display: block;
    min-height: 60px;
    float: left;
}

.page-topbar .logo-icon{
    background-image: url(../images/logo-icon.png) !important;
    background-repeat: no-repeat !important;
}

.page-topbar .logo-icon {
    width: 100px !important;
    background-color: #35395c;
    display: block;
    min-height: 60px;
    float: left;
}
.page-topbar ul {
    margin: 0px;
    padding: 0px;
}
.page-topbar ul li {
    list-style-type: none;    
}
.page-topbar .user-info li a {
    display: inline-block;
    font-size: 13px;
    padding: 5px 8px;
    color: #fff;
    font-family: 'Comfortaa';
    font-weight: 400;
     position:relative;
}
.page-topbar .user-notify li a {
    display: inline-block;
    font-size: 16px;
    padding: 22px 14px;
    color: #fff;
    font-family: 'Comfortaa';
    font-weight: 400;
     position:relative;
}
.page-topbar .quick-area .info-menu {
    height: 60px;
    margin: 0;
    line-height: 50px;
    padding: 0 15px;
    display: flex;
}

.info-menu li{
   
}

.page-topbar .badge {
    display: inline-block;
    min-width: 10px;
    position: absolute;
    padding: 3px 6px;
    font-size: 10px;
    font-weight: bold;
    line-height: 1;
    color: #fff;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #F44336;
    border-radius: 10px;
    top: 8px;
    right: 0;
}
li.profile img {
    height: 30px;
    width: 30px;
    top: 0px;
    right: 10px;
    position: relative;
    background-color: #999999;
}

/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  
}

/*
 * Top navigation
 * Hide default border to remove 1px line.
 */
.navbar-fixed-top {
  border: 0;
  padding:15px;
}

/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #222;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}
li.profile img {
    height: 40px;
    width: 40px;
    top: 0px;
    right: 10px;
    position: relative;
    background-color: #999999;
}
.img-circle {
    border-radius: 40%;
}
@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}
.nav-sidebar > .active > a,
.nav-sidebar > .active > a:hover,
.nav-sidebar > .active > a:focus {
  color: #fff;
  background-color:#f39c12;
}


/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border:2;
  
}
</style>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          
          <a class="navbar-brand" href="#"><img src="quick.png"></a>
        </div>
        <ul class="pull-right info-menu user-info">
         <li class="profile">
             
                 <img src="https://lh3.googleusercontent.com/-uwagl9sPHag/WM7WQa00ynI/AAAAAAAADso/ZGTVC0LVk1cFReheTbZzpGa2aawWyV8QACL0B/w140-d-h148-p-rw/profile-pic.jpg" class="img-circle img-inline">
                 <span style="font-size:30px;color:white"><?php

echo $_SESSION['username'];
?> </span>
             </a>
             
             
            
           </li>
         </ul>
            
    </div>
    </div>
    
      </div>
    </nav>
<div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
           <li><a></a></li>
            <li><a href="#Addcourier">AddCourier</a></li>
            <li><a href="viewco.php">View Courier</a></li>
			  <li><a href="track.php">Tracking</a></li>
            <li><a href="login.php">Logout</a></li>
          </ul>
          
        </div>
		
		<br>
		<br>
		<div id="dashboard" class="container-fluid">
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    
        <div id="Add Courier" class="container-fluid bg-grey">
  <h2 class="text-center">	Add Courier</h2>
	  <form action="addcourier.php" method="post" name="frmShipment" >
          <h3>Senders Name</h3>
           <input name="sname"  maxlength="100" size="40" type="TEXT" required>
          <h3>Origin</h3>
        <input name="orig" id="orig" maxlength="13" size="40" type="TEXT" required>
                <h3>Senders address</h3>           
 <textarea name="saddress" cols="32" rows="3" id="raddress" required></textarea>
           
				<br>
<br>         
		 <h3>Receiver's name </h3>        
<input name="rname" id="rname" maxlength="100" size="40" type="TEXT" required>
                         <h3>Destination </h3>            
<input name="dest" id="dest" maxlength="13" size="40" type="TEXT" required></td>
 <h3>Receiver's Address </h3>          
		 <textarea name="raddress" cols="32" rows="3" id="raddress" required></textarea>
                             <h3>Mode of Transport</h3>     
							 <select id="mode" name="mode" required>
                                <option value="air" selected="selected">Air</option>
                                <option value="surface">Surface</option>
                                <option value="water">Water</option>
                            </select>
							<h3>Weight</h3>  
<input id="weight" size="10" maxlength="10" name="wt" type ="number"required> <strong>kg</strong>
<h3>No.of Packages</h3>  
<input name="num" id="num" size="40" maxlength="20"  type ="number" required></td>
                          <h3>Status</h3>  
						  <select name="status" id="status" required>
                                <option selected="selected" value="Loaded">Loaded</option>
                            </select>							

						<br>
         <br>
		                       
         <input name="pay" type="submit" value="Add Courier" /></td>
                                        
                            </form>
         
</div>
</div>

    

    
  </body>
</html>

