
	<?php                 
 
  $db=mysqli_connect("localhost","root","","authentication");
  if(!empty($_GET['id'])){
  	  $id=checkInput($_GET['id']);

  }

  $sql="SELECT Titre,Description,Nom,Telephone,Ville,Email,Profil,Contexte FROM deposentreprise where id=$id ";
  $result=mysqli_query($db,$sql);
  $item = mysqli_fetch_assoc($result);
 function checkInput($data) {
 	$data=trim($data);
 	$data=stripslashes($data);
 	$data=htmlspecialchars($data);
 	return $data;
 }


    
  
  
	

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Offre de stage</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="styles.css">
    </head>
 <body>
        
         <div class="container admin">
            <div class="row">
               <div class="col-sm-6">
                    <h1><strong>Offre de stage</strong></h1>
                    <br>
                    <form>
                      <div class="form-group">

                      		               
                        <label>Nom de l'entreprise:</label><?php echo '  '.$item['Nom'];?>
                      </div>
                       <div class="form-group">
                        <label>Ville:</label><?php echo '  '.$item['Ville'];?>
                      </div>
                      <div class="form-group">
                        <label>Email:</label><?php echo '  '.$item['Email'];?>
                      </div>
                      <div class="form-group">
                        <label>Téléphone</label><?php echo '  '.$item['Telephone'];?>
                      </div>
                      <div class="form-group">
                        <label>DESCRIPTION ENTREPRISE:</label><?php echo '  '.$item['Description'];?>
                      </div>
                      <div class="form-group">
                         <label>CONTEXTE & MISSION:</label><?php echo '  '.$item['Contexte'];?>
                      </div>
                      <div class="form-group">
                         <label>PROFIL RECHERCHÉ:</label><?php echo '  '.$item['Profil'];?>
                      </div>
                     
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-primary" href="listannonce.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>  <td><input id="impression" name="impression" type="submit" class="btn btn-primary" onclick="imprimer_page()" value="Exporter en pdf"/></td>	
                    </div>
                    
                </div> 
                

                   <script type="text/javascript">
                   		function imprimer_page(){
                   			window.print();
                   		}
                   	</script>
                    </div>
                </div>
            </div>
        </div>   
    </body>
</html>
