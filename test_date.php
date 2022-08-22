<!DOCTYPE html>

<html lang="fr">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

</head>

<body>

<?php
echo time();
?>
<hr>
<?php
echo "Nous sommes le " . date("D/d/M/m/y");
?>
<hr>
<?php
echo date("H:i:s");
?>
<?php
$oDate = new DateTime();
var_dump($oDate);
?>
<hr>
<?php
$datePattern = "/^[0-9]{4}-[0-1][0-9]-[0-3][0-9]$/";
$date = "2015-12-06";

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
<?php 

$dateActuel = date("d-m-Y");
echo "\n";
$dateFormation = date("31-08-2022");
$diff  = abs(strtotime($dateActuel) - strtotime($dateFormation));

$Years=floor($diff/(365*60*60*24)); // Pour obtenir l’année, 365 jours * 60 minutes * 60 secondes * 24 heures, puis diviser par la différence ($diff). //
$months= floor(($diff-$Years*365*60*60*24)/(30*60*60*24)); // Pour obtenir les mois on soustrait(-) la différence($diff) avec l'année($Years) puis 30 jours * 60 minutes * 60 secondes * 24 heures, puis / 365 jours * 60 minutes * 60 secondes * 24 heures. //
$days=floor(($diff-$Years*365*60*60*24-$months*30*60*60*24)/(60*60*24)); // Pour obtenir les jours, 60 minutes * 60 secondes * 24 heures puis / 365 jours * 60 minutes * 60 secondes * 24 heures puis / 30 jours * 60 minutes * 60 secondes * 24 heures. //

echo $Years." Années,  ".$months." Mois et ".$days." Jours";

?>
<hr>
<?php
function bissextile($annee) {
	if( (is_int($annee/4) && !is_int($annee/100)) or is_int($annee/400)) {
		return TRUE;
	} else {
		return FALSE;
	}
}

$annee2 = 1950;

echo 'Tableau des années bissextiles depuis ' . $annee2 . '</font><br>';

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

<?php

    echo date("H:h");
?>
<hr>

<?php
$vieux_timestamp = mktime(13, 45, 26, 2, 5, 1998);
echo 'Le timestamp du 05/02/1998 à 13h 45min 26s était : ' . $vieux_timestamp;
?>

<hr>

<?php
echo date("d/m/Y", strtotime("+1month"));

?>



</body>

</html>