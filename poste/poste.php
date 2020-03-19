<?php
require '../bdd/Database.php';
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
        <title>¤ TP Reco ~ La Poste ¤</title>
    </head>
    <body>
    <?php include '../header.php' ?>
    <main>
        <div class="container-poste">
            <div class="container-coordonnee">
                <?php include 'story15.php' ?>
            </div>
            <div class="container-enveloppe">
                <div class="enveloppe-recto">
                    <div class="stamp"></div>
                    <span class="confidential" >Confidentiel</span>
                    <div class="container-destinataire">
                        <p>Nom Prenom</p>
                        <p>Adresse </p>
                    </div>

                </div>
                <div class="enveloppe-verso">
                    <div class="enveloppe-tri">
                    <div class="container-expediteur">
                        <p>Nom Prenom</p>
                        <p>Adresse </p>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
    <?php include '../footer.php' ?>
    </body>
</html>