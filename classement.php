<?php
session_start();
 include("connexion.php");
 

 $sql = "select pseudo,max(score)as score_maximum from client group by pseudo,mot_de_passe";
$result = mysqli_query($connexion, $sql);

?>
<!doctype html>
<html >
    <head>
  <meta charset="utf-8">
  <title>Verbe Anglais </title>
  
 
         <link rel="stylesheet" href="resume.css">
    </head>
    <body >
        <h1> CLASSEMENT </h1>
    <table border="1">
        <tr>
            <th>PSEUDO</th>
            <th>MEILLEUR SCORE</th>
        </tr>
    <?php while($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['pseudo'] ?></td>
            <td><?php echo $row['score_maximum'] ?></td>
        </tr>
    <?php } ?>
        </table>
    <p><a href="jeu.php">Retour</a></p>
    </body>
</html>

