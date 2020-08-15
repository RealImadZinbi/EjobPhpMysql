<?php
  session_start();
  //connect to database
  $db=mysqli_connect("localhost", "root","","authentication");
  
  if(isset($_POST['depot']))  { //Si bouton deposer annonce est appuyé 
   $nom=mysqli_real_escape_string($db,$_POST['nom']);
   $prenom=mysqli_real_escape_string($db,$_POST['prenom']);
   $ville=mysqli_real_escape_string($db,$_POST['ville']);
   $numero=mysqli_real_escape_string($db,$_POST['numero']);
   $subject=mysqli_real_escape_string($db,$_POST['subject']);
   $Titre=mysqli_real_escape_string($db,$_POST['Titre']);
   $emailAddress=mysqli_real_escape_string($db,$_POST['emailAddress']);

    
   
       $sql= "INSERT INTO `deposer`(Nom,Prenom,Ville,Numero,Description,Titre,Email) VALUES('$nom','$prenom','$ville','$numero','$subject','$Titre','$emailAddress')";
       mysqli_query($db,$sql); //Effectuer une requête dans la Base de donnée
      
       header("location: listee.php");

    }
   
?>
<!DOCTYPE html>
<html>
<head>
     <title>Votre plateforme E-job::Inscription</title>
     <link rel="stylesheet" type="text/css" href="Stile.css">
     <style type="text/css">
    body{
      background-image: url(imgg.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
  </style>
</head>

<div class="container">
  <h1>Déposer votre annonce</h1>
<form method ="post" action="ajouannonce.php">
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" placeholder="Votre nom">
    <label for="prenom">Prenom</label>
    <input type="text" id="prenom" name="prenom" placeholder="Votre prenom">
     <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville" placeholder="Ville">
    <label for="numero">Numero de Telephone</label>
    <input type="text" id="numero" name="numero" placeholder="Numero">






    <label for="Titre">Titre</label>
    <input type="text" id="Titre" name="Titre" placeholder="Titre de votre annonce">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="emailAddress" placeholder="Votre email">


    <label for="subject">Description de l'annonce</label>
    <textarea id="subject" name="subject" placeholder="Votre annonce" style="height:180px"></textarea>

    <input type="submit" name="depot" value="Deposer l'annonce">
  </form>
</div>
