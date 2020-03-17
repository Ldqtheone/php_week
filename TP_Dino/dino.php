<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>¤ TP Reco ~ Dino ¤</title>
    <meta name="author" content="Roman CLAVIER">
</head>
<body>
<?php include '../header.php' ?>
<?php require 'Tyrex.php' ?>
<?php require 'Triceratops.php' ?>
<main>
    <h2>Créer ton dino !</h2>
    <form method="POST" action="#" id="formDino">
        <?php
        require 'Tools.php';
        $tools = new Tools();

        echo "<div>";
        $tools->CreateInput("number", "lifeDino", "Pts de vie : ", "PH");
        echo "</div>";
        echo "<div>";
        $tools->CreateInput("number", "damageDino", "Dégats : ", "PA");
        echo "</div>";

        echo "<div>";
        $tools->CreateInputRadio("sexDino", true, "Mâle");
        $tools->CreateInputRadio("sexDino", false, "Femelle");
        echo "</div>";

        echo "<div>";
        $tools->CreateSelect("typeDino", ["Tyrex", "Triceratops"]);
        echo "</div>";

        echo "<div>";
        $tools->CreateTextArea("textAreaDino", "Résumé du combat : ");
        echo "</div>";

        echo "<div>";
        $tools->CreateInputSubmit("validDino", "Créer mon dino");
        echo "</div>";

        if (!empty($_POST))
        {
            echo '<div id="myDinoDiv"><p>';
            $myDino = null;
            switch ($_POST["typeDino"])
            {
                case "Tyrex":
                    $myDino = new Tyrex($_POST["lifeDino"], $_POST["damageDino"], $_POST["sexDino"]);
                    break;
                case "Triceratops":
                    $myDino = new Triceratops($_POST["lifeDino"], $_POST["damageDino"], $_POST["sexDino"]);
                    break;
            }
            echo '</p></div>';
        }
        ?>
    </form>
    <h2>Combat de dino !</h2>

    <?php
    $tyrex = new Tyrex(500, 50, true);
    $triceratops = new Triceratops(600, 40, false);

    $tyrex->attackSpecial($triceratops);
    $triceratops->getLife();

    $tyrex->attackDouce($triceratops);
    $triceratops->getLife();

    $triceratops->attackMortel($tyrex);
    $tyrex->getLife();
    ?>
</main>
<?php include '../footer.php' ?>
</body>
</html>