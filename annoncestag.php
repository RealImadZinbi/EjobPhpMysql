<!DOCTYPE html>
<html>
<head>
     <style>
     body{background-color: lightgrey;}
     h2{text-align: center;}
     p{text-align: center;}
     </style>
</head>
<body>
  
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=authentication", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e){}

$requete = $conn->query('SELECT * FROM deposer');
 echo '<table border="2">';
  echo '<tr><td>Nom</td><td>Prenom</td><td>Titre</td></tr>';
while ($data = $requete->fetch()) {

  echo '<tr><td>'.$data['Nom'].'</td>';
  echo '<td>'.$data['Prenom'].'</td>';
  echo '<td>'.$data['Titre'].'</td>';
}
echo '</table>';
$requete->closeCursor();



?>


</body>
</html>
