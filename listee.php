<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="css/datatables.bootstrap4.css"/>
<link rel="stylesheet" type="text/css" href="css/datatables.foundation.css"/>
<link rel="stylesheet" type="text/css" href="css/datatables.foundation.min.css"/>
<link rel="stylesheet" type="text/css" href="css/datatables.jquery.datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="css/datatables.jqueryui.min.css"/>














<!DOCTYPE html>
<html lang="en">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="st.css">
  <title>Demandes disponibles</title>

 </html>
<body>
  <div class="header">
<center> <h1>Demandes disponibles</h1>
</center>
</div>
  <div class="container" style=margin-top:20 px>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <table class="table table-bordered table-hovered">
          <thead>
            <tr>
              <td>Titre</td>
              <td>Description</td>
              <td>Email</td>
              <td>Nom</td>
              <td>Prenom</td>
              <td>Telephone</td>
              <td>Ville</td>
              <td>CV</td> 
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
             <td><?=$annonce['Description']?></td>
             <td><?=$annonce['Email']?></td>
             <td><?=$annonce['Nom']?></td>
             <td><?=$annonce['Prenom']?></td>

             <td><?=$annonce['Numero']?></td>
             <td><?=$annonce['Ville']?></td>
             <td><?=$annonce['avatar']?></td>

              
                      
                        

                
            <?php } ?>   
               </tbody>
              </table>
             </div>

            
</div>
</div>
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
<script type="text/javascript" src="js/jquery.datatables.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" src="js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="js/dataTables.foundation.min.js"></script>
<script type="text/javascript" src="js/dataTables.jqueryui.min.js"></script>
<script type="text/javascript" src="js/dataTables.jqueryui.js"></script>
<script type="text/javascript" src="js/dataTables.semanticui.js"></script>
<script type="text/javascript" src="js/dataTables.semanticui.min.js"></script>
<script type="text/javascript" src="js/jquery.datatables.js"></script>


 <script type="text/javascript">
    $(document).ready(function(){
      $(".table").DataTable();

    });
</script>



</body>


</html>
