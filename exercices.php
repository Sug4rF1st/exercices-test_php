<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

</head>

<body>

<?php

echo "Exercice 1<br> <br>";

$T = 1;

while ($T < 150) {
    echo "$T \n";
    $T += 2;
}
/*
$T = 0;

while ($T < 150) {
    $T += 1;

    if ($T % 2 == 1) {
        echo "$T \n";
        continue;
    }

}
*/

?>
<br>
<br>
<?php

echo "Exercice 2<br> <br>";

$E = 0;

while ($E < 500) {
    echo "Je dois faire des sauvegardes régulières de mes fichiers. <br>";
    $E++;
}

?>
<br>
<?php

echo "Exercice 3<br> <br>";

?>

<table border="2">
    
<?php
echo"<th></th>";
for($table=0; $table <=12; $table++){
    echo"<th>".$table."</th>";
}

for ($table1 = 0; $table1 <= 12; $table1++){
    
    echo ("<tr><th>".$table1."</th>");
        for($table2 = 0; $table2 <= 12; $table2++){
            $p = $table1 * $table2;
            echo ("<td>$p</td>");
            }
    
    }
?>
</tr>
</table>










</body>

</html>