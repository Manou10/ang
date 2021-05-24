<?php
session_start();

?>
<?php
 
 date_default_timezone_set('GMT');
$heures   = 0;  
$minutes  = 0;   
$secondes = 4;   

$annee = date("Y");  
$mois  = date("m");  
$jour  = date("d"); 

$redirection = 'partie.php';

 
$secondes = mktime(date("H") + $heures,
                        date("i") + $minutes,
                            date("s") + $secondes,
                            $mois,
                            $jour,
                            $annee
                            ) - time();
?>
<!doctype html>
<html >
    <head>
  <meta charset="utf-8">
  <title>Verbe Anglais </title>
  <script type="text/javascript">
var temps = <?php echo $secondes;?>;
 
function CompteaRebour(){

  var rad = document.forms[0];
  var txt = "";
  var i;
  for (i = 0; i < rad.length; i++) {
    if (rad[i].checked) {
      txt =  rad[i].value ;
    }
  }

  temps-- ;
  j = parseInt(temps) ;
  h = parseInt(temps/3600) ;
  m = parseInt((temps%3600)/60) ;
  s = parseInt((temps%3600)%60) ;
  
 if ((s == 0 && m ==0 && h ==0)) {
   
   s='GO';
   url = "<?php echo $redirection;?>"
   Redirection(url)
   }
document.getElementById('minutes').innerHTML=  (s<10 ? +s : s)  ;
}
function Redirection(url) {
setTimeout("window.location=url", 500)
}
</script>
         <link rel="stylesheet" href="resume.css">
    </head>
    
    <body >
    <?php if(isset($_GET['success'])){ ?>
  <?php { ?>
  <p style="color:green"> Inscription reussie!! </p>
    <?php }?>
  <?php }?>

  <h1 style="color:blue"> USER: <?php echo $_SESSION['pseud']; ?>  </h1>

  <form action="jeu.php?id=1" method="post">
  <h1> LEVEL: </h2>
  <p> 
  <div>
    <input type="radio" id="myRadio" name="check"  value="1" >
    <label for="coding">BEGINNER</label>
  
    <input type="radio"  id="myRadio" name="check"   value="2">
    <label for="music">INTERMEDIET</label>

    <input type="radio" id="myRadio" name="check"  value="3">
    <label for="music"> ADVANCED</label>
    </p>
  
  <p>  <input type="submit" value="VALIDER" size="50"> </p>

</form>
<?php
$tab= array();
$tab[0]=" ";
$tab[1]="BEGINNER";
$tab[2]="INTERMEDIATE";
$tab[3]="ADVANCED";
?>
<?php if(isset($_GET['id'])) { ?>
<?php
$_SESSION['choice']=$_POST['check'];
 
?>
<h1> LEVEL: <?php echo $tab[$_SESSION['choice']] ?> </h1>
<button type="button"  onclick="setInterval('CompteaRebour()',1000); myFunction()"> START A GAME</button> 

<div id="minutes" style="font-size: 36px;"></div></span>

<?php } ?>

 
  <h1><a href="logout.php">DECONNEXION </a> </h1>
  <h1><a href="classement.php">CLASSEMENT ACTUELLE </a> </h1>


<script>
function myFunction() {
  var rad = document.forms[0];
  var txt = "";
  var i;
  for (i = 0; i < rad.length; i++) {
    if (rad[i].checked) {
      txt =  rad[i].value ;
    }
  }
  document.getElementById("order").value = "LEVEL :  " +txt;
}
</script>
    </body>
</html>
