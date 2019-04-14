<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Steak House Admin Login </title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
  <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/login-style.css">
</head
<body>
<div class="pen-title">
  <h1>Steak House Admin Login</h1>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
</div>
  <?php
    include("db.php");
    if(isset($_POST['login']))
	{
		$user_login_name = $_POST['username'];
		$user_login_password = $_POST['password'];
		error_reporting(0);
		$que	=	"SELECT * FROM admin WHERE admin_name = '$user_login_name' AND admin_password = '$user_login_password'";
		$res	=	mysqli_query($con,$que);
		$row	=	mysqli_fetch_array($res);
		if($row != "")
			{
				$_SESSION['uid'] = $row['admin_id'] ;
				$_SESSION['u_name'] = $row['admin_name'] ;
			header("location:admin_login_page.php");
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>  
<script  src="js/login-index.js"></script>
</body>
</html>