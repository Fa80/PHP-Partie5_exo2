<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>PHP Partie5_Exo2</title>
</head>
<body>
    <?php
// Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.

    $mois = array('janvier', 'fevrier', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
    //J'initialise ma variable $mois avec tous les mois de l'année. Je mets array pour dire que c'est un tableau( un tableau commence toujours par 0).
     echo $mois[2];  //Avec cette methode, il faut mettre un chiffre à l'intérieur des crochets pour afficher le mois correspondant.
//Le tableau commence par 0 et le mois de mars étant le 3 eme de la liste donc je mets le chiffre 2.







?>
</body>
</html>
