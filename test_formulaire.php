<!DOCTYPE html>

<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>

</head>

<body>

<form action="<?php print $_SERVER["PHP_SELF"] ?>"method="post">
  <input type="text" name="zoneDeTexte" size="40" maxlength="40">
  <input type="submit" name="btnEnvoyer" value="envoyer">
</form>

<?php
    echo $_SERVER['PHP_SELF'];
?>
    <input type="submit" name="delete" value="Supprimer">
    <input type="submit" name="create" value="Créer">
    <input type="submit" name="update" value="Modifier">

    <?php
    if ( isset( $_POST['update'])) { // mise à jour
        echo "mise a jour";
    } elseif ( isset($_POST['delete'])) {
        echo "suppression";
    } elseif ( isset($_POST['create'])) {
        echo "Création";
    }
?>

</body>

</html>