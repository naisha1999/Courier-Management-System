<!DOCTYPE html>
<html>
<head>
  <title></title>
<style type="text/css">
  body {
    background-repeat:no-repeat;
background-image:url("top.png");
background-size:cover;
background-attachment:fixed;


  
  }
  .form-control {
        min-height: 41px;
    background: #fff;
    box-shadow: none !important;
    border-color: #e3e3e3;
  }
  .form-control:focus {
    border-color: #70c5c0;
  }
    .form-control, .btn {        
        border-radius: 2px;
    }
  .login-form {
    width: 500px;
    margin: 0 auto;
    padding: 100px 0 30px;    
  }
  .login-form form {
    color: #7a7a7a;
    border-radius: 2px;
      margin-bottom: 15px;
        font-size: 13px;
        background: #ececec;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;  
        position: relative; 
    }
  .login-form h2 {
    font-size: 22px;
        margin: 35px 0 25px;
    }
  .login-form .avatar {
    position: absolute;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: -50px;
    width: 95px;
    height: 95px;
    border-radius: 50%;
    z-index: 9;
    background: #70c5c0;
    padding: 15px;
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
  }
  .login-form .avatar img {
    width: 100%;
  } 
  
  
  .login-form .close {
    position: absolute;
    margin: 0 auto;
    left: -160;
    right: 0;
    top: -30px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    z-index: 2;
    background: red;
    
    
  }
  .login-form .close img {
    width: 100%;
    
  }   
    .login-form input[type="checkbox"] {
        margin-top: 2px;
    }
    .login-form .btn {        
        font-size: 16px;
        font-weight: bold;
    background: #70c5c0;
    border: none;
    margin-bottom: 20px;
    }
  .login-form .btn:hover, .login-form .btn:focus {
    background: #50b8b3;
        outline: none !important;
  }    
  .login-form a {
    color: #fff;
    text-decoration: underline;
  }
  .login-form a:hover {
    text-decoration: none;
  }
  .login-form form a {
    color: #7a7a7a;
    text-decoration: none;
  }
  .login-form form a:hover {
    text-decoration: underline;
  }
</style>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body>

<div class="login-form">
<form action="insert.php" method="POST" id="registration-form">
  <div class="avatar">
  <a href="car.php">
      <img src="avatar.png" alt="Avatar"></a>
    </div>
    <div class="close">
    <a href="car.php">
      <img src="close.png" alt="close">
      </a>
    </div>
        <h2 class="text-center">Sign Up</h2> 
        <div class="form-group">
<select name="type">
            <option value = "client">Client</option>
            <option value = "employee">Employee</option>
          </select>
</div>    
 
<div class="form-group">
  <p>
    User name
    <input name="username" class="form-control" data-validation="length alphanumeric" 
		 data-validation-length="3-12" 
		 data-validation-error-msg="User name has to be an alphanumeric value (3-12 chars)">
  </p>
</div>
<div class="form-group">
  <p>
    Password
    <input name="pass_confirmation" type="password" class="form-control" data-validation="strength" 
		 data-validation-strength="2">
  </p>
</div>
<div class="form-group">
  <p>
    Repeat password
    <input name="pass" type="password" class="form-control" data-validation="confirmation">
  </p>
</div>
<div class="form-group">
  <p>
    Name
    <input name="fname" class="form-control" data-validation="length" 
     data-validation-length="3-20" 
     data-validation-error-msg="Name is required(3-20 chars)">
  </p>
</div>
 <div class="form-group">
  <p>
    E-mail
    <input name="email" class="form-control" data-validation="email">
  </p>
</div>
<div class="form-group">
  <p>
    Mobile
    <input name="mobile" class="form-control" data-validation="length numeric" 
     data-validation-length="10-11" 
     data-validation-error-msg="Phone has to be an numeric value(10 numbers)">
  </p>
</div>
<div class="form-group">
  <p>
    Address
    <input name="address" class="form-control" data-validation="length" 
    data-validation-length="4-100"  
     data-validation-error-msg="Please Enter address">
  </p>
</div>
<div class="form-group">
  <p>
    City
    <input name="city" class="form-control" data-validation="length alpha" 
     data-validation-length="3-12" 
     data-validation-error-msg="Please enter city">
  </p>
</div>
<div class="form-group">
    <select name="country">
    <option value="" selected="selected">-- Select One --</option>
    <option value="India">India</option>
    <option value="Not Listed">Not Listed</option>
    </select>
    </div>
    <div class="form-group">
    <input type="checkbox" name="terms" value="terms"> I have Read and I agreed on Terms of Service,Privacy Policy.
    </div>
        <div class="form-group">
            <button type="submit" name="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>
        </div>
</form>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
<script>

  $.validate({
    modules : 'location, date, security, file',
    onModulesLoaded : function() {
      $('#country').suggestCountry();
    }
  });

  // Restrict presentation length
  $('#presentation').restrictLength( $('#pres-max-length') );

</script>
</body>
</html>