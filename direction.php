  <?php
  session_start();
  if ($_SESSION['login_ok'] == false) { 
  header('Location:login.php');
  }
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Redirection</title>
    <link rel="stylesheet" href="imad.css">
    <script type="text/javascript" src="scripttjs.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

  </head>
  <body>

<div class="container">
  <span class="text1">Bienvenue dans votre plateforme</span>
  <span class="text2">Vous êtes ?</span>
</div>
<div class="btn-group btn-group-justified">
	<center>
		<div style="margin: 520px;">

  <a href="direct.php" class="btn btn-primary">Un stagiaire</a>
  <a href="direc.php" class="btn btn-primary">Une entreprise</a>
   </div>
</center>
			<div style="margin: -515px;">

	<center>
		  <a href="dec.php" class="btn btn-primary">Déconnexion</a>
	</center>
</div>


  </body>
</html>
