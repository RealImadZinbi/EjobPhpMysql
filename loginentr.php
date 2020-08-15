<?php
	session_start();

	$db=mysqli_connect("localhost","root","","authentication");

	if (isset($_POST['login_btn'])){
		$Nom_entreprise=mysqli_real_escape_string($db,$_POST['Nom_entreprise']);
		$mot_de_passe=mysqli_real_escape_string($db,$_POST['mot_de_passe']);

		$mot_de_passe = md5($mot_de_passe);
		$sql = "SELECT * FROM entreprise WHERE Nom_entreprise='$Nom_entreprise' AND mot_de_passe='$mot_de_passe'";
		$result = mysqli_query($db,$sql);

		if (mysqli_num_rows($result)==1){
			$_SESSION['message']="you are now logged in";
			$_SESSION['Nom_entreprise']=$Nom_entreprise;	
			header("location: homee.php");}
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
		<link rel="stylesheet" href="styl.css">
	</head>	
	<body>
<?php
	if (isset($_SESSION['message'])){
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>
<form method ="post" action="loginentr.php">
<div class="login-box">
	<h1>Login</h1>
	<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>

		<input type="text" placeholder="Username" name="Nom_entreprise" value="">
	</div>
	<div class="textbox">
		<i class="fa fa-unlock-alt" aria-hidden="true"></i>

		<input type="password" placeholder="Password" name="mot_de_passe" value="">
	</div>
	<input class="btn" type="submit" name="login_btn" value="Sign in">

</div>

	</body>