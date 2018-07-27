<?php
/*Déclaration de la fonction calcul avec deux paramètre*/
function calcul($number1, $number2){
  if($number1 < $number2){/*Condition avec 1er nombre plus petit*/
    return 'le premier nombre est plus petit que le second';
  } elseif($number1 > $number2) {/*Condition avec 1er nombre plus grand*/
    return 'le premier nombre est plus grand que le second';
  } else {/*Condition deux nombre identiques*/
    return 'les deux nombres sont identiques';
  }
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
      <?php
      /*Affichage du calcul avec affectation des deux paramètres*/
      echo calcul(18911891891564189561561891561895619156961698689615648969819818941969897,5892218);
       ?>
    </p>
  </body>
</html>
