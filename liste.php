<link rel="stylesheet" href="stayl.css"
<script src=


<?php
	$db=mysqli_connect("localhost","root","","authentication");
	$sql="SELECT Titre,Description FROM deposer";
	$result=mysqli_query($db,$sql);
	$datas=array();
	if(mysqli_num_rows($result)>0){
		while($row=mysqli_fetch_assoc($result)){
					$datas[]=$row;
		}
	}
?>	
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="stayl.css" type="text/css"/> 
<script type="text/javascript" src="jvscript.js"></script>
</head>
<div id="demo">
  <h1>Material Design Responsive Table</h1>
  <h2>Table of my other Material Design works (list was updated 08.2015)</h2>
  
  <!-- Responsive table starts here -->
  <!-- For correct display on small screens you must add 'data-title' to each 'td' in your table -->
  <div class="table-responsive-vertical shadow-z-1">
  <!-- Table starts here -->
  <table id="table" class="table table-hover table-mc-light-blue">
  	<table bordercolordark="green" 
      <thead>
        <tr>
          <th>Nom complet</th>
          <th>Name</th>
          <th>Link</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($datas as  $annonce) { ?>
	        <tr>
	          	<td>	<?= $annonce['Titre'] ?></a></td>
	           <td><?=$annonce['Description']?></td>

	        
	        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
  
  	
  
  