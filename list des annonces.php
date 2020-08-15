<!DOCTYPE html>
<html>
    <head>
        <title>Liste des annonces</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="styles.css">
    </head>
    
    <body>
		<ul class="nav nav-pills" style="margin-right:20px;margin-left:30px; margin-top:10px;">
        <h1 class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Burger Code <span class="glyphicon glyphicon-cutlery"></span></h1>
        </ul>
		<div class="container admin">
            <div class="row">
				<ul class="nav nav-pills" style="margin-right:30px;margin-left:1000px; margin-top:-100px;">
				<a href="client.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-eye-open"></span>  les clients</a></h1>
                </ul>
				<h1><strong>Liste des items   </strong><a href="insert.php" class="btn btn-success btn-lg"><span class="glyphicon glyphicon-plus"></span> Ajouter</a></h1>
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Titre</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Ville</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
  <?php                 
  $db=mysqli_connect("localhost","root","","authentication");
  $sql="SELECT * FROM deposer";
  $result=mysqli_query($db,$sql);
  $datas=array();
  if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
          $datas[]=$row;
    }
  }
  ?>
                

                <?php foreach ($datas as  $annonce) { ?>
                    <tr>
              <td><i><h4><?= $annonce['Titre'] ?></td></i></h4>
             <td><?=$annonce['Nom']?></td>
             <td><?=$annonce['Prenom']?></td>
             <td><?=$annonce['Ville']?></td>

             

              
                      
                        

                
            <?php 
                            
                            echo '<td width=300>';
                            echo '<a class="btn btn-default" href="view.php?id='.$annonce['id'].'"><span class="glyphicon glyphicon-eye-open"></span> Voir</a>';
                           
                        }
                      ?>
                  </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
