<?php
session_start();
$_SESSION['login_ok'] = false;
	
	$db=mysqli_connect("localhost","root","","authentication");

	if (isset($_POST['login_btn'])){
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$password=mysqli_real_escape_string($db,$_POST['password']);

		$password = md5($password);
		
		$sql = "SELECT * FROM entreprise WHERE username='$username' AND password='$password'";
		$result1 = mysqli_query($db,$sql);

		

		if (mysqli_num_rows($result1)==1){
			$_SESSION['message']="you are now logged in";
			$_SESSION['username']=$username;
			$_SESSION['login_ok'] = true;

			header("location: direc.php");}
		else{
			$_SESSION['message']="Mot de passe ou identifiant incorrect";
		}

	}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Connectez vous</title>
		<link rel="stylesheet" href="st.css">
	</head>	
	<body>
<?php
	if (isset($_SESSION['message'])){
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>
<form method ="post" action="login.php">
<div class="login-box">
	<h1>Login</h1>
	<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>

		<input type="text" placeholder="Username" name="username" value="">
	</div>
	<div class="textbox">
		<i class="fa fa-unlock-alt" aria-hidden="true"></i>

		<input type="password" placeholder="Password" name="password" value="">
	</div>
	<input class="btn" type="submit" name="login_btn" value="Sign in">

</div>

	</body>