BINOME: OMAR ELOUAFI, JAMAL AIT NOUHE

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>OMAR ELOUAFI, JAMAL AIT NOUHE</title>
    <style> div.container { display:inline-block; }</style>
  </head>
  <body>
    <h2><u>ex1.php</u></h2>
    <h1><center>delice des fruits et legumes</center></h1>
    <br><br><br><br>
    <center>
    <?php
    $images = array ( '/images/1.jpg', '/images/2.jpg', '/images/3.jpg', '/images/13.jpg', '/images/23.jpg', '/images/13.jpg');
    shuffle($images);
    for($i=0;$i<3;$i++){
      echo '<div class="container">';
      echo "\t" . '<img src="' . $images[$i] . '"   height="200" width="200" hspace="20"/>';
      echo '</div>';
      }
    ?>
    </center>

    <br><br><br><br>
    <hr>
    <br><br><br><br>
    <h2><u>ex2.php</u></h2>


    <?php
    	$tab=fopen("members.txt","rb");

     	$tab1=fgets($tab);
    	$tab2=fgets($tab);
    	$tab3=fgets($tab);
      $l1=explode("|",$tab1);
    	$l2=explode("|",$tab2);
    	$l3=explode("|",$tab3);

    	echo '<table border="solid">';

    		echo'<tr>';
    			echo'<th>Numero ID</th>';
    			echo'<th>Order</th>';
    			echo'<th>Date de commandes</th>';
    			echo'<th>Produit</th>';
    			echo'<th>quantite</th>';
    			echo'<th>Prix</th>';
    		echo'</tr>';

        echo'<tr>';
        for($i=0;$i<count($l1);$i++){echo'<td>'.$l1[$i].'</td>';}
        echo'</tr>';

        echo'<tr>';
        for($i=0;$i<count($l2);$i++){echo'<td>'.$l2[$i].'</td>';}
        echo'</tr>';

        echo'<tr>';
        for($i=0;$i<count($l3);$i++){echo'<td>'.$l3[$i].'</td>';}
        echo'</tr>';

        echo'</table>';
       ?>

       <br><br><br><br>
       <hr>
       <br><br><br><br>
       <h2><u>ex3.php</u></h2>


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

       $fic=fopen("members.txt","a+");
       while($li=fgets($fic)){
       $tab=explode("|", $li);

       echo'<tr>';
       for($i=0;$i<count($tab);$i++){echo'<td>'.$tab[$i].'</td>';}
       echo'</tr>';
       }
       echo'</table>';

       fclose($fic);
       ?>

  </body>
</html>
