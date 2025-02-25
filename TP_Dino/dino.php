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
        <?php require '../Tools.php' ?>
        <main>
            <h2>Créer ton dino !</h2>
            <form id="formDino" method="POST" action="#">
                <?php
                $tools = new Tools();

                echo "<div>";
                $tools->createInput("number", "lifeDino", "Point of life : ", "HP", null, true );
                echo "</div>";
                echo "<div>";
                $tools->createInput("number", "damageDino", "Damage : ", "Damage", null, true );
                echo "</div>";

                echo "<div>";
                $tools->createRadio("genderDino", ["Male", "Female"], "Gender : ");
                echo "</div>";

                echo "<div>";
                $tools->createSelect("typeDino", [1 => "Tyrex", 2 => "Triceratops"], "Race : ");
                echo "</div>";

                echo "<div>";
                $tools->createTextArea("textAreaDino", 15, 45, "Resume story : ");
                echo "</div>";

                echo "<div>";
                $tools->createInput("submit", "submitDino", "Create my dino", null, "Create" );
                echo "</div>";

                ?>
            </form>

            <?php
            if (isset($_POST["submitDino"]))
            {
                echo "<h2>Mon dino !</h2>";

                echo '<div id="myDinoDiv"><p>';
                    $myDino = null;
                    switch ($_POST["typeDino"])
                    {
                        case 1:
                            $myDino = new Tyrex($_POST["lifeDino"], $_POST["damageDino"], $_POST["genderDino"] === "Male");
                            break;
                        case 2:
                            $myDino = new Triceratops($_POST["lifeDino"], $_POST["damageDino"], $_POST["genderDino"] === "Male");
                            break;
                        default:
                            echo "Dino Inconnu : " . $_POST["typeDino"];
                            break;
                    }
                    echo '</p></div>';
            }
            ?>

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