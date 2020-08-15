<?php
session_start(); 
include("connect_database.php");
$_SESSION['login_ok_etud'] == false;
$_SESSION['login_ok_encad'] == false;
$_SESSION['login_ok_Ese'] == false;
$_SESSION['login_ok_admin'] == false;
if (isset($_POST['submit']))
     {
        $username= $_POST["identifiant"];
        $password= $_POST["mot_de_passe"];
        $query="select nom_encad from encadrant where cin_encad='" . $username . "' and mdp_encad='". $password ."'";
        $result1=  mysqli_query($connect, $query);
        $count1 = mysqli_num_rows($result1);
        if ($count1==1){
            $_SESSION['login_ok_encad'] = true;
            $_SESSION["cin_encad"] = strtoupper($username);
            $_SESSION["mdp_encad"] = $password;
            header('Location: page_encadrant.php');
        }
        else
        {
            $query="select nom_etud  from etudiant where cne_etud='" . $username . "' and mdp_etud='". $password ."'";
            $result2=  mysqli_query($connect, $query);
            $count2 = mysqli_num_rows($result2);
            if ($count2==1){
                $_SESSION['login_ok_etud'] = true;
                $_SESSION["cne_etud"] = strtoupper($username);
                $_SESSION["mdp_etud"] = $Bienvenuepassword;
                
                header('Location: page_etudiant.php');    
            }
            else 
            {
                if($username=='admin' && $password=='admin'){
                $_SESSION['login_ok_admin'] = true;
                header('Location: page_admin.php'); }
                else
                {
                $query="select Nom_entreprise  from entreprise where Nom_entreprise='" . $username . "' and mdp_Ese='". $password ."'";
                $result3=  mysqli_query($connect, $query);
                $count3 = mysqli_num_rows($result3);
                if ($count3==1){
                    $_SESSION['login_ok_Ese'] = true;
                    $_SESSION["Nom_entreprise"] = strtoupper($username);
                    $_SESSION["mdp_Ese"] = $password;
                    header('Location: page_Ese.php');}

                else{echo "</br> <h4> mot de passe ou identifiant incorrect..!!!</h4>";}
                }
            }
        }
    }
?>

<!DOCTYPE html>
<html>

   
    <style>
       
        body {
        line-height: 1;
        -webkit-text-size-adjust: none;
        background: #fff;
                zoom: 85%;
                background-image: url(Images/Background.png);
        background-size: cover;
        background-position: bottom;
        background-attachment: fixed;
        background-repeat: no-repeat;
                
    }
        
        h4{
            color: red;
            position:absolute;
            display: inline;
            top: 240px;
            left: 570px;
            z-index: 2;
        }
        input[type=text]{
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=password]{
            width: 50%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 50%;
            background-color:#6C2DC7;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: rgba(192,192,192,0.5);
            padding: 20px;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -275px;
            margin-top: -180px;
            opacity: 1;
 
        }
        
        figure{
            text-align: center;
            margin-top: -19px;
            margin-bottom: 0px;  
        }
    
    </style>
    
    <body>
        
        <div>
        <figure id="ensias"><img width="130" height="130" src="Images/Logo%20ENSIAS.png"> </figure>
        <form method="POST" action="">
        <input type="text" id="username" name="identifiant" placeholder="Identifiant">

        <input type="password" id="password" name="mot_de_passe" placeholder="Mot de passe">

        <input type="submit" name="submit" value="Valider">
        </form>
        </div>
    </body>

</html>
