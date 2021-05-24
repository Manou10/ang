<?php
include("connexion.php");
include("calcul.php");
$pseudo=$_SESSION['pseud'];
$password=$_SESSION['mdp'];
$ref=0;
  
$sql= "INSERT INTO client VALUES ('%s','%s','%s','%s')";

$sqli=sprintf($sql,$ref,$pseudo,$password,$points);

    mysqli_query($connexion,$sqli);
    
    header('location:result.php');
?>