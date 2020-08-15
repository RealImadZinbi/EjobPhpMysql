<!DOCTYPE html>
<html>
<head>
	<title>Administrateur</title>
<link rel="icon" type="image/png" href="style/style5/images/icons/favicon.ico"/>
  <link rel="stylesheet" type="text/css" href="style/style5/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/style5/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="style/style5/vendor/animate/animate.css">
  <link rel="stylesheet" type="text/css" href="style/style5/vendor/select2/select2.min.css">
  <link rel="stylesheet" type="text/css" href="style/style5/vendor/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" type="text/css" href="style/style5/css/util.css">
  <link rel="stylesheet" type="text/css" href="style/style5/css/main.css">
  <link href="style/style1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="style/style1/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
  <link href="style/style1/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link href="style/style1/css/creative.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="style/style6/style.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fa-brands.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fa-brands.min.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fa-regular.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fa-regular.min.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fa-solid.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fa-solid.min.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.css">
<link rel="stylesheet" type="text/css"
  href="style/style6/fontawesome-free-5.0.10/web-fonts-with-css/css/fontawesome-all.min.css">
<script src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
<script type="text/javascript" src="style/style6/script.js"></script>
  </head>
</head>


<body id="page-top"> 
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" style="background-color:#7fd3c8">
      <div class="container">
        <a  style="color:black;" class="navbar-brand js-scroll-trigger" href="index.php?action=accueilUtilisateur">Accueil</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" style="color:red;">
              <a style="color:black;" class="nav-link js-scroll-trigger" href="index.php?action=listVolUser">Listes des vols</a>
            </li>
            <li class="nav-item" style="color:red;">
              <a style="color:black;" class="nav-link js-scroll-trigger" href="index.php?action=MonProfil">Mon profile</a>
            </li>
               
             <li class="nav-item dropdown">
                 <a style="color:black;" style="color:black;" class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?=$_SESSION['connectCourant']?></a>
                         <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a style="color:black;" class="dropdown-item" href="index.php?action=modifierCompte">Modifier Profil</a>
                              <a style="color:black;" class="dropdown-item" href="index.php?action=seDeonnecterUtilisateur">Se Déconnecter</a>
                              
                         </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php echo $contenu ; ?>

       <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Contactez nous</h2>
            <hr class="my-4">
            <p class="mb-5">Si vous avez des question ou vous avez rencontrer des problémes sur notre site. vous pous pouvez vous posez vos question sur l'adresse suivante. ou sur le numero d'assistance.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>0535......</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="far fa-envelope fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">email@gmail.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>
    <script src="style/style1/vendor/jquery/jquery.min.js"></script>
    <script src="style/style1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="style/style1/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="style/style1/vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="style/style1/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="style/style1/js/creative.min.js"></script>

</body>
</html>