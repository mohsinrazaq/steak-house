<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Steak House User Login </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/login-style.css">
</head>
<body>
<div class="pen-title">
  <h1>Steak House User Login</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">Click Me</div>
  </div>
  <?php
  include("db.php");
	if(isset($_POST['login']))
	{
		$user_login_name = $_POST['username'];
		$user_login_password = $_POST['password'];
		error_reporting(0);
		$que	=	"SELECT * FROM users WHERE user_name = '$user_login_name' AND user_password = '$user_login_password'";
		$res	=	mysqli_query($con,$que);
		$row	=	mysqli_fetch_array($res);
		if($row != "")
			{
				$_SESSION['uid'] = $row['user_id'] ;
				$_SESSION['u_name'] = $row['user_name'] ;
			header("location:user_login_page.php");
			}
		else
			{
			echo "invalid username or password.";	
			}	
	}
?>
  <div class="form">
    <h2>Login to your account</h2>
    <form method="post">
      <input type="text" placeholder="Username"/ name="username">
      <input type="password" placeholder="Password" name="password"/>
      <button name="login">Login</button>
    </form>
  </div>
<?php
if(isset($_POST['register']))
{
	$user_name = $_POST['user_name'];
	$user_password = $_POST['user_password'];
  $user_confirm_password = $_POST['user_confirm_password'];
  $user_email = $_POST['user_email'];
	$user_number = $_POST['user_contact_no'];
	if($user_password != $user_confirm_password)
	{
    echo "passwords do not match";
	}
	else
	{
    $q= "INSERT INTO users(user_name,user_password,user_email,user_cell_no) VALUES ('$user_name','$user_password','$user_email','$user_number')";
    $res =  mysqli_query($con,$q);
    header("location:user_login.php");
	}
}
?>
  <div class="form">
    <h2>Create an account</h2>
    <form class="sign-up" method="post">
      <input type="text" placeholder="Username" name="user_name"/>
      <input type="password" placeholder="Password" name="user_password"/>
      <input type="password" placeholder="Confirm Password" name="user_confirm_password"/>
      <input type="email" placeholder="Email Address" name="user_email"/>
      <input type="tel" placeholder="Phone Number" name="user_contact_no"/>
      <button name="register">Register</button>
    </form>
  </div>
  <div class="cta"><a href="h#">Forgot your password?</a></div>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  
<script  src="js/login-index.js"></script>
</body>
</html>