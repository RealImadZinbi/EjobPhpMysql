<?php
	session_start();
	//connect to database
  $db=mysqli_connect("localhost", "root","","authentication");
  
  if(isset($_POST['register_btn'])) {
	 $username=mysqli_real_escape_string($db,$_POST['username']);
   $password=mysqli_real_escape_string($db,$_POST['password']);
   $password2=mysqli_real_escape_string($db,$_POST['password2']);
   $email=mysqli_real_escape_string($db,$_POST['email']);
   $phone=mysqli_real_escape_string($db,$_POST['phone']);
	 $formation=mysqli_real_escape_string($db,$_POST['formation']);
   if ($password==$password2){
      //create user
       $password=md5($password); //hash password before storing
       $sql= "INSERT INTO `entreprise`(username,password,email,phone,formation) VALUES('$username','$password','$email','$phone','$formation')";
       mysqli_query($db,$sql); //Effecture une requête dans la Base de donnée
       $_SESSION['message'] = "Vous êtes désormais connecté(e)";
       $_SESSION['username'] = $Nom_entreprise;
       header("location: menu.html");

    }else{
        $_SESSION['message']="Les deux mots de passes ne sont pas identiques";
    }    
}   
?>



<!DOCTYPE html>
<html>
<head>
     <title>Votre plateforme E-job::Inscription</title>
     <link rel="stylesheet" type="text/css" href="st.css">
</head>
<body>

<?php
     if (isset($_SESSION['message'])){
        echo "<div id='error_msg'>".$_SESSION['message']."</div>";
        unset($_SESSION['message']);
  }
?>
<form method ="post" action="regentreprise.php">
    <div class="login-box">
  <h1>Inscription</h1>
  <div class="textbox">
    <i class="fa fa-user" aria-hidden="true"></i>

    <input type="text" placeholder="Identifiant" name="username" value="">
  </div>
  <div class="textbox">
    <i class="fa fa-unlock-alt" aria-hidden="true"></i>

    <input type="password" placeholder="Mot de passe" name="password" value="">
  </div>
   <div class="textbox">
    <i class="fa fa-unlock-alt" aria-hidden="true"></i>

    <input type="password" placeholder="Confirmez votre mot de passe" name="password2" value="">
  </div>
  <div class="textbox">
    <i class="fa fa-envelope" aria-hidden="true"></i>
        <input type="text" placeholder="Adresse email" name="email" value="">
   </div>
   <div class="textbox">
      <i class="fa fa-phone" aria-hidden="true"></i>

      <input type="text" placeholder="Numero de telephone" name="phone" value="">
    </div>
    <div class="textbox">
      <i class="fa fa-id-card-o" aria-hidden="true"></i>

      <input type="text" placeholder="Domaine" name="formation" value="">
    </div> 
  <input class="btn" type="submit" name="register_btn" value="Confirmer">

</div>

  </body>