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

<p>Exercice 1 : Ecrivez une fonction qui permette de générer un lien.</p>

<?php
function lien($lien, $titre){

    echo"<a href='.$lien.'>$titre</a>";
} 

lien('http://www.reddit.com', "Reddit Hug")
?>
<hr>
<p>Exercice 2 : Ecrivez une fontion qui calcul la somme des valeurs d'un tableau</p>

<?php

$tableau1 = array(4, 3, 8, 2);
echo"sum($tableau1) = " . array_sum($tableau1) . "\n";

?>
<br><br>
<hr>
<p>Exercice 3 : Créer une fonction qui vérifie le niveau de complexité d'un mot de passe.</p>

<?php

function format_mdp($mdp)
{
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);
	
	if(!$majuscule or !$minuscule or !$chiffre or strlen($mdp) < 8)
	{
		return false;
	}
	else 
		return true;
}

if (format_mdp("TopSecret42") != true)
{
	echo "Format non correct";	
}
else 
	echo "Format correct";
?>

</body>

</html>