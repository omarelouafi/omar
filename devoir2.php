OMAR ELOUAFI

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OMAR ELOUAFI</title>
    <style> div.container { display:inline-block; }</style>
  </head>
  <body>
<h2><u>ex1.php</u></h2>
<?php
function chinetoarray($car, $string){
  return print_r(explode($car,$string));
}
echo chinetoarray(" ", "this is okay i guess");
?>

<br><br><br><br>
<hr>
<br><br><br><br>
<h2><u>ex2.php</u></h2>


<?php

echo'<table border="solid">';
echo'<tr style="background-color: cyan;">';
echo'<td>Numéro de commande</td>';
echo'<td>Numéro de Client</td>';
echo'<td>Date de commande</td>';
echo'<td>Désignation article</td>';
echo'<td>Quantité</td>';
echo'<td>Prix Unitaire(MAD)</td>';
echo'<td>Date de livraison</td>';
echo'<td>Adress client</td>';
echo'</tr>';

$fic=fopen("commandes.txt","a+");
while($li=fgets($fic)){
$tab=explode("|", $li);

echo'<tr>';
for($i=0;$i<count($tab);$i++){if(preg_match('|CLI1001|',$tab[$i])) echo'<td>'.$tab[$i].'</td>';}
echo'</tr>';
}
echo'</table>';

fclose($fic);
?>


<br><br><br><br>
<hr>
<br><br><br><br>
<h2><u>ex3.php</u></h2>





  </body>
</html>
