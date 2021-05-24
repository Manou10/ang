<?php
session_start();
 include("connexion.php");
 $pseudo=$_SESSION['pseud'];
$password=$_SESSION['mdp'];

 $sql = "select max(score) as maximum from client where pseudo='$pseudo' and mot_de_passe='$password' ";
$result = mysqli_query($connexion, $sql);
$row = mysqli_fetch_assoc($result);

$sql2="select count(pseudo) as nb_partie from client where pseudo='$pseudo' and mot_de_passe='$password'";
$result2 = mysqli_query($connexion, $sql2);
$row2 = mysqli_fetch_assoc($result2);
?>
<!doctype html>
<html >
    <head>
  <meta charset="utf-8">
  <title>Verbe Anglais </title>
 
         <link rel="stylesheet" href="resume.css">
    </head>
    <body>
    <h1 style="color:blue"> USER: <?php echo $_SESSION['pseud']; ?>  </h1>

 <p> <h1> VOTRE SCORE:  <?php echo $_SESSION['pts'] ?> </h1> </p>

 <p> <h1>  MEILLEUR SCORE:  <?php echo $row['maximum'] ?> </h1> </p>

 <p> <h1>  NOMBRE DE PARTIE JOUE:  <?php echo $row2['nb_partie']-1 ?> </h1> </p>

<h1><a href="jeu.php">RECOMMENCER </a> </h1>
  
    </body>
</html>

