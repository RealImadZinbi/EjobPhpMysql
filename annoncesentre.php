<?php
  session_start();
  //connect to database
  $db=mysqli_connect("localhost", "root","","authentication");
  
  if(isset($_POST['depot']))  { //Si bouton deposer annonce est appuyé 
   $nom=mysqli_real_escape_string($db,$_POST['nom']);
   $ville=mysqli_real_escape_string($db,$_POST['ville']);
   $numero=mysqli_real_escape_string($db,$_POST['numero']);
   $subject=mysqli_real_escape_string($db,$_POST['subject']);
   $Titre=mysqli_real_escape_string($db,$_POST['Titre']);
   $emailAddress=mysqli_real_escape_string($db,$_POST['emailAddress']);
    $profil=mysqli_real_escape_string($db,$_POST['profil']);
     $contexte=mysqli_real_escape_string($db,$_POST['contexte']);




    
   
       $sql= "INSERT INTO `deposentreprise`(Nom,Ville,Telephone,Description,Titre,Email,Profil,Contexte) VALUES('$nom','$ville','$numero','$subject','$Titre','$emailAddress','$profil','$contexte')";
       mysqli_query($db,$sql); //Effectuer une requête dans la Base de donnée
      

    }
   
?>
<!DOCTYPE html>
<html>
<head>
     <title>Déposer votre annonce</title>
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
<form method ="post" action="annoncesentre.php">
    <label for="nom">Nom de votre entreprise</label>
    <input type="text" id="nom" name="nom" placeholder="Nom de l'entreprise">
    
     <label for="ville">Ville</label>
    <input type="text" id="ville" name="ville" placeholder="Ville">
    <label for="numero">Numero de Telephone</label>
    <input type="text" id="numero" name="numero" placeholder="Numero">





    <label for="Titre">Titre</label>
    <input type="text" id="Titre" name="Titre" placeholder="Titre de votre annonce">

    <label for="emailAddress">Email</label>
    <input id="emailAddress" type="email" name="emailAddress" placeholder="Votre email">

    <label for="contexte">Contexte et mission</label>
    <textarea id="contexte" name="contexte" placeholder="Contexte" style="height:100px"></textarea>
        <label for="profil">Profil recherché</label>
    <textarea id="profil" name="profil" placeholder="Profil recherché" style="height:100px"></textarea>

    <label for="subject">Description de l'annonce</label>
    <textarea id="subject" name="subject" placeholder="Votre annonce" style="height:180px"></textarea>


    <input type="submit" name="depot" value="Deposer l'annonce">
  </form>
</div>
