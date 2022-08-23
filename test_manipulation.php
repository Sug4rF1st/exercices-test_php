<?php

//                                -------------ouvrir un fichier et érire dedans---------

$on = "Bonjour le monde";
$off = fopen("essai.txt","a");

fputs($off, $on);
fclose($off);

/*

// On déclare une variable dont la valeur (contenu) sera écrite dans le fichier
$myVar = "Bonjour le monde";

// Ouverture en écriture seule 
$fp = fopen("essai.txt", "a"); 

// Ecriture du contenu ($myVar) 
fputs($fp, $myVar); 

// Fermeture du fichier
fclose($fp);

*/

?>

<?php

//                           ----------afficher sous forme de codage-----------

$fp = fopen("style.css", "r"); 

while (!feof($fp)) 
{ 
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} 

/*
// Ouverture en lecture seule  
$fp = fopen("essai.txt", "r"); 

// Boucle jusqu'à la fin du fichier
while (!feof($fp)) 
{ 
    // Lecture d'une ligne, le contenu de la ligne est affecté à la variable $ligne  
    $ligne = fgets($fp, 4096); 
    echo $ligne."<br>"; 
} 
*/


?>

<?php

//                        ------------compteur texte en php (première version)------------

$fichier = fopen("moncompteur.txt", "r+");
$visiteurs = fgets($fichier);
$visiteur++;
fseek($fichier,0);
fputs($fichier,$visiteurs);
fclose($fichier);
echo "$visiteurs personnes sont passées par ici";

/*

// On ouvre le fichier moncompteur.txt
$fichier = fopen("moncompteur.txt","r+");

// on lit la première ligne du fichier, le résultat est stocké dans la variable $visiteurs
$visiteurs = fgets($fichier);

// on ajoute 1 au nombre de visiteurs
$visiteurs++;

// on se positionne au début du fichier
fseek($fichier,0);

// on écrit le nouveau nombre dans le fichier
fputs($fichier,$visiteurs);

// on referme le fichier moncompteur.txt
fclose($fichier);

// on indique sur la page le nombre de visiteurs
echo "$visiteurs personnes sont passées par ici";

*/

?>

<?php

//                      ---------------compteur texte en php (deuxième version)-------------

$visiteurs = file_get_contents("moncompteur.txt");
$visiteurs++;

file_put_contents("moncompteur.txt", $visiteurs);
print("$visiteurs personnes sont passées par ici");

/*
// déclaration de variable
$visiteurs = file_get_contents("moncompteur.txt");

// ajout +1
$visiteurs++;

// on indique sur la page le nombre de visiteur
file_put_contents("moncompteur.txt", $visiteurs);

// on affiche le nombre de visiteurs sur la page
print("$visiteurs personnes sont passées par ici");

*/

?>

