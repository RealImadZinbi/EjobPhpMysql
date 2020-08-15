<?php
  session_start();
  //connect to database
  $db=mysqli_connect("localhost", "root","","authentication");
  
  if(isset($_POST['SEND']))  { //Si bouton deposer annonce est appuyé 
   $Nom=mysqli_real_escape_string($db,$_POST['Nom']);
   $Prenom=mysqli_real_escape_string($db,$_POST['Prenom']);
   $Email=mysqli_real_escape_string($db,$_POST['Email']);
   $Message=mysqli_real_escape_string($db,$_POST['Message']);


    
   
       $sql= "INSERT INTO `contacter`(Nom,Prenom,Email,Message) VALUES('$Nom','$Prenom','$Email','$Message')"; //Effectuer une requête dans la Base de donnée
      mysqli_query($db,$sql);
      header("location: menu.html"); 
   
 }  
?>
<form method ="post" action="Contactns.php">

<link rel="stylesheet" type="text/css" href="Contactns.css">
<div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            <span>NOUS</span>
            <span>CONTACTER</span>
              <style type="text/css">
    body{
      background-image: url(imgg.jpg);
      background-size: cover;
      background-attachment: fixed;
    }
  </style>
          </div>
          <div class="app-contact">CONTACT INFO : +212 697 037 176</div>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Nom" name="Nom" value="" >
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Prenom" name="Prenom" value="">
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="Email" name="Email" value ="">
            </div>
            <div class="app-form-group message">
              <input class="app-form-control" placeholder="MESSAGE" name="Message" value ="">
            </div>
            <div class="app-form-group buttons">
              <button class="app-form-button" name="SEND">SEND</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="credits">
      Votre plateforme
      <a class="credits-link" href="http://localhost:82/prj/menu.html" target="_blank">
        <svg class="dribbble" viewBox="0 0 200 200">
          <g stroke="#ffffff" fill="none">
            <circle cx="100" cy="100" r="90" stroke-width="20"></circle>
            <path d="M62.737004,13.7923523 C105.08055,51.0454853 135.018754,126.906957 141.768278,182.963345" stroke-width="20"></path>
            <path d="M10.3787186,87.7261455 C41.7092324,90.9577894 125.850356,86.5317271 163.474536,38.7920951" stroke-width="20"></path>
            <path d="M41.3611549,163.928627 C62.9207607,117.659048 137.020642,86.7137169 189.041451,107.858103" stroke-width="20"></path>
          </g>
        </svg>
        E-JOB
      </a>
    </div>
  </div>
</div>
</form>