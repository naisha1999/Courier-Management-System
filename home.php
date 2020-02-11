<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","mysite");


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Courier Management System </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="style.css">
</head>
<style>
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
<body>

<div class="container">
  

<br>
<div class="topnav"">
  <!-- Collect the nav links, forms, and other content for toggling -->
      
  <a  href="login.php">Login</a>
  <a href="register.php">Sign up</a>
  <a href="logout.php">Logout</a>

    </div>


<main class="main-content">
 <div class="col-md-6 col-md-offset-4">
<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<div class="bg-text">
  
  


<h1>Home</h1>
<div>
    <h1>Welcome</h1><h2 style="font-size:50px"> <?php echo $_SESSION['username']; ?></h2>
</div>
<a href="logout.php">Log Out</a>



</div>
</main>
</div>

</body>
</html>
