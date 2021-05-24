<?php
session_start();
include("data.php");
$tableau= array_rand($tab,8);
for($a=0 ; $a<8 ;$a++)
{
  $_SESSION['colonne1'][$a]= $tab[$tableau[$a]][0];
  $_SESSION['colonne2'][$a]= $tab[$tableau[$a]][1];
  $_SESSION['colonne3'][$a]= $tab[$tableau[$a]][2];
  $_SESSION['colonne4'][$a]= $tab[$tableau[$a]][3];
}
?>
<?php
$tab= array();
$tab[0]=" ";
$tab[1]="BEGINNER";
$tab[2]="INTERMEDIATE";
$tab[3]="ADVANCED";
?>
 
<?php
//beginner 1= 21 sec
//intermediet 1= 14sec
//advanced 1= 9 sec
 $choix=$_SESSION['choice'];

 function leveled($c)
 {

      $min=0;
  if($c==1)
  {
   $min=8;
  }
  if($c==2)
  {
   $min=5;
  }
  if($c==3)
  {
  $min=3;
  }
        return $min;
 }
?>

<?php
 date_default_timezone_set('GMT');
$heures   = 0;   
$minutes  =  leveled($choix); 
$secondes = 0/*$sec*/;   

$annee = date("Y");   
$mois  = date("m");  
$jour  = date("d");  
 
$redirection = 'traitement_result.php';

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
var timer =setInterval('CompteaRebour()',1000);
function CompteaRebour(){

  temps-- ;
  j = parseInt(temps) ;
  h = parseInt(temps/3600) ;
  m = parseInt((temps%3600)/60) ;
  s = parseInt((temps%3600)%60) ;
  document.getElementById('minutes').innerHTML= 
                                                (m<10 ? "0"+m : m) + ' mn : ' +
                                                (s<10 ? "0"+s : s) + ' s ';
if ((s == 0 && m ==0 && h ==0)) {
  document.getElementById("myForm").submit();
   clearInterval(timer);
   url = "<?php echo $redirection;?>"
   Redirection(url)
}
}
function Redirection(url) {
setTimeout("window.location=url", 500)
}
</script>
         <link rel="stylesheet" href="resume.css">
    </head>
    <body onload="timer">
    <h1> LEVEL: <?php echo $tab[$_SESSION['choice']] ?> </h1>
    <div id="minutes" style="font-size: 36px;"></div> 

    <h1 style="color:blue"> USER: <?php echo $_SESSION['pseud']; ?>  </h1>
    <form action="traitement_result.php" method="post" id="myForm">


<p><input type="text" value="<?php echo  $_SESSION['colonne1'][0] ?> " /> <input type="text" name="L02" /> 
   <input type="text"  name="L03" />  <input type="text"  name="L04"/> </p>

 <p><input type="text" name="L11" /> <input type="text" name="L12" /> 
   <input type="text"  name="L13" />  <input type="text"  value="<?php echo  $_SESSION['colonne4'][1] ?> "  /> </p>

   <p><input type="text" value="<?php echo  $_SESSION['colonne1'][2] ?> " /> <input type="text" name="L22" /> 
   <input type="text"  name="L23" />  <input type="text"  name="L24"/> </p>

 <p><input type="text" name="L31" /> <input type="text" name="L32" /> 
   <input type="text"  name="L33" />  <input type="text"  value="<?php echo  $_SESSION['colonne4'][3] ?> "  /> </p>

   <p><input type="text" value="<?php echo  $_SESSION['colonne1'][4] ?> " /> <input type="text" name="L42" /> 
   <input type="text"  name="L43" />  <input type="text"  name="L44"/> </p>

 <p><input type="text" name="L51" /> <input type="text" name="L52" /> 
   <input type="text"  name="L53" />  <input type="text"  value="<?php echo  $_SESSION['colonne4'][5] ?> "  /> </p>

   <p><input type="text" value="<?php echo  $_SESSION['colonne1'][6] ?> " /> <input type="text" name="L62" /> 
   <input type="text"  name="L63" />  <input type="text"  name="L64"/> </p>

 <p><input type="text" name="L71" /> <input type="text" name="L72" /> 
   <input type="text"  name="L73" />  <input type="text"  value="<?php echo  $_SESSION['colonne4'][7] ?> "  /> </p>

   <input type="submit" value="VALIDER REPONSE" />

   </form>
   
    </body>
</html>

