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

/*$a = 0;            ---------Compteur PHP---------          
while ($a < 100) { 
    echo "J'aime le PHP <br>"; 
    $a++; 
}
*/
/*
$T = 0;

while ($T < 150) {
    $T += 1;

    if ($T % 3 == 0) {
        continue;
    }
    echo "$T \n";

}
*/

            ?>



<?php




//$tableau1 = array ("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre",);

$tableau2 = array (
    "Janvier" => 31,
    "Février" => 28,
    "Mars" => 31,
    "Avril" => 30,
    "Mai" => 31,
    "Juin" => 30,
    "Juillet" => 31,
    "Août" => 31,
    "Septembre" => 30,
    "Octobre" => 31,
    "Novembre" => 30,
    "Décembre" => 31
);

//sort($tableau1);
?>
<table border="2">
    <th>Mois</th>
<?php
foreach($tableau2 as $key => $value)
{
    echo "<th>".$key." : ".$value." jours</th>";
}

?>
</table>














        </body>
    </html>