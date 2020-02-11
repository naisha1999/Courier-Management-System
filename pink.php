<!doctype html>

<html class="no-js" lang="en">


<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Transportation & Agency Template is a simple Smooth transportation and Agency Based Template" />
    <meta name="keywords" content="Portfolio, Agency, Onepage, Html, Business, Blog, Parallax" />

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    

    <!--====== FAVICON ICON =======-->
    <link rel="shortcut icon" type="image/ico" href="img/favicon.png" />

    <!--====== STYLESHEETS ======-->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/stellarnav.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--====== MAIN STYLESHEETS ======-->
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    
</head>
<style>
input[type="submit"] {
    width: 150px;
    height: 50px;
	 background: #f39c12 none repeat scroll 0 0;
    border: 0 none;
    border-radius: 5px;
    color: #fff;
    font-weight: 500;
  
    letter-spacing: 1px;
}
.modal-header {
  padding: 0;
}
.modal-header .close {
  padding: 10px 15px;
}
.modal-header ul {
  border: none;
}
.modal-header ul li {
  margin: 0;
}
.modal-header ul li a {
  border: none;
  border-radius: 0;
}
.modal-header ul li.active a {
  color: #e12f27;
}
.modal-header ul li a:hover {
  border: none;
}
.modal-header ul li a span {
  margin-left: 10px;
}
.modal-body .form-group {
  margin-bottom: 10px;
}

</style>
<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!--- PRELOADER -->
    <div class="preeloader">
        <div class="preloader-spinner"></div>
    </div>

    <!--SCROLL TO TOP-->
    <a href="#home" class="scrolltotop"><i class="fa fa-long-arrow-up"></i></a>

    <!--START TOP AREA-->
    <header class="top-area" id="home">
        <div class="top-area-bg" data-stellar-background-ratio="0.6"></div>
        <div class="header-top-area">
            <!--MAINMENU AREA-->
            <div class="mainmenu-area" id="mainmenu-area">
                <div class="mainmenu-area-bg"></div>
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#home" class="navbar-brand"><img src="img/logo.png" alt="logo"></a>
                        </div>
                       
                        <div id="main-nav" class="stellarnav">
                            <ul id="nav" class="nav navbar-nav">
                                <li><a href="#home">Home</a>
                                    
                                </li>
                                <li><a href="#Features">Features</a>
                                    
                                </li>
                                <li><a href="#services">Service</a>
                                    
                                </li>
                                <li><a href="#Testimonial">Testimonial</a>
                                    
                                </li>
                                
                                <li><a href="#Contact">Contact</a>
                                    
                                </li>
								<li> <a class="btn btn-primary" href="#" data-toggle="modal" data-target=".login-register-form">Login</a>
                                    	<div class="modal fade login-register-form" role="dialog">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">
                                            <span class="glyphicon glyphicon-remove"></span>
                                        </button>
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#login-form"> Login <span class="glyphicon glyphicon-user"></span></a></li>
                                            <li><a data-toggle="tab" href="#registration-form"> Register <span class="glyphicon glyphicon-pencil"></span></a></li>
                                        </ul>
                                    </div>
                                    <div class="modal-body">
                                        <div class="tab-content">
                                            <div id="login-form" class="tab-pane fade in active">
                                                <form action="/">
                                                    <div class="form-group">
                                                        <label for="email">Email:</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="pwd">Password:</label>
                                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
                                                    </div>
                                                    <div class="checkbox">
                                                        <label><input type="checkbox" name="remember"> Remember me</label>
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Login</button>
                                                </form>
                                            </div>
                                            <div id="registration-form" class="tab-pane fade">
                                                <form action="/">
                                                    <div class="form-group">
                                                        <label for="name">Your Name:</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newemail">Email:</label>
                                                        <input type="email" class="form-control" id="newemail" placeholder="Enter new email" name="newemail">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newpwd">Password:</label>
                                                        <input type="password" class="form-control" id="newpwd" placeholder="New password" name="newpwd">
                                                    </div>
                                                    <button type="submit" class="btn btn-default">Register</button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
					 </div>
                </nav>
            </div>
		
            <!--END MAINMENU AREA END-->
        </div>
        <!--HOME SLIDER AREA-->
		
        <div class="welcome-slider-area">
            <div class="welcome-single-slide slider-bg-one">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h1>WE MAKE STRONGEST SERVICE ABOVE THE WORLD</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="home-button">
                                    <a href="#">Our Service</a>
                                    <a href="#">Get A Quate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-single-slide slider-bg-two">
                <div class="container">
                    <div class="row flex-v-center">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="welcome-text text-center">
                                <h1>WE MAKE STRONGEST SERVICE ABOVE THE WORLD</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                                <div class="home-button">
                                    <a href="#">Our Service</a>
                                    <a href="#">Get A Quate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       
		</div>
		
        <!--END HOME SLIDER AREA-->
    </header>
    <!--END TOP AREA-->
