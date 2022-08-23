<?php
function writeMessage($text) {
    $html = "<h1>".$text."</h1>";

    echo $html;
}
?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Inclusion de fichiers PHP</title>

</head>

<body>

<?php
$message = "Bienvenue à l'AFPA !";

writeMessage($message);
?>

<br>

<?php
writeMessage("Bonjour tout le monde !");
?>

</body>

</html>