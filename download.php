<?php  
    $db=mysqli_connect("localhost","root","","authentication");

  if(isset($_GET['id'])){
    $id=$_GET['id'];
    $stat=$db->prepare("SELECT * FROM deposer where id=?");
    
    $data=$stat->fetch();
    $file='media/'.$data['avatar'];
    if(file_exists($file)){
  
      readfile($file);
      exit;
    }

    }
  


?> 
