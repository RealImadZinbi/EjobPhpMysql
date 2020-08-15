<!DOCTYPE html>
<html>
<head>
	<title>Mes annonces</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
<h1>Liste des annonces</h1>
<table class="table table-bordered table-hover table-stripped">
<tr><th>ID</th><th>Titre</th></tr>
<?php
$db=mysqli_connect("localhost", "root","","authentication");
$query ="SELECT id,Titre FROM deposer";
$result=mysqli_query($db,$query);
$num_rows=mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$compteur=1;

	
	while ( $num_rows >= $compteur)
{
$row = mysqli_fetch_array($result);
$Titre=$row[$compteur]["Titre"];
$compteur=$compteur+1;
}


?>
