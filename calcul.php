<?php


$L02=$_POST['L02']; $L42=$_POST['L42'];
$L03=$_POST['L03']; $L43=$_POST['L43'];
$L04=$_POST['L04']; $L44=$_POST['L44'];

$L11=$_POST['L11']; $L51=$_POST['L51'];
$L12=$_POST['L12']; $L52=$_POST['L52'];
$L13=$_POST['L13']; $L53=$_POST['L53'];

$L22=$_POST['L22']; $L62=$_POST['L62'];
$L23=$_POST['L23']; $L63=$_POST['L63'];
$L24=$_POST['L24']; $L64=$_POST['L64'];

$L31=$_POST['L31']; $L71=$_POST['L71'];
$L32=$_POST['L32']; $L72=$_POST['L72'];
$L33=$_POST['L33']; $L73=$_POST['L73'];

session_start();
$points=0;
 
if($L02==$_SESSION['colonne2'][0]){$points++;}; if($L11==$_SESSION['colonne1'][1]){$points++;};
 if($L03==$_SESSION['colonne3'][0]){$points++;};  if($L12==$_SESSION['colonne2'][1]){$points++;}; 
 if($L04==$_SESSION['colonne4'][0]){$points++;};  if($L13==$_SESSION['colonne3'][1]){$points++;};

 if($L22==$_SESSION['colonne2'][2]){$points++;}; if($L31==$_SESSION['colonne1'][3]){$points++;};
 if($L23==$_SESSION['colonne3'][2]){$points++;};  if($L32==$_SESSION['colonne2'][3]){$points++;}; 
 if($L24==$_SESSION['colonne4'][2]){$points++;};  if($L33==$_SESSION['colonne3'][3]){$points++;};

 if($L42==$_SESSION['colonne2'][4]){$points++;}; if($L51==$_SESSION['colonne1'][5]){$points++;};
 if($L43==$_SESSION['colonne3'][4]){$points++;};  if($L52==$_SESSION['colonne2'][5]){$points++;}; 
 if($L44==$_SESSION['colonne4'][4]){$points++;};  if($L53==$_SESSION['colonne3'][5]){$points++;};

 if($L62==$_SESSION['colonne2'][6]){$points++;}; if($L71==$_SESSION['colonne1'][7]){$points++;};
 if($L63==$_SESSION['colonne3'][6]){$points++;};  if($L72==$_SESSION['colonne2'][7]){$points++;}; 
 if($L64==$_SESSION['colonne4'][6]){$points++;};  if($L73==$_SESSION['colonne3'][7]){$points++;};

 $_SESSION['pts']=$points;
?>