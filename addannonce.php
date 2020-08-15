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
   $avatar_path = mysqli_real_escape_string($db,$_FILES['avatar']['name']);


    
   
       $sql= "INSERT INTO `deposentreprise`(Nom,Ville,Telephone,Description,Titre,Email,avatar) VALUES('$nom',$ville','$numero','$subject','$Titre','$emailAddress','$avatar_path')"; //Effectuer une requête dans la Base de donnée
      mysqli_query($db,$sql);
      header("location: listee.php"); 
   
 }  
?>
<!DOCTYPE html>
<html>
<head>
     <title>Déposer votre demande</title>
     <style type="text/css">
    body{
      background-image: url(imgg.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
  </style>
     <link rel="stylesheet" type="text/css" href="Stile.css">
</head>

<div class="container">
  <h1>Déposer votre demande</h1>
      <form class="form" action="addannonce.php"
method="post" enctype="multipart/form-data" autocomplete="off">
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" placeholder="Votre nom">
    
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
    <div class="form-group">
      <label for="image">Déposer CV</label>
      <input type="file" id="avatar" name="avatar">
      
      </div>
  </br> 
     <input type="submit"name="depot" value="Deposer l'annonce" />
  </form>
</div>
