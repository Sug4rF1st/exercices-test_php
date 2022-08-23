<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/style.css">

    <title>Document</title>

</head>

<body>

<p>Exercice 1 : Trouver le numéro de semaine de la date suivante : 14/07/2019</p>
<hr>

    <?php 
    
        $date=explode('-','2019-07-14');
        echo date('W', mktime(0,0,0,$date[1], $date[2], $date[0])); 
        
    ?>

<hr>
<p>Exercice 2 : Combien reste-t-il de jours avant la fin de votre formation ?</p>
<hr>

<table>
    <?php
    
        $dateActuel = date ("d-m-Y");
        echo "\n";
        $dateFormation = date("31-08-2022");
        $diff  = abs(strtotime($dateActuel) - strtotime($dateFormation));

        $Years  = floor($diff / (365 * 60 * 60 *24));
        $months = floor(($diff - $Years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));
        $days   = floor(($diff - $Years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));

        echo $Years." Années, ".$months. " Mois et ".$days." Jours"; 
        
    ?>
</table>

<hr>
<p>Exercice 3 : Comment déterminer si une année est bissextile ?</p>
<hr>

<?php
/*
$annee3 = 2000;
$annee4 = DateTime::createFromFormat('Y', $annee3)->format('L') === "1";
var_dump ($annee4);
*/
?>

<?php

function bissextile($annee) {
	if( (is_int($annee/4) && !is_int($annee/100)) or is_int($annee/400)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

$annee2 = 1950;

echo 'Tableau des années bissextiles depuis ' . $annee2 . '<br>';

for($annee2; $annee2<=date('Y'); $annee2++) {
	if(bissextile($annee2)) {
		echo '<strong>' . $annee2 . ' : Bissextile</strong><br>';
	} else {
		echo $annee2 . ' : Non bissextile<br>';
	}
}

echo '<hr/>' . date('Y') . ' ';
echo bissextile(date('Y')) ? 'est' : 'n\'est pas';
echo ' bissextile.';

?>

<hr>
<p>Exercice 4 : Montrez que la date 32/17/2019 est erronée.</p>
<hr>

<?php

$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "32/17/2019";

if (preg_match($datePattern, $date))
{
    echo "Date ".$date." valide.<br>";
}
else
{
    echo "Date ".$date." erronée.<br>";
}

?>

<hr>
<p>Exercice 5 : Afficher l'heure courante sous cette forme : 11h25.</p>
<hr>

<?php

    echo date("H");
    echo ("h");
    echo date("i");

?>

<hr>
<p>Exercice 6 : Ajoutez 1 mois à la date courante.</p>
<hr>

<?php

echo date("d/m/Y", strtotime("+1month"));

?>

<hr>
<p>Exercice 7 : que s'est-il passé le 1000200000 ?</p>
<hr>

<?php

    echo date("d/m/Y", 1000200000); 

?>

</body>

</html>