<div id="Features" class="container-fluid">
    <!--BLOG AREA-->
	
    <section class="blog-area gray-bg padding-top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.2s">
                        <h2><strong><center>How it works ?</strong></center></h2>
						<div class="blog-image">
                            <img src="img/blog/pick.png" alt="">
                        </div>
                        
                    </div>
                </div>
                
                   <div class="col">
                    <div class="single-blog wow fadeInUp" data-wow-delay="0.3s">
                        <div class="blog-image">
                            <img src="img/blog/top.png" alt="">
                        </div>
                        
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--ABOUT AREA-->
	
    
    <!--ABOUT AREA END-->

    <!--SERVICE AREA-->
	<div id="services" class="container-fluid">
    <section class="service-area">
        <div class="service-top-area padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                        <div class="area-title text-center wow fadeIn">
                            <h2>Our Service</h2>
                            <p>The Carrier courier service delivered its first order in September 2018. <br>We can deliver exactly when you want and can start processing your order almost immediately after we receive it, or we can deliver on a specific day and time.</p>
                        </div>
                    </div>
                </div>
            
        </div>
        
  
    <!--SERVICE AREA END-->

    <!--PROMO AREA-->
    <section class="promo-area">
        <div class="promo-top-area section-padding wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-anchor"></i></div>
                            <div class="promo-details">
                                <h3>Our Location</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-newspaper-o"></i></div>
                            <div class="promo-details">
                                <h3>Latest News</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-umbrella"></i></div>
                            <div class="promo-details">
                                <h3>24/7 Support</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="single-promo">
                            <div class="promo-icon"><i class="fa fa-bicycle"></i></div>
                            <div class="promo-details">
                                <h3>Fast Delevery</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	
       </section>
    </section>
    <!--PROMO AREA END-->

    <!--TESTMONIAL AREA -->
	<div id="Testimonial" class="container-fluid">
    <section class="testmonial-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3 col-sm-12 col-xs-12">
                    <div class="area-title text-center wow fadeIn">
                        <h2>what client’s say</h2>
                    </div>
                </div>
            </div><div id="Testimonial" class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-md-offset-4 col-lg-offset-4 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                    <div class="client-photo-list wow fadeIn">
                        <div class="client_photo">
                            <div class="item">
                                <img src="img/testmonial/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="img/testmonial/2.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="row">
                <div class="col-md-12">
                    <div class="client_nav">
                        <span class="fa fa-angle-left testi_prev"></span>
                        <span class="fa fa-angle-right testi_next"></span>
                    </div>
                </div>
                <div class="col-xs-12 col-md-10 col-md-offset-1 text-center">
                    <div class="client-details-content wow fadeIn">
                        <div class="client_details">
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                            <div class="item">
                                <q>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </q>
                                <h3>JABIN KANE</h3>
                                <p>CEO, TOPSMMPANEL.COM</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
    </section>
    <!--TESTMONIAL AREA END -->
</div>
</div>
<div id="Contact" class="container-fluid">
<div class="contact-form-area section-padding gray-bg">
	<h3><strong><center>
	Get in touch</strong></center></h3>
	<p><center>Need any help just send message.</center></p>
	<div class="container">
            <div class="row">
             <form name="frmContact" id="" frmContact"" method="post"
            action="" enctype="multipart/form-data"
            onsubmit="return validateContactForm()">

				<div class="input-row">
				<div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
					<label style="padding-top: 20px;">Name</label> <span
						id="userName-info" class="info"></span><br /> <input
                    type="text" size="70" maxlength="25"class="input-field" name="userName"
                    id="userName" />
            </div>
			</div>
            <div class="input-row">
			<div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"size="70" maxlength="25"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
			</div>
            <div class="input-row">
			 <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"size="70" maxlength="25"
                    class="input-field" name="subject" id="subject" />
					 
            </div>
			</div>
            <div class="input-row">
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="content" id="content"
                    class="input-field" cols="70" rows="6"></textarea>
            </div>
			</div>
            <div>
			<div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                <input type="submit" style="background: #FF8C00;"name="send"class="btn-submit"
                    value="Send" />
