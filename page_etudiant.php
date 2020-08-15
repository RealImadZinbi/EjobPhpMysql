<?php
session_start();
if ($_SESSION['login_ok_etud'] == false) { 
header('Location:loginpage.php');
}
include("connect_database.php");

$query1="select nom_etud, prenom_etud from etudiant where cne_etud='".$_SESSION["cne_etud"] ."'";
$result1= mysqli_query($connect, $query1);
$row1=  mysqli_fetch_assoc($result1);
$nom_user= $row1['nom_etud'];
$prenom_user= $row1['prenom_etud'];

$query="select id_projet from projet where id_binome in (select id_binome from etudiant where cne_etud='".$_SESSION['cne_etud']."')";
$result=  mysqli_query($connect, $query);
$row=  mysqli_fetch_assoc($result);
$cp= $row['id_projet'];
$_SESSION['c_p']= $cp;
?>
<!DOCTYPE html>
<html lang="Fr" >

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>page d'accueil</title>

      <link rel="stylesheet" href="css/style.css">
      <img src="Images/Logo%20ENSIAS.png" height="100" width="100" id="ENSIAS">
      <img src="Images/M5.png" height="100" width="100" id="Moha">
</head>
<body>
  <html>
	<head>
  		<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,300italic,400italic,600italic,600' rel='stylesheet' type='text/css'>
  		<link rel="Stylesheet" href="css/master.css" type="text/css" />
  		</style>

  		<link rel="Stylesheet" href="https://ianlunn.github.io/Hover/css/hover.css" type="text/css" />
  
  		<link rel="Stylesheet" href='https://fonts.googleapis.com/css?family=Muli' type='text/css'>
	</head>

<body>
<nav>
    <ul>
      <li><a href="page_etudiant.php">Accueil</a></li>
      <li><a href="Etudiant_Affectation.php">Affectation</a></li>
      <li><a href="#">paramètres</a>
       <ul>
          <li><a href="changerMdp.php">changer le mot de passe</a></li>
        </ul>
        </li>
      <li><a href="#">Mon Projet</a>
        <ul>
          <li><a href="RV_Etudiant.php">Rendez-Vous</a></li>
          <li><a href="infos_sur_projet.php">infos sur projet</a></li>
          <li><a href="Etudiant_Soutenance.php">Soutenance</a></li>
        </ul>
      </li>
      <li><a href="Etudiant_Archive.php">Archive</a>
      </li>
      <li><a href="Deconnexion.php">Déconnexion</a></li>
    </ul>
</nav>
<h4>ENSIAS-projects</h4>
<div class="welcome"> <?php echo ("<h1>".$nom_user." ".$prenom_user."</h1");?> </div>

</body>

</html>

</body>
</html>