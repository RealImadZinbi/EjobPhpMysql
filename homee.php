<?php
    session_start();

?>



<!DOCTYPE html>
<html>
<head>
     <title>Votre plateforme E-job::Bienvenue</title>
     <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
     <h1>Bienvenue sur votre plateforme</h1>
</div>

<?php
	if (isset($_SESSION['message'])){
		echo "<div id='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>
<h1>Acceuil</h1>
<div><h4>welcome <?php echo $_SESSION['Nom_entreprise']; ?></h4></div>
<div><a href="index.php">Logout</a></div>
<hr>
<div><a href="annoncestag.php">Annonces des stagier(e)</a></div>
</body>     
</html>
 

        
   	