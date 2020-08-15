<?php
session_start();
$_SESSION['message']='';
$db=mysqli_connect("localhost", "root","","authentication");

if(isset($_POST['Register'])){
  $username = mysqli_real_escape_string($db,$_POST['username']);
  $email = mysqli_real_escape_string($db,$_POST['email']);
  $password= mysqli_real_escape_string($db,$_POST['password']);
  $avatar_path = mysqli_real_escape_string($db,'CV/'.$_FILES['avatar']['name']);

  if (preg_match("!image!", $_FILES['avatar']['type'])) {
      $_SESSION['username'] = $username;
      $_SESSION['avatar'] = $avatar_path;

      $sql="INSERT into form (username,email,password,avatar)" . "values ('$username','$email','$password','$avatar_path')";
      mysqli_query($db,$sql);
      ajouannoncestag.php
    
}
}
?>

<link href="//db.onlinewebfonts.com/c/a4e256ed67403c6ad5d43937ed48a77b?family=Core+Sans+N+W01+35+Light" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="form.css" type="text/css">
<div class="body-content">
  <div class="module">
    <h1>Deposer votre annonce</h1>
    <form class="form" action="ajouannoncestag.php" method="post" enctype="multipart/form-data" autocomplete="off">
      <div class="alert alert-error"><?= $_SESSION['message'] ?></div>
      <input type="text" placeholder="Nom et Prenom" name="username" required />
      <input type="email" placeholder="Email" name="email" required />
      <input type="Telephone" placeholder="Telephone" name="password" autocomplete="new-password" required />
      <input type="ville" placeholder="Votre ville" name="Ville" autocomplete="new-password" required />
      <div class="avatar"><label>Deposer votre CV: </label><input type="file" name="avatar" accept="image/*" required /></div>
      <input type="submit" value="Register" name="Register" class="btn btn-block btn-primary" />
    </form>
  </div>
</div>