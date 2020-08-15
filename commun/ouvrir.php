<?php 
	$url_en_cours=$_SERVER['REQUEST_URI'];
	$url_en_cours=substr($url_en_cours,strripos($url_en_cours,"/")+1);
	$url_en_cours = str_replace(".php","",str_replace("-"," ",$url_en_cours));
	$url_en_cours = strtoupper(substr($url_en_cours,0,1)).substr($url_en_cours,1);
?>