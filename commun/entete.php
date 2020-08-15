<?php 
	include("commun/ouvrir.php");
	
	$titre=""; $styles="styles/mef.css";
	if(isset($url_en_cours) && $url_en_cours!="" && $url_en_cours!="Index" && $url_en_cours!="Index?OUT=true")
		$titre=$url_en_cours;
	else
	{
		$titre = "Formulaire de contact";
		$styles="styles/mef_id.css";
	}
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<title><?php echo $titre; ?></title>
<meta name="description" content="Contrôler et valider les saisies d'un formulaire d'inscription Web par le code client Javascript" />
<meta name="robots" content="index,follow" />
<meta http-equiv="content-language" content="fr" />
<link href='<?php echo $styles; ?>' rel='stylesheet' type='text/css' />
</head>
<body>

	<div class="div_conteneur_parent">
	
		<div class="div_conteneur_page">
			<a href="http://www.bonbache.fr/" target="_self">
			<img src="images/le_formateur.png" style="width:50px;border:none;" align="left" alt="formateur informatique" />
			</a>		
			<div class="titre_page"><h1><?php echo $titre; ?></h1></div>
			
			<div class="div_int_page">