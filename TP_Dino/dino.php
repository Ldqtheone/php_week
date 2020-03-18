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
            <form id="formDino" method="POST" action="#" id="formDino">
                <?php
                require 'Tools.php';
                $tools = new Tools();


                echo "<div>";
                $tools->createInput("number", "lifeDino", null, "Point of life : ");
                echo "</div>";
                echo "<div>";
                $tools->createInput("number", "damageDino", null, "Damage : ");
                echo "</div>";

                echo "<div>";
                //$tools->createRadio("sexDino", true, "Male");
                //$tools->createRadio("sexDino", false, "Female");
                $tools->createRadio(["Male", "Female"], "Sex : ", "sexDino");
                echo "</div>";

                echo "<div>";
                $tools->createSelect("typeDino", ["Tyrex", "Triceratops"], "Race : ");
                echo "</div>";

                echo "<div>";
                //$tools->CreateTextArea("textAreaDino", "Resume story : ");
                $tools->createTextArea("textAreaDino", 15, 45, "Resume story : ");
                echo "</div>";

                echo "<div>";
                $tools->createInput("submit", "submitDino", "Create_Dino", null);
                //$tools->CreateInputSubmit("validDino", "Create my dino");
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
                        case "Tyrex":
                            $myDino = new Tyrex($_POST["lifeDino"], $_POST["damageDino"], $_POST["sexDino"] === "Male");
                            break;
                        case "Triceratops":
                            $myDino = new Triceratops($_POST["lifeDino"], $_POST["damageDino"], $_POST["sexDino"] === "Male");
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