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

    $text = ucfirst("bonjour monde cruelle");

    echo $text;
    ?>

    <hr>

    <?php

$a = $b = 2;

function somme() { 
   global $a, $b;
   $c = $a + $b; 
} 

somme(); 

echo $b."<br>";

    ?>

    <hr>

    <?php

function Test() { 
    $a=0; 
    echo $a."<br>"; 
    $a++; 
 } 
 
 // Appel de la fonction (2 fois)
 Test(); 
 Test(); 

    ?>

<hr>

<?php

function Test1 () 
{ 
   static $a=0; 
   echo "$a<br />"; 
   $a++;
} 

// Appel de la fonction (3 fois)
Test1(); 
Test1(); 
Test1(); 

?>

<?php
function lien($lien, $titre){

    echo"<a href='.$lien.'>$titre</a>";
} 

lien('http://www.reddit.com', "Reddit Hug")
?>
<hr>


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