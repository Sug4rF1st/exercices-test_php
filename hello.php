<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="styleshee" href="/style.css">

    <title>Inclusion de fichiers PHP</title>

</head>

<body>

<?php
if (file_exists("fonction.php")){
    include("fonction.php");
}
else {

}
?>

<script src="js/scripts.js"></script>

</body>

</html>