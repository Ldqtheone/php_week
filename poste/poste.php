<?php
    require '../bdd/Database.php';
    require '../Tools.php';
    require 'Postal.php';
    $database = new Database("php_week");
    $tools = new Tools();
    $envelope = new Postal();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>¤ TP Reco ~ La Poste ¤</title>
    </head>
    <body>
    <?php include '../header.php' ?>
    <main>
        <div class="container-poste">
            <div class="container-coordonnee">
                <?php include 'story15.php' ?>
            </div>
            <?php $envelope->displayEnvelope();?>
            <?php $envelope->displayLetter();?>
        </div>
    </main>
    <?php include '../footer.php' ?>
    </body>
</html>