</div>
                <div id="statusMessage"> 
                        <?php
                        if (! empty($message)) {
                            ?>
                            <p class='<?php echo $type; ?>Message'><?php echo $message; ?></p>
                        <?php
                        }
                        ?>
                    </div>
            </div>
			
			</form>
    </div>
	</div>
				</div>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"
        type="text/javascript"></script>
    <script type="text/javascript">
        function validateContactForm() {
            var valid = true;

            $(".info").html("");
            $(".input-field").css('border', '#e0dfdf 1px solid');
            var userName = $("#userName").val();
            var userEmail = $("#userEmail").val();
            var subject = $("#subject").val();
            var content = $("#content").val();
            
            if (userName == "") {
                $("#userName-info").html("Required.");
                $("#userName").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (userEmail == "") {
                $("#userEmail-info").html("Required.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (!userEmail.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/))
            {
                $("#userEmail-info").html("Invalid Email Address.");
                $("#userEmail").css('border', '#e66262 1px solid');
                valid = false;
            }

            if (subject == "") {
                $("#subject-info").html("Required.");
                $("#subject").css('border', '#e66262 1px solid');
                valid = false;
            }
            if (content == "") {
                $("#userMessage-info").html("Required.");
                $("#content").css('border', '#e66262 1px solid');
                valid = false;
            }
            return valid;
        }
</script>
<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$conn = mysqli_connect("localhost", "root", "","tblcontact") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $content. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
?>
    <!--FOOER AREA-->
	</div>
    <div class="footer-area dark-bg">
        <div class="footer-area-bg"></div>
        <div class="footer-top-area wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="subscribe-content">
                            <h2>Weekly Newsletter</h2>
                            <p>There are many vaiations of passages of lorem ipsum available.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="subscriber-form-area">
						<?php
if (! empty($_POST["subscribe"])) {
   
    $userEmail = filter_input(INPUT_POST, "userEmail", FILTER_SANITIZE_EMAIL);
    
    $userEmail = filter_var($userEmail, FILTER_VALIDATE_EMAIL);
    
    if (! empty($userEmail)) {
        $conn = mysqli_connect("localhost", "root", "", "tbl_users");
        $query = "INSERT INTO tbl_users ( userEmail) VALUES ('" . $userEmail . "')";
        mysqli_query($conn, $query);
        mysqli_close($conn);
    } else {
        $message = "All fields are required";
    }
}
?>
						<?php
if (! empty($message)) {
    ?>
<div class="error"><?php echo $message; ?></div>
<?php
}
?>
                            <form name="frmSubscription" class="subsriber-form"action="" method="POST"
        onSubmit="return fnSubscribe();">
		 <label for="subscriber-mail"><i class="fa fa-envelope-o"></i></label>
       <input type="text"
            name="userEmail"  id="subscriber-mail" placeholder="Enter Your Mail"class="input-field" />
			
			<button type="submit" name="subscribe" value="Subscribe" class="input-submit">subscribe</button>
          
                                
								
								
	
                            </form>
							 <script>
function fnSubscribe() {
    if(document.frmSubscription.userName.value=="") {
        return false;
    }
    if(document.frmSubscription.userEmail.value=="") {
        return false;
    }
    return true;
}
</script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-area wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget footer-about">
                            <h3>About Us</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <ul>
                                <li><i class="fa fa-phone"></i> <a href="callto:+8801911854378">+8801911854378</a></li>
                                <li><i class="fa fa-map-marker"></i> <a href="mailto:backpiper.com@gmail.com">backpiper.com@gmail.com</a></li>
                                <li><i class="fa fa-phone"></i> Gazipur, 1704, Bangladesh. 1215.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget twitter-widget">
                            <h3>Latest Tweets</h3>
                            <ul>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem .</p>
                                        <a href="#" class="tweet-meta">5 Miniutes Ago</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="twitter-icon"><i class="fa fa-phone"></i></div>
                                    <div class="tweet-detail">
                                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem .</p>
                                        <a href="#" class="tweet-meta">5 Miniutes Ago</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget list-widget">
                            <h3>Customer Service</h3>
                            <ul>
                                <li><a href="#">Support Forums</a></li>
                                <li><a href="#">Communication</a></li>
                                <li><a href="#">FAQS</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Rules & Condition</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                        <div class="single-footer-widget instafeed-widget">
                            <h3>Customer Service</h3>
                            <ul>
                                <li><a href="#"><img src="img/instafeed/1.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/2.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/3.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/4.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/5.jpg" alt=""></a></li>
                                <li><a href="#"><img src="img/instafeed/6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-border"> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container">
                
                        
                    
                    <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                        <div class="footer-social-bookmark text-right wow fadeIn">
                            <ul class="social-bookmark">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-behance"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
    <!--FOOER AREA END-->


    <!--====== SCRIPTS JS ======-->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <!--====== PLUGINS JS ======-->
    <script src="js/vendor/jquery.easing.1.3.js"></script>
    <script src="js/vendor/jquery-migrate-1.2.1.min.js"></script>
    <script src="js/vendor/jquery.appear.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/stellar.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/stellarnav.min.js"></script>
    <script src="js/contact-form.js"></script>
    <script src="js/jquery.sticky.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <!--===== ACTIVE JS=====-->
    <script src="js/main.js"></script>
</body>

</html>
