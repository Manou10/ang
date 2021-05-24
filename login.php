<?php
include("connexion.php");
session_start();
$_SESSION['pseud']=$_POST['psd'];
$_SESSION['mdp']=$_POST['mdp'];

$log=  mysqli_query($connexion,'SELECT * from client ');
      
 while($resultat= mysqli_fetch_assoc($log))
{
  if ($_SESSION['pseud']==$resultat['pseudo'] && $_SESSION['mdp']==$resultat['mot_de_passe'])
      {
          header('location:jeu.php');
          break;
      }
  else
  {
        header('location:exo.php?error=1');
  }   
}  
?>