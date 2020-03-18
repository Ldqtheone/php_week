<?php
    require 'Database.php';
    require '../Tools.php';
    $database = new Database("php_week");
    $tools = new Tools();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>¤ TP Reco ~ BDD ¤</title>
    </head>
    <body>
        <?php include '../header.php' ?>
        <main>
            <h3>Accès aux contacts :</h3>
            <a href="story13.php">Voir mes contacts</a>
            <?php include 'story12.php' ?>
            <br/>
            <?php include 'story14.php' ?>
        </main>
        <?php include '../footer.php' ?>
    </body>
</html>