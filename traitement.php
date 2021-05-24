<?php
include("connexion.php");
session_start();
$_SESSION['pseud']=$_POST['psd'];
$_SESSION['mdp']=$_POST['mdp'];

$id=0;
$sc=0;

$sql= "INSERT INTO client(reference,pseudo,mot_de_passe,score) VALUES ('%s','%s','%s','%s')";

$sqli=sprintf($sql,$id,$_SESSION['pseud'],$_SESSION['mdp'],$sc);

    mysqli_query($connexion,$sqli);

    header('location:jeu.php?success=1');
      

?>