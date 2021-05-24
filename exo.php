 
<!doctype html>
<html >
    <head>
  <meta charset="utf-8">
  <title>Verbe Anglais </title>
 
         <link rel="stylesheet" href="resume.css">
    </head>
    <body>
    <form action="login.php" method="POST">
  <p> <h1> Connectez Vous : <input type="text" name="psd"/> <input type="password" name="mdp" /> <input type="submit" value="Connecter" /> <h1> </p>

  <?php if(isset($_GET['error'])){ ?>
  <?php { ?>
  <p style="color:red"> mot de passe ou nom d'utilisateur invalide </p>
    <?php }?>
  <?php }?>
  </form>
  <h1 style="margin-left:400px"> OU</h1>
  <h1> <a href="exo.php?id=1"> S'INSCRIRE</a></h1>

  <?php if(isset($_GET['id'])){ ?>
  <?php { ?>
  <form action="traitement.php" method="POST">
                <h2>PSEUDO:   <input type="text" name="psd"/> </h2>
                <h2>MOT DE PASSE:   <input type="password" name="mdp"/> </h2>
                <input type="submit" value="S'inscrire" />
    </form>
    <?php }?>
  <?php }?>

  <h1><a href="index.php">RETOUR </a> </h1>
    
    </body>
</html>
